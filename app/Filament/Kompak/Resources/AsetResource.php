<?php

namespace App\Filament\Kompak\Resources;

use App\Filament\Kompak\Resources\AsetResource\Pages;
use App\Filament\Kompak\Resources\AsetResource\RelationManagers;
use App\Models\Aset;
use App\Models\Kelompok;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsetResource extends Resource
{
    protected static ?string $model = Aset::class;

    protected static ?string $pluralModelLabel = 'daftar aset';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\Select::make('is_kompak')
                    ->options([
                        1 => 'Iya',
                        0 => 'Tidak'
                    ])->label('Apakah Bantuan KOMPAK LPSPL Serang?'),
                Forms\Components\TextInput::make('keterangan'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('foto_aset')
                                    ->live()
                                    ->image()
                                    ->hiddenLabel()
                                    ->collection('aset')
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\SpatieMediaLibraryFileUpload $component) {
                                        $livewire->validateOnly($component->getStatePath());
                                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('is_kompak')->label('Bantuan KOMPAK'),
                Tables\Columns\TextColumn::make('keterangan'),
            ])
            ->filters([
                Tables\Filters\Filter::make('kompak')
                    ->query(fn (Builder $query): Builder => $query->where('is_kompak', true)),
                Tables\Filters\Filter::make('selain kompak')
                    ->query(fn (Builder $query): Builder => $query->where('is_kompak', false))
            ])
            ->actions([
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
            'index' => Pages\ListAsets::route('/'),
            'create' => Pages\CreateAset::route('/create'),
            'view' => Pages\ViewAset::route('/{record}'),
            'edit' => Pages\EditAset::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok_id', auth()->user()->kelompok->id);
    }
}
