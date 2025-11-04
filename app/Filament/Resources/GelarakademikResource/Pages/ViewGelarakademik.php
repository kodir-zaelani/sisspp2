<?php

namespace App\Filament\Resources\GelarakademikResource\Pages;

use App\Filament\Resources\GelarakademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGelarakademik extends ViewRecord
{
    protected static string $resource = GelarakademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
