<?php

namespace App\Filament\Resources\MapelkurikulumResource\Pages;

use App\Filament\Resources\MapelkurikulumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMapelkurikulum extends EditRecord
{
    protected static string $resource = MapelkurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
