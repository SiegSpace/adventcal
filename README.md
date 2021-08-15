# AdventCal Basic Advent Calendar in php

Add some Season Greetings to your website this year with our Advent Calendar! Currently it's set to be the 24 Days of Sinner Computing, but by modifying the links and images stored in a file it can be anything you want.

This was originally written in 2008 for Eurobricks for a give-away raffle, but we've re-worked it so it's more generic. It still works much the same, but it's been enhanced so the `windows` can be placed anywhere. We're receptive to suggestions and in time we might make this easier to configure, but please keep in mind that we don't plan to ever charge for this so substantial work is unlikely. (Custom work is a possibility though.)

Below are some examples of what can be done with it. The first one shows how the downloadable version looks.

* [Packaged Version](https://sinnercomputing.com/cal/indexbase.php) As per the archive
* [Sinner-ised](https://sinnercomputing.com/cal/index.php) Themed to be Sinner Computing
* [ACAPised](https://sinnercomputing.com/cal/indexacap.php) Themed to be ACAPsoft
* [Show all](https://sinnercomputing.com/cal/indexsa.php) All boxes are open
* [Every Month](https://sinnercomputing.com/cal/indexsa.php) It is December everyday
* [Random](https://sinnercomputing.com/cal/indexrd.php) It is December everyday and the day is random

## Installation

Unpack the archive and save it to a new folder. Pick a image of the same dimensions as the included example (800x600) and save over existing `back.jpg`. Next pick 24 other (smaller) images to serve as the daily pictures, and edit the `data.php` file so it points to them as well as your chosen link destination. (The `pic` variables are for pictures, and the `lnk` variables are for links.) Now upload it all to your website and test it by going to the save folder in your browser. To do things like ignore the month simply make it always be detected as December...

More adventurous people can change the colours and images positions by changing the `style.css` file.

In the spirit of giving and sharing, if for some reason you don't like ours, there's another one that's similar that you can try [here](http://www.wait-till-i.com/2005/11/16/a-free-christmas-calendar-in-php/). It doesn't seem any easier to configure, but it has a nice roll-over effect!

## Huh?

This is mostly being gitted as a test. It is quite simple really... but simplicity was the goal afterall. No install, no demanding requirements... but even so if I find the time I would like to make this a bit nicer.


[Website](https://sinnercomputing.com/det.php?prog=AdventCal)

Siegfried Glina, Sinner Computing