<?php

namespace App\Filament\Resources\SumberlistrikResource\Pages;

use App\Filament\Resources\SumberlistrikResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSumberlistrik extends ViewRecord
{
    protected static string $resource = SumberlistrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
