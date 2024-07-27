<?php

namespace App\Filament\Admin\Resources\AsetResource\Pages;

use App\Filament\Admin\Resources\AsetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAset extends EditRecord
{
    protected static string $resource = AsetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
