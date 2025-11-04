<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TingkatpendidikanResource\Pages;
use App\Filament\Resources\TingkatpendidikanResource\RelationManagers;
use App\Models\Tingkatpendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TingkatpendidikanResource extends Resource
{
    protected static ?string $model = Tingkatpendidikan::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Tingkat Pendidikan';
    protected static ?string $navigationGroup = 'Referensi';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 5 ? 'success' : 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tingkat_pendidikan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->maxLength(5),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(20),
                Forms\Components\Select::make('jenjangpendidikan_id')
                    ->relationship('jenjangpendidikan', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('tingkat_pendidikan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjangpendidikan.id')
                    ->searchable(),
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
            'index' => Pages\ListTingkatpendidikans::route('/'),
            'create' => Pages\CreateTingkatpendidikan::route('/create'),
            'view' => Pages\ViewTingkatpendidikan::route('/{record}'),
            'edit' => Pages\EditTingkatpendidikan::route('/{record}/edit'),
        ];
    }
}