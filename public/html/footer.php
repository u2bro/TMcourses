<footer>
    <div class="container">
        <div class="logo_footer">
            <h2>Palo Alto</h2>
        </div>
        <nav class="nav_footer">
            <ul  class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="archive.php">ARCHIVE</a></li>
                <li><a href="contacts.php">CONTACT</a></li>
                <li><a href="search.php">SEARCH</a></li>
            </ul>
        </nav>
        <h6>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</h6>
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

    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);

    $('.img').on('hover', function () {
        $(this.childNodes).style.display='block';
    })





</script>
</body>