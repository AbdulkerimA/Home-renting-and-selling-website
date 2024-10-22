<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZK properties</title>
    <link rel="stylesheet" href="./asset/style/properties.css">
    <link rel="stylesheet" href="./asset/style/index.css">
</head>

<body>

    <?php require "./header.php"; ?>
    <section id="propertiesSection">

        <div id="title">
            <span>List of properties</span>
        </div>

        <div id="catagory">

            <div id="catagoryButtons">
                <span id="all"> all catagories</span>
                <span id="house">house</span>
                <span id="mansion">mansion</span>
                <span id="appartments">appartments</span>
            </div>

            <div id="search">
                <form action="./properties.php" method="get">
                    <input type="search" name="search" id="searchinp" placeholder="search for a property">
                </form>
            </div>

        </div>

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
                            <a href="./"><button>contact</button></a>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>

    </section>
    <?php require "./footer.php"; ?>
</body>

<script src="">
    //document.getElementById("blur").style.height = document.getElementsByTagName("body").height + "px";
</script>

</html>