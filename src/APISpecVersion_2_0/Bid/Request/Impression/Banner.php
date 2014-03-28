<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression;

class Banner
{
    /**
     * Width of the impression in pixels. Since some ad types are not restricted by size this field is not required, but
     * it's highly recommended that this information be included when possible.
     *
     * @recommended
     * @var int
     */
    protected $w;

    /**
     * Height of the impression in pixels. Since some ad types are not restricted by size this field is not required, but
     * it's highly recommended that this information be included when possible.
     *
     * @recommended
     * @var int
     */
    protected $h;

    /**
     * Unique identifier for this banner object. Useful for tracking multiple banner objects (e.g., in companion banner
     * array). Usually starts with 1, increasing with each object. Combination of impression id banner objects should be
     * unique.
     *
     * @recommended when subordinate to a video object
     * @var string
     */
    protected $id;

    /**
     * Ad position
     *
     * @optional
     * @var int
     */
    protected $pos;

    /**
     * Blocked creative types. If blank, assume all types are allowed.
     *
     * @optional
     * @var int[]
     */
    protected $btype = array();

    /**
     * Blocked creative attributes. If blank assume all types allowed.
     *
     * @optional
     * @var int[]
     */
    protected $battr = array();

    /**
     * Whitelist of content MIME types supported. Popular MIME types include, but are not limited to "image/jpg",
     * "image/gif" and "application/x-shockwave-flash".
     *
     * @optional
     * @var string[]
     */
    protected $mimes = array();

    /**
     * Specify if the banner is delivered in the top frame or in an iframe. "0" means it is not in the top frame, "1"
     * means that is it.
     *
     * @optional
     * @var int
     */
    protected $topframe = 0;

    /**
     * Specify properties for an expandable ad.
     *
     * @optional
     * @var int[]
     */
    protected $expdir = array();

    /**
     * List of supported API frameworks for this banner. If an API is not explicitly listed it is assumed not to be
     * supported.
     *
     * @optional
     * @var int[]
     */
    protected $api = array();
}
