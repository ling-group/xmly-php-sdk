<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Anchor\Anchor;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AnchorServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['anchor'] = function ($pimple) {
            return new Anchor($pimple['access_token']);
        };
    }
}
