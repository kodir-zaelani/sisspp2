<?php

namespace App\Filament\Resources\JenistunjanganResource\Pages;

use App\Filament\Resources\JenistunjanganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenistunjangans extends ListRecords
{
    protected static string $resource = JenistunjanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
