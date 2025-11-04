<?php

namespace App\Filament\Resources\LembagaakreditasiResource\Pages;

use App\Filament\Resources\LembagaakreditasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLembagaakreditasi extends EditRecord
{
    protected static string $resource = LembagaakreditasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
