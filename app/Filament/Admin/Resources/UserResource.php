<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Models\Kelompok;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $pluralModelLabel = 'daftar user';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Pengaturan Pengguna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')
                    ->email()->required(),
                Forms\Components\Select::make('is_admin')
                    ->options([
                        0 => 'Bukan',
                        1 => 'Admin',
                    ])->label('Peran'),
                Forms\Components\TextInput::make('password')->confirmed()->required()->hiddenOn('edit'),
                Forms\Components\TextInput::make('password_confirmation')->password()->hiddenOn('edit'),
                Forms\Components\Select::make('kelompok_id')
                    ->label('Kelompok')
                    ->options(Kelompok::all()->pluck('name', 'id'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('admin')
                    ->query(fn (Builder $query): Builder => $query->where('is_admin', true)),
                Tables\Filters\Filter::make('non admin')
                    ->query(fn (Builder $query): Builder => $query->where('is_admin', true))
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
