<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\User\Data\Segment;

class Data
{
    /**
     * Exchange specific ID for the data provider.
     *
     * @optional
     * @var string
     */
    protected $id;

    /**
     * Data provider name.
     *
     * @optional
     * @var string
     */
    protected $name;

    /**
     * Array of segment objects.
     *
     * @optional
     * @var Segment
     */
    protected $segment;
}
