<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product_discount_calculator</title>
</head>
<body>
<form action="/result" method="post">
    @csrf
    <h1>Shopping online</h1>
    <table>
        <tr>Product Description:</tr>
        <input type="text" name="pro_description" placeholder="Product Description"><br><br>
        <tr>List Price:</tr>
        <input type="number" name="list_price" placeholder="List Price"><br><br>
        <tr>Discount Percent:</tr>
        <input type="number" name="discount" placeholder="Discount Percent"><br><br>
        <tr><button type="submit">Calculate Discount</button></tr>
    </table>
</form>
</body>
</html>
