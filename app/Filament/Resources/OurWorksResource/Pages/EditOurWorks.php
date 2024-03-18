<?php

namespace App\Filament\Resources\OurWorksResource\Pages;

use App\Filament\Resources\OurWorksResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurWorks extends EditRecord
{
    protected static string $resource = OurWorksResource::class;

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
