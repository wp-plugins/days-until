=== Plugin Name ===
Contributors: enuratique
Donate link: http://ericmedin.com/musings/days-until-plugin/
Tags: utility
Requires at least: 2.0.2
Tested up to: 3.3.1
Stable tag: 1.1

Outputs the number of days until a specified date from shortcode embedded in content.

== Description ==

Originally I used the "Countdown Timer" plugin written by Andrew Ferguson to accomplish what I wanted,
however, his implementation to output in just days also outputted extraneous text that I was
not interested in. On top of that, the actual count algorithm was flawed. Rather than hack
this plugin to pieces to get the output I needed, I decided to just roll my own.

This is a bare bones, no-frills plugin since this is my first attempt at it. This means no
fancy options or configuration screens.

To use the plugin, simply install it and then use the following shortcode to output the number
of days until a given date in its place:

[days_until date="SPECIFIC DATE"]

Where "SPECIFIC DATE" can be any text that that PHP's strtotime function can understand.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `daysuntil.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[days_until date="SPECIFIC DATE"]` in your content

== Frequently Asked Questions ==

None yet.

== Screenshots ==

None yet

== Changelog ==

= 1.1 =
* Just now realized that the instructions in the readme were wrong (missing the date attribute), functionally nothing else changed.

= 1.0 =
* The genesis

== Upgrade Notice ==

= 1.0 =
* No need to upgrade, this is ground zero