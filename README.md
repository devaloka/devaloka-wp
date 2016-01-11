# Devaloka WP [![Build Status][travis-image]][travis-url] [![Packagist][packagist-image]][packagist-url]

A WordPress plugin that provides WordPress objects as services via DI Container.

## Features

*   Providing WordPress objects as services via DI Container.  
(`wpdb`, `WP_Embed`, `WP_Scripts` and `WP_Styles`)

*   Replacing `WP_Widget_Factory` with new extended one,  
(Injecting DI Container into Widget, making Widget to be able to subscribe
events.)

## Requirements

*   [Devaloka](https://github.com/devaloka/devaloka)

## Installation

1.  Install via Composer.

    ```sh
    composer require devaloka/devaloka-wp
    ```

[travis-image]: https://travis-ci.org/devaloka/devaloka-wp.svg?branch=master
[travis-url]: https://travis-ci.org/devaloka/devaloka-wp

[packagist-image]: https://img.shields.io/packagist/v/devaloka/devaloka-wp.svg
[packagist-url]: https://packagist.org/packages/devaloka/devaloka-wp
