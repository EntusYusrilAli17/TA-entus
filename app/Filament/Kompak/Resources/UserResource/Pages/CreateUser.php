<?php

namespace App\Filament\Kompak\Resources\UserResource\Pages;

use App\Filament\Kompak\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['kelompok_id'] = auth()->user()->kelompok->id;

        return $data;
    }
}
