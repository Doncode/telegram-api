[![Latest Stable Version](https://poser.pugx.org/unreal4u/telegram-api/v/stable)](https://packagist.org/packages/unreal4u/telegram-api)
[![Build Status](https://travis-ci.org/unreal4u/telegram-api.svg)](https://travis-ci.org/unreal4u/telegram-api)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/unreal4u/telegram-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/unreal4u/telegram-api/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/unreal4u/telegram-api/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/unreal4u/telegram-api/?branch=master)
[![License](https://poser.pugx.org/unreal4u/telegram-api/license)](https://packagist.org/packages/unreal4u/telegram-api)

Telegram API 
======

This is a complete PHP7 bot API implementation for Telegram.

About this class
--------

* Enables you to send messages, stickers, location and other methods via PHP a Telegram user (or group).
* Respects and implements the default types and methods made by Telegram itself.
* Doesn't need any dependency, except for Guzzle. I'm working on an implementation that doesn't require Guzzle as well.
* Inline bots support!

Detailed description
---------

This project was born to study the new concepts of PHP7 and to integrate some other knowledge I had previously heard
about but didn't have the time to play with them. The idea behind was to create a simple to use class which could
play nicely with the Telegram API. The end result however ended up being a complete bot API implementation, which can be
used very easily.

Why PHP7 only?
----------

Mainly because PHP7 is a fantastic release and I wanted to release some new software based solely on this new version. 
If however there is a lot of interest from the community to get a PHP5.6 or PHP5.5 compatible version, I could make one.
You are free as well to contribute with a PHP-earlier branch. Just send in a pull request. However, take into 
consideration that the master branch will be PHP7 only.

Installation
----------

The preferred method is composer, so add the following to your composer.json:

```json
{
  "require": {
    "unreal4u/telegram-api": "~1.0"
  }
}
```

Basic usage
----------

```php
$sendMessage = new SendMessage();
$sendMessage->chat_id = A_USER_CHAT_ID;
$sendMessage->text = 'Hello world!';

$tgLog = new TgLog(BOT_TOKEN);
$message = $tgLog->performApiRequest($sendMessage);
```

With the SendMessage() object, you can create a message to be sent through the TelegramLog object.  
All other functionality is based upon this behaviour, so every other method is very similar: you instantiate an object, 
pass that object to TelegramLog->performApiRequest() and you'll get the native Telegram response back as an object. 
Different methods return different object types. 

Please refer to the examples directory to view examples of all implemented methods.

Getting updates via Webhook
---------

The first thing you'll have to do is register a webhook with Telegram via the SetWebhook method:

```php
$setWebhook = new SetWebhook();
$setWebhook->url = '[YOUR HTTPS URL]';

$tgLog = new TgLog(BOT_TOKEN);
$tgLog->performApiRequest($setWebhook);
```

This will leave you prepared to start receiving updates on the chosen URL: 

```php
$update = new Update($_POST);
```

Now <code>$update</code> will contain the actual Update object. Hope that wasn't too difficult :)

More information on this? You can check [how I implemented](https://github.com/unreal4u/tg-timebot) my 
[timeBot](https://telegram.me/TheTimeBot). Take however into account that the cited repo is only a playground (for now), 
so it can happen that things in that repository may or may not work as expected.

[Inline bots](https://github.com/unreal4u/telegram-api/wiki/Inline-Bots)
----------

Why this class?
----------

There are some pretty good alternatives around there, such as: 

[The (unofficial) SDK](https://github.com/irazasyed/telegram-bot-sdk)  
[akalongman's approach](https://github.com/akalongman/php-telegram-bot)

But I wanted to study a bunch of new concepts for me and make a standalone client that doesn't require Laravel or MySQL: 

* Telegram API
* PHP7
* Vagrant
* Monolog
* Guzzle
* PHP-CS

I had heard of all these great tools previously but I didn't have a nice project to work on and learn properly. So this
project was born. 

At the same time, I wanted an API that did respect Telegram's API model as much as possible, while being friendly to a
developer as well. The result of that is this package, check the examples for usage.

[Extra requirements](https://github.com/unreal4u/telegram-api/wiki/Creating-a-bot)
----------

Getting everything started up
-----------

The most difficult thing to do when performing an action with the Telegram API is to get the chat_id, which is the 
actual conversation window the bot talks to. You can execute the GetUpdates() method in order to get this chatId. Note
that there are some caveats on this, so you may be better out with the SetWebhook() method instead. 

Semver
-----------

I will try my best to respect [Semantic Versioning](http://semver.org).  
That being said, the first stable release is v1.0.0, from there on no mayor BC changes will occur unless we update
the major.

[Want to colaborate?](https://github.com/unreal4u/telegram-api/wiki/Want-to-colaborate%3F)
-----------
