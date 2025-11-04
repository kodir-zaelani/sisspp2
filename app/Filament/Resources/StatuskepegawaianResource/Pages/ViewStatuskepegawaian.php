<?php

namespace App\Filament\Resources\StatuskepegawaianResource\Pages;

use App\Filament\Resources\StatuskepegawaianResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStatuskepegawaian extends ViewRecord
{
    protected static string $resource = StatuskepegawaianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
