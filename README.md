pinboard-angelesen
==================
A simple aggregator for my weekly posts. Consumes a feed from pinboard.in and exports them as markdown.

## Getting started
- Install dependencies by runing `composer install`.
  You might need to install [Composer](https://getcomposer.org/) first, (try `brew install composer`).
- Copy the configuration file `cp config.php.sample config.php`
- Change the Feed URL (yes you can also use php to generate tags)
- run `./generate`
- check the file `preview.md`

### Adding an Intro Text
- Add the file intro.md and upon running generate the intro text will be added.
