<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Grid::make()
            ->columns(2)
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label('Product Name')
                ->required(),

                Forms\Components\TextInput::make('price')
                ->label('Price')
                ->required()
                ->numeric() 
                ->minValue(0),

                Forms\Components\TextInput::make('availability')
                ->label('Availability')
                ->required(),

                Forms\Components\TextInput::make('categories')
                ->label('Category')
                ->required(),

                Forms\Components\TextInput::make('type')
                ->label('Type')
                ->required(),

                Forms\Components\TextInput::make('style')
                ->label('Style')
                ->required(),

                Forms\Components\TextInput::make('quantity')
                ->label('Quantity')
                ->required(),

                Forms\Components\TextInput::make('sku')
                ->label('SKU')
                ->required()
                ->required()
                ->unique() 
                ->maxLength(10),

                Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required()
                ->rows(5)
                ->columnSpanFull(),

                Forms\Components\Repeater::make('variations')
                ->label('Variations')
                ->required()
                ->schema([
                    Forms\Components\TextInput::make('value')
                        ->label('Variation')
                        ->required(),
                ]),

                Forms\Components\FileUpload::make('image')
                ->label('Product Image')
                ->image()
                ->required()
                ->preserveFilenames()
                ->maxSize(1024)
                ->disk('public')
                ->directory('products')
                ->enableOpen()
                ->multiple()
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\ImageColumn::make('image') 
                    ->label('Product Image')
                    ->disk('public')
                    ->height(50) 
                    ->width(50), 
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('sku')->label('SKU')->searchable(),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\TextColumn::make('description')->label('Description')->limit(50)->searchable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
