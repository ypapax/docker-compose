<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome to my shop</h1>
        <ul>
            <?php
                // product-service is name of api.py service in docker-compose file
                $json = file_get_contents('http://product-service');
                $obj = json_decode($json);

                $products = $obj->products;
                foreach ($products as $product) {
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>