<?php

namespace App\Filament\Resources\StatusanakResource\Pages;

use App\Filament\Resources\StatusanakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStatusanak extends EditRecord
{
    protected static string $resource = StatusanakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
