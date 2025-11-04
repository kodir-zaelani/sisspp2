<?php

namespace App\Filament\Resources\SumberlistrikResource\Pages;

use App\Filament\Resources\SumberlistrikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberlistrik extends EditRecord
{
    protected static string $resource = SumberlistrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
