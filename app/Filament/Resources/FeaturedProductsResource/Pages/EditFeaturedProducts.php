<?php

namespace App\Filament\Resources\FeaturedProductsResource\Pages;

use App\Filament\Resources\FeaturedProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedProducts extends EditRecord
{
    protected static string $resource = FeaturedProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
