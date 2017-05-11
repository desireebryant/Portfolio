<?php

    function get_list($product_id, $product) {
        
        $saleitem = "";
        $saleitem = $saleitem . "<li class='column3'>";
        $saleitem = $saleitem . '<a href="shirt.php?id=' . $product_id . '" target="_blank">';
        $saleitem = $saleitem . "<p>Pick Me!</p>";
        $saleitem = $saleitem . "</a>";
        $saleitem = $saleitem . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '" class="shirts column3">';
        $saleitem = $saleitem . "</li>";
        return $saleitem;
    }

    $products = array();
    
    $products[101] = array(
    	"name" => "Red Shirt",
    	"img" => "images/shirts/red.jpg",
    	"price" => 20,
    	"paypal" => "9UFGVKSN5GDP8",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[102] = array(
    	"name" => "Black Shirt",
        "img" => "images/shirts/black.jpg",
        "price" => 20,
        "paypal" => "HWUCPLTX4QEBC",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[103] = array(
        "name" => "Blue Shirt",
        "img" => "images/shirts/blue.jpg",    
        "price" => 20,
        "paypal" => "4CNL7QSLEVSMA",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[104] = array(
        "name" => "White Shirt",
        "img" => "images/shirts/white.jpg",    
        "price" => 20,
        "paypal" => "K9UCMRHFMNK9G",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[105] = array(
        "name" => "Yellow Shirt",
        "img" => "images/shirts/yellow.jpg",    
        "price" => 20,
        "paypal" => "KZLMP7HBFFBDQ",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[106] = array(
        "name" => "Gray Shirt",
        "img" => "images/shirts/gray.jpg",    
        "price" => 20,
        "paypal" => " SZDNEAVEZYNJU",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
        $products[107] = array(
        "name" => "Purple Shirt",
        "img" => "images/shirts/purple.jpg",    
        "price" => 20,
        "paypal" => "FWNTKFHSLQ2HU",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    $products[108] = array(
        "name" => "Orange Shirt",
        "img" => "images/shirts/orange.jpg",    
        "price" => 20,
        "paypal" => "GKSM8ZLRAFSJN",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    
    $products[109] = array(
        "name" => "Camo Green Shirt",
        "img" => "images/shirts/camogreen.jpg",    
        "price" => 20,
        "paypal" => "3L366DQJPJEZ8",
        "sizes" => array("Small","Medium","Large","X-Large")
    );
    
    $products[110] = array(
        "name" => "Brown Shirt",
        "img" => "images/shirts/brown.jpg",    
        "price" => 20,
        "paypal" => "7NTZLXBG99AK2",
        "sizes" => array("Small","Medium","Large","X-Large")
    );

      $products[111] = array(
        "name" => "Salmon Shirt",
        "img" => "images/shirts/salmon.jpg",    
        "price" => 20,
        "paypal" => "A7BJBVUQQFJKA",
        "sizes" => array("Small","Medium","Large","X-Large")
    );  
    
       $products[112] = array(
        "name" => "Tan Shirt",
        "img" => "images/shirts/tan.jpg",    
        "price" => 20,
        "paypal" => "EXEJ6G8NWK9B2",
        "sizes" => array("Small","Medium","Large","X-Large")
    );   
    
         $products[113] = array(
        "name" => "Lime Shirt",
        "img" => "images/shirts/lime.jpg",    
        "price" => 20,
        "paypal" => "6PN2XUB4KV7S2",
        "sizes" => array("Small","Medium","Large","X-Large")
    );   
    
          $products[114] = array(
        "name" => "Baby Blue Shirt",
        "img" => "images/shirts/babyblue.jpg",    
        "price" => 20,
        "paypal" => "X2YR2YE9FX4QG",
        "sizes" => array("Small","Medium","Large","X-Large")
    );    
    
          $products[115] = array(
        "name" => "Lilac Shirt",
        "img" => "images/shirts/lilac.jpg",    
        "price" => 20,
        "paypal" => "JXNESL8VF756E",
        "sizes" => array("Small","Medium","Large","X-Large")
    );    
    
          $products[116] = array(
        "name" => "Dark Blue Shirt",
        "img" => "images/shirts/darkblue.jpg",    
        "price" => 20,
        "paypal" => "E98UL859SFNLY",
        "sizes" => array("Small","Medium","Large","X-Large")
    );    
    
?>