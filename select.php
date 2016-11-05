<?php

require ("system.class.inc.php");

//数据库类实例
$conobj  = new ConnDB("mysql", "localhost", "root", "", "csutdqgzxzx");
$conn = $conobj->GetConnld();

//数据库操作类对象
$admindb = new AdminDB();
$result = $admindb->ExecSQL("select * from lost limit 6",$conn);
?>