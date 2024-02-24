<!DOCTYPE html>
<html>
<head>
    <title>VAT Calculator</title>
</head>
<body>
    <h1>VAT Calculator</h1>
    <form method="post">
        Amount (excluding VAT): <input type="number" name="amount"><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $amountExcludingVat = $_POST['amount'];
        $vatRate = 15; 
        
        $vatAmount = ($amountExcludingVat * $vatRate) / 100;

        
        $totalAmount = $amountExcludingVat + $vatAmount;

        echo "<p>Amount excluding VAT: $" . number_format($amountExcludingVat, 2) . "</p>";
        echo "<p>VAT (15%): $" . number_format($vatAmount, 2) . "</p>";
        echo "<p>Total amount including VAT: $" . number_format($totalAmount, 2) . "</p>";
    }
    ?>
</body>
</html>
