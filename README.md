# LRU Cache application is the simplest possible way to create LRU module for your application.

-- Least Recently Used cache
Implement a least recently used (LRU) cache mechanism and demonstrate its use in a small script. The LRU must be able to admit a ‘max_size’ parameter that by default has to be 100.

## How to install
-- You need LAM-PHP installed in your system.
-- Need to install PHPUnit to test. Follow the link to help to install PHPUnit into your system.
https://phpunit.de/getting-started.html
-- Keep the whole folder into your web root [or you can change into other folder as per your wish].
-- Give the proper permission at least 755


## How to run the application
-- Go to URL and paste this part /lru/ only after your web folder path [where you saved this application]
-- Eg. test result will be displayed one below another. Results are very descriptive. Code are well commented all the places. And used very primary php functions.
-- Or you can simply use the class to implement in different way for your application.

## How to test
-- After installing PHPUnit [see above how to install link].
-- Go to folder path in terminal. Run the following commands to test:
- Test all LRU Cache command : # phpunit tests/SimpleLruCacheTest.php
- Test method wise then use --filter command eg. # phpunit --filter <b>testMakeQueueEmpty</b> tests/SimpleLruCacheTest.php

- any suggestion or comment send to me.
