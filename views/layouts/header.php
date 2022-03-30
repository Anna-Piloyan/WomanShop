
<!DOCTYPE html>
<html lang="en">

<head>
    <title>WomanShopModist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="/template/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/animate.css">

    <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/template/css/magnific-popup.css">

    <link rel="stylesheet" href="/template/css/aos.css">

    <link rel="stylesheet" href="/template/css/ionicons.min.css">

    <link rel="stylesheet" href="/template/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/template/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/template/css/flaticon.css">
    <link rel="stylesheet" href="/template/css/icomoon.css">
    <link rel="stylesheet" href="/template/css/style.css">
</head>

<body>
<?include_once(ROOT . "/config/config.php")?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Modist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="/catalog">Catalog</a>
                            <a class="dropdown-item" href="/cart">Cart</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <?php foreach ($categories as $item) : ?>

                                <a class="dropdown-item" href="/category/<?= $item['id'] ?>"><?= $item['name'] ?></a>

                            <?php endforeach ?>

                        </div>
                    </li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/contacts" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/cart" class="nav-link" id="cart-count"><span class="icon-shopping_cart"></span>Cart[<?= Cart::countItems(); ?>]</a></li>
                    <?php if (User::isGuest()) : ?>

                        <li class="nav-item"><a href="/register" class="nav-link"><span class="icon-user"></span> Registration</a></li>
                        <li class="nav-item"><a href="/user/login" class="nav-link"><span class="icon-lock"></span> Login</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a href="/cabinet" class="nav-link"><span class="icon-user"></span> Account</a></li>
                        <li class="nav-item"><a href="/user/logout" class="nav-link"><span class="icon-sign-out"></span> Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
  
    <!-- END nav -->