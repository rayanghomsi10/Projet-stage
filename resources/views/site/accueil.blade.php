


<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/acstyle .css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Nunito+Sans&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
<!-- Navigation -->
<header class="MY-HEADER">
    <nav >
        <div class="logo">
            <a href=""><img src="img/BDE.jpg" alt=""><p>BDE</p></a>
        </div>
        <ul class="liste-nav">
            <li class="item-nav" ><a href="accueil.php" >Home</a></li>
            <li class="item-nav"><a href="shop.blade.php" >BDE-shop</a></li>
            <li class="item-nav"><a href="evenement.php" >Event</a></li>
            <li class="item-nav "><a href="connexion.php">connexion</a></li>
            <li class="item-nav "><a href="adminlogin.php">admin</a></li>
        </ul>
        </ul>
        <img src="img/menu.svg" alt="menu burger" class="logo-menu">
    </nav>
</header>
<!-- Navigation -->

<!-- Accueil -->

<div class="accueil" id="home">
    <img src="img/BDE.jpg" alt="logo" class="logo-kyoto">
    <h1>Campus Douala</h1>
    <p class="sous-titre">UCAC-ICAM</p>
    <a href="#asym" class="btn-accueil">En savoir plus</a>
</div>
<!-- Accueil -->

<!---  Evenement  -->

<section class="section-asymetrique" id="asym">

    <h2>Evenements</h2>

    <div class="bloc bloc-left bloc-1">
        <div class="bloc-txt-left">
            <h3>Evenements 1</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
            <a href="evenement.php"><button class="btn-bloc-left">En savoir plus</button></a>
        </div>
    </div>
    <img src="img/study-g0e3740b0f_640.jpg" alt="couloir d'un temple de kyoto" class="img-grid img-grid-1">

    <div class="bloc bloc-right bloc-2">
        <div class="bloc-txt-right">
            <h3>Evenements 2</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
            <a href="evenement.php"><button>En savoir plus</button></a>
        </div>
    </div>
    <img src="img/college-student-g636fd26ad_1280.jpg" alt="château de kyoto" class="img-grid img-grid-2">

    <div class="bloc bloc-left bloc-3">
        <div class="bloc-txt-left">
            <h3>Evenements3</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis ullam autem voluptatibus quia maiores voluptatem nesciunt inventore neque exercitationem, iste repellendus! Earum dicta animi alias nostrum officiis illo quibusdam illum sed sequi error. Optio, quidem placeat. Beatae aut cum aliquam quidem? Soluta quo temporibus aut repudiandae nulla pariatur facilis neque.</p>
            <a href="evenement.php"><button class="btn-bloc-left">En savoir plus</button></a>
        </div>
    </div>
    <img src="img/books-g5269f01e2_1280.jpg" alt="geisha" class="img-grid img-grid-3">

    <div class="ligne-gauche"></div>
    <div class="ligne-droite"></div>
</section>





<!---  Evenement  -->




<!---  FOOTER  -->
<footer>
    <div class="social">
        <a href=""><img class="mail" src="img/mail-outline.svg" alt=""></a>
        <a href=""><img class="face" src="img/logo-facebook.svg" alt=""></a>
        <a href=""><img class="twit" src="img/logo-twitter.svg" alt=""></a>
        <a href=""><img class="insta" src="img/logo-instagram.svg" alt=""></a>
    </div>
    <ul class="list">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">BDE-shop</a>
        </li>
        <li>
            <a href="#">Event </a>
        </li>
        <li>
            <a href="#">connexion</a>
        </li>
    </ul>
    <p class="copyright">
        powered and developed by groupe9
    </p>
    <p class="cata">rayan.ghomsi@2023</p>
</footer>



<script src="app/acapp.js"></script>
</body>
</html>
