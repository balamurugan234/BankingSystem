<?php 
include'database connection.php';
$from = $_GET['id'];
$sql = "SELECT * from customer where id=$from";
$query =mysqli_query($con,$sql);
$row = mysqli_fetch_array($query);
 ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/customer_details.css">
</head>
<body>
<style>
.table{
    width: 30%;
    position:relative;
    margin: 30px;
    background-color:white;
    box-shadow: 2px 2px 5px;
    opacity: 70%;
    color: #000000;;
    font-weight: 500;
}
td:nth-child(1){
    padding-left:20px;
}
#bn{
    padding-left: 100px;
    padding-top: 30px;
    padding-bottom: 30px;
}
#bnr:hover{
    background:none;
}
form{
    width:33%; 
    margin: 20px auto 0px 365px; 
    padding-left:30px; 
    padding-right:30px; 
    padding-bottom:30px; 
    border-radius: 20px; 
    box-shadow: 2px 2px 8px;
    background-color:transparent;
    
}
.form-control{
    background:transparent;
    border:none; 
    border-bottom: 2px solid grey;
    color: black;
}
select{
    -webkit-appearance: menulist-button;
    color: black;
}

select:invalid {
    color: #636c88;
}
    </style>
<div class="bi">
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
<div id="cont">
<center><h2>CUSTOMER DETAILS</h2></center>
	<center><table class="table table-striped table-hover">
		<tr>
			<td class="id" width="30%">Id</td>
            <td class="colon" width="5%">:&nbsp</td>
			<td class="Id-n"><?php echo $row['Id']; ?></td>
        </tr>
        <tr>
			<td class="name" width="40%">Name</td>
            <td class="colon">:</td>
			<td class="Name-n"><?php echo $row['Name']; ?></td>
        </tr>
        <tr>
			<td class="email" width="25%">Email</td>
            <td class="colon">:</td>
			<td class="Email-n"><?php echo $row['Email']; ?></td>
        </tr>
        <tr>
			<td class="mobno" width="25%">Moblie Number</td>
            <td class="colon">:</td>
			<td class="Mobno-n"><?php echo $row['Mobile No.']; ?></td>
        </tr>
        <tr>
			<td class="balance" width="25%">Balance</td>
            <td class="colon">:</td>
			<td class="Balance-n">Rs.<?php echo $row['Balance']; ?>/-</td>
        </tr>
    </table></center>
        <center><button  class="btn btn-success" onclick="moneytransfer()">START TRANSACTION</button></center>

</div>
<div id="container" style="display:none">
    <h2 style="padding-top:30px"><center>TRANSACTION<center></h2>
    <?php include 'transfer_money.php'; ?>
</div>
</div>
<div style="margin: 96px auto  0px auto;">
    <?php include 'footer.php'; ?>
</div>
<script>
    function moneytransfer(){
            document.getElementById("container").style.display="inline";
            document.getElementById("cont").style.display="none";
    }
</script>
</body>
</html>