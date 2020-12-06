# CodeIgniter 4 integrated with AdminLTE 3 [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&logo=twitter)](https://twitter.com/intent/tweet?text=CodeIgniter%204%20integrated%20with%20AdminLTE%203%20&url=https://awan.es&hashtags=bootstrap,admin,template,dashboard,panel,free,codeigniter)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

This project is Integration between CodeIgniter 4 with AdminLTE 3 by Awan

## Installation & updates

There are multiple ways to install.

- **Via Git Clone**

    ```bash
    git clone https://github.com/awanz/ci4-adminlte3.git
    ```

- **Via Composer**

    ```bash
    composer create-project awan/ci4-adminlte3
    ```

If installation success, dont forget update with command

`composer update`, then you can run project with command

`php spark serve`

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Usage

- **Example View**

``` bash
<?= $this->extend('layouts/master') ?>

<?= $this->section('head') ?>
<!-- External Lib for Head -->
<?= $this->endSection() ?>

<?= $this->section('foot') ?>
<!-- External Lib for Foot -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Content Here -->
<?= $this->endSection() ?>
```

in controller or router, dont forget for insert variable *title*

``` bash
$data['title'] = "Your Tittle";
```
breadcrumb title

``` bash
$data['breadcrumb_title'] = "Starter";
```

and breadcrumb content

``` bash
$data['breadcrumb']  =  array(
                            array(
                                'title' => 'Home',
                                'link' => 'dashboard'
                            ),
                            array(
                                'title' => 'Starter',
                                'link' => null
                            )
                        );
```

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
