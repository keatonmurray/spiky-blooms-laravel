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

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Products'; 

    public static function getNavigationSort(): ?int
    {
        return 1;
    }
    
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->label('Product Name'),
    
            Forms\Components\TextInput::make('price')
                ->label('Price')
                ->numeric()
                ->minValue(0),
    
            Forms\Components\Textarea::make('description')
                ->label('Description'),
    
            Forms\Components\TextInput::make('quantity')
                ->label('Quantity')
                ->numeric()
                ->minValue(0),
    
            Forms\Components\TextInput::make('sku')
                ->label('SKU'),
    
            // Forms\Components\FileUpload::make('image')
            //     ->label('Product Image')
            //     ->image(),
    
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
    
            // Forms\Components\TagsInput::make('tags')
            //     ->nullable()
            //     ->label('Tags'),
    
            Forms\Components\Toggle::make('active')
                ->label('Active')
                ->default(true),
        ]);
    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Price')
                    ->sortable(),

                    Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('quantity')
                    ->label('Quantity')
                    ->sortable(),

                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->sortable(),

                // Tables\Columns\ImageColumn::make('image')
                //     ->label('Product Image')
                //     ->disk('public'),

                Tables\Columns\BooleanColumn::make('on_sale')
                    ->label('On Sale')
                    ->sortable(),

                Tables\Columns\TextColumn::make('sale_price')
                    ->label('Sale Price')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => $state ? '$' . number_format($state, 2) : 'N/A'), // Format as currency

                Tables\Columns\TextColumn::make('attributes')
                    ->label('Attributes')
                    ->sortable(),

                // Tables\Columns\TextColumn::make('tags')
                //     ->label('Tags')
                //     ->sortable(),

                Tables\Columns\BooleanColumn::make('active')
                    ->label('Active')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn (Builder $query) => $query->where('active', true))
                    ->label('Active Products'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(), 
                Tables\Actions\DeleteAction::make(),
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
