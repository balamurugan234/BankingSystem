<?php 
include_once 'database connection.php';
$query="select * from customer";
$result=mysqli_query($con,$query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Banking System</title>
	<link rel="stylesheet" href="CSS/customer_list.css">
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
	<br>
<center><h2>CUSTOMER LIST</h2></center>
	<ul class="list">
	<?php 
    while($row=mysqli_fetch_assoc($result)){
	 ?>
		<li>
			<span class="photo"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>
			<span class="id"><?php echo $row['Id']; ?></span>
			<span class="name"><?php echo $row['Name']; ?></span>
			<span class="arrow"><a class="arw" href="customer_details.php? id=<?php echo $row['Id'] ;?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
  <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
</svg></a></span>
		</li>
	<?php 
    }
	?>
	</ul>
</div>
<br>
<div >
    <?php include 'footer.php'; ?>
</div>
</body>
</html>