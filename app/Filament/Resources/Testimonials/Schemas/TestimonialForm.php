<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Testimonial Details')
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->placeholder('John Doe')
                            ->required(),
                        Textarea::make('message')
                            ->label('Message')
                            ->placeholder('Write your message here')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('testimonials')
                            ->label('Image')
                            ->placeholder('Upload your image here')
                            ->image(),
                        Toggle::make('is_active')
                            ->label('Status')
                            ->default(true)
                    ])->columnSpanFull()
            ]);
    }
}
