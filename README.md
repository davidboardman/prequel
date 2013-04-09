Prequel
=======

**SQL-based manipulations for PHP arrays** 
```
Get. Select. Where. In. Like. Union. Join.
```

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

## Meta

### Build status
[![Build Status](https://travis-ci.org/fllat/prequel.png?branch=master)](https://travis-ci.org/fllat/prequel)

### Version
Prequel is currently at version `0.1.0`.

### License
Prequel is licensed according the to the [LICENSE.md](https://github.com/alfredxing/prequel/blob/master/LICENSE.md) file.
