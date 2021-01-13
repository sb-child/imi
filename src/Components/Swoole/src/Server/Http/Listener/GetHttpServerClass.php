<?php

declare(strict_types=1);

namespace Imi\Swoole\Server\Http\Listener;

use Imi\Bean\Annotation\Listener;
use Imi\Event\EventParam;
use Imi\Event\IEventListener;

/**
 * @Listener("IMI.SERVER.GET.SERVER_CLASS.Http")
 */
class GetHttpServerClass implements IEventListener
{
    /**
     * 事件处理方法.
     *
     * @param EventParam $e
     *
     * @return void
     */
    public function handle(EventParam $e)
    {
        $data = $e->getData();
        $data['class'] = \Imi\Swoole\Server\Http\Server::class;
    }
}