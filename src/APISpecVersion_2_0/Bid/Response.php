<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response\Extensions;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Response\SeatBid;

class Response
{
    /**
     * ID of the bid request.
     *
     * @required
     * @var string
     */
    protected $id;

    /**
     * Array of seatbid objects.
     *
     * @required
     * @var SeatBid[]
     */
    protected $seatbid;

    /**
     * Bid response ID to assist tracking for bidders. This value is chose by the bidder for cross-reference.
     *
     * @optional
     * @var string
     */
    protected $bidid;

    /**
     * Bid currency using ISO-4217 alphabetic codes; default is "USD".
     *
     * @optional
     * @var string
     */
    protected $cur;

    /**
     * This is an optional feature, which allows a bidder to set data in the exchange's cookie. The string may be in
     * base85 cookie safe characters, and be in any format. This may be useful for storing user features. Note: Proper
     * JSON encoding must be used to include "escaped" quotation marks.
     *
     * @optional
     * @var string
     */
    protected $customdata;

    /**
     * Optional extensions to the bid response, as specified by the exchange.
     *
     * @optional
     * @var Extensions
     */
    protected $ext;
}
