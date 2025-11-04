<?php

namespace App\Filament\Resources\SumberairResource\Pages;

use App\Filament\Resources\SumberairResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSumberair extends ViewRecord
{
    protected static string $resource = SumberairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
