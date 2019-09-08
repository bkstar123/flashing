<?php
/**
 * helper functions
 *
 * @author: tuanha
 * @last-mod: 08-Sept-2019
 */
if (! function_exists('flashing')) {
    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @param  string      $level
     * @return \Laracasts\Flash\FlashNotifier
     */
    function flashing(
        string $type = 'info',
        string $message = '',
        bool $important = false,
        string $position = 'bottom',
        int $timeout = 5000
    ) {
        app('flashing')->$type($message, $important, $position, $timeout);
    }
}
