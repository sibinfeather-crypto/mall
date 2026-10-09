<?php
ob_start();
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css?v=2">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Bitter Mobile Template">
<meta name="keywords" content="bootstrap, mobile template, bootstrap 4, mobile, html, responsive" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>


<style>
.pleft {
	padding-left:3px;
}
.pright {
	padding-right:3px;
}
  .height{ height:40px; line-height:40px;}
.height .pageTitle{ line-height:2em;}

</style>
</head>

<body>
<?php include("include/connection.php");?>
<!-- Page loading -->

<!-- * Page loading --> 


<!-- App Capsule -->
<!-- <div id="appCapsule"> 
  
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pagebanner.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagebanner.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagebanner.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagebanner.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pagebanner.jpg" alt="Third slide">
    </div>
  </div>
</div> -->
  <!-- * Card Overlay Carousel -->
  
  <div class="appContent">
    <div class="sectionTitle mb-2"> 
      
      <!-- post list -->
      <!--<div class="vcard">
        <div class="row"> 
          
          <?php
	$i=0;
  $productQuery=mysqli_query($con,"select * from `tbl_product` where `status`='1'");
  while($productResult=mysqli_fetch_array($productQuery)){$i++;?>
          <div class="col-6 <?php if(($i%2)==0){echo"pleft";}else{echo "pright";}?>">
            <div class="vcard card"> <a href="productdetails.php?pid=<?php echo encryptor('encrypt', $productResult['id']); ?>" class="postItem">
              <div class="imageWrapper"> <img src="<?php echo $productResult['images'];?>" alt="image" class="image"> </div>
              <p class="text-center"><?php echo $productResult['name'];?></p>
              <footer>₹ <?php echo number_format($productResult['price'], 2);?></footer>
              </a> </div>
          </div>
          <?php }?>
         
          
        </div>
      </div> -->
      <div class="vcard">
      
        <div class="row"> 

        <div style=" width:100%;height: 60px;background-color:#2096D6"><br>
      <p style="color:white;font-size:21px">&nbsp;&nbsp;&nbsp;Amusebox</p>
  </div>

      <br> <br> <br>
 
  
</div>

      <div class="d-flex flex-row bd-highlight mb-3" style="background-color:#0097a7!important;border-radius:10px">
  <div class="p-2 bd-highlight"><img class="d-block w-100 imgsize" src="assets/img/1.webp" style="" ></div>
  <div class="p-2 bd-highlight" ><h3 style="color:white!important;font-weight:bold">Cover Fire: Offline Shooting Games</h3><br>
  <p style="color:white;font-weight:500">Your duty is to lead the battle and become the best shooter and sniper. Download now for free one of best offline shooting games on mobiles New mode: Sniper FPS Ops..</p>
  <div class="" >
  <button type="button" class="btn btn-success btn-sm float-right" style="background-color: #2096D6;border-radius:10px">START</button>
  </div>
  </div>
 
  
</div>

<div class="d-flex flex-row bd-highlight mb-3" style="background-color:#9c27b0!important;border-radius:10px">
  <div class="p-2 bd-highlight"><img class="d-block w-100 imgsize" src="assets/img/2.webp" style="" ></div>
  <div class="p-2 bd-highlight" ><h3 style="color:white!important;font-weight:bold">Critical Action :Gun Strike Ops - Shooting Game</h3><br>
  <p style="color:white;font-weight:500">Like the FPS shooting game? Critical Action:Gun Strike Ops is a 3d fps offline shooting game with tactical </p>
  <div class="" >
  <button type="button" class="btn btn-success btn-sm float-right" style="background-color: #2096D6;border-radius:10px">START</button>
  </div>
  </div>
 
  
</div>

<div class="d-flex flex-row bd-highlight mb-3" style="background-color:#039be5!important;border-radius:10px">
  <div class="p-2 bd-highlight"><img class="d-block w-100 imgsize" src="assets/img/3.webp" style="" ></div>
  <div class="p-2 bd-highlight" ><h3 style="color:white!important;font-weight:bold">Modern Strike : Multiplayer FPS - Critical Action</h3><br>
  <p style="color:white;font-weight:500">Ready to join the best first person shooter game 2020? JOIN THE BATTLE: Are you big FPS Game Fans? Call Of Battleground is a 3d first-person fps offline team shooting game for FPS crazy fans.Joi</p>
  <div class="" >
  <button type="button" class="btn btn-success btn-sm float-right" style="background-color: #2096D6;border-radius:10px">START</button>
  </div>
  </div>
 
  
</div>





        </div>

        </div>


      
     
      
    </div>
    
    <!-- app Footer --> 
    
    <!-- * app Footer --> 
    
  </div>
</div>
<!-- * appCapsule -->

<?php include("include/footer.php");?>

<!-- ///////////// Js Files ////////////////////  --> 
<!-- Jquery --> 
<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 
<!-- Bootstrap--> 
<script src="assets/js/lib/popper.min.js"></script> 
<script src="assets/js/lib/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="assets/js/plugins/owl.carousel.min.js"></script> 
<!-- Main Js File --> 
<script src="assets/js/app.js"></script>
</body>
</html>