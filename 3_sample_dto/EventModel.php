<?php
namespace sampleThreeDTO;

class EventModel
{
    private $postalCode;
    private $locationLatitude;
    private $eventCity;
    private $eventState;

    public function save(EventDTO $eventDTO): bool
    {
        $this->postalCode       = $eventDTO->postalCode;
        $this->locationLatitude = $eventDTO->locationLatitude;
        $this->eventCity        = $eventDTO->eventCity;
        $this->eventState       = $eventDTO->eventState;

        // $this->save(); // Save to DB

        return true;
    }
}