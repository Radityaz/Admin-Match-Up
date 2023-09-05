<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('map')->insert([

            // Sport Center Kudus
            [
                'title_lokasi' => 'Markas Sport Center',
                'detail_lokasi' => 'Jl. Jend. Sudirman No.184, Rendeng, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59311',
                'harga_sewa_lokasi' => '65000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7164918587832!2d110.85877227331912!3d-6.804302266546279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c525fd6001b1%3A0xe28fff5d78f8ce5f!2sMarkass%20Sport%20Center!5e0!3m2!1sid!2sid!4v1692256732496!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Berlian Sport Center',
                'detail_lokasi' => 'Jl. Lkr. Utara Kudus, Ledok, Karangmalang, Kec. Gebog, Kabupaten Kudus, Jawa Tengah 59333',
                'harga_sewa_lokasi' => '40000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.9331027761045!2d110.82925937331869!3d-6.777996766280884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70db3f65bcd8ef%3A0xf406838f209d8561!2sBerlian%20Sport%20Centre!5e0!3m2!1sid!2sid!4v1692257798846!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Multifunction Sport Hall',
                'detail_lokasi' => 'Wergu Wetan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59318',
                'harga_sewa_lokasi' => '50000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6027574832256!2d110.84677457331931!3d-6.818073866685692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4e6cb7c41ef%3A0x40145314d6c3651a!2sMultifunction%20Sport%20Hall!5e0!3m2!1sid!2sid!4v1692258137435!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Sport Center Barongan',
                'detail_lokasi' => 'Barongan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59312',
                'harga_sewa_lokasi' => '25000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6861786873624!2d110.84094677331917!3d-6.807975466583448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c53d6bdd8643%3A0x6a1565e4e86a9c2e!2sSport%20Center%20Barongan!5e0!3m2!1sid!2sid!4v1692258277012!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'GOR Bung Karno Kudus (GOR Wergu)',
                'detail_lokasi' => 'Jl. Gor Wergu Wetan, Wergu Wetan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59318',
                'harga_sewa_lokasi' => '500000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6230508053945!2d110.84728347331935!3d-6.815618666660848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c5982d388209%3A0xc47ccca174cbdc97!2sGOR%20Bung%20Karno%20Kudus%20(GOR%20Wergu)!5e0!3m2!1sid!2sid!4v1692258533987!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Sukun Sport Center (GOR Sukun)',
                'detail_lokasi' => 'Jl. Gor Wergu Wetan, Wergu Wetan, Kec. Kota Kudus, Kabupaten Kudus, Jawa Tengah 59318',
                'harga_sewa_lokasi' => '200000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6230508053945!2d110.84728347331935!3d-6.815618666660848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c5982d388209%3A0xc47ccca174cbdc97!2sGOR%20Bung%20Karno%20Kudus%20(GOR%20Wergu)!5e0!3m2!1sid!2sid!4v1692258533987!5m2!1sid!2sid',
            ],

            // Sport Center Semarang

            [
                'title_lokasi' => 'Metro Sports Center at MT Haryono',
                'detail_lokasi' => 'Jl. MT. Haryono No.1014, Lamper Kidul, Semarang Selatan, Semarang City, Central Java 50249',
                'harga_sewa_lokasi' => '125000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.011315493058!2d110.43001627332258!3d-7.007949868639244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c8489875055%3A0xe25c25d4112d7b75!2sMetro%20Sports%20Center%20at%20MT%20Haryono!5e0!3m2!1sid!2sid!4v1692259459957!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Metro Sports Center Imam Bonjol',
                'detail_lokasi' => 'Jl. Imam Bonjol No.47-49, Purwosari, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50172',
                'harga_sewa_lokasi' => '80000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3284012241843!2d110.41642487332192!3d-6.970528768249599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4ac11db559f%3A0x4f63300cee68d0a0!2sMetro%20Sports%20Center%20Imam%20Bonjol!5e0!3m2!1sid!2sid!4v1692259589418!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Metro Sports Center Sriwijaya',
                'detail_lokasi' => 'Jl. Kertanegara Selatan I No.2, Pleburan, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50241',
                'harga_sewa_lokasi' => '45000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.097187617129!2d110.41911997332237!3d-6.997835268533711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b60dd86a9d5%3A0xad81f023b3769a0d!2sMetro%20Sports%20Center%20Sriwijaya%3A%20Futsal%20%26%20Tennis!5e0!3m2!1sid!2sid!4v1692259753582!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Sport center aspol banyumanik 1 semarang',
                'detail_lokasi' => 'Banyumanik, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50264',
                'harga_sewa_lokasi' => '30000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3757152920916!2d110.41450737332393!3d-7.082368269420983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7089f6b31f7955%3A0xc349598a814c1b64!2sSport%20center%20aspol%20banyumanik%201%20semarang!5e0!3m2!1sid!2sid!4v1692259857522!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'GOR Tri Lomba Juang',
                'detail_lokasi' => 'Jl. Tri Lomba Juang, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249',
                'harga_sewa_lokasi' => '250000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1606204507475!2d110.41616267332232!3d-6.990354368455774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5b8d0321a1%3A0x5d7d81472df25fa9!2sGOR%20Tri%20Lomba%20Juang!5e0!3m2!1sid!2sid!4v1692259972788!5m2!1sid!2sid',
            ],

            // Sport Center Demak

            [
                'title_lokasi' => 'SPORT CENTER DEMAK',
                'detail_lokasi' => 'Katonsari, Kec. Demak, Kabupaten Demak, Jawa Tengah',
                'harga_sewa_lokasi' => '10000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126731.863877084!2d110.49563464343129!3d-6.965516259483472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70eb5139c90e2f%3A0x2ae078e3897841b!2sSPORT%20CENTER%20DEMAK!5e0!3m2!1sid!2sid!4v1692260222420!5m2!1sid!2sid',
            ],

            // Sport Center Jakarta

            [
                'title_lokasi' => 'Anwa Victory club',
                'detail_lokasi' => 'Jl. Taman Palem Raya, perumahan taman villa meruya Blok D.1 No.1, Meruya Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11650',
                'harga_sewa_lokasi' => '125000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4129368578997!2d106.72152748885496!3d-6.209140499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f75833599aa9%3A0xb5df7e86681f6da7!2sAnwa%20Victory%20club!5e0!3m2!1sid!2sid!4v1692260396737!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Tangkas Sports Center',
                'detail_lokasi' => 'Komplek Greenville, Jl. Tj. Duren Barat, RT.11/RW.9, Duri Kepa, Kebonjeruk, West Jakarta City, Jakarta 11510',
                'harga_sewa_lokasi' => '500000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7186331067833!2d106.77451057330883!3d-6.168419160446476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6511172ce95%3A0x7c9350267dc6055a!2sTangkas%20Sports%20Center!5e0!3m2!1sid!2sid!4v1692260858302!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Pola Bugar Sport Center',
                'detail_lokasi' => 'Jl. Kedoya Raya No.35, RT.11/RW.3, Kedoya Sel., Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520',
                'harga_sewa_lokasi' => '90000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6190594534723!2d106.75521787330904!3d-6.181712560567255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f70899045ef5%3A0x790d4ef3b019296a!2sPola%20Bugar%20Sport%20Center!5e0!3m2!1sid!2sid!4v1692260929078!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'TGR Sport Club',
                'detail_lokasi' => 'RT.5/RW.2, Pegangsaan Dua, Kelapa Gading, North Jakarta City, Jakarta 14250',
                'harga_sewa_lokasi' => '40000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6779467740525!2d106.91417897330886!3d-6.17385436049583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b0e276a61cd%3A0xd4e2baa4e0cb962!2sTGR%20Sport%20Club%20(Basket%2C%20Futsal%2C%20Yoga)!5e0!3m2!1sid!2sid!4v1692261009663!5m2!1sid!2sid',
            ],

            [
                'title_lokasi' => 'Orion Sports Center',
                'detail_lokasi' => 'Jl. Bandengan Utara Raya No.73-75, RT.5/RW.15, Kel, Kec. Penjaringan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14440',
                'harga_sewa_lokasi' => '180000',
                'embed_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.956631769213!2d106.79508097330833!3d-6.136529360157954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6208618672d%3A0xead2734340f5e257!2sOrion%20Sports%20Center!5e0!3m2!1sid!2sid!4v1692261085338!5m2!1sid!2sid',
            ],

            // Sport Center Bandung


        ]);
    }
}