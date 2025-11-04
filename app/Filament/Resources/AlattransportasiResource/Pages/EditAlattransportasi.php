<?php

namespace App\Filament\Resources\AlattransportasiResource\Pages;

use App\Filament\Resources\AlattransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlattransportasi extends EditRecord
{
    protected static string $resource = AlattransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
