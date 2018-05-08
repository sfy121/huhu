<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-05-07
 * Time: 11:45
 */

if($_GET){

    header ( "Content-type:text/html;charset=utf-8" );

    $link = mysqli_connect('127.0.0.1','root','','zjrh');
    //设置编码
    mysqli_query($link,'set names utf8');

    if(!$link) {
        printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());

        exit;
    }

    //加引号
    $sql = "INSERT INTO zs (name,content,status) VALUES ('".$_GET['name']."','".$_GET['content']."','".$_GET['status']."')";

//    var_dump($sql);exit;

    $result = mysqli_query($link,$sql);

    if($result){
        var_dump('成功');
    }else {
        var_dump('失败');

    }

    mysqli_close($link);


}else{

    echo '请选择添加项';
}