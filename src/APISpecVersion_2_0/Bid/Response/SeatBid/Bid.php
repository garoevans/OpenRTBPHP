<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response\SeatBid;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response\SeatBid\Bid\Extensions;

class Bid
{
    /**
     * ID for the bid object chose by the bidder for tracking and debugging purposes. Useful when multiple bids are
     * submitted for a single impression for a given seat.
     *
     * @required
     * @var string
     */
    protected $id;

    /**
     * ID of the impression object to which this bid applies.
     *
     * @required
     * @var string
     */
    protected $impid;

    /**
     * Bid price in CPM. WARNING/Best Practice Note: Although this value is a float, OpenRTB strongly suggests using
     * integer math for accounting to avoid rounding errors.
     *
     * @required
     * @var float
     */
    protected $price;

    /**
     * ID that references the ad to be served if the bid wins.
     *
     * @optional
     * @var string
     */
    protected $adid;

    /**
     * Win notice URL. Note that ad markup is also typically, but not necessarily returned via this URL.
     *
     * @optional
     * @var string
     */
    protected $nurl;

    /**
     * Actual ad markup, XHTML is a response to a banner object, or VAST XML id a response to a video object.
     *
     * @optional
     * @var string
     */
    protected $adm;

    /**
     * Advertiser's primary or top-level domain for advertiser checking. This can be a list of domains if there is a
     * rotating creative. However, exchanges may mandate that only one landing domain is allowed.
     *
     * @optional
     * @var string[]
     */
    protected $adomain;

    /**
     * Sample image URL (without cache busting) for content checking.
     *
     * @optional
     * @var string
     */
    protected $iurl;

    /**
     * Campaign ID or similar that appears within the ad markup.
     *
     * @optional
     * @var string
     */
    protected $cid;

    /**
     * Creative ID for reporting content issues or defects. This could also be used as a reference to a creative ID that
     * is posted with an exchange.
     *
     * @optional
     * @var string
     */
    protected $crid;

    /**
     * Array of creative attributes.
     *
     * @optional
     * @var int[]
     */
    protected $attr;

    /**
     * Optional extensions to the bid object, as specified by an exchange.
     *
     * @optional
     * @var Extensions
     */
    protected $ext;
}
