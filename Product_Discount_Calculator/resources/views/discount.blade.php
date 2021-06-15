<head>
    <meta charset="UTF-8">
    <title>Discount</title>
</head>
<body>
<h1>Chi tiết sản phẩm và chiết khấu</h1>
<form action="/discount" method="POST">
    @csrf
    <p>
     Product Description: <input type="text" name="chitiet">
    </p>
    <p>
    List Price: <input type="number" name="price" >
    </p>
    <p> Discount Percent: <input type="number" name="discount" ></p>
    <p>
    <button type="submit"> Calculate Discount</button>
    </p>
</form>
</body>
</html>