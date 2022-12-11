<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class DashboardAreaChart extends ApexChartWidget
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
    protected static string $chartId = 'dashboard-area-chart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'Area Chart Example';

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
                'type' => 'area',
                'height' => 300,
                'toolbar' => [
                    'show' => false,
                ],
            ],
            'series' => [
                [
                    'name' => 'Series 1',
                    'data' => [20, 25, 30, 32, 26, 24, 20, 18, 22, 24, 30, 20],
                ],
                [
                    'name' => 'Series 2',
                    'data' => [18, 28, 34, 36, 26, 28, 24, 24, 26, 20, 32, 20],
                ],

            ],
            'xaxis' => [
                'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
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
            'legend' => [
                'labels' => [
                    'colors' => '#9ca3af',
                    'fontWeight' => 600,
                ],
            ],
            'colors' => ['#6366f1', '#22d3ee'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
            'annotations' => [
                'yaxis' => [
                    [
                        'y' => 30,
                        'borderColor' => '#f43f5e',
                        'borderWidth' => '5',
                        'label' => [
                            'offsetX' => -6,
                            'offsetY' => -13,
                            'borderColor' => '#f43f5e',
                            'style' => [
                                'color' => '#fffbeb',
                                'background' => '#f43f5e',
                            ],
                            'text' => 'Label Example',
                        ],
                    ],
                ],
            ],
        ];
    }
}
