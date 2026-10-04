<?php

declare(strict_types=1);

namespace App;

final class AufPortalConfig
{
    private static ?self $instance = null;

    private function __construct(
        private array $settings = [
            'campus'       => 'Angeles City',
            'school_year'  => '2026-2027',
            'max_students' => 40,
        ]
    ) {
    }

    public static function getInstance(): self
    {
        return self::$instance ??= new self();
    }

    public function get(string $key): mixed
    {
        return $this->settings[$key] ?? null;
    }

    public function set(string $key, mixed $value): void
    {
        $this->settings[$key] = $value;
    }

    private function __clone()
    {
    }

    public function __wakeup(): void
    {
        throw new \LogicException('Cannot unserialize a singleton.');
    }
}