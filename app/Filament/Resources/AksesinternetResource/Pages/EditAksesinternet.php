<?php

namespace App\Filament\Resources\AksesinternetResource\Pages;

use App\Filament\Resources\AksesinternetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksesinternet extends EditRecord
{
    protected static string $resource = AksesinternetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
