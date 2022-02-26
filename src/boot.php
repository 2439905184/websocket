<?
set_time_limit(0); // 取消脚本运行时间的超时上限
ignore_user_abort(true); // 后台运行
echo "启动websocket服务器！";
passthru("php server.php",$result);
print($result);
//system("php server.php>>log.txt"，$result);
?>