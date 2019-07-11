<nav class="navbar-wrapper shadow navbar navbar-fixed mynavbar-style">
    <div class="d-flex align-items-center">
        <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle ml-2 mr-2" style="top:-13px;left:4px;">
            <i></i>
        </a>
        <a id="re-renderhomepage-nav" class="navbar-brand d-none d-lg-block" href="#"> 
            <div class="d-flex align-items-center s-14 l-s-2">
                <img src="assets/img/logo.png" alt="">
            </div>
        </a>
    </div>
    <div class="nav-wrapper">
        <ul class="navbar-list right">
            <!-- <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="http://localhost:8080/modeldashboard/index.php">HOME</a></li>
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="#">HOW IT WORKS</a></li>
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="#">FAQS</a></li>      
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="#">ABOUT US</a></li>        
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="#">BLOG</a></li>         -->
            <!-- <li class="hide-on-med-and-down"><a class="btn btn-primary btn-lg" href="http://localhost:8080/modeldashboard/index.php">Account</a></li>         -->
            <li class="hide-on-med-and-down">
                <a id="log-out-renderhomepage-nav" class="btn btn-primary btn-lg mynavbar-btn" href="#">
                    <p class="contentforicon" href="#">Logout</p>
                    <i class="material-icons dp48 myicon-pos">person_outline</i>
                </a>
            </li>        
            <!-- <li class="hide-on-med-and-down">
                <a class="btn btn-primary btn-lg mynavbar-btn dropdown-trigger" href="#" data-target='languagedropdown'>
                    <p class="contentforicon">English</p>
                    <i class="material-icons dp48 myicon-pos">keyboard_arrow_down</i>
                </a>
            </li>        -->
            <!-- Dropdown Structure -->
            <!-- <ul id='languagedropdown' class='dropdown-content'>
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!">three</a></li>
                <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
            </ul> -->
        </ul>
    </div>    
</nav>

<script type="text/javascript">
    $('#re-renderhomepage-nav').on("click", function(){
        window.location.replace("index.php");
        // location.reload(true);
    });

    $('#log-out-renderhomepage-nav').on("click", function(){
        window.location.replace("../logout.php");
        // location.reload(true);
    });
</script>