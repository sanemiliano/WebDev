<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$dir = $perra;
$a = scandir($dir);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Carousel</title>
</head>
<body>
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
  <div class="container">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">        
        <div class="carousel-inner">
          <?php 
          $cont = 0;
          foreach ($a as $aux){ 
            if(strpos($aux, '.jpeg')){
              if($cont == 0){
                $cont++;
            
          ?>
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo "images/".$aux ?>" width="100%" alt="<?php echo $aux ?>">
                </div>
          <?php   }else{ ?>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo "images/".$aux ?>" width="100%" alt="<?php echo $aux ?>">
                </div>
          <?php   } 
            }  
          }?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <hr>
        Select image to upload:
        <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required><br>
        <input type="submit" class="btn btn-success" value="Upload Image">
        <hr>
    </form>
  </div>
</body>
</html>