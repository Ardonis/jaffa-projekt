<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="search">
                        <form class="form-inline my-2 my-lg-0">
                            <img src="https://img.icons8.com/material/24/000000/search--v1.png" />
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="center-box">
                        <div class="navbar-links">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">We Do<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>

                        </div>
                        <div class="logo-icon">
                            <img src="./assets/img/jaffa_logo.png" />
                        </div>
                        <div class="navbar-links">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="search  my-2 my-lg-0">
                        <a href="#" class="badge badge-light">Join</a>
                        <img src="https://img.icons8.com/fluent-systems-filled/48/000000/long-arrow-right.png" />
                    </div>
                </div>
        </div>
        </nav>
    </header>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/svg_images/jaffa-orange.svg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/svg_images/slider1.svg" alt="Sec slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card mb-3 p-4">
                    <div class="features">
                        <img class="d-block w-100 h-100" src="assets/img/svg_images/shield.svg" alt="Sec slide">
                    </div>

                    <div class="card-body">
                        <h1 class="mt-3">Organic Ingredients</h1>
                        <p class="mt-3">All recepies used with full invoice and clear origin.</p>
                        <button type="button" class="btn btn-light mt-3">Find Out More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="features">
                        <img class="d-block w-100 h-100" src="assets/img/svg_images/quality.svg" alt="Sec slide">
                    </div>

                    <div class="card-body">
                        <h1 class="mt-3">Top Quality</h1>
                        <p class="mt-3">Quality chefs from many countries around the world.</p>
                        <button type="button" class="btn btn-light mt-3">Chef List -></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="features">
                        <img class="d-block w-100 h-100" src="assets/img/svg_images/experience.svg" alt="Sec slide">
                    </div>

                    <div class="card-body">
                        <h1 class="mt-3">Lovely Experience</h1>
                        <p class="mt-3">Experince the best space and service available todey.</p>
                        <button type="button" class="btn btn-light mt-3">Our Gallery -></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container special-today">
        <h1 class="mt-5 title">What's special today?</h1>
        <p>Special menus updated every day as well as seasonal.<a href="#" class="view"> View All Menu >>></a></p>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card special-today-cards ">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-12 col-md-4 p-0 img-article" style="background-image: url('assets/img/svg_images/american-steak.svg');">
                            <div class="img-card-wrapper">
                                <span class="discount">-10%</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">American Steak 160gr im</h5>
                                <p class="card-text">French-style steak is sautéed at the right temperature, the outside is quite good, but the inside is still red.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card special-today-cards">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-md-4 p-0 img-article" style="background-image:url('assets/img/svg_images/beef-wellington.svg')" alt="American">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Beef Wellington</h5>
                                <p class="card-text">Beef Wellington is an English pie made of fillet steak coated with pâté (often pâté de foie gras) and duxelles.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card special-today-cards">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-12 col-md-4 p-0 img-article" style="background-image: url('assets/img/svg_images/beef-short-rib.svg');">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Beef Short Rib</h5>
                                <p class="card-text">Red wine braised short rib, potato purée, wild mushrooms. Cooked long and slow in a rich red wine sauce.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card special-today-cards">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-12 col-md-4 p-0 img-article" style="background-image: url('assets/img/svg_images/grilled-lamb.svg');">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Grilled Lamb Rib Chops</h5>
                                <p class="card-text ">Grilling lamb chops is no harder than grilling a burger or a steak. But there are a few tricks that will give you stellar results.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card special-today-cards">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-12 col-md-4 p-0 img-article img-fluid" style="background-image: url('assets/img/svg_images/beef.svg');">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Beef Short Rib</h5>
                                <p class="card-text">Red wine braised short rib, potato purée, wild mushrooms. Cooked long and slow in a rich red wine sauce.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card special-today-cards ">
                    <div class="d-flex flex-wrap h-100">
                        <div class="col-12 col-md-4 p-0 img-article" style="background-image: url('assets/img/svg_images/grilled-lamb-perfekte.svg');">
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Grilled Lamb Rib Chops</h5>
                                <p class="card-text">Grilling lamb chops is no harder than grilling a burger or a steak. But there are a few tricks that will give you stellar results.</p>
                                <a href="#" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div id="productView" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div class=" pb-5">
                        <div>
                            <img src="./assets/img/svg_images/freskia-pranverore.svg" alt="">
                        </div>
                        <div class=" pb-5">
                            <p class="mb-3">
                                Red wine braised short rib, potato purée, wild mushrooms. Cooked long and slow in a rich red wine sauce. Red wine braised short rib, potato purée, wild mushrooms. Cooked long and slow in a rich red wine sauce.
                            </p>
                        </div>
                        <div class="position-relative" style="height: 40%;">
                            <ol class="carousel-indicators">
                                <li data-target="#productView" data-slide-to="0" class="active">
                                    <img src="assets/img/svg_images/dredhza1.svg" width="100%" height="100%" />
                                </li>
                                <li data-target="#productView" data-slide-to="1">
                                    <img src="assets/img/svg_images/pjeshka.svg" width="100%" height="100%" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" src="assets/img/svg_images/dredhza.svg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" src="assets/img/svg_images/dredhza.svg" alt="Second slide">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="mt-5 title">Exclusive Promotions</h1>
        <p class="mb-3">Stay update with our promotions to get the best experience.<a href="#" class="view">Subscribe Now! >>></a></p>
        <div class="owl-carousel owl-theme mb-3">
            <div class="item">
                <div class="item-overlay"></div>
                <div class="card-img-wrapper" style="background-image: url('./assets/img/svg_images/champion.svg');">

                </div>
                <div class="card-img-overlay">
                    <p class="card-text" style="color: white;">Champions Of Fun - The Beset Event Ever For Young Kids</p>
                    <a href="#" class="card-link">View Details >>></a>
                </div>
            </div>
            <div class="item">
                <div class="item-overlay"></div>
                <div class="card-img-wrapper" style="background-image: url('./assets/img/svg_images/promotion.svg');">

                </div>
                <div class="card-img-overlay">
                    <p class="card-text" style="color: white;">Champions Of Fun - The Beset Event Ever For Young Kids</p>
                    <a href="#" class="card-link">View Details >>></a>
                </div>
            </div>
            <div class="item">
                <div class="item-overlay"></div>
                <div class="card-img-wrapper" style="background-image: url('./assets/img/svg_images/jaffa-gift.svg');">

                </div>
                <div class="card-img-overlay">
                    <p class="card-text" style="color: white;">Champions Of Fun - The Beset Event Ever For Young Kids</p>
                    <a href="#" class="card-link">View Details >>></a>
                </div>
            </div>

        </div>
    </div>
    <div class="container overflow">
        <h1 class="mt-5 title mt-5">Drop a Massage</h1>
        <p class="mb-3">Drop here a message if you want to know something about!</p>
        <div class="row mt-5">
            <div class="col-12 col-md-12 ">
                <form class="needs-validation col-md-6 col-12" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">YOUR NAME</label>
                            <input type="text" class="form-control" id="validationCustom01" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">PHONE NUMBER</label>
                            <input type="text" class="form-control" id="validationCustom02" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 mt-3">
                            <label for="validationCustomUsername">PERSONAL INFO</label>
                            <input type="text" class="form-control" id="validationCustom03" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mt-3">
                            <label for="validationCustomUsername">ARES</label>
                            <input type="text" class="form-control" id="validationCustom04" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label for="comment">MESSAGE</label>
                                <textarea class="form-control message" rows="5" id="comment" placeholder="Leave Yourn(Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit-place">
                        <p class="mb-3 sumbit-p">We will contact you back via phone number
                            to confirm your message.
                        </p>

                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
                <div class="position-absolute">

                    <img src="./assets/img/svg_images/map.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="subscribe mt-3">
            <div>
                <h1 class="mt-5 title mt-5">Subscribe</h1>
                <p class="mb-3">Subscribe to get our latest promotions</p>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"></button>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="container">
            <div class="row mt-5 p-5 footer">
                <div class="col-md-3">
                    <div class="logo-icon">
                        <img src="./assets/img/jaffa_logo.png" />
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy </p>
                </div>
                <div class="col-md-3 link">
                    <ul>
                        <li>Meet Olarm</li>
                        <li>Features</li>
                        <li>Plans</li>
                        <li>Media</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div class="col-md-3 link">
                    <ul>
                        <li>Contact Us</li>
                        <li>Terms of Service</li>
                        <li>Privacy</li>
                        <li>Careers</li>
                        <li>FAQ's</li>
                    </ul>
                </div>
                    <div class="col-md-3 social-media">
                        <div>
                            <img src="./assets/img/svg_images/instagram.svg" alt="">
                            <img src="./assets/img/svg_images/youtube.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },

            }
        })
    </script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>