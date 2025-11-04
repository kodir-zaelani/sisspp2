<?php

namespace App\Filament\Resources\TingkatpenghargaanResource\Pages;

use App\Filament\Resources\TingkatpenghargaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTingkatpenghargaan extends EditRecord
{
    protected static string $resource = TingkatpenghargaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
