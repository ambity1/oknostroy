<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurWorksResource\Pages;
use App\Models\OurWorks;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OurWorksResource extends Resource
{
    protected static ?string $model = OurWorks::class;

    protected static ?string $slug = 'our-works';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Название нашей работы'),
                FileUpload::make('image')
                    ->directory('/media/images/works')
                    ->visibility('public')
                    ->label('Картинка'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Название нашей работы'),

                ImageColumn::make('image')
                    ->label('Картинка'),
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
            'index' => Pages\ListOurWorks::route('/'),
            'create' => Pages\CreateOurWorks::route('/create'),
            'edit' => Pages\EditOurWorks::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
