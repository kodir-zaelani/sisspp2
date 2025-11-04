<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisbeasiswaResource\Pages;
use App\Filament\Resources\JenisbeasiswaResource\RelationManagers;
use App\Models\Jenisbeasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisbeasiswaResource extends Resource
{
    protected static ?string $model = Jenisbeasiswa::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenis Beasiswa';
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
                Forms\Components\TextInput::make('jenis_beasiswa_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sumberdana_id')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('untuk_pd')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('untuk_ptk')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenis_beasiswa_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sumberdana_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('untuk_pd')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_ptk')
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
            'index' => Pages\ListJenisbeasiswas::route('/'),
            'create' => Pages\CreateJenisbeasiswa::route('/create'),
            'view' => Pages\ViewJenisbeasiswa::route('/{record}'),
            'edit' => Pages\EditJenisbeasiswa::route('/{record}/edit'),
        ];
    }
}