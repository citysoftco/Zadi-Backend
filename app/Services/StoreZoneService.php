<?php

namespace App\Services;

use App\Models\StoreZone;

/**
 * Class StoreZoneService.
 */
class StoreZoneService
{

    public static function getAllZonesPaginated($storeId)
    {
        $zones = StoreZone::where("store_id", $storeId)->paginate(5);

        return $zones;
    }
}
