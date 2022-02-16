<?php
namespace sampleOne;

class EventModel
{
    private string $postalCode;
    private string $locationLatitude;
    private string $eventCity;
    private string $eventState;

    public function save($eventData): bool
    {
        $this->postalCode       = $eventData['postalCode'];
        $this->locationLatitude = $eventData['locationLatitude'];
        $this->eventCity        = $eventData['eventCity'];
        $this->eventState       = $eventData['eventState'];

//        $this->save(); // Save to DB

        return true;
    }
}