<?php

namespace App\Filament\Resources\SertifikasiisoResource\Pages;

use App\Filament\Resources\SertifikasiisoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSertifikasiiso extends ViewRecord
{
    protected static string $resource = SertifikasiisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
