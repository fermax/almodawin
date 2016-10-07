<?php
/*
namespace blog;
use blog\core\db;
use blog\core\Users;

include "core/db.php";
include "core/Users.php";
include "core/pw.php";
include "core/Helper.php";
include "core/Messages.php";
include "core/Table.php";
*/
$date = new DateTime();

var_dump($date->getTimestamp());

/*
$db = new db();

$user = new Users($db);

if( $user->single("users", 2))
{
   var_dump($user->single("users", 2));
}
else
{
    var_dump($db->getErrors());
}
*/



/*
$user_array_data = [
    "fullName" => "hocine ferradj",
    "username" => "Ahmed",
    "Password" => "123445",
    "email"    => "fer@ta3li.me"
];

$db = new db();

$user = new Users($db);

if( $user->add("users",$user_array_data ) )
{
    echo "تم إضافة المستخدم بنجاح";
}
else
{
    echo "<pre>";
    var_dump($db->getErrors());
    echo "</pre>";
}


*/
/*
$user_array_data = [
	"username" => "fermax_password",
    "Password" => "1521980Fr",
    "email"    => "fer@ta3li.me"
];

$results_array = [];
foreach( $user_array_data as $k => $v )
{
    if(preg_match("#(password|pass|[a-z0-9]password)#usi", $k))
    {
        $results_array[$k] = core\pw::hash($v); //hash('sha256', $v);
    }
    else
    {
        $results_array[$k] = $v;
    }
}
echo "<pre>";
print_r($results_array);
echo "</pre>";
*/
