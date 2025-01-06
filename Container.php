<?php

namespace Roots\Sage;

use Illuminate\Container\Container as BaseContainer;

class Container extends BaseContainer
{
    /**
     * Register a terminating callback with the application.
     * @param callable|string $callback
     * @return \Roots\Sage\Container
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function terminating(callable|string $callback): static
    {
        $this->make('events')->listen('kernel.terminating', $callback);

        return $this;
    }
}
