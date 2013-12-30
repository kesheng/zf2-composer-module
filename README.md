zf2-composer-module
===================

Example of a Zend Framework 2 module that is compatible with Composer

Documentation: http://www.shenghua.co.uk/create-zend-framework-2-module-composer/

Sample composer.json file for using this repository within a ZF2 application,
```json
    
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "repositories": [
        {
            "type": "vcs",
            "url" : "git@github.com:shenghuahe/zf2-composer-module.git"
        }
    ],
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "2.2.*",
        "shenghuahe/zf2-composer-module" : "dev-master"
    }
}
```
