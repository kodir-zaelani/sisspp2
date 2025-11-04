<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MatapelajaranResource\Pages;
use App\Filament\Resources\MatapelajaranResource\RelationManagers;
use App\Models\Matapelajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MatapelajaranResource extends Resource
{
    protected static ?string $model = Matapelajaran::class;

    protected static ?string $navigationLabel = 'Mata Pelajaran';
    protected static ?string $navigationGroup = 'Master Data';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 5 ? 'success' : 'warning';
    }
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('mata_pelajaran_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pilihan_sekolah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pilihan_buku')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pilihan_kepengawasan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pilihan_evaluasi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jurusan_id')
                    ->maxLength(36)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('mata_pelajaran_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pilihan_sekolah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pilihan_buku')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pilihan_kepengawasan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pilihan_evaluasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jurusan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMatapelajarans::route('/'),
            'create' => Pages\CreateMatapelajaran::route('/create'),
            'view' => Pages\ViewMatapelajaran::route('/{record}'),
            'edit' => Pages\EditMatapelajaran::route('/{record}/edit'),
        ];
    }
}