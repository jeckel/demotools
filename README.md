[![Packagist](https://img.shields.io/packagist/dt/jeckel/demotools.svg)](https://packagist.org/packages/jeckel/demotools)

# DemoTools
Suite of tools for demo scripts

# Color

The `Color` interface define some constants to use in terminal messages.

# Terminal

The `Terminal` static class provide some methods to interact with the user with the terminal :

- `cls`: Clear screen
- `clear`: Clear screen (alias of `cls`)
- `pause`: Wait for user to press a key
- `readUserEntry`: Read user entrey (with an optional question)
- `printTitle`: Print a title
- `menu`: display a menu, and return the selected item
- `printColoredLine`: print a line with a defined color
- `printSuccess`: print a success message (in green by default)
- `printFailure`: print a failure message (in red by default)

