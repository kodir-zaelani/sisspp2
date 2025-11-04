<?php

namespace App\Filament\Resources\JenisbantuanResource\Pages;

use App\Filament\Resources\JenisbantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisbantuan extends EditRecord
{
    protected static string $resource = JenisbantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
