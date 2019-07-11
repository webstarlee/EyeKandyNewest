<nav class="navbar-wrapper shadow animateOnce adbanner">
    <ul>
        <li id = "adbanner0" class="navbar-custom-menu adbanner-container adbannerdisplay">
            <a id = "ad-close-btn"><i class="material-icons">close</i></a>
            <a id="ad-img" href="./shop.php"> <img src="assets/img/amazon.jpg" alt=""></a>
        </li>
        <li id = "adbanner2" class="navbar-custom-menu adbanner-container adbannerdisplay">
            <a id = "ad-close-btn"><i class="material-icons">close</i></a>
            <a id="ad-img" href="./shop.php"> <img src="assets/img/lovehoney.jpg" alt=""></a>
        </li>
        <li id = "adbanner4" class="navbar-custom-menu adbanner-container adbannerdisplay">
            <a id = "ad-close-btn"><i class="material-icons">close</i></a>
            <a id="ad-img" href="./shop.php"> <img src="assets/img/lovence.jpg" alt=""></a>
        </li>
    </ul>
</nav>



<script type="text/javascript">
    $('a').on("click", function(){            
        var li_index = $( ".adbanner a" ).index(this);
        // alert(li_index)              ;
        var idforAdvertise = "adbanner" + li_index;            
        var element = document.getElementById(idforAdvertise);    
        element.classList.add("adbannerdisplay");            
    });
    
    $('#ad-img').click(function() {
        $('.adbanner').addClass('adbannerdisplay');
    })
</script>