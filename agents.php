<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agents</title>
    <link rel="stylesheet" href="./asset/style/agents.css">
</head>

<body>
    <?php require_once "./header.php" ?>

    <section id="agent">
        <header>
            <h1>list of avelable agent</h1>
        </header>

        <div id="catagory">
            <div id="catagoryButtons">
                <span id="all"> Randome</span>
                <span id="house">Best seller</span>
                <span id="mansion">Rating</span>
            </div>

            <div id="search">
                <form action="./properties.php" method="get">
                    <input type="search" name="search" id="searchinp" placeholder="search for a property">
                    <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>

        </div>

    </section>

    <section id="profiles">
        <?php for ($i = 0; $i < 6; $i++) : ?>
            <div id="agentProfile">
                <img src="./asset/pics/users/user11.jpg" alt="profile">
                <div id="info">
                    <h2>
                        agent information
                    </h2>
                    <span>
                        abebe kebede
                    </span>
                    <span>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                    <span>
                        10 properties sold
                    </span>
                    <span>
                        <a href="./properties.php">
                            listed properties <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </span>
                </div>
            </div>
        <?php endfor ?>

    </section>

    <?php require_once "./footer.php" ?>

</body>

</html>