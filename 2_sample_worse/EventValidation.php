<?php

namespace sampleTwo;

class EventValidation
{
    public static function validateEventDetails($request)
    {
        self::validateParams($request);
        self::validLocationLatitude($request->input('locationLatitude'));
        self::validPostalCode($request->input('postalCode'));
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