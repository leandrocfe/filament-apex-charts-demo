<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardAreaChart;
use App\Filament\Widgets\DashboardBarChart;
use App\Filament\Widgets\DashboardCircleChart;
use App\Filament\Widgets\DashboardLineColumnChart;
use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    protected static ?string $navigationIcon = 'heroicon-s-chart-square-bar';

    protected function getWidgets(): array
    {
        return [
            DashboardAreaChart::class,
            DashboardLineColumnChart::class,
            DashboardCircleChart::class,
            DashboardBarChart::class,
        ];
    }
}
