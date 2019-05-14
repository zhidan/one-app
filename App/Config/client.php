<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/14
 * Time: 17:21
 */

return [
    'global_data' => [
        'max_connect_count' => 10,
        'type'              => SWOOLE_SOCK_TCP,
        'ip'                => '127.0.0.1',
        'port'              => 9086,
        'time_out'          => 0.5,
        'pack_protocol'     => \One\Protocol\Frame::class,
        'set'               => [
            'open_length_check'   => 1,
            'package_length_func' => '\One\Protocol\Frame::length',
            'package_body_offset' => \One\Protocol\Frame::HEAD_LEN,
        ]
    ],
    'server2'     => [
        'max_connect_count' => 10,
        'type'              => SWOOLE_SOCK_TCP,
        'ip'                => '127.0.0.1',
        'port'              => 8092,
        'time_out'          => 0.5,
        'pack_protocol'     => \One\Protocol\Frame::class,
        'set'               => [
            'open_length_check'   => 1,
            'package_length_func' => '\One\Protocol\Frame::length',
            'package_body_offset' => \One\Protocol\Frame::HEAD_LEN,
        ]
    ],
    'server1'     => [
        'max_connect_count' => 10,
        'type'              => SWOOLE_SOCK_TCP,
        'ip'                => '127.0.0.1',
        'port'              => 8091,
        'time_out'          => 0.5,
        'pack_protocol'     => \One\Protocol\Frame::class,
        'set'               => [
            'open_length_check'   => 1,
            'package_length_func' => '\One\Protocol\Frame::length',
            'package_body_offset' => \One\Protocol\Frame::HEAD_LEN,
        ]
    ]];
