<?php

namespace App\Filament\Resources\LatestMoves;

use App\Filament\Resources\LatestMoves\Pages\CreateLatestMove;
use App\Filament\Resources\LatestMoves\Pages\EditLatestMove;
use App\Filament\Resources\LatestMoves\Pages\ListLatestMoves;
use App\Filament\Resources\LatestMoves\Schemas\LatestMoveForm;
use App\Filament\Resources\LatestMoves\Tables\LatestMovesTable;
use App\Models\LatestMove;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LatestMoveResource extends Resource
{
    protected static ?string $model = LatestMove::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LatestMoveForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LatestMovesTable::configure($table);
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
            'index' => ListLatestMoves::route('/'),
            'create' => CreateLatestMove::route('/create'),
            'edit' => EditLatestMove::route('/{record}/edit'),
        ];
    }
}
