<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Filament\Resources\JurusanResource\RelationManagers;
use App\Models\Jurusan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

     // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
     protected static ?string $navigationLabel = 'Jurusan';
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
                Forms\Components\TextInput::make('jurusanid')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('nama_jurusan')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('untuk_sma')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_smk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_pt')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_slb')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('untuk_smklb')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjangpendidikan_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('jurusan_induk')
                    ->maxLength(25)
                    ->default(null),
                Forms\Components\TextInput::make('level_bidang_id')
                    ->required()
                    ->maxLength(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('jurusanid')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_jurusan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('untuk_sma')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_smk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_pt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_slb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('untuk_smklb')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjangpendidikan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jurusan_induk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level_bidang_id')
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
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'view' => Pages\ViewJurusan::route('/{record}'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }
}