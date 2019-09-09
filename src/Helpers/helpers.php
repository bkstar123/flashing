<?php
/**
 * helper functions
 *
 * @author: tuanha
 * @last-mod: 09-Sept-2019
 */
if (! function_exists('flashing')) {
    /**
     * Arrange for a flash message.
     *
     * @param  string|null $message
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    function flashing(string $message = '')
    {
        return app('flashing')->message($message);
    }
}
