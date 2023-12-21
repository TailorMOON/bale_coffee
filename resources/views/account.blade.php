<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bale Coffee | Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/229b4c5407.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <a class="navbar-brand text-dark" href="/">
            <img src="" alt="" width="60" height="60" class="d-inline-block align-top">
            BALE COFFEE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto nav-pills">
            <li class="nav-item">
                <a class="nav-link bg-transparent text-dark" href="/#home-section">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-transparent text-dark" href="/#about-section">ABOUT US</a>
            </li>
            <li class="nav-item dropdown dropdown-order">
                <a class="nav-link dropdown-toggle text-dark" id="navbarDropdownMenuOrder" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ORDER
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuOrder">
                    <a class="dropdown-item" order-link id="order-link" href="/order">Via Website</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Via WhatsApp</a>
                    <a class="dropdown-item" href="#">Via Instagram</a>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-account active">
                <a class="nav-link btn btn-light bg-transparent dropdown-toggle text-dark" href="/account" id="navbarDropdownAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #bfbebb;">
                    ACCOUNT
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAccount">
                    <a class="dropdown-item" href="/" data-toggle="modal" data-target="#loginModal">Login</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/" data-toggle="modal" data-target="#registerModal">Register</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    @include('login-modal')
    @include('register-modal')

    <div class="container account-page">
        
    </div>

    <footer class="footer">
        <div class="container-fluid container-fluid-footer-first">
            <div class="row">
                <div class="col-12">
                    <a class="footer-instagram-icon" href="{{$site_instagram}}" target="_blank">
                        <i class="fa-brands fa-square-instagram"></i>
                    </a>
                    <a class="footer-whatsapp-icon" href="{{$site_whatsapp}}" target="_blank">
                        <i class="fa-brands fa-square-whatsapp"></i>
                    </a>
                    <a class="footer-location-icon" href="https://maps.app.goo.gl/RLELpd6uy1ksjFht9" target="_blank">
                        <i class="fa-solid fa-location-dot"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid-footer-second">
            <div class="row">
                <div class="col-2">
                    <div class="header">
                        <a href="">ABOUT US</a>
                    </div>
                    <ul>
                        <div class="body">
                            <li><a href="#">Our Heritage</a></li>
                        </div>
                        <div class="body">
                            <li><a href="#">Pressroom</a></li>
                        </div>
                        <div class="body">
                            <li><a href="#">Our Company</a></li> 
                        </div>
                        <div class="body">
                            <li><a href="#">Career Center</a></li>
                        </div>
                        <div class="body">
                            <li><a href="#">Newsroom</a></li>
                        </div>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="header" >
                        <a href="">CUSTOMER SERVICE</a>    
                    </div>
                    <ul>
                        <li><a href="#">Frequently Asked Questions</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="header">
                        <a href="">QUICK LINKS</a>
                    </div>
                    <ul>
                        <li><a href="#">Store Locator</a></li>
                        <li><a href="#">For Partners</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <div class="footer-brand">
                        <p class="vertical-text">BALE COFFEE</p>
                    </div>
                </div>
                <div class="col-12 policy">
                    <a href="">Privacy Statement</a> | 
                    <a href="">Terms of Use</a> | 
                    <a href="">Site Map</a> | 
                    <a href="">Cookie Preferences</a>
                </div>
                <div class="col-12 copyright">
                    <p>&copy; 2023 Bale Coffee. All rights reserved.</p>
                </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>