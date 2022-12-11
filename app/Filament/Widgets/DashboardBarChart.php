<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class DashboardBarChart extends ApexChartWidget
{
    /**
     * Polling Interval
     *
     * @var string|null
     */
    protected static ?string $pollingInterval = null;

    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'dashboard-bar-chart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Bar Chart Example';

    /**
     * Filter Options
     *
     * @return array|null
     */
    protected function getFilters(): ?array
    {
        $years = range(now()->year, 2020);

        return $years;
    }

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 293,
                'toolbar' => [
                    'show' => false,
                ],
            ],
            'series' => [
                [
                    'name' => 'Bar Chart Example',
                    'data' => [17, 25, 23, 28, 26, 24, 20],
                ],
            ],
            'xaxis' => [
                'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                'min' => 0,
                'max' => 30,
                'labels' => [
                    'show' => false,
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'colors' => ['#6366f1'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 10,
                    'horizontal' => true,
                ],
            ],
            'grid' => [
                'show' => false,
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
            'colors' => ['#facc15', '#38bdf8'],
            'fill' => [
                'type' => 'gradient',
                'gradient' => [
                    'shade' => 'dark',
                    'type' => 'horizontal',
                    'shadeIntensity' => 0.5,
                    'gradientToColors' => ['#f43f5e'],
                    'inverseColors' => false,
                    'opacityFrom' => 1,
                    'opacityTo' => 1,
                    'stops' => [0, 100],
                ],
            ],
            'annotations' => [
                'xaxis' => [
                    [
                        'x' => 25,
                        'x2' => 30,
                        'fillColor' => '#f43f5e',
                        'opacity' => 0.2,
                    ],
                ],
            ],
        ];
    }
}
