<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaMajelisResource\Pages;
use App\Filament\Resources\AnggotaMajelisResource\RelationManagers;
use App\Models\AnggotaMajelis;
use App\Models\Majelis;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnggotaMajelisResource extends Resource
{
    protected static ?string $model = AnggotaMajelis::class;
    protected static ?string $navigationGroup = 'Majelis';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('majelis_id')
                    ->label('Majelis')
                    ->options(Majelis::all()->pluck('nama_majelis', 'id'))
                    ->searchable(),
                Select::make('jabatan')
                    ->options([
                        'ketua' => 'Ketua',
                        'wakil ketua' => 'Wakil Ketua',
                        'sekretaris' => 'Sekretaris',
                        'bendahara' => 'Bendahara',
                        'anggota' => 'Anggota',
                    ])->required(),
                TextInput::make('nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultGroup('majelis.nama_majelis')
            ->columns([
                TextColumn::make('majelis.nama_majelis'),
                TextColumn::make('jabatan'),
                TextColumn::make('nama'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListAnggotaMajelis::route('/'),
            'create' => Pages\CreateAnggotaMajelis::route('/create'),
            'edit' => Pages\EditAnggotaMajelis::route('/{record}/edit'),
        ];
    }
}
