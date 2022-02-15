<?php
namespace sampleOne;

class EventController
{
    public function createEvent($request)
    {
        $eventData['address']          = $request->input('location');
        $eventData['postalCode']       = $request->input('postalCode');
        $eventData['locationLatitude'] = $request->input('locationLatitude');
        $eventData['eventCity']        = $request->input('eventCity');
        $eventData['eventState']       = $request->input('eventCity');

        EventValidation::validateEventDetails($eventData);

        $eventModel = new EventModel();
        $status     = $eventModel->save($eventData);

        return response()->json($status, Response::HTTP_CREATED);
    }
}