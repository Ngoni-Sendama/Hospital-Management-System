<?php

namespace App\Filament\Widgets;

use App\Models\Bed;
use App\Models\Patient;
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
            Stat::make('Wards', Ward::has('beds')->count()),
            Stat::make('Staff On Shift', '20')
            ->description('7% decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->color('danger')
            ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Patients Admitted', Patient::where('status', 'Admitted')->count()),

        ];
    }
}
