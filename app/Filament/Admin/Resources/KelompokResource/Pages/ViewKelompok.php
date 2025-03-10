<?php

namespace App\Filament\Admin\Resources\KelompokResource\Pages;

use App\Filament\Admin\Resources\KelompokResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKelompok extends ViewRecord
{
    protected static string $resource = KelompokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
