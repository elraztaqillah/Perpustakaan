<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                // berdasarkan nama di category 

                Forms\Components\TextInput::make('name')
                    ->required(),
                     Forms\Components\FileUpload::make('image')
                    ->required(),
                     Forms\Components\TextInput::make('publisher')
                    ->required(),
                     Forms\Components\TextInput::make('author')
                    ->required(),
                     Forms\Components\TextInput::make('publication_year')
                    ->required(),
                     Forms\Components\TextInput::make('isbn')
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('category.name'),
                    Tables\Columns\TextColumn::make('name'),
                    Tables\Columns\ImageColumn::make('image'),
                    Tables\Columns\TextColumn::make('publisher'),
                    Tables\Columns\TextColumn::make('author'),
                    Tables\Columns\TextColumn::make('publication_year'),
                    Tables\Columns\TextColumn::make('isbn'),                    


            ])
            ->filters([
                      Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name')
                   
            ])
            ->actions([
                     Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
