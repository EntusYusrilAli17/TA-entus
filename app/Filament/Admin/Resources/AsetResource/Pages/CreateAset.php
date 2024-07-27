<?php

namespace App\Filament\Admin\Resources\AsetResource\Pages;

use App\Filament\Admin\Resources\AsetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAset extends CreateRecord
{
    protected static string $resource = AsetResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
