<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationLabel = 'Setting';
    protected static ?string $navigationGroup = 'Auths and Configurations';
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
                Forms\Components\TextInput::make('webname')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('tagline')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('siteurl')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('homeurl')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('statushero')
                    ->required(),
                Forms\Components\TextInput::make('language')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('favicon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('address')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('postalcode')
                    ->maxLength(7)
                    ->default(null),
                Forms\Components\TextInput::make('province_code')
                    ->maxLength(2)
                    ->default(null),
                Forms\Components\TextInput::make('city_code')
                    ->maxLength(4)
                    ->default(null),
                Forms\Components\TextInput::make('district_code')
                    ->maxLength(7)
                    ->default(null),
                Forms\Components\TextInput::make('village_code')
                    ->maxLength(10)
                    ->default(null),
                Forms\Components\TextInput::make('negara_id')
                    ->maxLength(36)
                    ->default(null),
                Forms\Components\TextInput::make('logo')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('post_per_page')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('timezone')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('status_home')
                    ->required(),
                Forms\Components\Textarea::make('maps')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_keywords')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('bg_header')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('bg_statistic')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('logo_menu')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('fresh_site')
                    ->numeric()
                    ->default(null),
                Forms\Components\Toggle::make('status_site_update')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('webname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tagline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siteurl')
                    ->searchable(),
                Tables\Columns\TextColumn::make('homeurl')
                    ->searchable(),
                Tables\Columns\IconColumn::make('statushero')
                    ->boolean(),
                Tables\Columns\TextColumn::make('language')
                    ->searchable(),
                Tables\Columns\TextColumn::make('favicon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('postalcode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('district_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('village_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('negara_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('post_per_page')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('timezone')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status_home')
                    ->boolean(),
                Tables\Columns\TextColumn::make('fresh_site')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status_site_update')
                    ->boolean(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'view' => Pages\ViewSetting::route('/{record}'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}