<?php

namespace App\Filament\Resources\WishlistsResource\Pages;

use App\Filament\Resources\WishlistsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWishlists extends EditRecord
{
    protected static string $resource = WishlistsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
