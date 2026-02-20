<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Member Details')
                    ->schema([
                        TextInput::make('name')
                            ->label("Full Name")
                            ->required(),
                        TextInput::make('position')
                            ->label("Position")
                            ->required(),
                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('teams')
                            ->label("Image")
                            ->image()
                            ->required(),
                        TextInput::make('facebook')
                            ->label("Facebook")
                            ->default(null),
                        TextInput::make('twitter')
                            ->label("Twitter")
                            ->default(null),
                        TextInput::make('instagram')
                            ->label("Instagram")
                            ->default(null),
                        TextInput::make('linkedin')
                            ->label("Linkedin")
                            ->default(null),
                        Toggle::make('is_active')
                            ->label("Is Active")
                            ->default(true)
                            ->required(),
                    ])->columnSpanFull(),

            ]);
    }
}
