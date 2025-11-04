<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlasanlayakpipResource\Pages;
use App\Filament\Resources\AlasanlayakpipResource\RelationManagers;
use App\Models\Alasanlayakpip;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlasanlayakpipResource extends Resource
{
    protected static ?string $model = Alasanlayakpip::class;
    
    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Alasan Layak PIP';
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
            Forms\Components\TextInput::make('id_layak_pip')
            ->label('ID Layak PIP')
            ->required()
            ->numeric(),
            Forms\Components\TextInput::make('alasan')
            ->required()
            ->maxLength(100),
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('id_layak_pip')
            ->label('ID Layak PIP')
            ->numeric()
            ->sortable(),
            Tables\Columns\TextColumn::make('alasan')
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
                        'index' => Pages\ListAlasanlayakpips::route('/'),
                        'create' => Pages\CreateAlasanlayakpip::route('/create'),
                        'view' => Pages\ViewAlasanlayakpip::route('/{record}'),
                        'edit' => Pages\EditAlasanlayakpip::route('/{record}/edit'),
                    ];
                }
            }