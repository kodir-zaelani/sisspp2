<?php

namespace App\Filament\Resources\JabatantugasptkResource\Pages;

use App\Filament\Resources\JabatantugasptkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJabatantugasptk extends ViewRecord
{
    protected static string $resource = JabatantugasptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
