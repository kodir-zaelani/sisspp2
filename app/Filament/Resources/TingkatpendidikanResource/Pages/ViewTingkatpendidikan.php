<?php

namespace App\Filament\Resources\TingkatpendidikanResource\Pages;

use App\Filament\Resources\TingkatpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTingkatpendidikan extends ViewRecord
{
    protected static string $resource = TingkatpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
