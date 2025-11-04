<?php

namespace App\Filament\Resources\JenjangpendidikanResource\Pages;

use App\Filament\Resources\JenjangpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenjangpendidikan extends ViewRecord
{
    protected static string $resource = JenjangpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
