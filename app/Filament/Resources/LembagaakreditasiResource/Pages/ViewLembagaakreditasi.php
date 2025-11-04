<?php

namespace App\Filament\Resources\LembagaakreditasiResource\Pages;

use App\Filament\Resources\LembagaakreditasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLembagaakreditasi extends ViewRecord
{
    protected static string $resource = LembagaakreditasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
