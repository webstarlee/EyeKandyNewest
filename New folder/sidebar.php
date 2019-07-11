<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li>
                <a  id="sidebaritem0" class="ajaxifyPage active" href="index.php">
                    <!-- <i class="icon icon-home-1 s-24"></i>  -->
                    <i class="material-icons dp48">home</i><span style="margin-left:40px">Home</span>
                </a>
            </li>

            <li> 
                <a id="sidebaritem1" class="ajaxifyPage" href="tips.php">
                    <i class="material-icons dp48">monochrome_photos</i> <span style="margin-left:40px">Guides & Tips</span>
                </a>
            </li >

            <li>
                <a id = "sidebaritem2" class="ajaxifyPage" href="invoice.php">
                    <i class="material-icons dp48">payment</i> <span style="margin-left:40px">Invoice slips</span>
                </a>
            </li>

            <li>
                <a id = "sidebaritem3" class="ajaxifyPage" href="payment.php">
                    <i class="material-icons dp48">payment</i> <span style="margin-left:40px">Payment Details</span>
                </a>
            </li>

            <li>
                <a id = "sidebaritem4" class="ajaxifyPage" href="goal.php">
                    <i class="material-icons dp48">flag</i> <span style="margin-left:40px"> Goals</span>
                </a>
            </li>

            <li class="sidebarIconArea">
                <a id = "sidebaritem5" class="ajaxifyPage" href="shop.php">
                    <i class="material-icons dp48">shopping_basket</i> <span style="margin-left:40px">Shop</span>
                </a>
            </li>

            <li>
                <a id="sidebaritem6" class="ajaxifyPage" href="support.php">
                    <i class="material-icons dp48">print</i><span style="margin-left:40px">Support</span>
                </a>
            </li>

            <!-- <li>
                <a id = "sidebaritem3" class="ajaxifyPage" href="earnings.php">
                    <i class="material-icons dp48">attach_money</i> <span style="margin-left:40px">Earnings</span>
                </a>
            </li>
            <li>
                <a id = "sidebaritem4" class="ajaxifyPage sidebar-payment" href="payment.php">
                    <i class="material-icons dp48">payment</i> <span style="margin-left:40px">Payments</span>
                </a>
            </li>

            <li>
                <a id="sidebaritem7" class="ajaxifyPage" href="cngpwd.php">
                    <i class="material-icons dp48">security</i> <span style="margin-left:40px">Change Password</span>
                </a>
            </li>    -->
            <li>
                <a id="sidebaritem7" class="ajaxifyPage" href="profilesetting.php">
                <i class="material-icons dp48">settings</i><span style="margin-left:40px">Settings</span>
                </a>
            </li>   
        </ul>
    </div>
    <script type="text/javascript">
        $('#sidebaritem0').on("click", function(){
            window.location.replace("index.php");
            // location.reload(true);
        });

        $('a').on("click", function(){
            $('.ajaxifyPage').removeClass('active');
            var li_index = $( "a" ).index( this );              
            var idforActive = "sidebaritem" + li_index;            
            var element = document.getElementById(idforActive);    
            element.classList.add("active");            
        });


    </script>
</aside>
<!--Sidebar End-->