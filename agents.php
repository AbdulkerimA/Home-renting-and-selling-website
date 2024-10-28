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
                <img src="./" alt="profile">
                <div id="info">
                    <h2>
                        agent information
                    </h2>
                    <span>
                        agent name : abebe kebede
                    </span>
                    <span>
                        rating : *****
                    </span>
                    <span>
                        number property selled : 10
                    </span>
                    <span>
                        <a href="./properties.php">
                            show propertis listed by abebe kebede ->
                        </a>
                    </span>
                </div>
            </div>
        <?php endfor ?>

    </section>

    <?php require_once "./footer.php" ?>

</body>

</html>