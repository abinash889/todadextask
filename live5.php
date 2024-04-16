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
	<h1>Git & Composer</h1>
	<hr />
	<h2>GIT cases</h2>
	<ul>
		<li>1. You are working on branch "abc" and have modified 3 files, now you need to switch to "main" branch to
			create another hotfix branch "hf/fix_bug_webshop_order_error". How can do that? please write step by step.
		</li>
		<li>2. You are done with branch "def", now you push merge code to "main" branch but have conflicted 2 files
			a.php and b.php, what should we do in this case?</li>
		<li>3. By mistake you was checkout a new branch from "dev" branch, and now when you merge code changes to "main"
			branch and there are many files modified. How can you solve this case?</li>
		<li>4. We have "dev", "uat", "main" branches. How can we have the latest code from "main" branch to "dev" and
			"uat" branches?</li>
	</ul>
<hr>
	<div class="col-md-8">
		<h4>Answer 1.</h4>
		<pre>
	<code class="language-git">
git add .
git commit -m "Your commit message"
git checkout main
git pull origin main
git checkout -b hf/fix_bug_webshop_order_error
	</code>
		</pre>
	</div>
	<hr>
	<div class="col-md-8">
		<h4>Answer 2.</h4>
		<p>Conflict files we can see it by following command</p>
		<pre>
	<code class="language-git">
git status
	</code>
</pre>
		<p>Then in that file you can see the conflict area as belwo</p>
		<pre>
	<code class="language-git">
	(<<<<<<<, =======, >>>>>>>)
	</code>
</pre>
	<P>Clear the conflict then floow the below steps</P>
	<pre >
	<code class="language-git">
	git add . 
	git commit -m "Conflict resloved"
	git push origin <--branchname-->
	</code>
	</div>
	<hr>
	<div class="col-md-8">
		<h4>Answer 3.</h4>
		<pre>
	<code class="language-git">
	git checkout main
	git merge mistake_branch
	git commit -m "Merge changes from mistake branch"
	git push origin main


	</code>
		</pre>
	</div>
	<div class="col-md-8">
		<h4>Answer 4.</h4>
		<pre>
	<code class="language-git">
	git checkout dev
	git pull origin main
	git commit -m "Merge latest changes from main into dev"
	git push origin dev
	</code>
		</pre>
		<p>Then we have to perform the following command</p>
		<pre>
	<code class="language-git">
	git checkout uat
git pull origin main
git commit -m "Merge latest changes from main into uat"
git push origin uat
	</code>
		</pre>
	</div>
	<hr>

	<h2>Composer cases</h2>
	<ul>
		<li>1. Write command line use to install composer for the "tinymce" to Yii2 framework.</li>
		<li>2. Write command line use to install composer for the "markdown" to Yii2 framework.</li>
		<li>3. While you install new library using composer, it have conflicted with composer.lock file. How can you
			solve it?</li>
	</ul>
	<div class="col-md-8">
		<h4>Answer 1.</h4>
		<pre>
	<code class="language-powershell">
	composer require 2amigos/yii2-tinymce-widget
	</code>
		</pre>
	</div>
	<div class="col-md-8">
		<h4>Answer 2.</h4>
		<pre>
	<code class="language-powershell">
	composer require cebe/yii2-markdown

	</code>
		</pre>
	</div>
</body>

</html>