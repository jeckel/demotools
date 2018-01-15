[![Packagist](https://img.shields.io/packagist/dt/jeckel/demotools.svg)](https://packagist.org/packages/jeckel/demotools)

# DemoTools
Suite of tools for demo scripts

# Requirements

This tools worj only with PHP7+ for now.

It's using ANSI codes for color management.

## Color

The [`Color`](src/Color.php) interface define some constants to use in terminal messages.

## Terminal

The [`Terminal`](src/Terminal.php) static class provide some methods to interact with the user with the terminal :


- `cls`: Clear screen
- `clear`: Clear screen (alias of `cls`)
- `pause`: Wait for user to press a key
- `readUserEntry`: Read user entry (with an optional question)
- `printTitle`: Print a title
- `menu`: display a menu, and return the selected item
- `printColoredLine`: print a line with a defined color
- `printSuccess`: print a success message (in green by default)
- `printFailure`: print a failure message (in red by default)
- `printR`: print a dump of all given parameters

### `cls` and `clear`

Usage:
```php
Terminal::cls():

// or

Terminal::clear();
```

### `pause`

Usage:
```php
Terminal::pause(); // Display "Press any key to continue..." by default

// or

Terminal::pause('Press a key for next');
```

### `readUserEntry`

Usage:
```php
$username = Terminal::readUserEntry('Enter your username:');
```

### `menu`

Usage:
```php
$menuItems = [
    1 => 'Add user',
    2 => 'List users',
    3 => 'Remove user',
    9 => 'Exit'
];

$selectedItem = Terminal::menu($menuItems, 'Manage users:');
```

Will display:
```
Manage users:
 - [1] Add user
 - [2] List users
 - [3] Remove user
 - [9] Exit
Your choice: 9
```

### `printColoredLine`

Usage:
```php
Terminal::printColoredLine('It works', Color::GREEN);
```

### `printSuccess`

Usage:
```php
Terminal::printSuccess(); // Will display 'success' in green

// or

Terminal::printSuccess('done'); // Will display 'done' in green

// or

Terminal::printSuccess('done', Color::BLUE) // Will display 'done' in blue
```

### `printFailure`

Usage:
```php
Terminal::printFailure(); // Will display 'failure' in red

// or

Terminal::printFailure('It failed'); // Will display 'It failed' in red

// or

Terminal::printFailure('It failed', Color::BLUE) // Will display 'It failed' in blue
```

### `printR`

Used to debug values.

Usage:
```php
Terminal::printR($value1, $value2, $value3);
```

## Menu

Menu is a class used to create an interractive menu. You just need to pass an array of [callables](http://php.net/manual/en/language.types.callable.php):

Usage:
```php
$items = [
    'Display Hello' = function() { echo 'Hello'; },
    'Use callback' = 'MyClass::MyFunction'
];

(new Menu($items))->loop('Choose an option');
```

It will always add an exit option to the given menu.
