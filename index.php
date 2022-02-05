<?php
    include $_SERVER['DOCUMENT_ROOT'].'/func.php';
    $data = array(
        "url" => "https://www.investing.com/crypto/bitcoin/btc-usd",
        "element" => '<span class="text-2xl" data-test="instrument-price-last">',
        "num" => 10
    );
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <!-- navbar -->
        <nav class="navbar">
            <div class="container navbar-nav">
                <a href="#!" class="logo"><img src="images/logo.svg" alt=""></a>
                <ul class="navbar-list">
                    <li>
                        <a href="#!" class="navbar-link">Our products</a>
                    </li>
                    <li>
                        <a href="#!" class="navbar-link">F.A.Q.</a>
                    </li>
                    <li>
                        <a href="#!" class="navbar-link">Some photos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- header -->
        <header class="header">
            <div class="container header-content">
                <h1 class="main-title">
                    Your Best Choise in Darknet
                    <br>
                    Safe, fast and free shipping
                    <br>
                    We are sure you will be satisfied
                </h1>
                <img src="images/header.png" alt="" class="header-img">
            </div>
        </header>
        <!-- products -->
        <section class="products">
            <div class="container products-content">
                <h2 class="main-subtitle">Our products</h2>
                <div class="products-inner">
                    <article class="products-item"> 
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/12promax.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 12 Pro Max 256 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$449.00</span>
                            <span class="products-item-price-new">- $ 150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$349.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,349); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">White</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/12promax.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 12 Pro Max 512 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$549.00</span>
                            <span class="products-item-price-new">- $ 150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$399.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,399); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">White</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/13pro.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 13 Pro 256 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$549.00</span>
                            <span class="products-item-price-new">- $ 200.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$349.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,349); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Silver</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="images/item-1.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 13 256 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$449.00</span>
                            <span class="products-item-price-new">- $ 150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$299.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,299); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">White</div>
                                <div class="products-item-dropdown-list-item">Red</div>
                                <div class="products-item-dropdown-list-item">Pink</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/13pro.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 13 Pro 512 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$549.00</span>
                            <span class="products-item-price-new">- $ 150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$399.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,399); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Silver</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/13promax.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 13 Pro Max 512 gb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$599.00</span>
                            <span class="products-item-price-new">- $  150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$449.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,449); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Silver</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/13promax.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPhone 13 Pro Max 1 tb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$699.00</span>
                            <span class="products-item-price-new">- $ 200.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$449.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,449); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Silver</div>
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Gold</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/watch7hermes.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple Watch Hermès Series 7 
                                45mm</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$599.00</span>
                            <span class="products-item-price-new">- $ 150.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$449.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,449); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/watch7.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple Watch Series 7 45mm</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$349.00</span>
                            <span class="products-item-price-new">- $ 100.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$249.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,249); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                                <div class="products-item-dropdown-list-item">Red</div>
                                <div class="products-item-dropdown-list-item">Blue</div>
                                <div class="products-item-dropdown-list-item">Starlight</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-new products-item-marker-item">New</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/ipad.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>iPad Pro 12.9” 1tb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$699.00</span>
                            <span class="products-item-price-new">- $ 200.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$449.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,449); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/macbook32.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple MacBook Pro 16″ 32gb RAM
                                1 tb </h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$1100.00</span>
                            <span class="products-item-price-new">- $ 250.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$849.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,849); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                     <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/macbook32.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple MacBook Pro 16″ 32gb RAM 
                                2 tb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$1199.00</span>
                            <span class="products-item-price-new">- $ 250.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$949.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,949); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/macbook32.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple MacBook Pro 16″ 64gb RAM
                                1 tb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$1249.00</span>
                            <span class="products-item-price-new">- $ 250.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$999.00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,999); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>

                    <article class="products-item">
                        <div class="products-item-marker">
                            <span class="products-item-marker-best products-item-marker-item">Best price in DW</span>
                            <span class="products-item-marker-discount products-item-marker-item">% Discount</span>
                        </div>
                        <div class="products-item-preview">
                            <img src="./images/macbook32.png" alt="">
                        </div>
                        <div class="products-item-title">
                            <h5>Apple MacBook Pro 16″ 64gb RAM
                                2 tb</h5>
                        </div>
                        <div class="products-item-price">
                            <span class="products-item-price-old">$1299.00</span>
                            <span class="products-item-price-new">- $ 250.00</span>
                        </div>
                        <div class="products-item-btc">
                            <span class="products-item-price-dollar">$1099  .00</span>
                            <span class="products-item-price-btc">
                                <img src="images/btc-red.svg" alt="">
                                <?= ParsingFinishResult($data,1099); ?>
                            </span>
                        </div>
                        <div class="products-item-dropdown">
                            <div class="products-item-dropdown-hero">
                                <span>Graphite</span>
                                <img src="images/arrow-down.svg" alt="">
                            </div>
                            <div class="products-item-dropdown-list">
                                <div class="products-item-dropdown-list-item">Black</div>
                                <div class="products-item-dropdown-list-item">Silver</div>
                            </div>
                        </div>
                        <a href="#!" class="products-item-pay">
                            <span>Pay with Bitcoin</span>
                            <img src="images/btc.png" alt="">
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <!-- accordion -->
        <section class="accordion">
            <div class="container accordion-content">
                <h2 class="main-subtitle">F.A.Q.</h2>
                <div class="accordion-inner">
                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>How do you do this?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>We purchasing a lot of prepaid CreditCards from reliable sellers on TOR.</p>
                            <p>We using these CC´s to buy apple products in bulk from diffrent marketplaces (eBay/Amazon ect.)</p>
                            <p>We selling these Phones for BTC and buy new Creditcards with these BTC.</p>
                        </div>
                    </article>
                    
                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Are the products all original Apple products?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes, all products are real and original Apple products.</p>
                            <p>Products will come with bill (in most cases a Amazon bill) and offical waranty. </p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Does the product box contain original accessories?</h5>
                        </div>
                        <div class="accordion-info">
                            <p> Because the products are original, they are in original boxes and these boxes contain the original accessories also.</p> 
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Do your products have warranty?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes,  products have 1 year of manufacturer warranty. The warranty starts about 1 or 2 weeks earlier than you get </p>
                            <p>your product but there is always a paper with information about the warranty in the box that you receive from us.</p>
                        </div>
                    </article>  

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>If one of the ordered products goes wrong, can I take it to an official service station?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes, these products can be taken to an official Apple service station, there will be no problem. </p>
                            <p>Manufacturer do not look for these devices, you can handle them like ones you bought in an official store.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Does your product work in my country which is...? Are they unlocked?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes, all of our products work internationally, they are unlocked and work with every SIM card that you can buy in your country.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Do you ship your products to my country which is ...?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>If you can order to your country from the popular online shops like eBay, Amazon, Alibaba, Aliexspress etc. you can order from us also.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>How much time does it need to arrive the ordered product to my country and how much it cost?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Delivery time depends on the address, you can calculate with the following delivery times:

                            </p>
                            <p>Asia: about 3 - 6 days <br>
                                North America and Europe: 5 - 9 days <br>
                                South America, Africa and Australia: 7 - 13 days
                            </p>
                            <p>Delivery is absolutely free, regardless of the value of the goods, we declare the products as a gift at the postal service</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>How will i get information about my order</h5>
                        </div>
                        <div class="accordion-info">
                            <p>You will get 2 emails from us:</p>
                            <p>First Email - Right after payment confirmation with your order ID & receipt.</p>
                            <p>Second email - With 24-36 hours delay includes the Tracking ID. </p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>What about the custom clearance? Is there a high probability that I have to pay duty?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>We mark all of our packages as 'present' to avoid duty and until now we didn't get any feedback from our customers that someone had to pay duty. </p>
                            <p>If you have other experience, please send us a feedback. All of our packages are very discrete so we believe, you won't have to pay duty too.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Are there any ways for the manufacturers to track back these products?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>No, there is no chance to track back these items, they can be used like you bought them in an official shop. Nobody looks for them.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Can I sell the purchased product on legitimate marketplaces like eBay?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes, you can sell these products on normal marketplaces. The products can be handled like ones you bought in an official store, but please note </p>
                            <p>that the warranty starts 1 or 2 weeks earlier than you get the products so be sure that your customer accepts the few week shorter warranty time.</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Is the bitcoin the only option to pay the products? And how can I buy bitcoin?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>Yes, currently the only option to pay on our site is bitcoin. </p>
                            <p>Standart Google can easily help you with this problem. There are a large number of exchanges and wallets where you can do it</p>
                        </div>
                    </article>

                    <article class="accordion-item">
                        <div class="accordion-title">
                            <img src="images/accordion-arrow.svg" alt="">
                            <h5>Do you work with escrow services?</h5>
                        </div>
                        <div class="accordion-info">
                            <p>No, we don't use escrow, because we don't trust in bitcoin price (nowadays it is very fluctuating). 
                            </p>
                            <p>This is why we introduced the 6 hours limit to pay the products and we don't want to wait few days to change it.</p>
                            <p>Hope you understand</p>
                            <p>We have incurred a lot of losses over the past months because of escrow</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- gallery -->
        <section class="gallery">
            <div class="container gallery-content">
                <h2 class="main-subtitle">Some Photos</h2>
                <div class="gallery-inner">
                    <img src="images/gallery-1.jpg" alt="" class="gallery-image">
                    <img src="./images/Frame 581951.png" alt="" class="gallery-image">
                    <img src="./images/image 21.png" alt="" class="gallery-image">
                    <img src="./images/Frame 581953.png" alt="" class="gallery-image">
                    <img src="./images/Frame 581950.png" alt="" class="gallery-image">
                    <img src="./images/Frame 581951 (1).png" alt="" class="gallery-image">
                    <img src="./images/Frame 581952.png" alt="" class="gallery-image">
                    <img src="./images/Frame 581953 (1).png" alt="" class="gallery-image">
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer class="footer">
            <div class="container footer-content">
                <p class="footer-info">All rights reserved © Apple Cider. Since 2020</p>
            </div>
        </footer>
    </div>
</body>
</html>
