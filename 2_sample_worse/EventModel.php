<?php

namespace sampleTwo;

class EventModel
{
    private string $postalCode;
    private string $locationLatitude;
    private string $eventCity;
    private string $eventState;

    public function save($request): bool
    {
        $this->postalCode       = $request->input('postalCode');
        $this->locationLatitude = $request->input('locationLatitude');
        $this->eventCity        = $request->input('eventCity');
        $this->eventState       = $request->input('eventState');

//        $this->save(); // Save to DB

        return true;
    }
}