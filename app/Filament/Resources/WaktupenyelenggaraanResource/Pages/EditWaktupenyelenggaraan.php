<?php

namespace App\Filament\Resources\WaktupenyelenggaraanResource\Pages;

use App\Filament\Resources\WaktupenyelenggaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWaktupenyelenggaraan extends EditRecord
{
    protected static string $resource = WaktupenyelenggaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
