<?php

namespace App\Filament\Resources\AddressOfficeResource\Pages;

use App\Filament\Resources\AddressOfficeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAddressOffice extends EditRecord
{
    protected static string $resource = AddressOfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
