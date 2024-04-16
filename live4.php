<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/prism.css">
<script src="assets/prism.js"></script>
	<title>Document</title>
</head>
<body class="container m-0">
	<div>
	<h1>Server: Ubuntu</h1>
<hr />
<p>Write the command lines on Ubuntu server</p>
<ul>
	<li>1. How can mount /var/www/folder1 to /var/www/folder2</li>
	<li>2. How/where can redirect http to https</li>
	<li>3. How can backup database for every 4 hours</li>
	<li>4. Where to find the apache2 and mysql logs</li>
	<li>5. How can change MySQL root password</li>
</ul>
	</div>
	<hr>
	

	<div class="col-md-8">
		<h4>Answer 1.</h4>
	<pre >
	<code class="language-php">
sudo mount --bind /var/www/folder1 /var/www/folder2
	</code>
		</pre>
	</div>
	<div class="col-md-8">
		<h4>Answer 3.</h4>
	<pre >
	<code class="language-php">
	sudo crontab -e
	</code>
		</pre>
		<pre >
	<code class="language-php">
	0 */4 * * * /path/to/backup_script.sh
	</code>
		</pre>
	</div>
	<div class="col-md-8">
		<h4>Answer 4.</h4>
	<pre >
	<code class="language-php">
	Apache2 Error logs: /var/log/apache2/error.log
	Mysql Error log: /var/log/mysql/error.log
	</code>
		</pre>
	</div>
	<div class="col-md-8">
		<h4>Answer 5.</h4>
	<pre >
	<code class="language-sql">
	mysql -u root -p
	ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password';
	FLUSH PRIVILEGES;
	exit;
	</code>
		</pre>
	</div>

</body>
</html>
<!-- Write your answer below -->

