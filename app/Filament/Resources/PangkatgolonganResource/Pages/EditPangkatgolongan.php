<?php

namespace App\Filament\Resources\PangkatgolonganResource\Pages;

use App\Filament\Resources\PangkatgolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPangkatgolongan extends EditRecord
{
    protected static string $resource = PangkatgolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
