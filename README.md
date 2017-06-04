pinboard-angelesen
==================
A simple aggregator for my weekly posts. Consumes a feed from pinboard.in and exports them as markdown.

## Getting started
- Install dependencies by runing `composer install`
- Copy the configuration file `cp config.php.sample config.php`
- Change the Feed URL (yes you can also use php to generate tags)
  The URL should boil down to something like `http://feeds.pinboard.in/rss/u:UserName/t:ChosenTag/`
- run `./generate`
- check the file `preview.md`

### Adding an Intro Text
- Add the file intro.md and upon running generate the intro text will be added.
