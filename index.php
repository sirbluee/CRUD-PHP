<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="drop-shadow-md mx-20 my-10">
<button class="mb-4 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
<a href="create.php">New Product</a>
</button>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-all" class="sr-only">checkbox</label>
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                ID
            </th>
            <th scope="col" class="px-6 py-3">
                Product Name
            </th>
            <th scope="col" class="px-6 py-3">
                Brand
            </th>
            <th scope="col" class="px-6 py-3">
                Color
            </th>
            <th scope="col" class="px-6 py-3">
                Price
            </th>
            <th scope="col" class="px-8 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mart";

        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM product_info";
        $query = $conn->query($sql);
        $result = $query->fetch_all(MYSQLI_ASSOC);

        $i = 1;
        foreach ($result as $results) {
            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $results['id']?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $results['product_name']?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $results['brand']?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $results['color']?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $results['price']?>
                </td>
                <td class="px-6 py-4">
                    <a href="edit.php?id=<?php echo $results['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2 py-4">Edit</a>
                    <a href="delete.php?id=<?php echo $results['id']?>" class="font-medium text-red-600 dark:text-red-500 hover:underline px-2 py-4">Delete</a>
                    <a href="show.php?id=<?php echo $results['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-2 py-4">Show</a>
                </td>
            </tr>
            <?php
                $i = $i+1;
        }
            ?>
    </tbody>
</table>
</div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>