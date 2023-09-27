<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="GET">
        <label for="meal">Select a Meal:</label>
        <select name="meal">
            <option value="NoOperation">---Select Here---</option>
            <option value="burger">Burger ($150)</option>
            <option value="pizza">Pizza ($270)</option>
            <option value="pasta">Pasta ($120)</option>
            <option value="salad">Salad ($135)</option>
            <option value="steak">Steak ($750)</option>
        </select>
        <br>

        <label>Meal Size:</label>
        <input type="radio" name="size" value="regular" checked> Regular ($0)
        <input type="radio" name="size" value="upsize"> Upsize (+$50)
        <br>

        <label>Side Dishes:</label><br>
        <input type="checkbox" name="fries"> Fries (+$20)<br>
        <input type="checkbox" name="salad"> Salad (+$35)<br>
        <input type="checkbox" name="drink"> Drink (+$15)<br>

        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity" value="">
        <br>

        <input type="submit" name="submit"Calculate Order">
    </form>
</body>
</html>
<?php
    if(isset($_GET['submit'])){

        $meal = $_GET['meal'];
        if ($meal == "burger"){
            $price = 150;
        }

        else if ($meal == "pizza"){
            $price = 270;
        }

        else if ($meal == "pasta"){
            $price = 120;
        }

        else if ($meal == "salad"){
            $price = 135;
        }

        else{
            $price = 750;
        }

        $size = $_GET['size'];

        if ($size == "regular"){
            $mealsize = 0;
        }

        else if ($size == "Up-Size"){
            $mealsize = 50;
        }
        if(isset($_GET['fries'])){
            $sidedishprice =  20;
        }

        if(isset($_GET['salad'])){
            $sidedishprice =   35;
        }

        if(isset($_GET['drink'])){
            $sidedishprice = 15;
        }

        $quantity = $_GET['quantity'];

        $subtotal = $price + $sidedishprice * $quantity;
        $tax = $subtotal * .12;
        $total = $subtotal + $tax;

        echo "Selected Meal: ", $meal;
        echo "<br>Price: ", $price;
        echo "<br>Size of the meal: ", $size;
        echo "<br>Price of the Dish: ", $sidedishprice;
        echo "<br>Sub Total: ", $subtotal;
        echo "<br>Tax: ", $tax;
        echo "<br>Total: ", $total;
    }
?>
