<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Abstracts;

abstract class AbstractGeo
{
    /**
     * Latitude from -90 to 90. South is negative. This should only be passed if known to be accurate (for example, not
     * the centroid of a postal code).
     *
     * @optional
     * @var float
     */
    protected $lat;

    /**
     * Longitude from -180 to 180. West is negative. This should only be passed if known to be accurate.
     *
     * @optional
     * @var float
     */
    protected $lon;

    /**
     * Country using ISO-3166-1 Alpha-3.
     *
     * @optional
     * @var string
     */
    protected $country;

    /**
     * Region using ISO 3166-2.
     *
     * @optional
     * @var string
     */
    protected $region;

    /**
     * Region of a country using fips 10-4 notation (alternative to ISO 3166-2).
     *
     * @optional
     * @var string
     */
    protected $regionfips104;

    /**
     * Pass the metro code (see http://code.google.com/apis/adwords/docs/appendix/metrocodes.html). Metro codes are
     * similar to but not exactly the same as Nielsen DMAs.
     *
     * @optional
     * @var string
     */
    protected $metro;

    /**
     * City using United Nations Code for Trade and Transport Locations
     * (http://www.unece.org/cefact/locode/service/location.htm).
     *
     * @optional
     * @var string
     */
    protected $city;

    /**
     * Zip/postal code.
     *
     * @optional
     * @var string
     */
    protected $zip;

    /**
     * Indicate the source of the geo data (GPS, IP address, user provided) Type should be provided when lat/lon is
     * provided.
     *
     * @recommended
     * @var int
     */
    protected $type;
}
