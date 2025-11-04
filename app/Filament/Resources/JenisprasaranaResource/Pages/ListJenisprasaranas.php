<?php

namespace App\Filament\Resources\JenisprasaranaResource\Pages;

use App\Filament\Resources\JenisprasaranaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisprasaranas extends ListRecords
{
    protected static string $resource = JenisprasaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
