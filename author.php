<?php include "header.php"; include "inc.php";?>
    <div class="container">
        <h2 class="btn btn-success">كل الفوائد التي جمعها العضو <?=$_GET["username"]." :";?></h2>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>العنوان</th>
                <th>القسم</th>
                <th> الكاتب </th>
                <th>نُشِر بتأريخ</th>
            </tr>
            </thead>
            <tbody>

            <!-- the loop . . . -->
            <?php foreach($Posts->userPosts($_GET["uid"]) as $data ) : ?>
            <tr>
                <td><a href="single.php?c=<?=$category->categoryInfo($data["cid"])['categorySlug'];?>&p=<?=$data["id"];?>" title="اطلع على تدوينة <?=$data["title"];?>"><?=$data["title"] ; ?></a></td>
                <td><a href="category.php?cat_slug=<?=$category->categoryInfo($data["cid"])["categorySlug"];?>" ><?=$category->categoryInfo($data["cid"])["categoryName"]; ?></a></td>
                <td><?php ; ?></td>
                <td><?php ; ?></td>
            </tr>
            <?php endforeach;?>
            <!-- end loop . . . -->

            </tbody>
        </table>
    </div>
<?php include "footer.php"; ?>