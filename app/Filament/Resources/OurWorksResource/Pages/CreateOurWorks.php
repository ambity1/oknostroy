<?php

namespace App\Filament\Resources\OurWorksResource\Pages;

use App\Filament\Resources\OurWorksResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOurWorks extends CreateRecord
{
    protected static string $resource = OurWorksResource::class;

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
