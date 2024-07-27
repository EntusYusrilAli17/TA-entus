<?php

namespace App\Filament\Kompak\Resources\AsetResource\Pages;

use App\Filament\Kompak\Resources\AsetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsets extends ListRecords
{
    protected static string $resource = AsetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
