<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

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
        $this->registerWhereLikeMacro();
    }

    protected function registerWhereLikeMacro()
    {
        Builder::macro('whereLike', function ($attributes, $searchTerm = null) {
            $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                $searchValues = explode(' ', $searchTerm);
                foreach ($searchValues as $searchTerm) {
                    foreach (Arr::wrap($attributes) as $attribute) {
                        $query->when(
                            Str::contains($attribute, '.'),
                            function (Builder $query) use ($attribute, $searchTerm) {
                                [$relationName, $relationAttribute] = explode('.', $attribute);
                                $query->orWhereHas($relationName, function (Builder $query) use ($relationAttribute, $searchTerm) {
                                    $query->where($relationAttribute, 'LIKE', "%{$searchTerm}%");
                                });
                            },
                            function (Builder $query) use ($attribute, $searchTerm) {
                                $table = $query->getModel()->getTable();
                                $query->orWhere("{$table}.{$attribute}", 'LIKE', "%{$searchTerm}%");
                            }
                        );
                    }
                }
            });
            return $this;
        });
    }
}
