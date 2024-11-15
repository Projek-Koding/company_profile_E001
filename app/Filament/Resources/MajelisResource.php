<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MajelisResource\Pages;
use App\Filament\Resources\MajelisResource\RelationManagers;
use App\Models\Majelis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\VerticalAlignment;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MajelisResource extends Resource
{
    protected static ?string $model = Majelis::class;
    protected static ?string $navigationGroup = 'Majelis';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_majelis')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                TextColumn::make('nama_majelis')
                    ->verticalAlignment(VerticalAlignment::Start),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListMajelis::route('/'),
            'create' => Pages\CreateMajelis::route('/create'),
            'edit' => Pages\EditMajelis::route('/{record}/edit'),
        ];
    }
}
