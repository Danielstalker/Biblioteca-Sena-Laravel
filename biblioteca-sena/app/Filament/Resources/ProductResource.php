<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
// --- Añade estas líneas ---
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
// --- Fin de las líneas añadidas ---
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
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
            ->schema(components: [
                TextInput::make(name: 'name') // Ahora PHP sabe dónde encontrar TextInput
                    ->label(label: 'nombre')
                    ->required()
                    ->placeholder(placeholder: 'Nombre del libro')
                    ->maxLength(length: 100),
                TextInput::make(name: 'descriptions')
                    ->label(label: 'Descripción')
                    ->required()
                    ->placeholder(placeholder: 'Descripción del libro')
                    ->maxLength(length: 255),
                TextInput::make(name: 'editorial')
                    ->label(label: 'editorial')
                    ->required()
                    ->placeholder(placeholder: 'Editorial de libro')
                    ->maxLength(length: 8000),
                    TextInput::make(name: 'autor')
                    ->label(label: 'autor')
                    ->required()
                    ->placeholder(placeholder: 'Autor del libro')
                    ->maxLength(length: 255),             
                FileUpload::make(name: 'image') // También funcionará FileUpload
                    ->label(label: 'Imagen')
                    ->required()
                    ->placeholder(placeholder: 'Imagen del producto')
                    ->image()
                    ->directory(directory: 'products'),
                Select::make(name: 'category_id') // Y Select también
                    ->label(label: 'Categoría del libro')
                    ->required()
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->placeholder(placeholder: 'Seleccione una categoría'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns(components:[
                TextColumn::make(name: 'name')
                ->label(label: 'Nombre')
                ->searchable()
                ->sortable(),
               TextColumn::make('descriptions')
    ->label('Descripción')
    ->limit(100)
    ->tooltip(fn ($record) => $record->descriptions)
    ->searchable()
    ->sortable(),
                TextColumn::make(name: 'editorial')
                ->label(label: 'Editorial')
                ->searchable()
                ->sortable(),
                TextColumn::make('category.name')
                ->label(label: 'Categoria')
                ->searchable()
                ->sortable(),
                ImageColumn::make(name: 'image')
                ->label(label: 'Imagen')
                ->Sortable()
            ])
            ->filters(filters:[
                //
            ])
            ->actions(actions:[
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
