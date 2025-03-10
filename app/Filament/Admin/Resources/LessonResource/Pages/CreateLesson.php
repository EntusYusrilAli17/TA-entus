<?php

namespace App\Filament\Admin\Resources\LessonResource\Pages;

use App\Filament\Admin\Resources\CourseResource;
use App\Filament\Admin\Resources\LessonResource;
use App\Filament\Traits\HasParentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLesson extends CreateRecord
{
    use HasParentResource;

    protected static string $parentResource = CourseResource::class;

    protected static string $resource = LessonResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getParentResource()::getUrl('lessons.index', [
            'parent' => $this->parent,
        ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['course_id'] = $this->parent->id;

        return $data;
    }
}
