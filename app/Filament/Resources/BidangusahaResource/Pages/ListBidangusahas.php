<?php

namespace App\Filament\Resources\BidangusahaResource\Pages;

use App\Filament\Resources\BidangusahaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBidangusahas extends ListRecords
{
    protected static string $resource = BidangusahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
