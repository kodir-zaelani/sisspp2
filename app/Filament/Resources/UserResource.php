<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    
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
            Forms\Components\TextInput::make('name')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('email')
            ->email()
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('username')
            ->maxLength(50)
            ->default(null),
            Forms\Components\TextInput::make('displayname')
            ->maxLength(50)
            ->default(null),
            Forms\Components\TextInput::make('phone')
            ->tel()
            ->maxLength(50)
            ->default(null),
            Forms\Components\TextInput::make('password')
            ->password()
            ->required()
            ->visibleon('create')
            ->maxLength(255),
            Select::make('roles')->multiple()->relationship('roles', 'name')
            ->searchable()
            ->preload(),
            Forms\Components\Textarea::make('bio')
            ->columnSpanFull(),
            Forms\Components\FileUpload::make('image')
            ->columnSpanFull()
            ->directory('/images/users/')
            ->imageEditor()
            ->imageEditorAspectRatios([
                null,
                '16:9',
                '4:3',
                '1:1',
            ])
            ->image(),
            Forms\Components\Toggle::make('status')
            ->required(),
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image'),
            Tables\Columns\TextColumn::make('name')
            ->searchable(),
            Tables\Columns\TextColumn::make('email')
            ->searchable(),
            Tables\Columns\TextColumn::make('username')
            ->searchable(),
            Tables\Columns\IconColumn::make('status')
            ->boolean(),
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
                        'index' => Pages\ListUsers::route('/'),
                        'create' => Pages\CreateUser::route('/create'),
                        'edit' => Pages\EditUser::route('/{record}/edit'),
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