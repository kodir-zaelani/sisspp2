<?php

namespace App\Filament\Resources\SumbergajiResource\Pages;

use App\Filament\Resources\SumbergajiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSumbergaji extends ViewRecord
{
    protected static string $resource = SumbergajiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
