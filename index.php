		<?php include "inc.php"; include_once "vendor/autoload.php";?>
		<?php include "header.php";$contents = $Posts->all(10, 0);$errors = $db->getError(); ?>
		<!-- Table begin-->
		<div class="container">
            <?php if(count($errors)): ?>
                <ul>
                <?php foreach($errors as $error): ?>
                    <li><?=$error?></li>
                <?php endforeach;?>
            <?php else: ?>
                </ul>

			<table class="table table-hover table-bordered animated fadeIn">
				<thead>
					<tr>
						<th>عنوان الفائدة :</th>
						<th>القسم</th>
						<th> الكاتب </th>
						<th>نُشِر بتأريخ</th>
					</tr>
				</thead>
				<tbody>

				<!-- the loop . . . -->
					<?php foreach($contents as $Post):?>
						<tr>
							<!-- يا إلهي ... ما أطول الروابط  -->
							<td><a href="single.php?c=<?php echo $category->categoryInfo($Post["cid"])['categorySlug'];?>&p=<?php echo $Post["id"];?>" title="اطلع على تدوينة <?=$Post["title"];?>"> <?php echo $Post["title"];?></a></td>
							<td><a href="category.php?cat_slug=<?php echo $category->categoryInfo($Post["cid"])['categorySlug'];?>"><?php echo $category->categoryInfo($Post["cid"])['categoryName'];?></a></td>
							<td><a href="author.php?uid=<?=$Users->single("users", $Post["uid"])["uid"];?>&username=<?=$Users->single("users", $Post["uid"])["fullName"];?>" title="شاهد جميع مواضيع الكاتب : <?php echo $Post["author"];?>"><?php echo $Post["author"];?></a></td>
							<td><?php echo $Post["creation_date"];?></td>
						</tr>
					<?php endforeach;?>
				<!-- end loop . . . -->

				</tbody>
			</table>
		</div>
		<!-- Table end-->

		<!-- Pagination begin-->

		<!-- Pagination end-->
        <?php endif;?>
		<?php include "footer.php"; ?>