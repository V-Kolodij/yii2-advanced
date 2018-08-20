Project
===============================
The project is based on [Yii 2 Advanced Project Template](https://github.com/yiisoft/yii2-app-advanced/blob/master/README.md).

## Deploy the project

After receiving the code of the project perform the following steps to initialize.

1. To open console terminal and install the dependeciens of the `copmposer`

    ```
    /path/to/php-bin/php /path/to/composer.phar install

    ```
    > **Note:**  if you first install the project on Yii2, you need to run the command:
    
    ```
    /path/to/php-bin/php /path/to/composer.phar global require "fxp/composer-asset-plugin:^1.4.1"

    ```
2. To open a console terminal and run the command `init`, selecting `dev` as the environment.

    ```
    /path/to/php-bin/php /path/to/init

    ```
3. Configure db access in `components['db']` 

    ```
    common/config/main-local.php

    ```

4. To open a console terminal and run the command `yii migrate/fresh`

    ```
       /path/to/php-bin/php /path/to/yii migrate/fresh
    
    ```
    > **Caution:** the command  `yii migrate/fresh` will clear the current database, so for testing, can create a new database and configure accordingly `components['db']` in `common/config/main-local.php`
     !database encoding should be `utf8_unicode_ci` 
    

5. After the completion of the migrations, to login in system can use:

    ```
    login: admin;
    password: 123456;

    ```
6. For load demo content open a console terminal and run the command `yii fixture/load "*"`

    ```
     /path/to/php-bin/php /path/to/yii fixture/load "*"

    ```
    > **Caution:** this command will clear the current data from the database

7. After the completion of the fixtures, also to login in system can use:

    ```
    login: user;
    password: user;

    ```
