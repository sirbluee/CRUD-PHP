<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
        $editId = $_GET['id'];
        $editSql = "SELECT * from product_info where id ='$editId'";


        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mart";

        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM product_info";
        $query = $conn->query($editSql);
        $result = $query->fetch_assoc();
    ?>
    <form action="update.php?id=<?php echo $result['id']; ?>" method="POST">
        <label for="productName">Product Name</label>
        <input type="text" id="product_name" name="product_name" required value="<?php echo $result['product_name']; ?>">

        <label for="brand">Brand</label>
        <input type="text" id="brand" name="brand" required value="<?php echo $result['brand']; ?>">

        <label for="color">Color</label>
        <input type="text" id="color" name="color" required value="<?php echo $result['color']; ?>"> 

        <label for="price">Price</label>
        <input type="number" id="price" name="price" required value="<?php echo $result['price']; ?>">

        <button type="submit">Submit</button>
    </form>
</body>

</html>
