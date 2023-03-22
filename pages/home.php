<?php 
session_start();
if(isset($_SESSION['user'])){ ?> 
 
 <?php } else{
        
        header("location:../login.php");//line 1-5 set the login seesion here
      } ?>



<?php 

include "../controller/DBconnect.php";
include "../controller/Controller.php"; 

$sql= "SELECT * FROM products ORDER BY id DESC";

      $result = $connection->prepare($sql);
      $result->execute();
      $outcome = $result->fetchAll(pdo::FETCH_ASSOC);


?>





  
  <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Eddybest Computers </span> <br>Trands 2023</h1>
                     <p>A huge Computer collection for ever programmers </p>
                     <a class="read_more" href="products.php">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure style= "width: 300px; " ><img src="../images/lenovo.jpg" alt=""/></figure>
                     <figure style= "width: 300px; " ><img src="../images/laptops.jpg" alt="#"/></figure>

                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Available Products</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- project section -->
      <div id="project" class="project">
         <div class="container">
         <div class="row">
         <div class="product_main">


         <?php  foreach($outcome as $i => $display): ?> 
           
            
             
                  <div class="project_box ">
                     <div class="dark_white_bg" ><img src="products/<?php echo $display['images']; ?>" width="200%" ></div>
                    <a href="../pages/description.php?id=<?php echo $display['id']?>" > <h3><?php  echo $display['title'] ?></h3></a>
                     <h3>$<?php  echo $display['price'] ?> </h3>
                  </div>
                  
         <?php endforeach; //another method for writing foreach most especially with HTML ?>
 
              
               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      
      <?php include "../controller/footer.php"; ?>