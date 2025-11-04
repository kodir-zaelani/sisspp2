<?php

namespace App\Filament\Resources\TahunajaranResource\Pages;

use App\Filament\Resources\TahunajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTahunajaran extends ViewRecord
{
    protected static string $resource = TahunajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
