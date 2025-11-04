<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MapelkurikulumResource\Pages;
use App\Filament\Resources\MapelkurikulumResource\RelationManagers;
use App\Models\Mapelkurikulum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MapelkurikulumResource extends Resource
{
    protected static ?string $model = Mapelkurikulum::class;

    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Mapel Kurikulum';
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
                Forms\Components\TextInput::make('kurikulum_id')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('matapelajaran_id')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('tingkatpendidikan_id')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('tingkat')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_jam')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_jam_maksimum')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('wajib')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sks')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('a_peminatan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('area_kompetensi')
                    ->required()
                    ->maxLength(1),
                Forms\Components\TextInput::make('gmp_id')
                    ->maxLength(36)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('kurikulum_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('matapelajaran_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tingkatpendidikan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tingkat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_jam')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_jam_maksimum')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('wajib')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('a_peminatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('area_kompetensi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gmp_id')
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
            'index' => Pages\ListMapelkurikulums::route('/'),
            'create' => Pages\CreateMapelkurikulum::route('/create'),
            'view' => Pages\ViewMapelkurikulum::route('/{record}'),
            'edit' => Pages\EditMapelkurikulum::route('/{record}/edit'),
        ];
    }
}