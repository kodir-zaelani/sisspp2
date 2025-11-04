<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JabatantugasptkResource\Pages;
use App\Filament\Resources\JabatantugasptkResource\RelationManagers;
use App\Models\Jabatantugasptk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JabatantugasptkResource extends Resource
{
    protected static ?string $model = Jabatantugasptk::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jabatan Tugas PTK';
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
                Forms\Components\TextInput::make('jabatan_tugasptk_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(150),
                Forms\Components\TextInput::make('jabatan_utama')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tugas_tambahan_guru')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_jam_diakui')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('harus_refer_unit_org')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jabatan_tugasptk_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan_utama')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tugas_tambahan_guru')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_jam_diakui')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harus_refer_unit_org')
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
            'index' => Pages\ListJabatantugasptks::route('/'),
            'create' => Pages\CreateJabatantugasptk::route('/create'),
            'view' => Pages\ViewJabatantugasptk::route('/{record}'),
            'edit' => Pages\EditJabatantugasptk::route('/{record}/edit'),
        ];
    }
}