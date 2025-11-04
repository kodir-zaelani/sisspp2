<?php

namespace App\Filament\Resources\CitacitaResource\Pages;

use App\Filament\Resources\CitacitaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCitacita extends EditRecord
{
    protected static string $resource = CitacitaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
