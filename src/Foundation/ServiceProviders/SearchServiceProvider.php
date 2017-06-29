<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Search\Search;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class SearchServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['search'] = function ($pimple) {
            return new Search($pimple['access_token']);
        };
    }
}
