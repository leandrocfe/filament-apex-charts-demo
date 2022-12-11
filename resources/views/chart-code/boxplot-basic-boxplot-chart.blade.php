<code class="language-php">
namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BasicBoxPlotChart extends ApexChartWidget
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
    protected static string $chartId = 'boxplot-basic-boxplot-chart';

    /**
        * Widget Title
        *
        * @var string|null
        */
    protected static ?string $heading = 'BasicBoxPlotChart';

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
                'type' => 'boxPlot',
                'height' => 300,
            ],
            'series' => [
                [
                    'type' => 'boxPlot',
                    'data' => [
                        ['x' => 'Jan', 'y' => [54, 66, 69, 75, 88]],
                        ['x' => 'Fev', 'y' => [43, 65, 69, 76, 81]],
                        ['x' => 'Mar', 'y' => [31, 39, 45, 51, 59]],
                        ['x' => 'Apr', 'y' => [39, 46, 55, 65, 71]],
                        ['x' => 'May', 'y' => [29, 31, 35, 39, 44]],
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
            'plotOptions' => [
                'boxPlot' => [
                    'colors' => [
                        'upper' => '#6366f1',
                        'lower' => '#84cc16',
                    ],
                ],
            ],
        ];
    }
}
</code>
