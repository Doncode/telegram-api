<?php

declare(strict_types = 1);

namespace unreal4u\Telegram\Types;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file
 * will be sent by the user with optional caption. Alternatively, you can provide message_text to send it instead of the
 * animation.
 *
 * Objects defined as-is january 2016
 *
 * @see https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /**
     * Type of the result, must be mpeg4_gif
     * @var string
     */
    public $type = 'mpeg4_gif';

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     * @var string
     */
    public $mpeg4_url = '';

    /**
     * Optional. Video width
     * @var int
     */
    public $mpeg4_width = 0;

    /**
     * Optional. Video height
     * @var int
     */
    public $mpeg4_height = 0;

    /**
     * URL of the thumbnail for the photo
     * @var string
     */
    public $thumb_url = '';

    /**
     * Optional. Title for the result
     * @var string
     */
    public $title = '';

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-200 characters
     * @var string
     */
    public $caption = '';

    /**
     * Optional. Text of a message to be sent instead of the photo, 1-512 characters
     * @var string
     */
    public $message_text = '';

    /**
     * Optional. Send “Markdown”, if you want Telegram apps to show bold, italic and inline URLs in your bot's message
     * @var string
     */
    public $parse_mode = '';

    /**
     * Optional. Disables link previews for links in the sent message
     * @var bool
     */
    public $disable_web_page_preview = false;
}
