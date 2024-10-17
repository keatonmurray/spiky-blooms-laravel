<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Product Name'),
    
            Forms\Components\TextInput::make('price')
                ->required()
                ->label('Price')
                ->numeric()
                ->minValue(0),
    
            Forms\Components\Textarea::make('description')
                ->required()
                ->label('Description'),
    
            Forms\Components\TextInput::make('quantity')
                ->required()
                ->label('Quantity')
                ->numeric()
                ->minValue(0),
    
            Forms\Components\TextInput::make('sku')
                ->required()
                ->label('SKU'),
    
            Forms\Components\FileUpload::make('image')
                ->label('Product Image')
                ->image()
                ->required(),
    
            Forms\Components\Toggle::make('on_sale')
                ->label('On Sale')
                ->default(false),
    
            Forms\Components\TextInput::make('sale_price')
                ->nullable()
                ->label('Sale Price')
                ->numeric()
                ->minValue(0),
    
            Forms\Components\TextInput::make('attributes')
                ->nullable()
                ->label('Attributes'),
    
            Forms\Components\TagsInput::make('tags')
                ->nullable()
                ->label('Tags'),
    
            Forms\Components\Toggle::make('active')
                ->label('Active')
                ->default(true),
        ]);
    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
