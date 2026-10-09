<?php $urlpage= basename($_SERVER['PHP_SELF']);
$active='';

?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
<div class="appBottomMenu">
  <div class="item <?php if($urlpage=='index.php'){echo'active';}?>"> <a href="index.php">
    <p> <i class="icon ion-md-home"></i> <span>Home</span> </p>
    </a> </div>
  <!-- <div class="item <?php if($urlpage=='search.php'){echo'active';}?>"> <a href="search.php">
    <p> <i class="icon ion-ios-search"></i> <span>Search</span> </p>
    </a> </div> -->
   <?php if(isset($_SESSION['frontuserid'])){?>
    <div class="item <?php if($urlpage=='gamedashboard.php'){echo'active';}?>"> <a href="gamedashboard.php">
    <p> <i class="fa fa-trophy" style="font-size:24px;color:black"></i> <span>Period</span> </p>
    </a> </div>
    
    <div class="item <?php if($urlpage=='login.php' || $urlpage=='signup.php' || $urlpage=='forgot-password.php' || $urlpage=='myaccount.php' || $urlpage=='recharge.php' || $urlpage=='transactions.php'){echo'active';}?>"> <a href="myaccount.php" class="icon toggleSidebar">
    <p> <i class="icon ion-md-person"></i> <span>Mine </span> </p>
    </a> </div>
    <?php }else{?>
  <div class="item <?php if($urlpage=='login.php' || $urlpage=='signup.php' || $urlpage=='forgot-password.php'){echo'active';}?>"> <a href="login.php" class="icon toggleSidebar">
    <p> <i class="icon ion-md-person"></i> <span>Mine </span> </p>
    </a> </div>
    <?php }?>
</div>