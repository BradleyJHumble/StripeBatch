namespace Cartalyst\Stripe\Tests;
use Mockery as m;
use Cartalyst\Stripe\Stripe;
use PHPUnit_Framework_TestCase;
class StripeTest extends PHPUnit_Framework_TestCase
{
    protected $stripe;
    public function setUp()
    {
        $this->stripe = new Stripe('stripe-api-key', '2014-06-17');
    }
    public function tearDown()
    {
        m::close();
    }
    public function it_can_create_a_new_instance_using_the_make_method()
    {
        $stripe = Stripe::make('stripe-api-key');
        $this->assertEquals('stripe-api-key', $stripe->getApiKey());
    }
    public function it_can_create_a_new_instance_using_enviroment_variables()
    {
        $stripe = new Stripe;
        $this->assertEquals(getenv('STRIPE_API_KEY'), $stripe->getApiKey());
        $this->assertEquals(getenv('STRIPE_API_VERSION'), $stripe->getApiVersion());
    }
    public function it_can_get_and_set_the_api_key()
    {
        $this->stripe->setApiKey('new-stripe-api-key');
        $this->assertEquals('new-stripe-api-key', $this->stripe->getApiKey());
    }
    public function it_throws_an_exception_when_the_api_key_is_not_set()
    {
        putenv('STRIPE_API_KEY');
        new Stripe;
    }
    public function it_can_get_and_set_the_api_version()
    {
        $this->stripe->setApiVersion('2014-03-28');
        $this->assertEquals('2014-03-28', $this->stripe->getApiVersion());
    }
    public function it_can_get_the_current_package_version()
    {
        $this->stripe->getVersion();
    }
    public function it_can_get_and_set_the_amount_converter()
    {
        $this->assertEquals('\\Cartalyst\\Stripe\\AmountConverter::convert', $this->stripe->getAmountConverter());
        $this->stripe->setAmountConverter('\\Cartalyst\\Stripe\\AmountConverter::convert');
        $this->assertEquals('\\Cartalyst\\Stripe\\AmountConverter::convert', $this->stripe->getAmountConverter());
    }
    public function it_can_create_requests()
    {
        $this->stripe->customers();
    }
    public function it_throws_an_exception_when_the_request_is_invalid()
    {
        $this->stripe->foo();
    }
}
