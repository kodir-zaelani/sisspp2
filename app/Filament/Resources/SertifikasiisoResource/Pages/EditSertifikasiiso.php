<?php

namespace App\Filament\Resources\SertifikasiisoResource\Pages;

use App\Filament\Resources\SertifikasiisoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSertifikasiiso extends EditRecord
{
    protected static string $resource = SertifikasiisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
