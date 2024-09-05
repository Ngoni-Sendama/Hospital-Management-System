<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BedResource\Pages;
use App\Filament\Resources\BedResource\RelationManagers;
use App\Models\Bed;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BedResource extends Resource
{
    protected static ?string $model = Bed::class;

    protected static ?string $navigationIcon = 'gmdi-bed';

    protected static ?string $navigationGroup = 'Facility Management';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bed_number')
                    ->required(),
                Forms\Components\Select::make('ward_id')
                    ->relationship('ward', 'name')
                    ->required(),
                Forms\Components\Toggle::make('is_occupied')
                    ->required(),
                Forms\Components\Select::make('patient_id')
                    ->relationship('patient', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bed_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ward.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_occupied')
                    ->boolean(),
                Tables\Columns\TextColumn::make('patient.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeds::route('/'),
            'create' => Pages\CreateBed::route('/create'),
            'view' => Pages\ViewBed::route('/{record}'),
            'edit' => Pages\EditBed::route('/{record}/edit'),
        ];
    }
}
