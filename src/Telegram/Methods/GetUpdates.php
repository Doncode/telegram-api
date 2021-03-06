<?php

declare(strict_types = 1);

namespace unreal4u\Telegram\Methods;

use unreal4u\Abstracts\TelegramMethods;

/**
 * This will get the updates Telegram has for our bot
 *
 * This will work under 3 conditions:
 *
 * <ul>
 *  <li>No more than 24 hours has passed since the last update</li>
 *  <li>No webhooks are configured</li>
 *  <li>There are available updates (doh)</li>
 * </ul>
 *
 * You can use this method to get the channel id the bot has to send messages to
 *
 * @see https://core.telegram.org/bots/api#getupdates
 */
class GetUpdates extends TelegramMethods
{
    /**
     * Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of
     * previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An
     * update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id.
     * @var int
     */
    public $offset = 0;

    /**
     * Limits the number of updates to be retrieved. Values between 1—100 are accepted. Defaults to 100
     * @var int
     */
    public $limit = 100;

    /**
     * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling
     * @var int
     */
    public $timeout = 0;

    /**
     * This call will return an array with updates, so call up a custom type to do this
     *
     * @return string
     */
    public static function bindToObjectType(): string
    {
        return 'Custom\\UpdatesArray';
    }
}
