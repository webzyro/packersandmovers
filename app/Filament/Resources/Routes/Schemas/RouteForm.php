<?php

namespace App\Filament\Resources\Routes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class RouteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label("Title")
                                    ->required(),
                                TextInput::make('slug')
                                    ->label("Slug")
                                    ->unique(ignoreRecord: true)
                                    ->required(),
                            ]),
                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('routes')
                            ->image()
                            ->required(),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('SEO Setting')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->required(),
                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('schema_markup')
                            ->label('Schema Markup')
                            ->default(null)
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Is Active')
                            ->required(),
                    ])->columnSpanFull(),

            ]);
    }
}
