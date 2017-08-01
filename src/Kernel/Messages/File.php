<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Kernel\Messages;

/**
 * Class Image.
 *
 * @property string $media_id
 */
class File extends Media
{
    /**
     * Messages type.
     *
     * @var string
     */
    protected $type = 'file';

    /**
     * Properties.
     *
     * @var array
     */
    protected $properties = [
        'media_id',
    ];
}