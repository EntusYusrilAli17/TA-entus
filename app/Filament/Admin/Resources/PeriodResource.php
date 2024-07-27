<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PeriodResource\Pages;
use App\Filament\Admin\Resources\PeriodResource\RelationManagers;
use App\Models\Aset;
use App\Models\Kelompok;
use App\Models\Laporan;
use App\Models\Period;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Components\Tab;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodResource extends Resource
{
    protected static ?string $model = Period::class;

    protected static ?string $pluralModelLabel = 'daftar periode';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pelaporan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('tahun')->numeric()->default(date('Y')),
                Forms\Components\Select::make('is_open')
                    ->label('Apakah masih terbuka')
                    ->options([
                        1 => 'Buka',
                        2 => 'Tutup'
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('tahun')->searchable(),
                Tables\Columns\SelectColumn::make('is_open')
                    ->label('Status')
                    ->options([
                        1 => 'Buka',
                        0 => 'Tutup'
                    ])
            ])
            ->filters([
                Tables\Filters\Filter::make('Buka')
                    ->query(fn (Builder $query): Builder => $query->where('is_open', true)),
                Tables\Filters\Filter::make('Tutup')
                    ->query((fn (Builder $query): Builder => $query->where('is_open', false)))

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('initialize')
                    ->action(function (Period $record) {
                        $kelompoks = Kelompok::get();
                        foreach ($kelompoks as $kelompok) {
                            $asets = Aset::where('is_kompak', true)->where('kelompok_id', $kelompok->id)->get();
                            foreach ($asets as $aset) {
                                $laporan = new Laporan();
                                $laporan->kelompok_id = $kelompok->id;
                                $laporan->aset_id = $aset->id;
                                $laporan->period_id = $record->id;
                                $laporan->save();
                            }
                        }
                        $record->is_init = true;
                        $record->save();
                        Notification::make()
                            ->title('Inisialisasi laporan selesai')
                            ->success()
                            ->send();
                    })
                    ->hidden(fn (Period $record): bool => $record->is_init)
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
            'index' => Pages\ListPeriods::route('/'),
            'create' => Pages\CreatePeriod::route('/create'),
            'view' => Pages\ViewPeriod::route('/{record}'),
            'edit' => Pages\EditPeriod::route('/{record}/edit'),
        ];
    }
}
