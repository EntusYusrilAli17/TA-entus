<?php

namespace App\Filament\Kompak\Resources\LaporanResource\Pages;

use App\Filament\Kompak\Resources\LaporanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLaporan extends ViewRecord
{
    protected static string $resource = LaporanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
