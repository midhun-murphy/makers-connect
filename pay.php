<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment and Shipping</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>
    <div class="container">
       
        <!-- <nav class="tabs">
            <div class="tab"><a href="land.html">Home page</a></div>
            <div class="tab">Shipping details</div>
            <div class="tab active">Payment method</div>
        </nav> -->
        <br><br>
      
        <section class="payment-method">
            <div class="payment-section">
                <div class="card">
                    <img src="card.gif" alt="Card Image">
                </div>
                <div class="payment-details">
                    <h3>Payment details</h3>
                    <form action="done.inc.php" method="post">
                        <div class="field input">
                            <label class ="required" for="cardholder">CARDHOLDER NAME</label>
                            <input type="text" name="cardholder" id="cardholder" required>
                        </div>
                        <div class="field input">
                            
                            <label for="cardnumber">CARD NUMBER</label>
                            <input type="text" name="cardnumber" id="cardnumber" required >
                        </div>
                        <div class="field input">
                            <label for="expirymonth">EXPIRY MONTH</label>
                            <input type="text" name="expirymonth" id="expirymonth"   >
                        </div>
                        <div class="field input">
                            <label for="expiryyear">EXPIRY YEAR</label>
                            <input type="text" name="expiryyear" id="expiryyear" >
                        </div>
                        <div class="field input">
                            <label for="cvv">CVV</label>
                            <input type="text" name="cvv" id="cvv" >
                        </div>
                        <div class="field input">
                            <label for="amount">Payment amount</label>
                            <input type="text" name="amount" id="amount" >
                        </div>
                        <div class="field">
                        <a href="paid.php"> <input type="submit" class="btn" background-color = "red" name="pay"></a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
        <hr>
    </div>
</body>