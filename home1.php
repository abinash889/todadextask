<h1>Webhook API</h1>
<hr />
<p>e.g https://wwww.example.com/api/webhook-enpoint</p>
<ul>
	<li>1. Write a php function to detect webhook endpoint data (POST method, json response)</li>
	<li>2. Write data to webhook.txt file</li>
</ul>
<link rel="stylesheet" href="assets/prism.css">
    <script src="assets/prism.js"></script>
<!-- Write your answer below -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
			<pre>
  <code class="language-php">
  function webhook()
{
	if ($_SERVER('REQUEST_METHOD') == 'POST') {
		try {
			$json = file_get_contents('path://input');
			if (json_decode($json) != null) {
				$dataFile = fopen('files/webhook.txt', 'a');
				fwrite($dataFile, $json, PHP_EOL);
				fclose($dataFile);
				echo "successfully added in the webhook file";
			}
		} catch (\Throwable $th) {
			echo $th;
		}
	} else {
		echo "Method is not allowed.";
	}
}

//calling the function
webhook();
  </code>
</pre>
			</div>
		</div>
	</div>
</div>




