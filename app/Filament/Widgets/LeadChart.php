<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class LeadChart extends ChartWidget
{

    protected static ?int $sort = 2;
    protected ?string $heading = 'Lead Chart';

    protected function getData(): array
    {
        $days = collect(range(6, 0))->map(
            fn($i) => Carbon::today()->subDays($i)
        );

        return [
            'datasets' => [
                [
                    'label' => 'Leads',
                    'data' => $days->map(
                        fn($day) => Contact::whereDate('created_at', $day)->count()
                    ),
                    'borderColor' => '#3B82F6',           // Blue line
                    'backgroundColor' => 'rgba(59,130,246,0.2)', // Light blue fill
                    'tension' => 0.4,                     // Smooth curve
                    'fill' => true,
                    'pointRadius' => 4,
                    'pointBackgroundColor' => '#3B82F6',
                ],
            ],
            'labels' => $days->map(
                fn($day) => $day->format('d M')
            ),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
        ];
    }
}
