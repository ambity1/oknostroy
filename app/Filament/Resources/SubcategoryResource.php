<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubcategoryResource\Pages;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SubcategoryResource extends Resource
{
    protected static ?string $model = Subcategory::class;

    protected static ?string $slug = 'subcategories';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Название подкатегории'),

                TextInput::make('nameCatalog')
                    ->required()
                    ->label('Название подкатегории в каталоге'),

                Select::make('product_id')
                    ->relationship('products', 'name')
                    ->options(Product::query()->pluck('name', 'id'))
                    ->multiple()
                    ->label('Товары в категории'),

                Select::make('subcategory_id')
                    ->relationship('children', 'name')
                    ->options(Subcategory::query()->pluck('name', 'id'))
                    ->multiple()
                    ->label('Что делаем еще'),
                FileUpload::make('image')
                    ->label('Картинка на фоне')
                    ->directory('/media/images/subcategory')
                    ->visibility('public')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Название подкатегории'),


                TextColumn::make('nameCatalog')
                    ->label('Название подкатегории в каталоге'),

                TextColumn::make('products.name')->label('Товары'),

                TextColumn::make('children.name')->label('Что делаем еще'),

                TextColumn::make('parents.name')->label('Parent')
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
            'index' => Pages\ListSubcategories::route('/'),
            'create' => Pages\CreateSubcategory::route('/create'),
            'edit' => Pages\EditSubcategory::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
