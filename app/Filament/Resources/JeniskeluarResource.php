<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JeniskeluarResource\Pages;
use App\Filament\Resources\JeniskeluarResource\RelationManagers;
use App\Models\Jeniskeluar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JeniskeluarResource extends Resource
{
    protected static ?string $model = Jeniskeluar::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenis Keluar';
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
                Forms\Components\TextInput::make('jenis_keluar_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('keterangan')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('keluar_pd')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('keluar_ptk')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenis_keluar_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keluar_pd')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('keluar_ptk')
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
            'index' => Pages\ListJeniskeluars::route('/'),
            'create' => Pages\CreateJeniskeluar::route('/create'),
            'view' => Pages\ViewJeniskeluar::route('/{record}'),
            'edit' => Pages\EditJeniskeluar::route('/{record}/edit'),
        ];
    }
}