<?php

namespace App\Filament\Resources\MatapelajaranResource\Pages;

use App\Filament\Resources\MatapelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMatapelajaran extends ViewRecord
{
    protected static string $resource = MatapelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
