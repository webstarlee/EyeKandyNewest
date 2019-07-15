    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
<!-- User statistics & appointment cards-->
<div class="row mt-4">
   <div class="col s12 l5">
      <!-- User Statistics -->
      <div class="card user-statistics-card animate fadeLeft">
         <div class="card-content">
            <h4 class="card-title mb-0" style="color: #f5109c; font-size: 25px;">Welcome:charley jean parsley <i class="material-icons float-right">more_vert</i></h4>
            <div class="row">
               <div class="col s12 m6">
                  <ul class="collection border-none mb-0">
                     <li class="collection-item avatar" style="padding-left: 0px;">
                        <!-- <i class="material-icons circle pink accent-2">trending_up</i> -->
                        <p style="margin-top: 18px;" class="medium-small">If this is your first time on here you will need to log in to our partner site via the button below to complete your application.If you have already completed your application you can barodcast whenever you're ready.</p>
                        <!-- <h5 class="mt-0 mb-0">60%</h5> -->
                     </li>
                  </ul>
               </div>
               <div class="col s12 m6">
                  <ul class="collection border-none mb-0">
                     <li class="collection-item avatar" style="padding-left: 63px; padding-top: 16px;">
                        <!-- <i class="material-icons circle purple accent-4">trending_down</i>
                        <p class="medium-small">Last year</p> -->
                        <br><p class="medium-small">Suspendisse potenti non ipsum.<br><br><br><br><br></p>
                        

                        

                     </li>
                  </ul>
               </div>
               <div class="medium-small">
                           <!-- <button style="margin-top: 38px;" class="btn cyan waves-effect waves-light right" type="submit" name="action">BroadCast<i class="material-icons right">send</i></button> -->
                 <?php

                    ?>
                    <a href="https://www.streamatemodels.com/login.php"
                        <?php if ($acceptace == 0) { ?>
                       class="btn cyan waves-effect waves-light right" style="margin-top: 15px; width: 400px;">Complete Application/Broadcast<i class="material-icons right">send</i></a>
                <?php } else { ?>
                    class="btn cyan waves-effect waves-light right">Broadcast<i class="material-icons right">send</i></a>
                <?php } ?>
              </div>
            </div>
            
         </div>
      </div>
   </div>
   <div class="col s12 l4">
      <!-- Recent Buyers -->
      <div class="card recent-buyers-card animate fadeUp">
         <div class="card-content">
            <h4 class="card-title mb-0" style="color: #f5109c; font-size: 25px;">Latest Goal <i class="material-icons float-right">more_vert</i></h4>
            <p class="medium-small pt-2">This billing cycle</p>
            
            <div class="current-balance-container">
               <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
            </div>
            
            <p class="medium-small center-align" style="margin-top: 10px;">Trial Version</p>
         </div>
      </div>
   </div>
   <div class="col s12 l3">
      <div class="card animate fadeRight">
         <div class="col s5 m5">
            <h5 class="mb-0" style="margin-top: 23px;color: #f5109c; font-size: 25px;">Charley</h5>
            <p class="no-margin">New</p>
            <p class="mb-0 pt-8" style="margin-top: 42px;">1,12,900</p>
         </div>
         <div class="col s7 m7 right-align">
            <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
            <p class="mb-0">Total Clients</p>
         </div>
      </div>
      <div class="card animate fadeRight">
         <div class="card-content">
            
            <div class="medium-small" style="margin-right: 10px;"><button id="goPayment" style="margin-top: 10px;" class="btn cyan waves-effect waves-light right" type="submit" name="action">ADD YOUR PAYMENT DETAILS<i class="material-icons right">send</i></button></div>
            <p style="padding-top: 79px;" class="medium-small center-align">https://localhost/EyeKandyNew</p>
            
         </div>
      </div>

   </div>
</div>
<!--/ Current balance & appointment cards-->
            <!-- Current balance & total transactions cards-->
<div class="row">
  <div class="col s12 m8 l8 animate fadeRight">
      <!-- Total Transaction -->
      <div class="card">
         <div class="card-content notice earning">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 style="font-size: 23px; float: left;color: #f5109c; font-size: 25px;">Earning: <span
                                    style="color: #f5109c;">&nbsp;&pound;3827</span>
                        </h1>
                        <a href="earnings.php"><i class="material-icons float-right">more_vert</i></a>
                    </div>
                    <!-- <div class="col-sm-6 earning-detail" style="text-align: right;">
                        <p><a href="earnings.php"><i class="material-icons float-right">more_vert</i></a>
                        </p>
                    </div> -->

                </div>
                <div id="tabs" style="height: 211px">
                    <div id="tabs-1" style="height: 150px">
                        <div id="chartContainer1" style="height: 160px; width: 100%;"></div>
                    </div>
                    <!-- <div id="tabs-2" style="height: 300px">
        <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
    </div> -->
                </div>
            </div>
      </div>
   </div>
   <div class="col s12 m4 l4">
      <!-- Current Balance -->
      <div class="card animate fadeLeft">
         <div class="card-content">
            <h4 class="card-title mb-0"><i class="material-icons" style="transform: rotate(180deg); color: #f5109c;; font-size: 60px;">format_quote</i> <i class="material-icons float-right">more_vert</i></h4>
            <p class="medium-small" style="margin-left: 57px;">On the auspicios occasion of Diwali, the Society has organized a gathering followed by dinner. <br>All members of the society are requested to attend the event in the clubhouse of the society at 8:00 pm on the 30th  of October.</p>
            <hr style="border-bottom: rgba(255,255,255,0.4) solid 1px; width: 40%; margin-bottom: 10px; margin-top: 72px;">
            
            <h5 class="center-align" style="font-style: italic; margin-top: 45px;">Diwali Gathering</h5>
            <!-- <p class="medium-small center-align">Used balance this billing cycle</p> -->
         </div>
      </div>
   </div>
   
</div>
<!--/ Current balance & total transactions cards-->



<div class="row">

   <div class="col s12 m6 l8" style="width: 33.35%;">
      
      <div class="card subscriber-list-card animate fadeRight">
         <div class="card-content pb-1" style="padding-top: 67px;">
            <p style="font-size: 18px; ">Twitter is one of the most important places for a webcam model to promote themselves to gain more loyal fans! You can be as creative as you like with your tweets to help you get noticed and gain more followers. We advise all models to always tweet with a picture and their unique cam room link within your tweets.<br>Please login with your twitter account below to use our new twitter feature, where you can tweet to all your followers from  within this dashboard.</p>
         </div>
      
         <a id="twitter-button" class="btn btn-block btn-social btn-twitter" style="margin-top:50px; margin-bottom:33px; width: 57%;float: right; margin-right: 18px; background-color: #f5109c;">
            <i class="fa fa-twitter"></i> Sign in with Twitter
          </a>
      </div>
      
   </div>
   
   <div class="col s12 m6 l8" style="width: 66.65%;">
      <div class="card subscriber-list-card animate fadeRight">
         <div class="card-content pb-1">
            <h4 class="card-title mb-0" style="color: #e91e63; font-weight: bold;color: #f5109c;">Notice <i class="material-icons float-right">more_vert</i></h4>
         </div>
         <table class="subscription-table responsive-table highlight">
            <thead style="background: linear-gradient(45deg, #7a56af, #f5109c) !important; color: white;">
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
         </table>
      </div>
   </div>
   
</div>

<div class="row">
   <div class="col s12 m6 l8" style="width: 22.5%; float: right;">
      
      <div class="card subscriber-list-card animate fadeLeft">
         <a href="shop.php">
         <div style="width: 100%; margin-top: 0px;float: left;" class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="dataimages/amazon.jpg" style="width:100%">
              <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="dataimages/lovehoney.jpg" style="width:100%">
              <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="dataimages/lovence.jpg" style="width:100%">
              <div class="text">Caption Three</div>
            </div>

         </div>
         </a>
            <br>

         <div style="text-align:center; ">
           <span class="dot"></span> 
           <span class="dot"></span> 
           <span class="dot"></span> 
         </div>
         <div style="width: 100%; text-align: center; background-color: mediumvioletred;">
            <a href="shop.php" style="text-align: center;color: white;">Go To Ads</a>
         </div>

         <script>
         var slideIndex = 0;
         showSlides();

         $("#goPayment").click(function(){
          location.href = "payment.php";
         });

         function showSlides() {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           var dots = document.getElementsByClassName("dot");
           for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
           }
           slideIndex++;
           if (slideIndex > slides.length) {slideIndex = 1}    
           for (i = 0; i < dots.length; i++) {
             dots[i].className = dots[i].className.replace(" active", "");
           }
           slides[slideIndex-1].style.display = "block";  
           dots[slideIndex-1].className += " active";
           setTimeout(showSlides, 2000); // Change image every 2 seconds
         }
         </script>

      </div>
   </div>

  <div class="col s12 m6 l8" style="width: 77.5%; float: left;">
      <div class="card subscriber-list-card animate fadeRight">
         <div class="card-content pb-1">
            <h4 class="card-title mb-0" style="color: #f5109c;; font-weight: bold;">Support <i class="material-icons float-right">more_vert</i></h4>
         </div>
         <table class="subscription-table responsive-table highlight">
            <thead style="background: linear-gradient(45deg, #7a56af, #f5109c) !important; color: white;">
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
                  <td>Michael Austin</td>
                  <th>Content</th>
                  <th>Date</th>  
                  <th>Content</th>
                  <th>Date</th>  
                  
               </tr>
               <tr>
                  <td>Aldin Rakić</td>
                  <td>ACME Pvt LTD.</td>
                  <td>Jan 10,2019</td>
                  <td>ACME Pvt LTD.</td>
                  <td>Jan 10,2019</td>
                  
               </tr>
               <tr>
                  <td>İris Yılmaz</td>
                  <td>Collboy Tech LTD.</td>
                  <td>Jan 12,2019</td>
                  <td>Collboy Tech LTD.</td>
                  <td>Jan 12,2019</td>
                  
               </tr>
               <tr>
                  <td>Lidia Livescu</td>
                  <td>My Fintech LTD.</td>
                  <td>Jan 14,2019</td>
                  <td>My Fintech LTD.</td>
                  <td>Jan 14,2019</td>
                  <!-- <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                  <td>$ 1100.00</td>
                  <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td> -->
               </tr>
            </tbody>
            <tfoot style="background: linear-gradient(45deg, #7a56af, #f5109c) !important; color: white;">
                <tr>
                  <th>Ticket</th>
                  <th>Date</th>
                  <th>Reply</th>  
                  <th>Status</th>
                  <th>Conversation</th>  
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
  
</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->


    