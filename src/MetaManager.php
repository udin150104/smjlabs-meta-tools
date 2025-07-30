<?php

namespace Smjlabs\MetaTools;

use Illuminate\Support\Arr;

class MetaManager
{
  protected array $meta = [];
  protected array $default = [];

  protected array $jsonLd = [];

  public function __construct(array $config = [])
  {
    $this->default = $config;
    $this->meta = $config;
  }

  public function set(string $key, mixed $value): self
  {
    Arr::set($this->meta, $key, $value);
    return $this;
  }

  public function get(string $key, mixed $default = null): mixed
  {
    return Arr::get($this->meta, $key, $default);
  }

  public function all(): array
  {
    return $this->meta;
  }

  public function reset(): self
  {
    $this->meta = $this->default;
    return $this;
  }

  public function render(): string
  {
    return view('meta-tools::tags', ['meta' => $this->meta])->render();
  }

  public function addJsonLd(array $schema): self
  {
    $this->jsonLd[] = $schema;
    return $this;
  }

  public function getJsonLd(): array
  {
    return $this->jsonLd;
  }

  public function renderJsonLd(): string
  {
    if (empty($this->jsonLd)) {
      return '';
    }

    $json = json_encode(count($this->jsonLd) === 1 ? $this->jsonLd[0] : $this->jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    return '<script type="application/ld+json">' . $json . '</script>';
  }
}
