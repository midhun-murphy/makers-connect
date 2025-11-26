<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mkrs connect</title>
    <link rel="stylesheet" href="calcul.css">
    
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <div class="img">
            <img id="img1" src="https://cdn.dribbble.com/users/282923/screenshots/11050247/media/ebcdfd662fdbd93623d052e32f072315.gif" alt="Image">
        </div>
        <div class="form">
            <h2>BILLING DETAILS</h2>
            <label for="quantity">Quantity (in kg):</label>
            <input type="number" id="quantity" placeholder="Enter the quantity in kg">
            
            <label for="distance">Distance (in km):</label>
            <input type="number" id="distance" placeholder="Enter the distance">
            
            <button onclick="calculateCost()">Calculate Final Cost</button>
            <div class="result" id="result"></div>
        </div>
    </div>
    <br><br><br><br>
  <script src="calcul.js"></script>

</body>
</html>
