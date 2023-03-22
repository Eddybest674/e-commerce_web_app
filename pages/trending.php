<?php 
session_start();
if(isset($_SESSION['user'])){ ?> 
 
 <?php } else{
        
        header("location:../login.php");//line 1-5 set the login seesion here
      } ?>


<?php 
include "../controller/Controller.php";
?>

<div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>TRENDING STORIES</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <?php include "../controlller/footer"; ?>