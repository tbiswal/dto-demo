<?php

class EventValidation
{
    public static function validateEventDetails($eventData)
    {
        self::validateParams($eventData);
        self::validLocationLatitude($eventData['locationLatitude']);
        self::validPostalCode($eventData['postalCode']);
    }

    private static function validateParams($eventData)
    {
//        $paramWithRules = [
//            'address' => 'required',
//            'postalCode' => 'required',
//            'locationLatitude' => 'filled',
//        ];

//         Validation logic
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