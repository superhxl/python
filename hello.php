<?php
/**
 * Short description for hello.php
 *
 * @package hello
 * @author superhxl <xlhan@shmtu.edu.cn>
 * @version 0.1
 * @copyright (C) 2018 superhxl <xlhan@shmtu.edu.cn>
 * @license MIT
 */

<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

    $name=$_POST['firstname'];//post获取表单里的name
    $password=$_POST['lastname'];//post获取表单里的password

    echo "Hello, ", $name;//成功输出注册成功

    

?>
