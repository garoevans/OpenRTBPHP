<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User\Data;
use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User\Geo;

class User
{
    /**
     * Unique consumer ID of this user on the exchange.
     *
     * @recommended (or buyerid)
     * @var string
     */
    protected $id;

    /**
     * Buyer's user ID for this user as mapped by exchange for the buyer.
     *
     * @recommended (or id)
     * @var string
     */
    protected $buyeruid;

    /**
     * Year of birth as a 4-digit integer.
     *
     * @optional
     * @var int
     */
    protected $yob;

    /**
     * Gender as "M" male, "F" female, "O" Other. (Null indicates unknown).
     *
     * @optional
     * @var string
     */
    protected $gender;

    /**
     * Comma separated list of keywords of consumer interests or intent.
     *
     * @optional
     * @var string
     */
    protected $keywords;

    /**
     * If supported by the exchange, this is custom data that the bidder had stored in the exchange's cookie. The string
     * may be in base85 cookie safe characters, and be in any format. This may be useful for storing user features.
     * Note: Proper JSON encoding must be used to include "escaped" quotation marks.
     *
     * @optional
     * @var string
     */
    protected $customdata;

    /**
     * Home geo for the user (e.g., based off of registration data); this is different from the current location of the
     * access device (that is defined by the geo object embedded in the Device Object).
     *
     * @optional
     * @var Geo
     */
    protected $geo;

    /**
     * @optional
     * @var Data[]
     */
    protected $data;
}
