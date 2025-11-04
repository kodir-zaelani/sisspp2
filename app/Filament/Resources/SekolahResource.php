<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Sekolah;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Importsatuanpendidikan;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Notifications\Notification;
use App\Filament\Resources\SekolahResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekolahResource\RelationManagers;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $navigationLabel = 'Sekolah';
    protected static ?string $navigationGroup = 'Lembaga';
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
            Forms\Components\TextInput::make('nama')
            ->required()
            ->columnSpanFull()
            ->maxLength(255),
            Forms\Components\TextInput::make('npsn')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('nss')
            ->maxLength(255)
            ->default(null),
            // Forms\Components\TextInput::make('nama_nomenklatur')
            //     ->maxLength(255)
            //     ->default(null),
            Forms\Components\Select::make('bentukpendidikan_id')
            ->label('Bentuk Pendidikan')
            ->relationship('bentukpendidikan', 'nama')
            ->searchable()
            ->preload()
            ->default(null),
            Forms\Components\Select::make('jenjangpendidikan_id')
            ->label('Jenjang Pendidikan')
            ->relationship('jenjangpendidikan', 'nama')
            ->searchable()
            ->preload()
            ->default(null),
            Forms\Components\Select::make('status_sekolah')
            ->required()
            ->options([
                '1' => 'Negeri',
                '2' => 'Swasta',
            ]),
            Forms\Components\Select::make('statuskepemilikan_id')
            ->label('Status Kepemilikan')
            ->relationship('statuskepemilikan', 'nama')
            ->searchable()
            ->preload()
            ->default(null),
            Forms\Components\TextInput::make('yayasan_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('kebutuhankhusus_id')
            ->maxLength(36)
            ->default(null),
            // Forms\Components\TextInput::make('type_sekolah')
            // ->numeric()
            // ->default(null),
            Forms\Components\TextInput::make('sk_pendirian_sekolah')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tanggal_pendirian_sekolah')
            ->maxDate(now()),
            Forms\Components\TextInput::make('sk_izin_operasional')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tanggal_izin_operasional'),
            Forms\Components\TextInput::make('no_rekening')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('bank_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('nama_bank')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('cabang_kcp_unit')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('rekening_atas_nama')
            ->maxLength(255)
            ->default(null),
            Forms\Components\Toggle::make('mbs')
            ->required(),
            Forms\Components\TextInput::make('npwp')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nama_npwp')
            ->maxLength(255)
            ->default(null),
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
            Forms\Components\TextInput::make('negara_id')
            ->maxLength(36)
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
            Forms\Components\Textarea::make('maps')
            ->columnSpanFull(),
            Forms\Components\TextInput::make('no_telp')
            ->tel()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('no_fax')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('website')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('email')
            ->email()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('logo_sekolah')
            ->maxLength(255)
            ->default(null),
            Forms\Components\Toggle::make('memungut_iuran')
            ->required(),
            Forms\Components\Toggle::make('status_sekolah_update')
            ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([

            // Tables\Columns\TextColumn::make('nss')
            // ->searchable(),
            Tables\Columns\TextColumn::make('npsn')
            ->searchable(),
            Tables\Columns\TextColumn::make('yayasan_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama')
            ->searchable(),
            // Tables\Columns\TextColumn::make('nama_nomenklatur')
            // ->searchable(),
            Tables\Columns\TextColumn::make('bentukpendidikan.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('jenjangpendidikan.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('statuskepemilikan.nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('status_sekolah')
            ->badge()
            ->formatStateUsing(fn (string $state): string => match ($state) {
                '1' => 'Negeri',
                '2' => 'Swasta',
                default => 'Unknown',
            })
            ->color(fn (string $state): string => match ($state) {
                '1' => 'success', // Green badge for Active
                '2' => 'info',  // Red badge for Inactive
                default => 'gray',
            })
            ->searchable()
            ->sortable(),
            Tables\Columns\TextColumn::make('sk_pendirian_sekolah')
            ->searchable(),
            Tables\Columns\TextColumn::make('tanggal_pendirian_sekolah')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('sk_izin_operasional')
            ->searchable(),
            Tables\Columns\TextColumn::make('tanggal_izin_operasional')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('no_rekening')
            ->searchable(),
            Tables\Columns\TextColumn::make('bank.bankid')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_bank')
            ->searchable(),
            Tables\Columns\TextColumn::make('cabang_kcp_unit')
            ->searchable(),
            Tables\Columns\TextColumn::make('rekening_atas_nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('mbs')
            ->badge()
            ->formatStateUsing(fn (string $state): string => match ($state) {
                '1' => 'Ya',
                '2' => 'Tidak',
                default => 'Unknown',
            })
            ->color(fn (string $state): string => match ($state) {
                '1' => 'success', // Green badge for Active
                '2' => 'warning',  // Red badge for Inactive
                default => 'gray',
            })
            ->searchable()
            ->sortable(),
            Tables\Columns\TextColumn::make('npwp')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_npwp')
            ->searchable(),
            Tables\Columns\TextColumn::make('alamat')
            ->searchable(),
            Tables\Columns\TextColumn::make('rt')
            ->searchable(),
            Tables\Columns\TextColumn::make('rw')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_dusun')
            ->searchable(),
            Tables\Columns\TextColumn::make('province.name')
            ->searchable(),
            Tables\Columns\TextColumn::make('city.name')
            ->searchable(),
            Tables\Columns\TextColumn::make('district.name')
            ->searchable(),
            Tables\Columns\TextColumn::make('village.name')
            ->searchable(),
            Tables\Columns\TextColumn::make('negara.nama')
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
            Tables\Columns\TextColumn::make('website')
            ->searchable(),
            Tables\Columns\TextColumn::make('email')
            ->searchable(),
            Tables\Columns\TextColumn::make('logo_sekolah')
            ->searchable(),
            Tables\Columns\IconColumn::make('memungut_iuran')
            ->boolean(),
            Tables\Columns\IconColumn::make('status_sekolah_update')
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
                                    Excel::import(new Importsatuanpendidikan, $data['file']);
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
                                'index' => Pages\ListSekolahs::route('/'),
                                'create' => Pages\CreateSekolah::route('/create'),
                                'view' => Pages\ViewSekolah::route('/{record}'),
                                'edit' => Pages\EditSekolah::route('/{record}/edit'),
                            ];
                        }
                    }