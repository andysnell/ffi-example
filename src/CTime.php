<?php

declare(strict_types=1);

namespace WickedByte\Foo;

use FFI;

class CTime
{
    public static function time(): int
    {
        static $ffi;
        $ffi ??= FFI::cdef(<<<'EOL'
            typedef long int time_t;
            time_t time (time_t *result);
            EOL, 'libc.so.6');

        return $ffi->time(null);
    }
}
