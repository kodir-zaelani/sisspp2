<?php

namespace App\Filament\Resources\AksesinternetResource\Pages;

use App\Filament\Resources\AksesinternetResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAksesinternet extends ViewRecord
{
    protected static string $resource = AksesinternetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
