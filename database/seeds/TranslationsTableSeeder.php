<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Single',
                'value' => 'With a single bed and a shower room, this room is ideal for accommodating a business person in the heart of Paris. Overlooking the interior courtyard, it offers a peaceful and serene setting conducive to rest. Cozy and delicate, our Single room will delight you with its softness and will become your haven of peace for a few nights.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'failed',
                'value' => 'These credentials do not match our records.',
                'created_at' => '2020-07-04 18:23:46',
                'updated_at' => '2020-07-04 18:23:46',
            ),
            2 => 
            array (
                'id' => 3,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'throttle',
                'value' => 'Too many login attempts. Please try again in :seconds seconds.',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            3 => 
            array (
                'id' => 4,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'name',
                'value' => 'Firstname and lastname',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            4 => 
            array (
                'id' => 5,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'mobile',
                'value' => 'Phone number',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            5 => 
            array (
                'id' => 6,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'country',
                'value' => 'Country',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            6 => 
            array (
                'id' => 7,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'email',
                'value' => 'E-Mail',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            7 => 
            array (
                'id' => 8,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'password',
                'value' => 'Password',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            8 => 
            array (
                'id' => 9,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'Confirm_Password',
                'value' => 'Confirm password',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            9 => 
            array (
                'id' => 10,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'cc',
                'value' => 'Credit Card Number',
                'created_at' => '2020-07-04 18:23:47',
                'updated_at' => '2020-07-04 18:23:47',
            ),
            10 => 
            array (
                'id' => 11,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'cc_holder',
                'value' => 'Card Holder name',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            11 => 
            array (
                'id' => 12,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'exp_month',
                'value' => 'Expiration month',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            12 => 
            array (
                'id' => 13,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'exp_year',
                'value' => 'Expiration year',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            13 => 
            array (
                'id' => 14,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'cvc',
                'value' => 'Cryptogramme visuel',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            14 => 
            array (
                'id' => 15,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'checkout',
                'value' => 'Checkout Now',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            15 => 
            array (
                'id' => 16,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'Payment_Details',
                'value' => 'payment details',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            16 => 
            array (
                'id' => 17,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'reservation',
                'value' => 'Make Your Reservation',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            17 => 
            array (
                'id' => 18,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Conditions',
                'value' => 'Free cancellation before',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            18 => 
            array (
                'id' => 19,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'warranty',
                'value' => '',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-08-17 16:35:07',
            ),
            19 => 
            array (
                'id' => 20,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'More',
                'value' => 'More',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            20 => 
            array (
                'id' => 21,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Room',
                'value' => 'Room',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            21 => 
            array (
                'id' => 22,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'Parking',
                'value' => 'Paid parking in front of the hotel',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            22 => 
            array (
                'id' => 23,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'Tv',
                'value' => 'Flat screen TV with cable and satellite',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            23 => 
            array (
                'id' => 24,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'FloorService',
                'value' => 'Floor service',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            24 => 
            array (
                'id' => 25,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'Breakfast',
                'value' => 'Breakfast buffet or served in your room',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            25 => 
            array (
                'id' => 26,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'AirCon',
                'value' => 'Individual climate control',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            26 => 
            array (
                'id' => 27,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'PhoneService',
                'value' => 'Direct phone lines',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            27 => 
            array (
                'id' => 28,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'Safe',
                'value' => 'Safe',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            28 => 
            array (
                'id' => 29,
                'language_id' => 1,
                'group' => 'services',
                'key' => 'Blowdryer',
                'value' => 'Hair dryer',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            29 => 
            array (
                'id' => 30,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'RoomOnly',
                'value' => 'Without Breakfast',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            30 => 
            array (
                'id' => 31,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Wbreakfast',
                'value' => 'Breakfast included',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            31 => 
            array (
                'id' => 32,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Nights',
                'value' => 'nights',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            32 => 
            array (
                'id' => 33,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Area',
                'value' => 'Surface ',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            33 => 
            array (
                'id' => 34,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Bed',
                'value' => 'Bed',
                'created_at' => '2020-07-04 18:23:48',
                'updated_at' => '2020-07-04 18:23:48',
            ),
            34 => 
            array (
                'id' => 35,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Person',
                'value' => 'Person',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            35 => 
            array (
                'id' => 36,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Payment',
                'value' => 'Payment methods',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            36 => 
            array (
                'id' => 37,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Children',
                'value' => 'Children',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            37 => 
            array (
                'id' => 38,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Checkin',
                'value' => 'Check In',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            38 => 
            array (
                'id' => 39,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Checkout',
                'value' => 'Check Out',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            39 => 
            array (
                'id' => 40,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Adults',
                'value' => 'Adults',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            40 => 
            array (
                'id' => 41,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Checkavailability',
                'value' => 'Check availability',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            41 => 
            array (
                'id' => 42,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Card',
                'value' => 'Credit Card',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            42 => 
            array (
                'id' => 43,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Cash',
                'value' => 'Cash',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            43 => 
            array (
                'id' => 44,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'Check',
                'value' => 'Check',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            44 => 
            array (
                'id' => 45,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Bookings',
                'value' => 'Manage your reservations.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            45 => 
            array (
                'id' => 46,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Book',
                'value' => 'book a room',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            46 => 
            array (
                'id' => 47,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Dashboard',
                'value' => 'Dashboard',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            47 => 
            array (
                'id' => 48,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Rooms',
                'value' => 'Checkout Our rooms.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            48 => 
            array (
                'id' => 49,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Reservations',
                'value' => 'My Reservations',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            49 => 
            array (
                'id' => 50,
                'language_id' => 1,
                'group' => 'dashboard',
                'key' => 'Checkout',
                'value' => 'Checkout',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            50 => 
            array (
                'id' => 51,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_title-1',
                'value' => 'Royal Hôtel',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            51 => 
            array (
                'id' => 52,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_body-1',
                'value' => 'The Royal Hotel is ideally located to allow you to fully enjoy the pleasures of Paris !.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            52 => 
            array (
                'id' => 53,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_title-2',
                'value' => 'A large choice of rooms',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            53 => 
            array (
                'id' => 54,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_body-2',
                'value' => 'The 56 rooms offer a rare diversity. Divided into 6 categories.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            54 => 
            array (
                'id' => 55,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_title-3',
                'value' => 'our Reception',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            55 => 
            array (
                'id' => 56,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'header_body-3',
                'value' => 'Our warm and multilingual receptionists welcome you at any time.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            56 => 
            array (
                'id' => 57,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'main_title',
                'value' => 'Two steps from the Champs Elysées.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            57 => 
            array (
                'id' => 58,
                'language_id' => 1,
                'group' => 'home',
                'key' => 'main_body',
            'value' => 'Quietly located on the majestic avenue de Friedland, the hotel is located in the heart of the prestigious 8th district of Paris. With the Champs-Elysées and the Arc de Triomphe close by, you can enjoy the excitement of the most beautiful avenue in the world and the proximity of all the most beautiful monuments of Paris (Eiffel Tower, Louvre, Montmartre .. .) all less than 20 minutes by direct metro.',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            58 => 
            array (
                'id' => 59,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Home',
                'value' => 'Home',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            59 => 
            array (
                'id' => 60,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Rooms',
                'value' => 'Rooms',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            60 => 
            array (
                'id' => 61,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Book',
                'value' => 'Book a room',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            61 => 
            array (
                'id' => 62,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Dashboard',
                'value' => 'Dashboard',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            62 => 
            array (
                'id' => 63,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Reservations',
                'value' => 'My reservations',
                'created_at' => '2020-07-04 18:23:49',
                'updated_at' => '2020-07-04 18:23:49',
            ),
            63 => 
            array (
                'id' => 64,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Logout',
                'value' => 'Logout',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            64 => 
            array (
                'id' => 65,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Login',
                'value' => 'Login',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            65 => 
            array (
                'id' => 66,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'Signup',
                'value' => 'Signup',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            66 => 
            array (
                'id' => 67,
                'language_id' => 1,
                'group' => 'pagination',
                'key' => 'previous',
                'value' => '&laquo; Previous',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            67 => 
            array (
                'id' => 68,
                'language_id' => 1,
                'group' => 'pagination',
                'key' => 'next',
                'value' => 'Next &raquo;',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            68 => 
            array (
                'id' => 69,
                'language_id' => 1,
                'group' => 'passwords',
                'key' => 'reset',
                'value' => 'Your password has been reset!',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            69 => 
            array (
                'id' => 70,
                'language_id' => 1,
                'group' => 'passwords',
                'key' => 'sent',
                'value' => 'We have emailed your password reset link!',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            70 => 
            array (
                'id' => 71,
                'language_id' => 1,
                'group' => 'passwords',
                'key' => 'throttled',
                'value' => 'Please wait before retrying.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            71 => 
            array (
                'id' => 72,
                'language_id' => 1,
                'group' => 'passwords',
                'key' => 'token',
                'value' => 'This password reset token is invalid.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            72 => 
            array (
                'id' => 73,
                'language_id' => 1,
                'group' => 'passwords',
                'key' => 'user',
                'value' => 'We can\'t find a user with that email address.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            73 => 
            array (
                'id' => 74,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Classique',
                'value' => 'Enjoying an exhibition on the interior of the hotel or on the Chateaubriand street parallel to the Champs-Elysées, this stylish room offers unbeatable comfort and calm. With a double bed and a marble bathroom, it embodies Parisian charm and elegance in a warm decor, meticulously cared for for your comfort.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            74 => 
            array (
                'id' => 75,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Deluxe',
                'value' => 'The Deluxe room reflects the refinement of the Superior room and offers you the softness and discreet luxury for 3 people. In this spacious space, you can enjoy a double bed and an extra bed that can accommodate up to three people. Luxurious, warm and refined, the Deluxe room will charm you as soon as you arrive in Paris to make you enjoy an unforgettable moment with us.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            75 => 
            array (
                'id' => 76,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Executive',
                'value' => 'Do you like extreme refinement? Proud of its exceptional location, the Executive room will not disappoint. During your stay, it will be the place where you will like to rest and enjoy an exceptional view of the Arc de Triomphe, depending on the floors, after having benefited from the thousand attractions of Parisian life. The Executive room has a large bed, a nice bathroom and a space for tea. This elegant room will charm you with its Parisian authenticity mixed with a majestic setting.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            76 => 
            array (
                'id' => 77,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Familiale',
                'value' => 'The Family room, a reflection of space and well-being, offers the softness of subtle and discreet luxury. In this space with remarkable volume, you can enjoy a double bed and a sofa bed for up to four people. Luxurious, warm and refined, the family room will charm you as soon as you arrive in Paris to offer you the best of stays.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            77 => 
            array (
                'id' => 78,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Superieure',
                'value' => 'Synonymous with refinement, most of our Superior rooms enjoy a view of Avenue de Friedland, a majestic tree-lined artery in the axis of the Arc de Triomphe. Elegant and warm, the Superior room invites you to experience an exceptional stay in the heart of Paris.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            78 => 
            array (
                'id' => 79,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Triple',
                'value' => 'hello there',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:26:36',
            ),
            79 => 
            array (
                'id' => 80,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'header',
                'value' => '4-STAR HOTEL TWO STEPS AWAY FROM THE CHAMPS ELYSÉE AND THE ARC DE TRIOMPHE',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            80 => 
            array (
                'id' => 81,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'price',
                'value' => 'starting from',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            81 => 
            array (
                'id' => 82,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'accepted',
                'value' => 'The :attribute must be accepted.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            82 => 
            array (
                'id' => 83,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'active_url',
                'value' => 'The :attribute is not a valid URL.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            83 => 
            array (
                'id' => 84,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'after',
                'value' => 'The :attribute must be a date after :date.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            84 => 
            array (
                'id' => 85,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'after_or_equal',
                'value' => 'The :attribute must be a date after or equal to :date.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            85 => 
            array (
                'id' => 86,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'alpha',
                'value' => 'The :attribute may only contain letters.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            86 => 
            array (
                'id' => 87,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'alpha_dash',
                'value' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            87 => 
            array (
                'id' => 88,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'alpha_num',
                'value' => 'The :attribute may only contain letters and numbers.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            88 => 
            array (
                'id' => 89,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'array',
                'value' => 'The :attribute must be an array.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            89 => 
            array (
                'id' => 90,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'before',
                'value' => 'The :attribute must be a date before :date.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            90 => 
            array (
                'id' => 91,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'before_or_equal',
                'value' => 'The :attribute must be a date before or equal to :date.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            91 => 
            array (
                'id' => 92,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'between.numeric',
                'value' => 'The :attribute must be between :min and :max.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            92 => 
            array (
                'id' => 93,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'between.file',
                'value' => 'The :attribute must be between :min and :max kilobytes.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            93 => 
            array (
                'id' => 94,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'between.string',
                'value' => 'The :attribute must be between :min and :max characters.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            94 => 
            array (
                'id' => 95,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'between.array',
                'value' => 'The :attribute must have between :min and :max items.',
                'created_at' => '2020-07-04 18:23:50',
                'updated_at' => '2020-07-04 18:23:50',
            ),
            95 => 
            array (
                'id' => 96,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'boolean',
                'value' => 'The :attribute field must be true or false.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            96 => 
            array (
                'id' => 97,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'confirmed',
                'value' => 'The :attribute confirmation does not match.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            97 => 
            array (
                'id' => 98,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'date',
                'value' => 'The :attribute is not a valid date.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            98 => 
            array (
                'id' => 99,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'date_equals',
                'value' => 'The :attribute must be a date equal to :date.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            99 => 
            array (
                'id' => 100,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'date_format',
                'value' => 'The :attribute does not match the format :format.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            100 => 
            array (
                'id' => 101,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'different',
                'value' => 'The :attribute and :other must be different.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            101 => 
            array (
                'id' => 102,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'digits',
                'value' => 'The :attribute must be :digits digits.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            102 => 
            array (
                'id' => 103,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'digits_between',
                'value' => 'The :attribute must be between :min and :max digits.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            103 => 
            array (
                'id' => 104,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'dimensions',
                'value' => 'The :attribute has invalid image dimensions.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            104 => 
            array (
                'id' => 105,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'distinct',
                'value' => 'The :attribute field has a duplicate value.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            105 => 
            array (
                'id' => 106,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'email',
                'value' => 'The :attribute must be a valid email address.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            106 => 
            array (
                'id' => 107,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'ends_with',
                'value' => 'The :attribute must end with one of the following: :values.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            107 => 
            array (
                'id' => 108,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'exists',
                'value' => 'The selected :attribute is invalid.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            108 => 
            array (
                'id' => 109,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'file',
                'value' => 'The :attribute must be a file.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            109 => 
            array (
                'id' => 110,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'filled',
                'value' => 'The :attribute field must have a value.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            110 => 
            array (
                'id' => 111,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gt.numeric',
                'value' => 'The :attribute must be greater than :value.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            111 => 
            array (
                'id' => 112,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gt.file',
                'value' => 'The :attribute must be greater than :value kilobytes.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            112 => 
            array (
                'id' => 113,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gt.string',
                'value' => 'The :attribute must be greater than :value characters.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            113 => 
            array (
                'id' => 114,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gt.array',
                'value' => 'The :attribute must have more than :value items.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            114 => 
            array (
                'id' => 115,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gte.numeric',
                'value' => 'The :attribute must be greater than or equal :value.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            115 => 
            array (
                'id' => 116,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gte.file',
                'value' => 'The :attribute must be greater than or equal :value kilobytes.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            116 => 
            array (
                'id' => 117,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gte.string',
                'value' => 'The :attribute must be greater than or equal :value characters.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            117 => 
            array (
                'id' => 118,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'gte.array',
                'value' => 'The :attribute must have :value items or more.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            118 => 
            array (
                'id' => 119,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'image',
                'value' => 'The :attribute must be an image.',
                'created_at' => '2020-07-04 18:23:51',
                'updated_at' => '2020-07-04 18:23:51',
            ),
            119 => 
            array (
                'id' => 120,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'in',
                'value' => 'The selected :attribute is invalid.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            120 => 
            array (
                'id' => 121,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'in_array',
                'value' => 'The :attribute field does not exist in :other.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            121 => 
            array (
                'id' => 122,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'integer',
                'value' => 'The :attribute must be an integer.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            122 => 
            array (
                'id' => 123,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'ip',
                'value' => 'The :attribute must be a valid IP address.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            123 => 
            array (
                'id' => 124,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'ipv4',
                'value' => 'The :attribute must be a valid IPv4 address.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            124 => 
            array (
                'id' => 125,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'ipv6',
                'value' => 'The :attribute must be a valid IPv6 address.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            125 => 
            array (
                'id' => 126,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'json',
                'value' => 'The :attribute must be a valid JSON string.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            126 => 
            array (
                'id' => 127,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lt.numeric',
                'value' => 'The :attribute must be less than :value.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            127 => 
            array (
                'id' => 128,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lt.file',
                'value' => 'The :attribute must be less than :value kilobytes.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            128 => 
            array (
                'id' => 129,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lt.string',
                'value' => 'The :attribute must be less than :value characters.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            129 => 
            array (
                'id' => 130,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lt.array',
                'value' => 'The :attribute must have less than :value items.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            130 => 
            array (
                'id' => 131,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lte.numeric',
                'value' => 'The :attribute must be less than or equal :value.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            131 => 
            array (
                'id' => 132,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lte.file',
                'value' => 'The :attribute must be less than or equal :value kilobytes.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            132 => 
            array (
                'id' => 133,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lte.string',
                'value' => 'The :attribute must be less than or equal :value characters.',
                'created_at' => '2020-07-04 18:23:52',
                'updated_at' => '2020-07-04 18:23:52',
            ),
            133 => 
            array (
                'id' => 134,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'lte.array',
                'value' => 'The :attribute must not have more than :value items.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            134 => 
            array (
                'id' => 135,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'max.numeric',
                'value' => 'The :attribute may not be greater than :max.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            135 => 
            array (
                'id' => 136,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'max.file',
                'value' => 'The :attribute may not be greater than :max kilobytes.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            136 => 
            array (
                'id' => 137,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'max.string',
                'value' => 'The :attribute may not be greater than :max characters.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            137 => 
            array (
                'id' => 138,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'max.array',
                'value' => 'The :attribute may not have more than :max items.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            138 => 
            array (
                'id' => 139,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'mimes',
                'value' => 'The :attribute must be a file of type: :values.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            139 => 
            array (
                'id' => 140,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'mimetypes',
                'value' => 'The :attribute must be a file of type: :values.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            140 => 
            array (
                'id' => 141,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'min.numeric',
                'value' => 'The :attribute must be at least :min.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            141 => 
            array (
                'id' => 142,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'min.file',
                'value' => 'The :attribute must be at least :min kilobytes.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            142 => 
            array (
                'id' => 143,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'min.string',
                'value' => 'The :attribute must be at least :min characters.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            143 => 
            array (
                'id' => 144,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'min.array',
                'value' => 'The :attribute must have at least :min items.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            144 => 
            array (
                'id' => 145,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'not_in',
                'value' => 'The selected :attribute is invalid.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            145 => 
            array (
                'id' => 146,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'not_regex',
                'value' => 'The :attribute format is invalid.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            146 => 
            array (
                'id' => 147,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'numeric',
                'value' => 'The :attribute must be a number.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            147 => 
            array (
                'id' => 148,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'password',
                'value' => 'The password is incorrect.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            148 => 
            array (
                'id' => 149,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'present',
                'value' => 'The :attribute field must be present.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            149 => 
            array (
                'id' => 150,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'regex',
                'value' => 'The :attribute format is invalid.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            150 => 
            array (
                'id' => 151,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required',
                'value' => 'The :attribute field is required.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            151 => 
            array (
                'id' => 152,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_if',
                'value' => 'The :attribute field is required when :other is :value.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            152 => 
            array (
                'id' => 153,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_unless',
                'value' => 'The :attribute field is required unless :other is in :values.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            153 => 
            array (
                'id' => 154,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_with',
                'value' => 'The :attribute field is required when :values is present.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            154 => 
            array (
                'id' => 155,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_with_all',
                'value' => 'The :attribute field is required when :values are present.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            155 => 
            array (
                'id' => 156,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_without',
                'value' => 'The :attribute field is required when :values is not present.',
                'created_at' => '2020-07-04 18:23:53',
                'updated_at' => '2020-07-04 18:23:53',
            ),
            156 => 
            array (
                'id' => 157,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'required_without_all',
                'value' => 'The :attribute field is required when none of :values are present.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            157 => 
            array (
                'id' => 158,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'same',
                'value' => 'The :attribute and :other must match.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            158 => 
            array (
                'id' => 159,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'size.numeric',
                'value' => 'The :attribute must be :size.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            159 => 
            array (
                'id' => 160,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'size.file',
                'value' => 'The :attribute must be :size kilobytes.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            160 => 
            array (
                'id' => 161,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'size.string',
                'value' => 'The :attribute must be :size characters.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            161 => 
            array (
                'id' => 162,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'size.array',
                'value' => 'The :attribute must contain :size items.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            162 => 
            array (
                'id' => 163,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'starts_with',
                'value' => 'The :attribute must start with one of the following: :values.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            163 => 
            array (
                'id' => 164,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'string',
                'value' => 'The :attribute must be a string.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            164 => 
            array (
                'id' => 165,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'timezone',
                'value' => 'The :attribute must be a valid zone.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            165 => 
            array (
                'id' => 166,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'unique',
                'value' => 'The :attribute has already been taken.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            166 => 
            array (
                'id' => 167,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'uploaded',
                'value' => 'The :attribute failed to upload.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            167 => 
            array (
                'id' => 168,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'url',
                'value' => 'The :attribute format is invalid.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            168 => 
            array (
                'id' => 169,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'uuid',
                'value' => 'The :attribute must be a valid UUID.',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            169 => 
            array (
                'id' => 170,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'custom.attribute-name.rule-name',
                'value' => 'custom-message',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            170 => 
            array (
                'id' => 171,
                'language_id' => 1,
                'group' => 'translation::errors',
                'key' => 'language_exists',
                'value' => 'The language { :language } already exists',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            171 => 
            array (
                'id' => 172,
                'language_id' => 1,
                'group' => 'translation::errors',
                'key' => 'key_exists',
                'value' => 'The translation key { :key } already exists',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            172 => 
            array (
                'id' => 173,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'languages',
                'value' => 'Languages',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            173 => 
            array (
                'id' => 174,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'language',
                'value' => 'Language',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            174 => 
            array (
                'id' => 175,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'type',
                'value' => 'Type',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            175 => 
            array (
                'id' => 176,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'file',
                'value' => 'File',
                'created_at' => '2020-07-04 18:23:54',
                'updated_at' => '2020-07-04 18:23:54',
            ),
            176 => 
            array (
                'id' => 177,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'key',
                'value' => 'Key',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            177 => 
            array (
                'id' => 178,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_language',
            'value' => 'Enter the language code you would like to add (e.g. en)',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            178 => 
            array (
                'id' => 179,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'language_added',
                'value' => 'New language added successfully 🙌',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            179 => 
            array (
                'id' => 180,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_language_for_key',
            'value' => 'Enter the language for the key (e.g. en)',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            180 => 
            array (
                'id' => 181,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_type',
                'value' => 'Is this a json or array key?',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            181 => 
            array (
                'id' => 182,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_file',
                'value' => 'Which file will this be stored in?',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            182 => 
            array (
                'id' => 183,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_key',
                'value' => 'What is the key for this translation?',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            183 => 
            array (
                'id' => 184,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_value',
                'value' => 'What is the value for this translation',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            184 => 
            array (
                'id' => 185,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'type_error',
                'value' => 'Translation type must be json or array',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            185 => 
            array (
                'id' => 186,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'language_key_added',
                'value' => 'New language key added successfully 👏',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            186 => 
            array (
                'id' => 187,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'no_missing_keys',
                'value' => 'There are no missing translation keys in the app 🎉',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            187 => 
            array (
                'id' => 188,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'keys_synced',
                'value' => 'Missing keys synchronised successfully 🎊',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            188 => 
            array (
                'id' => 189,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'search',
                'value' => 'Search all translations',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            189 => 
            array (
                'id' => 190,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'translations',
                'value' => 'Translation',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            190 => 
            array (
                'id' => 191,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'language_name',
                'value' => 'Name',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            191 => 
            array (
                'id' => 192,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'locale',
                'value' => 'Locale',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            192 => 
            array (
                'id' => 193,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'add',
                'value' => '+ Add',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            193 => 
            array (
                'id' => 194,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'add_language',
                'value' => 'Add a new language',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            194 => 
            array (
                'id' => 195,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'save',
                'value' => 'Save',
                'created_at' => '2020-07-04 18:23:55',
                'updated_at' => '2020-07-04 18:23:55',
            ),
            195 => 
            array (
                'id' => 196,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'language_exists',
                'value' => 'The :attribute already exists.',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            196 => 
            array (
                'id' => 197,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'uh_oh',
                'value' => 'Something\'s not quite right',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            197 => 
            array (
                'id' => 198,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'group_single',
                'value' => 'Group / Single',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            198 => 
            array (
                'id' => 199,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'group',
                'value' => 'Group',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            199 => 
            array (
                'id' => 200,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'single',
                'value' => 'Single',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            200 => 
            array (
                'id' => 201,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'value',
                'value' => 'Value',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            201 => 
            array (
                'id' => 202,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'namespace',
                'value' => 'Namespace',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            202 => 
            array (
                'id' => 203,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_from_driver',
                'value' => 'Which driver would you like to take translations from?',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            203 => 
            array (
                'id' => 204,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_to_driver',
                'value' => 'Which driver would you like to add the translations to?',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            204 => 
            array (
                'id' => 205,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'prompt_language_if_any',
            'value' => 'Which language? (leave blank for all)',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            205 => 
            array (
                'id' => 206,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'syncing',
                'value' => 'Syncing translations ⏳',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            206 => 
            array (
                'id' => 207,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'synced',
                'value' => 'Translations have been synced 😎',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            207 => 
            array (
                'id' => 208,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'invalid_driver',
                'value' => 'Invalid driver',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            208 => 
            array (
                'id' => 209,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'invalid_language',
                'value' => 'Invalid language',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            209 => 
            array (
                'id' => 210,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'add_translation',
                'value' => 'Add a translation',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            210 => 
            array (
                'id' => 211,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'translation_added',
                'value' => 'New translation added successfull 🙌',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            211 => 
            array (
                'id' => 212,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'namespace_label',
            'value' => 'Namespace (Optional)',
                'created_at' => '2020-07-04 18:23:56',
                'updated_at' => '2020-07-04 18:23:56',
            ),
            212 => 
            array (
                'id' => 213,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'group_label',
            'value' => 'Group (Optional)',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            213 => 
            array (
                'id' => 214,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'key_label',
                'value' => 'Key',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            214 => 
            array (
                'id' => 215,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'value_label',
                'value' => 'Value',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            215 => 
            array (
                'id' => 216,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'namespace_placeholder',
                'value' => 'e.g. my_package',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            216 => 
            array (
                'id' => 217,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'group_placeholder',
                'value' => 'e.g. validation',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            217 => 
            array (
                'id' => 218,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'key_placeholder',
                'value' => 'e.g. invalid_key',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            218 => 
            array (
                'id' => 219,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'value_placeholder',
                'value' => 'e.g. Keys must be a single string',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            219 => 
            array (
                'id' => 220,
                'language_id' => 1,
                'group' => 'translation::translation',
                'key' => 'advanced_options',
                'value' => 'Toggle advanced options',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            220 => 
            array (
                'id' => 222,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'failed',
                'value' => 'Ces informations d\'identification ne correspondent pas',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-08-18 08:09:58',
            ),
            221 => 
            array (
                'id' => 223,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'throttle',
                'value' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-08-18 08:10:39',
            ),
            222 => 
            array (
                'id' => 224,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'name',
                'value' => 'Nom et Prénom',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            223 => 
            array (
                'id' => 225,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'mobile',
                'value' => 'Numéro de téléphone',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            224 => 
            array (
                'id' => 226,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'country',
                'value' => 'Pays de résidence',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            225 => 
            array (
                'id' => 227,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'email',
                'value' => 'E-Mail',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            226 => 
            array (
                'id' => 228,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'password',
                'value' => 'Mot de Passe',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            227 => 
            array (
                'id' => 229,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'Confirm_Password',
                'value' => 'Confirmer le Mot de Passe',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            228 => 
            array (
                'id' => 230,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'cc',
                'value' => 'Numéro de carte',
                'created_at' => '2020-07-04 18:23:57',
                'updated_at' => '2020-07-04 18:23:57',
            ),
            229 => 
            array (
                'id' => 231,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'cc_holder',
                'value' => 'Titulaire de la carte',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            230 => 
            array (
                'id' => 232,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'exp_month',
                'value' => 'mois d\'expiration',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            231 => 
            array (
                'id' => 233,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'exp_year',
                'value' => 'année d\'expiration',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            232 => 
            array (
                'id' => 234,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'cvc',
                'value' => 'Cryptogramme visuel',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            233 => 
            array (
                'id' => 235,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'checkout',
                'value' => 'Valider la réservation maintenant',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            234 => 
            array (
                'id' => 236,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'Payment_Details',
                'value' => 'Paiement sécurisé',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            235 => 
            array (
                'id' => 237,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'reservation',
                'value' => 'Réservez Une Chambre',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-25 14:48:09',
            ),
            236 => 
            array (
                'id' => 238,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Conditions',
                'value' => 'Annulation gratuite avant le',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            237 => 
            array (
                'id' => 239,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'warranty',
                'value' => '',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-08-17 16:34:50',
            ),
            238 => 
            array (
                'id' => 240,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'More',
                'value' => 'Plus',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            239 => 
            array (
                'id' => 241,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Room',
                'value' => 'Chambre',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            240 => 
            array (
                'id' => 242,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'Parking',
                'value' => 'Parking payant façe à l\'hôtel',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            241 => 
            array (
                'id' => 243,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'Tv',
                'value' => 'Télévision écran plat avec câble et satellite',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            242 => 
            array (
                'id' => 244,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'FloorService',
                'value' => 'Service d\'étage',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            243 => 
            array (
                'id' => 245,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'Breakfast',
                'value' => 'Petit déjeuner buffet ou servi en chambre',
                'created_at' => '2020-07-04 18:23:58',
                'updated_at' => '2020-07-04 18:23:58',
            ),
            244 => 
            array (
                'id' => 246,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'AirCon',
                'value' => 'Réglage individuel de la climatisation',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            245 => 
            array (
                'id' => 247,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'PhoneService',
                'value' => 'Lignes de téléphone direct',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            246 => 
            array (
                'id' => 248,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'Safe',
                'value' => 'Coffre fort',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            247 => 
            array (
                'id' => 249,
                'language_id' => 2,
                'group' => 'services',
                'key' => 'Blowdryer',
                'value' => 'Sèche-cheveux',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            248 => 
            array (
                'id' => 250,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'RoomOnly',
                'value' => 'Sans Petit déjeuner',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            249 => 
            array (
                'id' => 251,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Wbreakfast',
                'value' => 'Avec Petit déjeuner',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            250 => 
            array (
                'id' => 252,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Nights',
                'value' => 'nuits',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            251 => 
            array (
                'id' => 253,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Area',
                'value' => 'Superficie ',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            252 => 
            array (
                'id' => 254,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Bed',
                'value' => 'Couchage',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            253 => 
            array (
                'id' => 255,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Person',
            'value' => 'personne(s)',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            254 => 
            array (
                'id' => 256,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Payment',
                'value' => 'Moyens De Paiement',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            255 => 
            array (
                'id' => 257,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Children',
                'value' => 'Enfants',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            256 => 
            array (
                'id' => 258,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Checkin',
                'value' => 'Arrivée',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            257 => 
            array (
                'id' => 259,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Checkout',
                'value' => 'Départ',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            258 => 
            array (
                'id' => 260,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Adults',
                'value' => 'Adultes',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            259 => 
            array (
                'id' => 261,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Checkavailability',
                'value' => 'Voir les disponibilités',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            260 => 
            array (
                'id' => 262,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Card',
                'value' => 'Carte bancaire',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            261 => 
            array (
                'id' => 263,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Cash',
                'value' => 'espèces',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            262 => 
            array (
                'id' => 264,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'Check',
                'value' => 'Chèques',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            263 => 
            array (
                'id' => 265,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Bookings',
                'value' => 'Consultez vos réservations en cours.',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            264 => 
            array (
                'id' => 266,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Book',
                'value' => 'Réservez une chambre',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            265 => 
            array (
                'id' => 267,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Dashboard',
                'value' => 'Dashboard',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            266 => 
            array (
                'id' => 268,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Rooms',
                'value' => 'Consultez nos chambres.',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            267 => 
            array (
                'id' => 269,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Reservations',
                'value' => 'Mes Reservations',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            268 => 
            array (
                'id' => 270,
                'language_id' => 2,
                'group' => 'dashboard',
                'key' => 'Checkout',
                'value' => 'Réservez',
                'created_at' => '2020-07-04 18:23:59',
                'updated_at' => '2020-07-04 18:23:59',
            ),
            269 => 
            array (
                'id' => 271,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_title-1',
                'value' => 'Le Royal Hôtel',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            270 => 
            array (
                'id' => 272,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_body-1',
                'value' => 'Le Royal Hôtel est idéalement situé pour vous permettre de profiter pleinement des plaisirs de Paris!.',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            271 => 
            array (
                'id' => 273,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_title-2',
                'value' => 'Un large choix de chambres',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            272 => 
            array (
                'id' => 274,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_body-2',
                'value' => 'Les 56 chambres proposent une diversité rare. Réparties en 6 catégories.',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            273 => 
            array (
                'id' => 275,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_title-3',
                'value' => 'Notre Réception',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            274 => 
            array (
                'id' => 276,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'header_body-3',
                'value' => 'Nos réceptionnistes chaleureux et polyglottes vous accueillent à toute heure.',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            275 => 
            array (
                'id' => 277,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'main_title',
                'value' => 'Un hôtel à deux pas des Champs Elysées.',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            276 => 
            array (
                'id' => 278,
                'language_id' => 2,
                'group' => 'home',
                'key' => 'main_body',
            'value' => 'Situé au calme sur la majestueuse avenue de Friedland, l’hôtel se trouve au cœur du prestigieux 8ème arrondissement de Paris. Avec les Champs-Elysées et l’Arc de Triomphe à deux pas, vous pourrez profiter de l’effervescence de la plus belle avenue du monde et de la proximité de tous les plus beaux monuments de Paris (Tour Eiffel, Louvre, Montmartre...) tous à moins de 20 minutes de métro en direct.',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            277 => 
            array (
                'id' => 279,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Home',
                'value' => 'Accueil',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            278 => 
            array (
                'id' => 280,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Rooms',
                'value' => 'Chambres',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            279 => 
            array (
                'id' => 281,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Book',
                'value' => 'Réservez une chambre',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            280 => 
            array (
                'id' => 282,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Dashboard',
                'value' => 'Espace Client',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            281 => 
            array (
                'id' => 283,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Reservations',
                'value' => 'Mes reservations',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            282 => 
            array (
                'id' => 284,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Logout',
                'value' => 'Se déconnecter',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            283 => 
            array (
                'id' => 285,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Login',
                'value' => 'S\'identifier',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            284 => 
            array (
                'id' => 286,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'Signup',
                'value' => 'S\'inscrire',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-04 18:24:00',
            ),
            285 => 
            array (
                'id' => 287,
                'language_id' => 2,
                'group' => 'pagination',
                'key' => 'previous',
                'value' => '&laquo; Précédent',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-14 13:29:15',
            ),
            286 => 
            array (
                'id' => 288,
                'language_id' => 2,
                'group' => 'pagination',
                'key' => 'next',
                'value' => 'Suivant &raquo;',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-06 10:56:32',
            ),
            287 => 
            array (
                'id' => 289,
                'language_id' => 2,
                'group' => 'passwords',
                'key' => 'reset',
                'value' => 'Votre mot de passe a été réinitialisé !',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            288 => 
            array (
                'id' => 290,
                'language_id' => 2,
                'group' => 'passwords',
                'key' => 'sent',
                'value' => 'Nous vous avons envoyé par email le lien de réinitialisation du mot de passe !',
                'created_at' => '2020-07-04 18:24:00',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            289 => 
            array (
                'id' => 291,
                'language_id' => 2,
                'group' => 'passwords',
                'key' => 'throttled',
                'value' => 'Veuillez patienter avant de réessayer.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-06 10:57:46',
            ),
            290 => 
            array (
                'id' => 292,
                'language_id' => 2,
                'group' => 'passwords',
                'key' => 'token',
                'value' => 'Ce jeton de réinitialisation du mot de passe n\'est pas valide.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            291 => 
            array (
                'id' => 293,
                'language_id' => 2,
                'group' => 'passwords',
                'key' => 'user',
                'value' => 'Aucun utilisateur n\'a été trouvé avec cette adresse email.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            292 => 
            array (
                'id' => 294,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'header',
                'value' => 'HÔTEL 4 ÉTOILES À DEUX PAS DES CHAMPS ELYSÉES ET DE L’ARC DE TRIOMPHE',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            293 => 
            array (
                'id' => 295,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'price',
                'value' => 'À partir de',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            294 => 
            array (
                'id' => 296,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Single',
                'value' => 'Dotée d’un lit simple et d’une salle de douche, cette chambre est idéale pour accueillir une personne en voyage d’affaire en plein cœur de Paris. Donnant sur la cour intérieure, elle offre un cadre paisible et serein propice au repos. Cosy et délicate, notre chambre Simple vous ravira par sa douceur et deviendra votre havre de paix le temps de quelques nuits..',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            295 => 
            array (
                'id' => 297,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Classique',
                'value' => 'Jouissant d’une exposition sur l\'intérieur de l\'hôtel ou sur la rue Chateaubriand parallèle aux Champs-Elysées, cette chambre coquette offre un confort et un calme inégalables. Dotée d’un lit double et d’une salle de bain en marbre, elle incarne le charme et l’élégance à la parisienne dans un décor chaleureux, soigné avec minutie pour votre plus grand confort.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            296 => 
            array (
                'id' => 298,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Superieure',
                'value' => 'Synonyme de raffinement, la plupart de nos chambres Supérieures bénéficient d’une vue sur l\'avenue de Friedland, artère arborée majestueuse dans l\'axe de l\'Arc de Triomphe. Elégante et chaleureuse, la chambre Supérieure vous invite à l’expérience d’un séjour exceptionnel au cœur de Paris..',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            297 => 
            array (
                'id' => 299,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Deluxe',
                'value' => 'La chambre Deluxe, reflète le raffinement de la chambre Supérieure et vous offre la douceur et le luxe discret pour 3 personnes. Dans cet espace au beau volume, vous pourrez profiter d’un lit double ainsi que d’un lit d’appoint permettant d’accueillir jusqu’à trois personnes. Luxueuse, chaleureuse et raffinée, la chambre Deluxe vous charmera dès votre arrivée à Paris pour vous faire profiter d’un moment inoubliable parmi nous.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            298 => 
            array (
                'id' => 300,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Executive',
                'value' => 'Vous aimez l\'extrême raffinement ? Fière de sa situation exceptionnelle, la chambre Executive ne vous décevra pas. Elle sera, le temps de votre séjour, l\'endroit où vous aimerez vous reposer et jouir d\'une vue exceptionnelle sur l’Arc de Triomphe, en fonction des étages, après avoir profité des mille attraits de la vie parisienne. La chambre Executive bénéficie d’un grand lit, d’une jolie salle de bain ainsi que d’un espace pour prendre le thé. Cette chambre élégante saura vous charmer par son authenticité parisienne mêlée à un cadre majestueux.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            299 => 
            array (
                'id' => 301,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Familiale',
                'value' => 'La chambre Familiale, reflet d\'espace et de bien-être, offre la douceur d\'un luxe subtil et discret. Dans cet espace au volume remarquable, vous pourrez profiter d’un lit double ainsi que d’un canapé-lit permettant d’accueillir jusqu’à quatre personnes. Luxueuse, chaleureuse et raffinée, la chambre familiale vous charmera dès votre arrivée à Paris pour vous offrir le meilleur des séjours.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-04 18:24:01',
            ),
            300 => 
            array (
                'id' => 302,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'accepted',
                'value' => 'Le champ :attribute doit être accepté.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            301 => 
            array (
                'id' => 303,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'active_url',
                'value' => 'Le champ :attribute n\'est pas une URL valide.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            302 => 
            array (
                'id' => 304,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'after',
                'value' => 'Le champ :attribute doit être une date postérieure au :date.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            303 => 
            array (
                'id' => 305,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'after_or_equal',
                'value' => 'Le champ :attribute doit être une date postérieure ou égale au :date.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            304 => 
            array (
                'id' => 306,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'alpha',
                'value' => 'Le champ :attribute doit contenir uniquement des lettres.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            305 => 
            array (
                'id' => 307,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'alpha_dash',
                'value' => 'Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            306 => 
            array (
                'id' => 308,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'alpha_num',
                'value' => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
                'created_at' => '2020-07-04 18:24:01',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            307 => 
            array (
                'id' => 309,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'array',
                'value' => 'Le champ :attribute doit être un tableau.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            308 => 
            array (
                'id' => 310,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'before',
                'value' => 'Le champ :attribute doit être une date antérieure au :date.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:16',
            ),
            309 => 
            array (
                'id' => 311,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'before_or_equal',
                'value' => 'Le champ :attribute doit être une date antérieure ou égale au :date.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            310 => 
            array (
                'id' => 312,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'between.numeric',
                'value' => 'La valeur de :attribute doit être comprise entre :min et :max.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            311 => 
            array (
                'id' => 313,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'between.file',
                'value' => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            312 => 
            array (
                'id' => 314,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'between.string',
                'value' => 'Le texte :attribute doit contenir entre :min et :max caractères.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            313 => 
            array (
                'id' => 315,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'between.array',
                'value' => 'Le tableau :attribute doit contenir entre :min et :max éléments.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            314 => 
            array (
                'id' => 316,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'boolean',
                'value' => 'Le champ :attribute doit être vrai ou faux.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            315 => 
            array (
                'id' => 317,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'confirmed',
                'value' => 'Le champ de confirmation :attribute ne correspond pas.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            316 => 
            array (
                'id' => 318,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'date',
                'value' => 'Le champ :attribute n\'est pas une date valide.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            317 => 
            array (
                'id' => 319,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'date_equals',
                'value' => 'Le champ :attribute doit être une date égale à :date.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            318 => 
            array (
                'id' => 320,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'date_format',
                'value' => 'Le champ :attribute ne correspond pas au format :format.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            319 => 
            array (
                'id' => 321,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'different',
                'value' => 'Les champs :attribute et :other doivent être différents.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            320 => 
            array (
                'id' => 322,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'digits',
                'value' => 'Le champ :attribute doit contenir :digits chiffres.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            321 => 
            array (
                'id' => 323,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'digits_between',
                'value' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            322 => 
            array (
                'id' => 324,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'dimensions',
                'value' => 'La taille de l\'image :attribute n\'est pas conforme.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            323 => 
            array (
                'id' => 325,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'distinct',
                'value' => 'Le champ :attribute a une valeur en double.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            324 => 
            array (
                'id' => 326,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'email',
                'value' => 'Le champ :attribute doit être une adresse email valide.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            325 => 
            array (
                'id' => 327,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'ends_with',
                'value' => 'Le champ :attribute doit se terminer par une des valeurs suivantes : :values',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            326 => 
            array (
                'id' => 328,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'exists',
                'value' => 'Le champ :attribute sélectionné est invalide.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            327 => 
            array (
                'id' => 329,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'file',
                'value' => 'Le champ :attribute doit être un fichier.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            328 => 
            array (
                'id' => 330,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'filled',
                'value' => 'Le champ :attribute doit avoir une valeur.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:17',
            ),
            329 => 
            array (
                'id' => 331,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gt.numeric',
                'value' => 'La valeur de :attribute doit être supérieure à :value.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            330 => 
            array (
                'id' => 332,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gt.file',
                'value' => 'La taille du fichier de :attribute doit être supérieure à :value kilo-octets.',
                'created_at' => '2020-07-04 18:24:02',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            331 => 
            array (
                'id' => 333,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gt.string',
                'value' => 'Le texte :attribute doit contenir plus de :value caractères.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            332 => 
            array (
                'id' => 334,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gt.array',
                'value' => 'Le tableau :attribute doit contenir plus de :value éléments.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            333 => 
            array (
                'id' => 335,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gte.numeric',
                'value' => 'La valeur de :attribute doit être supérieure ou égale à :value.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            334 => 
            array (
                'id' => 336,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gte.file',
                'value' => 'La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            335 => 
            array (
                'id' => 337,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gte.string',
                'value' => 'Le texte :attribute doit contenir au moins :value caractères.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            336 => 
            array (
                'id' => 338,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'gte.array',
                'value' => 'Le tableau :attribute doit contenir au moins :value éléments.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            337 => 
            array (
                'id' => 339,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'image',
                'value' => 'Le champ :attribute doit être une image.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            338 => 
            array (
                'id' => 340,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'in',
                'value' => 'Le champ :attribute est invalide.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            339 => 
            array (
                'id' => 341,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'in_array',
                'value' => 'Le champ :attribute n\'existe pas dans :other.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            340 => 
            array (
                'id' => 342,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'integer',
                'value' => 'Le champ :attribute doit être un entier.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            341 => 
            array (
                'id' => 343,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'ip',
                'value' => 'Le champ :attribute doit être une adresse IP valide.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            342 => 
            array (
                'id' => 344,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'ipv4',
                'value' => 'Le champ :attribute doit être une adresse IPv4 valide.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            343 => 
            array (
                'id' => 345,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'ipv6',
                'value' => 'Le champ :attribute doit être une adresse IPv6 valide.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            344 => 
            array (
                'id' => 346,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'json',
                'value' => 'Le champ :attribute doit être un document JSON valide.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            345 => 
            array (
                'id' => 347,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lt.numeric',
                'value' => 'La valeur de :attribute doit être inférieure à :value.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            346 => 
            array (
                'id' => 348,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lt.file',
                'value' => 'La taille du fichier de :attribute doit être inférieure à :value kilo-octets.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            347 => 
            array (
                'id' => 349,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lt.string',
                'value' => 'Le texte :attribute doit contenir moins de :value caractères.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            348 => 
            array (
                'id' => 350,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lt.array',
                'value' => 'Le tableau :attribute doit contenir moins de :value éléments.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            349 => 
            array (
                'id' => 351,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lte.numeric',
                'value' => 'La valeur de :attribute doit être inférieure ou égale à :value.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            350 => 
            array (
                'id' => 352,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lte.file',
                'value' => 'La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            351 => 
            array (
                'id' => 353,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lte.string',
                'value' => 'Le texte :attribute doit contenir au plus :value caractères.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            352 => 
            array (
                'id' => 354,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'lte.array',
                'value' => 'Le tableau :attribute doit contenir au plus :value éléments.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            353 => 
            array (
                'id' => 355,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'max.numeric',
                'value' => 'La valeur de :attribute ne peut être supérieure à :max.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            354 => 
            array (
                'id' => 356,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'max.file',
                'value' => 'La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.',
                'created_at' => '2020-07-04 18:24:03',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            355 => 
            array (
                'id' => 357,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'max.string',
                'value' => 'Le texte de :attribute ne peut contenir plus de :max caractères.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            356 => 
            array (
                'id' => 358,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'max.array',
                'value' => 'Le tableau :attribute ne peut contenir plus de :max éléments.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            357 => 
            array (
                'id' => 359,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'mimes',
                'value' => 'Le champ :attribute doit être un fichier de type : :values.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            358 => 
            array (
                'id' => 360,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'mimetypes',
                'value' => 'Le champ :attribute doit être un fichier de type : :values.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:18',
            ),
            359 => 
            array (
                'id' => 361,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'min.numeric',
                'value' => 'La valeur de :attribute doit être supérieure ou égale à :min.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            360 => 
            array (
                'id' => 362,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'min.file',
                'value' => 'La taille du fichier de :attribute doit être supérieure à :min kilo-octets.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            361 => 
            array (
                'id' => 363,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'min.string',
                'value' => 'Le texte :attribute doit contenir au moins :min caractères.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            362 => 
            array (
                'id' => 364,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'min.array',
                'value' => 'Le tableau :attribute doit contenir au moins :min éléments.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            363 => 
            array (
                'id' => 365,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'not_in',
                'value' => 'Le champ :attribute sélectionné n\'est pas valide.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            364 => 
            array (
                'id' => 366,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'not_regex',
                'value' => 'Le format du champ :attribute n\'est pas valide.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            365 => 
            array (
                'id' => 367,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'numeric',
                'value' => 'Le champ :attribute doit contenir un nombre.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            366 => 
            array (
                'id' => 368,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'password',
                'value' => 'Le mot de passe est incorrect',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            367 => 
            array (
                'id' => 369,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'present',
                'value' => 'Le champ :attribute doit être présent.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            368 => 
            array (
                'id' => 370,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'regex',
                'value' => 'Le format du champ :attribute est invalide.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            369 => 
            array (
                'id' => 371,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required',
                'value' => 'Le champ :attribute est obligatoire.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            370 => 
            array (
                'id' => 372,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_if',
                'value' => 'Le champ :attribute est obligatoire quand la valeur de :other est :value.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            371 => 
            array (
                'id' => 373,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_unless',
                'value' => 'Le champ :attribute est obligatoire sauf si :other est :values.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            372 => 
            array (
                'id' => 374,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_with',
                'value' => 'Le champ :attribute est obligatoire quand :values est présent.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            373 => 
            array (
                'id' => 375,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_with_all',
                'value' => 'Le champ :attribute est obligatoire quand :values sont présents.',
                'created_at' => '2020-07-04 18:24:04',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            374 => 
            array (
                'id' => 376,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_without',
                'value' => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            375 => 
            array (
                'id' => 377,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'required_without_all',
                'value' => 'Le champ :attribute est requis quand aucun de :values n\'est présent.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            376 => 
            array (
                'id' => 378,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'same',
                'value' => 'Les champs :attribute et :other doivent être identiques.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            377 => 
            array (
                'id' => 379,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'size.numeric',
                'value' => 'La valeur de :attribute doit être :size.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            378 => 
            array (
                'id' => 380,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'size.file',
                'value' => 'La taille du fichier de :attribute doit être de :size kilo-octets.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            379 => 
            array (
                'id' => 381,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'size.string',
                'value' => 'Le texte de :attribute doit contenir :size caractères.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            380 => 
            array (
                'id' => 382,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'size.array',
                'value' => 'Le tableau :attribute doit contenir :size éléments.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            381 => 
            array (
                'id' => 383,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'starts_with',
                'value' => 'Le champ :attribute doit commencer avec une des valeurs suivantes : :values',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            382 => 
            array (
                'id' => 384,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'string',
                'value' => 'Le champ :attribute doit être une chaîne de caractères.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            383 => 
            array (
                'id' => 385,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'timezone',
                'value' => 'Le champ :attribute doit être un fuseau horaire valide.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            384 => 
            array (
                'id' => 386,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'unique',
                'value' => 'La valeur du champ :attribute est déjà utilisée.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            385 => 
            array (
                'id' => 387,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'uploaded',
                'value' => 'Le fichier du champ :attribute n\'a pu être téléversé.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            386 => 
            array (
                'id' => 388,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'url',
                'value' => 'Le format de l\'URL de :attribute n\'est pas valide.',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            387 => 
            array (
                'id' => 389,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'uuid',
                'value' => 'Le champ :attribute doit être un UUID valide',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            388 => 
            array (
                'id' => 390,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'custom.attribute-name.rule-name',
                'value' => 'custom-message',
                'created_at' => '2020-07-04 18:24:05',
                'updated_at' => '2020-07-04 18:24:05',
            ),
            389 => 
            array (
                'id' => 391,
                'language_id' => 2,
                'group' => 'translation::errors',
                'key' => 'key_exists',
                'value' => 'La clé de traduction { :key } existe déjà',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            390 => 
            array (
                'id' => 392,
                'language_id' => 2,
                'group' => 'translation::errors',
                'key' => 'language_exists',
                'value' => 'La langue { :language } existe déjà',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            391 => 
            array (
                'id' => 393,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'add',
                'value' => '+ Ajouter',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            392 => 
            array (
                'id' => 394,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'add_language',
                'value' => 'Ajouter une nouvelle langue',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            393 => 
            array (
                'id' => 395,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'add_translation',
                'value' => 'Ajouter une traduction',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            394 => 
            array (
                'id' => 396,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'advanced_options',
                'value' => 'Afficher les options avancées',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            395 => 
            array (
                'id' => 397,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'file',
                'value' => 'Fichier',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            396 => 
            array (
                'id' => 398,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'group',
                'value' => 'Groupe',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            397 => 
            array (
                'id' => 399,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'group_label',
            'value' => 'Groupe (Optionnel)',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            398 => 
            array (
                'id' => 400,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'group_placeholder',
                'value' => 'Ex: validation',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            399 => 
            array (
                'id' => 401,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'group_single',
                'value' => 'Groupe / Unique',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            400 => 
            array (
                'id' => 402,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'invalid_driver',
                'value' => 'Driver invalide',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            401 => 
            array (
                'id' => 403,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'invalid_language',
                'value' => 'Langue invalide',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            402 => 
            array (
                'id' => 404,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'key',
                'value' => 'Clé',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            403 => 
            array (
                'id' => 405,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'key_label',
                'value' => 'Clé',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            404 => 
            array (
                'id' => 406,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'key_placeholder',
                'value' => 'Par exemple : invalid_key',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            405 => 
            array (
                'id' => 407,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'keys_synced',
                'value' => 'Clés manquantes synchronisées avec succès 🎊',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            406 => 
            array (
                'id' => 408,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'language',
                'value' => 'Langue',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            407 => 
            array (
                'id' => 409,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'language_added',
                'value' => 'Nouvelle langue ajoutée avec succés 🙌',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            408 => 
            array (
                'id' => 410,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'language_exists',
                'value' => 'Le :attribute existe déjà.',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            409 => 
            array (
                'id' => 411,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'language_key_added',
                'value' => 'Nouvelle clé dans la langue ajoutée avec succès 👏',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            410 => 
            array (
                'id' => 412,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'language_name',
                'value' => 'Nom',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            411 => 
            array (
                'id' => 413,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'languages',
                'value' => 'Langues',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            412 => 
            array (
                'id' => 414,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'locale',
                'value' => 'Locale',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            413 => 
            array (
                'id' => 415,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'namespace',
                'value' => 'Namespace',
                'created_at' => '2020-07-04 18:24:06',
                'updated_at' => '2020-07-04 18:24:06',
            ),
            414 => 
            array (
                'id' => 416,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'namespace_label',
            'value' => 'Namespace (Optionnel)',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            415 => 
            array (
                'id' => 417,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'namespace_placeholder',
                'value' => 'Par exemple : my_package',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            416 => 
            array (
                'id' => 418,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'no_missing_keys',
                'value' => 'Il ne manque aucune clé de traduction dans l\'application 🎉',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            417 => 
            array (
                'id' => 419,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_file',
                'value' => 'Dans quel fichier sera t\'elle stockée ?',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            418 => 
            array (
                'id' => 420,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_from_driver',
                'value' => 'De quel driver voudriez-vous prendre les traductions ?',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            419 => 
            array (
                'id' => 421,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_key',
                'value' => 'Quelle est la clé de cette traduction ?',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            420 => 
            array (
                'id' => 422,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_language',
            'value' => 'Entrez le code langue que vous aimeriez ajouter (Ex: fr)',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            421 => 
            array (
                'id' => 423,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_language_for_key',
            'value' => 'Entrez la langue pour la clé (Ex: fr)',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            422 => 
            array (
                'id' => 424,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_language_if_any',
            'value' => 'Quelle langue ? (Laissez vide pour tous)',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            423 => 
            array (
                'id' => 425,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_to_driver',
                'value' => 'À quel driver désirez-vous ajouter les traductions ?',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            424 => 
            array (
                'id' => 426,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_type',
                'value' => 'Est-ce une clé Json ou Array ?',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            425 => 
            array (
                'id' => 427,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'prompt_value',
                'value' => 'Quelle est la valeur de la traduction',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            426 => 
            array (
                'id' => 428,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'save',
                'value' => 'Sauvegarder',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            427 => 
            array (
                'id' => 429,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'search',
                'value' => 'Rechercher toutes les traductions',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            428 => 
            array (
                'id' => 430,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'single',
                'value' => 'Unique',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            429 => 
            array (
                'id' => 431,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'synced',
                'value' => 'Les traductions sont synchronisées 😎',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            430 => 
            array (
                'id' => 432,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'syncing',
                'value' => 'Synchronisation des traductions ⏳',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            431 => 
            array (
                'id' => 433,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'translation_added',
                'value' => 'Nouvelle traduction ajoutée avec succès 🙌',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            432 => 
            array (
                'id' => 434,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'translations',
                'value' => 'Traduction',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            433 => 
            array (
                'id' => 435,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'type',
                'value' => 'Type',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            434 => 
            array (
                'id' => 436,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'type_error',
                'value' => 'Le type de traduction doit être en json ou en array',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            435 => 
            array (
                'id' => 437,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'uh_oh',
                'value' => 'Quelque chose ne fonctionne pas',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            436 => 
            array (
                'id' => 438,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'value',
                'value' => 'Valeur',
                'created_at' => '2020-07-04 18:24:07',
                'updated_at' => '2020-07-04 18:24:07',
            ),
            437 => 
            array (
                'id' => 439,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'value_label',
                'value' => 'Valeur',
                'created_at' => '2020-07-04 18:24:08',
                'updated_at' => '2020-07-04 18:24:08',
            ),
            438 => 
            array (
                'id' => 440,
                'language_id' => 2,
                'group' => 'translation::translation',
                'key' => 'value_placeholder',
                'value' => 'Par exemple : Les clés doivent être une seule chaîne',
                'created_at' => '2020-07-04 18:24:08',
                'updated_at' => '2020-07-04 18:24:08',
            ),
            439 => 
            array (
                'id' => 441,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Comfort',
                'value' => 'this is english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 442,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Comfort',
                'value' => 'cest en francais',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 443,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Rich',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 444,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Rich',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 445,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Coca',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 446,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Coca',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 447,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'cocacola',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 448,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'cocacola',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 449,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'triple',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 450,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'triple',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 451,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'test',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 452,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'test',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 453,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'test2',
                'value' => 'english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 454,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'test2',
                'value' => 'french',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 455,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'testo',
                'value' => 'anglais',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 456,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'testo',
                'value' => 'français',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 457,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'test',
                'value' => 'in english',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 458,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'test',
                'value' => 'en francais',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 459,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.name',
                'value' => 'nom',
                'created_at' => '2020-07-14 13:29:19',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            458 => 
            array (
                'id' => 460,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.username',
                'value' => 'nom d\'utilisateur',
                'created_at' => '2020-07-14 13:29:19',
                'updated_at' => '2020-07-14 13:29:19',
            ),
            459 => 
            array (
                'id' => 461,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.email',
                'value' => 'adresse email',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            460 => 
            array (
                'id' => 462,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.first_name',
                'value' => 'prénom',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            461 => 
            array (
                'id' => 463,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.last_name',
                'value' => 'nom',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            462 => 
            array (
                'id' => 464,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.password',
                'value' => 'mot de passe',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            463 => 
            array (
                'id' => 465,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.password_confirmation',
                'value' => 'confirmation du mot de passe',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            464 => 
            array (
                'id' => 466,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.city',
                'value' => 'ville',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            465 => 
            array (
                'id' => 467,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.country',
                'value' => 'pays',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            466 => 
            array (
                'id' => 468,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.address',
                'value' => 'adresse',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            467 => 
            array (
                'id' => 469,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.phone',
                'value' => 'téléphone',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            468 => 
            array (
                'id' => 470,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.mobile',
                'value' => 'portable',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            469 => 
            array (
                'id' => 471,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.age',
                'value' => 'âge',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            470 => 
            array (
                'id' => 472,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.sex',
                'value' => 'sexe',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            471 => 
            array (
                'id' => 473,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.gender',
                'value' => 'genre',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            472 => 
            array (
                'id' => 474,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.day',
                'value' => 'jour',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            473 => 
            array (
                'id' => 475,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.month',
                'value' => 'mois',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            474 => 
            array (
                'id' => 476,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.year',
                'value' => 'année',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            475 => 
            array (
                'id' => 477,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.hour',
                'value' => 'heure',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            476 => 
            array (
                'id' => 478,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.minute',
                'value' => 'minute',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            477 => 
            array (
                'id' => 479,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.second',
                'value' => 'seconde',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            478 => 
            array (
                'id' => 480,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.title',
                'value' => 'titre',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            479 => 
            array (
                'id' => 481,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.content',
                'value' => 'contenu',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            480 => 
            array (
                'id' => 482,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.description',
                'value' => 'description',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            481 => 
            array (
                'id' => 483,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.excerpt',
                'value' => 'extrait',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            482 => 
            array (
                'id' => 484,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.date',
                'value' => 'date',
                'created_at' => '2020-07-14 13:29:20',
                'updated_at' => '2020-07-14 13:29:20',
            ),
            483 => 
            array (
                'id' => 485,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.time',
                'value' => 'heure',
                'created_at' => '2020-07-14 13:29:21',
                'updated_at' => '2020-07-14 13:29:21',
            ),
            484 => 
            array (
                'id' => 486,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.available',
                'value' => 'disponible',
                'created_at' => '2020-07-14 13:29:21',
                'updated_at' => '2020-07-14 13:29:21',
            ),
            485 => 
            array (
                'id' => 487,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'attributes.size',
                'value' => 'taille',
                'created_at' => '2020-07-14 13:29:21',
                'updated_at' => '2020-07-14 13:29:21',
            ),
            486 => 
            array (
                'id' => 488,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'king',
                'value' => 'english test',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 489,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'king',
                'value' => 'francais test',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 490,
                'language_id' => 1,
                'group' => 'validation',
                'key' => 'isrequired',
                'value' => 'required',
                'created_at' => '2020-07-25 13:25:51',
                'updated_at' => '2020-07-25 13:25:51',
            ),
            489 => 
            array (
                'id' => 491,
                'language_id' => 2,
                'group' => 'validation',
                'key' => 'isrequired',
                'value' => 'Obligatoire',
                'created_at' => '2020-07-25 13:26:09',
                'updated_at' => '2020-07-25 13:26:19',
            ),
            490 => 
            array (
                'id' => 492,
                'language_id' => 1,
                'group' => 'bookingCreate',
                'key' => 'NewClient',
                'value' => 'Create New Client',
                'created_at' => '2020-07-25 13:58:47',
                'updated_at' => '2020-07-25 13:58:47',
            ),
            491 => 
            array (
                'id' => 493,
                'language_id' => 2,
                'group' => 'bookingCreate',
                'key' => 'NewClient',
                'value' => 'Créer un nouveau client',
                'created_at' => '2020-07-25 13:59:18',
                'updated_at' => '2020-07-25 13:59:42',
            ),
            492 => 
            array (
                'id' => 494,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'changepassword',
                'value' => 'Change Password',
                'created_at' => '2020-07-25 14:44:47',
                'updated_at' => '2020-07-25 14:44:47',
            ),
            493 => 
            array (
                'id' => 495,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'changepassword',
                'value' => 'Changement Mot de passe',
                'created_at' => '2020-07-25 14:45:21',
                'updated_at' => '2020-07-25 14:45:21',
            ),
            494 => 
            array (
                'id' => 496,
                'language_id' => 1,
                'group' => 'auth',
                'key' => 'newpassword',
                'value' => 'New Password',
                'created_at' => '2020-07-25 14:48:44',
                'updated_at' => '2020-07-25 14:48:44',
            ),
            495 => 
            array (
                'id' => 497,
                'language_id' => 2,
                'group' => 'auth',
                'key' => 'newpassword',
                'value' => 'Nouveau Mot de passe',
                'created_at' => '2020-07-25 14:49:08',
                'updated_at' => '2020-07-25 14:49:33',
            ),
            496 => 
            array (
                'id' => 498,
                'language_id' => 1,
                'group' => 'rooms',
                'key' => 'Queen',
                'value' => 'im hungry',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 499,
                'language_id' => 2,
                'group' => 'rooms',
                'key' => 'Queen',
                'value' => 'je suis faim',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 500,
                'language_id' => 1,
                'group' => 'nav',
                'key' => 'nearby',
                'value' => 'Tourism & Leisure',
                'created_at' => '2020-08-18 12:05:41',
                'updated_at' => '2020-08-18 12:05:41',
            ),
            499 => 
            array (
                'id' => 501,
                'language_id' => 2,
                'group' => 'nav',
                'key' => 'nearby',
                'value' => 'Tourisme & Loisirs',
                'created_at' => '2020-08-18 12:09:05',
                'updated_at' => '2020-08-18 12:09:05',
            ),
        ));
        
        
    }
}