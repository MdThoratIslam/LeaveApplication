<?php

namespace App\Providers;

use App\Http\costume\ArrayLibrary;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view)
        {
            $data =
                [
                    'user_type_arr'             =>  ArrayLibrary::getUserType(),
                    'designation_arr'           =>  ArrayLibrary::getDesignation(),
                    'department_arr'            =>  ArrayLibrary::getDepartment(),
                    'leavetype_arr'             =>  ArrayLibrary::getLeaveType(),
                    'divisions_arr'             =>  ArrayLibrary::getDivisions(),
                ];
            $view->with($data);
        });
    }
}
