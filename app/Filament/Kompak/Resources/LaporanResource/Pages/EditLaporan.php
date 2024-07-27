<?php

namespace App\Filament\Kompak\Resources\LaporanResource\Pages;

use App\Filament\Kompak\Resources\LaporanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporan extends EditRecord
{
    protected static string $resource = LaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['is_filled'] = true;

        return $data;
    }
}
