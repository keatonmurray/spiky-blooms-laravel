<?php

namespace App\Filament\Resources\CatalogsResource\Pages;

use App\Filament\Resources\CatalogsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatalogs extends ListRecords
{
    protected static string $resource = CatalogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
