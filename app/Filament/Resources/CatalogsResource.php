<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogsResource\Pages;
use App\Filament\Resources\CatalogsResource\RelationManagers;
use App\Models\Catalog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogsResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationParentItem = 'Products'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('catalog_name')
                    ->label('Catalog Name'),
                
                Forms\Components\Select::make('price_range')
                    ->label('Price Range')
                    ->options([
                        '$10 - $20' => '$10 - $20',
                        '$21 - $40' => '$21 - $40',
                        '$41 - $60' => '$41 - $60',
                        '$61 - $70' => '$61 - $70',
                    ]),
    
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('catalog_name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('price_range')->label('Price Range')->searchable(),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCatalogs::route('/'),
            'create' => Pages\CreateCatalogs::route('/create'),
            'edit' => Pages\EditCatalogs::route('/{record}/edit'),
        ];
    }
}
