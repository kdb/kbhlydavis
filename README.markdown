Drupal site for the Københavns Lydavis
======================================

Provides sound recordings of news pertaining to Copenhagen as a service
to the public.

## Requirements
- [Docker](https://store.docker.com/search?type=edition&offering=community)
- [Dory](https://github.com/FreedomBen/dory) (`gem install dory`)

## Installation
1. Clone the project
2. Change directory into the project folder
3. Put database dump into the folder as `kbhlydavis.sql`
4. `docker-compose up`
5. Go to [kbhlydavis.docker](http://kbhlydavis.docker)
6. Login with `docker-compose run --rm --no-deps drush uli --uri=kbhlydavis.docker`
