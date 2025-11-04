<?php

namespace App\Filament\Resources\BidangusahaResource\Pages;

use App\Filament\Resources\BidangusahaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBidangusaha extends ViewRecord
{
    protected static string $resource = BidangusahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
