<?php
namespace sampleThreeDTO;

class EventController
{
    public function createEvent($request)
    {
        $eventDTO = new EventDTO(
            ...
            EventValidation::validateEventDetails($request)
        );

        $eventModel = new EventModel();
        $status     = $eventModel->save($eventDTO);

        return response()->json($status, Response::HTTP_CREATED);
    }
}