<?php

namespace App\Filament\Resources\VideoFeedbackResource\Pages;

use App\Filament\Resources\VideoFeedbackResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVideoFeedback extends CreateRecord
{
    protected static string $resource = VideoFeedbackResource::class;

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
