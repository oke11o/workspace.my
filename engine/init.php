<?php
session_start();
require_once('../engine/pass.php');
require_once('../engine/db_connect.php');
require_once('../engine/menu_builder.php');
require_once('../engine/funcs.php');
require_once('../engine/calc_function.php');
require_once('../engine/comment.php');
require_once('../engine/requests.php');
//require_once('../engine/registration.php');
//require_once('../engine/authorization_function.php');
$user=null;
if(isset($_SESSION['user_id'])){
$user= getUserEmail($link,$_SESSION['user_id']);
}
?>