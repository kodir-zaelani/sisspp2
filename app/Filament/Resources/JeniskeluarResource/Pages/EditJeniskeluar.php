<?php

namespace App\Filament\Resources\JeniskeluarResource\Pages;

use App\Filament\Resources\JeniskeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJeniskeluar extends EditRecord
{
    protected static string $resource = JeniskeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
