<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dailywine | Your choice</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

  <!-- CSS here -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/flaticon.css">
  <link rel="stylesheet" href="../assets/css/slicknav.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">
  <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/css/themify-icons.css">
  <link rel="stylesheet" href="../assets/css/slick.css">
  <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?PHP
session_start();
if(isset($_POST['confirm']) && ($_POST['confirm'])) {
  include("../showPHP/check_confirm.php");
  header('Location: confirmation.php');  
}
?>

<body>

  <header>
    <!-- Header Start -->
    <div class="header-area">
      <div class="main-header header-sticky">
        <div class="container-fluid">
          <div class="menu-wrapper">
            <!-- Logo -->
            <div class="logo">
              <a href="../../index.php"><img src="../assets/img/logo/logo.png" alt="" style="width: 50%;"></a>
            </div>
            <!-- Main-menu -->
            <div class="main-menu d-none d-lg-block">
              <nav>
                <ul id="navigation">
                  <li><a href="../../index.php">Home</a></li>
                  <li><a href="shop.php">shop</a></li>
                  <li><a href="about.php">about</a></li>
                  <li class="hot"><a href="#">Latest</a>
                    <ul class="submenu">
                      <li><a href="shop.php"> Product list</a></li>
                    </ul>
                  </li>

                  <li><a href="#">Pages</a>
                    <ul class="submenu">
                      <li><a href="login.php">Login</a></li>
                      <li><a href="cart.php">Cart</a></li>
                      <li><a href="confirmation.php">Confirmation</a></li>
                      <li><a href="checkout.php">Product Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
            <!-- Header Right -->
            <div class="header-right">
              <ul>
                <li>
                  <div class="nav-search search-switch">
                    <span class="flaticon-search"></span>
                  </div>
                </li>
                <li> <a href="login.php"><span class="flaticon-user"></span></a></li>
                <li><a href="cart.php"><span class="flaticon-shopping-cart"></span></a> </li>
              </ul>
            </div>
          </div>
          <!-- Mobile Menu -->
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
  </header>
  <main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>Checkout</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================Checkout Area =================-->
    <?PHP  if(isset($_SESSION['cart_item']) && ($_SESSION['cart_item'] > 0)) { ?>
    <section class="checkout_area section_padding">
      <div class="container">
        <?PHP if (isset($_SESSION['sid']) && ($_SESSION['sid'] > 0)) { ?>
          <div class="billing_details">
            <div class="row">
              <div class="col-lg-8">
                <h3>Billing Details</h3>
                <form class="row contact_form" action="checkout.php" method="post" novalidate="novalidate">
                  <div class="col-md-6 form-group p_star">
                    Name :<input type="text" class="form-control" id="first" name="name" value="<?PHP echo $_SESSION['sName']; ?>" />
                  </div>
                  <div class="col-md-6 form-group p_star">
                    Phone: <input type="text" class="form-control" id="number" name="phone" value="<?PHP echo $_SESSION['sPhone']; ?>" />
                  </div>
                  <div class="col-md-6 form-group p_star">
                    Email: <input type="text" class="form-control" id="email" name="email" value="<?PHP echo $_SESSION['sEmail']; ?>" />
                  </div>
                  <div class="col-md-12 form-group p_star">
                    Address: <input type="text" class="form-control" id="add1" name="address" value="<?PHP echo $_SESSION['sAddress']; ?>" />
                  </div>
                  <div class="col-md-12 form-group">
                    <div class="creat_account">
                      <h3>Shipping Details</h3>
                      <input type="checkbox" id="f-option3" name="selector" />
                      <label for="f-option3">Ship to a different address?</label>
                    </div>
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                  </div>
                  <button type="submit" value="submit" name="confirm" class="btn_3">
                        Proceed to Paypal
                      </button>
                </form>
              </div>
              <div class="col-lg-4">
                <div class="order_box">
                  <h2>Your Order</h2>
                  <ul class="list">
                    <!-- List buy -->
                    <div class="payment_item">
                      <div class="radion_btn">
                        <input type="radio" id="f-option5" name="selector" />
                        <label for="f-option5">Check payments</label>
                        <div class="check"></div>
                      </div>
                      <p>
                        Please send a check to Store Name, Store Street, Store Town,
                        Store State / County, Store Postcode.
                      </p>
                    </div>
                    <div class="payment_item active">
                      <div class="radion_btn">
                        <input type="radio" id="f-option6" name="selector" />
                        <label for="f-option6">Paypal </label>
                        <img src="img/product/single-product/card.jpg" alt="" />
                        <div class="check"></div>
                      </div>
                      <p>
                        Please send a check to Store Name, Store Street, Store Town,
                        Store State / County, Store Postcode.
                      </p>
                    </div>
                    <div class="creat_account">
                      <input type="checkbox" id="f-option4" name="selector" />
                      <label for="f-option4">I’ve read and accept the </label>
                      <a href="#">terms & conditions*</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?PHP } else { ?>
          <div class="returning_customer">
            <div class="check_title">
              <h2>
                Returning Customer?
                <a href="login.php">Click here to login</a>
              </h2>
            </div>
          </div>

        <?PHP } ?>
      </div>
    </section>     <?PHP } else { ?>
      <div class="no-records" style="text-align: center;">Your Cart is Empty</div>.
      <div class="no-records" style="text-align: center;">You must go shopping first</div>
      <div class="checkout_btn_inner" style="text-align: center;">
            <a class="btn_1" href="shop.php">Continue Shopping</a>
      </div>

    <?PHP }?>
    <!--================End Checkout Area =================-->
  </main>
  <footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
            <div class="single-footer-caption mb-30">
              <!-- logo -->
              <div class="footer-logo">
                <a href="../../index.php"><img src="../assets/img/logo/logo.png" style="width: 100%;" alt=""></a>
              </div>
              <div class="footer-tittle">
                <div class="footer-pera">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#"> Offers & Discounts</a></li>
                  <li><a href="#"> Get Coupon</a></li>
                  <li><a href="#"> Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>New Products</h4>
                <ul>
                  <li><a href="#">Woman Cloth</a></li>
                  <li><a href="#">Fashion Accessories</a></li>
                  <li><a href="#"> Man Accessories</a></li>
                  <li><a href="#"> Rubber made Toys</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Support</h4>
                <ul>
                  <li><a href="#">Frequently Asked Questions</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Report a Payment Issue</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer bottom -->
        <div class="row align-items-center">
          <div class="col-xl-7 col-lg-8 col-md-7">
            <div class="footer-copy-right">
              <p>
                <p>
                  <p>Copyright ©2020 All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/giaosu.2606/">_thogiado_</a></p>
                </p>
            </div>
          </div>
          <div class="col-xl-5 col-lg-4 col-md-5">
            <div class="footer-copy-right f-right">
              <!-- social -->
              <div class="footer-social">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>
  <!--? Search model Begin -->
  <div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-btn">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Searching key.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- JS here -->


  <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="../assets/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/slick.min.js"></script>

  <!-- One Page, Animated-HeadLin -->
  <script src="../assets/js/wow.min.js"></script>
  <script src="../assets/js/animated.headline.js"></script>
  <script src="../assets/js/jquery.magnific-popup.js"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="../assets/js/jquery.scrollUp.min.js"></script>
  <script src="../assets/js/jquery.nice-select.min.js"></script>
  <script src="../assets/js/jquery.sticky.js"></script>

  <!-- contact js -->
  <script src="../assets/js/contact.js"></script>
  <script src="../assets/js/jquery.form.js"></script>
  <script src="../assets/js/jquery.validate.min.js"></script>
  <script src="../assets/js/mail-script.js"></script>
  <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>