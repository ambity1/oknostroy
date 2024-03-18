<?php

namespace App\Filament\Resources\OurWorksResource\Pages;

use App\Filament\Resources\OurWorksResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurWorks extends ListRecords
{
    protected static string $resource = OurWorksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
