<?php

declare(strict_types = 1);

namespace unreal4u\Telegram\Methods;

use unreal4u\Abstracts\TelegramMethods;
use unreal4u\Telegram\Types\Custom\InputFile;

/**
 * Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any
 * type of up to 50 MB in size, this limit may be changed in the future.
 *
 * @see https://core.telegram.org/bots/api#senddocument
 */
class SendDocument extends TelegramMethods
{
    /**
     * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     * @var string
     */
    public $chat_id = '';

    /**
     * File to send. You can either pass a file_id as String to resend a file that is already on the Telegram servers,
     * or upload a new file using the InputFile class
     *
     * @see unreal4u\Telegram\Types\Custom\InputFile
     *
     * @var InputFile
     */
    public $document = null;

    /**
     * Optional. If the message is a reply, ID of the original message
     * @var int
     */
    public $reply_to_message_id = 0;

    /**
     * Optional. Additional interface options. A JSON-serialized object for a custom reply keyboard, instructions to
     * hide keyboard or to force a reply from the user
     * @var null
     */
    public $reply_markup = null;
}
