<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AksesinternetResource\Pages;
use App\Filament\Resources\AksesinternetResource\RelationManagers;
use App\Models\Aksesinternet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AksesinternetResource extends Resource
{
    protected static ?string $model = Aksesinternet::class;

    protected static ?string $navigationGroup = 'Referensi';
    protected static ?string $navigationLabel = 'Akses Internet';
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
                Forms\Components\TextInput::make('akses_internet_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(75),
                Forms\Components\TextInput::make('media')
                    ->required()
                    ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('akses_internet_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('media')
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
            'index' => Pages\ListAksesinternets::route('/'),
            'create' => Pages\CreateAksesinternet::route('/create'),
            'view' => Pages\ViewAksesinternet::route('/{record}'),
            'edit' => Pages\EditAksesinternet::route('/{record}/edit'),
        ];
    }
}