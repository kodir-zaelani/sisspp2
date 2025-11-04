<?php

namespace App\Filament\Resources\StatuskepemilikanResource\Pages;

use App\Filament\Resources\StatuskepemilikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatuskepemilikan extends ViewRecord
{
    protected static string $resource = StatuskepemilikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
