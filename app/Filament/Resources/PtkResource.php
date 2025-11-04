<?php

namespace App\Filament\Resources;

use App\Models\Ptk;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Imports\ImportPtk;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PtkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PtkResource\RelationManagers;

class PtkResource extends Resource
{
    protected static ?string $model = Ptk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('sekolah_id')
            ->required()
            ->maxLength(36),
            Forms\Components\TextInput::make('gelar_depan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nama')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('gelar_belakang')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('jenis_kelamin')
            ->maxLength(1)
            ->default(null),
            Forms\Components\TextInput::make('tempat_lahir')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tanggal_lahir'),
            Forms\Components\TextInput::make('nik')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nip')
            ->required()
            ->maxLength(255),
            Forms\Components\TextInput::make('pangkatgolongan_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('nuptk')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('niy_nigk')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('jenisptk_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('agama_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('alamat_jalan')
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
            Forms\Components\TextInput::make('no_telepon_rumah')
            ->tel()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('no_hp')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('email')
            ->email()
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('sk_cpns')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tgl_cpns'),
            Forms\Components\TextInput::make('sk_pengangkatan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\DatePicker::make('tgl_pengangkatan'),
            Forms\Components\TextInput::make('lembagapengangkat_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('sumbergaji_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('nama_ibu_kandung')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('status_perkawinan')
            ->numeric()
            ->default(null),
            Forms\Components\TextInput::make('nama_suami_istri')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nip_suami_istri')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('pekerjaan_suami_istri_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\DatePicker::make('tmt_pns'),
            Forms\Components\TextInput::make('lisensi_kepala_sekolah')
            ->numeric()
            ->default(null),
            Forms\Components\TextInput::make('npwp')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('penugasan')
            ->required()
            ->maxLength(255)
            ->default('induk'),
            Forms\Components\TextInput::make('jenjangpendidikan_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('jurusan_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('kode_sertifikasi')
            ->maxLength(5)
            ->default(null),
            Forms\Components\TextInput::make('No_sertifikasi_guru')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('tugas_tambahan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('bank_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('rek_bank')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('nama_kcp')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('rek_atas_nama')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('karpeg')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('karpas')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('kewarganegaraan')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('statuskeaktifan_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('keahlianlaboratorium_id')
            ->maxLength(36)
            ->default(null),
            Forms\Components\TextInput::make('lintang')
            ->maxLength(255)
            ->default(null),
            Forms\Components\TextInput::make('bujur')
            ->maxLength(255)
            ->default(null),
            Forms\Components\Textarea::make('maps')
            ->columnSpanFull(),
            Forms\Components\TextInput::make('status_data')
            ->numeric()
            ->default(null),
            Forms\Components\FileUpload::make('image')
            ->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('sekolah_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('gelar_depan')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('gelar_belakang')
            ->searchable(),
            Tables\Columns\TextColumn::make('jenis_kelamin')
            ->searchable(),
            Tables\Columns\TextColumn::make('tempat_lahir')
            ->searchable(),
            Tables\Columns\TextColumn::make('tanggal_lahir')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('nik')
            ->searchable(),
            Tables\Columns\TextColumn::make('nip')
            ->searchable(),
            Tables\Columns\TextColumn::make('pangkatgolongan_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('nuptk')
            ->searchable(),
            Tables\Columns\TextColumn::make('niy_nigk')
            ->searchable(),
            Tables\Columns\TextColumn::make('jenisptk_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('agama_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('alamat_jalan')
            ->searchable(),
            Tables\Columns\TextColumn::make('rt')
            ->searchable(),
            Tables\Columns\TextColumn::make('rw')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_dusun')
            ->searchable(),
            Tables\Columns\TextColumn::make('province_code')
            ->searchable(),
            Tables\Columns\TextColumn::make('city_code')
            ->searchable(),
            Tables\Columns\TextColumn::make('district_code')
            ->searchable(),
            Tables\Columns\TextColumn::make('village_code')
            ->searchable(),
            Tables\Columns\TextColumn::make('kode_pos')
            ->searchable(),
            Tables\Columns\TextColumn::make('no_telepon_rumah')
            ->searchable(),
            Tables\Columns\TextColumn::make('no_hp')
            ->searchable(),
            Tables\Columns\TextColumn::make('email')
            ->searchable(),
            Tables\Columns\TextColumn::make('sk_cpns')
            ->searchable(),
            Tables\Columns\TextColumn::make('tgl_cpns')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('sk_pengangkatan')
            ->searchable(),
            Tables\Columns\TextColumn::make('tgl_pengangkatan')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('lembagapengangkat_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('sumbergaji_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_ibu_kandung')
            ->searchable(),
            Tables\Columns\TextColumn::make('status_perkawinan')
            ->numeric()
            ->sortable(),
            Tables\Columns\TextColumn::make('nama_suami_istri')
            ->searchable(),
            Tables\Columns\TextColumn::make('nip_suami_istri')
            ->searchable(),
            Tables\Columns\TextColumn::make('pekerjaan_suami_istri_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('tmt_pns')
            ->date()
            ->sortable(),
            Tables\Columns\TextColumn::make('lisensi_kepala_sekolah')
            ->numeric()
            ->sortable(),
            Tables\Columns\TextColumn::make('npwp')
            ->searchable(),
            Tables\Columns\TextColumn::make('penugasan')
            ->searchable(),
            Tables\Columns\TextColumn::make('jenjangpendidikan_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('jurusan_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('kode_sertifikasi')
            ->searchable(),
            Tables\Columns\TextColumn::make('No_sertifikasi_guru')
            ->searchable(),
            Tables\Columns\TextColumn::make('tugas_tambahan')
            ->searchable(),
            Tables\Columns\TextColumn::make('bank_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('rek_bank')
            ->searchable(),
            Tables\Columns\TextColumn::make('nama_kcp')
            ->searchable(),
            Tables\Columns\TextColumn::make('rek_atas_nama')
            ->searchable(),
            Tables\Columns\TextColumn::make('karpeg')
            ->searchable(),
            Tables\Columns\TextColumn::make('karpas')
            ->searchable(),
            Tables\Columns\TextColumn::make('kewarganegaraan')
            ->searchable(),
            Tables\Columns\TextColumn::make('statuskeaktifan_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('keahlianlaboratorium_id')
            ->searchable(),
            Tables\Columns\TextColumn::make('lintang')
            ->searchable(),
            Tables\Columns\TextColumn::make('bujur')
            ->searchable(),
            Tables\Columns\TextColumn::make('status_data')
            ->numeric()
            ->sortable(),
            Tables\Columns\ImageColumn::make('image'),
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
                Tables\Filters\TrashedFilter::make(),
                ])
                ->actions([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    ])
                    ->bulkActions([
                        Tables\Actions\BulkActionGroup::make([
                            Tables\Actions\DeleteBulkAction::make(),
                            Tables\Actions\ForceDeleteBulkAction::make(),
                            Tables\Actions\RestoreBulkAction::make(),
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
                                    Excel::import(new ImportPtk, $data['file']);
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
                                'index' => Pages\ListPtks::route('/'),
                                'create' => Pages\CreatePtk::route('/create'),
                                'view' => Pages\ViewPtk::route('/{record}'),
                                'edit' => Pages\EditPtk::route('/{record}/edit'),
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