<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Date;
use Laraning\NovaTimeField\TimeField;





use Laravel\Nova\Http\Requests\NovaRequest;

class ContactCenter extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ContactCenter::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Date::make('Date','record_day')->format('DD MMM YYYY'),
            Number::make('Agents Oncall','agents_oncall'),
            Number::make('Agents On E-Media','agents_onmedia'),
            Number::make('Calls Answered','call_answered'),
            Number::make('Calls Missed','call_missed'),
            Number::make('Call Backs','call_backs'),
            TimeField::make('Average Talktime','avg_talk'),
            TimeField::make('Average Wait (Pickup)','avg_wait_pickup'),
            TimeField::make('Average Wait (Hangup)','avg_wait_hangup'),
            TimeField::make('Peak Average Wait (Pickup)','peak_avg_wait_pickup'),
            TimeField::make('Peak Average Wait (Hangup)','peak_avg_wait_hangup')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
