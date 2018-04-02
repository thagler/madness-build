# Madness

> Madness Drupal codebase.

<!-- Insert short paragraph describing the project's architecture and where to find more information. -->

## Quick Start
* Run `rig project setup` to do an initial build of the site.
* Run `rig project build` to do any rebuilds (when adding new contrib modules, etc).

** Note: ** This project is just to provide a Drupal environment in which to build the Madness module, which is maintained in a separate repo.

## About This Repository

This codebase is maintained in a minimal working repository containing custom code
and manifests of upstream dependencies. [Grunt-Drupal-Tasks](https://github.com/phase2/grunt-drupal-tasks)
(a Node.js tool based on the popular Grunt task-runner) is used for development
and operational management of the application code. A build process downloads and assembles all dependencies for deployment into the webserver.

## Docker-based Development

* See [CONTRIBUTING.md](./CONTRIBUTING.md) for policies and practices on making changes to the codebase.
* See [OUTRIGGER.md](./docs/OUTRIGGER.md) for how to set up your local environment the Outrigger way.

* See [TODOS.md](./TODOS.md) for pending changes in the repository that developers should know about.

### Troubleshooting

Thank you for helping the project with a problem. For local issues please read
the [OUTRIGGER.md](./docs/OUTRIGGER.md) documentation. 

## Scaffolded with Generators

Initial generation of this project's code structure was built with [Yo Outrigger Drupal](https://github.com/phase2/generator-outrigger-drupal)
and related code-generation projects.

To refresh your project with our latest practices, update your local copy of this
tool, and run `yo outrigger-drupal --replay --force`. Do not forgot to carefully inspect each
change for compatibility with your ongoing project before committing.

The `--replay` option pulls configuration values for the generator from *.yo-rc.json*,
where they can be reviewed or edited by experts at any time.
