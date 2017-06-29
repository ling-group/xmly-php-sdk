<?php

namespace Superman2014\XmlySdk\Anchor;

use Superman2014\XmlySdk\Core\AbstractAPI;

class Anchor extends AbstractAPI
{

    const API_GET = 'http://api.ximalaya.com/announcers/list';
    const API_CATEGORY_GET = 'http://api.ximalaya.com/announcers/categories';

    public function index(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET, $param]);
    }

    public function categories(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_CATEGORY_GET, $param]);
    }
}
