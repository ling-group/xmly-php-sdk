<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Album\Album;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AlbumServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['album'] = function ($pimple) {
            return new Album($pimple['access_token']);
        };
    }
}
