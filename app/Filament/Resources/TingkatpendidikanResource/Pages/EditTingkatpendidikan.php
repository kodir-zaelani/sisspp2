<?php

namespace App\Filament\Resources\TingkatpendidikanResource\Pages;

use App\Filament\Resources\TingkatpendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTingkatpendidikan extends EditRecord
{
    protected static string $resource = TingkatpendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
