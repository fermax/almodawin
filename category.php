<?php include "header.php";include "inc.php";?>
<?php

    $cat_slug = $_GET["cat_slug"];
    $cat_slug = filter_input(INPUT_GET, "cat_slug", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "<h2 class=\"btn btn-success\">جميع فوائد قسم : ".$Posts->categoryPosts($cat_slug)[0]["cname"]."</h2>";
    var_dump($Posts->categoryPosts($cat_slug));
?>
<?php include "footer.php"; ?>