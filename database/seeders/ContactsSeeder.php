<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $icon=[ "fab fa-facebook-f",
                "fab fa-linkedin",
                "fab fa-instagram",
                "fas fa-mail-bulk",
                "fas fa-phone",
                "fab fa-whatsapp"];

        $contacts=["https://www.facebook.com/profile.php?id=61551949000995&mibextid=ZbWKwL",
                   "https://www.linkedin.com",
                   "https://instagram.com/el_alamia_games?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr",
                   "alalamia@gmail.com",
                   "01020202019",
                   "01208050298"
                    ];

        $type=['social','social','social','email','phone','whatsapp'];
      

        for ($i = 0; $i < count($contacts); $i++) {
            $contact = Contact::create([
               'icon'=>$icon[$i],
                'contact'=>$contacts[$i],
                'type'=>$type[$i],
            ]);
        }
    }
}
