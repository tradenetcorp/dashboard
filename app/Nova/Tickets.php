<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Http\Requests\NovaRequest;



class Tickets extends Resource
{
    public static function availableForNavigation(Request $request)
        {
            return false;
        }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Tickets::class;

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
            Number::make('Livechat','chn_livechat')->rules('required'),
            Number::make('Email','chn_mail')->rules('required'),
            Number::make('Twitter','chn_twitter')->rules('required'),
            Number::make('Facebook','chn_facebook')->rules('required'),
            Number::make('WhatsApp','chn_whatsapp')->rules('required'),
            Number::make('Viber','chn_viber')->rules('required'),
            Number::make('Telegram','chn_telegram')->rules('required'),
            Number::make('Messenger','chn_messenger')->rules('required'),
            Number::make('Escalated MED BR (open)','esc_med_br_open')->rules('required'),
            Number::make('Escalated MED BR (close)','esc_med_br_closed')->rules('required'),
            Number::make('Escalated MED JC (open)','esc_med_jc_open')->rules('required'),
            Number::make('Escalated MED JC (close)','esc_med_jc_closed')->rules('required'),
            Number::make('Escalated MED ER (open)','esc_med_er_open')->rules('required'),
            Number::make('Escalated MED ER (close)','esc_med_er_closed')->rules('required'),
            

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
