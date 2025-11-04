<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisbantuanResource\Pages;
use App\Filament\Resources\JenisbantuanResource\RelationManagers;
use App\Models\Jenisbantuan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisbantuanResource extends Resource
{
    protected static ?string $model = Jenisbantuan::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenis Bantuan';
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
                Forms\Components\TextInput::make('jenis_bantuan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('untuk_sekolah')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('untuk_pd')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenis_bantuan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('untuk_sekolah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_pd')
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
            'index' => Pages\ListJenisbantuans::route('/'),
            'create' => Pages\CreateJenisbantuan::route('/create'),
            'view' => Pages\ViewJenisbantuan::route('/{record}'),
            'edit' => Pages\EditJenisbantuan::route('/{record}/edit'),
        ];
    }
}