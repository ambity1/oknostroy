<?php

namespace App\Filament\Resources\BrandUsesResource\Pages;

use App\Filament\Resources\BrandUsesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBrandUses extends EditRecord
{
    protected static string $resource = BrandUsesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
