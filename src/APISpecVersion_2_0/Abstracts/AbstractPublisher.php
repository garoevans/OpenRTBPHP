<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Abstracts;

abstract class AbstractPublisher
{
    /**
     * Publisher ID on the exchange.
     *
     * @recommended
     * @var string
     */
    protected $id;

    /**
     * Publisher name (may be masked at publisher's request).
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * Array of IAB content categories for the publisher.
     *
     * @optional
     * @var string[]
     */
    protected $cat;

    /**
     * Publisher's highest level domain name, for example "foopub.com".
     *
     * @optional
     * @var string
     */
    protected $domain;
}
