<?php

namespace App\Filament\Resources\WishlistsResource\Pages;

use App\Filament\Resources\WishlistsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWishlists extends ListRecords
{
    protected static string $resource = WishlistsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
