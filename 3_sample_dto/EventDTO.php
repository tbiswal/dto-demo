<?php
namespace sampleThreeDTO;

class EventDTO
{
    public string $address;
    public string $postalCode;
    public string $locationLatitude;
    public string $eventCity;
    public string $eventState;

    public function __construct(
        string $address,
        string $postalCode,
        string $locationLatitude,
        string $eventCity,
        string $eventState
    ) {
        $this->address          = $address;
        $this->postalCode       = $postalCode;
        $this->locationLatitude = $locationLatitude;
        $this->eventCity        = $eventCity;
        $this->eventState       = $eventState;
    }
}