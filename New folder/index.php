<?php
require('header.php');
$vc = new Users();
$acceptace = $vc->checkFirstLoginStatus();

$quote = $vc->get_quote();
$admin_name = $quote['admin_name'];
$comment = $quote['comment'];

$notice = $vc->get_notice();

?>
    <div id="app">
        <?php require('sidebar.php'); ?>
        <!--navbar-->
        <?php require('navbar.php'); ?>
        <!--Page Content-->
        <main id="pageContent" class="page has-sidebar" style="background: #f2f4f8;">
            <div class="container-fluid relative animatedParent animateOnce" style="padding-top:50px !important;">
                <div class="animated fadeInUpShort p-md-5 p-3">
                    <section class="section welcome-container" style="padding-bottom:0px !important">
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="button-trigger" class="card">
                                    <div class="card-content">
                                        <h1 class="s-32 mt-5">WELCOME: CHARLEY JEAN PARSLEY (<span>CHEEKYCEEJAY</span>)</h1>
                                            <p class="s-20 font-weight-lighter">If this is your first time
                                                on here you will need to log in to our partner site via the
                                                button below to complete your application. If you have
                                                already completed your application you can broadcast
                                                whenever you’re ready.
                                                <br>Suspendisse potenti non ipsum.
                                            </p>
                                            <div class="pt-3">
                                                <?php

                                                ?>
                                                <a href="https://www.streamatemodels.com/login.php"
                                                    <?php if ($acceptace == 0) { ?>
                                                   class="btn btn-primary btn-lg" style="margin-top: 10px;">Create Broadcast</a>
                                            <?php } else { ?>
                                                class="btn btn-primary btn-lg">Broadcast</a>
                                            <?php } ?>
                                            </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div id="button-trigger" class="card">
                                    <div class="card-content" style="text-align: center; padding-top: 20%;">
                                        <p class="s-20 font-weight-lighter">
                                            LIFETIME EARNINGS : £0</p>

                                        <div class="pt-3">
                                            <a href="#" class="btn btn-primary btn-lg">ADD YOUR PAYMENT
                                                DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--slider Wrap-->
                    </section>

                    <!--@Banner Slider-->


                    <!-- Earnings banner -->
                    <section class="section mt-4">
                        <div class="row row-eq-height">
                            <div class="col-lg-8">
                                <div class="card">
                                <div class="card-content notice earning">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h1>Earning: <span
                                                        style="color:#f5109c !important">&nbsp;&pound;120343</span>
                                            </h1>
                                        </div>
                                        <div class="col-sm-6 earning-detail" style="text-align: right;">
                                            <p><a href="earnings.php"><i class="material-icons float-right">more_vert</i></a>
                                            </p>
                                        </div>

                                    </div>
                                    <div id="tabs" style="height: 360px">
                                        <div id="tabs-1" style="height: 300px">
                                            <div id="chartContainer1" style="height: 300px; width: 100%;"></div>
                                        </div>
                                        <!-- <div id="tabs-2" style="height: 300px">
                            <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
                        </div> -->
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-content notice">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h1>Lastest Goal</h1>
                                            </div>
                                            <div class="col-sm-6 earning-detail" style="text-align: right;">
                                                <p><a href="goal.php"><i class="material-icons float-right">more_vert</i></a></p>
                                            </div>

                                        </div>
                                        <div id="chartContainer" class="goal-Chart"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-lg-4">
                                <div class="card-content notice">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Create Goals</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="insertGoal" style="margin-top:20px;">
                                                <label style="font-size:16px;">Goal</label>
                                                <input type="text" placeholder="Insert Goal">
                                            </div>
                                            <div class="goal-amoutn" style="margin-top:20px;">
                                                <label style="font-size:16px;">Amount</label>
                                                <input type="text" placeholder="Insert Amount">
                                            </div>
                                            <div class="creategoalbtn" style="text-align:right; margin-top:20px;" >
                                                <a type="submit" class="btn btn-primary btn-lg" rel="modal:close">Feedback</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </section>

<!--                      twitter section-->
                    <section class="section mt-4">
                        <div class="row row-eq-height">
                            <div class="col-lg-4">
                                <div class="card">
                                <div class="card-content quote">
                                    <div class="w3-content w3-section">
                                        <div class="mySlides" style="width:100%">
                                            <i class="material-icons">format_quote</i>
                                            <div class="quoteTxt">
                                                <p><?php echo $comment; ?></p>
                                                <hr/>
                                                <p style="font-weight:700"><i><?php echo $admin_name; ?></i></p>
                                            </div>
                                        </div>
                                        <!-- <div class="mySlides w3-animate-fading" style="width:100%">
                                            <p>Quote2: Nullam pretium nisi eu turpis feugiat sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes Nullam pretium nisi eu turpis feugiat sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            <hr />
                                            <p><i>- From Alex</i></p>
                                        </div>
                                        <div class="mySlides w3-animate-fading" style="width:100%">
                                            <p>Quote3: Nullam pretium nisi eu turpis feugiat sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes Nullam pretium nisi eu turpis feugiat sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            <hr />
                                            <p><i>- From Tigran</i></p>
                                        </div> -->
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="card">
                                <div class="card-content notice">
                                    <h1>Notice</h1>
                                    <table id="notice-table" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if (count($notice) >= 0) {
                                            for ($noticindex = 0; $noticindex < count($notice); $noticindex++)
                                            {
                                                echo '<tr>';
                                                echo "<td>" . $notice[$noticindex]['title'] . "</td>";
                                                echo "<td>" . $notice[$noticindex]['content'] . "</td>";
                                                echo "<td>" . $notice[$noticindex]['cdate'] . "</td>";
                                                echo '</tr>';
                                            }
                                        };
                                        ?>

                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                                </div>
                            </div>
                            <!-- <div id="home-notice-modal" class="modal">
                                <div class="row">
                                    <div class="title">
                                        <p>Nice to meet you</p>
                                    </div>
                                    <div class="date">
                                        <p>2018.10.28</p>
                                    </div>
                                    <div class="content">
                                        <p>Admin Content. Admin Content. Admin Content. Admin Content.</p>
                                    </div>
                                    <div class="feedback">
                                        <textarea name="" id="" cols="30" rows="100"></textarea>
                                    </div>
                                    <div class="modalbtn">
                                        <div class="col s6 m6 l6" style="padding:0px;">
                                            <a type="submit" class="btn btn-primary btn-lg" rel="modal:close">Feedback</a>
                                        </div>
                                        <div class="col s6 m6 l6" style="padding:0px;text-align:right !important;">
                                            <a type="submit" class="btn btn-primary btn-lg close-modal-color" rel="modal:close">Close</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </section>

                    <section class="section mt-12 twitter-section">
                        <div class="row row-eq-height">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="tbConMid m-t-20 full">
                                            <h1>WELCOME @ Screen</h1>
                                            <p>Twitter-content 1 or 2</p>
                                        </div>
                                        <div class="row" style="margin-top: 30px;">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h2 style="text-align: left;">Total flowers:0</h2>
                                                    </div>
                                                    <div class="col-lg-6" style="text-align: right" >
                                                        <span id="charLeft" style="color: #f5109c !important">140</span>
                                                    </div>
                                                </div>
                                                <div class="twittertextAreaField">
                                                    <form method="post" action="" id="posting-tweet"  method="POST" enctype="multipart/form-data">
                                                        <textarea rows="" cols="" name="tweet_text" id="tweet_text"></textarea>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-lg-6" style="text-align: left">
                                                                <input type="file" name="tweet_media" id="tweet_media" value="" />
                                                            </div>
                                                            <div class="col-lg-6" style="text-align:right">
                                                                <button type="submit" class="tweet-btn btn btn-primary" id="post-tweet">Twitter</button>
                                                            </div>
                                                        </div>

                                                        <br />
                                                        <span style="color:#060; font-weight:bold" id="successTweet"></span>
                                                        <span style="color:#F00; font-weight:bold" id="failedTweet"></span>
                                                    </form>
                                                    <div class="links"> Twitter-content3</div>
                                                    <div class="row" style="margin-top: 20px">
                                                        <div class="col-lg-4" style="text-align: left;">
                                                            <button class="blue-btn btn" data-text="Hey everyone, Im live and waiting for you! Come and join me at eyekandicams.co.uk/cam/ @EyeKandiCams #TeamKandi"> Tiwtter btn</button>
                                                        </div>
                                                        <div class="col-lg-4" style="text-align:center">
                                                            <button class="blue-btn btn" data-text="Who wants to have some kinky fun with me? Im waiting… eyekandicams.co.uk/cam/ @EyeKandiCams #TeamKandi">Twitter btn2</button>
                                                        </div>
                                                        <div class="col-lg-4" style="text-align: right;">
                                                            <button class="blue-btn btn" data-text="What a great show that was! Follow me + add me to your FAVS for next time :) eyekandicams.co.uk/cam/@EyeKandiCams #TeamKandi"><?php echo $lang['TWITTER_BUTTON3']; ?></button>
                                                        </div>
                                                    </div>
                                                    <div class="twitter-links col-lg-12" style="padding-top:10px;">
                                                        <div class="row" style="text-align: center">
                                                            <span class="copy_link">eyekandicams.co.uk/cam/</span><br />
                                                        </div>
                                                        <div class="row">
                                                            <button class="blue-btn btn copy-link" style="width:40%;">Copy Link</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="col-md-12">
                                                    <h2>Your Recent Twitter</h2>
                                                </div>
                                                <div class="col-md-12" id="">
                                                    <ul class="noStyle force-overflow" id="recent-tweets">
                                                        <li>asdfasdfasdf</li>
                                                        <li>asdfasdfasdf</li>
\                                                   </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row twitter-profile">
                                            <div class="col-md-12">
                                                <h1>Twitter Profile</h1>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="welcome_part">
                                                    <form class="form-horizontal form_custome twitter-details" action="<?php echo BASE_URL.'changeTwitterDetails.html';?>">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-xs-3 lable-align">
                                                                <label class="control-label" for="inputEmail">Name:</label>
                                                            </div>

                                                            <div class="col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control input1 input_2 no-radius" id="twitter_name" name="twitter_name"  value="" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-xs-3 lable-align">
                                                                <label class="control-label" for="inputEmail">Website:</label>
                                                            </div>
                                                            <div class="col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control input1 input_2 no-radius" id="twitter_url" name="twitter_url"  value="" placeholder="Website">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-xs-3 lable-align">
                                                                <label class="control-label" for="inputEmail">Location:</label>
                                                            </div>
                                                            <div class="col-sm-9 col-xs-9">
                                                                <input type="text" class="form-control input1 input_2 no-radius" id="twitter_location" name="twitter_location"  value="" placeholder="Location">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-xs-3 lable-align">
                                                                <label class="control-label" for="inputEmail">Description:</label>
                                                            </div>
                                                            <div class="col-sm-9 col-xs-9">
                                                                <textarea class="form-control input1 input_2 no-radius" id="twitter_description" name="twitter_description"  value="" placeholder="Description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-top: 30px;">
                                                            <div class="col-sm-3 col-xs-3"></div>
                                                            <div class="col-sm-9 col-xs-9">
                                                                <input type="submit" class="blue-btn btn perple_bg_botton details-twitter all_btn m-t-10" value="Update profile">
                                                                <span style="color:#060; font-weight:bold" id="successTwitterDetailsChange"></span> <span style="color:#F00; font-weight:bold" id="failTwitterDetailsChange"></span>
                                                            </div>

                                                        </div>
                                                    </form>
                                                    <?php //=========== Profile pic upload =====================//?>
                                                    <div style="padding-top:20px;">&nbsp;</div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-3 col-xs-9">
                                                            <div id="twitterProfileImage"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-top:20px;">&nbsp;</div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-3 col-xs-9">
                                                            <div id="upload-twitter-profile-pic"><h2>Change profile picture (Less than 700kb)</h2></div>
                                                            <div class="clear"></div>
                                                            <span style="color:#060; font-weight:bold" id="successTwitterPofilePicChange"></span> <span style="color:#F00; font-weight:bold" id="failTwitterPofilePicChange"></span>
                                                        </div>
                                                    </div>
                                                    <?php //=========== banner pic upload =====================//?>
                                                    <div style="padding-top:20px;">&nbsp;</div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-3 col-xs-9">
                                                            <div id="twitterBannerImage"></div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-top:20px;">&nbsp;</div>
                                                    <div class="form-group">
                                                        <div class="col-xs-offset-3 col-xs-9">
                                                            <div id="upload-twitter-banner-pic"><h2>Change twitter banner picture</h2></div>
                                                            <div class="clear"></div>
                                                            <span style="color:#060; font-weight:bold" id="successTwitterBannerPicChange"></span> <span style="color:#F00; font-weight:bold" id="failTwitterBannerPicChange"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section mt-4">
                        <div class="row row-eq-height">
                            <div class="col-lg-12">
                                <div class="card">
                                <div class="card-content">
                                    <h1 style="margin-bottom: 20px !important;">Support</h1>
                                    <table id="support-table" class="display" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Ticket</th>
                                            <th>Date</th>
                                            <th>Reply</th>
                                            <th>Status</th>
                                            <th>Conversation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        <tr>
                                            <td>Ticket</td>
                                            <td>Date</td>
                                            <td>Reply</td>
                                            <tD>Status</td>
                                            <td>Conversation</td>
                                        </tr>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div></div>
                            </div>
                            <script>
                                var myIndex = 0;
                                carousel();

                                function carousel() {
                                    var i;
                                    var x = document.getElementsByClassName("mySlides");
                                    for (i = 0; i < x.length; i++) {
                                        x[i].style.display = "none";
                                    }
                                    myIndex++;
                                    if (myIndex > x.length) {
                                        myIndex = 1
                                    }
                                    x[myIndex - 1].style.display = "block";
                                    setTimeout(carousel, 10000);
                                }
                            </script>
                        </div>
                    </section>

<!--                    <section class="section mt-4">-->
<!--                        <div class="row row-eq-height">-->
<!--                            <div class="col-lg-12">-->
<!--                                <div class="card">-->
<!--                                    <div class="card-content">-->
<!--                                        <h1>Shop</h1>-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-sm-4">-->
<!--                                                <div class="card animate fadeLeft">-->
<!--                                                    <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>-->
<!--                                                    <div class="card-content">-->
<!--                                                        <p>Smartwatches</p>-->
<!--                                                        <span class="card-title text-ellipsis">Smartwatch 2.0 LTE Wifi</span>-->
<!--                                                        <img src="../../../app-assets/images/cards/watch-2.png" class="responsive-img" alt="">-->
<!--                                                        <div class="row">-->
<!--                                                            <h5 class="col s12 m12 l8 mt-3">$399.00</h5>-->
<!--                                                            <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger" href="#modal1">View</a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </section>-->
                </div>
            </div>
        </main>
        <!--@Page Content-->
    </div>


<?php require('footer.php'); ?>