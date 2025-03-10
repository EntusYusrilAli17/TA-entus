<?php

namespace App\Filament\Admin\Resources\KelompokResource\Pages;

use App\Filament\Admin\Resources\KelompokResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelompok extends EditRecord
{
    protected static string $resource = KelompokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
