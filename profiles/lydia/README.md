Lydia
======

A simple [Drupal][] distribution for an online audio newspaper for bind and
weak-sighted people.

Building
--------

You will need [drush make][] to build this install profile.

To build an install profile without Drupal core, run:

    drush make --no-core --contrib-destination=. lydia.make

If you want a developer version with Git working copies, run this
command instead:

    drush make --no-core --contrib-destination=. --working-copy lydia.make

[Drupal]: http://drupal.org/
[drush make]: http://drupal.org/project/drush_make
