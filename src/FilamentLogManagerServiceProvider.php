<?php

namespace FilipFonal\FilamentLogManager;

use FilipFonal\FilamentLogManager\Commands\FilamentLogManagerCommand;
use FilipFonal\FilamentLogManager\Pages\Logs;

use Spatie\LaravelPackageTools\{
    Package,
    PackageServiceProvider
};

class FilamentLogManagerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-log-manager';

    protected array $styles = [
        'filament-log-manager-styles' => __DIR__ . '/../resources/css/styles.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-log-manager')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasCommand(FilamentLogManagerCommand::class);
    }

    protected function getPages(): array
    {
        return [
            config('filament-log-manager.page_class') ?? Logs::class,
        ];
    }
}
