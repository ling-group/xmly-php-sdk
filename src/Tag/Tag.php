<?php

namespace Superman2014\XmlySdk\Tag;

use Superman2014\XmlySdk\Core\AbstractAPI;

class Tag extends AbstractAPI
{

    const API_GET = 'http://api.ximalaya.com/tags/list';

    public function index(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET, $param]);
    }
}
