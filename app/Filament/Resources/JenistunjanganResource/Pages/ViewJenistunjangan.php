<?php

namespace App\Filament\Resources\JenistunjanganResource\Pages;

use App\Filament\Resources\JenistunjanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJenistunjangan extends ViewRecord
{
    protected static string $resource = JenistunjanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
