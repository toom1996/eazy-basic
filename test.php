<?php

$server = new \Swoole\Http\Server('0.0.0.0', 9502);

$server->set([
    'admin_server' => '0.0.0.0:9502', // 启用 admin_server 服务
    'worker_num' => 2,
    'task_worker_num' => 3
]);

//监听连接进入事件
$server->on('request', function ($server, $fd) {
    echo "Client: Connect.\n";
});

//监听数据接收事件
$server->on('Receive', function ($server, $fd, $reactor_id, $data) {
    $server->send($fd, "Server: {$data}");
});

//监听连接关闭事件
$server->on('Close', function ($server, $fd) {
    echo "Client: Close.\n";
});

//启动服务器
$server->start();