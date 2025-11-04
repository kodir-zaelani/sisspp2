<?php

namespace App\Filament\Resources\SumberdanaResource\Pages;

use App\Filament\Resources\SumberdanaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSumberdana extends ViewRecord
{
    protected static string $resource = SumberdanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
