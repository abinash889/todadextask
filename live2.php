<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/prism.css">
<script src="assets/prism.js"></script>

<div class="container">
	<h1>PHP</h1>
	<hr />
	<p>Please mention what's wrong and correct the code.</p>
	<h4>Question: What's wrong with the below lines of code? </h4>
	<pre>
		<code class="language-php">
$username = $_GET['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
		</code>
	</pre>
</div>
<div class="container">
	<h4>Answer:</h4>
	<pre>
		<code class="language-php">
Here we have to first check whether we are getting data from $_GET['username'] or not 
		</code>
	</pre>
</div>
<div class="container">
	<h4>Question: What's wrong with the below lines of code? </h4>
	<pre>
		<code class="language-php">
$arr = [
	'a' => 'ABC',
	'b' => 'DEF',
	'c' => 'GHI',
	'd' => 'JKL',
	'e' => 'MNO',
];

$k = 'ab';
if ($arr[$k]) {
	var_dump($arr[$k]);
}
		</code>
	</pre>
</div>
<div class="container">
	<h4>Answer:</h4>
	<pre>
		<code class="language-php">
$arr = [
    'a' => 'ABC',
    'b' => 'DEF',
    'c' => 'GHI',
    'd' => 'JKL',
    'e' => 'MNO',
];

$k = 'ab';
if (array_key_exists($k, $arr)) {
    var_dump($arr[$k]);
}
		</code>
	</pre>
</div>
<div class="container">
	<h4>Question: What's wrong with the below lines of code? </h4>
	<pre>
		<code class="language-php">
$arr = [
	'a' => 'ABC',
	'b' => 'DEF',
	'c' => 'GHI',
	'd' => 'JKL',
	'e' => 'MNO',
];

$valid = false;
foreach ($arr as $key => $val) {
	if ($key == 'b' && $val = 'DEF') {
		$valid = true;
	}
}

if ($valid) {
	echo 'VALID';
} else {
	echo 'INVALID';
}
		</code>
	</pre>
</div>
<div class="container">
	<h4>Answer:</h4>
	<pre>
		<code class="language-php">
$arr = [
	'a' => 'ABC',
	'b' => 'DEF',
	'c' => 'GHI',
	'd' => 'JKL',
	'e' => 'MNO',
];

$valid = false;
foreach ($arr as $key => $val) {
	if ($key == 'b' && $val == 'DEF') {
		$valid = true;
	}
}

if ($valid) {
	echo 'VALID';
} else {
	echo 'INVALID';
}
		</code>
	</pre>
</div>
<div class="container">
	<h4>Question:What's wrong with the below lines of code?</h4>
	<pre>
		<code class="language-php">
$i = 10;
$count = 0;
while ($i < 10) {
	$count++;
}

echo $count;
		</code>
	</pre>
</div>
<div class="container">
	<h4>Answer:</h4>
	<pre>
		<code class="language-php">
$i = 0;
$count = 0;
while ($i < 10) {
	$count++;
	$i++;
}

echo $count;
		</code>
	</pre>
</div>
<div class="container">
	<h4>Question:What's wrong with the below lines of code (Yii2 framework)?</h4>
	<pre>
		<code class="language-php">
class ServiceController extends \xii\web\Controller
{
	//url service/test-result
	public function actiontestResult()
	{
		return $this->render('test-result');
	}

	//url service/convert-page
	public function ConvertPage()
	{
		return $this->render('convert-page');
	}
}
		</code>
	</pre>
</div>
