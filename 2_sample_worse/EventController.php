<?php

namespace sampleTwo;

class EventController
{
    public function createEvent($request)
    {
        EventValidation::validateEventDetails($request);
        $eventModel = new EventModel();
        $status     = $eventModel->save($request);

        return response()->json($status, Response::HTTP_CREATED);
    }
}