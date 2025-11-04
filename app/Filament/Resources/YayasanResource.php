<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Yayasan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\YayasanimportCollection;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\YayasanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\YayasanResource\RelationManagers;

class YayasanResource extends Resource
{
    protected static ?string $model = Yayasan::class;

    protected static ?string $navigationLabel = 'Yayasan';
    protected static ?string $navigationGroup = 'Lembaga';
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
            Forms\Components\TextInput::make('slug')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('alamat')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('rt')
            ->maxLength(5)
            ->default(00000),
            Forms\Components\TextInput::make('rw')
            ->maxLength(5)
            ->default(00000),
            Forms\Components\TextInput::make('nama_dusun')
            ->maxLength(255)
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
            Forms\Components\TextInput::make('kode_pos')
            ->maxLength(5)
            ->default(null),
            Forms\Components\TextInput::make('lintang')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('bujur')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('no_telp')
            ->tel()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('no_fax')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('email')
            ->email()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('website')
            ->maxLength(255)
            ->default(null),
            Forms\Components\Textarea::make('maps')
            ->columnSpanFull(),
            Forms\Components\TextInput::make('no_pendirian_yayasan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tgl_pendirian_yayasan'),
            Forms\Components\TextInput::make('nomor_pengesahan_pn_ln')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nomor_sk_bn')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tanggal_sk_bn'),
            Forms\Components\TextInput::make('logo_yayasan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\Toggle::make('status_yayasan_update')
            ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([

            Tables\Columns\TextColumn::make('nama')
            ->searchable(),
            // Tables\Columns\TextColumn::make('slug')
            // ->searchable(),
            Tables\Columns\TextColumn::make('alamat')
            ->searchable(),
            Tables\Columns\TextColumn::make('rt')
            ->searchable(),
            Tables\Columns\TextColumn::make('rw')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_dusun')
            ->searchable(),
            Tables\Columns\TextColumn::make('province.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('city.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('district.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('village.name')
            ->searchable(),
            Tables\Columns\TextColumn::make('kode_pos')
            ->searchable(),
            Tables\Columns\TextColumn::make('lintang')
            ->searchable(),
            Tables\Columns\TextColumn::make('bujur')
            ->searchable(),
            Tables\Columns\TextColumn::make('no_telp')
            ->searchable(),
            Tables\Columns\TextColumn::make('no_fax')
            ->searchable(),
            Tables\Columns\TextColumn::make('email')
            ->searchable(),
            Tables\Columns\TextColumn::make('website')
            ->searchable(),
            Tables\Columns\TextColumn::make('no_pendirian_yayasan')
            ->searchable(),
            Tables\Columns\TextColumn::make('tgl_pendirian_yayasan')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('nomor_pengesahan_pn_ln')
            ->searchable(),
            Tables\Columns\TextColumn::make('nomor_sk_bn')
            ->searchable(),
            Tables\Columns\TextColumn::make('tanggal_sk_bn')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('logo_yayasan')
            ->searchable(),
            Tables\Columns\IconColumn::make('status_yayasan_update')
            ->boolean(),
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
                        ])
                        ->headerActions([
                            Action::make('import')
                            ->label('Import Excel')
                            ->icon('heroicon-o-arrow-up-on-square')
                            ->form([
                                FileUpload::make('file')
                                ->label('Excel File')
                                ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel', 'text/csv'])
                                ->required(),
                                ])
                                ->action(function (array $data) {

                                    Excel::import(new YayasanimportCollection, $data['file']);
                                    Notification::make()
                                    ->title('Import successful')
                                    ->success()
                                    ->send();
                                }),
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
                                'index' => Pages\ListYayasans::route('/'),
                                'create' => Pages\CreateYayasan::route('/create'),
                                'view' => Pages\ViewYayasan::route('/{record}'),
                                'edit' => Pages\EditYayasan::route('/{record}/edit'),
                            ];
                        }
                    }