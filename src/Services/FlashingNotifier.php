<?php
/**
 * FlashingNotifier Service
 *
 * @author: tuanha
 * @last-mod: tuanha
 */

namespace Bkstar123\Flashing\Services;

class FlashingNotifier
{
    /**
     * @param  $message  string
     * @param  $important  bool
     * @param  $position  string bottom|top
     * @param  $timeout  int
     */
    public function success(string $message = '', bool $important = false, string $position = 'bottom', int $timeout = 5000)
    {
        session()->flash('flash_notification', [
            'message' => $message,
            'type' => 'success',
            'important' => $important,
            'timeout' => $timeout,
            'position' => in_array($position, ['bottom', 'top']) ? $position : 'bottom',
        ]);
    }

    /**
     * @param  $message  string
     * @param  $important  bool
     * @param  $position  string bottom|top
     * @param  $timeout  int
     */
    public function error(string $message = '', bool $important = false, string $position = 'bottom', int $timeout = 5000)
    {
        session()->flash('flash_notification', [
            'message' => $message,
            'type' => 'error',
            'important' => $important,
            'timeout' => $timeout,
            'position' => in_array($position, ['bottom', 'top']) ? $position : 'bottom',
        ]);
    }

    /**
     * @param  $message  string
     * @param  $important  bool
     * @param  $position  string bottom|top
     * @param  $timeout  int
     */
    public function warning(string $message = '', bool $important = false, string $position = 'bottom', int $timeout = 5000)
    {
        session()->flash('flash_notification', [
            'message' => $message,
            'type' => 'warning',
            'important' => $important,
            'timeout' => $timeout,
            'position' => in_array($position, ['bottom', 'top']) ? $position : 'bottom',
        ]);
    }

    /**
     * @param  $message  string
     * @param  $important  bool
     * @param  $position  string bottom|top
     * @param  $timeout  int
     */
    public function info(string $message = '', bool $important = false, string $position = 'bottom', int $timeout = 5000)
    {
        session()->flash('flash_notification', [
            'message' => $message,
            'type' => 'information',
            'important' => $important,
            'timeout' => $timeout,
            'position' => in_array($position, ['bottom', 'top']) ? $position : 'bottom',
        ]);
    }
}
