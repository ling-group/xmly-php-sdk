<?php

namespace Superman2014\XmlySdk\Foundation\ServiceProviders;

use Superman2014\XmlySdk\Category\Category;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CategoryServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['category'] = function ($pimple) {
            return new Category($pimple['access_token']);
        };
    }
}
