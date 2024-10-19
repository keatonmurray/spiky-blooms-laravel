<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopResource\Pages;
use App\Filament\Resources\ShopResource\RelationManagers;
use App\Models\Shop;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShopResource extends Resource
{
    protected static ?string $model = Shop::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Products'; 

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
    
            Forms\Components\TextInput::make('quantity')
                ->label('Quantity')
                ->numeric()
                ->minValue(0),

            Forms\Components\TextInput::make('sku')
                ->label('SKU'),

            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->rows(5)
                ->columnSpanFull(),

            Forms\Components\Repeater::make('variations')
                ->label('Variations')
                ->schema([
                    Forms\Components\TextInput::make('value')
                        ->label('Variation')
                        ->required(),
                ]),

            Forms\Components\FileUpload::make('image')
                ->label('Product Image')
                ->image(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('price')->label('Price')->searchable(),
                Tables\Columns\TextColumn::make('quantity')->label('Quantity'),
                Tables\Columns\TextColumn::make('sku')->label('SKU')->searchable(),
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

    protected function getEmptyState(): array
    {
        return [
            'heading' => 'No products found',
            'description' => 'It seems you haven’t added any categories yet. Please create some to get started.',
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShops::route('/'),
            'create' => Pages\CreateShop::route('/create'),
            'edit' => Pages\EditShop::route('/{record}/edit'),
        ];
    }
}
