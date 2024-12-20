<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
// use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Support\Enums\VerticalAlignment;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required(),
                RichEditor::make('isi_berita')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\TextInput::make('penulis')
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->verticalAlignment(VerticalAlignment::Start),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->verticalAlignment(VerticalAlignment::Start)
                    ->wrap(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->verticalAlignment(VerticalAlignment::Start)
                    ->wrap(),
                Tables\Columns\TextColumn::make('judul')
                    ->verticalAlignment(VerticalAlignment::Start)
                    ->wrap(),
                Tables\Columns\TextColumn::make('penulis')
                    ->verticalAlignment(VerticalAlignment::Start),
                Tables\Columns\TextColumn::make('isi_berita')
                    ->label('Isi Berita')
                    ->formatStateUsing(fn($state) => Str::limit(strip_tags($state), 100))
                    ->verticalAlignment(VerticalAlignment::Start)
                    ->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->action(function (Model $record) {
                        Storage::disk('public')->delete($record->gambar);
                        $record->delete();
                        Notification::make()
                            ->title('Data Berhasil Dihapus')
                            ->success()
                            ->send();
                    }),


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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
