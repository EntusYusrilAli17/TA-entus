<?php

namespace App\Filament\Kompak\Resources\PostResource\Pages;

use App\Filament\Kompak\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['author_id'] = auth()->user()->id;
        $data['kelompok_id'] = auth()->user()->kelompok->id;

        return $data;
    }
}
