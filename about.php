<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  font-family: Constantia;
  background-color: rgb(1, 1, 1);
  color: white;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
#stars .fa-star {
  color: gold;
}

header {
  background-color: rgb(0, 0, 0);
  color: #fff;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
}

nav ul li {
  margin-left: 20px;
  position: relative;
}

nav ul li a, nav ul li button {
  color: #fff;
  text-decoration: none;
  background: none;
  border: none;
  cursor: pointer;
}

nav ul li button {
  background-color: #f90303;
  padding: 5px 10px;
  transition: background-color 0.3s;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
nav ul li a:hover {
  border: rgb(241, 5, 83) solid 5px;
  background-color: rgb(241, 5, 83);
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
button:hover {
  background: #e55342;
}
img{
    padding-top: 3%;
    width:30%;
    padding-right: 5%;
    height: 40%;
    float:right;
}
p{
    padding-top: 5%;
    padding-left: 5%;
    font-style: oblique;
    font-size: larger;
    
}
h1{
    font-style: oblique;
    padding-left: 5%;
    padding-top: 5%;
}
div{
    padding-left: 3%;
}
button{
    padding: 10px 20px;
    border:none;
    border radius : 4px;
    cursor:pointer;
 }
.box{
               width:100%
               padding:8px;
               margin-bottom:16px;
               border : 1px solid #ccc;
               border-radius : 4px;
}
footer{
    padding bottom:3%;
}




</style>

    <title>Makers Connect</title>
    
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Makers connect</title>
                    
                </head>
                <body>
                    <header>
                        <div class="logo">Makers connect</div>
                        <nav>
                            <ul>
                                <li><a href="land.html">Home</a></li>
                                <li class="dropdown">
                                    <a href="connect.html" class="dropbtn">Products</a>
                                    <div class="dropdown-content">
                                        <a href="#products1">Product 1</a>
                                        <a href="#products2">Product 2</a>
                                        <a href="#products3">Product 3</a>
                                    </div>
                                </li>
                                <li><a href="feedback.html">About</a></li>
                                <li><a href="feedback.html">Contact</a></li>
                                <li><a href="#"><button id="signinBtn">Sign In</button></a></li>
                                <li><button id="loginBtn">Log In</button></li>
                            </ul>
                        </nav>
                    </header>
                    <img src="logo.jpg">
                    <h1>Hi.We're the Makers Connect. And
                                           we’re here to simplify fabric shopping.</h1>
                    <p>We help people compare raw fabrics and materials so they can find the best fit for their needs. Quality can seem overwhelming at times, so we aim to make it easier for everyone.We do the searching. You do the saving.</p>
                     <p>     _______________________________________________________________________________________________________________________</p>
                    <img src="https://cdnl.iconscout.com/lottie/premium/thumb/teamwork-web-design-5513360-4625684.gif">
                    <h1> OUR AIM</h1>
                    <p>In 2024, we will start The Makers Connect to simplify the shopping experience and empower consumers to regularly compare quality and rates of raw fabs. More than a decade later, with millions of quotes produced, we will become one of the nation’s leading raw fabrics comparison sites.</p>
                    <p>            __________________________________________________________________________________________________________________</p>
                    <div id="box"
                            <h1 id="heading">
                               <center> Feed Back </center>
                            </h2>
                            <h4 font style="normal"> NAME </h4>
                            <input type="name">
                            <hr>
                            <h4> E-MAIL ID</h4>
                            <input type="email" >
                            <hr>
                            <h4> FEEDBACK </h4>
                            <textarea id="feedback" name="feedback" rows="4" column="3" required></textarea>
                            <hr>
                            <hr>
                                <button type="submit" id="submit">Submit Feedback</button>
                     </div>
                    </div>
<footer>
