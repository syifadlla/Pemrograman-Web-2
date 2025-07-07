<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AreaParkirResource\Pages;
use App\Models\AreaParkir;
use App\Models\Kampus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;


class AreaParkirResource extends Resource
{
    protected static ?string $model = AreaParkir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(30),

                TextInput::make('kapasitas')
                    ->required()
                    ->numeric(),

                Textarea::make('keterangan')
                    ->maxLength(45),

                Select::make('kampus_id')
                    ->relationship('kampus', 'nama')
                    ->label('Kampus')
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('kapasitas'),
                TextColumn::make('keterangan'),
                TextColumn::make('kampus.nama')->label('Kampus')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
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
            'index' => Pages\ListAreaParkir::route('/'),
            'create' => Pages\CreateAreaParkir::route('/create'),
            'edit' => Pages\EditAreaParkir::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
    return 'Area Parkir'; // Nama baru yang ingin ditampilkan di sidebar
    }
    
    public static function getPluralModelLabel(): string
    {
    return 'Area Parkir'; // untuk judul jamak (judul halaman)
    }
    public static function getNavigationGroup(): ?string
    {
    return 'Parkir Kampus';
    }
    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole('superadmin');
    }

}
