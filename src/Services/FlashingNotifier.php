<?php
/**
 * FlashingNotifier Service
 *
 * @author: tuanha
 * @last-mod: 09-Sept-2019
 */

namespace Bkstar123\Flashing\Services;

use Bkstar123\Flashing\Message;

class FlashingNotifier
{
    /**
     * @var $message  \Bkstar123\Flashing\Message
     */
    public $message;

    /**
     * Create a message instance
     *
     * @param string  $message
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function message(string $message)
    {
        $this->message =  new Message($message);
        return $this;
    }

    /**
     * Set message type to success
     *
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function success()
    {
        $this->message->type('success');
        return $this;
    }

    /**
     * Set message type to error
     *
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function error()
    {
        $this->message->type('error');
        return $this;
    }

    /**
     * Set message type to success
     *
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function warning()
    {
        $this->message->type('warning');
        return $this;
    }

    /**
     * Set message type to success
     *
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function info()
    {
        $this->message->type('information');
        return $this;
    }

    /**
     * Set important flag for the message
     *
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function important()
    {
        $this->message->important();
        return $this;
    }

    /**
     * Set message timeout
     *
     * @param int  $timeout
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function timeout(int $timeout)
    {
        $this->message->timeout($timeout);
        return $this;
    }

    /**
     * Set message position
     *
     * @param string  $position (bottom|top)
     * @return \Bkstar123\Flashing\Services\FlashingNotifier
     */
    public function position(string $position)
    {
        $this->message->position($position);
        return $this;
    }

    /**
     * Flash the message to session
     */
    public function flash()
    {
        session()->flash('flash_notification', $this->message->toArray());
    }
}
