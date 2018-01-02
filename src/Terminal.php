<?php
namespace DemoTools;

/**
 * Terminal tools
 */
class Terminal
{
    const DFL_TITLE_COLOR = Color::BLUE_BOLD;

    const DFL_SUCCESS_COLOR = Color::GREEN;

    const DFL_FAIILURE_COLOR = Color::RED_BOLD;

    /**
     * Clear screen
     */
    static public function cls()
    {
        system('clear');
    }

    /**
     * Clear screen
     * @alias cls
     */
    static public function clear()
    {
        self::cls();
    }

    /**
     * Pause, wait for a key pressed by the user
     * @param string $message
     */
    static public function pause($message = "Press any key to continue...")
    {
        system('read -n1 -r -p "' . $message . '"');
    }

    /**
     * Read user input
     *
     * @param string|null $message
     * @return string
     */
    static public function readUserEntry(string $message = null): string
    {
        if (! empty($message)) {
            printf($message);
        }
        return trim(fgets(STDIN));
    }

    /**
     * Print title
     * @param string $title
     */
    static public function printTitle(string $title, string $color = self::DFL_TITLE_COLOR)
    {
        printf($color . $title . Color::NC . "\n");
    }

    /**
     * @param array $items
     * @param string $title
     * @return string
     */
    static public function menu(array $items, string $title = "Select an item"): string
    {
        self::clear();
        self::printTitle($title);
        foreach($items as $key => $item) {
            printf (" - [%s] %s\n", $key, $item);
        }
        $selected = -1;
        while(! in_array($selected, array_keys($items))) {
            $selected = self::readUserEntry("Your choice: ");
        }
        return $selected;
    }

    /**
     * Print colored line
     * @param string $message
     * @param string $color
     */
    static public function printColoredLine(string $message, string $color)
    {
        printf($color . $message . Color::NC . "\n");
    }

    /**
     * @param string $success
     * @param string $color
     */
    static public function printSuccess(string $success = 'success', string $color = self::DFL_SUCCESS_COLOR)
    {
        self::printColoredLine($success, $color);
    }

    /**
     * @param string $failure
     * @param string $color
     */
    static public function printFailure(string $failure = 'failure', string $color = self::DFL_FAIILURE_COLOR)
    {
        self::printColoredLine($failure, $color);
    }
}
