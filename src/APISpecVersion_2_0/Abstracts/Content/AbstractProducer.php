<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Abstracts\Content;

abstract class AbstractProducer
{
    /**
     * Content producer or originator ID. Useful if content is syndicated, and may be posted on a site using embed tags.
     *
     * @optional
     * @var string
     */
    protected $id;

    /**
     * Content producer or originator name (e.g., "Warner Bros").
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * Array of IAB content categories for the content producer.
     *
     * @optional
     * @var string[]
     */
    protected $cat;

    /**
     * URL of the content producer.
     *
     * @optional
     * @var string
     */
    protected $domain;
}
