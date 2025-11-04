<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkreditasiResource\Pages;
use App\Filament\Resources\AkreditasiResource\RelationManagers;
use App\Models\Akreditasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AkreditasiResource extends Resource
{
    protected static ?string $model = Akreditasi::class;
    protected static ?string $navigationLabel = 'Akreditasi';
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
            Forms\Components\TextInput::make('sort_akreditasi')
            ->numeric()
            ->default(null),
            Forms\Components\TextInput::make('nama')
            ->required()
            ->maxLength(255)
            ->default('Belum Akreditasi'),
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('sort_akreditasi')
            ->label('Peringkat')
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
                        'index' => Pages\ListAkreditasis::route('/'),
                        'create' => Pages\CreateAkreditasi::route('/create'),
                        'edit' => Pages\EditAkreditasi::route('/{record}/edit'),
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