<?php
/**
 * Message
 *
 * @author: tuanha
 * @last-mod: 09-Sept-2019
 */
namespace Bkstar123\Flashing;

class Message
{
	/**
	 * @var $message  string
	 */
	public $message = '';

	/**
	 * @var $type  string
	 */
	public $type = 'info';

	/**
	 * @var $important  bool
	 */
	public $important = false;

	/**
	 * @var $timeout  int (miliseconds)
	 */
	public $timeout = 5000;

	/**
	 * @var $position  string  (top|bottom)
	 */
	public $position = 'bottom';

	/**
	 * Create instance
	 *
	 * @param string  $message
	 */
	public function __construct(string $message)
	{
		$this->message = $message;
	}

	/**
	 * Set message type
	 *
	 * @param string  $type
	 * @return \Bkstar123\Flashing\Message
	 */
	public function type(string $type)
	{
		if (in_array($type, ['success', 'error', 'warning', 'information'])) {
			$this->type = $type;
		}
		return $this;
	}

	/**
	 * Mark important
	 *
	 * @return \Bkstar123\Flashing\Message
	 */
	public function important()
	{
		$this->important = true;
		return $this;
	}

	/**
	 * Set message timeout
	 *
	 * @param int  $timeout
	 * @return \Bkstar123\Flashing\Message
	 */
	public function timeout(int $timeout)
	{
		$this->timeout = $timeout;
		return $this;
	}

	/**
	 * Set message position (either top-right or bottom-right)
	 *
	 * @param string  $position
	 * @return \Bkstar123\Flashing\Message
	 */
	public function position(string $position)
	{
		if (in_array($position, ['top', 'bottom'])) {
			$this->position = $position;
		}
	}

	/**
	 * Convert message object to array
	 *
	 * @return array
	 */
	public function toArray()
	{
		return [
			'message' => $this->message,
			'type' => $this->type,
			'important' => $this->important,
			'timeout' => $this->timeout,
			'position' => $this->position
		];
	}
}