<code class="language-php">
namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BasicRangeAreaChart extends ApexChartWidget
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
    protected static string $chartId = 'range-area-basic-range-area-chart';

    /**
        * Widget Title
        *
        * @var string|null
        */
    protected static ?string $heading = 'BasicRangeAreaChart';

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
                'type' => 'rangeArea',
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'BasicRangeAreaChart',
                    'data' => [
                        ['x' => 'Jan', 'y' => [0, 0]],
                        ['x' => 'Feb', 'y' => [3, 25]],
                        ['x' => 'Mar', 'y' => [5, 30]],
                        ['x' => 'Apr', 'y' => [4, 45]],
                        ['x' => 'May', 'y' => [10, 40]],
                        ['x' => 'Jun', 'y' => [11, 40]],
                        ['x' => 'Jul', 'y' => [20, 55]],
                        ['x' => 'Aug', 'y' => [15, 60]],
                        ['x' => 'Sep', 'y' => [8, 40]],
                        ['x' => 'Oct', 'y' => [7, 30]],
                        ['x' => 'Nov', 'y' => [3, 25]],
                        ['x' => 'Dec', 'y' => [0, 0]],
                    ],
                ],
            ],
            'xaxis' => [
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
            'colors' => ['#6366f1'],
            'stroke' => [
                'curve' => 'smooth',
            ],
            'dataLabels' => [
                'enabled' => false,
            ],
        ];
    }
}
</code>
