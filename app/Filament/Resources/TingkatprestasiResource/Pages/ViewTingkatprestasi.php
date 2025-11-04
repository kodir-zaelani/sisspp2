<?php

namespace App\Filament\Resources\TingkatprestasiResource\Pages;

use App\Filament\Resources\TingkatprestasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTingkatprestasi extends ViewRecord
{
    protected static string $resource = TingkatprestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
