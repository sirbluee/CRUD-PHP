<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $deteleId = $_GET['id'];
        $deletSql = "DELETE FROM product_info WHERE id='$deteleId'";

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mart";

        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM product_info";
        $query = $conn->query($deletSql);

        if($query){
            ?>
                <div class="flex items-center justify-center h-screen">
                        <h1 class="text-center font-bold px-20">Item Completed!</h1>
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