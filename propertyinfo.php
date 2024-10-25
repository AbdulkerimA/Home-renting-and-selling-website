<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>property information page</title>
    <link rel="stylesheet" href="./asset/style/propertyinfo.css">
</head>

<body>
    <?php require_once "./header.php" ?>

    <section id="properyinfo">
        <img src="./asset/pics/alexander-andrews-A3DPhhAL6Zg-unsplash.jpg" alt="property image">
        <div id="info">
            <h2>
                property information
            </h2>
            <ul>
                <li>The red house</li>
                <li>mexico</li>
                <li>1000m X 1000m</li>
                <li>5M birr</li>
                <li>Rent</li>
            </ul>
            <span id="agentinfo">
                <img src="./" alt="">
                <span>abebe kebede</span>
            </span>
            <span>
                <button>contact me i am interested</button>
            </span>
        </div>
    </section>

    <section id="related">
        <header>
            <h2>
                more related properties
            </h2>
        </header>

        <div id="#relatedproperties">

            <div id="properties">
                <div class="properties">
                    <?php for ($i = 0; $i < 9; $i++) : ?>
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
                                <a href="./propertyinfo.php"><button>see details</button></a>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>

    </section>

    <?php require_once "./footer.php" ?>
</body>

</html>