<?php

namespace Superman2014\XmlySdk\Album;

use Superman2014\XmlySdk\Core\AbstractAPI;

class Album extends AbstractAPI
{

    const API_GET = 'http://api.ximalaya.com/albums/list';
    const API_BROWSE = 'http://api.ximalaya.com/albums/browse';
    const API_GET_BATCH = 'http://api.ximalaya.com/albums/get_batch';
    const API_GET_UPDATE_BATCH = 'http://api.ximalaya.com/albums/get_update_batch';
    const API_BY_ANNOUNCER = 'http://api.ximalaya.com/albums/by_announcer';

    public function index(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET, $param]);
    }

    public function browse(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_BROWSE, $param]);
    }

    public function get_batch(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET_BATCH, $param]);
    }

    public function get_update_batch(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET_UPDATE_BATCH, $param]);
    }

    public function by_announcer(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_BY_ANNOUNCER, $param]);
    }
}
