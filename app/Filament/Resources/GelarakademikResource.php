<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GelarakademikResource\Pages;
use App\Filament\Resources\GelarakademikResource\RelationManagers;
use App\Models\Gelarakademik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GelarakademikResource extends Resource
{
    protected static ?string $model = Gelarakademik::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Gelas Akademik';
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
                Forms\Components\TextInput::make('gelara_kademik_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('posisi_gelar')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('gelara_kademik_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('posisi_gelar')
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
            'index' => Pages\ListGelarakademiks::route('/'),
            'create' => Pages\CreateGelarakademik::route('/create'),
            'view' => Pages\ViewGelarakademik::route('/{record}'),
            'edit' => Pages\EditGelarakademik::route('/{record}/edit'),
        ];
    }
}