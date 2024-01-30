<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anon - eCommerce Website</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{asset('./assets/css/style-prefix.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}">


    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>


    <header>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
                </a>

                <div class="header-search-container">

                    <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

               

<div style="display:flex; justify-content: space-between;gap:30px">
    <a href="{{ route('register') }}">s'identifier</a>
    <a href="{{ route('login') }}">connection</a>
</div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="{{route('aceuil')}}" class="menu-title">Aceuil</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Men's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sports</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Jacket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sunglasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Women's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Perfume</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cosmetics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bags</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Assurances</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="{{route('welcome')}}">voir tous les assurances</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="{{route('listsellers')}}" class="menu-title">Clients</a>

                    </li>

                </ul>

            </div>

        </nav>

    </header>

    <main>
     <center>
        <h2>Liste des assurances</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix de l'assurance</th>
                    <th scope="col">Détails</th>
                </tr>
            </thead>
            @foreach ($articles as $article )
            <tbody>
                <tr>
                    <th scope="row">assurances {{$article->id}}</th>
                    <td>{{$article->titre}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->prix}}</td>
                    <td><a href="detailarticle/{{$article->id}}" class="btn btn-primary">détail</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </center>
    <div>{{$articles->links()}}</div>
    </main>





    <!--
    - FOOTER
  -->

    <footer>

   
        <div class="footer-bottom">

            <div class="container">

                <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Anon</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>






    <!--
    - custom js link
  -->
    <script src="{{asset('./assets/js/script.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
