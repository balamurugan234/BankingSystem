<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking System</title>
	<link rel="stylesheet" href="CSS/index.css">
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
#top{
	border-radius: 15px  0px 0px 15px;
	border: none;
	box-shadow: 2px 2px 7px;
	width: 480px;
	padding: 15px 0px 15px 20px;
	font-family: georgia;
	font-size: 20px;
	background-color: darkgreen;
	color:white;
	position: absolute;
	top: 180px;
	right: 11px;
}
#mid{
	border-radius: 15px  0px 0px 15px;
	border: none;
	box-shadow: 2px 2px 7px;
	width: 430px;
	padding: 15px 0px 15px 20px;
	font-family: georgia;
	font-size: 20px;
	background-color: darkgreen;
	color:white;
	position: absolute;
	top: 260px;
	right: 11px;
	
}
#bot{
	border-radius: 15px  0px 0px 15px;
	border: none;
	box-shadow: 2px 2px 7px;
	width: 380px;
	padding: 15px 0px 15px 20px;
	font-family: georgia;
	font-size: 20px;
	background-color: darkgreen;
	color:white;
	position: absolute;
	top: 340px;
	right: 11px;
	
}
#top:hover,#mid:hover,#bot:hover{
	transition: .5s;
	transform: scale(1.04);
	box-shadow: 4px 2px 10px;
	color:white;
}
</style>
<div>
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
</div>
<div class="bg">
	<br>
	<center><h1><b>BASIC BANKING SYSTEM</b></h1><center>
	<ul class="list">
	    <li><a href="customer_list.php"><button id=top >CUSTOMER LIST</button></a></li>
	    <li><a href="customer_list.php"><button id="mid">START TRANSCATION</button></a></li>
	    <li><a href="transaction_history.php"><button id="bot">TRANSACTION HISTORY</button></a></li>
    </ul>
</div>
<div style="margin: 420px auto  0px auto; background-color: rgba(204, 201, 201, 0.911);">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>