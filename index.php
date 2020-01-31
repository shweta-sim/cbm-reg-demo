<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Global - Registration</title>

<!-- Favicon -->
<link rel="icon" href="imgs/favicon.png" type="image/png" sizes="16x16">

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Animate CSS -->
<link rel="stylesheet" href="plugins/animate/animate.min.css"/>
</head>
<body>
<!-- ########## Wrapper Start ########## -->
<div class="wrapper"> 
  <!-- ########## Sidebar Start ########## -->
  <nav id="sidebar">
    <div class="btnCollapse"> <i></i> </div>
    <div class="sidebar-content">
      <h6 class="text-blue text-uppercase text-semibold mb1">CBM Global</h6>
      <ul class="nav flex-column mb4">
        <li class="nav-item"> <a class="nav-link" href="step1-registration-1.php"> <i><img src="imgs/icon-logo.svg"></i>
          <div><span>Step1</span>Registration</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-cb-license.png"></i>
          <div><span>Step2</span>Buy Cashback Licenses</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-select-product.svg"></i>
          <div><span>Step3</span>Select Product</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-checkout.svg"></i>
          <div><span>Step4</span>Checkout</div>
          </a> </li>
      </ul>
      <h6 class="text-blue text-uppercase text-semibold mb1">Setup Trading</h6>
      <ul class="nav flex-column">
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-registration.svg"></i>
          <div><span>Step1</span>Registration</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-kyc.svg"></i>
          <div><span>Step2</span>KYC</div>
          </a> </li>
        <li class="nav-item"> <span class="text-sm note">You will receive your account number</span> </li>
      </ul>
      <ul class="nav flex-column">
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-signing-lpoa.svg"></i>
          <div><span>Step3</span>Signing the LPOA</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-funding-account.svg"></i>
          <div><span>Step4</span>Funding Your Account</div>
          </a> </li>
        <li class="nav-item"> <a class="nav-link" href="#"> <i><img src="imgs/icon-account-activation.svg"></i>
          <div><span>Step5</span>Account Activation</div>
          </a> </li>
      </ul>
    </div>
  </nav>
  <!-- ########## Sidebar End ########## -->
  <!-- ########## Page Content Start ########## -->
  <div id="content">
    <div class="content-inner">
      <div class="btnCollapse"> <i></i> </div>
      <div class="container">
        <div class="row mb9 mb6-md">
          <div class="col-md-12 text-center">
            <div class="logo mb6 mb4-lg wow fadeInUp" data-wow-delay="100ms"><a href="index.php"><img src="imgs/logo.svg" class="img-fluid"></a></div>
            <h4 class="text-blue text-semibold text-center text-uppercase wow fadeInUp" data-wow-delay="200ms">Type of Account</h4>
          </div>
        </div>
        <div class="account-type" data-toggle="buttons">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-2 mb9-md wow fadeInLeft" data-wow-delay="300ms">
              <div class="btn"> <i><img src="imgs/icon-personal-account.svg"></i>
                <h5 class="mb1">Personal Account</h5>
                <p>You are one individual registering for one account.</p>
                <input type="radio" name="speed">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 mb4-md wow fadeInRight" data-wow-delay="300ms">
              <div class="btn"> <i><img src="imgs/icon-corporate-account.svg"></i>
                <h5 class="mb1">Corporate Account</h5>
                <p>You want to register under a business name.</p>
                <input type="radio" name="speed" checked>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ########## Page Content End ########## -->
</div>
<!-- ########## Wrapper End ########## --> 

<!-- jQuery JavaScript --> 
<script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script> 

<!-- Bootstrap JavaScript --> 
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Animate Script --> 
<script type="text/javascript" src="plugins/animate/animate.min.js"></script> 
<script type="text/javascript">
  new WOW().init();
</script> 

<!-- SVG Fill Script --> 
<script type="text/javascript" src="plugins/js/svg-img.js"></script> 

<!-- Sidebar Toggle Script -->
<script type="text/javascript">
  $(document).ready(function () {
    $('.btnCollapse').on('click', function () {
      $('.wrapper').toggleClass('active');
    });
  });
</script>

</body>
</html>