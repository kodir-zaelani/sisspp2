<?php

namespace App\Filament\Resources\JenispendaftaranResource\Pages;

use App\Filament\Resources\JenispendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenispendaftaran extends EditRecord
{
    protected static string $resource = JenispendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
