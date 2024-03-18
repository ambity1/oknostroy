<?php

namespace App\Filament\Resources\BrandUsesResource\Pages;

use App\Filament\Resources\BrandUsesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBrandUses extends ListRecords
{
    protected static string $resource = BrandUsesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
