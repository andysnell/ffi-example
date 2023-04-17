<?php

declare(strict_types=1);

namespace WickedByte\Benchmarks\Foo;

use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Subject;
use WickedByte\Foo\CTime;

#[Revs(100_000)]
#[Iterations(5)]
class CTimeBench
{
    #[Subject]
    public function c_time(): void
    {
        CTime::time();
    }

    #[Subject]
    public function php_time(): void
    {
        \time();
    }
}
