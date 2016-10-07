<?php include "header.php"; ?>
<?php include "inc.php"; ?>
<?php

    if(isset( $_GET["c"] ) && isset( $_GET["p"] )  )
    {
        //$cat = $_GET["c"];
        //$blog = $_GET["p"];
        $category = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_SPECIAL_CHARS);
        $post_id  = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_SPECIAL_CHARS);
        unset($_GET["c"]);
        unset($_GET["p"]);
        $the_post = $Posts->getPostByCatSlugAndPostId($category, $post_id);
        ?>

        <div class="container animated fadeInUpBig fer-bg">
            <h3><?php if(isset($the_post["title"])){echo $the_post["title"];}else{ echo "أمممم ... يبدو انّ هناك خطباً ما "; }?></h3>
            <p><?php if(isset($the_post["body"])){echo $the_post["body"];}else{ echo "الصفحة التي طلبتها غير موجودة أو تم حذفها اعتذرُ منك جداًّ ..."; }?></p>
            <ol>
                <li>القسم : <?=$the_post["cat_name"];?></li>
                <li> دونت بتأريخ : <?=$the_post["creation_date"];?></li>
            </ol>
        </div>
        <?php
    }
    else
    {
        \blog\core\Redirect::to("http://127.0.0.1/blog/index.php");
    }

?>



<?php include "footer.php"; ?>