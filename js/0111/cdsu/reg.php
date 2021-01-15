<?php
// 连接数据库
include "pdo.php";
$pdo = getPdo();

$user_name = $_POST['user_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwds = $_POST['pwds'];
// 判断密码是否一致
// if($pwd != $pwds)
// {
//     $response = [
//         'errno' =>'400008',
//         'msg' => '密码不一致'
//     ];
//     die(json_encode($response));
// }
// 密码长度大于6
// if(strlen($pwd)<6)
// {
//     $response = [
//         'errno' =>'400009',
//         'msg' => '密码长度不够'
//     ];
//     die(json_encode($response));
// }
// 用户名是否存在
$sql = "select * from user0111 where user_name='{$user_name}'";
$res = $pdo->query($sql);

$record = $res->fetch(PDO::FETCH_ASSOC);
if($record)
{
    $response = [
        'errno' =>'400010',
        'msg' => '用户名已存在'
    ];
    die(json_encode($response));
}
// 邮箱是否存在
$sql = "select * from user0111 where email='{$email}'";
$res = $pdo->query($sql);

$record = $res->fetch(PDO::FETCH_ASSOC);
if($record)
{
    $response = [
        'errno' =>'400011',
        'msg' => '邮箱已存在'
    ];
    die(json_encode($response));
}
// 手机号是否存在
$sql = "select * from user0111 where mobile='{$mobile}'";
$res = $pdo->query($sql);

$record = $res->fetch(PDO::FETCH_ASSOC);
if($record)
{
    $response = [
        'errno' =>'400012',
        'msg' => '手机号已存在'
    ];
    die(json_encode($response));
}
// 用户信息入库
// 生成秘密
$password = password_hash($pwd,PASSWORD_BCRYPT);
$sql = "insert into user0111(`user_name`,`mobile`,`email`,`pwd`) values('{$user_name}','{$mobile}','{$email}','{$pwd}')";
$pdo->exec($sql);
$id = $pdo->lastInsertId();
if($id>0)
{
    $response = [
        'errno' =>'0',
        'msg' => 'ok'
    ];
    die(json_encode($response));
}else{
    $response = [
        'errno' =>'500008',
        'msg' => '注册失败'
    ];
    die(json_encode($response));
}