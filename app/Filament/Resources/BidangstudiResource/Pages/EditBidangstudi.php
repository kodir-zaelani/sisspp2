<?php

namespace App\Filament\Resources\BidangstudiResource\Pages;

use App\Filament\Resources\BidangstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBidangstudi extends EditRecord
{
    protected static string $resource = BidangstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
