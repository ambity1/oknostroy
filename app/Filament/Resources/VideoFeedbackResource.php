<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoFeedbackResource\Pages;
use App\Models\VideoFeedback;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VideoFeedbackResource extends Resource
{
    protected static ?string $model = VideoFeedback::class;

    protected static ?string $slug = 'video-feedbacks';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Название отзыва'),

                TextInput::make('nameClient')
                    ->required()
                    ->label('Фамилия и Имя клиента'),

                TextInput::make('addressClient')
                    ->required()
                    ->label('Адрес клиента'),

                TextInput::make('linkOnVideo')
                    ->required()
                    ->label('Ссылка на видео-отзыв'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->label('Название отзыва'),

                TextColumn::make('nameClient')
                    ->label('Фамилия и Имя клиента'),

                TextColumn::make('addressClient')
                    ->label('Адрес клиента'),

                TextColumn::make('linkOnVideo')
                    ->label('Ссылка на видео-отзыв'),
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
            'index' => Pages\ListVideoFeedbacks::route('/'),
            'create' => Pages\CreateVideoFeedback::route('/create'),
            'edit' => Pages\EditVideoFeedback::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
