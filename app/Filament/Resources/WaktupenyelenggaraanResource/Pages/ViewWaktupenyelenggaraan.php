<?php

namespace App\Filament\Resources\WaktupenyelenggaraanResource\Pages;

use App\Filament\Resources\WaktupenyelenggaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewWaktupenyelenggaraan extends ViewRecord
{
    protected static string $resource = WaktupenyelenggaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
