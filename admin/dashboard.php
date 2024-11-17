<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./asset/style/dashboard.css">
    <script src="../lib/ploty/plotly-latest.min.js"></script>
</head>

<body>
    <section id="dashboard">
        <div id="users">
            <div id="customers">
                <span id="num">10K+</span>
                <span id="title">customers</span>
            </div>

            <div id="agents">
                <span id="num">5K+</span>
                <span id="title">agents</span>
            </div>

            <div id="properties">
                <span id="num">15K+</span>
                <span id="title">properties</span>
            </div>

        </div>
        <div id="statstics">
            <div id="types" style="width:100%;max-width:45%;"></div>
            <div id="pfor" style="width:100%;max-width:45%;"></div>
        </div>
        <div id="coments">
            <?php require_once("./customers.php") ?>
        </div>
    </section>


    <script>
        const typesXArray = ["house", "mansions", "appartements", "realstates"];
        const typesYArray = [55, 49, 44, 24];

        const propertyForXArray = ["for Sell", "for Rent"];
        const propertyForYAray = [100, 145];

        const layoutfortypes = {
            title: "aveliable types of home statstics"
        };

        const dataOfTypes = [{
            labels: typesXArray,
            values: typesYArray,
            hole: .4,
            type: "pie"
        }];

        const dataOfPropertyFor = [{
            labels: propertyForXArray,
            values: propertyForYAray,
            hole: .4,
            type: "pie"
        }];

        Plotly.newPlot("types", dataOfTypes, layoutfortypes);
        Plotly.newPlot("pfor", dataOfPropertyFor, {
            title: "property for sell and rent statstics"
        });
    </script>
</body>

</html>