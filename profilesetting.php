<?php require('./header.php');
        require('./sidebar7.php');
        // $vc = new Users();
        ob_start();
    require('vc/includes.php');
    $vc = new Users();
    $acceptace = $vc->checkFirstLoginStatus();

    $quote = $vc->get_quote();
    $admin_name = $quote['admin_name'];
    $comment = $quote['comment'];

    $notice = $vc->get_notice();
 ?>  
<div id="main">
        <!--Page Content-->
        <main id="pageContent" class="page has-sidebar">
            <div class="container-fluid relative animatedParent animateOnce" style="padding-top:10px !important;">
                <div class="animated fadeInUpShort p-md-5 p-3">
                    <section class="section product profilesetting">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <!-- <div class="card animate fadeUp">                     -->
                                <div class="card card-content animate fadeUp">
                                    <!-- <div class="card-badge"><a class="white-text"> <b>Profile Setting</b> </a></div> -->
                                    <div class="row profile-contain">
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <img src="https://eyekandimodels.co.uk/images/passImg.png"
                                                 class="responsive-img" alt="">

                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <h3><span class="fontpink">Full Name</h3>
                                            <hr>
                                            <h5>Email&nbsp;:<?php echo $vc->email; ?></h5>
                                            <p>Birth&nbsp;&nbsp;:<?php echo $vc->dob; ?></p>
                                            <p>Phone&nbsp;:<?php echo $vc->phone; ?></p>
                                            <h5>Address Infomation</h5>
                                            <ul>
                                                <li><input id="address" value="<?php echo $vc->address; ?>"
                                                           style=" background: rgba(47, 47, 47, 0.5) none repeat scroll 0 0 !important;">
                                                </li>
                                                <li><input value="<?php echo $vc->city; ?>" disabled></li>
                                                <li><input value="<?php echo $vc->postcode; ?>" disabled></li>
                                                <li style="text-align:right;">
                                                    <a id="upgrade-user-info"
                                                       class="btn btn-primary btn-lg profile-upgrade-btn"
                                                       style="color:white">Upgrade</a>
                                                    <a id="remove-user-info" href="#remove-user-info-modal"
                                                       rel="modal:open"
                                                       class="btn btn-primary btn-lg profile-delete-btn"
                                                       style="color:white; margin-left:10px;">Delete</a>
                                                    <!--                                                <div id="remove-user-info-modal" class="modal">-->
                                                    <!--                                                    <div class="row">-->
                                                    <!--                                                        <div class="title">-->
                                                    <!--                                                            <p style="color:black; padding:10px; text-align:center;font-size:20px;">Are you sure you would like to delete your account with us? </p>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                        <div class="modalbtn">-->
                                                    <!--                                                            <div class="col s6 m6 l6" style="padding:0px 10px; text-align:right !important;">-->
                                                    <!--                                                                <a type="submit" class="btn btn-primary btn-lg close-modal-color" rel="modal:close">Cancel</a>-->
                                                    <!--                                                            </div>-->
                                                    <!--                                                            <div class="col s6 m6 l6" style="padding:0px 10px;">-->
                                                    <!--                                                                <a type="submit" id="delete-account" class="btn btn-primary btn-lg" rel="modal:close">Confirm</a>-->
                                                    <!--                                                            </div>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                    </div>-->
                                                    <!--                                                </div>-->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $('#upgrade-user-info').on('click', function () {

                                        var address = $('#address').val();
                                        alert(address);
                                        if (window.XMLHttpRequest) {
                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                            xmlhttp = new XMLHttpRequest();
                                        } else {
                                            // code for IE6, IE5
                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                        }
                                        xmlhttp.onreadystatechange = function () {
                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                // alert(xmlhttp.responseText);
                                                alert("success!")
                                            }
                                        }
                                        xmlhttp.open("GET", "./profile_update.php?address=" + address, true);
                                        xmlhttp.send();
                                    });
                                </script>

                                <script>
                                    $('#remove-user-info').on('click', function () {
                                        // alert('sdf');
                                        <?php
//                                        $result = $vc->delete_profile();
                                        ?>
                                    });
                                </script>
                                <!-- </div> -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    </div>
    </main><!--@Page Content-->
    </div><!--@#app-->
<?php require('.//footer.php'); ?>