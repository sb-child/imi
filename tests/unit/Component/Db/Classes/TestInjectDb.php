<?php

declare(strict_types=1);

namespace Imi\Test\Component\Db\Classes;

use Imi\Bean\Annotation\Bean;
use Imi\Db\Annotation\DbInject;
use Imi\Db\Interfaces\IDb;
use PHPUnit\Framework\Assert;

/**
 * @Bean("TestInjectDb")
 */
class TestInjectDb
{
    /**
     * @DbInject
     *
     * @var \Imi\Db\Interfaces\IDb
     */
    protected $db;

    public function test(): void
    {
        Assert::assertInstanceOf(IDb::class, $this->db);
    }
}
