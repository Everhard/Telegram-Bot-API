# Telegram Bot API

[![Latest Stable Version](https://poser.pugx.org/steadfast/telegram-bot-api/v/stable)](https://packagist.org/packages/steadfast/telegram-bot-api)
[![Total Downloads](https://poser.pugx.org/steadfast/telegram-bot-api/downloads)](https://packagist.org/packages/steadfast/telegram-bot-api)
[![License](https://poser.pugx.org/steadfast/telegram-bot-api/license)](https://packagist.org/packages/steadfast/telegram-bot-api)


An extended native [Telegram Bot API](https://core.telegram.org/bots/api) in PHP without requirements. Supports all methods and types of responses.

## Installation

``` bash
composer require steadfast/telegram-bot-api
```

## Client usage

How to send message:
``` php
use TelegramBot\Api\BotApi;

$bot = new BotApi($bot_api_token);

$bot->sendMessage($chat_id, $message_text);
```

## Server usage

To handle commands:
``` php
use TelegramBot\Api\Client;

$bot = new Client($bot_api_token);

$bot->command('ping', function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), 'pong!');
});
```

To handle an event when the bot was added to a group:
``` php
use TelegramBot\Api\Client;

$bot = new Client($bot_api_token);

$bot->wasAddedToAGroup(function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), "Let's welcome our new member!");
});
```

To handle an event when the bot was removed from a group:
``` php
use TelegramBot\Api\Client;

$bot = new Client($bot_api_token);

$bot->wasRemovedFromAGroup(function ($message) use ($bot) {
    $bot->sendMessage($message->getChat()->getId(), "Say goodbye to our friend!");
});
```

To handle any events:
``` php
use TelegramBot\Api\Client;

$bot = new Client($bot_api_token);

$bot->on(function ($update) {
    echo $update->getUpdateId();
});
```
