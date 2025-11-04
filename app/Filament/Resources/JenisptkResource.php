<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisptkResource\Pages;
use App\Filament\Resources\JenisptkResource\RelationManagers;
use App\Models\Jenisptk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisptkResource extends Resource
{
    protected static ?string $model = Jenisptk::class;

    protected static ?string $navigationLabel = 'Jenis PTK';
    protected static ?string $navigationGroup = 'Kepegawaian';
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
                Forms\Components\TextInput::make('jenis_ptk_id')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('jenis_ptk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('guru_kelas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('guru_matpel')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('guru_bk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('guru_inklusi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pengawas_satdik')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pengawas_plb')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pengawas_matpel')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pengawas_bidang')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('formal')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('jenis_ptk_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_ptk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guru_kelas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('guru_matpel')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('guru_bk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('guru_inklusi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengawas_satdik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengawas_plb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengawas_matpel')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengawas_bidang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('formal')
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
            ])->extremePaginationLinks();
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
            'index' => Pages\ListJenisptks::route('/'),
            'create' => Pages\CreateJenisptk::route('/create'),
            'view' => Pages\ViewJenisptk::route('/{record}'),
            'edit' => Pages\EditJenisptk::route('/{record}/edit'),
        ];
    }
}
