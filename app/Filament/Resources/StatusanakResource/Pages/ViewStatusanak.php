<?php

namespace App\Filament\Resources\StatusanakResource\Pages;

use App\Filament\Resources\StatusanakResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatusanak extends ViewRecord
{
    protected static string $resource = StatusanakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
