<?php

namespace App\Filament\Resources\FaunaResource\Pages;

use App\Filament\Resources\FaunaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateFauna extends CreateRecord
{
    protected static string $resource = FaunaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = auth('admin')->id(); 
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource():: getUrl('index');
    }
}
