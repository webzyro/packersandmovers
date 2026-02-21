<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Contact;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends StatsOverviewWidget
{

    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $days = collect(range(6, 0))->map(fn($i) => Carbon::today()->subDays($i)->toDateString());

        $blogCounts = Blog::query()
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', Carbon::today()->subDays(6)->startOfDay())
            ->groupBy('date')
            ->pluck('count', 'date');

        $blogChart = $days->map(fn($date) => (int) ($blogCounts[$date] ?? 0))->values()->all();

        $contactCounts = Contact::query()
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', Carbon::today()->subDays(6)->startOfDay())
            ->groupBy('date')
            ->pluck('count', 'date');

        $contactChart = $days->map(fn($date) => (int) ($contactCounts[$date] ?? 0))->values()->all();

        return [
            Stat::make('Total Blogs', Blog::count())
                ->description('Published so far')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->descriptionColor('primary')
                ->icon('heroicon-o-document-text')
                ->color('success')
                ->chart($blogChart),

            Stat::make('Total Leads', Contact::count())
                ->description('Captured so far')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->descriptionColor('primary')
                ->icon('heroicon-o-document-text')
                ->color('primary')
                ->chart($contactChart),
        ];
    }
}
