<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TahunajaranResource\Pages;
use App\Filament\Resources\TahunajaranResource\RelationManagers;
use App\Models\Tahunajaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TahunajaranResource extends Resource
{
    protected static ?string $model = Tahunajaran::class;
    protected static ?string $navigationLabel = 'Tahun Ajaran';
    protected static ?string $navigationGroup = 'Master Data';
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
                Forms\Components\TextInput::make('tahun_ajaran_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('periode_aktif')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('tahun_ajaran_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periode_aktif')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->date()
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
            'index' => Pages\ListTahunajarans::route('/'),
            'create' => Pages\CreateTahunajaran::route('/create'),
            'view' => Pages\ViewTahunajaran::route('/{record}'),
            'edit' => Pages\EditTahunajaran::route('/{record}/edit'),
        ];
    }
}