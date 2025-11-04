<?php

namespace App\Filament\Resources\KebutuhankhususResource\Pages;

use App\Filament\Resources\KebutuhankhususResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKebutuhankhusus extends EditRecord
{
    protected static string $resource = KebutuhankhususResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
