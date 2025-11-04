<?php

namespace App\Filament\Resources\HobbyResource\Pages;

use App\Filament\Resources\HobbyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHobby extends ViewRecord
{
    protected static string $resource = HobbyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
