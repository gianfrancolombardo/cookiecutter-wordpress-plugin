# Cookiecutter WordPress Plugin 

A standardized, organized, object-oriented foundation for building high-quality WordPress Plugins.

## Contents

The WordPress Plugin Boilerplate includes the following files:

* `.gitignore`. Used to exclude certain files from the repository.
* `README.md`. The file that you’re currently reading.
* A `plugin-name` directory that contains the source code - a fully executable WordPress plugin.
* `docker-compose` as container engine

## Features

* The Boilerplate is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).
* All classes, functions, and variables are documented so that you know what you need to change.
* The Boilerplate uses a strict file organization scheme that corresponds both to the WordPress Plugin Repository structure, and that makes it easy to organize the files that compose the plugin.
* The project includes a `.pot` file as a starting point for internationalization.

## Installation

1. First, get [Cookiecutter](https://github.com/audreyr/cookiecutter). Trust me, it's awesome:

```
$ pip install cookiecutter
```

2. Run against this repo

```
$ cookiecutter https://github.com/gianfrancolombardo/cookiecutter-django-api
```

## Development

To start working on this project just run:

```bash
$ docker-compose up --build
```