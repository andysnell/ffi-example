# PHP FFI Example

## Setup
`make build`

## Pre-Process Time Header File
`make shell`
`cpp -P /usr/include/time.h -o ffi_time.h`


## Run Tests
`make phpunit`

## Run Benchmarks
`make phpbench`
