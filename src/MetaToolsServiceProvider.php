<?php

namespace Smjlabs\MetaTools;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MetaToolsServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/meta-tools.php', 'meta-tools');

    $this->app->singleton(MetaManager::class, function ($app) {
      return new MetaManager(config('meta-tools'));
    });
  }

  public function boot()
  {
    $this->publishes([
      __DIR__ . '/../config/meta-tools.php' => config_path('meta-tools.php'),
    ], 'config');

    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'meta-tools');
    // Blade directive to set meta
    Blade::directive('meta', function ($expression) {
      return "<?php \\Smjlabs\\MetaTools\\Facades\\MetaTools::set($expression); ?>";
    });

    // Blade directive to render meta
    Blade::directive('metaRender', function () {
      return "<?php echo \\Smjlabs\\MetaTools\\Facades\\MetaTools::render(); ?>";
    });

    Blade::directive('jsonLd', function () {
      return "<?php echo \\Smjlabs\\MetaTools\\Facades\\MetaTools::renderJsonLd(); ?>";
    });
  }
}
