<?php

namespace App\Filament\Resources\JabatanfungsionalResource\Pages;

use App\Filament\Resources\JabatanfungsionalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJabatanfungsional extends EditRecord
{
    protected static string $resource = JabatanfungsionalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
