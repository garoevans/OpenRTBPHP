<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression\Banner;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression\Extensions;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression\Video;

class Impression
{
    /**
     * A unique identifier for this impression within the context of the bid request (typically, value starts with 1,
     * and increments up to n for n impressions).
     *
     * @required
     * @var string
     */
    protected $id;

    /**
     * A reference to a banner object. Either a banner or video object (or both if the impression could be either) must
     * be included in an impression object; both objects may not be included.
     *
     * @required for banner impressions
     * @var Banner
     */
    protected $banner;

    /**
     * A reference to a video object. Either a banner or video object (or both if the impression could be either) must
     * be included in an impression object; both objects may not be included.
     *
     * @required for video impressions
     * @var Video
     */
    protected $video;

    /**
     * Name of ad mediation partner, SDK technology, or native player responsible for rendering as (typically video or
     * mobile). Used by some ad servers to customize ad code by partner.
     *
     * @required for video and native apps
     * @var string
     */
    protected $displaymanager;

    /**
     * Version of ad mediation partner, SDK technology, or rendering ad (typically video or mobile). Used by some ad
     * servers to customize ad code by partner.
     *
     * @required for video and native apps
     * @var string
     */
    protected $displaymanagerver;

    /**
     * 1 if the ad is interstitial or full screen; else 0 (i.e., no).
     *
     * @optional
     * @var int
     */
    protected $instl = 0;

    /**
     * Identifier for specific ad placement or ad tag that was used to initiate the auction. This can be useful for
     * debugging of any issues, or for optimization by the buyer.
     *
     * @optional
     * @var string
     */
    protected $tagid;

    /**
     * Bid floor for this impression (in CPM of bidfloorcur).
     *
     * @optional
     * @var float
     */
    protected $bidfloor = 0;

    /**
     * If bid floor is specified and multiple currencies supported per bid request, then currency should be specified
     * here using ISO-4217 alphabetic codes. Note, this may be different from bid currency returned by bidder, if this
     * is allowed on an exchange.
     *
     * @optional
     * @var string
     */
    protected $bidfloorcur = 'USD';

    /**
     * Array of names for supported iframe busters. Exchange specific.
     * @optional
     * @var string[]
     */
    protected $iframebust;

    /**
     * This object is a placeholder that may contain custom JSON agreed to by the parties in an OpenRTB transaction to
     * support flexibility beyond the standard defined in this specification.
     *
     * @optional
     * @var Extensions
     */
    protected $ext;
}
