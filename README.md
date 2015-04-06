# OmDbApi SDK written in PHP

[![Software License](https://img.shields.io/badge/license-LGPL%203.0-brightgreen.svg?style=flat-square)](LICENSE)

The OmDbApi SDK written in PHP provides you an easy-to-use library to communicate with the RESTful API from www.omdbapi.com!
It is based on the HTTP Client Guzzle to be extensible as far as possible.

Please have a look at the examples, to learn how to handle the SDK.

> Note: This SDK is still in development. Feel free to report encountered issues!

## Requirements

- [x] PHP 5.3 and higher

## Install

### Using Composer

    $ composer require xynnn/omdb-php-sdk

### Cloning from Github

    $ git clone https://github.com/xyNNN/omdb-php-sdk.git

## Usage

The SDK is built as easy as possible and works with OmDbApi\Request\Request object which is extended by the Guzzle Request object.
Please have a look at the examples to learn how to handle the SDK. I will add some more informations about the usage later.

## Features

- [x] Based on Guzzle, an extensible PHP HTTP Client
- [x] Fluent Interface support for the Request object
- [x] Object-oriented approach to communicate with the RESTful API

## What's to come

- [ ] Test Coverage
- [ ] Rich Object Models to map the responses in Object collections and/or objects
- [ ] Enabling of Travis CI

## Authors

**Philipp Bräutigam**

+ [github/xyNNN](https://github.com/xyNNN)
+ [twitter/pbraeutigam](http://twitter.com/pbraeutigam)

## License
Copyright (c) 2015 Philipp Bräutigam  
This repository is released under the GNU LGPL v3.0 license.