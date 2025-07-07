<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Models\Transaksi;
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


class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\TextInput::make('mulai')
                    ->required(),
                Forms\Components\TextInput::make('akhir')
                    ->required(),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(100)
                    ->default(null),
                Forms\Components\TextInput::make('biaya')
                    ->numeric()
                    ->default(null),
                Select::make('kendaraan_id')
                    ->label('Kendaraan')
                    ->relationship('kendaraan', 'nopol') 
                    ->searchable()
                    ->required(),
                Select::make('area_parkir_id')
                    ->label('Area Parkir')
                    ->relationship('areaParkir', 'nama') 
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mulai'),
                Tables\Columns\TextColumn::make('akhir'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('biaya')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kendaraan.nopol') 
                    ->label('Kendaraan'),
                Tables\Columns\TextColumn::make('areaParkir.nama') 
                    ->label('Area Parkir'),
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
            'index' => Pages\ListTransaksi::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
    return 'Transaksi'; // Nama baru yang ingin ditampilkan di sidebar
    }
    public static function getPluralModelLabel(): string
    {
    return 'Transaksi'; // untuk judul jamak (judul halaman)
    }
    public static function getNavigationGroup(): ?string
    {
    return 'Parkir Kampus';
    }
}
