<?php
//使用了Composer 和cboden/ratchet
//配置完composer.json之后需要使用composer dump-autoload手动更新autoload
use Ratchet\Server\IoServer;
use MyApp\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require dirname(__DIR__) . '/vendor/autoload.php';
set_time_limit(0); // 取消脚本运行时间的超时上限
ignore_user_abort(true); // 后台运行
//tnnd给我卡住！
/*umask(0);
$pid = pcntl_fork();
if($pid > 0)
{
    exit(200);
}
//第二步
if(posix_setsid() == -1)
{
    echo "创建会话进程失败";
}
//第三部
chdir('/');
//第四步，关掉标准输入输出
fclose(STDIN);
fclose(STDOUT);
fclose(STDERR);

//黑洞文件 dev/null代表空设备 替代标准输入输出
$stdin = fopen("/dev/null","a");#0
$stdout = fopen("/dev/null","a");#1
$stderr = fopen("/dev/null","a");#2

var_dump("6666");
while(1)
{
    sleep(1);
}*/
$server = IoServer::factory(new HttpServer(new WsServer(new Chat())),8080);
$server->run();
//echo "aaa";
?>