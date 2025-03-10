<?php

namespace App\Filament\Admin\Resources\LessonResource\Pages;

use App\Filament\Admin\Resources\CourseResource;
use App\Filament\Admin\Resources\LessonResource;
use App\Filament\Traits\HasParentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ListLessons extends ListRecords
{
    use HasParentResource;

    protected static string $parentResource = CourseResource::class;

    protected static string $resource = LessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->url(fn (): string => $this->getParentResource()::getUrl('lessons.create', [
                    'parent' => $this->parent,
                ])),
        ];
    }

    public function table(Table $table): Table
    {
        return parent::table($table)->pushActions([
            EditAction::make()
                ->url(fn (Model $record): string => CourseResource::getUrl('lessons.edit', [
                    'record' => $record,
                    'parent' => $this->parent,
                ])),
            DeleteAction::make(),
        ]);
    }
}
