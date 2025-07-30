<?php

namespace Smjlabs\MetaTools;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MetaToolsServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ . '/../config/smjlabs-meta-tools.php', key: 'smjlabsmetatools');

    $this->app->singleton(MetaManager::class, function ($app) {
      return new MetaManager(config(key: 'smjlabsmetatools'));
    });
  }

  public function boot()
  {
    $this->publishes([
      __DIR__ . '/../config/smjlabs-meta-tools.php' => config_path('smjlabs-meta-tools.php'),
    ], 'smjlabs-meta-tools');

    $this->loadViewsFrom(__DIR__ . '/../resources/views', 'smjlabsmetatools');
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
