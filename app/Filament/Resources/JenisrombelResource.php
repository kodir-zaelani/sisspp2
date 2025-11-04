<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisrombelResource\Pages;
use App\Filament\Resources\JenisrombelResource\RelationManagers;
use App\Models\Jenisrombel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisrombelResource extends Resource
{
    protected static ?string $model = Jenisrombel::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenis Rombel';
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
                Forms\Components\TextInput::make('jenisrombelid')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenisrombelid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
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
            'index' => Pages\ListJenisrombels::route('/'),
            'create' => Pages\CreateJenisrombel::route('/create'),
            'view' => Pages\ViewJenisrombel::route('/{record}'),
            'edit' => Pages\EditJenisrombel::route('/{record}/edit'),
        ];
    }
}