<?php

namespace App\Filament\Resources\JenisbukualatResource\Pages;

use App\Filament\Resources\JenisbukualatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisbukualat extends EditRecord
{
    protected static string $resource = JenisbukualatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
