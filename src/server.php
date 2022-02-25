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
   /* var ws = new WebSocket("ws:///websocket:1234/server.php")
    console.log(ws)
    ws.onopen = function(evt)
    {
        console.log("连接被打开")
        console.log(ws.readyState)
        alert("数据发送中")
        //发送消息到服务端
        //ws.send("hello world")
       /* console.log(v.dateFormat(new Date(),"yyyy-MM-dd hh:mm:ss:S") + " onopen=" +  event);
        v.timer = window.setInterval(function(){ //每隔5秒钟发送一次心跳，避免websocket连接因超时而自动断开
            console.log('每隔5秒钟发送一次心跳');
            var ping = {"type":"ping"};
            v.webSocket.send(JSON.stringify(ping));
        },5000);
    }
    ws.onmessage = function(evt)
    {
        console.log("收到信息"+evt.data)
        //ws.close()
    }
    ws.onclose = function(evt)
    {
        console.log("连接被关闭")
        console.log(evt.data)
    }
    //客户端发送给服务器
    function client_send()
    {
        ws.send("hello")
        //var msg = document.getElementById("")
    }
    //服务器发送给客户端
    function sever_send()
    {

    }*/
    </script>
</body>
</html>
<?php
//使用了Composer 和cboden/ratchet
//配置完composer.json之后需要使用composer dump-autoload手动更新autoload
use Ratchet\Server\IoServer;
use MyApp\Chat;
require dirname(__DIR__) . '/vendor/autoload.php';
$server = IoServer::factory(new Chat(),8080);
$server->run();
?>