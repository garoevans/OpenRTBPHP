<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\App;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Device;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Extensions;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Impression;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Site;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User;

class Request
{
    /**
     * Unique ID of the bid request
     *
     * @required
     * @var string
     */
    protected $id;

    /**
     * Array of impression objects. Multiple impression auctions may be specified in a single bid request. At least on
     * impression is required for a valid bid request.
     *
     * @required
     * @var Impression[]
     */
    protected $imp;

    /**
     * @recommended for websites
     * @var Site
     */
    protected $site;

    /**
     * @recommended for native apps
     * @var App
     */
    protected $app;

    /**
     * @recommended
     * @var Device
     */
    protected $device;

    /**
     * @recommended
     * @var User
     */
    protected $user;

    /**
     * Auction Type. If "1", then first price auction. If "2", then second price auction. Additional auction types can
     * be defined as per the exchange's business rules. Exchange specific rules should be numbered over 500.
     *
     * @optional
     * @var int
     */
    protected $at = 2;

    /**
     * Maximum amount of time in milliseconds to submit a bid (e.g., 120 means the bidder has 120ms to submit a bid
     * before the auction is complete). If this value never changes across an exchange, then the exchange can supply
     * this information offline.
     *
     * @optional
     * @var int
     */
    protected $tmax;

    /**
     * Array of buyer seats allowed to bid on the auction. Seats are an optional feature of exchange. For example,
     * ["4","34","82","45"] indicates that only advertisers using these exchange seats are allowed to bid on the
     * impressions in this auction.
     *
     * @optional
     * @var string[]
     */
    protected $wseat;

    /**
     * Flag to indicate whether Exchange can verify that all of the impressions available in context (e.g., all
     * impressions available on the web page; all impressions available for a video [pre,mid and postroll spots], etc.)
     * to support road-blocking. A true value should only be passed if the exchange is aware of all impressions in
     * context for the publisher. "0" means the exchange cannot verify, and "1" means that all impressions represent all
     * impressions available.
     *
     * @optional
     * @var int
     */
    protected $allimps = 0;

    /**
     * Array of allowed currencies for bids on the bid request using ISO-4217 alphabetic codes. If only one currency is
     * used by the exchange, this parameter is not required.
     *
     * @optional
     * @var string[]
     */
    protected $cur;

    /**
     * Blocked Advertiser Categories. Note that there is no existing categorization/taxonomy of advertiser industries.
     * However, as a substitute exchange may decide to use IAB categories as an approximation.
     *
     * @optional
     * @var string[]
     */
    protected $bcat;

    /**
     * Array of strings og blocked top-level domains of advertisers. For example, {"company1.com","company2.com"}.
     *
     * @optional
     * @var string[]
     */
    protected $badv;

    /**
     * This object is a placeholder that may contain custom JSON agreed to by the parties in an OpenRTB transaction to
     * support flexibility beyond the standard defined in this specification.
     *
     * @optional
     * @var Extensions
     */
    protected $ext;
}
