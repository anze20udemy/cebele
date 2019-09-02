
<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cvetlični med
            Product::create([
          'name' => 'Cvetlični med 900g',
          'slug' => 'cvetlicni-900',
          'barva' => 'Od  svetlo rjave do rjave, odvisno od izvora',
          'aroma' => 'Aromo po cvetlicah, na katerih so čebele nabirale nektar',
          'okus' => 'Je srednje do močno sladek',
          'kristalizacija' => 'Hitro kristalizira, pogosto nastanejo veliki kristali, Lahko se opazi delna, nepravilna kristalizacija.',
          'castocenja' => 'Od pomladi do poletja',
          'uporaba' => 'Uživate ga lahko samega. Primeren kot namaz na kruhu in za pripravo lahkih mesnih jedi, solat in medenih napitkov kot dodatek čaju, mleku in mlečnim izdelkom. Blagodejno vpliva ob pojavu alergij (posebno proti senenemu nahodu) in pri izčrpanosti organizma.',
          'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu.S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Vsebuje precej cvetnega prahu. Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

          'price' => 900,

          'image' => 'cvetlicni.jpg',
          'images' => '["cvetlicni.jpg","cvetlicni.jpg","cvetlicni.jpg"]',
        ])->categories()->attach(1);

          Product::create([
          'name' => 'Cvetlični med 450g',
          'slug' => 'cvetlicni-450',
          'barva' => 'Od  svetlo rjave do rjave, odvisno od izvora',
          'aroma' => 'Aromo po cvetlicah, na katerih so čebele nabirale nektar',
          'okus' => 'Je srednje do močno sladek',
          'kristalizacija' => 'Hitro kristalizira, pogosto nastanejo veliki kristali, Lahko se opazi delna, nepravilna kristalizacija.',
          'castocenja' => 'Od pomladi do poletja',
          'uporaba' => 'Uživate ga lahko samega. Primeren kot namaz na kruhu in za pripravo lahkih mesnih jedi, solat in medenih napitkov kot dodatek čaju, mleku in mlečnim izdelkom. Blagodejno vpliva ob pojavu alergij (posebno proti senenemu nahodu) in pri izčrpanosti organizma.',
          'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu.S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Vsebuje precej cvetnega prahu. Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

          'price' => 650,

          'image' => 'cvetlicni.jpg',
          'images' => '["cvetlicni.jpg","cvetlicni.jpg","cvetlicni.jpg"]',
        ])->categories()->attach(1);
          Product::create([
            'name' => 'Cvetlični med 250g',
            'slug' => 'cvetlicni-250',
            'barva' => 'Od  svetlo rjave do rjave, odvisno od izvora',
            'aroma' => 'Aromo po cvetlicah, na katerih so čebele nabirale nektar',
            'okus' => 'Je srednje do močno sladek',
            'kristalizacija' => 'Hitro kristalizira, pogosto nastanejo veliki kristali, Lahko se opazi delna, nepravilna kristalizacija.',
            'castocenja' => 'Od pomladi do poletja',
            'uporaba' => 'Uživate ga lahko samega. Primeren kot namaz na kruhu in za pripravo lahkih mesnih jedi, solat in medenih napitkov kot dodatek čaju, mleku in mlečnim izdelkom. Blagodejno vpliva ob pojavu alergij (posebno proti senenemu nahodu) in pri izčrpanosti organizma.',
            'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu.S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Vsebuje precej cvetnega prahu. Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

            'price' => 400,

            'image' => 'cvetlicni.jpg',
            'images' => '["cvetlicni.jpg","cvetlicni.jpg","cvetlicni.jpg"]',
          ])->categories()->attach(1);

      // aKACIJEV med
      Product::create([
        'name' => 'Akacijev med 900g',
        'slug' => 'akacijev-900',
        'barva' => 'Svetla,  bledo rumena do rahlo jantarne',
        'aroma' => 'Blaga',
        'okus' => 'Sladek in blag',
        'kristalizacija' => 'Počasna, kristali hitro topljivi',
        'castocenja' => 'Maj',
        'uporaba' => 'Je idealen namaz na belem kruhu in nepogre&Aring;&iexcl;ljivo sladilo za kavo, &Auml;aj, kosmi&Auml;e, solate in drugo. Blagodejno vpliva na prebavo saj zmanj&Aring;&iexcl;uje izlo&Auml;anje &Aring;&frac34;elod&Auml;ne kisline, regulira funkcijo &Aring;&frac34;elodca, pomaga pri zaustavljanju krvavitev, priporo&Auml;a se za pomirjanje v stresnih situacijah in pri nespe&Auml;nosti ter prehladu &acirc;&euro;&ldquo; posebno u&Auml;inkovit je pri majhnih otrocih',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu.S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Vsebuje precej cvetnega prahu.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnej&scaron;e učinkovine medu.',

        'price' => 900,

        'image' => 'akacijev.jpg',
        'images' => '["akacijev.jpg","akacijev.jpg","akacijev.jpg"]',
      ])->categories()->attach(2);
      Product::create([
        'name' => 'Akacijev med 450g',
        'slug' => 'akacijev-450',
        'barva' => 'Svetla,  bledo rumena do rahlo jantarne',
        'aroma' => 'Blaga',
        'okus' => 'Sladek in blag',
        'kristalizacija' => 'Počasna, kristali hitro topljivi',
        'castocenja' => 'Maj',
        'uporaba' => 'Je idealen namaz na belem kruhu in nepogre&Aring;&iexcl;ljivo sladilo za kavo, &Auml;aj, kosmi&Auml;e, solate in drugo. Blagodejno vpliva na prebavo saj zmanj&Aring;&iexcl;uje izlo&Auml;anje &Aring;&frac34;elod&Auml;ne kisline, regulira funkcijo &Aring;&frac34;elodca, pomaga pri zaustavljanju krvavitev, priporo&Auml;a se za pomirjanje v stresnih situacijah in pri nespe&Auml;nosti ter prehladu &acirc;&euro;&ldquo; posebno u&Auml;inkovit je pri majhnih otrocih',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 650,

        'image' => 'akacijev.jpg',
        'images' => '["akacijev.jpg","akacijev.jpg","akacijev.jpg"]',
      ])->categories()->attach(2);
      Product::create([
        'name' => 'Akacijev med 250g',
        'slug' => 'akacijev-250',
        'barva' => 'Svetla,  bledo rumena do rahlo jantarne',
        'aroma' => 'Blaga',
        'okus' => 'Sladek in blag',
        'kristalizacija' => 'Počasna, kristali hitro topljivi',
        'castocenja' => 'Maj',
        'uporaba' => 'Je idealen namaz na belem kruhu in nepogre&Aring;&iexcl;ljivo sladilo za kavo, &Auml;aj, kosmi&Auml;e, solate in drugo. Blagodejno vpliva na prebavo saj zmanj&Aring;&iexcl;uje izlo&Auml;anje &Aring;&frac34;elod&Auml;ne kisline, regulira funkcijo &Aring;&frac34;elodca, pomaga pri zaustavljanju krvavitev, priporo&Auml;a se za pomirjanje v stresnih situacijah in pri nespe&Auml;nosti ter prehladu &acirc;&euro;&ldquo; posebno u&Auml;inkovit je pri majhnih otrocih',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 450,

        'image' => 'akacijev.jpg',
        'images' => '["akacijev.jpg","akacijev.jpg","akacijev.jpg"]',
      ])->categories()->attach(2);

      // Kostanjev med
      Product::create([
        'name' => 'Kostanjev med 900g',
        'slug' => 'kostanjev-900',
        'barva' => 'Temnejše rjavo rdeče do rjave barve',
        'aroma' => 'Poznan po ostri aromi',
        'okus' => 'Izrazit in močno grenak okusu',
        'kristalizacija' => 'Počasna in groba',
        'castocenja' => 'Junij / Julij',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 900,

        'image' => 'kostanjev.jpg',
        'images' => '["kostanjev.jpg","kostanjev.jpg","kostanjev.jpg"]',
      ])->categories()->attach(3);

      Product::create([
        'name' => 'Kostanjev med 450g',
        'slug' => 'kostanjev-450',
        'barva' => 'Temnejše rjavo rdeče do rjave barve',
        'aroma' => 'Poznan po ostri aromi',
        'okus' => 'Izrazit in močno grenak okusu',
        'kristalizacija' => 'Počasna in groba',
        'castocenja' => 'Junij / Julij',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 650,

        'image' => 'kostanjev.jpg',
        'images' => '["kostanjev.jpg","kostanjev.jpg","kostanjev.jpg"]',
      ])->categories()->attach(3);
      Product::create([
        'name' => 'Kostanjev med 250g',
        'slug' => 'kostanjev-250',
        'barva' => 'Temnejše rjavo rdeče do rjave barve',
        'aroma' => 'Poznan po ostri aromi',
        'okus' => 'Izrazit in močno grenak okusu',
        'kristalizacija' => 'Počasna in groba',
        'castocenja' => 'Junij / Julij',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 450,

        'image' => 'kostanjev.jpg',
        'images' => '["kostanjev.jpg","kostanjev.jpg","kostanjev.jpg"]',
      ])->categories()->attach(3);

      // Gozdni med
      Product::create([
        'name' => 'Gozdni med 900g',
        'slug' => 'gozdni-900',
        'barva' => 'Od svetlo do temno rjave skoraj črne',
        'aroma' => 'Močna, izrazita, odvisna od vrste rastlin',
        'okus' => 'Sladek, poln, prijeten in običajno močan',
        'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini',
        'castocenja' => 'Junij / Julij',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 900,

        'image' => 'gozdni.jpg',
        'images' => '["gozdni.jpg","gozdni.jpg","gozdni.jpg"]',
      ])->categories()->attach(4);

      Product::create([
        'name' => 'Gozdni med 450g',
        'slug' => 'gozdni-450',
        'barva' => 'Od svetlo do temno rjave skoraj črne',
        'aroma' => 'Močna, izrazita, odvisna od vrste rastlin',
        'okus' => 'Sladek, poln, prijeten in običajno močan',
        'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini',
        'castocenja' => 'Junij / Julij',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 650,

        'image' => 'gozdni.jpg',
        'images' => '["gozdni.jpg","gozdni.jpg","gozdni.jpg"]',
      ])->categories()->attach(4);

      Product::create([
      'name' => 'Gozdni med 250g',
      'slug' => 'gozdni-250',
      'barva' => 'Od svetlo do temno rjave skoraj črne',
      'aroma' => 'Močna, izrazita, odvisna od vrste rastlin',
      'okus' => 'Sladek, poln, prijeten in običajno močan',
      'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini',
      'castocenja' => 'Junij / Julij',
      'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
      'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

      'price' => 450,

      'image' => 'kostanjev.jpg',
      'images' => '["kostanjev.jpg","kostanjev.jpg","kostanjev.jpg"]',

    ])->categories()->attach(4);

      // Hojev med
      Product::create([
        'name' => 'Hojev med 900g',
        'slug' => 'hojev-900',
        'barva' => 'Zelo temna, sivo rjava, s temno zelenim odsevom',
        'aroma' => 'Prijetne arome po smoli',
        'okus' => 'Polnega okusa, prijetno sladek, po mentolu in sladu',
        'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini. Običajno počasna, enakomerna po celi količini, lahko pa zaradi sestave sladkorjev kristalizira že v panju.  Kristaliziran med je precej svetleši kot tekoč.',
        'castocenja' => 'Junij do september',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 900,

        'image' => 'hojev.jpg',
        'images' => '["hojev.jpg","hojev.jpg","hojev.jpg"]',
      ])->categories()->attach(5);

      Product::create([
        'name' => 'Hojev med 450g',
        'slug' => 'hojev-450',
        'barva' => 'Zelo temna, sivo rjava, s temno zelenim odsevom',
        'aroma' => 'Prijetne arome po smoli',
        'okus' => 'Polnega okusa, prijetno sladek, po mentolu in sladu',
        'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini. Običajno počasna, enakomerna po celi količini, lahko pa zaradi sestave sladkorjev kristalizira že v panju.  Kristaliziran med je precej svetleši kot tekoč.',
        'castocenja' => 'Junij do september',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 600,

        'image' => 'hojev.jpg',
        'images' => '["hojev.jpg","hojev.jpg","hojev.jpg"]',
      ])->categories()->attach(5);

      Product::create([
        'name' => 'Hojev med 250g',
        'slug' => 'hojev-250',
        'barva' => 'Zelo temna, sivo rjava, s temno zelenim odsevom',
        'aroma' => 'Prijetne arome po smoli',
        'okus' => 'Polnega okusa, prijetno sladek, po mentolu in sladu',
        'kristalizacija' => 'Srednja, običajno pravilna enakomerna po celi količini. Običajno počasna, enakomerna po celi količini, lahko pa zaradi sestave sladkorjev kristalizira že v panju.  Kristaliziran med je precej svetleši kot tekoč.',
        'castocenja' => 'Junij do september',
        'uporaba' => 'Zaradi polnega okusa ga lahko uživate samostojno ali kot namaz na kruhu ter kot dodatek mlečnim izdelkom, kosmičem in pri pripravi omak in polivk. Blagodejno vpliva pri vnetjih dihalnih poti in živčni napetosti in slabokrvnosti.',
        'posebnosti' => 'Samo naravni med se strjuje - kristalizira. To je naraven pojav, ki ne vpliva na kakovost medu. S segrevanjem do 40&deg;C pa se ponovno utekočini in pri tem ohrani večino naravnih lastnosti in učinkovin. Priporočamo da med shranjujete v prostoru s temperaturi do 25&deg;C. Gozdni med ima specifično oziroma drugačno sestavo sladkorjev v primerjavi z drugimi vrstami medu, saj je gozdni med naravna mešanica nektarskega in maninega izvora.Ko ga dodajate čajem, priporočamo, da ni prevroč, ker s tem se izgubijo najpomembnejše učinkovine medu.',

        'price' => 450,

        'image' => 'hojev.jpg',
        'images' => '["hojev.jpg","hojev.jpg","hojev.jpg"]',
      ])->categories()->attach(5);




      // Select random entries to be featured
        Product::whereIn('id', [2, 4, 8, 11, 21, 23, 27, 31, 33,61, 69, 73, 80])->update(['featured' => true]);
    }
}
