<?php

use Illuminate\Database\Seeder;
use App\kategori_makanan;
use App\makanan;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kategori makanan
        $kategori1 = kategori_makanan::create(['kategori_makanan'=>'Aneka Ayam Tradisional']);
        $kategori2 = kategori_makanan::create(['kategori_makanan'=>'Aneka Ayam Internasional']);
        $kategori3 = kategori_makanan::create(['kategori_makanan'=>'Aneka Daging Tradisional']);
        $kategori4 = kategori_makanan::create(['kategori_makanan'=>'Aneka Daging Internasional']);
        $kategori5 = kategori_makanan::create(['kategori_makanan'=>'Aneka Ikan/Seefood Tradisional']);
        $kategori6 = kategori_makanan::create(['kategori_makanan'=>'Aneka Ikan/Seefood Internasional']);
        $kategori7 = kategori_makanan::create(['kategori_makanan'=>'Aneka Sop']);
        $kategori8 = kategori_makanan::create(['kategori_makanan'=>'Aneka Cha']);

        //ayam tradisional
        $makanan1 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM BAKAR BUMBU KEMANGI']);
        $makanan2 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM BUMBU RUJAK']);
        $makanan3 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'CHICKEN SAOS TAR TAR']);
        $makanan4 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM UNGKEB BUMBU KEMANGI']);
        $makanan5 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM KREMES']);
        $makanan6 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM BAKAR BUMBU TALIWANG']);
        $makanan7 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM PANGGANG KLATEN']);
        $makanan8 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM KODOK (min 100 orang)']);
        $makanan9 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'SOP AYAM JAMUR']);
        $makanan10 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM PANGGANG MADU']);
        $makanan11 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM KARE']);
        $makanan12 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM POP']);
        $makanan13 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM GEPUK KREMES']);
        $makanan14 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM KULUYUK']);
        $makanan15 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'AYAM BAKAR MADU']);
        $makanan16 = makanan::create(['id_kategori_makanan'=>$kategori1->id, 'makanan'=>'SATE AYAM']);

        //ayam internasional
        $makanan17 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'AYAM NANKING']);
        $makanan18 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'AYAM SECHUAN']);
        $makanan19 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'AYAM BUMBU MENTEGA']);
        $makanan20 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'CHICKEN TERIYAKI']);
        $makanan21 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'CHICKEN KATSU SAOS TAR TAR']);
        $makanan22 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'AYAM SAOS TIRAM']);
        $makanan23 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'AYAM CHILI SAOS']);
        $makanan24 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'SATE AYAM BUMBU TERIYAKI']);
        $makanan25 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'CHICKEN CORDON BLUE']);
        $makanan26 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'CHICKEN BEEF CHESE']);
        $makanan27 = makanan::create(['id_kategori_makanan'=>$kategori2->id, 'makanan'=>'CHICKEN SAOS TAR TAR']);

        //daging tradisional
        $makanan28 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'DENDENG BALADO']);        
        $makanan29 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'DAGING BUMBU KORNET']);
        $makanan30 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'GEPUK JUJUT']);
        $makanan31 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'IGA BAKAR']);
        $makanan32 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'SOP IGA']);
        $makanan33 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'BOLA BOLA DAGING MAKARONI']);
        $makanan34 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'DAGING MASAK CABE IJO']);
        $makanan35 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'SAMBAL GORENG DAGING CIREBON']);
        $makanan36 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'S.G. DAGING PETE']);
        $makanan37 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'KRENGSENGAN SAPI']);
        $makanan38 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'KALIO DAGING']);
        $makanan39 = makanan::create(['id_kategori_makanan'=>$kategori3->id, 'makanan'=>'DAGING BUMBU BALI']);

        //daging internasional
        $makanan39 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'LIDAH SAOS KEJU']);
        $makanan40 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'SAPI LADA HITAM']);
        $makanan41 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'BISTIK SAPI']);
        $makanan42 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'BEEF TERIYAKI']);
        $makanan43 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'BEEF SUKIYAKI']);
        $makanan44 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'DAGING ASAP BROKOLI']);
        $makanan45 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'MAKARONI SCOOTEL']);
        $makanan46 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'LASAGNA']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori4->id, 'makanan'=>'CHA BROKOLI DAGING ASAP']);

        //ikan tradisional
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'KAKAP ASAM MANIS']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'GURAME BUMBU TELOR']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'GURAME TAUSI']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'GURAME KERING BUMBU KECAP']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'CUMI TAUSI']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'SOP GURAME']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'UDANG BALADO PETE']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori5->id, 'makanan'=>'BANDENG PRESTO (3 hari sebelum acara)']);

        //ikan internasional
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'CUMI BUMBU KAILAN']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'UDANG SAOS TIRAM']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'KAKAP TEPUNG SAOS TAR TAR']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'CUMI TEPUNG SAOS TAR TAR']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'KAKAP SAOS KEJU']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'UDANG TEPUNG MAYONAISE']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'UDANG / CUMI SAOS TIRAM']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'KAKAP ASAM MANIS']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'CUMI / UDANG ASAM MANIS']);
        $makanan47 = makanan::create(['id_kategori_makanan'=>$kategori6->id, 'makanan'=>'KAKAP / GURAME SAOS TAR TAR']);

        //sop
        $makanan48 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP MUTIARA']);
        $makanan49 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP BASO']);
        $makanan50 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP SOSIS']);
        $makanan51 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP KACANG JAKARTA']);
        $makanan52 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SAYUR ASAM']);
        $makanan53 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP KIMLO']);
        $makanan54 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP TELOR PUYUH SOUN']);
        $makanan55 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP YAHU SOSIS']);
        $makanan56 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP TOFU']);
        $makanan57 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP KACANG POLONG']);
        $makanan58 = makanan::create(['id_kategori_makanan'=>$kategori7->id, 'makanan'=>'SOP SAYURAN AYAM']);

        //cha
        $makanan59 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'MIE GORENG SEAFOOD']);
        $makanan60 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'GADO GADO MODERN']);
        $makanan61 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'MIX FRUIT SALAD']);
        $makanan62 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'VEGETABLE SALAD']);
        $makanan63 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'RUJAK PENGANTIN']);
        $makanan64 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'CHA BROKOLI']);
        $makanan65 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'CHA JAGUNG MUDA KACANG PANJANG PAPRIKA']);
        $makanan66 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'TUMIS JAGUNG MUDA CABE IJO']);
        $makanan67 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'THAILAND SALAD']);
        $makanan68 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'SOUN PUTIH HONGKONG']);
        $makanan69 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'BROKOLI CHA JAMUR']);
        $makanan70 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'JAMUR CABE PAPRIKA']);
        $makanan71 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'SG. KENTANG TIPIS TEMPE']);
        $makanan72 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'GADO GADO PADANG']);
        $makanan73 = makanan::create(['id_kategori_makanan'=>$kategori8->id, 'makanan'=>'CHA WORTEL BUNCIS']);
}
}