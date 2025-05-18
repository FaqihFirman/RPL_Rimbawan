<?php

namespace App\Filament\Resources\FaunaResource\Pages;

use App\Filament\Resources\FaunaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaunas extends ListRecords
{
    protected static string $resource = FaunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label("Add Data")
            ->icon("heroicon-m-plus"), 
        ];
    }


}
