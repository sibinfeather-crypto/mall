<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include'head.php' ?>
<link rel="stylesheet" href="assets/css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<style>

.vcard {
 padding: 16px;
 background:#0288D1 !important;
}



 .logout{
        background-image: linear-gradient( #F5F5F5, #F5F5F5)!important;
}
.appHeader1 {
	background-color: #fff !important;
	border-color: #fff !important;
}
.appContent3 {
	background-color:#0288D1 !important;
	border-color: #0288D1 !important;
	padding:12px;
	border-radius:3px;
	font-size:14px;
}
.user-block img {
	width: 40px;
	height: 40px;
	float: left;
	margin-right:10px;
	background:#333;
}
.img-circle {
	border-radius: 50%;
}
.accordion .btn-link {
	box-shadow:none;
	padding:8px !important;
	margin:0px 0px;
	color: #333 !important;
	font-size: 16px;
	font-weight: normal;
	border-top:solid 1px #ccc;
}
.accordion .collapsed {
	border:none;
}
.accordion .show {
	border-bottom:solid 1px #ccc;
}
.accordion .sub-link {
	box-shadow:none;
	padding:8px !important;
	color: #333 !important;
	font-size: 14px;
	font-weight: normal;
	display:block;
}
.accordion .sub-link:hover {
color:#00F !important;
}
.accordion .btn-link:hover {
	background:#F5F5F5;
}
.accordion .btn-link {
	position: inherit;
}
 .accordion .btn-link::after {
 content: "\f107";
 color: #333;
 top: 8px;
 right: 9px;
 position: absolute;
 font-family: "FontAwesome";
 font-size:24px;
}
 .accordion .btn-link[aria-expanded="true"]::after {
 content: "\f106";
}
.light{
    height: 24px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 24px;}
.light1{
    height: 26px;
    padding: 0px 0px;
	margin: 5px 2px;
	border-radius: 20px;
width: 26px;}
.nameContainer {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
img {
    width: 25px;
    height: 25px;
}
</style>
</head>

<body>
<?php
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$selectruser=mysqli_query($con,"select * from `tbl_user` where `id`='".$userid."'");
$userresult=mysqli_fetch_array($selectruser);
$selectwallet=mysqli_query($con,"select * from `tbl_wallet` where `userid`='".$userid."'");
$walletResult=mysqli_fetch_array($selectwallet);
?>
<!-- Page loading -->
<div class="loading" id="loading">
  <div class="spinner-grow"></div>
</div>
<!-- * Page loading --> 

<!-- App Header -->
<div class="vcard">
  <div class="appContent3 text-white">
    <div class="row">
      <div class="col-12 mb-1">
       <!-- <div class="user-block float-right"> <img class="img-circle img-bordered-lg" src="assets/img/notification.png" style="background:white;margin-top:-20px;font-size:21px;height:30px;width:30px" height="2px" width="2px"> </div> -->
   
        
        </div>

        
     
      
      <div class="container">
  <div class="row align-items-start">

      
      
   
  </div>
  
  
    </div>
  </div>
</div>
</div>
<br>
<div style="margin-left : 10px">
        ID : <?php echo user($con,'mobile',$userid);?><br>
        Mobile : <?php echo sprintf("%06d",user($con,'mobile',$userid));?><br>
        Nick Name : <?php echo user($con,'mobile',$userid);?><br>
       Available Balance : <?php echo number_format(wallet($con,'amount',$userid), 2);?><br>
</div>
<div class="appContent1 mb-5">
  <div class="contentBox long mb-3">
    <div class="contentBox-body card-body"> 
      
      <!-- listview -->
      
      <div class="accordion" id="accordionExample">
          <!--<div class="card-header">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed">Bonus Records </a> </h2>
          </div> -->
     <!-- <div class="card-header">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed">Orders </a> </h2>
          </div> -->
          <!--<div class="card-header">
            <h2 class="mb-0"> <a href="transactions.php" class="btn btn-link collapsed">Transactions</a> </h2>
          </div> -->
          
          <div class="card-header">
            <div class="nameContainer">
          &nbsp; <i class="fa fa-calendar-check-o" style="font-size:21px"></i>
            <h2 class="mb-0"> <a href="login.php" class="btn btn-link collapsed">Sign in </a> </h2>
            </div>
        </div>
        <br>
       
        <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Orders.png">
            <h2 class="mb-0"> <a href="order.php" class="btn btn-link collapsed">Orders </a> </h2>
            </div>
        </div>
         <br>
        <div class="card-header">
           <div class="nameContainer">
           <img src="./assets/img/Icons/Promotion.png">
            <h2 class="mb-0"> <a href="promotion.php" class="btn btn-link collapsed"> Promotion </a> </h2>
          </div>
        </div>
         <br>
        <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Red Envelope.png">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed"> Red Envelope </a> </h2>
          </div> 
        </div>
         <br>
        <div class="card-header" id="headingThree">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Wallet.png">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Wallet </a> </h2>
        </div> 
        
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <a href="manualRecharge.php" class="sub-link"> Recharge </a>
         <a href="withdrawal.php" class="sub-link"> Withdrawal </a>
         <a href="transactions.php" class="sub-link"> Transactions </a>
        </div>
        </div>
         <br>
        <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Bank Card.png">
            <h2 class="mb-0"> <a href="manage_bankcard.php" class="btn btn-link collapsed"> Bank Card </a> </h2>
          </div> </div>
           <br>
        <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Address.png">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed"> Address </a> </h2>
          </div> 
        </div>
         <br>
        
        <div class="card-header" id="headingThree">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Account Security.png">
          <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseone"> Account Security </a> </h2>
        </div>
        <div id="collapseone" class="collapse">
      <a href="resetpassword.php" class="sub-link"> Reset Password </a>
        </div>
        </div>
         <br>
        <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/App Download.png">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsefour"> App Download </a> </h2>
            </div>
            <div id="collapsetwo" class="collapse">
            <a href="assets/SaphireClub.apk" class="sub-link"> Android Download </a>
           
          </div>
          </div>
           <br>
          <div class="card-header">
            <div class="nameContainer">
           <img src="./assets/img/Icons/Complaints.png">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed"> Complaints & Suggestions </a> </h2>
          </div> 
          </div>
           <br>
          <div class="card-header">
              <div class="nameContainer">
           <img src="./assets/img/Icons/About.png">
            <h2 class="mb-0"> <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix"> About Us </a> </h2>
          </div>
          
         <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
          <a href="privacy.php" class="btn btn-link collapsed"> Privacy Policy </a>
          <a href="riskagreement.php" class="btn btn-link collapsed">Risk Disclosure Agreement  </a>
         <!-- <a href="refund.php" class="btn btn-link collapsed">Refund Policy</a>
          <a href="terms-and-conditions.php" class="btn btn-link collapsed">Terms & Conditions</a>
          <a href="contact.php" class="btn btn-link collapsed">Contact Us</a>
          <a href="about.php" class="btn btn-link collapsed">About Us</a> -->
        </div> 
        </div>

       <!-- <div class="card-header">
            <h2 class="mb-0"> 
             <a href="https://t.me/myspo11" class="btn btn-link collapsed"><i class="fa fa-telegram text-primary" style="font-size:16px"></i>
           Join Telegram </a> </h2>
          </div> -->

      </div>
      
      <!-- * listview --> 
      
    </div>
  </div>
  
  <!-- app Footer -->
  <div class="text-center mt-4 "> <a href="logout.php" class="btn btn-sm  logout" style="width:200px; background-image: linear-gradient(
#29B6F6, 
#29B6F6);">Logout</a> </div>
  <!-- * app Footer --> 
  
</div>
<!-- appCapsule -->
<?php include("include/footer.php");?>
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