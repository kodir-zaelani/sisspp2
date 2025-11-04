<?php

namespace App\Filament\Resources\GelarakademikResource\Pages;

use App\Filament\Resources\GelarakademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGelarakademik extends EditRecord
{
    protected static string $resource = GelarakademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
