<?php

declare(strict_types=1);

namespace Imi\Model\Annotation;

use Imi\Bean\Annotation\Base;

/**
 * 实体注解.
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @property bool $camel      序列化时使用驼峰命名
 * @property bool $bean       模型对象是否作为 bean 类使用
 * @property bool $incrUpdate 是否启用增量更新，默认为 false
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Entity extends Base
{
    /**
     * {@inheritDoc}
     */
    protected ?string $defaultFieldName = 'camel';

    public function __construct(?array $__data = null, bool $camel = true, bool $bean = true, bool $incrUpdate = false)
    {
        parent::__construct(...\func_get_args());
    }
}
