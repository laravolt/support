<?php

namespace Laravolt\Support\Contracts;

/**
 * Interface Breadcrumb
 *
 * @package Laravolt\Support\Contracts
 */
interface Breadcrumb
{
    /**
     * Set divider
     *
     * @param string $divider
     * @return mixed
     */
    public function divider($divider = '');

    /**
     * Add item for breadcrumn
     *
     * @param $name
     * @param string $url
     * @return mixed
     */
    public function addItem($name, $url = '');

    /**
     * Render breadcrumb view
     *
     * @return mixed
     */
    public function render();
}