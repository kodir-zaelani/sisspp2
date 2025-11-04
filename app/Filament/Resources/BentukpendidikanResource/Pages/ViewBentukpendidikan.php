<?php

namespace App\Filament\Resources\BentukpendidikanResource\Pages;

use App\Filament\Resources\BentukpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBentukpendidikan extends ViewRecord
{
    protected static string $resource = BentukpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
