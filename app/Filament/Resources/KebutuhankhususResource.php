<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KebutuhankhususResource\Pages;
use App\Filament\Resources\KebutuhankhususResource\RelationManagers;
use App\Models\Kebutuhankhusus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KebutuhankhususResource extends Resource
{
    protected static ?string $model = Kebutuhankhusus::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Kebutuhan Khusus';
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
                Forms\Components\TextInput::make('kebutuhan_khusus_id')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('kebutuhan_khusus')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kk_a')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_b')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_c')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_c1')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_d')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_d1')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_e')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_f')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_h')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_i')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_j')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_k')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_n')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_o')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_p')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kk_q')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_lembaga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_ptk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_pd')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('kebutuhan_khusus_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kebutuhan_khusus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kk_a')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_b')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_c')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_c1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_d')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_d1')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_e')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_f')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_h')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_i')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_j')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_k')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_n')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_o')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_p')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kk_q')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_lembaga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_ptk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_pd')
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
            'index' => Pages\ListKebutuhankhususes::route('/'),
            'create' => Pages\CreateKebutuhankhusus::route('/create'),
            'view' => Pages\ViewKebutuhankhusus::route('/{record}'),
            'edit' => Pages\EditKebutuhankhusus::route('/{record}/edit'),
        ];
    }
}