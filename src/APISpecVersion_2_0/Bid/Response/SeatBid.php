<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response\SeatBid\Bid;

class SeatBid
{
    /**
     * Array of bid objects; each bid object relates to an imp object in the bid request. Note that, if supported by an
     * exchange, one imp object can have many bid objects.
     *
     * @required
     * @var Bid[]
     */
    protected $bid;

    /**
     * ID of the bidder seat on whose behalf this bid is made.
     *
     * @optional
     * @var string
     */
    protected $seat;

    /**
     * "1" means impressions must be won-lost as a group; default is "0".
     *
     * @optional
     * @var int
     */
    protected $group;
}
