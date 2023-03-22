
<?php include "../controller/DBconnect.php";
include "../controller/Controller.php"; 
 ?>

<form method="post" enctype="multipart/form-data">
  


<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
        <div class="mb-3" style="width: 30%">
    
      </div>
  
    </div>

</div>


<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
        <div class="mb-3" style="width: 48%">
        <input type="file"   aria-describedby="emailHelp" name="images">
   
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required>
    </div>
  


    
   

      </div>
  
    </div>

</div>





    <div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
        <div class="mb-3">
    <label  class="form-label">Article</label>
    <textarea cols="39" rows="26" type="text" class="form-control"  name="body" >

    </textarea>
    </div>

      
      </div>
  
    </div>

</div>


<div class="container">
    <div class="row">
        <div class="col-md-5">

        </div>
         
        <div>
<button type="submit" class="btn btn-success">Post</button>
</div>

      </div>
  
    </div>

</div>
</form>
<br>
<br>
<br>
<br>
<?php include "../controller/footer.php" ?>
