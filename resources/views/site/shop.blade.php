

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma boutique en ligne</title>
    <link rel="stylesheet" href={{asset('css/shopstyle.css')}}>
    <link rel="stylesheet" href="{{asset('css/acstyle .css')}}">

</head>

<body>
<header class="MY-HEADER">
    <nav >
        <div class="logo">
            <a href=""><img src="img/BDE.jpg" alt=""><p>BDE</p></a>
        </div>
        <ul class="liste-nav">
            <li class="item-nav" ><a href="accueil.blade.php" >Home</a></li>
            <li class="item-nav"><a href="shop.php" >BDE-shop</a></li>
            <li class="item-nav"><a href="evenement.php" >Event</a></li>
            <li class="item-nav "><a href="connexion.php">connexion</a></li>
            <li class="item-nav "><a href="adminlogin.php">admin</a></li>
        </ul>
        <img src="img/menu.svg" alt="menu burger" class="logo-menu">
    </nav>
</header>

<main>
    <div id="filters">
        <h2>Filtres</h2>
        <form>
            <label for="category-filter" class="filtre">Catégorie :</label>
            <select id="category-filter">
                <option value="all">Toutes les catégories</option>
                <option value="informatique">Matériel informatique</option>
                <option value="fournitures">Fournitures scolaires</option>
            </select>

            <label for="price-filter" class="filtre">Prix :</label>
            <select id="price-filter">
                <option value="all">Tous les prix</option>
                <option value="asc">Prix croissant</option>
                <option value="desc">Prix décroissant</option>
            </select>
        </form>
    </div>
    <br/>
    <br/>
    <br/>



    <div id="products">
        <h2>Produits</h2>
        <ul>
            @foreach($products as $product)
            <li>
                <div class="product">
                    <img class="ya" src="{{ $product->image }}" alt="Produit">
                    <h3>{{$product->name }}</h3>
                    <h4>{{$product->price }} fcfa</h4>
                    <p>{{substr($product->description, 0, 15) }}</p>
                    <button>Ajouter au panier</button>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div id="cart">
        <h2>Panier</h2>
        <ul>
            <!-- Les produits du panier seront ajoutés ici dynamiquement avec JavaScript -->
        </ul>
        <div id="cart-total">Total : 0 €</div>
        <button id="checkout-btn">Acheter</button>
    </div>
</main>
<script src="app/acapp.js"></script>

</body>

</html>
