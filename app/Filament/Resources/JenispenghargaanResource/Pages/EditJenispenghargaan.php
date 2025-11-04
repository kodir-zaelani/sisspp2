<?php

namespace App\Filament\Resources\JenispenghargaanResource\Pages;

use App\Filament\Resources\JenispenghargaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenispenghargaan extends EditRecord
{
    protected static string $resource = JenispenghargaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
