<?php
/**
 * @author: gareth
 */

namespace Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request;

use Garoevans\OpenRTBPHP\APISpecVersion_2_0\Bid\Request\Device\Geo;

class Device
{
    /**
     * If "0", then do not track is set to false, if "1", then do not track is set to true in browser.
     *
     * @recommended
     * @var int
     */
    protected $dnt;

    /**
     * Browser user agent string.
     *
     * @recommended
     * @var string
     */
    protected $ua;

    /**
     * IPv4 address closest to device.
     *
     * @recommended if geo object is not supplied
     * @var string
     */
    protected $ip;

    /**
     * Geography as derived from the device's location services (e.g., cell tower triangulation, GPS) or IP address.
     *
     * @recommended if IP is not supplied
     * @var Geo
     */
    protected $geo;

    /**
     * SHA1 hashed device ID; IMEI when available, else MEID or ESN. OpenRTB's preferred method for device ID hashing is
     * SHA1.
     *
     * @optional
     * @var string
     */
    protected $didsha1;

    /**
     * MD5 hashed device ID; IMEI when available, else MEID or ESN. Should be interpreted as case insensitive.
     *
     * @optional
     * @var string
     */
    protected $didmd5;

    /**
     * SHA1 hased platform-specific ID (e.g., Android ID or UDID for iOS). OpenRTB's preferred method for device ID hash
     * is SHA1.
     *
     * @optional
     * @var string
     */
    protected $pidsha1;

    /**
     * MD5 hashed platform-specific ID (e.e., Android ID or UDID for iOS). Should be interpreted as case insensitive.
     *
     * @optional
     * @var string
     */
    protected $dpidmd5;

    /**
     * IP address in IPv6.
     *
     * @optional
     * @var string
     */
    protected $ipv6;

    /**
     * Carrier or ISP derived from the IP address. Should be specified using Mobile Network Code (MNC)
     * http://en.wikipedia.org/wiki/Mobile_Network_Code
     *
     * @optional
     * @var string
     */
    protected $carrier;

    /**
     * Browser language; use alpha-2/ISO 639-1 codes.
     *
     * @optional
     * @var string
     */
    protected $language;

    /**
     * Device make (e.e., "Apple").
     *
     * @optional
     * @var string
     */
    protected $make;

    /**
     * Device model (e.g., "iPhone").
     *
     * @optional
     * @var string
     */
    protected $model;

    /**
     * Device operating system (e.g., "iOS").
     *
     * @optional
     * @var string
     */
    protected $os;

    /**
     * Device operating system version (e.e., "3.1.2£).
     *
     * @optional
     * @var string
     */
    protected $osv;

    /**
     * "1" if the device supports JavaScript; else "0".
     *
     * @optional
     * @var int
     */
    protected $js;

    /**
     * Return the detected data connection type for the device.
     *
     * @optional
     * @var int
     */
    protected $connectiontype;

    /**
     * Return the device type being used.
     *
     * @optional
     * @var int
     */
    protected $devicetype;

    /**
     * Return the Flash version detected.
     *
     * @optional
     * @var string
     */
    protected $flashver;
}
