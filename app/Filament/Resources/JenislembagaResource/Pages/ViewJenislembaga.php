<?php

namespace App\Filament\Resources\JenislembagaResource\Pages;

use App\Filament\Resources\JenislembagaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenislembaga extends ViewRecord
{
    protected static string $resource = JenislembagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
