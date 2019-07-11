<?php require('./header.php');
        require('./sidebar3.php');
 ?>  
<div id="main">
                <!--Page Content-->
                <main id="pageContent" class="page has-sidebar">
                    <div class="container-fluid relative animatedParent animateOnce no-p">
                        <div class="animated fadeInUpShort">
                        <!--Banner-->
                            <section class="relative xv-slide" data-bg-possition="left" data-bg-repeat="false" style="background-image:url('assets/img/bank.jpg');">

                                <div class="bottom-gradient "></div>
                            </section>
                            <div class="animated fadeInUpShort p-md-5 p-3 ">
                                <section class="section mt-4 paymentdetailSection">
                                    <div id="button-trigger" class="card card card-default scrollspy" style="background:transparent;">
                                        <div class="card-content paymentCollapsible">
                                            <h1 class="mb-2 text-primary" style="color:white !important;">Payment Options</h1>
                                            <ul class="collapsible">
                                                <li class="active">
                                                    <div class="collapsible-header"><i class="material-icons dp48">account_balance</i>UK Bank Account</div>
                                                    <div class="collapsible-body">
                                                        <div class="row">
                                                        <div class="col-lg-6">
                                                            <h4 style="color:white !important">Info: </h4>
                                                            <ul>
                                                                <li>Payment weeks run from Sunday 00:00 GMT to Saturday 23:59 GMT</li>
                                                                <li>Please enter carefully your correct bank account details below so we can process payments for you.</li>
                                                                <li>Payments are sent 10 days after each working week ends, you will see each transfer date on your payment slips provided in the earnings tab.</li>
                                                                <li> If your bank account is located outside of the UK please contact us.</li>
                                                                <li>All payments will be sent in GBP (£)</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6" style="float: right;">
      
                                                            <form class="" id="uk_acc_form" action="https://eyekandimodels.co.uk/changePaymentDetails.html">
                                                                <div class="form-group full selectbank">
                                                                    <label>Select Bank</label>
                                                                    <select style="display:inherit !important;" disabled>
                                                                        <option style="background-color:red !important; ">United Kingdom</option>
                                                                        <option disabled>USA</option>
                                                                        <option disabled>Russia</option>
                                                                        <option disabled>Ukriane</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group full">
                                                                    <label>Bank Name:</label>
                                                                    <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" value="Test bank" data-bv-field="bank_name">                                                            
                                                                <div class="form-group full">
                                                                    <label for="inputPassword">Account number:</label>
                                                                    <input type="text" name="account_number" class="form-control input1" id="account_number" placeholder="Account number" value="87654321" maxlength="8" data-bv-field="account_number">                                                            
                                                                <div class="form-group full">
                                                                    <label for="inputPassword">Sort code:</label>
                                                                    <input type="text" name="short_code" class="form-control input1" id="short_code" placeholder="00-00-00" value="33-22-11" data-bv-field="short_code">                                                            
                                                                <div class="form-group full"><button type="submit" class="payment-submit waves-effect waves-light btn gradient-45deg-red-pink box-shadow">Submit</button></div>
                                                                <div class="form-group full" style="color:#060; font-weight:bold" id="successPaymentDetailsChange"></div> <div class="form-group full" style="color:#F00; font-weight:bold" id="failPaymentDetailsChange"></div> 
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="collapsible-header"><i class="material-icons">account_balance_wallet</i>place</i>Paypal</div>
                                                    <div class="collapsible-body">
                                                        <div id="payoneer" class="col-lg-6" style="">
                                                            <ul>
                                                                <form class="" id="paypal_acc_form" action="https://eyekandimodels.co.uk/changePaymentDetails.html" novalidate="novalidate">
                                                                    <li>if you do not hold a UK bank account or would rather be paid via Paypal, then please do submit your paypal email address.</li>
                                                                    <div class="form-group">                                                                        
                                                                        <label for="inputEmail">Email:</label>
                                                                        <input type="email" id="paypal_email" name="paypal_email" class="form-control input1 paypal_email" placeholder="Paypal Email" value="" data-bv-field="paypal_email">
                                                                        <button class="payment-submit waves-effect waves-light btn gradient-45deg-red-pink box-shadow">Submit</button>                                                                        
                                                                    </div>
                                                                </form>
                                                            </ul>                                                        
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var elems = document.querySelectorAll('.collapsible');
                                        var instances = M.Collapsible.init(elems, options);
                                    });

                                    // Or with jQuery

                                    $(document).ready(function() {
                                        $('.collapsible').collapsible();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </main>
                <!--@Page Content-->
                <!-- <?php require('./advertise.php'); ?> -->
    </div>

    <?php require('./footer.php'); ?>