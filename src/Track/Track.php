<?php

namespace Superman2014\XmlySdk\Track;

use Superman2014\XmlySdk\Core\AbstractAPI;

class Track extends AbstractAPI
{

    const API_HOT = 'http://api.ximalaya.com/tracks/hot';
    const API_GET_BATCH = 'http://api.ximalaya.com/tracks/get_batch';
    const API_GET_LAST_PLAY_TRACKS = 'http://api.ximalaya.com/tracks/get_last_play_tracks';

    public function hot(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_HOT, $param]);
    }

    public function get_batch(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET_BATCH, $param]);
    }

    public function get_last_play_tracks(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_GET_LAST_PLAY_TRACKS, $param]);
    }
}
