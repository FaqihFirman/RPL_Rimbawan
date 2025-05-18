<?php

namespace App\Filament\Resources\FloraResource\Pages;

use App\Filament\Resources\FloraResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFlora extends CreateRecord
{
    protected static string $resource = FloraResource::class;

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
