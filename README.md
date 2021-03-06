Prequel
=======

**SQL-based manipulations for PHP arrays** 
```
Get. Select. Where. In. Like. Union. Join.
```

## Introduction

Prequel is an easy way to use SQL queries on PHP arrays. It's that simple (and fast!).  
In fact, you don't have to download it to try it out - just [visit the **demo**](http://fllat.github.io/prequel/) to get a taste of what it's about.

### Requirements

Prequel is optimized for use in the latestt version of PHP (PHP 5.4), but if you have an older version, just make sure to use the `versions/5.3/prequel.php` file.

## Documentation
For docs on all the functions, see [this wiki page](https://github.com/fllat/prequel/wiki/Functions).

## Getting started
With Prequel, getting all set up is a breeze. Just require `prequel.php` as follows and start querying!

```php
<?php

require "/path/to/prequel.php";

$pie = array(array("first" => "John", "last" => "Doe"));  // You don't have to name it 'pie'
$prequel -> select(array(), $pie);                        // Start like so (perhaps just to test it out)

?>
```

## Contributing

Feel free to contribute by creating issues (bugs) and submitting pull requests. Just try to adhere by the coding standards and style from the file (for standards, I try to follow PEAR).

## Meta

### Build status
[![Build Status](https://travis-ci.org/wylst/prequel.png?branch=master)](https://travis-ci.org/wylst/prequel)

### Version
Prequel is currently at version `0.1.0`.

### License
Prequel is licensed according the to the [LICENSE.md](https://github.com/wylst/prequel/blob/master/LICENSE.md) file.
