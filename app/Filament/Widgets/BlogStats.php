<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BlogStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Blog::count())
                ->description('Total number of blog posts')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->icon('heroicon-o-document-text'),

            Stat::make('Published This Month', Blog::whereMonth('created_at', now()->month)->count())
                ->description('Blog posts created this month')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('info')
                ->icon('heroicon-o-calendar'),

            Stat::make('Updated Recently', Blog::where('updated_at', '>=', now()->subDays(7))->count())
                ->description('Blog posts updated in the last 7 days')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning')
                ->icon('heroicon-o-pencil-square'),
        ];
    }
}
