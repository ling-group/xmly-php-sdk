<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Tag\Tag;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class TagServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['tag'] = function ($pimple) {
            return new Tag($pimple['access_token']);
        };
    }
}
