<?php
namespace Lawoole\Server;

use Lawoole\Application;
use Lawoole\Console\OutputStyle;
use Lawoole\Swoole\Handlers\ServerHandler as ServerHandlerContract;
use Lawoole\Swoole\Handlers\ServerSocketBufferHandler;
use Lawoole\Swoole\Handlers\TcpServerSocketHandler;

class ServerHandler implements ServerHandlerContract, ServerSocketBufferHandler, TcpServerSocketHandler
{
    /**
     * 服务容器
     *
     * @var \Lawoole\Application
     */
    protected $app;

    /**
     * 控制台格式输出
     *
     * @var \Lawoole\Console\OutputStyle
     */
    protected $outputStyle;

    /**
     * 创建服务事件处理器
     *
     * @param \Lawoole\Application $app
     * @param \Lawoole\Console\OutputStyle $outputStyle
     */
    public function __construct(Application $app, OutputStyle $outputStyle)
    {
        $this->app = $app;
        $this->outputStyle = $outputStyle;
    }

    /**
     * 获得服务容器
     *
     * @return \Lawoole\Application
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * 在主进程启动时调用
     *
     * @param \Lawoole\Swoole\Server $server
     */
    public function onStart($server)
    {

    }

    /**
     * 在主进程结束时调用
     *
     * @param \Lawoole\Swoole\Server $server
     */
    public function onShutdown($server)
    {

    }

    /**
     * 管理进程启动时调用
     *
     * @param \Lawoole\Swoole\Server $server
     */
    public function onManagerStart($server)
    {

    }

    /**
     * 管理进程结束时调用
     *
     * @param \Lawoole\Swoole\Server $server
     */
    public function onManagerStop($server)
    {

    }

    /**
     * 在工作进程启动时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $workerId
     */
    public function onWorkerStart($server, $workerId)
    {

    }

    /**
     * 在工作进程结束时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $workerId
     */
    public function onWorkerStop($server, $workerId)
    {

    }

    /**
     * 在工作进程平缓退出的每次事件循环结束时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $workerId
     */
    public function onWorkerExit($server, $workerId)
    {

    }

    /**
     * 工作进程异常退出时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $workerId
     * @param int $workerPid
     * @param int $exitCode
     * @param int $signal
     */
    public function onWorkerError($server, $workerId, $workerPid, $exitCode, $signal)
    {

    }

    /**
     * 任务工作进程收到任务时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $taskId
     * @param int $srcWorkerId
     * @param mixed $data
     */
    public function onTask($server, $taskId, $srcWorkerId, $data)
    {

    }

    /**
     * 任务工作结束，通知到工作进程时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $taskId
     * @param mixed $data
     */
    public function onFinish($server, $taskId, $data)
    {

    }

    /**
     * 接收到进程间管道消息时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param int $srcWorkerId
     * @param mixed $data
     */
    public function onPipeMessage($server, $srcWorkerId, $data)
    {

    }

    /**
     * 当缓存区达到高位线时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param \Lawoole\Swoole\ServerSocket $serverSocket
     * @param int $fd
     */
    public function onBufferFull($server, $serverSocket, $fd)
    {

    }

    /**
     * 当缓存区降至低位线时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param \Lawoole\Swoole\ServerSocket $serverSocket
     * @param int $fd
     */
    public function onBufferEmpty($server, $serverSocket, $fd)
    {

    }

    /**
     * 新连接进入时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param \Lawoole\Swoole\ServerSocket $serverSocket
     * @param int $fd
     * @param int $reactorId
     */
    public function onConnect($server, $serverSocket, $fd, $reactorId)
    {

    }

    /**
     * 从连接中取得数据时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param \Lawoole\Swoole\ServerSocket $serverSocket
     * @param int $fd
     * @param int $reactorId
     * @param string $data
     */
    public function onReceive($server, $serverSocket, $fd, $reactorId, $data)
    {

    }

    /**
     * 当连接关闭时调用
     *
     * @param \Lawoole\Swoole\Server $server
     * @param \Lawoole\Swoole\ServerSocket $serverSocket
     * @param int $fd
     * @param int $reactorId
     */
    public function onClose($server, $serverSocket, $fd, $reactorId)
    {

    }
}
