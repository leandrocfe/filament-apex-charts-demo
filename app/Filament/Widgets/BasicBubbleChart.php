<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BasicBubbleChart extends ApexChartWidget
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
    protected static string $chartId = 'bubble-basic-bubble-chart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'BasicBubbleChart';

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
                'type' => 'bubble',
                'height' => 300,
            ],
            'series' => [
                ['name' => 'Jan', 'data' => [[49, 12, 10], [24, 31, 10], [54, 20, 14], [52, 25, 67], [13, 69, 53], [55, 61, 55], [13, 70, 41], [45, 56, 61], [60, 21, 23], [48, 30, 69]]],
                ['name' => 'Feb', 'data' => [[70, 53, 16], [39, 33, 53], [14, 55, 51], [44, 28, 32], [26, 46, 33], [61, 56, 11], [11, 29, 29], [19, 64, 67], [26, 19, 28], [28, 69, 44]]],
                ['name' => 'Mar', 'data' => [[63, 62, 50], [12, 37, 12], [30, 35, 25], [29, 16, 35], [67, 34, 36], [67, 19, 23], [21, 44, 48], [14, 50, 60], [61, 63, 51], [19, 33, 22]]],
                ['name' => 'Apr', 'data' => [[22, 14, 29], [57, 12, 63], [65, 63, 61], [56, 27, 44], [61, 54, 41], [43, 69, 12], [65, 68, 42], [56, 33, 42], [46, 48, 12], [54, 56, 12]]],
                ['name' => 'May', 'data' => [[57, 68, 50], [22, 37, 32], [33, 46, 18], [51, 14, 39], [23, 63, 60], [65, 24, 38], [67, 33, 59], [19, 62, 24], [19, 55, 24], [12, 20, 32]]],
            ],
            'xaxis' => [
                'min' => 5,
                'max' => 80,
                'type' => 'category',
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'yaxis' => [
                'min' => 5,
                'max' => 80,
                'labels' => [
                    'style' => [
                        'colors' => '#9ca3af',
                        'fontWeight' => 600,
                    ],
                ],
            ],
            'fill' => [
                'opacity' => 0.7,
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
        ];
    }
}
