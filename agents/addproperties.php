<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./asset/style/addproperty.css">
</head>
<section id="addproperty">
    <div id="uploadimg">
        <h2>
            upload your property image here
        </h2>
        <form action="./" method="post">
            <input type="file" name="" id="">
        </form>
    </div>

    <div id="propertyinfo">
        <h2>
            property information
        </h2>

        <form action="./" method="post">
            <div id="name">
                <label for="pname">
                    property name
                </label>
                <input type="text" name="pname" id="pname">
            </div>
            <div id="catagory">
                <label for="pcatagory">catagory</label>
                <input type="text" name="pcatagory" id="pcatagory">
            </div>
            <div id="price">
                <label for="price">price</label>
                <input type="number" name="price" id="price">
            </div>
            <div id="for">
                <label for="pfor">property for</label>
                <input type="text" name="pfor" id="pfor" placeholder="rent">
            </div>
            <div id="squerfoot">
                <label for="squearfoot">squear foot</label>
                <input type="number" name="squearfoot" id="squearfoot">
            </div>
            <div id="location">
                <label for="location">property location</label>
                <input type="text" name="location" id="location" placeholder="Enter properties location">
            </div>

            <button type="submit">submit</button>
        </form>
    </div>
</section>

</html>