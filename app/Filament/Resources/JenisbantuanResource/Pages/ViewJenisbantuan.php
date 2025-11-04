<?php

namespace App\Filament\Resources\JenisbantuanResource\Pages;

use App\Filament\Resources\JenisbantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisbantuan extends ViewRecord
{
    protected static string $resource = JenisbantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
