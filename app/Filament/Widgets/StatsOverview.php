<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{

    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Blogs', Blog::count())
                ->description('Published so far')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->descriptionColor('primary')
                ->icon('heroicon-o-document-text')
                ->color('success')
                ->chart([5, 8, 12, 20, 28, Blog::count()]),

            Stat::make('Total Leads', Contact::count())
                ->description('Published so far')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->descriptionColor('primary')
                ->icon('heroicon-o-document-text')
                ->color('primary')
                ->chart([5, 8, 12, 20, 28, Contact::count()])
        ];
    }
}
