<?php
    print_r(session()->all())

?>

<body>
    <form action="{{route('postTestCart')}}" method="POST">
    @csrf()
        Product ID: <input type="text" name="productID"><br>
        Product Cost: <input type="text" name="productCost"><br>
        Product Qty: <input type="text" name="productqty"><br>
        <input type="submit" name="save" value="Add Cart">

    </form>
</body>
