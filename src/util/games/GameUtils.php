<?php

namespace Plancke\HypixelPHP\util\games;

use Exception;
use Plancke\HypixelPHP\util\games\skywars\SkyWarsUtils;

/**
 * Class GameUtils
 * @package Plancke\HypixelPHP\util
 */
class GameUtils {

    protected static $BEDWARS_UTILS;
    protected static $MEGA_WALLS_UTILS;
    protected static $SKYWARS_UTILS;

    /**
     * @throws Exception
     */
    public function __construct() {
        throw new Exception();
    }

    /**
     * @return BedwarsUtils
     */
    public static function getBedwars() {
        if (GameUtils::$BEDWARS_UTILS == null) {
            GameUtils::$BEDWARS_UTILS = new BedwarsUtils();
        }
        return GameUtils::$BEDWARS_UTILS;
    }

    /**
     * @return MegaWallsUtils
     */
    public static function getMegaWalls() {
        if (GameUtils::$MEGA_WALLS_UTILS == null) {
            GameUtils::$MEGA_WALLS_UTILS = new MegaWallsUtils();
        }
        return GameUtils::$MEGA_WALLS_UTILS;
    }

    /**
     * @return SkyWarsUtils
     */
    public static function getSkyWars() {
        if (GameUtils::$SKYWARS_UTILS == null) {
            GameUtils::$SKYWARS_UTILS = new SkyWarsUtils();
        }
        return GameUtils::$SKYWARS_UTILS;
    }
}