<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./resources/style/index.css">
</head>

<body>
    <nav>
        <div id="logo">
            <img src="./" alt="ZK">
        </div>

        <div id="links">
            <a href="#" id="Home">
                Home
            </a>

            <a href="#" id="About">
                Abount
            </a>

            <a href="#" id="propertiesLink">
                properties
            </a>

            <a href="#" id="agentsLink">
                Agents
            </a>
        </div>

        <div id="actions">
            <span>login</span>
            <span id="userAction">Get Started</span>
        </div>

    </nav>

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
                        <img src="./resources/" alt="Ayat Realstate">
                        <img src="./resources/" alt="Tsehay Realstate">
                        <img src="./resources/" alt="goh appartments">
                        <img src="./resources/" alt="ZK appartements">
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
                for ($i = 0; $i < 8; $i++) {
                ?>
                    <div id="propertycont">
                        <img src="./resources/pics/joss-woodhead-tfEoT92EYlo-unsplash.jpg" alt="propery">

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
                <a href="./"><button>brows all</button></a>
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
                <div id="customer">

                    <span id="profile">
                        <img src="./resources/" alt="">
                        <span id="name"> alemayehu eejigu </span>
                    </span>

                    <span id="coment">
                        here is my comment
                    </span>
                </div>
            </div>

        </section>

    </main>
</body>

</html>