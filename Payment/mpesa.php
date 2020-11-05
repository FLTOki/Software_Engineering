<?php
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;

if ($products_in_cart) {
   
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
   
    $stmt->execute(array_keys($products_in_cart));
  
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="pay.css">
    <link rel="stylesheet" href="../Menu/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{
                    background-color: #f2f2f2;
                    padding: 5px 20px 15px 20px;
                    border: 1px solid lightgrey;
                    border-radius: 3px; 
                    
        }
        .fc{
            width: 350px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Mpesa</h2>
            <p> Please pay the following amount to the paybill provided below</p>
            <p> Use your student ID as Account Number</p>
        <div class="subtotal">
            <span class="text">Paybill</span>
            <span class="price">123456</span>
        </div>
        <div class="subtotal">
            <span class="text">Subtotal</span>
            <span class="price">&dollar;<?=$subtotal?></span>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
            <div class="form-group">
            <label><p> Enter Mpesa confirmation code below</p></label>
                <label>Code:</label>
                <input type="text" name="username" class="form-control" id="fc" value="" required="required" placeholder="OA2XWAQ0">
                <span class="help-block"></span>
            </div>    
            
            <div class="form-group"  id="fc">
            <a href="animate-success/dist/index.html" class="btn btn-primary">Continue to Checkout</a>
            </div>
        </form>
    </div>    
</body>
</html>