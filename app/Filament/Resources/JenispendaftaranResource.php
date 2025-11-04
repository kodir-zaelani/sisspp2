<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenispendaftaranResource\Pages;
use App\Filament\Resources\JenispendaftaranResource\RelationManagers;
use App\Models\Jenispendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenispendaftaranResource extends Resource
{
    protected static ?string $model = Jenispendaftaran::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jenis Pendaftaran';
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
                Forms\Components\TextInput::make('jenis_pendaftaran_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('daftar_sekolah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('daftar_rombel')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jenis_pendaftaran_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('daftar_sekolah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('daftar_rombel')
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
            'index' => Pages\ListJenispendaftarans::route('/'),
            'create' => Pages\CreateJenispendaftaran::route('/create'),
            'view' => Pages\ViewJenispendaftaran::route('/{record}'),
            'edit' => Pages\EditJenispendaftaran::route('/{record}/edit'),
        ];
    }
}