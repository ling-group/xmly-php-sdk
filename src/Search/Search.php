<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * Search.php.
 *
 * @author    overtrue <i@overtrue.me>
 * @copyright 2015 overtrue <i@overtrue.me>
 *
 * @link      https://github.com/overtrue
 * @link      http://overtrue.me
 */
namespace Superman2014\XmlySdk\Search;

use Superman2014\XmlySdk\Core\AbstractAPI;

/**
 * Class Search.
 */
class Search extends AbstractAPI
{

    const API_ALBUMS_GET = 'http://api.ximalaya.com/search/albums';
    const API_TRACKS_GET = 'http://api.ximalaya.com/search/tracks';

    /**
     * Get Search albums.
     *
     * @return  Superman2014\XmlySdk\Support\Collection
     */
    public function albums(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_ALBUMS_GET, $param]);
    }

    /**
     * Get Search tracks.
     *
     * @return  Superman2014\XmlySdk\Support\Collection
     */
    public function tracks(array $param = [])
    {
        $param = $this->commonParams($param);

        return $this->parseJSON('get', [self::API_TRACKS_GET, $param]);
    }
}
