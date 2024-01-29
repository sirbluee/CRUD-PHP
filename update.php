<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        $updateId = $_GET['id'];
        $updateProductName = $_POST['product_name'];
        $updateBrand = $_POST['brand'];
        $updateColor = $_POST['color'];
        $updatePrice = $_POST['price'];

        $updateSql = "UPDATE product_info
                        set product_name = '$updateProductName',
                            brand = '$updateBrand',
                            color = '$updateColor',
                            price = '$updatePrice' 
                        where id = '$updateId'
                    ";

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mart";

        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM product_info";
        $query = $conn->query($updateSql);

        if($query){
            ?>
                <div class="flex items-center justify-center h-screen">
                        <h1 class="text-center font-bold px-20">Item Updated!</h1>
                        <button class="mb-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                <a href="index.php">Back</a>
                        </button>
                </div>
            <?php
        }else{
            echo $conn->error;
        }
    ?>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>