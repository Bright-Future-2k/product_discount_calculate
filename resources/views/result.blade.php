<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Calculate product: {{ $description }} </h1>

<h1>List price: {{ $price }}</h1>

<h1>Discount Percent: {{ $discount }}</h1>

<h1>Discount Amount:{{$discount_Amount}} </h1>

<h1>Discount Price:{{$discount}}</h1>

</body>
</html>
