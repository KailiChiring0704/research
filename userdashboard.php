<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>
	<div class="container">
	<div class="header">
	</div>
		<div class="sidebar">
			<ul>
				<h1>1128 Tea & Cafe</h1>
				<li><a href="userdashboard.php">Dashboard</a></li>
				<li><a href="#">Analytics</a></li>
				<li><a href="#">Orders</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">Log-out</a></li>
			</ul>
		</div>
	</div>
	
</body>
    <style>
body{
	background-color: #f1f1f1;
}
.header{
	width:80vw;
	background-color:white;
	position:fixed;
	top: 1.5%;
	right: 1.5%;
	height: 10vh;
	box-shadow: 1px 1px 5px black;
}
.container {
	display: flex;
	height: 100vh;
}
.sidebar h1{
	text-align:center;
}
.sidebar {
	background-color: #333;
	flex-basis: 200px;
	color: #fff;
	padding: 20px;
	box-shadow: 1px 1px 5px black;
}

.sidebar ul {
	list-style-type: none;
	padding: 0;
}

.sidebar a {
	color: #fff;
	text-decoration: none;
	display: block;
	padding: 10px;
}

.sidebar a:hover {
	background-color: #555;
}


    </style>
</html>