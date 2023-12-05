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

        $contacts=["https://www.facebook.com",
                   "https://www.linkedin.com",
                   "https://instagram.com",
                   "asleltawfeer@gmail.com",
                   "+966536392629",
                   "+966536392629"
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
