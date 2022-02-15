<?php

namespace sampleThreeDTO;

class EventValidation
{
    public static function validateEventDetails($request): array
    {
        self::validateParams($request);
        self::validLocationLatitude($request->input('locationLatitude'));
        self::validPostalCode($request->input('postalCode'));

        $eventData['address']          = $request->input('address');
        $eventData['postalCode']       = $request->input('postalCode');
        $eventData['locationLatitude'] = $request->input('locationLatitude');
        $eventData['eventCity']        = $request->input('eventCity');
        $eventData['eventState']       = $request->input('eventCity');

        return $eventData;
    }

    private static function validateParams($request)
    {
        /*
         $paramWithRules = [
            'address' => 'required',
            'postalCode' => 'required',
            'locationLatitude' => 'filled',
        ];

         Validation logic
        */
    }

    private static function validLocationLatitude($locationLatitude)
    {
        // Validation logic
    }

    private static function validPostalCode($postalCode)
    {
        // Validation logic
    }
}