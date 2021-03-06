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
                <h2>Confirmation</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ confirmation part start =================-->
    <section class="confirmation_part section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="confirmation_tittle">
              <span>Thank you. Your order has been received.</span>
            </div>
          </div>
          <?PHP  if(isset($_SESSION['soHD']) && ($_SESSION['soHD'] > 0)) { ?>
          <div class="col-lg-6 col-lx-4">
            <div class="single_confirmation_details">
              <h4>order info</h4>
              <ul>
                <li>
                  <p>order number</p><span>: <?PHP echo $_SESSION['cName']; ?></span>
                </li>
                <li>
                  <p>Date</p><span>: $ <?PHP echo $_SESSION['cDate']; ?></span>
                </li>
                <li>
                  <p>total</p><span>: USD <?PHP echo $_SESSION['total_price']; ?></span>
                </li>
                <li>
                  <p>mayment methord</p><span>: Check payments</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-lx-4">
            <div class="single_confirmation_details">
              <h4>Billing Address</h4>
              <ul>
                <li>
                  <p>Street</p><span>: <?PHP echo $_SESSION['cAddress']; ?></span>
                </li>
                <li>
                  <p>city</p><span>: <?PHP echo $_SESSION['cAddress']; ?></span>
                </li>
                <li>
                  <p>country</p><span>: <?PHP echo $_SESSION['cAddress']; ?></span>
                </li>
                <li>
                  <p>email</p><span>: <?PHP echo $_SESSION['cEmail']; ?></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="order_details_iner">
              <h3>Order Details</h3>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bottom_button">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="cupon_text float-right">
                      
                      </div>
                    </td>
                  </tr>
                  <?php
                  if (isset($_SESSION["cart_item"])) {
                    $total_quantity = 0;
                    $total_price = 0;
                  ?>
                    <?PHP
                    foreach ($_SESSION["cart_item"] as $item) {
                      $item_price = $item["quantity"] * $item["giaSP"];
                    ?>
                      <tr>
                        <td>
                          <div class="media">
                            <div class="d-flex">
                              <img style="width: 100px; heigh:100px;" src="../../img/<?PHP echo $item['Hinh']; ?>" alt="" />
                            </div>
                            <div class="media-body">
                              <p><?PHP echo $item['tenSP']; ?></p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <h5><?PHP echo $item['giaSP']; ?></h5>
                        </td>
                        <td>
                          <div class="product_count">
                            <p><?php echo $item["quantity"]; ?></p>
                          </div>
                        </td>
                        <td>
                          <h5>
                            <?PHP
                            echo $item_price; ?>
                          </h5>
                        </td>
                        <td style="text-align:center;"></td>
                      <?php
                      $total_quantity += $item["quantity"];
                      $total_price += ($item["giaSP"] * $item["quantity"]);
                      $_SESSION['total_price'] = $total_price;
                    }
                      ?>
                      </tr>

                      <tr>
                        <td></td>
                      </tr>                
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col" >Quantity</th>
                    <th scope="col" ><?php echo $total_quantity; ?></th>
                    <th scope="col">Total</th>
                    <th scope="col"><?php echo "$ " . number_format($total_price, 2); ?></th>
                  </tr>
                </tfoot>
                <?php
                  } 
                    ?>
                    <?PHP }?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ confirmation part end =================-->
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