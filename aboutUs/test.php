<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE); 

    $connect = mysqli_connect('localhost', 'root', '', 'clevertech_db');
	
    if(!$connect){
   		die('Connection failed with DataBase');
  	}

    $req = "SELECT * FROM about_us_info";
    $answer = mysqli_query($connect, $req);

    $tabs = mysqli_query($connect, $req);

    // $row = mysqli_fetch_row($answer);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="../styles/default-styles.css">
    <link rel="stylesheet" href="../styles/adaptive-default.css">
    <link rel="stylesheet" href="styles/adaptive-styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../logo/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../logo/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../logo/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../logo/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../logo/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../logo/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../logo/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../logo/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../logo/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../logo/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../logo/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="../logo/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../logo/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>CleverTech</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header_content_1">
            <a class="header_logo_link" href="../index.html">
                <img src="../logo/CleverTech-Logotip.png" alt="clevertech logo" class="clevertech_logo" width="50px">
                <p class="logo_name">clevertech</p>
            </a>
        </div>
        <div class="header_content_2">
            <nav class="navig">
                <a class="header_links" href="../ecosystem/index.html">ecosystem</a>
                <a class="header_links" href="#">about us</a>
                <a class="header_links" href="../works/index.html">works</a>
                <a class="header_links" href="../faq/index.html">faq</a>
                <a class="header_links" href="../contacts/index.html">contacts</a>
                <img class="image_back hide" src="../images/x.png" alt="back">
            </nav>
            <img class="menu hide" src="../images/menu.png" alt="menu">
        </div>
    </header>

    <!-- Pre-loader -->
    <div class="mask">
        <div class="loader"></div>
    </div>
    <!-- Main-Content -->

    <div class="section sec1">
        <div class="petals">
            <?php while($row = mysqli_fetch_row($answer)) {?>
                <div class="petal"><?php echo $row[1] ?></div>
            <?php } ?>
        </div>

        <?php while($row = mysqli_fetch_row($tabs)) {?>
        <div class="main_block">
            <div class="main_block_inner_1">
                <img class="logo_ct" src="<?php echo $row[2] ?>" alt="">
                <h1 class="text_name"><?php echo $row[3] ?> <br>  
                <span class="text_connect"><?php echo $row[4] ?></span>
                <div class="connection">
                    <a class="links_icon" href="<?php echo $row[5] ?>">
                        <img class="icons_social_webs" src="photos/github.png" alt="">
                    </a>
                    <a class="links_icon" href="<?php echo $row[6] ?>">
                        <img class="icons_social_webs" src="photos/facebook.png" alt="">
                    </a>
                    <a class="links_icon" href="<?php echo $row[7] ?>">
                        <img class="icons_social_webs" src="photos/vk.png" alt="">
                    </a>
                    <a class="links_icon" href="<?php echo $row[8] ?>">
                        <img class="icons_social_webs" src="photos/inst.png" alt="">
                    </a>
                </div>
                </h1>
            </div>
            <div class="main_block_inner_2">
                <h4 class="text_details">details</h4>
                <p class="block_text_infomation"><?php echo $row[9] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <footer>
        <a class="footer_links" href="../ecosystem/index.html">ecosystem</a>
        <a class="footer_links" href="#">about us</a>
        <a class="footer_links" href="../works/index.html">works</a>
        <a class="footer_links" href="../faq/index.html">faq</a>
        <a class="footer_links" href="../contacts/index.html">contacts</a>
    </footer>

    
    <script type="text/javascript" src="scripts/scripts.js"></script>
    <script type="text/javascript" src="../scripts/preloader.js"></script>
    <script type="text/javascript" src="../scripts/adaptive-js.js"></script>
</body>
</html>