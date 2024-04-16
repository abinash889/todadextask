<h1>MySQL</h1>
<hr />
<p>Table tbl_contents have 1M records with columns: id, cate_id, title, content, published(0,1), created_at, updated_at
	(model Content)</p>
<p>Table tbl_categories have 1M records with columns: id, name, published(0,1), created_at, updated_at (model Category)
</p>
<ul>
	<li>1. Write a mysql to find all the contents (title or content) matching the keyword "Computer on Module" are
		published (1), order by updated_at, limit 100 records.</li>
	<li>2. Write a mysql to find all the contents matching the category "CPU" are published (1), order by updated_at,
		limit 100 records.</li>
	<li>3. Please explain which fields in database should be indexed.</li>
</ul>
<!-- Write your answer below -->
<link rel="stylesheet" href="assets/prism.css">
<script src="assets/prism.js"></script>
<!-- Write your answer below -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4>Answer-1</h4>
			<pre>
			<code class=language-sql>
	SELECT * FROM tbl_contents
	WHERE (title LIKE '%Computer on Module%' OR content LIKE '%Computer on Module%')
	AND published = 1
	ORDER BY updated_at
	LIMIT 100;
			</code> 
</pre>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4>Answer-2</h4>
			<pre>
			<code class=language-sql>
	SELECT c.* 
	FROM tbl_contents c 
	JOIN tbl_categories cat ON c.cate_id = cat.id 
	WHERE cat.name = 'CPU' AND c.published = 1 
	ORDER BY c.updated_at 
	LIMIT 100;

			</code> 
</pre>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4>Answer-3</h4>
			<pre>
			<code class=language-html>
For indexing we have to consider the followings

1.tbl_contents.published 
2.tbl_contents.updated_at
2.ttbl_categories.name

			</code> 
</pre>
		</div>
	</div>
</div>