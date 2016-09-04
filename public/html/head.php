<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Palo Alto</title>
    <link type="text/css" rel="stylesheet" href="../css/normalize.css">
    <link type="text/css" rel="stylesheet" href="../css/grid.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/nprogress.css">

<!--    <link type="text/css" rel="stylesheet" href="../css/jquery.bxslider.css">-->
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/jquery.bxslider.min.js"></script>
    <script src="../js/nprogress.js"></script>
    <script>

        $(document).ready(function(){

            $('.bxslider').bxSlider({




            });
        });

    </script>

 
</head>
<body>
<header>
    <div class="container">
        <div class="logo"><a href="index.php">Palo Alto</a></div>
        <nav class="nav_header show-m show-l show-xl">
            <ul class="menu">
                <?php
                $menu = array ("HOME"=>"index.php", "ABOUT"=>"about.php", "ARCHIVE"=>"archive.php", "CONTACT"=>"contacts.php", "SEARCH"=>"search.php",);
                $i=1;
                foreach ($menu as $title=>$url) {
                    $class = strpos($_SERVER["REQUEST_URI"], $url) !== false ? " class='active'" : "";
                    if ($url=="search.php") {
                     echo "<li$class><span class=\"nav_search\"><a href='search.php')> </a></span></li>";
                    }
                    else    echo "<li$class><a href='$url'>$title</a></li>";
                    $i++;
                }
                ?>


<!--                <li><a href="index.php" id="hr1" onClick="change_color('hr1')" >HOME</a></li>-->
<!--                <li><a href="about.php" id="hr2" onClick="change_color('hr2')">ABOUT</a></li>-->
<!--                <li><a href="archive.php" id="hr3" onClick="change_color('hr3')">ARCHIVE</a></li>-->
<!--                <li><a href="contacts.php" id="hr4" onClick="change_color('hr4')">CONTACT</a></li>-->
<!--                <li><span class="nav_search"><a href="search.php")> </a></span></li>-->
            </ul>
        </nav>
        <nav class="nav_header_small show-xs show-s">
            <img src="../img/icons/nav_header_small.png" alt="nav_header_small_icon">
        </nav>
    </div>
</header>