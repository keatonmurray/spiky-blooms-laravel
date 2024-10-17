<?php

namespace App\Filament\Resources\CatalogsResource\Pages;

use App\Filament\Resources\CatalogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCatalogs extends EditRecord
{
    protected static string $resource = CatalogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
