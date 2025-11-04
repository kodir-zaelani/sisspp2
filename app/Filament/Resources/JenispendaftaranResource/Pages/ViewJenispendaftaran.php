<?php

namespace App\Filament\Resources\JenispendaftaranResource\Pages;

use App\Filament\Resources\JenispendaftaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenispendaftaran extends ViewRecord
{
    protected static string $resource = JenispendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
