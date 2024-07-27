<?php

namespace App\Filament\Kompak\Resources;

use App\Filament\Kompak\Resources\LaporanResource\Pages;
use App\Filament\Kompak\Resources\LaporanResource\RelationManagers;
use App\Models\Aset;
use App\Models\Kelompok;
use App\Models\Laporan;
use App\Models\Period;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class LaporanResource extends Resource
{
    protected static ?string $model = Laporan::class;

    protected static ?string $pluralModelLabel = 'daftar laporan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kelompok_id')
                    ->label('kelompok')
                    ->options(Kelompok::all()->pluck('name', 'id'))
                    ->disabled(),
                Forms\Components\Select::make('aset_id')
                    ->label('aset')
                    ->placeholder(fn (Forms\Get $get): string => empty($get('kelompok_id')) ? 'Pilih kelompok terlebih dahulu' : 'Select an option')
                    ->options(function (Forms\Get $get): Collection {
                        return Aset::where('is_kompak', true)->where('kelompok_id', $get('kelompok_id'))->pluck('name', 'id');
                    })
                    ->disabled(),
                Forms\Components\Select::make('period_id')
                    ->label('periode')
                    ->options(Period::where('is_open', true)->pluck('name', 'id'))
                    ->disabled(),
                Forms\Components\Select::make('kondisi')
                    ->options([
                        'Baik' => 'Baik',
                        'Rusak Ringan' => 'Rusak Ringan',
                        'Rusak Berat' => 'Rusak Berat'
                    ])
                    ->required(),
                Forms\Components\Textarea::make('permasalahan')
                    ->required(),
                Forms\Components\Textarea::make('realisasi')->label('Realisasi dari rencana tindak Lanjut Monev sebelumnya')
                    ->required(),
                Forms\Components\Textarea::make('tindaklanjut')->label('Tindak lanjut')
                    ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('foto_aset')
                                    ->live()
                                    ->image()
                                    ->hiddenLabel()
                                    ->collection('laporan')
                                    ->afterStateUpdated(function (Forms\Contracts\HasForms $livewire, Forms\Components\SpatieMediaLibraryFileUpload $component) {
                                        $livewire->validateOnly($component->getStatePath());
                                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelompok.name'),
                Tables\Columns\TextColumn::make('aset.name'),
                Tables\Columns\TextColumn::make('period.name'),
                Tables\Columns\TextColumn::make('period.name'),
                Tables\Columns\IconColumn::make('is_filled')
                    ->label('Diisi')
                    ->boolean()
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
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'view' => Pages\ViewLaporan::route('/{record}'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok_id', auth()->user()->kelompok->id);
    }


}
