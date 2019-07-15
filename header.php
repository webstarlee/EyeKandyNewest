<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Modern 2 | Materialize - Material Design Admin Template</title>
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.amazon{
  padding-left: 2px;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/css/pages/intro.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="materialize-admin-template-5.1/materialize-admin-template/app-assets/css/custom/custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">       
    <link rel="stylesheet" href="assets/css/jquery.modal.min.css"> 
    <!-- END: Custom CSS-->
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
    <script src="assets/js/jquery.canvasjs.min.js"></script>      
    <script src="assets/js/dataTables.min.js"></script>  
         
    <!-- <script src="app-assets/js/scripts/eCommerce-products-page.js" type="text/javascript"></script>  
    <script src="app-assets/vendors/noUiSlider/nouislider.min.js" type="text/javascript"></script> -->
    <script src="assets/js/customize.js"></script>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav style="background: linear-gradient(45deg, #0e0e0e, #272727) !important;" class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
          <div class="nav-wrapper">
            
            <ul class="navbar-list right">
              
              <li class="hide-on-med-and-down">
                <!-- <a id="log-out-renderhomepage-nav" class="btn btn-primary btn-lg mynavbar-btn" href="#">
                    <p class="contentforicon" href="#">Logout</p>
                    <i class="material-icons dp48 myicon-pos">person_outline</i>
                </a> -->
                <button id="log-out-renderhomepage-nav" style="margin-top: 10px; margin-right: 28px;" class="btn cyan waves-effect waves-light right" type="submit" name="action">Log Out<i style="line-height: 0px;" class="material-icons dp48 myicon-pos">person_outline</i></button>
              </li>  
              
            </ul>
            
            <!-- profile-dropdown-->
            
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <script type="text/javascript">
      $('#log-out-renderhomepage-nav').on("click", function(){
          window.location.replace("../logout.php");
          // location.reload(true);
      });
    </script>