<?php

namespace App\Filament\Resources\TingkatpenghargaanResource\Pages;

use App\Filament\Resources\TingkatpenghargaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTingkatpenghargaan extends ViewRecord
{
    protected static string $resource = TingkatpenghargaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
