<?php

namespace App\Filament\Resources\BentukpendidikanResource\Pages;

use App\Filament\Resources\BentukpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBentukpendidikan extends EditRecord
{
    protected static string $resource = BentukpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
