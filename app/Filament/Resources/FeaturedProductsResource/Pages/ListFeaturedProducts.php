<?php

namespace App\Filament\Resources\FeaturedProductsResource\Pages;

use App\Filament\Resources\FeaturedProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedProducts extends ListRecords
{
    protected static string $resource = FeaturedProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
