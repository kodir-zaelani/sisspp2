<?php

namespace App\Filament\Resources\PenghasilanortuResource\Pages;

use App\Filament\Resources\PenghasilanortuResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPenghasilanortu extends ViewRecord
{
    protected static string $resource = PenghasilanortuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
