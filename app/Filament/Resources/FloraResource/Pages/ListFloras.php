<?php

namespace App\Filament\Resources\FloraResource\Pages;

use App\Filament\Resources\FloraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFloras extends ListRecords
{
    protected static string $resource = FloraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label("Add Data")
            ->icon("heroicon-m-plus"), 
        ];
    }
}
