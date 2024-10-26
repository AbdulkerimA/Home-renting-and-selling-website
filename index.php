<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/style/index.css">
</head>

<body>
    <?php require "./header.php" ?>

    <!-- start of main section -->
    <main class="main">
        <!-- section one home section -->
        <section id="home">
            <header>
                <h1>
                    <span>a greate way - to</span> <br>
                    <span>buy and sell your property</span>
                </h1>

                <p>
                    <span>ZK is a greate way to rent, buy, or even to sell</span>
                    <br>
                    <span>your properties at your finger tip wihout the hastle.</span>
                </p>

            </header>

        </section>

        <!-- section two about container -->
        <div id="container">
            <section id="searchsec">

                <div class="option">
                    <span class="buy">Buy</span>
                    <span class="sell">Sell</span>
                    <span class="Rent">Rent</span>
                </div>

                <div id="searchinp">
                    <span>
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location" placeholder="Addis Abeba">
                    </span>

                    <span>
                        <label for="Type">Type</label>
                        <input type="text" name="Type" id="type" placeholder="urban & minimalist">
                    </span>

                    <span>
                        <label for="Range">Range</label>
                        <input type="text" name="Range" id="range" placeholder="10,000ETB-15,000ETB">
                    </span>

                    <button>Search</button>
                </div>
                <div id="text">
                    we provide you with the best feature from what you are inputing here
                </div>
            </section>

            <section id="about">

                <div id="moto">
                    <p>
                        we are in a mession to satisfy our customers
                    </p>
                </div>

                <div id="aboutus">
                    ZK provides the finest manstions, houses and

                    appartemtns in the city with unblivable prices.

                    <br> <br>

                    by being our customer you can save your money and time
                    <br>
                    <br />
                    also on ZK platform you can sell and rent your properties

                    with a little cute by saving a lot.
                </div>

                <div id="colab">
                    <h4>afelates</h4>
                    <div>
                        <img src="./asset/" alt="Ayat Realstate">
                        <img src="./asset/" alt="Tsehay Realstate">
                        <img src="./asset/" alt="goh appartments">
                        <img src="./asset/" alt="ZK appartements">
                    </div>

                </div>

            </section>

        </div>
        <!-- thierd section status section -->
        <section id="status">

            <div id="profit">
                <span id="num">8.39%</span>
                <span id="Text">profit return rate</span>
            </div>

            <div id="bar"></div>

            <div id="aveliableSell">
                <span id="num">12K+</span>
                <span id="Text">property in sell</span>
            </div>

            <div id="bar"></div>

            <div id="aveliableRent">
                <span id="num">15K+</span>
                <span id="Text">property in Rent</span>
            </div>

        </section>

        <!-- fourth section propery section -->
        <section id="properties">
            <div id="title">
                grate property <br>
                to-take a look
            </div>

            <div class="properties">
                <?php
                for ($i = 0; $i < 9; $i++) {
                ?>
                    <div id="propertycont">
                        <img src="./asset/pics/joss-woodhead-tfEoT92EYlo-unsplash.jpg" alt="propery">

                        <div id="propertyInfo">
                            <span id="pname">The red house</span>
                            <span id="location">Addis Abeba</span>
                        </div>

                        <div id="agent">
                            <div>
                                <img src="" alt="" id="profile">
                                <span id="name">abebe kebede</span>
                            </div>
                            <a href="./"><button>contact</button></a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

            <div id="browseall">
                <a href="./properties.php"><button>brows all</button></a>
            </div>

        </section>

        <!-- testimonial section -->
        <section id="testimonial">
            <header>
                <h3>
                    Thousands of <br>
                    satisfied customers
                </h3>
            </header>

            <div id="customers">

                <div id="cont">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div id="customer">

                            <span id="profile">
                                <img src="./asset/" alt="">
                                <span id="name"> alemayehu eejigu </span>
                            </span>

                            <span id="coment">
                                ah yes, my faveroit prlatform to listing my property
                            </span>

                        </div>

                    <?php
                    }
                    ?>
                </div>

                <div id="cont">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                    ?>
                        <div id="customer">

                            <span id="profile">
                                <img src="./asset/" alt="">
                                <span id="name"> alemayehu eejigu </span>
                            </span>

                            <span id="coment">
                                ah yes, my faveroit prlatform to listing my property
                            </span>

                        </div>

                    <?php
                    }
                    ?>
                </div>

            </div>

        </section>

        <!-- last section -->
        <section id="last">

            <div id="sec1">
                <h3>
                    are you ready <br>
                    to do bussiness with us
                </h3>

                <p>
                    we are the best platform for you to sell, buy, and rent a property with
                    <br>
                    the easiest and greatest way to operate
                </p>

                <a href="./">
                    <button>get started</button>
                </a>

            </div>

            <div id="sec2">
                <h3>
                    kep all in track
                </h3>

                <p>
                    we have also a system that will track your
                    <br>
                    engagment of your properties.
                </p>

                <a href="./">
                    listing details ->
                </a>

            </div>

            <div id="sec3">
                <h3>
                    start the integration
                </h3>

                <p>
                    learn about our platform, from how to
                    <br>
                    listing the properties and etc.
                </p>

                <a href="./">
                    integration details ->
                </a>

            </div>

        </section>

        <?php require "./footer.php" ?>

    </main>
</body>

</html>