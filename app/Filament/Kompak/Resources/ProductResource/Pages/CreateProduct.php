<?php

namespace App\Filament\Kompak\Resources\ProductResource\Pages;

use App\Filament\Kompak\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['kelompok_id'] = auth()->user()->kelompok->id;

        return $data;
    }
}
