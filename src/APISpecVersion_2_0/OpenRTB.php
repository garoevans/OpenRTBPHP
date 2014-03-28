<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0;

class OpenRTB
{
    public static function getOpenRTBVersionHTTPHeader()
    {
        return 'x-openrtb-version: 2.0';
    }
}
