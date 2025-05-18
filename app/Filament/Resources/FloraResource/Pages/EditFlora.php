<?php

namespace App\Filament\Resources\FloraResource\Pages;

use App\Filament\Resources\FloraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFlora extends EditRecord
{
    protected static string $resource = FloraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
