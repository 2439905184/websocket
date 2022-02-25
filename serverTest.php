<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
// 设置IP和端口重用,在重启服务器后能重新使用此端口;
socket_set_option($this->master, SOL_SOCKET, SO_REUSEADDR, 1);
// 将IP和端口绑定在服务器socket上;
socket_bind($this->master, $host, $port);
// listen函数使主动连接套接口变为被连接套接口，使得此 socket 能被其他 socket 访问，从而实现服务器功能。后面的参数则是自定义的待处理socket的最大数目，并发高的情况下，这个值可以设置大一点，虽然它也受系统环境的约束。
socket_listen($this->master, self::LISTEN_SOCKET_NUM);
/*缓存数据到数据库 包括聊天记录和用户头像等信息 */
function save_to_db()
{

}
function cache_img()
{

}

?>