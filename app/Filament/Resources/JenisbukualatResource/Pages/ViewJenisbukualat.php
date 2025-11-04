<?php

namespace App\Filament\Resources\JenisbukualatResource\Pages;

use App\Filament\Resources\JenisbukualatResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenisbukualat extends ViewRecord
{
    protected static string $resource = JenisbukualatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
