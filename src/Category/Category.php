<?php

namespace Superman2014\XmlySdk\Category;

use Superman2014\XmlySdk\Core\AbstractAPI;

class Category extends AbstractAPI
{

    const API_GET = 'http://api.ximalaya.com/categories/list';

    public function index(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET, $param]);
    }
}
