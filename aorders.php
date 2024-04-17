<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<body>
<div class="title">
        <h1>Orders</h1>
    </div>
	<div class="container">
		<div class="sidebar">
			<ul>
				<li><a href="aanalytics.php">Analytics</a></li>
				<li><a href="aorders.php">Orders</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</div>
		<div class="content">
			<table>
				<thead>
					<tr>
						<th>No</th>
						<th>Time</th>
						<th>Price</th>
                        <th>Order</th>
                        <th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>3</td>
						<td>11:58AM</td>
						<td>₱29.00</td>
                        <td>Caramel Macchiato 25oz</td>
                        <td>Success</td>
					</tr>
					<tr>
						<td>2</td>
						<td>11:50AM</td>
						<td>₱49.00</td>
                        <td>Mocha Latte 22oz</td>
                        <td>Success</td>
					</tr>
					<tr>
                        <td>1</td>
                        <td>11:45AM</td>
                        <td>₱29.00</td>
                        <td>Americano 12oz</td>
                        <td>Success</td>
                    </tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
    <style>
.title{
    transform:translate(90%, 50px);
    width:20%;
    font-size:20px;
}
.container {
	display: flex;
	height: 100vh;
    transform:translate(0%, -50%);
}

.sidebar {
	background-color: #333;
	flex-basis: 200px;
	color: #fff;
	padding: 20px;
    transform:translate(0%, 40%);
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

.content {
	flex-grow: 1;
	padding: 20px;
    transform: translate(0%,70%);
    
}

table {
	width: 100%;
	border-collapse: collapse;
}

th, td {
	border: 1px solid #ccc;
	padding: 10px;
	text-align: center;
}

th {
	background-color: #f2f2f2;
    color:#00BFFF;
}
    </style>
</html>