<?php

namespace App\Filament\Resources\LatestMoves\Pages;

use App\Filament\Resources\LatestMoves\LatestMoveResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLatestMove extends CreateRecord
{
    protected static string $resource = LatestMoveResource::class;
}
