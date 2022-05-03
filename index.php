<?php
    include './connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/packages.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/base.css">
    <link rel="stylesheet" href="./assets/icon/themify-icons/themify-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Holiday</title>
</head>
<body>
    <div class="header-mini">
        <div class="header-mini__buy-now">BUY NOW</div>
        <a href="" class="header-mini__buy-btn">
            <span class="header-mini__unit">$</span>
            <div class="header-mini__price">54</div>
        </a>
        <div class="header-mini-icon">
            <img src="./assets/img/header-mini.png" alt="">
        </div>
    </div>
    <!-- Header -->
    <header class="header">
        <div class="header-nav">
            <div class="nav">
                <div class="nav__logo">
                    <img src="./assets/img/logo-travel.png" alt="">
                </div>
                <div class="nav__option">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="">Home</a></li>
                        <li class="nav__item hover-package">
                            <a href="./packages.php">Packets</a>
                            <div class="subnav">
                                <ul class="subnav__list">
                                    <li class="subnav__item">
                                        Search 1
                                        <span style="background-color: #f76570;" class="subnav__item--btn">HOT</span>
                                    </li>
                                    <li class="subnav__item">Search 2</li>
                                    <li class="subnav__item hover-tour-package">
                                        Tour Package
                                        <i class="subnav__item--icon ti-angle-right"></i>
                                        <div class="subnav__item-child-tour-package">
                                            <ul class="subnav__list-of-tour-package">
                                                <li class="subnav__item">Custom Map</li>
                                                <li class="subnav__item">360<sup>o</sup> Panorama</li>
                                                <li class="subnav__item">Default</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="subnav__item">Destination</li>
                                    <li class="subnav__item">Typology</li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item nav__item-shop ">
                            <a href="">Shop</a>
                            <div class="subnav__item-child-shop">
                                <ul class="subnav__list-of-shop">
                                    <li class="subnav__item">Archive</li>
                                    <li class="subnav__item">Single Product</li>
                                    <li class="subnav__item">Cart</li>
                                    <li class="subnav__item">Checkout</li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item nav__item-shop">
                            <a href="">About Us</a>
                            <div class="subnav__item-child-about-us">
                                <ul class="subnav__list-of-about-us">
                                    <li class="subnav__item">
                                        About Us
                                        <span style="background-color: #1bbc9b;" class="subnav__item--btn">NEW</span>
                                    </li>
                                    <li class="subnav__item">About Us 2</li>
                                    <li class="subnav__item">About Us 3</li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item nav__item-pages">     
                            <a href="">Pages</a>
                            <div class="subnav__item-child-pages">
                                <ul class="subnav__list-of-pages">
                                    <li class="subnav__item">Services</li>
                                    <li class="subnav__item">Agency Tours</li>
                                    <li class="subnav__item">Testimonials</li>
                                    <li class="subnav__item">Prices</li>
                                    <li class="subnav__item">Promotions</li>
                                    <li class="subnav__item">Fag</li>
                                    <li class="subnav__item">Coming Soon</li>
                                    <li class="subnav__item subnav__item-about-us-2">
                                        About Us
                                        <i class="subnav__item--icon ti-angle-right"></i>
                                        <div class="subnav__item-child-about-us-2">
                                            <ul class="subnav__list-of-about-us-2">
                                                <li class="subnav__item">About Us 1</li>
                                                <li class="subnav__item">About Us 2</li>
                                                <li class="subnav__item">About Us 3</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="subnav__item subnav__item-contact-2">
                                        Contact
                                        <i class="subnav__item--icon ti-angle-right"></i>
                                        <div class="subnav__item-child-contact-2">
                                            <ul class="subnav__list-of-contact-2">
                                                <li class="subnav__item">Contact 1</li>
                                                <li class="subnav__item">Contact 2</li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </div>

                        </li>
                        <li class="nav__item nav__item-news">
                            <a href="">News</a>
                            <div class="subnav__item-child-news">
                                <ul class="subnav__list-of-news">
                                    <li class="subnav__item">Archive</li>
                                    <li class="subnav__item subnav__item-single-post">
                                        Single Post
                                        <i class="subnav__item--icon ti-angle-right"></i>
                                        <div class="subnav__item-child-single-post">
                                            <ul class="subnav__list-of-single-post">
                                                <li class="subnav__item">Full Width</li>
                                                <li class="subnav__item">Right Slidebar</li>
                                                <li class="subnav__item">Left Slidebar</li>
                                            </ul>
                                        </div>
                                    </li> 
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item nav__item-contact">
                            <a href="">Contact</a>
                            <div class="subnav__item-child-contact">
                                <ul class="subnav__list-of-contact">
                                    <li class="subnav__item">Contact 1</li>
                                    <li class="subnav__item">Contact 2</li> 
                                </ul>
                            </div>
                        </li>
                        <li class="nav__item nav__item--active">
                           <span class="nav__item--btn"><a href="">Book now</a></span>
                        </li>
                    </ul>
                </div>
                <label for="open--close" class="nav__icon ti-align-justify">
                </label>
            </div>
        </div>
    </header>
    <!-- Slider -->
    <div class="slider">
        <div class="slider__content">
            <h1 class="slider__content-title">Search your next
                 <span class="slider__content-underline">Holiday</span>
            </h1>
            <h3 class="slider__content-sub-title">CHECK OUR BEST PROMOTION</h3>
            <div class="slider__content-wrap">
                <input type="text" placeholder="Choose your Destination ..." class="slider__content-search">
                <i class="slider__content-icon ti-search"></i>
                <div class="slider__content-history">
                    <h3 class="slider__content-history-title">Choose your Destination ...</h3>
                    <p class="slider__content-history-name">Europe</p>
                    <ol class="slider__content-history-list">
                        <li class="slider__content-history-item">Italy</li>
                        <li class="slider__content-history-item">Netherlands</li>
                    </ol>
                    <p class="slider__content-history-name">Asia</p>
                    <ol class="slider__content-history-list">
                        <li class="slider__content-history-item">Thailandia</li>
                    </ol>
                    <p class="slider__content-history-name">United States</p>
                    <p class="slider__content-history-name">Oceania</p>
                </div>
            </div>
            <div class="slider__content-img">
                <ul class="slider__content-img-list">
                    <li class="slider__content-img-item">
                        <img src="./assets/img/t-relax.png" alt="" class="slider__content-img-item-pic">
                        <span class="slider__content-img-item-text">RELAX</span>
                    </li>
                    <li class="slider__content-img-item">
                        <img src="./assets/img/t-cultural.png" alt="" class="slider__content-img-item-pic">
                        <span class="slider__content-img-item-text">CULTURAL</span>
                    </li>
                    <li class="slider__content-img-item">
                        <img src="./assets/img/t-sport.png" alt="" class="slider__content-img-item-pic">
                        <span class="slider__content-img-item-text">SPORT</span>
                    </li>
                    <li class="slider__content-img-item">
                        <img src="./assets/img/t-history.png" alt="" class="slider__content-img-item-pic">
                        <span class="slider__content-img-item-text">HISTORY</span>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- Content -->
    <div class="content">
        <!-- Destination -->
        <div class="destination-section">
            <div class="content-section">
                <h2 class="des__sub-title">OUR PROPOSALS</h2>
                <h1 class="des__title">OUR 
                    <span class="des__title-underline">DESTINATIONS</span>
                </h1>

                <div class="des__list">

                    <?php
                        $query_stmt = "select * from destinations";
                        $stmt = $dbc ->query($query_stmt);
                        if($stmt){
                            while($row = $stmt->fetch_assoc()){
                    ?>
                    <div class="col-lg-4 col-sm-6 des__item">
                        <img src="<?php echo $row['img'] ?>" alt="" class="des__item-img">
                        <div class="des__item-content">
                            <div class="des__item-content-img">
                                <img src="<?php echo $row['icon'] ?>" alt="">
                            </div>
                            <div class="des__item-content-text">
                                <h1 class="des__item-title"><?php echo $row['title'] ?></h1>                            
                                <p class="des__item-text"><?php echo $row['text'] ?></p>
                            </div>
                        </div>
                        <div class="des__item--hover">
                            <h1 class="des__item--hover-title">Packages</h1>
                            <div class="des__item--hover-list">
                                <a href="" class="des__item--hover-item"><?php echo $row['package'] ?></a>
                            </div>
                            <div class="des__item--hover-btn">
                                <a href="" class="des__item--hover-btn-link">VIEW DESTINATION</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- Advertisement -->
        <div class="advertisement-section">
            <div class="advertisement__content">
                <h1 class="advertisement__content-title">Your</h1>
                <h1 class="advertisement__content-title">Next
                    <span class="advertisement__content-title-underline">Holiday</span>
                </h1>
            </div>
            <div class="advertisement__btn">
                <a href="./packages.html" class="advertisement__btn-link">VIEW ALL PACKAGES</a>
            </div>
        </div>

        <!-- Introduce -->
        <div class="introduce-section">
            <div class="content-section">
                <div class="introduce__content">
                    <div class="col-lg-4 col-sm-6 introduce__paragragh">
                        <h2 class="introduce__paragragh-sub-title">NORTH AMERICA</h2>
                        <p class="introduce__paragragh-title">The Best
                            <span class="introduce__paragragh-title-underline">Beaches</span> 
                        </p>
                        <p class="introduce__paragragh-content">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque molestie ultricies mauris ac.</p>
                        <p class="introduce__paragragh-content">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque molestie ultricies mauris ac.</p>
                        <div class="introduce__paragragh-price">
                            <span class="introduce__paragragh-old-price">800</span>
                            <span class="introduce__paragragh-new-price">500 $</span>
                            / FOR PERSON
                        </div>
                        <div class="introduce__paragragh-btn">
                            <a href="" class="introduce__paragragh-btn-link">BOOK NOW</a>
                        </div>
                    </div>
    
                    <div class="introduce__picture">
                        <div class="introduce__time">
                            <div class="introduce__time-start introduce__time-days">000 <br> <span class="introduce__time-unit"> DAYS</span></div>
                            <div class="introduce__time-start introduce__time-hours">00  <br><span class="introduce__time-unit">HOURS</span> </div>
                            <div class="introduce__time-start introduce__time-minuste">00 <br><span class="introduce__time-unit">MINUTES</span> </div>
                            <div class="introduce__time-start introduce__time-second">00 <br><span class="introduce__time-unit"> SECONDS</span></div>
                        </div>
                    </div>
                </div>
                <div class="introduce__logo">
                    <div class="col-lg-4 col-sm-12 introduce__item">
                        <div class="introduce__item-logo">
                            <img src="./assets/img/introduce/world-tour.png" alt="">
                        </div>
                        <div class="introduce__item-content">
                            <h1 class="introduce__item-content-title">World Tour</h1>
                            <p class="introduce__item-content-p">Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                            <a href="" class="introduce__item-content-link">View More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 introduce__item">
                        <div class="introduce__item-logo">
                            <img src="./assets/img/introduce/cruises.png" alt="">
                        </div>
                        <div class="introduce__item-content">
                            <h1 class="introduce__item-content-title">Cruises</h1>
                            <p class="introduce__item-content-p">Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                            <a href="" class="introduce__item-content-link">View More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 introduce__item">
                        <div class="introduce__item-logo">
                            <img src="./assets/img/introduce/best-tour.png" alt="">
                        </div>
                        <div class="introduce__item-content">
                            <h1 class="introduce__item-content-title">Best Tour</h1>
                            <p class="introduce__item-content-p">Lorem ipsum dolor sit amet conse ctetur adip iscing elit Proin rhonc us urna dictum.</p>
                            <a href="" class="introduce__item-content-link">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discover -->
        <div class="discover-section">
            <div class="discover__places img-cities">
                <div class="discover__places-sub-title">01. Last Minute</div>
                <div class="discover__places-title">Discover Cities</div>
                <a href="" class="discover__places-btn">Details</a>
            </div>
            <div class="discover__places img-nature">
                <div class="discover__places-sub-title">02. Promotion</div>
                <div class="discover__places-title">Discover Nature</div>
                <a href="" class="discover__places-btn">Details</a>
            </div>
        </div>

        <!-- Packages -->
        <div class="packages-section">
            <div class="content-section">
                <h2 class="packages__sub-title">PROMOTIONS</h2>
                <h1 class="packages__title">OUR 
                    <span class="packages__title-underline">PACKAGES</span>
                </h1>

                <div class="packages__list">

                        <?php
                            $query_stmt = "SELECT * FROM packages where id<=3";
                            $stmt = $dbc ->query($query_stmt);
                            if($stmt){
                                while($row = $stmt->fetch_assoc()){
                        ?>
                    <div class="col-lg-4 col-sm-6 col-12 packages__item">
                        <div class="packages__item-img">
                            <img src="<?php echo $row['img']?>" alt="" class="packages__item-img-pic">
                            <a href="" class="packages__item-img-icon <?php echo $row['colorIcon']?>">
                                <img src="<?php echo $row['icon']?>" alt="">
                            </a>
                        </div>
                        <div class="packages__item-content">
                            <div class="packages__item-destination">
                                <h1 class="packages__item-destination-name"><?php echo $row['title']?></h1>
                                <p class="packages__item-destination-place">
                                    <i class="ti-location-pin"></i>
                                    <?php echo $row['location']?>
                                </p>
                            </div>
                            <div class="packages__item-price">
                                <p class="packages__item-price-name"><?php echo $row['type']?>
                                    <button class="packages__item-price-btn <?php echo $row['colorBtn']?>">+ 1</button>
                                </p>
                                <span class="packages__item-price-money">
                                    <span class="packages__item-price-old"><?php echo $row['oldPrice']?></span>
                                    <?php echo $row['newPrice']?> $
                                </span>
                            </div>
                            <div class="packages__item-description">
                                <p class="packages__item-description-p"><?php echo $row['description']?></p>
                                <a href="./details.php?id=<?php echo $row['id']?>" class="packages__item-description-btn <?php echo $row['colorBtn']?>">DETAILS</a>
                            </div>
                        </div>
                    </div>
                        <?php
                                }
                            }
                        ?>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="footer-section">
        <div class="content-section">
            <div class="footer__margin-8"></div>
            <div class="footer__contact">
                <div class="footer__contact-info">
                    <div class="footer__contact-sub-title">KEEP IN TOUCH</div>
                    <h1 class="footer__contact-title">Travel with Us</h1>
                    <div class="clear"></div>
                </div>
                <div class="footer__contact-input">
                    <input type="text" class="footer__contact-input-btn">
                    <button class="footer__contact-input-send">SEND</button>
                </div>
            </div>
            <div class="footer__margin-8"></div>

            <div class="footer__content">
                <div class="footer__introduce">
                    <div class="footer__introduce-content">
                        <img src="./assets/img/logo-footer.png" alt="" class="footer__introduce-logo">
                        <p class="footer__introduce-paragragh">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut diam et nibh <ins>condimentum</ins> venenatis eu ac magnasin. Quisque interdum est mauris, eget ullamcorper</p>
                        <div class="footer__introduce-link">
                            <a href="" class="ti-twitter-alt"></a>
                            <a href="" class="ti-youtube"></a>
                            <a href="" class="ti-facebook"></a>
                            <a href="" class="ti-vimeo-alt"></a>
                        </div>
                    </div>
                    <div class="footer__introduce-list">
                        <div class="col-3 footer__introduce-item">
                            <h1 class="footer__introduce-item-title">OUR AGENCY</h1>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Services
                            </p>
                            <p class="footer__introduce-item-p"><i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Insurancee
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Agency
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Tourism
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Payment
                            </p>
                        </div>
                        <div class="col-3 footer__introduce-item">
                            <h1 class="footer__introduce-item-title">PARTNERS</h1>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Booking
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                RentalCar
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                HostelWorld
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Trivago
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                TripAdvisor
                            </p>
                        </div>
                        <div class="col-3 footer__introduce-item">
                            <h1 class="footer__introduce-item-title">LAST MINUTE</h1>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                London
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                California
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Indonesia
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Europe
                            </p>
                            <p class="footer__introduce-item-p">
                                <i class="footer__introduce-item-p-icon ti-angle-right"></i>
                                Oceania
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer__end">
                    <p class="footer__end-title">THE BEST WORDPRESS TRAVEL THEME</p>
                    <p class="footer__end-title">COPYRIGHT NICDARK THEMES 2018</p>
                </div>
            </div>
        </div>           
    </footer>

    <!-- menu navigation -->
    <input type="checkbox" name="" class="open--close" id="open--close" hidden >
    <label for="open--close" class="overlay"></label>
    <div class="navigation">
        <div class="navigation__container">
            <label for="open--close" class="btn-close ti-close"></label>
            
            <div class="navigation__packages">
                <p class="nav__packages-sub-title">BEST</p>
                <h1 class="nav__packages-title">
                    <u>
                        PACKAGES
                    </u>
                </h1>
                <div class="nav__packages-item">
                    <img src="./assets/img/packages/berlin.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">Berlin</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            Europe
                        </p>
                        <a href="" class="nav__packages-item-img-icon berlin-icon-color">
                            FROM 700 $
                        </a>
                    </div>
                </div>

                <div class="nav__packages-item">
                    <img src="./assets/img/packages/hong-kong.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">Hong Kong</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            Asia
                        </p>
                        <a href="" class="nav__packages-item-img-icon hongkong-icon-color">
                            FROM 500 $
                        </a>
                    </div>
                </div>

                <div class="nav__packages-item">
                    <img src="./assets/img/packages/san-francisco.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">San Francisco</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            United State
                        </p>
                        <a href="" class="nav__packages-item-img-icon sanFrancisco-icon-color">
                            FROM 400 $
                        </a>
                    </div>
                </div>
            </div>

            <div class="des__item des__item-of-navigation">
                <img src="./assets/img/destinations/des-img/Europe.jpg" alt="" class="des__item-img navigation-section">
                <div class="des__item-content navigation-section des__item-content--navigation">
                    <div class="des__item-content-img">
                        <img src="./assets/img/destinations/des-icon/with-Europe.png" alt="">
                    </div>
                    <div class="des__item-content-text">
                        <h1 class="des__item-title">Europe</h1>                            
                        <p class="des__item-text">3 PACKAGES</p>
                    </div>
                </div>
                <div class="des__item--hover navigation-section des__item--hover--navigation">
                    <h1 class="des__item--hover-title">Packages</h1>
                    <div class="des__item--hover-list">
                        <a href="" class="des__item--hover-item">Berlin</a>
                        <a href="" class="des__item--hover-item">Amsterdam</a>
                        <a href="" class="des__item--hover-item">Tuscany</a>
                    </div>
                    <div class="des__item--hover-btn">
                        <a href="" class="des__item--hover-btn-link">VIEW DESTINATION</a>
                    </div>
                </div>
            </div>

            <div class="navigation__minutes">
                <p class="nav__packages-sub-title">LAST</p>
                <h1 class="nav__packages-title nav__minutes-title">
                    <u>
                        MINUTES
                    </u>
                </h1>
                <div class="nav__packages-item">
                    <img src="./assets/img/minutes-navigation/tuscany.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">Tuscany</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            Italy
                        </p>
                        <a href="" class="nav__packages-item-img-icon minutes-background-color">
                            FROM 730 $
                        </a>
                    </div>
                </div>

                <div class="nav__packages-item">
                    <img src="./assets/img/minutes-navigation/amsterdam.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">Amsterdam</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            Netherlands
                        </p>
                        <a href="" class="nav__packages-item-img-icon amsterdam-background-color">
                            FROM 1500 $
                        </a>
                    </div>
                </div>

                <div class="nav__packages-item">
                    <img src="./assets/img/minutes-navigation/phuket.jpg" alt="" class="nav__packages__item-img-pic">
                    <div class="nav__packages-item-info">
                        <h1 class="nav__packages-item-info-name">Phuket</h1>
                        <p class="packages__item-destination-place">
                            <i class="ti-location-pin"></i>
                            Thailandia
                        </p>
                        <a href="" class="nav__packages-item-img-icon thailandia-background-color">
                            FROM 1200 $
                        </a>
                    </div>
                </div>

        </div>
    </div>

    <script src="./assets/index.js"></script>
    <script>
        $(document).ready(function(){
            $(".slider__content-search").click(function(){
                $(".slider__content-history").slideToggle("fast");
            });
        });
    </script>
</body>
</html>