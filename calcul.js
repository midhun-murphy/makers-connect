function calculateCost() {
    const PRICE_PER_KG = 70;
    const ADDITIONAL_COST_1 = 50;
    const ADDITIONAL_COST_2 = 100;
    const ADDITIONAL_COST_3 = 150;
    const INTEREST_RATE = 0.02;

    let quantity = parseFloat(document.getElementById('quantity').value);
    let distance = parseFloat(document.getElementById('distance').value);

    if (isNaN(quantity) || isNaN(distance)) {
        alert('Please enter valid numbers for quantity and distance.');
        return;
    }

    let productCost = quantity * PRICE_PER_KG;
    let additionalCost;

    if (distance < 30) {
        additionalCost = ADDITIONAL_COST_1;
    } else if (distance < 60) {
        additionalCost = ADDITIONAL_COST_2;
    } else {
        additionalCost = ADDITIONAL_COST_3;
    }

    let totalCost = productCost + additionalCost;
    let interest = totalCost * INTEREST_RATE;
    let finalCost = totalCost + interest;

    let resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
    <h4>FINAL ESTIMATE</h4>

        <p>Product Cost: Rs ${productCost.toFixed(2)}</p>
        <p>Shipping Cost: Rs ${additionalCost.toFixed(2)}</p>
        <p>Interest: Rs ${interest.toFixed(2)}</p>
        <hr>
        <p><b>Final Cost: Rs ${finalCost.toFixed(2)}</b></p>
        <hr>
        <a href = "pay.php"><input type="submit" class="btn" name="submit" ></a>
        `;
        
    
}