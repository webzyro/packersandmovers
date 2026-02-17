<?php

namespace App\Filament\Resources\CityPages;

use App\Filament\Resources\CityPages\Pages\CreateCityPage;
use App\Filament\Resources\CityPages\Pages\EditCityPage;
use App\Filament\Resources\CityPages\Pages\ListCityPages;
use App\Filament\Resources\CityPages\Schemas\CityPageForm;
use App\Filament\Resources\CityPages\Tables\CityPagesTable;
use App\Models\CityPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CityPageResource extends Resource
{
    protected static ?string $model = CityPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CityPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CityPagesTable::configure($table);
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
            'index' => ListCityPages::route('/'),
            'create' => CreateCityPage::route('/create'),
            'edit' => EditCityPage::route('/{record}/edit'),
        ];
    }
}
