<h1>Cronjob</h1>
<hr />
<p>Setup a cronjob to automatic send mail to responsible for webshop order</p>
<ul>
	<li>1. Write the command line how can setup this cronjob (path: /var/www/project/yii)</li>
	<li>2. Write an example code for CronController.php</li>
</ul>
<!-- Write your answer below -->

<style>
	code {
		background-color: lightgray;
		padding: 3px;
	}
	pre {
		background-color: lightgray;
		padding: 3px;
	}

	ul {
		list-style-type: none;
	}

	li {
		margin-top: 10px;
	}

	.nb {
		font-style: oblique;
		color: #e10000;
	}
</style>



<link rel="stylesheet" href="assets/prism.css">
    <script src="assets/prism.js"></script>
<!-- Write your answer below -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
			<h3>To setup a cron job we have to perform the following </h3>

<ul>
	<li>1. Open the cron tab by <code>crontab -e</code></li>
	<li>2. add the command <code>* * * * * php /var/www/project/yii cron/send-email-order-responsible</code><span class="nb">
			<p>It will run every minute of every hour, every day of the month, every month, and every day of the week. </p><span></li>
</ul>
			<h3>I have created the code for Laravel hope it will similar to YII</h3>

<p>in the CronJobController</p>
			<pre>
  <code class="language-php">
  public function OrderNotification()

{
	
	$orders = \App\Models\Order::with('customer')->where(['status' => 'pending'])->get(); 

	//This will get all the orders with customer details as we are getting with the relation 'customer' which we will defined in the order Models
	
foreach ($orders as $order) {
		$email = $order->customer->email; 
		$message = view('mailview')->render();
	Mail::html($html, function ($message) {
		  $message
			->to($order->customer->email)
			->subject('order Mail');
	});

	  //in this mail function body we have to send as a view file and subject we have to define the Mail function.
	}
}
  </code>
</pre>
			</div>
		</div>
	</div>
</div>
