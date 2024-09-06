<?php

namespace App\Filament\Widgets;

use App\Models\Bed;
use App\Models\Ward;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = -2;
    protected function getStats(): array
    {
        return [
            Stat::make('Beds', Bed::count()),
            Stat::make('Beds Available', Bed::where('is_occupied', false)->count()),
            Stat::make('Beds Occupied', Bed::where('is_occupied', true)->count()),
            Stat::make('Ward with Full', Ward::has('beds')->count()),
            Stat::make('Staff On Shift', '20'),

        ];
    }
}
