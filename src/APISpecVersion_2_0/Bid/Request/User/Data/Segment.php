<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User\Data;

class Segment
{
    /**
     * ID of data provider's segment applicable to the user.
     *
     * @optional
     * @var string
     */
    protected $id;

    /**
     * Name of a data provider's segment applicable to the user.
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * String representing the value of the segment. The method for transmitting this data should be negotiated offline
     * with the data provider. For example for gender, "male", or "female", for age, "30-40").
     *
     * @optional
     * @var string
     */
    protected $value;
}
