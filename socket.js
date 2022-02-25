//客户端
//笔记
/*Websocket 使用 ws 或 wss 的统一资源标志符，类似于 HTTPS，其中 wss 表示在 TLS 之上的 Websocket。如：
ws://example.com/wsapi
wss://secure.example.com/*/
/*也就是说wss:// 就类似http:// https:// 是一个规范 是url前缀
指定了ws:// wss://的url就是专门用于websocket通信的url
比如说 ws://test.org/testp.php 或许可以这么试一下*/
/*Socket 其实并不是一个协议，是应用层与 TCP/IP 协议族通信的中间软件抽象层，
它是一组接口。当两台主机通信时，让 Socket 去组织数据，以符合指定的协议。TCP 连接则更依靠于底层的 IP 协议，
IP 协议的连接则依赖于链 */
var ws = new WebSocket("wss://echo.websocket.org")

ws.onopen = function(event)
{
    console.log("连接被打开")
    ws.send("hello sockets")
}
ws.onmessage = function(event)
{
    console.log("收到信息"+event.data)
    ws.close()
}
ws.onclose = function(event)
{
    console.log("连接被关闭")
}
//客户端发送给服务器
function client_send()
{

}
//服务器发送给客户端
function sever_send()
{

}