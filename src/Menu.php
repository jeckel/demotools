<?php
namespace DemoTools;

class Menu
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * Menu constructor.
     *
     * Items should be an array with the form
     * - key: Displayed text
     * - value: callable function
     *
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Main loop
     * @param string $title
     */
    public function loop(string $title = "Select an item")
    {
        $menu = array_merge(['Exit'], array_keys($this->items));
        while(($selectedItem = Terminal::menu($menu, $title)) != 0) {
            call_user_func($this->items[$menu[$selectedItem]]);
            Terminal::pause();
        }
    }
}
