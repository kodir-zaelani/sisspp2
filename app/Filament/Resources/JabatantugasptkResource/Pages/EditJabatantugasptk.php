<?php

namespace App\Filament\Resources\JabatantugasptkResource\Pages;

use App\Filament\Resources\JabatantugasptkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJabatantugasptk extends EditRecord
{
    protected static string $resource = JabatantugasptkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
