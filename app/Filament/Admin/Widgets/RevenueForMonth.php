<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Order;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class RevenueForMonth extends ChartWidget
{
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Revenue for this month';

    protected function getData(): array
    {
        $data = Trend::model(Order::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Revenue for the month',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
