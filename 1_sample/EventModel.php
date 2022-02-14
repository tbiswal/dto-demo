<?php

class EventModel
{
    private $postalCode;
    private $locationLatitude;
    private $eventCity;
    private $eventState;

    public function save($eventData)
    {
        $this->postalCode       = $eventData['postalCode'];
        $this->locationLatitude = $eventData['locationLatitude'];
        $this->eventCity        = $eventData['eventCity'];
        $this->eventState       = $eventData['eventState'];

        $this->save(); // Save to DB

        return true;
    }
}