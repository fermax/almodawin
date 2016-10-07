<?php
	namespace blog\core;
	include "core/Category.php";
	include "core/Users.php";
	include "core/post.php";
	include "core/db.php";
	include "core/Helper.php";
	include "core/Messages.php";
	include "core/Redirect.php";

	$db = new db();
	$category = new Category($db);
	$Posts = new post($db);
	$Users = new Users($db);

?>