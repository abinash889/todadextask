<h1>FE: UI/UX</h1>
<hr />
<p>Write an example for build a table (#, Full Name, Email, Address, Company Name, Created At) 42 items use bootstrap, jquery</p>
<ul>
	<li>1. Show 20 items per page</li>
	<li>2. Search/Filter by Full Name/Email/Company Name (ajax)</li>
	<li>3. Paging (ajax)</li>
</ul>
<!-- Write your answer below -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/prism.css">
    <script src="assets/prism.js"></script>
</head>

<body>
	<div class="container mt-5">
		<h2>User Management</h2>
		<input type="text" id="searchInput" class="form-control mb-3" placeholder="Search by Name, Email, or Company">
		<table id="userTable" class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Company Name</th>
					<th>Created At</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<ul id="pagination" class="pagination"></ul>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="container">
	<div class="row">
		<div class="col-md-8">
		<pre>
		<code class="language-javascript">
		$(document).ready(function() {
			function fetchUsers(page = 1, search = '') {
				$.ajax({
					url: 'userfetch_url.php', 
					//doing a ajax call and getting result as commented below which is sent from the controller 
/*
		{
		"table_data": "<tr><td>1</td><td>John Doe</td><td>john@example.com</td><td>123 Main St</td><td>ABC Inc</td><td>2024-04-01</td></tr><tr>...</tr>",
		"pagination": "<li class='page-item'><a class='page-link' href='#' data-page='1'>1</a></li><li class='page-item'><a class='page-link' href='#' data-page='2'>2</a></li><li class='page-item'><a class='page-link' href='#' data-page='3'>3</a></li>",
		"total_pages": 3 
		}

		1.the table_data will come by looping through the tr as follows
			$users = all the user data is in this variable
			$tableData = '';
				foreach ($users as $user) {
					$tableData .= "<tr>";
					$tableData .= "<td>{$user['id']}</td>";
					$tableData .= "<td>{$user['full_name']}</td>";
					$tableData .= "<td>{$user['email']}</td>";
					$tableData .= "<td>{$user['address']}</td>";
					$tableData .= "<td>{$user['company_name']}</td>";
					$tableData .= "<td>{$user['created_at']}</td>";
					$tableData .= "</tr>";
				}

		here the total page is calculated by celi($totalrecords/$pagelimit);
		$total_page = celi(42/20) which will give 3 as result;
		the celi function will roundup the number.
					*/
					method: 'GET',
					data: {
						page: page,
						search: search
					},
					dataType: 'json',
					success: function(response) {
						$('#userTable tbody').html(response.table_data);
						$('#pagination').html(response.pagination);
					}
				});
			}

//fetching the user data by calling this function
			fetchUsers();

			$('#searchInput').on('keyup', function() {
				var search = $(this).val();
				fetchUsers(1, search);
			});
			$(document).on('click', '.pagination li a', function(e) {
				e.preventDefault();
				var page = $(this).attr('data-page');
				var search = $('#searchInput').val();
				fetchUsers(page, search);
			});
		});
		</code>
		</pre>
		</div>
	</div>
</div>
		
	

</body>

</html>