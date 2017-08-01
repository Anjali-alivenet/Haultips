<?php $this->load->helper('delivery_helper'); 

$this->load->helper('slider');

//$this->load->helper('getdetails');?>
<?php $this->load->helper('getdetails_helper'); ?>



<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!-->

<html lang="en">

<!--<![endif]-->

<head>

<!-- Meta -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php
	$sitedata = siteadmin(); 
	$this_url = substr($_SERVER['REQUEST_URI'], 1);
?>
<?php if(isset($pagedata)){ ?>
<!-- Place this data between the <head> tags of your website -->
<title><?php echo $pagedata[ '0']->title." - ".$sitedata[0]['site_title']; ?></title>
<meta name="description" content="<?php echo $pagedata[0]->meta_description; ?>" />
<meta name="keywords" content="<?php echo $pagedata[0]->meta_keywords; ?>" />
<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $pagedata['0']->title." - ".$sitedata[0]['site_title']; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo base_url().$this_url; ?>" />
<meta property="og:image" content="<?php echo $pagedata[0]->featured_img; ?>" />
<meta property="og:description" content="<?php echo $pagedata[0]->meta_description; ?>" />

<?php } else{ ?>

<!-- Place this data between the <head> tags of your website -->
<title><?php echo $sitedata[0][ 'tag_line']. " - ".$sitedata[0][ 'site_title']; ?></title>
<meta name="description" content="<?php echo $sitedata[0]['meta_description']; ?>" />
<meta name="keywords" content="<?php echo $sitedata[0]['meta_keywords']; ?>" />
<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $sitedata[0]['tag_line']." - ".$sitedata[0]['site_title']; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo base_url().$_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="<?php echo $sitedata[0]['site_logo']; ?>" />
<meta property="og:description" content="<?php echo $sitedata[0]['meta_description']; ?>" />
<?php } ?>

<meta name="ROBOTS" content="INDEX, FOLLOW" />
<meta name="googlebot" content="index, follow" />
<meta name="msnbot" content="index, follow" />
<meta name="YahooSeeker" content="index, follow" />

<meta name="google-site-verification" content="YVEYbhCjdKhx Yl9VslVM3fiHKVqf3Sj5nwuczNWw0Y" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>



<!-- css themes -->



<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/flexslider.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css" media="all" />

<link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/img/bg/haultips.png"/>

</head>

<body class="home-page">

<header class="header navbar-fixed-top" id="header">

  <div class="container">

    <h1 class="logo"> <a href="<?php echo base_url() ?>"><span class="text">HAULTIPS</span></a> </h1>

    <!--//logo-->

    <nav role="navigation" class="main-nav navbar-right">

      <div class="navbar-header">

        <button data-target="#navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

        <!--//nav-toggle--> 

      </div>

      <!--//navbar-header-->

      <div class="navbar-collapse collapse" id="navbar-collapse">



        <ul class="nav navbar-nav">

          <li class="active nav-item"><a href="<?php echo base_url() ?>">Home</a></li>

          <li class="nav-item"><a href="<?php echo base_url('aboutus') ?>">About us </a></li>

          <li class="nav-item"><a href="<?php echo base_url('communitysupport') ?>">Support</a></li>

          <li class="nav-item "><a href="<?php echo base_url('find') ?>">Deliveries</a></li>

         

	  <li class="nav-item "><a href="<?php echo base_url('shipping/newshipment') ?>">New shipment</a></li>

        

          <!--//dropdown-->

          <li class="nav-item"><a href="<?php echo base_url('howitworks') ?>">How it works</a></li>

         <?php if($this->session->userdata('cus_id')) { 



          $customer_detail=get_data_with_single_cond($this->session->userdata('cus_id'),'shipping_customer','customer_id');  

          ?>



           <li class="dropdown nav-item">

          <a href="#" class="dropdown-toggle name-app" data-toggle="dropdown" role="button" aria-expanded="false"><span class="prof-immgg">





           <?php if($customer_detail[0]['profile_image']!='') { ?>

        <img src="<?php echo base_url().'uploads/profile/'.$customer_detail[0]['profile_image'] ?>" height="30" width="30" alt="User">

        <?php } else { ?>

        <img src="<?php echo base_url().'uploads/profile/user168.png'?>" height="30" width="30" alt="User">

        <?php } ?>

          </span><?php echo $customer_detail[0]['first_name'] ?> <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">

            <li><a href="<?php echo base_url('shipping/dashboard') ?>"><i class="fa fa-tachometer"></i>  Dashboard</a></li>  

             <li><a href="<?php echo base_url('shipping/newshipment') ?>"><i class="fa fa-plus"></i>  New Shipment</a></li>

            <li><a href="<?php echo base_url('shipping-profile') ?>"><i class="fa fa-user"></i>  Profile</a></li>

            <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-power-off"></i>  Log out</a></li>

          </ul>

        </li>



        <?php } elseif($this->session->userdata('carr_cus_id')){

            $result1=get_data_with_single_cond($this->session->userdata('carr_cus_id'),'shipping_carrier','carrier_id');

           // print_r($result1);?>

        

        <li class="dropdown nav-item">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="prof-immgg">

            <?php if($result1[0]['profile_image']!='') { ?>

        <img src="<?php echo base_url().'uploads/profile/'.$result1[0]['profile_image'] ?>" height="30" width="30" alt="User">

        <?php } else { ?>

        <img src="<?php echo base_url().'uploads/profile/user168.png'?>" height="30" width="30" alt="User">

        <?php } ?>



          </span>

            <?php echo $result1[0]['first_name'] ?> <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">

            <li><a href="<?php echo base_url('carrier/dashboard') ?>"><i class="fa fa-tachometer"></i>  Dashboard</a></li>

               <li><a href="<?php echo base_url('find') ?>"><i class="fa fa-plus"></i>  Find Delivery</a></li>

            <li><a href="<?php echo base_url('carrier-profile') ?>"><i class="fa fa-user"></i>  Profile  </a></li>

            <li><a href="<?php echo base_url('login/carrier_logout') ?>"><i class="fa fa-power-off"></i>  Log out</a></li>

          </ul>

        </li>

        

       <?php }elseif($this->session->userdata('driver_sess_id')){

            $result=get_data_with_single_cond($this->session->userdata('driver_sess_id'),'carrier_driver','id');

            //print_r($result);?>

        

        <li class="dropdown nav-item">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="prof-immgg">

            <?php if(isset($result[0]['profile_image']) && $result[0]['profile_image']!='') { ?>

        <img src="<?php echo base_url().'uploads/profile/'.$result[0]['profile_image'] ?>" height="30" width="30" alt="User">

        <?php } else { ?>

        <img src="<?php echo base_url().'uploads/profile/user168.png'?>" height="30" width="30" alt="User">

        <?php } ?>



          </span>

            <?php echo $result[0]['driver_name'] ?> <span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu">

            <li><a href="<?php echo base_url('driver-dashboard') ?>"><i class="fa fa-tachometer"></i>  Dashboard</a></li>

               <li><a href="<?php echo base_url('driver-change-password') ?>"><i class="fa fa-plus"></i>  Change Password</a></li>

            <li><a href="<?php echo base_url('login/driver_logout') ?>"><i class="fa fa-power-off"></i>  Log out</a></li>

          </ul>

        </li>

        

       <?php }else { ?>



          <li class="nav-item"><a href="<?php echo base_url('login') ?>">Log in</a></li>

          <li class="nav-item nav-item-cta last"><a href="<?php echo base_url('register') ?>" class="btn btn-cta btn-cta-secondary _hover">Sign Up</a></li>

        

          <?php } ?>

        </ul>

        <!--//nav--> 

      </div>

      <!--//navabr-collapse--> 

    </nav>

    <!--//main-nav--> 

  </div>

  <!--//container--> 

</header>



<section>

  <div class="bg-slider-wrapper">

    

    

    <div class="bg-slider-wrapper">

            <div id="bg-slider" class="flexslider bg-slider">

                <ul class="slides">

                    <?php $homeslide=homeslider();?>

                    <?php foreach($homeslide as $homes): ?>

                    <li class="slide"><img src="<?php echo base_url() ?>sliderimages/<?=$homes['image'];?>" alt="mainslider" /></li>

                    <?php endforeach;?>



                </ul>

            </div>

        </div><!--//bg-slider-wrapper-->

    

  </div>

  <!--//bg-slider-wrapper--> 

</section>

<!--banner -->

