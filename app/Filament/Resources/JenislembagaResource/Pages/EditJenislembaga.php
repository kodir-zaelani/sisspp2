<?php

namespace App\Filament\Resources\JenislembagaResource\Pages;

use App\Filament\Resources\JenislembagaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenislembaga extends EditRecord
{
    protected static string $resource = JenislembagaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
