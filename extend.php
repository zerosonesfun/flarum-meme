<?php

/*
 * This file is part of zerosonesfun/flarum-meme.
 *
 * Copyright (c) 2021 Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ZerosOnesFun\Meme;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[meme img={URL} text-position={CHOICE=top,center,bottom}]{TEXT}[/meme]',
                '<div class="meme-container">
                 <img src="{URL}">
                 <div class="meme-{CHOICE}">{TEXT}</div>
                 </div>'
            );
        })
];
