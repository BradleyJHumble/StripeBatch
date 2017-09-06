# StripeBatch
If you have many small charge amounts for the same customer, you can batch them together and charge them when the batch is sufficiently big, through a $0 subscription and adding invoice items to it. 
<br>
Link from Stripe suggesting this build => https://support.stripe.com/questions/does-stripe-support-microtransactions-and-will-my-fees-be-the-same
<br>
<br>
<p> Planning on using composer/packagist (duh), but will come back to this later. </p>
<br>
<p> going to require a database for the number system.</p>
<br>
<h2> The Intention </h2>
<br>
<p> The intention of this is to charge customers $1 for every service but because Stripe (and like every major online pos payment service) charge 2.9% plus a 30 cents charge; Because out of a dollar this charge makes up like 33% costs alone!</p>
<br>
<p> So after talking to stripe sales team they recommend setting up a system where you can charge them in a batch either monthly or right away</p>
<br>
<p> So im building it where either if the customer reaches up to 20 charge them $20 or by default if they have not use our service for past a week </p>
<br>
<p> We (a startup im active in) were thinking of just charging the customer more for the service since we can still be cheaper and provide a better service at $10 versus the current lowest rate at $17. So we might not use this build but regardless hope someone in the github community gets a use out of it</p>
<br>
<p> I have an active life style in College/Startup, so Im coming back to this in a few days</p>
