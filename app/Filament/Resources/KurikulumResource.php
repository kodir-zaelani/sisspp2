<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KurikulumResource\Pages;
use App\Filament\Resources\KurikulumResource\RelationManagers;
use App\Models\Kurikulum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KurikulumResource extends Resource
{
    protected static ?string $model = Kurikulum::class;
    protected static ?string $navigationLabel = 'Kurikulum';
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
                Forms\Components\TextInput::make('kurikulumid')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_kurikulum')
                    ->required()
                    ->maxLength(120),
                Forms\Components\DatePicker::make('mulai_berlaku')
                    ->required(),
                Forms\Components\TextInput::make('sistem_sks')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('total_sks')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjangpendidikan_id')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('jurusanid')
                    ->maxLength(36)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('kurikulumid')
                    // ->numeric()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_kurikulum')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mulai_berlaku')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sistem_sks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_sks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjangpendidikan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jurusanid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListKurikulums::route('/'),
            'create' => Pages\CreateKurikulum::route('/create'),
            'view' => Pages\ViewKurikulum::route('/{record}'),
            'edit' => Pages\EditKurikulum::route('/{record}/edit'),
        ];
    }
}
