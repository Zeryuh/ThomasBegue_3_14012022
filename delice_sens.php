<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>OhMyFood</title>
</head>

<body>
    <header class="header">
        <a href="index.html"><i class="header__icon fas fa-arrow-left"></i></a>
        <h1 class="header__titre">
            ohmyfood
        </h1>
    </header>

    <img src="assets\images\restaurants\delice_sens.jpg" alt="Delice_sens" class="top__image">

    <main class="global container">
        <div class="global__restaurant">
            <h2 class="global__title">Le délice des sens</h2>
            <div class="global__btn">
                <i class="global__icon far fa-heart" aria-hidden="true"></i>
                <i class="global__icon fas fa-heart"></i>
            </div>
        </div>
        <div class="menu__global">
            <section class="menu">
                <h4 class="menu__title">Entrées</h4>
                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Tartare de thon</h4>
                        <p class="plat__name__description">Assaisonné au yuzu</p>
                    </div>
                    <div class="plat__price">25€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Bouchée de homard croustillant</h4>
                        <p class="plat__name__description">Et sa farandole de petits légumes</p>
                    </div>
                    <div class="plat__price">35€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Velouté de cèpes</h4>
                        <p class="plat__name__description">Aux truffes</p>
                    </div>
                    <div class="plat__price">20€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>
            </section>

            <section class="menu">
                <h4 class="menu__title">Plats</h4>
                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Poulet rôti aux herbes de Provence</h4>
                        <p class="plat__name__description">Et sa crème de truffe</p>
                    </div>
                    <div class="plat__price">40€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Langouste rôtie</h4>
                        <p class="plat__name__description">Et ses légumes de saison</p>
                    </div>
                    <div class="plat__price">35€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Côte de boeuf Angus</h4>
                        <p class="plat__name__description">Et sa purée de panais</p>
                    </div>
                    <div class="plat__price">44€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>
            </section>

            <section class="menu">
                <h4 class="menu__title">Desserts</h4>
                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Farandole de desserts</h4>
                        <p class="plat__name__description">Du chef</p>
                    </div>
                    <div class="plat__price">18€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Crème brulée</h4>
                        <p class="plat__name__description">Revisité</p>
                    </div>
                    <div class="plat__price">22€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>

                <section class="plat">
                    <div class="plat__name">
                        <h4 class="plat__name__title">Tiramisu</h4>
                        <p class="plat__name__description">À la noisette</p>
                    </div>
                    <div class="plat__price">23€</div>
                    <div class="plat__confirmation">
                        <div class="plat__cacheicon">
                            <i class="plat__icon fas fa-check"></i>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <div class="global__commander">
            <button class="commander">Commander</button>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="footer__title">ohmyfood</p>
            <nav>
                <ul class="footer__information">
                    <li class="footer__liste">
                        <a class="footer__direction" href="#"><i class="footer__icon fas fa-utensils"></i>Proposer un restaurant</a>
                    </li>
                    <li class="footer__liste">
                        <a class="footer__direction" href="#"><i class="footer__icon fas fa-hands-helping"></i>Devenir partenaire</a>
                    </li>
                    <li class="footer__liste">
                        <a class="footer__direction" href="#">Mentions légales</a>
                    </li>
                    <li class="footer__liste">
                        <a class="footer__direction" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>



    <script src="https://kit.fontawesome.com/e6a1b3e5f7.js" crossorigin="anonymous"></script>

</body>

</html>