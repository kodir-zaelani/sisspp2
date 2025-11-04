<?php

namespace App\Filament\Resources\JenispenghargaanResource\Pages;

use App\Filament\Resources\JenispenghargaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenispenghargaan extends ViewRecord
{
    protected static string $resource = JenispenghargaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
