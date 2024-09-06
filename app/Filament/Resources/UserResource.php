<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'healthicons-f-doctor';
    protected static ?string $navigationGroup = 'Staff Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required(),

                        Forms\Components\TextInput::make('password')
                            ->password()
                            ->visibleOn('Create')
                            ->revealable()
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->required()
                            ->options([
                                'Active' => 'Active',
                                'Inactive' => 'Not Active',
                            ]),


                        Section::make()
                            ->relationship('profile', 'user_id')
                            ->columns(2)
                            ->schema([

                                Forms\Components\TextInput::make('department')
                                    ->required(),
                                Forms\Components\TextInput::make('specialization'),
                                Forms\Components\TextInput::make('contact_number')
                                    ->required(),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->label('Home Email')
                                    ->required(),
                                Forms\Components\TimePicker::make('shift_start')
                                    ->required()
                                    ->seconds(false)
                                    ->native(false),
                                Forms\Components\TimePicker::make('shift_end')
                                    ->required()
                                    ->seconds(false)
                                    ->native(false),
                                Forms\Components\DatePicker::make('employment_date')
                                    ->required(),
                            ])
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('profile.department')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('profile.shift_start')
                    ->searchable() // Make the column searchable
                    ->description(fn (User $record): string => $record->profile->shift_end ?? 'N/A') // Description shows shift_end
                    ->label('Shift'), // Column label
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
