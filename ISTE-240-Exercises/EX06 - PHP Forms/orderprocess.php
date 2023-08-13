<!--
    Simple php form
    @author Klara Makek
    @version 2023
    ISTE 240 - HX06
-->
<?php
$path = './';
$page = 'OrderProcess';
include $path . 'assets/inc/header.php';
?>

<h2>Your pizza order</h2>

<?php
//collecting info
$cName = $_POST['customerName'];
$cID = $_POST['customerID'];
$pSize = $_POST['pizzaSize'];
//added "link" for toppings
$pTopp = $_POST['toppings'];

$simPrice = 0;
$topPrice = 0;

if (!is_numeric($cID)) {
    ?>
    <p>Customer ID:
        <?php echo $cID; ?> is not valid because it contatins non numeric characters
    </p>
    <p>
    <form action="orderform.php" method="get">
        <input type="hidden" name="name" value=<?php echo $cName; ?>>
        <input type="submit" value="Ok">
    </form>
    </p>
    <?php
} else {
    switch ($pSize) {

        // I took the prices of pizzas from the explanation doc
        case 'P':
            $pCost = 7.99;
            break;

        case 'S':
            $pCost = 10.99;

            break;

        case 'M':
            $pCost = 13.99;

            break;
        case 'L':
            $pCost = 16.99;

            break;

        default:
            $pCost = 13.99;
            break;
    }
    // makes the topping toppin'
    switch ($pTopp) {
        case 'NET':
            $pTopp = 0;
            break;
        case 'OT':
            $pTopp = 2.0;
            break;
        case 'TT':
            $pTopp = 3.0;
            break;
        case 'THT':
            $pTopp = 3.75;
            break;

    }

    // to calculate the prices
    $totalNoTax = $pCost + $pTopp; //with out tax
    $taxAmount = round($totalNoTax * 0.08, 2); // round the numbers for only 2 decimals

    // total price
    $totalCost = $totalNoTax + $taxAmount;

    ?>
    <p>Pizza price: $<?php echo $pCost; ?></p>
    
    <p>Toppings price: $<?php echo $pTopp; ?></p>
    
    <p>Tax amount: $<?php echo $taxAmount; ?></p>
    
    <p>Total cost: $  <?php echo $totalCost; ?></p>
  

    <?php

}

?>

<?php
include $path . 'assets/inc/footer.php';
?>