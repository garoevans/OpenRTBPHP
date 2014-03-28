<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\App\Content;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\App\Publisher;

class App
{
    /**
     * Application ID on the exchange.
     *
     * @recommended
     * @var string
     */
    protected $id;

    /**
     * Application name (may be masked at publisher's request).
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * Domain of the application (e.g., "mygame.foo.com").
     *
     * @optional
     * @var string
     */
    protected $domain;

    /**
     * Array of IAB content categories for the overall application.
     *
     * @optional
     * @var string[]
     */
    protected $cat;

    /**
     * Array of IAB content categories for the current subsection of the app.
     *
     * @optional
     * @var string[]
     */
    protected $sectioncat;

    /**
     * Array of IAB content categories for the current page/view of the app.
     *
     * @optional
     * @var string[]
     */
    protected $pagecat;

    /**
     * Application version.
     *
     * @optional
     * @var string
     */
    protected $ver;

    /**
     * Application bundle or package name (e.g., com.foo.mygame). This is intended to be a unique ID across multiple
     * exchanges.
     *
     * @recommended
     * @var string
     */
    protected $bundle;

    /**
     * Specifies whether the app has a privacy policy. "1" means there is a policy and "0" means there is not.
     *
     * @optional
     * @var int
     */
    protected $privacypolicy;

    /**
     * "1" if the application is a paid version; else "0" (i.e., free).
     *
     * @optional
     * @var int
     */
    protected $paid;

    /**
     * @optional
     * @var Publisher
     */
    protected $publisher;

    /**
     * @optional
     * @var Content
     */
    protected $content;

    /**
     * List of keywords describing this app in a comma separated string.
     *
     * @optional
     * @var string
     */
    protected $keywords;
}
