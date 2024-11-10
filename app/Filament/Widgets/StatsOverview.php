<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $berita = Berita::count();
        
        return [
            Stat::make('Jumlah Berita', $berita),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
