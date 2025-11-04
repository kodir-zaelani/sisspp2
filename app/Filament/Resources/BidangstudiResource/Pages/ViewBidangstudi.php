<?php

namespace App\Filament\Resources\BidangstudiResource\Pages;

use App\Filament\Resources\BidangstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBidangstudi extends ViewRecord
{
    protected static string $resource = BidangstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
