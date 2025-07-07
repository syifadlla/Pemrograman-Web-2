<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Filament\Resources\KendaraanResource\RelationManagers;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;


class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('merk')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('pemilik')
                    ->required()
                    ->maxLength(40),
                Forms\Components\TextInput::make('nopol')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('thn_beli')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('deskripsi')
                    ->maxLength(200)
                    ->default(null),
                Forms\Components\TextInput::make('jenis_kendaraan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('jenis_kendaraan_id')
                ->relationship('jenis', 'nama')
                ->label('Jenis Kendaraan')
                ->required()
                ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('merk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pemilik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nopol')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thn_beli')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_kendaraan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
    return 'Kendaraan'; // Nama baru yang ingin ditampilkan di sidebar
    }
    public static function getPluralModelLabel(): string
    {
    return 'Kendaraan'; // untuk judul jamak (judul halaman)
    }
    public static function getNavigationGroup(): ?string
    {
    return 'Parkir Kampus';
    }
}
