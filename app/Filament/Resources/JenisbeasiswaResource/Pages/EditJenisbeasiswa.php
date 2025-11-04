<?php

namespace App\Filament\Resources\JenisbeasiswaResource\Pages;

use App\Filament\Resources\JenisbeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisbeasiswa extends EditRecord
{
    protected static string $resource = JenisbeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
