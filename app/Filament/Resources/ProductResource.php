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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            FileUpload::make('image')->label('Image')->required()->rules([
                'dimensions:min_width=60,min_height=60' 
            ]),
            TextInput::make('name')->required(),
            
            Select::make('category_id')
                ->label('Category')
                ->relationship('category', 'name')
                ->required(),
            TextInput::make('price')->numeric()->required(),
            
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('image')->label('Image')
            ->width(100)->height(100),
            TextColumn::make('name')->label('Name')->sortable(),
            TextColumn::make('category.name')->label('Category')->sortable(),
            TextColumn::make('price')->label('Price')->sortable(),
          
        ])
        ->filters([
            SelectFilter::make('category')->relationship('category', 'name'),
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
