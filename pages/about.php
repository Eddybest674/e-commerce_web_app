<?php 
 session_start();
if(isset($_SESSION['user'])){ ?> 
 
 <?php } else{
        
        header("location:../login.php");//line 1-5 set the login seesion here
      } ?>
<?php include "../controller/Controller.php"; ?>

      
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="about_text">
                     <h3>Eddybest computers-Home of affordable and reliable computers </h3>
                     <p>Eddybest computers is an e-commerce website with specialty in selling quality and 
                           affordable gadget. With our quality products, we assure you of life of fullfilment free from worries.  </p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>



      <?php include "../controller/footer.php"; ?>

   </body>
</html>

