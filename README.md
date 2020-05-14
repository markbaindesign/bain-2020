# Bain 2020

## By Bain Design

### Version: 0.1.0

## Table of contents

- [Requirements](#requirements)
- [Convertions](#conventions)
- [Setup](#setup)
- [Development](#development)
- [Deployment](#deployment)

## Requirements

This project requires the following to run:

- Sass
- Grunt
- [NPM]

[Go back to the top](#table-of-contents)

## Conventions

This project makes use of the following conventions

- Git Flow development flow
- Semantic versioning

[Go back to the top](#table-of-contents)

## Setup

The following steps should be taken to install the project environment locally.

- Add the following to your VVV config.yaml and run `vagrant reload --provision`

```
  bain-design-2020:
    repo: https://github.com/markbaindesign/bain-2020.git
    hosts:
      - bain-design-2020.test
    custom:
      delete_default_plugins: true
      install_plugins:
        - debug-bar
        - query-monitor
        - classic-editor
      wp_config_constants:
        WP_DEBUG: true
        WP_DEBUG_LOG: true
        WP_DEBUG_DISPLAY: false
        WP_DISABLE_FATAL_ERROR_HANDLER: true
```

- Open project directory in terminal and run `npm install` to install all grunt plugins. See `package.json`for details. 

You are now ready to work on the project. 

[Go back to the top](#table-of-contents)

## Development

The development process makes use of the Grunt taskrunner.

- Run `grunt` to compile your Sass and run the watch task. See `Gruntfile.js`for details.
- Run `grunt build` to output build files to `/release`. See `Gruntfile.js`for details.

[Go back to the top](#table-of-contents)

## Deployment

For maximum flexibility, this project outputs build files as an archive, ready to upload to any server. 

### Creating a release

- Follow the Git Flow process for creating a release branch
- Releases are versioned following [Semantic Versioning]

#### Versioning

- Run `grunt bump:{major|minor|patch}`to increment the version number in `package.json`, 
- Run `grunt version`to copy the new version number to additional relevant project files:
	- `README.md`
	- `sass/styles.scss`
	- `{custom_theme}/style.css`
	- `{custom_plugin/custom_plugin.php}`

[Go back to the top](#table-of-contents)

[NPM]: https://www.npmjs.com/
[Semantic Versioning]: #