<?php

namespace App\Filament\Resources\JabatanfungsionalResource\Pages;

use App\Filament\Resources\JabatanfungsionalResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJabatanfungsional extends ViewRecord
{
    protected static string $resource = JabatanfungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
