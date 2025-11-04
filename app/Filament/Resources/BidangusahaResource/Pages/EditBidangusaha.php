<?php

namespace App\Filament\Resources\BidangusahaResource\Pages;

use App\Filament\Resources\BidangusahaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBidangusaha extends EditRecord
{
    protected static string $resource = BidangusahaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
