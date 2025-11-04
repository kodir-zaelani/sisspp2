<?php

namespace App\Filament\Resources\SumberairResource\Pages;

use App\Filament\Resources\SumberairResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberair extends EditRecord
{
    protected static string $resource = SumberairResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
