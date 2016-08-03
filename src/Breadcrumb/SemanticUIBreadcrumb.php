<?php

namespace Laravolt\Support\Breadcrumb;

use Laravolt\Support\Contracts\Breadcrumb;

/**
 * Class SemanticUIBreadcrumb
 *
 * @package Laravolt\Support\Breadcrumb
 */
class SemanticUIBreadcrumb implements Breadcrumb
{
    /**
     * @var string
     */
    protected $divider;

    /**
     * @var array
     */
    protected $items = [];

    /**
     * Set divider
     *
     * @param string $divider
     * @return mixed
     */
    public function divider($divider = '<div class="divider"> / </div>')
    {
        $this->divider = $divider;

        return $this;
    }

    /**
     * Add item for breadcrumn
     *
     * @param $name
     * @param string $url
     * @return mixed
     */
    public function addItem($name, $url = '')
    {
        if (! empty($url)) {
            $item = sprintf('<a href="%s" class="section">%s</a>', $url, $name);
        } else {
            $item = sprintf('<div class="active section">%s</div>', $name);
        }

        array_push($this->items, $item);

        return $this;
    }

    /**
     * Render breadcrumb view
     *
     * @return mixed
     */
    public function render()
    {
        return view('support::breadcrumb.semantic-ui', [
            'divider' => $this->divider,
            'items'   => $this->items
        ])->render();
    }
}