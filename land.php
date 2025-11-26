<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makers connect</title>
    
    <link rel="stylesheet" href="land.css">
    <link rel="icon" href="https://i.pinimg.com/236x/a0/86/47/a08647cec486718eaf66a38d6f6f8784.jpg">
</head>
<body>
    <header>
        <div class="logo">Makers connect</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li class="dropdown">
                    <a href="connect.php" class="dropbtn">Products</a>
                    
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="about.php">Contact</a></li>
                <li><a href="register.php"><button id="sign inBtn">Sign In</button></a></li>
                <li><a href="index.php"><button id="loginBtn">Log In</button></li>
            </ul>
        </nav>
    </header>
    <section id="home" class="hero">
        <h1>Welcome to Makers connect</h1>
        <p>Discover the finest handcrafted weaving products.</p>
        <button id="shopNowBtn">Shop Now</button>
        <br>
        <button onclick="nextpg()">Estimate</button>
    </section>
    <div class="container">
        <img src="Screenshot 2024-06-10 152200.png" alt="Example Image" class="image">
        <div class="text">
            <p>Makers Connect, an innovative platform dedicated to bridging the gap between traditional weavers and modern vendors, fostering a vibrant marketplace for handwoven textiles. By leveraging cutting-edge technology, Makers connect provides weavers with a seamless way to showcase their intricate, handcrafted fabrics to a global audience, ensuring their artisanal skills are recognized and valued. Vendors benefit from direct access to a diverse range of unique and high-quality textiles, enabling them to offer exclusive products to their customers. The website also features storytelling elements, highlighting the rich cultural heritage and personal narratives behind each weave, thus promoting ethical sourcing and supporting sustainable livelihoods for weavers. Through Makers connect, the ancient craft of weaving finds new avenues for growth and appreciation in today's digital age.</p>
        </div>
    </div>
    <h3><CENTER>WHAT WE DO?</CENTER></h3>
    <br><br><br><br><br><br><br>

    <div class="three-boxes">
        <a href="#"><div class="imagez1"></div></a>
        <a href="#"><div class="imagez2"></div></a>
        <a href="#"><div class="imagez3"></div></a>
        <a href="#"><div class="imagez4"></div></a>
    </div>
<br><br><br><br><br><br><br>

    <div class="faq-container">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-item">
            <div class="faq-question">
                <h3>What is your return policy?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Our return policy allows returns within 30 days of purchase. Please ensure the product is in its original condition.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <h3>How do I track my order?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>You can track your order using the tracking number provided in your confirmation email. Visit our tracking page and enter the tracking number.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <h3>How long does order take to reach us?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Within 5-6 business days</p>
            </div>
        </div>
    </div>

    <div id="loader">
        <i class="fa-solid fa-spinner fa-spin"></i>
    </div>
    <h3><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REVIEWS  FROM OUR CUSTOMERS</center></h3>
    <section class="review">
       <div id="name"></div> 
        <div id="profession"></div>
        <div id="review"></div>
        <br>
        <nav>
            <button class="btn" id="forward" ><</button>
            <button class="btn" id="backward" >></i></button>
            <br><br>
        </nav>
    </section>
<br><br><br><br>


<H4><CENTER>©MAKERSCONNECT Ltd.</CENTER></H4>
<script src="land.js"></script>

</body>
</html>

