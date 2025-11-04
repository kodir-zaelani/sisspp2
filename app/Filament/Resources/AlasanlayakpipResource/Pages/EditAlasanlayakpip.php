<?php

namespace App\Filament\Resources\AlasanlayakpipResource\Pages;

use App\Filament\Resources\AlasanlayakpipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlasanlayakpip extends EditRecord
{
    protected static string $resource = AlasanlayakpipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
