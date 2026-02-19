<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label("Title")
                                    ->required(),
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->unique(ignoreRecord: true)
                                    ->required(),
                            ]),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->label('Image')
                            ->disk('uploads')
                            ->directory('blogs')
                            ->image()
                            ->required(),
                    ])->columnSpanFull(),

                Section::make('SEO Setting')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label("Meta Title")
                            ->required(),
                        Textarea::make('meta_description')
                            ->label("Meta Description")
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('meta_keywords')
                            ->label("Meta Keywords")
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make('schema_markup')
                            ->label('Schema Markup (JSON-LD)')
                            ->rows(30)
                            ->required()
                            ->columnSpanFull(),
                    ])->columnSpanFull(),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
