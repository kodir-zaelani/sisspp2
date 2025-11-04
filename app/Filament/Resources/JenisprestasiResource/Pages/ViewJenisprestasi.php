<?php

namespace App\Filament\Resources\JenisprestasiResource\Pages;

use App\Filament\Resources\JenisprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisprestasi extends ViewRecord
{
    protected static string $resource = JenisprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
