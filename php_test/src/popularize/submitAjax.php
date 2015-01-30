<?php
include_once 'conn.php';
if (isset($_POST['username']) && $_POST['username']) {
    if (empty($_POST['username'])) {
        echo json_encode(array('error' => 1));
        die;
    }
    if (empty($_POST['tel'])) {
        echo json_encode(array('error' => 2));
        die;
    }
    if (empty($_POST['qq'])) {
        echo json_encode(array('error' => 3));
        die;
    }
    if ($_POST['checkCode'] != $_SESSION["checkCode"]) {
        echo json_encode(array('error' => 4));
        die;
    }
    $result = mysql_query("select * from user where username = '" . $_POST['username'] . "'");     //执行sql查询
    while($row = mysql_fetch_array($result))
    {
        if (!empty($row)) {
            echo json_encode(array('error' => 5));
            die;
        }
    }
    
    $sql = "insert into user(username, tel, qq, created_at) values ('" . $_POST['username'] . "', '" . $_POST['tel'] . "', '" . $_POST['qq'] . "', now())";
    $insertFlag = mysql_query($sql);
    if ($insertFlag) {
        echo json_encode(array('success' => 1));
        die;
    }
    echo json_encode(array('error' => 0));
    die;
}