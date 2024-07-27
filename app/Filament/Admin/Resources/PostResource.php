<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PostResource\Pages;
use App\Filament\Admin\Resources\PostResource\RelationManagers;
use App\Models\Aset;
use App\Models\Kelompok;
use App\Models\User;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Filament\Support\Enums\ActionSize;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pelaporan';

    protected static ?string $pluralModelLabel = 'daftar artikel';

    protected static ?string $modelLabel = 'artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                Forms\Components\TextInput::make('slug')
                                    ->required(),
                                Forms\Components\RichEditor::make('content')
                                    ->live(onBlur: true)
                                    ->required(),
                                Forms\Components\Textarea::make('excerpt')
                                    ->required(),
                                Forms\Components\Actions::make([
                                    Forms\Components\Actions\Action::make('Generate excerpt')
                                        ->action(function (Forms\Get $get, Set $set) {
                                            $set('excerpt', str($get('content'))->words(45, end: ''));
                                        })
                                        ->size(ActionSize::ExtraSmall)
                                ]),
                                Forms\Components\Select::make('tags')
                                    ->multiple()
                                    ->relationship('tags', 'name'),
                                Forms\Components\Select::make('kelompok_id')
                                    ->options(Kelompok::all()->pluck('name', 'id')),
                                Forms\Components\Select::make('author_id')
                                    ->options(User::all()->pluck('name', 'id'))
                            ])->columns(1),
                    ])->columnSpan(2),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Featured Image')
                            ->schema([
                                Forms\Components\SpatieMediaLibraryFileUpload::make('featured_image')
                                    ->live()
                                    ->image()
                                    ->hiddenLabel()
                                    ->collection('featured_image')
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\SpatieMediaLibraryFileUpload $component) {
                                        $livewire->validateOnly($component->getStatePath());
                                    }),
                            ]),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Select::make('author_id')
                                    ->label('Author')
                                    ->relationship('author', 'name')
                                    ->required()
                                    ->hiddenOn('create'),
                                Forms\Components\DateTimePicker::make('published_at')
                                    ->default(now()),
                            ]),
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('author.name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
