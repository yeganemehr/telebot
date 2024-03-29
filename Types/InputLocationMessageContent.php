<?php
namespace packages\telebot;

class InputLocationMessageContent extends InputMessageContent {
	/**
     * Latitude of the location in degrees
     *
     * @var float
     */
	protected $latitude;
	
    /**
     * Longitude of the location in degrees
     *
     * @var float
     */
	protected $longitude;
	
	public function __construct(float $latitude, float $longitude){
		$this->latitude = $latitude;
		$this->longitude = $longitude;
	}
	public static function fromJson($data) {
		return new static($data->latitude, $this->longitude);
	}
	public function toJson() {
		return array(
			'latitude' => $this->latitude,
			'longitude' => $this->longitude,
		);
	}	

	/**
	 * Get latitude of the location in degrees
	 *
	 * @return  float
	 */ 
	public function getLatitude(): float {
		return $this->latitude;
	}

	/**
	 * Set latitude of the location in degrees
	 *
	 * @param  float  $latitude  Latitude of the location in degrees
	 * @return  void
	 */ 
	public function setLatitude(float $latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Get longitude of the location in degrees
	 *
	 * @return  float
	 */ 
	public function getLongitude(): float {
		return $this->longitude;
	}

	/**
	 * Set longitude of the location in degrees
	 *
	 * @param  float  $longitude  Longitude of the location in degrees
	 * @return  void
	 */ 
	public function setLongitude(float $longitude) {
		$this->longitude = $longitude;
	}
}
