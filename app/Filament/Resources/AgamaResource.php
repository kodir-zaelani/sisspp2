<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Agama;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Exports\AgamaExporter;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ExportAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AgamaResource\Pages;
use Filament\Actions\Exports\Enums\ExportFormat;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AgamaResource\RelationManagers;

class AgamaResource extends Resource
{
    protected static ?string $model = Agama::class;
    protected static ?string $navigationLabel = 'Agama';
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
            Forms\Components\TextInput::make('nama')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('sort_id')
            ->label('ID Agama')
            ->required()
            ->numeric(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('sort_id')
            ->label('ID Agama')
            ->numeric()
            ->sortable(),
            Tables\Columns\TextColumn::make('nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('deleted_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\TrashedFilter::make(),
                ])
                ->actions([
                    Tables\Actions\EditAction::make(),
                    ])
                    ->bulkActions([
                        Tables\Actions\BulkActionGroup::make([
                            Tables\Actions\DeleteBulkAction::make(),
                            Tables\Actions\ForceDeleteBulkAction::make(),
                            Tables\Actions\RestoreBulkAction::make(),
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
                        'index' => Pages\ListAgamas::route('/'),
                        'create' => Pages\CreateAgama::route('/create'),
                        'edit' => Pages\EditAgama::route('/{record}/edit'),
                    ];
                }

                public static function getEloquentQuery(): Builder
                {
                    return parent::getEloquentQuery()
                    ->withoutGlobalScopes([
                        SoftDeletingScope::class,
                    ]);
                }
            }
