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
                <div id="moto"></div>
                <div id="aboutus"></div>
                <div id="colab"></div>
            </section>

        </div>

    </main>
</body>

</html>