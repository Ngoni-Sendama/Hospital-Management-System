<?php

namespace App\Filament\Resources;

use App\Models\Bed;
use Filament\Forms;
use Filament\Tables;
use App\Models\Patient;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PatientResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PatientResource\RelationManagers;
use Filament\Forms\Components\Section;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'fluentui-patient-24';

    protected static ?string $navigationGroup = 'Patient Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                Forms\Components\Radio::make('gender')
                ->required()
                ->options([
                    'Male' => 'Male',
                    'Female' => 'Female',
                ])
                ->inline()
                ->label('Gender'),
                Forms\Components\DatePicker::make('admission_date')
                    ->required(),

                Forms\Components\Select::make('bed_id')
                    ->required()
                    ->label('Select Bed')
                    ->options(Bed::where('is_occupied', false)
                        ->pluck('bed_number', 'id')
                        ->toArray()),
                Forms\Components\Radio::make('status')
                    ->required()
                    ->inline()
                    ->columnSpanFull()
                    ->live()
                    ->options([
                        'Admitted' => 'Admitted',
                        'Discharged' =>  'Discharged',
                        'Pending' => 'Pending'
                    ]),
                    Forms\Components\DatePicker::make('discharge_date')
                    ->hidden(fn (Get $get): bool => $get('status') !== 'Discharged'),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('admission_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discharge_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bed.bed_number')
                    ->numeric()
                    ->label('Bed Number')
                    ->description(fn (Patient $record): string => $record->bed->ward->name ?? 'N/A')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'view' => Pages\ViewPatient::route('/{record}'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
