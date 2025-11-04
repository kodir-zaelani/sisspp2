<?php

namespace App\Filament\Resources\KebutuhankhususResource\Pages;

use App\Filament\Resources\KebutuhankhususResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKebutuhankhusus extends ViewRecord
{
    protected static string $resource = KebutuhankhususResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
