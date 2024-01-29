<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root", "", "mart");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         
        // Escape user inputs for security
        $product_name = mysqli_real_escape_string($link, $_REQUEST['product_name']);
        $brand = mysqli_real_escape_string($link, $_REQUEST['brand']);
        $color = mysqli_real_escape_string($link, $_REQUEST['color']);
        $price = mysqli_real_escape_string($link, $_REQUEST['price']);
         
        // Attempt insert query execution
        $sql = "INSERT INTO product_info(product_name, brand, color, price) VALUES ('$product_name', '$brand', '$color', '$price')";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
         
        // Close connection
        mysqli_close($link);
    ?>
    <div>
        <button class="mb-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            <a href="index.php">Go Back</a>
        </button>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>