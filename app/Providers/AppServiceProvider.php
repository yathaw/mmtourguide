<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


use App\Place;
use App\Language;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //

        $places =   DB::table("regions")
                    ->select(
                        DB::raw('GROUP_CONCAT(places.name) AS name'),
                        DB::raw('GROUP_CONCAT(places.id) AS id'),
                            'regions.name as region_name',
                        )
                    ->join('places', 'places.region_id', '=', 'regions.id')
                    ->groupBy("places.region_id")
                    ->orderBy('regions.name', 'asc')
                    ->get();


        $languages = Language::all();


                
        View::share('data', [$places, $languages]);
    }
}
