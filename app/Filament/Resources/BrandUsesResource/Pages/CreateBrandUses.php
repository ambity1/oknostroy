<?php

namespace App\Filament\Resources\BrandUsesResource\Pages;

use App\Filament\Resources\BrandUsesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBrandUses extends CreateRecord
{
    protected static string $resource = BrandUsesResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
