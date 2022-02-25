<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>websocket 聊天室</title>
</head>
<body>
    <input id="client_msg">
    <button onclick="client_send()">发送</button>
    <h2>服务器返回</h2>

    <script>
    </script>
</body>
</html>
<?php
//使用了Composer 和cboden/ratchet
//配置完composer.json之后需要使用composer dump-autoload手动更新autoload
use Ratchet\Server\IoServer;
use MyApp\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
require dirname(__DIR__) . '/vendor/autoload.php';
$server = IoServer::factory(new HttpServer(new WsServer(new Chat())),8080);
$server->run();
?>