<!DOCTYPE HTML>
<html lang="en">

<html>

<head>
    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>CSS Menu Templates</title>
    <meta name="description" content="CSS Menu Templates by Aubrey J Cook">
    <meta name="author" content="Aubrey J Cook">

    <!-- Meta Data
  -------------------------------------------------- -->
    <meta property="og:title" content="CSS Menu Templates by Aubrey J cook" />
    <meta property="og:description" content="CSS Menu Templates by Aubrey J Cook">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href='https://fonts.googleapis.com/css?family=Cousine|Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/horizontal.css">

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>

    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <header>
            <?php include 'php/header.php';?>
        </header>
        <nav>
            <?php include 'php/nav.php';?>
        </nav>
        <main>
            <ul id="simple-menu">
                <li>
                    <a href="../index.html">
                        <span>Main Web 115 Index</span>
                    </a>
                </li>
                <li>
                    <a href="../01Emmet/index.html">
                        <span>Learning Emmet</span>
                    </a>
                </li>
                <li>
                    <a href="../semantic/index.html">
                        <span>Semantic Markup</span>
                    </a>
                </li>
                <li>
                    <a href="../photoGallery/index.html">
                        <span>Responsive Photo Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="../PHPLab/index.php">
                        <span>PHP Lab</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../PHPLab/page01.php">Page 01</a>
                        </li>
                        <li>
                            <a href="../PHPLab/page02.php">Page 02</a>
                        </li>
                        <li>
                            <a href="../PHPLab/page03.php">Page 03</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../JavaScriptLab/index.php">
                        <span>Javascript Lab</span>
                    </a>
                </li>
            </ul>
        </main>
        <footer>
            <?php include 'php/footer.php';?>
        </footer>
    </div>

    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

</body>

</html>