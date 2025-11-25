<?php

namespace Helpers;

/**
 * Message's class
 */
class Message {

    public const MESSAGE_COLOR_INFO = "light-blue lighten-1";
    public const MESSAGE_COLOR_SUCCESS = "green lighten-2";
    public const MESSAGE_COLOR_ERROR = "red lighten-2";

    private string $message;
    private string $color;
    private string $title;

    /**
     * Message's constructor
     *
     * @param string $message object's message
     * @param string $color message's color
     * @param string $title message's title
     */
    public function __construct(string $message, string $color = self::MESSAGE_COLOR_INFO, string $title = "Message") {
        $this->message = $message;
        $this->color = $color;
        $this->title = $title;
    }

    /**
     * Get the object's message
     */
    public function getMessage(): string {
        return $this->message;
    }

    /**
     * Get the message's color
     */
    public function getColor(): string {
        return $this->color;
    }

    /**
     * Get the message's title
     */
    public function getTitle(): string {
        return $this->title;
    }
}
