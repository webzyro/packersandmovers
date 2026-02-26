<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Main Content')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('project_name')
                                    ->label('Project Name')
                                    ->required(),
                                TextInput::make('slug')
                                    ->unique(ignoreRecord: true)
                                    ->label('Slug')
                                    ->required(),
                            ]),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('category')
                                    ->label('Category')
                                    ->required(),
                                TextInput::make('budget')
                                    ->required()
                                    ->numeric(),
                            ]),
                        Grid::make(2)
                            ->schema([
                                DatePicker::make('published_date')
                                    ->label('Date of Project')
                                    ->required(),
                                TextInput::make('duration_days')
                                    ->numeric()
                                    ->default(null),
                            ]),
                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('projects')
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
                            ->required(),
                        Textarea::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->required(),
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
