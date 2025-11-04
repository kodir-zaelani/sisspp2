<?php

namespace App\Filament\Resources\AlasanlayakpipResource\Pages;

use App\Filament\Resources\AlasanlayakpipResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAlasanlayakpip extends ViewRecord
{
    protected static string $resource = AlasanlayakpipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
