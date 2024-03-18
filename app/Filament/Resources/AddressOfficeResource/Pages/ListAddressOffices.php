<?php

namespace App\Filament\Resources\AddressOfficeResource\Pages;

use App\Filament\Resources\AddressOfficeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAddressOffices extends ListRecords
{
    protected static string $resource = AddressOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
