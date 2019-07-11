<?php  ob_start();
session_start();
require('vc/includes.php');
?>
<?php require('vc/common.php');?> 
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" href="app-assets/images/logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon.ico">
    <title>Eye Kandi Models</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/icon.css">
    
    
    <!-- BEGIN: VENDOR CSS-->    
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">   
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/vendors/noUiSlider/nouislider.min.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/eCommerce-products-page.css"> -->

    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">       
    <link rel="stylesheet" href="assets/css/jquery.modal.min.css">    

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/homedashboard.css"> 

       
    
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){                        
            $('#notice-table').dataTable({
                searching: false, lengthMenu:[5],lengthChange: false, paging: true, info: true,
            });
            $('#report-table').dataTable({
                searching: false, lengthMenu:[5],lengthChange: false, paging: true, info: true,
            });
            $('#support-table').dataTable({
                searching: false, lengthMenu:[5],lengthChange: false, paging: true, info: true,
            });
        });
    </script>

</head>



<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns sidebar-mini sidebar-collapse theme-dark  sidebar-expanded-on-hover has-preloader" style="display: none;">
    <!-- Pre loader
    To disable preloader remove 'has-preloader' from body
    -->
    <div id="loader" class="loader">
        <div class="loader-container">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>    