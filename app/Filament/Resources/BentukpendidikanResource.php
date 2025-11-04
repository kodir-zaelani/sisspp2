<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BentukpendidikanResource\Pages;
use App\Filament\Resources\BentukpendidikanResource\RelationManagers;
use App\Models\Bentukpendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BentukpendidikanResource extends Resource
{
    protected static ?string $model = Bentukpendidikan::class;

    protected static ?string $navigationGroup = 'Referensi';
    protected static ?string $navigationLabel = 'Bentuk Pendidikan';
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
                Forms\Components\TextInput::make('bentuk_pendidikan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('jenjang_paud')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_tk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_sd')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_smp')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_sma')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_tinggi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('direktorat_pembinaan')
                    ->required()
                    ->maxLength(40),
                Forms\Components\TextInput::make('aktif')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('bentuk_pendidikan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjang_paud')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_tk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_sd')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_smp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_sma')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_tinggi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('direktorat_pembinaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('aktif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListBentukpendidikans::route('/'),
            'create' => Pages\CreateBentukpendidikan::route('/create'),
            'view' => Pages\ViewBentukpendidikan::route('/{record}'),
            'edit' => Pages\EditBentukpendidikan::route('/{record}/edit'),
        ];
    }
}