<?php 
include_once 'database connection.php';
$query="select * from transactionhistory";
$result=mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking System</title>
	<link rel="stylesheet" href="CSS/customer_details.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        .btn-outline-success{
            border-color: rgb(255, 255, 255);
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-family: Times New Roman;
        }
        .table{
            width: 70%;
            margin: 50px auto auto 200px;
        }
        .table th{
            background: rgb(37, 37, 37);
            color: rgb(255, 255, 255);
        }
        h2{
            font-family: georgia;
            font-size: 35px;
            text-shadow: 2px 2px 7px;
            color: rgba(73, 72, 72, 0.911);
            margin: 20px auto auto ;
        }
    </style>
<nav class="navbar navbar-expand-sm navbar-light ">
	<a href="Home.html" class="bs">Banking System</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#togglemenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse flex-row-reverse" id="togglemenu">
	<ul class="navbar-nav">
		<li class="nav-item me-4">
			<a href="index.php"><button class="btn nav-item btn-outline-success">HOME</button></a>
		</li>
        <li class="nav-item me-4">
			<a href="https://www.thesparksfoundationsingapore.org/"><button class="btn nav-item btn-outline-success">ABOUT US</button></a>
		</li>
        <li class="nav-item me-4">
			<a href="https://www.thesparksfoundationsingapore.org/contact-us/"><button class="btn nav-item btn-outline-success">CONTACT US</button></a>
		</li>
	</ul>
</div>
</nav>
<div>
<h2><center>TRANSACTION HISTORY</center></h2>
<table class="table table-striped table-hover" width="70%">
    <tr>
	 	<th>S.No.</th>
        <th>From</th>
        <th>To</th>
        <th>Amount</th>
        <th>Date</th>
        <th>Time</th>
	</tr>
	<?php 
    while($row=mysqli_fetch_assoc($result)){
	 ?>
	<tr>
	 	<td><?php echo $row['S.No.'] ?></td>
        <td><?php echo $row['Sender'] ?></td>
        <td><?php echo $row['Receiver'] ?></td>
        <td><?php echo $row['Amount'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><?php echo $row['Time'] ?></td>
	 </tr>
	<?php 
    }
	 ?>
</table>
</div>
<div style="margin: 226px auto 0px auto;">
    <?php include 'footer.php'; ?>
</div>
</body>
</html>