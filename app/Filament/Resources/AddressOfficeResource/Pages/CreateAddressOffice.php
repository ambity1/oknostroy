<?php

namespace App\Filament\Resources\AddressOfficeResource\Pages;

use App\Filament\Resources\AddressOfficeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAddressOffice extends CreateRecord
{
    protected static string $resource = AddressOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
