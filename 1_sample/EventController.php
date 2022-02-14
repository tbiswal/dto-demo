<?php

class EventController
{
    public function createEvent($request)
    {
        $eventData['address'] = $request->input('location');
        $eventData['postalCode'] = $request->input('postalCode');
        $eventData['locationLatitude'] = $request->input('locationLatitude');
        $eventData['eventCity'] = $request->input('eventCity');
        $eventData['eventState'] = $request->input('eventCity');

        EventValidation::validateEventDetails($eventData);
        EventModel::save($eventData);
    }
}