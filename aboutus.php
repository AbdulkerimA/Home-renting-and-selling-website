<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./asset/style/about.css">
</head>

<body>
    <?php require "./header.php" ?>

    <section id="about">
        <header>
            <h2>
                about us
            </h2>
        </header>
        <p>
            Established in 2024, ZK is a cutting-edge platform designed to simplify the process of renting, buying, and selling homes.
            With a focus on user-friendly design and efficient service, ZK connects property owners and seekers, making real estate
            transactions more accessible and streamlined. Whether you're a homeowner looking to sell, a landlord seeking tenants,
            or a buyer in search of the perfect home, ZK provides a seamless experience with advanced search tools, secure listings,
            and comprehensive support. Our mission is to empower users with a trusted platform that meets all their real estate needs,
            helping them find or sell properties with ease.
        </p>
    </section>

    <section id="faq">
        <header>
            <h2>
                FAQ
            </h2>
        </header>
        <div class="questions">
            <div id="q1">
                <h2>
                    What is ZK?
                </h2>
                <div class="ans">
                    ZK is an online platform established in 2024 that connects users looking to
                    <br>
                    rent, buy, or sell properties. We make the process simple, efficient,
                    <br>
                    and accessible for everyone, from homeowners and landlords to renters and buyers.
                </div>
            </div>
            <div id="q2">
                <h2>
                    Is there a fee to list my property on ZK?
                </h2>
                <div class="ans">
                    Listing a property on ZK is free for basic listings. However,we offer premium
                    <br>
                    packages that include additional features like boosted visibility,
                    <br>
                    highlighted listings, and more. Check our pricing page for detailed information.
                </div>
            </div>
            <div id="q3">
                <h2>
                    How do I find rental properties on ZK?
                </h2>
                <div class="ans">
                    You can easily search for rental properties using our advanced search tool.
                    <br>
                    Simply enter your preferred location, price range, and property type to browse through
                    <br>
                    available options.Filters like property size, number of bedrooms, and amenities
                    <br>
                    can help narrow down your search.
                </div>
            </div>
            <div id="q4">
                <h2>
                    How can I contact a property owner or landlord?
                </h2>
                <div class="ans">
                    Once you find a property that interests you, click on the listing to view the details.
                    <br>
                    There will be a “Contact Owner” or “Send Inquiry” button that allows you to reach out
                    <br>
                    directly to the owner or landlord through our secure messaging system.
                </div>
            </div>
            <div id="q5">
                <h2>
                    How do I list my property for rent or sale on ZK?
                </h2>
                <div class="ans">
                    To list your property, log in to your ZK account and click on the “List Property” button.
                    <br>
                    Fill in the required details, such as location, price, description, and upload high-quality images.
                    <br>
                    Once reviewed, your listing will be live in the platform.
                </div>
            </div>
        </div>
    </section>

    <?php require "./footer.php" ?>
</body>

<script>
    for (let i = 1; i <= 5; i++) {
        let questionElement = document.querySelector(`#q${i}`);
        let ansElements = document.querySelector(`#q${i} .ans`);
        if (ansElements) {
            questionElement.addEventListener('click', () => {
                ansElements.classList.toggle('active')
            });
        }
    }
</script>

</html>