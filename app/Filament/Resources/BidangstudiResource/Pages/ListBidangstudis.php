<?php

namespace App\Filament\Resources\BidangstudiResource\Pages;

use App\Filament\Resources\BidangstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBidangstudis extends ListRecords
{
    protected static string $resource = BidangstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
