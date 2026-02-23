<?php

namespace App\Filament\Resources\VideoTestimonials;

use App\Filament\Resources\VideoTestimonials\Pages\CreateVideoTestimonial;
use App\Filament\Resources\VideoTestimonials\Pages\EditVideoTestimonial;
use App\Filament\Resources\VideoTestimonials\Pages\ListVideoTestimonials;
use App\Filament\Resources\VideoTestimonials\Schemas\VideoTestimonialForm;
use App\Filament\Resources\VideoTestimonials\Tables\VideoTestimonialsTable;
use App\Models\VideoTestimonial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VideoTestimonialResource extends Resource
{
    protected static ?string $model = VideoTestimonial::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VideoTestimonialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideoTestimonialsTable::configure($table);
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
            'index' => ListVideoTestimonials::route('/'),
            'create' => CreateVideoTestimonial::route('/create'),
            'edit' => EditVideoTestimonial::route('/{record}/edit'),
        ];
    }
}
