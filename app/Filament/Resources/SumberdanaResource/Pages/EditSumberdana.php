<?php

namespace App\Filament\Resources\SumberdanaResource\Pages;

use App\Filament\Resources\SumberdanaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberdana extends EditRecord
{
    protected static string $resource = SumberdanaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
