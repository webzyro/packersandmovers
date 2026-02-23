<?php

namespace App\Filament\Resources\VideoTestimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VideoTestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('video_link')
                    ->label('YouTube video link')
                    ->url()
                    ->required(),
                TextInput::make('name')
                    ->label('Customer name')
                    ->required(),
                TextInput::make('message')
                    ->label('Message')
                    ->required(),
                Toggle::make('is_active')
                    ->label('Is active')
                    ->default(true)
                    ->required(),
            ]);
    }
}
