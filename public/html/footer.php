<footer>
    <div class="container">
        <div class="logo_footer">
            <h2>Palo Alto</h2>
        </div>
        <nav class="nav_footer">
            <ul  class="menu">
                <?php
                $menu = array ("HOME"=>"index.php", "ABOUT"=>"about.php", "ARCHIVE"=>"archive.php", "CONTACT"=>"contacts.php", "SEARCH"=>"search.php",);
                $i=1;
                foreach ($menu as $title=>$url) {
                    $class = strpos($_SERVER["REQUEST_URI"], $url) !== false ? " class='active'" : "";
                    if ($url=="search.php") {
                        echo "<li$class><span class=\"nav_search  \"><a href='search.php'> </a></span></li>";
                    }
                    else    echo "<li$class> <a href='$url'>$title</a></li>";
                    $i++;
                }
                ?>
            </ul>
        </nav>

        <div class="footer_text_h6">
            <h6 class="text_footer">Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</h6>
        </div>
        <h6>&copy; 2015 - Palo Alto. All Rights Reserved. Designed &amp; Developed by <a href="https://pixelbuddha.net/">PixelBuddha Team</a></h6>
        <div>
            <ul class="social">
                <li><a href="https://www.facebook.com/" target="_blank"><img src="../img/icons/facebook.png" alt="Facebook"></a></li>
                <li><a href="https://twitter.com/" target="_blank"><img src="../img/icons/twitter.png" alt="Twitter"></a></li>
                <li><a href="https://www.instagram.com/" target="_blank"><img src="../img/icons/instagram.png" alt="Instagram"></a></li>
                <li><a href="https://www.pinterest.com/" target="_blank"><img src="../img/icons/pinterest.png" alt="Pinterest"></a></li>
            </ul>
        </div>
    </div>
</footer>
<script>
    $('.i_do a').on('click', function () {
        $(this.parentNode).addClass('i_do_clicked');
    });

    $('.read_more a').on('click', function () {
        $(this.parentNode).addClass('read_more_clicked');
    });

    $('.tag a').on('click', function () {
        $(this).addClass('tag_clicked');
    });
    $('nav.nav_header ul.menu li a').on('click', function () {
        $(this).addClass('menu_clicked');
    });
    $('nav.nav_footer ul.menu li a').on('click', function () {
        $(this).addClass('menu_clicked');
    });

    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);


    $('.mobile_background').on('click', function () {
if ($('.mobile_menu').hasClass('active')) {
//    $('.mobile_menu').toggleClass('active2' );

        $('.mobile_menu').removeClass('active');
        $('.mobile_menu_button').removeClass('active');
        $('.mobile_background').removeClass('active');
}
    });

    $('.mobile_menu_button').on('click', function () {
        $('.mobile_menu').toggleClass('active' );
        $(this).toggleClass('active' );
        $('.mobile_background').toggleClass('active' );

    });


</script>
</body>