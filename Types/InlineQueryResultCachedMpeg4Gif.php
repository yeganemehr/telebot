<?php
namespace packages\telebot;
class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult {
	/**
     * A valid file identifier for the GIF file
     *
     * @var string
     */
	protected $fileId;

    /**
	 * Caption of the mpeg4 to be sent, 0-200 characters
	 * 
     * @var string|null
     */
	protected $caption;

    /**
	 * Send Markdown or HTML, if you want Telegram apps to show bold, italic,
	 * fixed-width text or inline URLs in the media caption.
	 * 
     * @var string|null
     */
	protected $parseMode;
	
	
	public function __construct(string $id, string $fileId){
		parent::__construct('mpeg4_gif', $id, '');
		$this->fileId = $fileId;
	}
	
	public static function fromJson($data) {
		$object = new static($data->id, $data->mpeg4_file_id);
		if (isset($data->title)) {
			$object->title = $data->title;
		}
		if (isset($data->caption)) {
			$object->caption = $data->caption;
		}
		if (isset($data->parse_mode)) {
			$object->parseMode = $data->parse_mode;
		}
		if (isset($data->reply_markup)) {
			$object->replyMarkup = InlineKeyboardMarkup::fromJson($data->reply_markup);
		}
		if (isset($data->input_message_content)) {
			$object->inputMessageContent = InputMessageContent::fromJson($data->input_message_content);
		}
		return $object;
	}
	public function toJson() {
		$data = parent::toJson();
		$data['mpeg4_file_id'] = $this->fileId;
		if ($this->caption) {
			$data['caption'] = $this->caption;
		}
		if ($this->parseMode) {
			$data['parse_mode'] = $this->parseMode;
		}
		return $data;
	}
	

	/**
	 * Get a valid file identifier of the mpeg4
	 *
	 * @return  string
	 */ 
	public function getFileId(): string {
		return $this->fileId;
	}

	/**
	 * Set a valid file identifier of the mpeg4
	 *
	 * @param  string  $fileId  A valid file identifier of the mpeg4
	 * @return  void
	 */ 
	public function setFileId(string $fileId) {
		$this->fileId = $fileId;
	}

	/**
	 * Get caption of the mpeg4 to be sent, 0-200 characters
	 *
	 * @return  string|null
	 */ 
	public function getCaption() {
		return $this->caption;
	}

	/**
	 * Set caption of the mpeg4 to be sent, 0-200 characters
	 *
	 * @param  string|null  $caption  Caption of the mpeg4 to be sent, 0-200 characters
	 * @return  void
	 */ 
	public function setCaption($caption) {
		$this->caption = $caption;
	}

	/**
	 * Get fixed-width text or inline URLs in the media caption.
	 *
	 * @return  string|null
	 */ 
	public function getParseMode() {
		return $this->parseMode;
	}

	/**
	 * Set fixed-width text or inline URLs in the media caption.
	 *
	 * @param  string|null  $parseMode  fixed-width text or inline URLs in the media caption.
	 * @return  void
	 */ 
	public function setParseMode($parseMode) {
		$this->parseMode = $parseMode;
	}
}
