<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rooms')->delete();
        
        \DB::table('rooms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hotel_id' => 1,
                'type' => 'single',
                'description' => 'Dotée d’un lit simple et d’une salle de douche, cette chambre est idéale pour accueillir une personne en voyage d’affaire en plein cœur de Paris. Donnant sur la cour intérieure, elle offre un cadre paisible et serein propice au repos. Cosy et délicate, notre  chambre Simple vous ravira par sa douceur et deviendra votre havre de paix le temps de quelques nuits.',
                'price' => '137.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 3,
                'superficie' => '9',
                'couchage' => '1 x Lit simple',
                'occupants' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'hotel_id' => 1,
                'type' => 'Classique',
                'description' => 'Jouissant d’une exposition sur l\'intérieur de l\'hôtel ou sur la rue Chateaubriand parallèle aux Champs-Elysées, cette chambre coquette offre un confort et un calme inégalables. Dotée d’un lit double et d’une salle de bain en marbre, elle incarne le charme et l’élégance à la parisienne dans un décor chaleureux, soigné avec minutie pour votre plus grand confort.',
                'price' => '145.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 3,
                'superficie' => '13 - 18',
                'couchage' => '1 x Lit double',
                'occupants' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'hotel_id' => 1,
                'type' => 'Supérieure',
                'description' => 'Synonyme de raffinement, la plupart de nos chambres Supérieures bénéficient d’une vue sur l\'avenue de Friedland, artère arborée majestueuse dans l\'axe de l\'Arc de Triomphe. Elégante et chaleureuse, la chambre Supérieure vous invite à l’expérience d’un séjour exceptionnel au cœur de Paris.',
                'price' => '167.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 2,
                'superficie' => '	18 - 23',
                'couchage' => '1 x Lit double',
                'occupants' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'hotel_id' => 1,
                'type' => 'Deluxe',
                'description' => 'La chambre Deluxe, reflète le raffinement de la chambre Supérieure et vous offre la douceur et le luxe discret pour 3 personnes. Dans cet espace au beau volume, vous pourrez profiter d’un lit double ainsi que d’un lit d’appoint permettant d’accueillir jusqu’à trois personnes. Luxueuse, chaleureuse et raffinée, la chambre Deluxe  vous charmera dès votre arrivée à Paris pour vous faire profiter d’un moment inoubliable parmi nous.',
                'price' => '176.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 3,
                'superficie' => '21 - 26',
                'couchage' => '1 x Lit double + 1 x Lit simple',
                'occupants' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'hotel_id' => 1,
                'type' => 'Executive',
                'description' => 'Vous aimez l\'extrême raffinement ? Fière de sa situation exceptionnelle, la chambre Executive ne vous décevra pas. Elle sera, le temps de votre séjour, l\'endroit où vous aimerez vous reposer et jouir d\'une vue exceptionnelle sur l’Arc de Triomphe, en fonction des étages, après avoir profité des mille attraits de la vie parisienne. La chambre Executive bénéficie d’un grand lit, d’une jolie salle de bain ainsi que d’un espace pour prendre le thé. Cette chambre élégante saura vous charmer par son authenticité parisienne mêlée à un cadre majestueux.',
                'price' => '191.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 1,
                'superficie' => '30',
                'couchage' => '	1 x Lit simple , 1 x Lit double',
                'occupants' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'hotel_id' => 1,
                'type' => 'Familiale',
                'description' => 'La chambre Familiale, reflet d\'espace et de bien-être, offre la douceur d\'un luxe subtil et discret. Dans cet espace au volume remarquable, vous pourrez profiter d’un lit double ainsi que d’un canapé-lit permettant d’accueillir jusqu’à quatre personnes. Luxueuse, chaleureuse et raffinée, la chambre familiale vous charmera dès votre arrivée à Paris pour vous offrir le meilleur des séjours.',
                'price' => '229.00',
                'image' => 'https://picsum.photos/200',
                'n_rooms' => 2,
                'superficie' => '32',
                'couchage' => '1 lit double & 1 canapé convertible double',
                'occupants' => 4,
            ),
        ));
        
        
    }
}