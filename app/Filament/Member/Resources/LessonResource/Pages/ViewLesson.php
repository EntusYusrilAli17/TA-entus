<?php

namespace App\Filament\Member\Resources\LessonResource\Pages;

use App\Filament\Member\Resources\CourseResource;
use App\Filament\Member\Resources\LessonResource;
use App\Filament\Traits\HasParentResource;
use App\Infolists\Components\CompleteButton;
use App\Infolists\Components\CourseProgress;
use App\Infolists\Components\LessonPaginator;
use App\Infolists\Components\ListLessons;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\TextEntry\TextEntrySize;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewLesson extends ViewRecord
{
    use HasParentResource;

    protected static string $parentResource = CourseResource::class;

    protected static string $resource = LessonResource::class;

    public function getTitle(): string
    {
        return $this->getRecord()->title;
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->getRecord())
            ->schema([
                Grid::make()
                    ->columns(1)
                    ->schema([
                        CompleteButton::make(),
                        TextEntry::make('lesson_text')
                            ->html()
                            ->size(TextEntrySize::Medium),
                        LessonPaginator::make()
                            ->currentLesson($this->getRecord()),
                    ])
                    ->columnSpan(2),
                Grid::make()
                    ->columns(1)
                    ->schema([
                        CourseProgress::make()
                            ->course($this->getRecord()->course),
                        ListLessons::make('Lessons')
                            ->course($this->getRecord()->course)
                            ->activeLesson($this->getRecord()),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public function toggleCompleted(): void
    {
        $lesson = $this->getRecord();

        $lesson->isCompleted()
            ? $lesson->markAsUncompleted()
            : $lesson->markAsCompleted();
    }

    public function markAsCompletedAndGoToNext()
    {
        $lesson = $this->getRecord();
        $lesson->markAsCompleted();

        return redirect()->to($this->getParentResource()::getUrl('lessons.view', [
            $lesson->course,
            $lesson->getNext(),
        ]));
    }
}
