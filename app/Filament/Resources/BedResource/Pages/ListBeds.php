<?php

namespace App\Filament\Resources\BedResource\Pages;

use App\Models\Ward;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\BedResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListBeds extends ListRecords
{
    protected static string $resource = BedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        // Get all wards to dynamically create tabs for each ward
        $wards = Ward::all();

        // Initialize tabs array with only the 'all' tab
        $tabs = [
            'all' => Tab::make() // A default 'all' tab without filters
                ->modifyQueryUsing(fn(Builder $query) => $query->with('ward')),
        ];

        // Loop through each ward and add a tab for it
        foreach ($wards as $ward) {
            $tabs[$ward->name] = Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('ward_id', $ward->id)->with('ward'))
                ->label($ward->name); // Use ward name as the tab label
        }

        return $tabs;
    }
}
