<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenjangpendidikanResource\Pages;
use App\Filament\Resources\JenjangpendidikanResource\RelationManagers;
use App\Models\Jenjangpendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenjangpendidikanResource extends Resource
{
    protected static ?string $model = Jenjangpendidikan::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenjang Pendidikan';
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
                Forms\Components\TextInput::make('jenjang_pendidikan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('jenjang_lembaga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang_orang')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenjang_pendidikan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjang_lembaga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang_orang')
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
            'index' => Pages\ListJenjangpendidikans::route('/'),
            'create' => Pages\CreateJenjangpendidikan::route('/create'),
            'view' => Pages\ViewJenjangpendidikan::route('/{record}'),
            'edit' => Pages\EditJenjangpendidikan::route('/{record}/edit'),
        ];
    }
}