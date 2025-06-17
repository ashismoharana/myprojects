<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/rangeSlider.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/dark.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>zennvicartprimo - Shop Now</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <style type="text/css">
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .section-title {
            text-align: center;
            margin: 30px 0 20px;
            font-size: 28px;
            color: #333;
            position: relative;
        }
        
        .section-title::after {
            content: "All New Products of the Year!";
            display: block;
            font-size: 16px;
            color: #e74c3c;
            font-weight: normal;
            margin-top: 5px;
        }
        
        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .product-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: calc(20% - 20px);
            min-width: 180px;
            transition: transform 0.3s;
            text-align: center;
            padding-bottom: 15px;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .product-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .product-title {
            margin: 12px 0 8px;
            font-size: 16px;
            color: #333;
            padding: 0 10px;
        }
        
        .price-container {
            margin: 10px 0;
        }
        
        .new-price {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
        }
        
        .old-price {
            font-size: 14px;
            color: #999;
            text-decoration: line-through;
            margin-left: 5px;
        }
        
        .add-to-cart {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        
        .add-to-cart:hover {
            background-color: #2980b9;
        }
        
        @media (max-width: 1200px) {
            .product-card {
                width: calc(25% - 20px);
            }
        }
        
        @media (max-width: 900px) {
            .product-card {
                width: calc(33.33% - 20px);
            }
        }
        
        @media (max-width: 600px) {
            .product-card {
                width: calc(50% - 20px);
            }
        }
        
        @media (max-width: 400px) {
            .product-card {
                width: 100%;
            }
        }
    </style>

    <body>
        
        <?php include 'header.php'?>
        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Shop Now</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Shop Now</li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
        <u><h2 style="text-align: center; font-style: italic; font-family: sans-serif; text-shadow: 0px 0px 12px green;">Shop here latest products with sustianable price</h2></u>
        <br><br>
        <div class="products-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="shop/p1.jpg" alt="Men's T-Shirt" class="product-image">
                <h3 class="product-title">Premium Cotton T-Shirt</h3>
                <div class="price-container">
                    <span class="new-price">$29.99</span>
                    <span class="old-price">$39.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <img src="shop/p2.jpg" alt="Men's Jeans" class="product-image">
                <h3 class="product-title">Slim Fit Jeans</h3>
                <div class="price-container">
                    <span class="new-price">$49.99</span>
                    <span class="old-price">$59.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <img src="shop/p3.jpg" alt="Men's Shoes" class="product-image">
                <h3 class="product-title">Running Shoes</h3>
                <div class="price-container">
                    <span class="new-price">$79.99</span>
                    <span class="old-price">$89.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 4 -->
            <div class="product-card">
                <img src="shop/p4.jpg" alt="Men's Watch" class="product-image">
                <h3 class="product-title">Sport Watch</h3>
                <div class="price-container">
                    <span class="new-price">$59.99</span>
                    <span class="old-price">$69.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 5 -->
            <div class="product-card">
                <img src="shop/p5.jpg" alt="Men's Jacket" class="product-image">
                <h3 class="product-title">Winter Jacket</h3>
                <div class="price-container">
                    <span class="new-price">$89.99</span>
                    <span class="old-price">$99.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <br><br>
        <!-- Women's Products Row -->
        <div class="products-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="shop/p6.jpg" alt="Women's Dress" class="product-image">
                <h3 class="product-title">Summer Floral Dress</h3>
                <div class="price-container">
                    <span class="new-price">$39.99</span>
                    <span class="old-price">$49.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <img src="shop/p7.jpg" alt="Women's Bag" class="product-image">
                <h3 class="product-title">Leather Handbag</h3>
                <div class="price-container">
                    <span class="new-price">$59.99</span>
                    <span class="old-price">$69.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <img src="shop/p8.jpg" alt="Women's Shoes" class="product-image">
                <h3 class="product-title">Comfort Sandals</h3>
                <div class="price-container">
                    <span class="new-price">$49.99</span>
                    <span class="old-price">$59.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 4 -->
            <div class="product-card">
                <img src="shop/p9.jpg" alt="Women's Jewelry" class="product-image">
                <h3 class="product-title">Silver Necklace</h3>
                <div class="price-container">
                    <span class="new-price">$29.99</span>
                    <span class="old-price">$39.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 5 -->
            <div class="product-card">
                <img src="shop/p10.jpg" alt="Women's Top" class="product-image">
                <h3 class="product-title">Casual Dreeses</h3>
                <div class="price-container">
                    <span class="new-price">$24.99</span>
                    <span class="old-price">$34.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <br><br>
        <!-- Kids Products Row -->
        <div class="products-container">
            <!-- Product 1 -->
            <div class="product-card">
                <img src="shop/p11.jpg" alt="Kids T-Shirt" class="product-image">
                <h3 class="product-title">Cartoon Print T-Shirt</h3>
                <div class="price-container">
                    <span class="new-price">$14.99</span>
                    <span class="old-price">$19.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 2 -->
            <div class="product-card">
                <img src="shop/p12.jpg" alt="Kids Jeans" class="product-image">
                <h3 class="product-title">Stretchable Jeans</h3>
                <div class="price-container">
                    <span class="new-price">$19.99</span>
                    <span class="old-price">$24.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 3 -->
            <div class="product-card">
                <img src="shop/p13.jpg" alt="Kids Shoes" class="product-image">
                <h3 class="product-title">Light-up Sneakers</h3>
                <div class="price-container">
                    <span class="new-price">$29.99</span>
                    <span class="old-price">$39.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 4 -->
            <div class="product-card">
                <img src="shop/p14.jpg" alt="Kids Jacket" class="product-image">
                <h3 class="product-title">Warm Winter Jacket</h3>
                <div class="price-container">
                    <span class="new-price">$34.99</span>
                    <span class="old-price">$44.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            
            <!-- Product 5 -->
            <div class="product-card">
                <img src="shop/p15.jpg" alt="Kids Dress" class="product-image">
                <h3 class="product-title">Princess Dress</h3>
                <div class="price-container">
                    <span class="new-price">$27.99</span>
                    <span class="old-price">$32.99</span>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>


        <!-- Start Footer Area -->
        <?php include 'footer.php'?>


        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/rangeSlider.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/sticky-sidebar.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>