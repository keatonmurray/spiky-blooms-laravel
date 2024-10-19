<?php

namespace App\Filament\Resources\FeaturedProductsResource\Pages;

use App\Filament\Resources\FeaturedProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedProducts extends CreateRecord
{
    protected static string $resource = FeaturedProductsResource::class;
}
