<?php
/**
 * JUZAWEB CMS - The Best CMS for Laravel Project
 *
 * @package    juzaweb/juzacms
 * @author     The Anh Dang <dangtheanh16@gmail.com>
 * @link       https://juzaweb.com/cms
 * @license    MIT
 */

namespace Juzaweb\Traits;

use Rennokki\QueryCache\Traits\QueryCacheable;

trait ModelCache
{
    use QueryCacheable;

    protected static $flushCacheOnUpdate = true;
    /**
     * The cache driver to be used.
     *
     * @var string
     */
    public $cacheDriver = 'file';
}
