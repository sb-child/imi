<?php

declare(strict_types=1);

namespace Imi\Swoole\Server\Event\Param;

use Imi\Event\EventParam;
use Imi\Swoole\Server\Base;

class ReceiveEventParam extends EventParam
{
    /**
     * 服务器对象
     *
     * @var \Imi\Swoole\Server\Base
     */
    public Base $server;

    /**
     * 客户端连接的标识符.
     *
     * @var int
     */
    public int $fd;

    /**
     * Reactor线程ID.
     *
     * @var int
     */
    public int $reactorId;

    /**
     * 接收到的数据.
     *
     * @var string
     */
    public string $data;
}