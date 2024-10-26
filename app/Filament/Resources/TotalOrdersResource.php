<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TotalOrdersResource\Pages;
use App\Filament\Resources\TotalOrdersResource\RelationManagers;
use App\Models\TotalOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TotalOrdersResource extends Resource
{
    protected static ?string $model = TotalOrder::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationParentItem = 'Products'; 


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Name')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email Address')->searchable(),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number')->searchable(),
                Tables\Columns\TextColumn::make('order_total')->label('Order Total')
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
            'index' => Pages\ListTotalOrders::route('/'),
            'create' => Pages\CreateTotalOrders::route('/create'),
            'edit' => Pages\EditTotalOrders::route('/{record}/edit'),
        ];
    }
}
