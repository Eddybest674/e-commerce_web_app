<?php include "../controller/Controller.php"; ?><br><br><br>
<?php 

include "../controller/DBconnect.php"; 
$id =$_GET['id'];
$sql= "SELECT description FROM products where id ='$id' ";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);
      ?>
      <?php  foreach($outcome as $i => $display): ?>
      <?php  echo $display['description']; ?>.<br>
      <?php  echo  "<a href= 'login.php'><button type='button' class='btn btn-primary btn-lg'>Pay Now</button></a>"; ?>


      <?php endforeach; //another method for writing foreach most especially with HTML ?>
 
 
 
 <?php include "../controller/footer.php"; ?> 

      
      
