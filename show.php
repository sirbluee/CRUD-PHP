<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $editId = $_GET['id'];
        $showSsql = "SELECT * FROM product_info where id='$editId'";

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "mart";

        $conn = new mysqli($host, $user, $password, $db);
        $sql = "SELECT * FROM product_info";
        $query = $conn->query($editSql);
        $result = $query->fetch_assoc();
    ?>
        <div class="mx-auto my-10 flex max-w-xs flex-col items-center rounded-xl border px-4 py-4 text-center md:max-w-lg md:flex-row md:items-start md:text-left">
    <div class="mb-4 md:mr-6 md:mb-0">
        <img class="h-56 rounded-lg object-cover md:w-56" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVyc29ufGVufDB8fDB8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" />
    </div>
    <div class="">
        <p class="text-xl font-medium text-gray-700">James Edward</p>
        <p class="mb-4 text-sm font-medium text-gray-500">Senior Editor</p> 
        <div class="flex space-x-2">
        <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Articles</p>
            <p class="text-3xl font-medium text-gray-600">13</p>
        </div>
        <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Papers</p>
            <p class="text-3xl font-medium text-gray-600">7</p>
        </div>
        <div class="flex flex-col items-center rounded-xl bg-gray-100 px-4 py-2">
            <p class="text-sm font-medium text-gray-500">Followers</p>
            <p class="text-3xl font-medium text-gray-600">2.5k</p>
        </div>
        <div class=""></div>
        </div>
        <div class="mb-3"></div>
        <div class="flex space-x-2">
        <button class="w-full rounded-lg border-2 bg-white px-4 py-2 font-medium text-gray-500">Message</button>
        <button class="w-full rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white">Follow</button>
        </div>
    </div>
    </div>

</body>
</html>