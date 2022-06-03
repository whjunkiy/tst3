<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Building extends Model
{

    public static function forFiltr($filters = []) {
        DB::table('building_metro')
            ->select('building_id')
            ->where();
        $sql = "SELECT building_id FROM building_metro";

    }

    public static function getBuildings($filters = []) {
        $limit = 3;
        $page = 0;
        if (isset($filters['limit'])) $limit = $filters['limit'];
        if (isset($filters['page'])) $page = $filters['page'];

        /* ooops, version(
           $min_go_time = DB::table('building_metro')
                   ->select('building_id', DB::raw('MIN(togo_time) as min_go_time'))
                   ->groupBy('building_id');

        $buildings = DB::table('buildings')
        ->joinSub($min_go_time, 'min_go_time', function ($join) {
            $join->on('building.id', '=', 'min_go_time.building_id');
        })->get();
         * */

        $buildings = DB::table('buildings')
            ->join('building_options', 'buildings.id', '=', 'building_options.building_id')
            ->select('buildings.*', 'building_options.*')
            ->skip($page*$limit)
            ->limit($limit)
            ->get();
        $ids = [];
        foreach ($buildings as $building) {
            $ids[] = $building->id;
        }
        if (!count($ids)) return ['buildings' => [], 'metros' => []];
        $ids = join(',', $ids);

        $metro_times = DB::table('building_metro')
            ->select('building_metro.*')
            ->whereRaw('building_id IN ('.$ids.')')
            ->get();

        return ['buildings' => $buildings, 'metros' => $metro_times];
    }
}
