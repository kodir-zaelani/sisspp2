<?php

namespace App\Filament\Resources\AlasanlayakpipResource\Pages;

use App\Filament\Resources\AlasanlayakpipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlasanlayakpips extends ListRecords
{
    protected static string $resource = AlasanlayakpipResource::class;
    protected ?string $heading = 'Alasan Layak PIP';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}