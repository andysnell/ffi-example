<?php

declare(strict_types=1);

namespace WickedByte\Tests\Foo;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use WickedByte\Foo\CTime;

#[CoversClass(CTime::class)]
class CTimeTest extends TestCase
{
    #[Test]
    public function time_returns_current_time(): void
    {
        self::assertSame(\time(), CTime::time());
    }
}
