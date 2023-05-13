<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
    <title>Product Description Calculator</title>
</head>
<body>
<h2>Product Description Calculator</h2>
<form method="post" action="DisplayDiscount.php">
    <input type="text" name="description" placeholder="Product Description"/>
    <input type="text" name="price" placeholder="List Price"/>
    <input type="text" name="discount" placeholder="Discount Percent"/>
    <input type="submit" id="submit" value="Calculate"/>
</form>
</body>
</html>