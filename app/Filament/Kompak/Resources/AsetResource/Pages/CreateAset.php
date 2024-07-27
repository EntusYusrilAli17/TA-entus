<?php

namespace App\Filament\Kompak\Resources\AsetResource\Pages;

use App\Filament\Kompak\Resources\AsetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAset extends CreateRecord
{
    protected static string $resource = AsetResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['kelompok_id'] = auth()->user()->kelompok->id;

        return $data;
    }
}
