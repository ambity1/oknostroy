<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressOfficeResource\Pages;
use App\Models\AddressOffice;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AddressOfficeResource extends Resource
{
    protected static ?string $model = AddressOffice::class;

    protected static ?string $slug = 'address-offices';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Название офиса'),

                TextInput::make('address')
                    ->required()
                    ->label('Адрес'),

                TextInput::make('timeWork')
                    ->required()
                    ->label('Дата и время работы'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Название офиса'),

                TextColumn::make('address')
                    ->label('Адрес'),

                TextColumn::make('timeWork')
                    ->label('Дата и время работы'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAddressOffices::route('/'),
            'create' => Pages\CreateAddressOffice::route('/create'),
            'edit' => Pages\EditAddressOffice::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
