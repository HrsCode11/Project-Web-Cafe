<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/navbar.css">
    </head>
    <body>
        <header class="custom__header">
            <a href="#" class="header__logo">AFH Cofe</a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="navs" id="nav-menu">
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
    
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/img/perfil.png" alt="">
                        </div>
                        
                        <div>
                            <a href="#" class="nav__name">AFH Cofee</a>
                            <span class="nav__profesion">Web Cafe</span>
                        </div>
                    </div>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#" class="nav__link active">Home</a></li>
                            <li class="nav__item"><a href="menus" class="nav__link">Menu</a></li>
                            <li class="nav__item"><a href="#" class="nav__link">Pesanan</a></li>
                            <li class="nav__item">
                            <form action="{{ route('actionlogout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="nav__link" style="background: none; border: none; padding: 0; color: inherit; cursor: pointer;">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
    
                    <div class="nav__social">
                        <a href="#" class="nav__social-icon"><ion-icon name="logo-linkedin"></ion-icon></a>
                        <a href="#" class="nav__social-icon"><ion-icon name="logo-github"></ion-icon></a>
                        <a href="#" class="nav__social-icon"><ion-icon name="logo-behance"></ion-icon></a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/navbar.js"></script>
    </body>
</html>