<?php

namespace App\Filament\Resources\JeniskeluarResource\Pages;

use App\Filament\Resources\JeniskeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJeniskeluar extends ViewRecord
{
    protected static string $resource = JeniskeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
