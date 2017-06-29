<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Track\Track;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class TrackServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['track'] = function ($pimple) {
            return new Track($pimple['access_token']);
        };
    }
}
