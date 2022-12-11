<code class="language-php">
namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class BasicRadialBarChart extends ApexChartWidget
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
    protected static string $chartId = 'radialbar-basic-radialbar-chart';

    /**
        * Widget Title
        *
        * @var string|null
        */
    protected static ?string $heading = 'BasicRadialBarChart';

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
                'type' => 'radialBar',
                'height' => 300,
            ],
            'series' => [75],
            'plotOptions' => [
                'radialBar' => [
                    'hollow' => [
                        'size' => '70%',
                    ],
                    'dataLabels' => [
                        'show' => true,
                        'name' => [
                            'show' => true,
                            'color' => '#9ca3af',
                            'fontWeight' => 600,
                        ],
                        'value' => [
                            'show' => true,
                            'color' => '#9ca3af',
                            'fontWeight' => 600,
                            'fontSize' => '20px',
                        ],
                    ],

                ],
            ],
            'stroke' => [
                'lineCap' => 'round',
            ],
            'labels' => ['BasicRadialBarChart'],
            'colors' => ['#6366f1'],
        ];
    }
}
</code>
