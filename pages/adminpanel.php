<?php 
session_start();
if(isset($_SESSION['admin'])){ ?> 
 
 <?php } else{
        
        header("location:../adminlogin.php");//line 1-5 set the login seesion here
      } ?>


<?php 

include "../controller/DBconnect.php"; 

$sql= "SELECT * FROM products ORDER BY id DESC ";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
    <link rel="stylesheet"  href="style.css">
    <link rel ="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body style>

<nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar" style="background-color: skyblue;" >
  

<div class="container-fluid">
  <form class="d-flex" role="search">
  <script src="script.js"></script>

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    <a class="navbar-brand" style="color:white;" >Eddybest's Computers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div style="margin-left: 320px;"  class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">view statistics</a>
        </li>
          
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="home.php"></a>
        </li> 
        
        </li>
        
        
      </ul>
      </div>
</div>
  </div>
</nav><br>
<a href= "../adminlogin.php"><button type="button" class="btn btn-danger btn-lg">Logout</button></a>
<h1> Welcome Administrator </h1> <br> <br> <br>
<hr class="border border-danger border-2 opacity-50">
<a  href="add.php"  class="btn  btn-success">Add products</a> 
<a  href="members.php"  class="btn  btn-success">View Registered members</a>
<a  href="articles.php"  class="btn  btn-success">Post Article</a>

<hr class="border border-danger border-2 opacity-50">


<table class="table">

  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Title</th>
      <th scope="col">Price($)</th>
      
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
   
  <?php  foreach($outcome as $i => $display): ?> 
    <tr>
      <th scope="row"><?php $i +1 ?> </th>
      <td></td>
      <td><?php  echo $display['title'] ?></td>
      <td><?php  echo $display['price'] ?></td>
      
      <td>
      <?php echo "<td><a class='btn btn-sm btn-primary' href='edit.php?id=".$display['id']."'>Edit</a>"; ?>

     <?php echo "<td><a class='btn btn-sm btn-danger' href='delete.php?id=".$display['id']."'>Delete</a>"; ?>

      </td>

      
      
    </tr>


    <?php endforeach; //another method for writing foreach most especially with HTML ?>
 

  </tbody>
</table>










</body>
</html>