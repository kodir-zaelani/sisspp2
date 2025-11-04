<?php

namespace App\Filament\Resources\PangkatgolonganResource\Pages;

use App\Filament\Resources\PangkatgolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPangkatgolongan extends ViewRecord
{
    protected static string $resource = PangkatgolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
