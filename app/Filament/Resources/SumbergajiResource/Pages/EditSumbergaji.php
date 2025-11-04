<?php

namespace App\Filament\Resources\SumbergajiResource\Pages;

use App\Filament\Resources\SumbergajiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumbergaji extends EditRecord
{
    protected static string $resource = SumbergajiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
