<?php

namespace App\Filament\Resources\PtkResource\Pages;

use App\Filament\Resources\PtkResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPtk extends ViewRecord
{
    protected static string $resource = PtkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
