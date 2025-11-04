<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BidangstudiResource\Pages;
use App\Filament\Resources\BidangstudiResource\RelationManagers;
use App\Models\Bidangstudi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BidangstudiResource extends Resource
{
    protected static ?string $model = Bidangstudi::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Bidang Studi';
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
                Forms\Components\TextInput::make('bidang_studi_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kelompok_bidang_studi')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('kode')
                    ->maxLength(30)
                    ->default(null),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('kelompok')
                    ->required()
                    ->numeric(),
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('bidang_studi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelompok_bidang_studi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelompok')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListBidangstudis::route('/'),
            'create' => Pages\CreateBidangstudi::route('/create'),
            'view' => Pages\ViewBidangstudi::route('/{record}'),
            'edit' => Pages\EditBidangstudi::route('/{record}/edit'),
        ];
    }
}