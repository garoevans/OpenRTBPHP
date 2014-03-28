<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression;

class Video
{
    /**
     * Content MIME types supported. Popular MIME types include, but are not limited to "video/x-ms-wmv" for Windows
     * Media, and "video/x-flv" for Flash Video.
     *
     * @required
     * @var string[]
     */
    protected $mimes;

    /**
     * Indicates whether the ad impression is linear or non-linear.
     *
     * @required
     * @var int
     */
    protected $linearity;

    /**
     * Minimum video ad duration in seconds.
     *
     * @required
     * @var int
     */
    protected $minduration;

    /**
     * Maximum video ad duration in seconds.
     *
     * @required
     * @var int
     */
    protected $maxduration;

    /**
     * Video bid response protocols.
     *
     * @required
     * @var int
     */
    protected $protocol;

    /**
     * Width of the player in pixels. This field is not required but it's highly recommended that this information be
     * included.
     *
     * @recommended
     * @var int
     */
    protected $w;

    /**
     * Height of the player in pixels. This field is not required but it's highly recommended that this information be
     * included.
     *
     * @recommended
     * @var int
     */
    protected $h;

    /**
     * Inidcates the start delay in seconds for preroll, midroll, or postroll ad placement.
     *
     * @recommended
     * @var int
     */
    protected $startdelay;

    /**
     * If multiple ad impressions are offered in the same bid request, the sequence number will allow for the
     * coordinated delivery of multiple creatives.
     *
     * @optional
     * @var int
     */
    protected $sequence = 1;

    /**
     * Blocked creative attributes. If blank assume all types are allowed.
     *
     * @optional
     * @var int[]
     */
    protected $battr = array();

    /**
     * Maximum extended video ad duration, if extension is allowed. If blank or 0, extension is not allowed. If -1,
     * extension is allowed, and there is no time limit imposed. If greater than 0, then the value represents the number
     * of seconds of extended play supported beyond the maxduration value.
     *
     * @optional
     * @var int
     */
    protected $maxextended;

    /**
     * Minimum bit rate in Kbps. Exchange may set this dynamically, or universally across their set of publishers.
     *
     * @optional
     * @var int
     */
    protected $minbitrate;

    /**
     * Maximum bit rate in Kbps. Exchange may set this dynamically, or universally across their set of publishers.
     *
     * @optional
     * @var int
     */
    protected $maxbitrate;

    /**
     * If exchange publisher has rules preventing letter boxing of 4x3 content to play in a 16x9 window, then this
     * should be set to false. Default setting is true, which assumes that boxing of content to fit into a window is
     * allowed. "1" indicates boxing is allowed. "0" indicates it is not allowed.
     *
     * @optional
     * @var int
     */
    protected $boxingallowed = 1;

    /**
     * List of allowed playback methods. If blank, assume that all are allowed.
     *
     * @optional
     * @var int[]
     */
    protected $playbackmethod;

    /**
     * List of supported delivery methods (streaming, progressive). If blank, assume all are supported.
     *
     * @optional
     * @var int[]
     */
    protected $delivery;

    /**
     * Ad Position.
     *
     * @optional
     * @var int
     */
    protected $pos;

    /**
     * If companion ads are available, they can be listed as an array of banner objects.
     *
     * @optional
     * @var Banner[]
     */
    protected $companionad;

    /**
     * List of supported API frameworks for this banner. If an API is not explicitly listed it is assumed not to be
     * supported.
     *
     * @optional
     * @var int[]
     */
    protected $api;
}
