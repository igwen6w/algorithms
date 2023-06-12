<?php

//
$invoker = new Invoker();
$receiver = new Receiver();

// 实例命令并为命令选择一个接收器
$command =new EchoHelloCommand($receiver);
// 将命令传递给调用者,或者也可以直接run(command)
$invoker->setCommand($command);
// 执行命令
$invoker->run();

echo $receiver->stdOut();


/**
 * 玩家 invoker
 * 游戏进程管理器 receiver
 * 预定义命令 command(dibs, receiver)
 *
 * 1.玩家执行 2.游戏进程接收到玩家命令
 * 游戏进程响应结果
 */
