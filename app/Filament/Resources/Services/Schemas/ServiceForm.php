<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Information')
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
                        RichEditor::make('description')
                            ->required()
                            ->sanitizeHtml()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('services')
                            ->image()
                            ->required(),
                    ])->columnSpanFull(),

                Section::make('Add Faqs')
                    ->schema([
                        Repeater::make('faqs')
                            ->relationship()
                            ->schema([
                                TextInput::make('question')
                                    ->label('Question')
                                    ->nullable(),
                                Textarea::make('answer')
                                    ->label('Answer')
                                    ->nullable()
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ])->columnSpanFull(),

                Section::make('SEO Settings')
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
                        CodeEditor::make('schema_markup')
                            ->label('Schema Markup (JSON-LD)')
                            ->language(Language::Json)
                            ->columnSpanFull()
                            ->helperText('Add valid JSON-LD structured data.'),
                    ])->columnSpanFull(),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
