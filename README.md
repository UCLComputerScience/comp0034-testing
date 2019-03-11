# comp0034-testing
Code to accompany the testing lecture. The lecture specifically covers tests that could be applied to the group project.
Please refer to the COMP0035 Testing lecture notes for explanations of the types of testing that can be applied.

The code is structured such that the files to be tested are in the **src** directory, and the associated tests are in the **tests** directory.

### src/php (code)
This folder contains two subdirectories:
1. php

This sub-directory itself contains 2 sub-directories.
**classes** contains PHP classes. The tests for these are in the  
2. dvd

This contains code for the final exercise of the individual exercises so uses the sakila database. You will probably need to edit dbCredentials to get this to work on your machine.
This code is used to illustrate UI testing using the Selenium IDE 
The code itself was adapted over weeks and has not been refactored. It doesn't conform to any of the object-orietnted principles covered in COMP0035. The PHP is written in a procedural style.

### src/tests (tests)
1. php

These are PHPUnit tests. 
You will need to enable PhpStorm to work with PHPUnit: https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html
This also requires that you have the composer dependency manager installed.
Follow the instructions to download and install composer: https://www.jetbrains.com/help/phpstorm/using-the-composer-dependency-manager.html. On the same PhpStorm help page, scroll to the section and follow the instructions for *Opening an existing Composer project in PhpStorm*
You may also need to follow the instructions to *Download and install phpunit.phar with Composer* here: https://www.jetbrains.com/help/phpstorm/using-phpunit-framework.html#php_test_frameworks_phpunit_download

**PHPUnit test code**

Once you have installed and configured PHPUnit then you will be able to create and run tests.
The tests in the test/php/classes and test/php/functions directory test the files in the related src folders.
The Calculator tests in the test/php/classes directory deviate from the usual naming convention as there are 3 tests for the same class file in order to demonstrate different testing concepts.


2. dvd

There is a single file DVD_Rental.side. This file is used with the Selenium IDE 
You will need to do the following before you can run the tests:

* Check that the sakila database parameters are correct for your sql server (src/php/dvd/dbCredentials.php)
* Deploy the dvd code to your localhost webserver 
* Check your local web server is running
* Install a Selenium extension for Chrome or Firefox: https://www.seleniumhq.org/selenium-ide/
* You may need to modify the URLs contained in the Selenium tests since these are specific to my localhost.

Refer to the Selenium IDE documentation for details of running and editing Selenium IDE tests: https://www.seleniumhq.org/selenium-ide/docs/en/introduction/getting-started/ 