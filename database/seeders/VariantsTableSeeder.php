<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;
use App\Models\Size;
use App\Models\Variant;

class VariantsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Vytvorenie inštancie Faker
        $products = Product::all();
        $sizes = Size::all()->mapWithKeys( function ($size){
            return [$size->value => $size->id ];
        })->toArray();

        $collor = Color::all()->mapWithKeys( function ($color){
            return [$color->name => $color->id ];
        })->toArray();


        // $imageNames = [
        //     '1050116-1109297282.jpg',
        //     '336420032_max.jpg',
        //     'chraniče.jpg',
        //     'lobda.jpg',
        //     'logo_shop.png',
        //     'Oddychajace-pogrubione-rekawice-bramkarskie.jpg',
        //     'adidasUCLCOMPETITION.jpg'
        // ];

          // Variant::upsert([
        //     [
        //         'product_id' => $adidasUCLCOMPETITION->id,
        //         'size_id' => $sizes ['20'],
        //         'color_id' => $collor['Biela'],
        //         'info' => 'Toto je info o tomto variante 1, produkte 1',
        //         'quantity' => $faker->numberBetween(1, 22),
        //         'image' => $imageBall[$imageBallName],

        //     ],
        //     [
        //         'product_id' => $mercurial41->id,
        //         'size_id' => $sizes ['44'],
        //         'color_id' => $collor['Čierna'],
        //         'info' => 'Toto je info o tomto variante 2, produktu 1',
        //         'quantity' => $faker->numberBetween(1, 22),
        //         'image' => $imageNames[array_rand($imageNames)],
        //     ],
        // ], ['info', 'quantity', 'image'], ['product_id', 'size_id', 'color_id',]);

        $imageBall = [
            'LoptaUclCompetition' => 'lopta_adidas_UCL_COMPETITION.jpeg',
            'loptaOceaunzCompetition' => 'lopta_OCEAUNZ_COMPETITION.jpg',
            'loptaTrioCompetition' =>'lopta_TIRO_COMPETITION.jpg',
            'loptaTEAMFINAL21.1FIFAQUA' =>'lopta_TEAM FINAL21.1FIFAQUA.jpg',
            'lopta_TIRO_PRO' => 'lopta_TIRO_PRO.jpg',
            'loptaClubEliteTeam' =>'lopta_CLUB_ELITE_TEAM.jpg',
            'loptaflightBiela' => 'lopta_FLIGHT_BIELA.jpg',
            'loptaFlightCervena'=> 'lopta_FLIGHT_Červená.jpg',
            'loptaFlightOranzova'=> 'lopta_FLIGHT_Oranžová.jpg',
            'loptaOrbitaBiela'=> 'lopta_ORBITA_1_TB_FIFA_QUALITY_PRO.jpg',
            'loptaOrbitaZlta'=> 'lopta_ORBITA_1_TB_FIFA_QUALITY_PRO_ŽLTÁ.jpg',
            'loptaOrbita2Biela'=> 'lopta_ORBITA_2_TB_FIFA_QUALITY_PRO_BIELA.jpg',
            'loptaOrbita3BielaVel4'=> 'lopta_ORBITA_3_TB_FIFA_QUALITY_PRO_BIELA_4.jpg',
            'loptaOrbitaELCLASICO'=> 'lopta_ORBITA_LALIGA_1_EL_CLASICO.jpg',
            'loptaNeoSwereProZelená'=> 'lopta_NEO_SWERVE_PRO_ZELENÁ.jpg',
            'loptaNeoSwereProZlta'=> 'lopta_NEO_SWERVE_PRO_ZLTÁ.jpg',
            'loptaNeoSwereProModra'=> 'lopta_NEO_SWERVE_PRO_MODRÁ.jpg',
            'loptaAlRihlaClub'=> 'lopta_AL_RIHLA_CLUB.jpg',
            'loptaVoidTexture'=> 'lopta_TRAINING_VOID_TEXTURE.jpg',
            'loptaCNXT24'=> 'lopta_CNXT24_LEAGUE.jpg',
            'loptaEuro24O'=> 'lopta_Euro24Oranzova.jpg',
            'loptaEuro24F'=> 'lopta_Euro24Fialova.jpg',
            'loptaEuro24B'=> 'lopta_Euro24Biela.jpg',
            'loptaUCLClub'=> 'lopta_UCL_CLUB.jpg',
            'loptaUCLClubC'=> 'lopta_UCL_CLUB_Cierna.jpg',
            'loptaUCLClubB'=> 'lopta_UCL_CLUB_Biela.jpg',
            'loptaUCLClubZ'=> 'lopta_UCL_CLUB_Zelena.jpg',
            'loptaJomaZlta'=> 'lopta_JOMA_Zl.jpg',
            'loptaJomaBiela'=> 'lopta_JOMA_B.jpg',
            'loptaJomaZelena'=> 'lopta_JOMA_Zel.jpg',
            'loptaClubEliteCervena'=> 'lopta_CLUB_ELITE_TEAM_Cervena.jpg',
            'loptaNikePitchZ'=> 'lopta_Nike_pitch.jpg',
            'loptaNikePitchB'=> 'lopta_Nike_pitch_B.jpg',
            'loptaNikePitchCer'=> 'lopta_Nike_pitch_Cer.jpg',
            'loptaNikePitchZel'=> 'lopta_Nike_pitch_Zel.jpg',
            'loptaOrbita5Cervena'=> 'lopta_ORBITA_5_Cervena.jpg',
            'loptaOrbita5Modra'=> 'lopta_ORBITA_5_Modra.jpg',
            'loptaSeriaA'=> 'lopta_Nike_Official_SerieA.jpg',

            's' => 's.jpg',


        ];
        //Lopty
        $adidasUCLCOMPETITION = Product::where('name', 'UCL COMPETITION')->first();
        $loptaOceaunzCompetition = Product::where('name', 'OCEAUNZ COMPETITION')->first();
        $loptaTrioCompetition = Product::where('name', 'TRIO COMPETITION')->first();
        $loptaTEAMFINAL21FIFAQUA = Product::where('name', 'TEAM FINAL 21.1 FIFA QUA')->first();
        $loptaloptaTiroPRO =Product::where('name', 'TIRO PRO')->first();
        $loptaloptaClubEliteTeam =Product::where('name', 'CLUB ELITE TEAM')->first();
        $loptaloptaFlight =Product::where('name', 'FLIGHT')->first();
        $loptaloptaOrbita =Product::where('name', 'ORBITA 1 TB FIFA QUALITY PRO')->first();
        $loptaloptaOrbita2Biela =Product::where('name', 'ORBITA 2 TB FIFA QUALITY PRO')->first();
        $loptaloptaOrbita3Vel4 =Product::where('name', 'ORBITA 3 TB FIFA QUALITY')->first();
        $loptaloptaOrbitaELCLASICO =Product::where('name', 'ORBITA LALIGA 1 EL CLASICO')->first();
        $loptaloptaNeoSwerePro =Product::where('name', 'NEO SWERVE PRO')->first();
        $loptaAlRihlaClub =Product::where('name', 'AL RIHLA CLUB')->first();
        $loptaVoidTexture =Product::where('name', 'TRAINING VOID TEXTURE')->first();
        $loptaCNXT24 =Product::where('name', 'CNXT24 LEAGUE')->first();
        $loptaEuro24 =Product::where('name', 'EURO 24 FUSSBALLLIEBE CLUB')->first();
        $loptaUCLClub =Product::where('name', 'UCL CLUB')->first();
        $loptaJomaDali =Product::where('name', 'DALI II')->first();
        $loptaNikePitch =Product::where('name', 'NIKE PITCH')->first();
        $loptaOrbita5 =Product::where('name', 'ORBITA 5 HYB')->first();
        $loptaNikeSeriaA =Product::where('name', 'NIKE SERIA A')->first();


        $imageBallName = 'LoptaUclCompetition';
        $upsertData[] = [
            'product_id' => $adidasUCLCOMPETITION->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Tepelne lepená bezšvová konštrukcia, Vysoko kvalitná butylová duša, Certifikát FIFA Quality Pro',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOceaunzCompetition';
        $upsertData[] = [
            'product_id' => $loptaOceaunzCompetition->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Vysoko kvalitná butylová duša, Tepelne lepenáý bezšvový povrch, Certifikát FIFA Quality Pro, Tlačené logo FIFA Womens World Cup',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaTrioCompetition';
        $upsertData[] = [
            'product_id' => $loptaTrioCompetition->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Tepelne lepený bezšvový povrch, Certifikát FIFA Quality Pro, Zápasová lopta',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaTEAMFINAL21.1FIFAQUA';
        $upsertData[] = [
            'product_id' => $loptaTEAMFINAL21FIFAQUA->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => '65 % polyester, 20 % FOAM, 10 % polyuretán, 5 % lepidlo',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'lopta_TIRO_PRO';
        $upsertData[] = [
            'product_id' => $loptaloptaTiroPRO->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Bezšvová technológia TSBE, Certifikát FIFA Quality Pro, Vysoko kvalitná butylová duša',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaClubEliteTeam';
        $upsertData[] = [
            'product_id' => $loptaloptaClubEliteTeam->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré pomáhajú stabilizovať loptu počas letu, Textúrovaný plášť zlepšuje kontakt s kopačkou a výborne sa ovláda',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];

        $imageBallName = 'loptaflightBiela';
        $upsertData[] = [
            'product_id' => $loptaloptaFlight->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré narušujú prúdenie vzduchu, znižujú jeho odpor a zaisťujú lepšiu stabilitu letu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaflightBiela';
        $upsertData[] = [
            'product_id' => $loptaloptaFlight->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Biela'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré narušujú prúdenie vzduchu, znižujú jeho odpor a zaisťujú lepšiu stabilitu letu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaFlightCervena';
        $upsertData[] = [
            'product_id' => $loptaloptaFlight->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré narušujú prúdenie vzduchu, znižujú jeho odpor a zaisťujú lepšiu stabilitu letu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaFlightOranzova';
        $upsertData[] = [
            'product_id' => $loptaloptaFlight->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré narušujú prúdenie vzduchu, znižujú jeho odpor a zaisťujú lepšiu stabilitu letu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaFlightOranzova';
        $upsertData[] = [
            'product_id' => $loptaloptaFlight->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré narušujú prúdenie vzduchu, znižujú jeho odpor a zaisťujú lepšiu stabilitu letu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbitaBiela';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbita->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Futbalová lopta Puma ORBITA 1 TB FIFA QUALITY PRO je zápasová lopta najvyššej úrovne s vynikajúcimi výkonnostnými kritériami pre najvyššiu úroveň futbalu.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbitaZlta';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbita->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Futbalová lopta Puma ORBITA 1 TB FIFA QUALITY PRO je zápasová lopta najvyššej úrovne s vynikajúcimi výkonnostnými kritériami pre najvyššiu úroveň futbalu.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbita2Biela';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbita2Biela->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Kvalitný materiál, Certifikát FIFA Quality Pro',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbita3BielaVel4';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbita3Vel4->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Biela'],
            'info' => 'Certifikát FIFA Quality, 32 panelovodolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbita3BielaVel4';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbita3Vel4->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Certifikát FIFA Quality, 32 panelovodolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbitaELCLASICO';
        $upsertData[] = [
            'product_id' => $loptaloptaOrbitaELCLASICO->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => '12 - panelový dizajn, Zväčšené a hlboké švy, 3D textúrovaný 1,2 mm PU povrch, Gumená duša a ventil PUMA Air Lock',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNeoSwereProZelená';
        $upsertData[] = [
            'product_id' => $loptaloptaNeoSwerePro->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Zelená'],
            'info' => 'Certifikát FIFA Quality Pro, Tepelne lepený bezšvový povrch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNeoSwereProZlta';
        $upsertData[] = [
            'product_id' => $loptaloptaNeoSwerePro->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Certifikát FIFA Quality Pro, Tepelne lepený bezšvový povrch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNeoSwereProModra';
        $upsertData[] = [
            'product_id' => $loptaloptaNeoSwerePro->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Modrá'],
            'info' => 'Certifikát FIFA Quality Pro, Tepelne lepený bezšvový povrch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaAlRihlaClub';
        $upsertData[] = [
            'product_id' => $loptaAlRihlaClub->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Butylová dušastrojovo, Šitý plášť, Tlačené logo FIFA World Cup™',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaVoidTexture';
        $upsertData[] = [
            'product_id' => $loptaVoidTexture->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Butylová dušastrojovo, Strojovo prešitý plášť, Logo UCL',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaCNXT24';
        $upsertData[] = [
            'product_id' => $loptaCNXT24->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Fialová'],
            'info' => 'bezšvová konštrukcia TSBE, Certifikát FIFA Quality',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaEuro24O';
        $upsertData[] = [
            'product_id' => $loptaEuro24->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'Tento model obsahuje najmenej 20% recyklovanej priadze, aby sme zbytočne nezaťažovali životné prostredie výrobou nových materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaEuro24F';
        $upsertData[] = [
            'product_id' => $loptaEuro24->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Fialová'],
            'info' => 'Tento model obsahuje najmenej 20% recyklovanej priadze, aby sme zbytočne nezaťažovali životné prostredie výrobou nových materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaEuro24B';
        $upsertData[] = [
            'product_id' => $loptaEuro24->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Tento model obsahuje najmenej 20% recyklovanej priadze, aby sme zbytočne nezaťažovali životné prostredie výrobou nových materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaUCLClub';
        $upsertData[] = [
            'product_id' => $loptaUCLClub->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Strojovo šitý plášť, Butylová duša, Logo Ligy majstrov UEFA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaUCLClubC';
        $upsertData[] = [
            'product_id' => $loptaUCLClub->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Čierna'],
            'info' => 'Strojovo šitý plášť, Butylová duša, Logo Ligy majstrov UEFA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaUCLClubB';
        $upsertData[] = [
            'product_id' => $loptaUCLClub->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Strojovo šitý plášť, Butylová duša, Logo Ligy majstrov UEFA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaUCLClubZ';
        $upsertData[] = [
            'product_id' => $loptaUCLClub->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Zelená'],
            'info' => 'Strojovo šitý plášť, Butylová duša, Logo Ligy majstrov UEFA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaJomaZlta';
        $upsertData[] = [
            'product_id' => $loptaJomaDali->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => '32 panelov, Odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaJomaBiela';
        $upsertData[] = [
            'product_id' => $loptaJomaDali->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => '32 panelov, Odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaJomaZelena';
        $upsertData[] = [
            'product_id' => $loptaJomaDali->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Zelená'],
            'info' => '32 panelov, Odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaClubEliteCervena';
        $upsertData[] = [
            'product_id' => $loptaloptaClubEliteTeam->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'Technológia Nike Aerowsculpt využíva tvarované drážky, ktoré pomáhajú stabilizovať loptu počas letu, Textúrovaný plášť zlepšuje kontakt s kopačkou a výborne sa ovláda',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchZ';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchB';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Biela'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchB';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Biela'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchCer';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchZel';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Zelená'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaNikePitchZel';
        $upsertData[] = [
            'product_id' => $loptaNikePitch->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Zelená'],
            'info' => 'Hladký a odolný plášť zaručuje rovnaký kontakt po celej ploche, Vysoko kontrastný motív uľahčuje sledovanie lopty',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbita5Cervena';
        $upsertData[] = [
            'product_id' => $loptaOrbita5->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaOrbita5Modra';
        $upsertData[] = [
            'product_id' => $loptaOrbita5->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];
        $imageBallName = 'loptaSeriaA';
        $upsertData[] = [
            'product_id' => $loptaNikeSeriaA->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Oficiálne NIKE lopta Talianskej najvyššej súťaže Seria A',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageBall[$imageBallName],
        ];

        //Kopačky
        //Lisovky
        $imageFG = [
            'FGCopaPure2ClubBiela' => 'FG_COPAPURE2CLUB_BIELA.jpg',
            'FGCopaPure2ClubCierna' => 'FG_COPAPURE2CLUB_CIERNA.jpg',
            'FGCopaPure3Biela' => 'FG_COPAPURE.3FG_BIELA.jpg',
            'FGCopaPure3Cierna' => 'FG_COPAPURE.3FG_CIERNA.jpg',
            'FGPredatorAccuracyBiela' => 'FG_PREDATORACCURACY_BIELA.jpg',
            'FGPredatorAccuracyModra' => 'FG_PREDATORACCURACY_MODRA.jpg',
            'FGPredatorAccuracyOranzova' => 'FG_PREDATORACCURACY_ORANZOVA.jpg',
            'FGPredatorAccuracyRuzova' => 'FG_PREDATORACCURACY_RUZOVA.jpg',
            'FGPredatorEdge3Biela' => 'FG_PREDATOREDGE.3LL_BIELA.jpg',
            'FGPredatorEdge3Cervena' => 'FG_PREDATOREDGE.3LL_CERVENA.jpg',
            'FGXCrazyFast3Biela' => 'FG_XCRAZYFAST.3_BIELA.jpg',
            'FGXCrazyFast3Modra' => 'FG_XCRAZYFAST.3_MODRA.jpg',
            'FGJRPhantomAcademyCervena' => 'FG_JRPHANTOMGXACADEMY_CERVENA.jpg',
            'FGJRPhantomAcademyModra' => 'FG_JRPHANTOMGXACADEMY_MODRA.jpg',
            'FGJRPhantomAcademyZelena' => 'FG_JRPHANTOMGXACADEMY_ZELENA.jpg',
            'FGPhantomGxProCervena' => 'FG_PHANTOMGXPRO_CERVENA.jpg',
            'FGPhantomGxProCierna' => 'FG_PHANTOMGXPRO_CIERNA.jpg',
            'FGVapor15Biela' => 'FG_ZOOMMERCURIALVAPOR15ACADEMY_BIELA.jpg',
            'FGVapor15Modra' => 'FG_ZOOMMERCURIALVAPOR15ACADEMY_MODRA.jpg',
            'FGFutureMatch7Biela' => 'FG_FUTURE7MATCH_BIELA.jpg',
            'FGFutureMatch7Cierna' => 'FG_FUTURE7MATCH_CIERNA.jpg',
            'FGWUltraUltimateBiela' => 'FG_WULTRAULTIMATE_SEDA.jpg',
            'FGWUltraUltimateZelena' => 'FG_WULTRAULTIMATE_ZELENA.jpg',


        ];
        $FGCopaPure2Club = Product::where('name', 'COPA PURE 2 CLUB FXG')->first();
        $FGCopaPure3 = Product::where('name', 'COPA PURE.3 FG')->first();
        $FGCopaPure3 = Product::where('name', 'COPA PURE.3 FG')->first();
        $FGPredatorAccuracy2 = Product::where('name', 'PREDATOR ACCURACY.2 FG')->first();
        $FGPredatorEdge3 = Product::where('name', 'PREDATOR EDGE.3 LL FG')->first();
        $FGXCrazyFast3 = Product::where('name', 'X CRAZYFAST.3 FG')->first();
        $FGJRPhantomAcademy = Product::where('name', 'JR PHANTOM GX ACADEMY FG/MG')->first();
        $FGPhantomGxPro = Product::where('name', 'PHANTOM GX PRO DF FG')->first();
        $FGVapor15 = Product::where('name', 'ZOOM MERCURIAL VAPOR 15 ACADEMY KM MG')->first();
        $FGFutureMatch7 = Product::where('name', 'FUTURE 7 MATCH FG/AG')->first();
        $FGWUltraUltimate = Product::where('name', 'ULTRA ULTIMATE FG/AG WMS')->first();


        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubBiela';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure2ClubCierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure2Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Biela';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGCopaPure3Cierna';
        $upsertData[] = [
            'product_id' => $FGCopaPure3->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Biela'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyModra';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyOranzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Oranžová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $FGPredatorAccuracy2->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            textilný zvršok s mikrotextúrou,
            stredne vysoký strečový okraj,
            gumové kontaktné zóny Zone Skin,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je aspoň z 50 % vyrobených z recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Biela';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['48'],
            'color_id' => $collor['Biela'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Cervena';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Červená'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Cervena';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Červená'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Cervena';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Červená'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPredatorEdge3Cervena';
        $upsertData[] = [
            'product_id' => $FGPredatorEdge3->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Červená'],
            'info' => 'konštrukcia bez šnurovania,
            textúrovaný zvršok Control Zone,
            podrážka z TPU, určená na pevné povrchy,
            25 % kusov použitých na výrobu zvrška je vyrobených z minimálne 50 % recyklovaného materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Biela';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['48'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Modra';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Modra';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Modra';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGXCrazyFast3Modra';
        $upsertData[] = [
            'product_id' => $FGXCrazyFast3->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Modrá'],
            'info' => 'zaväzovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            záber do všetkých strán',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['34'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyCervena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['35'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['28'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['29'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['27'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['28'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['29'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGJRPhantomAcademyZelena';
        $upsertData[] = [
            'product_id' => $FGJRPhantomAcademy->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Zelená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCervena';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Červená'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGPhantomGxProCierna';
        $upsertData[] = [
            'product_id' => $FGPhantomGxPro->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'rozšírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou,
            zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Modra';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Modra';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Modra';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Modra';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Modra';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Modrá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Biela';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Biela';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Biela';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Biela';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGVapor15Biela';
        $upsertData[] = [
            'product_id' => $FGVapor15->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Biela';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Cierna';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Cierna';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Cierna';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Cierna';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGFutureMatch7Cierna';
        $upsertData[] = [
            'product_id' => $FGFutureMatch7->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'FUZIONFIT kombinuje ľahkú sieťovinu, strečový úplet s vysokým lemom a PWRTAPE pre podporu padnutia a voľnosť pohybu,
            reliéfne detaily na kĺúčových kontaktných zónach pre lepší dotyk a kontrolu,
            Dynamic Motion System s pokročilou konfiguráciou kolíkov je navrhnutý pre dokonalú rovnováhu podpory, trakcie a húževnatosti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateBiela';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['36'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];
        $imageFGName = 'FGWUltraUltimateZelena';
        $upsertData[] = [
            'product_id' => $FGWUltraUltimate->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Zelená'],
            'info' => 'ULTRAWEAVE: ultraľahká, konštruovaná tkanina so štruktúrovaným 4-smerným strečom, ktorý znižuje hmotnosť a trenie, sú určené pre športovcov, ktorí chcú zvýšiť rýchlosť a silu,
            PWRTAPE: cie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageFG[$imageFGName],
        ];



         //Lisokoliky
         $imageSG = [
            'SGFutureZMXCervena' => 'SG_FUTUREZMXSG_CERVENA.jpg',
            'SGFutureZMXFialova' => 'SG_FUTUREZMXSG_FIALOVA.jpg',
            'SGFutureZMXOranzova' => 'SG_FUTUREZMXSG_ORANZOVA.jpg',
            'SGFutureZMXSeda' => 'SG_FUTUREZMXSG_SEDA.jpg',
            'SGFutureZMXModra' => 'SG_FUTUREZMXSG_MODRA.jpg',
            'SGXCrazyFastBiela' => 'SG_XCRAZYFASTLEAGUE_BIELA.jpg',
            'SGXCrazyFastZlta' => 'SG_XCRAZYFASTLEAGUE_ZLTA.jpg',
            'SGPredatorAccuracyBiela' => 'SG_PREDATORACCURACY3_BIELA.jpg',
            'SGPredatorAccuracyRuzova' => 'SG_PREDATORACCURACY3_RUZOVA.jpg',
            'SGPhantomAcademyBiela' => 'SG_PHANTOMGXACADEMY_BIELA.jpg',
            'SGPhantomAcademyModra' => 'SG_PHANTOMGXACADEMY_MODRA.jpg',
            'SGZoomSuperFly9Zlta' => 'SG_ZOOMMERCURIALSUPERFLY9_ZLTA.jpg',
            'SGZoomSuperFly9Biela' => 'SG_ZOOMMERCURIALSUPERFLY9_BIELA.jpg',
            'SGFutureZCervena' => 'SG_FUTUREZ_CERVENA.jpg',
            'SGFutureZFialova' => 'SG_FUTUREZ_FIALOVA.jpg',
            'SGFutureZZlta' => 'SG_FUTUREZ_ZLTA.jpg',

        ];
        $SGFutureZMX = Product::where('name', 'FUTURE Z 1.3 MXSG')->first();
        $SGXCrazyFast = Product::where('name', 'X CRAZYFAST LEAGUE SG')->first();
        $SGPredatorAccuracy = Product::where('name', 'PREDATOR ACCURACY.3 SG')->first();
        $SGPhantomAcademy = Product::where('name', 'PHANTOM GX ACADEMY SG-PRO AC')->first();
        $SGZoomSuperFly9 = Product::where('name', 'ZOOM MERCURIAL SUPERFLY 9 ACADEMY SG-PRO')->first();
        $SGFutureZ = Product::where('name', 'FUTURE Z 1.1 MXSG')->first();

        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Červená'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Fialová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXModra';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['47'],
            'color_id' => $collor['Modrá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXOranzova';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Oranžová'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXSeda';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Šedá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXSeda';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Šedá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZMXSeda';
        $upsertData[] = [
            'product_id' => $SGFutureZMX->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Šedá'],
            'info' => '
            Advanced Creator Zones obsahujú textúrovanú 3D zónu úchopu na bokoch pre lepšiu strelu a ovládateľnosť,
            podrážka Dynamic Motion System poskytuje slobodu pohybu a podporu pre dynamické zmeny pohybu,
            ľahká podrážka',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastBiela';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGXCrazyFastZlta';
        $upsertData[] = [
            'product_id' => $SGXCrazyFast->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou,
            podrážka na mäkké povrchy,
            obsahujú najmenej 20% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyBiela';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPredatorAccuracyRuzova';
        $upsertData[] = [
            'product_id' => $SGPredatorAccuracy->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Ružová'],
            'info' => 'šnurovanie na šnúrky,
            textilný zvršok s povrchovou úpravou',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyBiela';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGPhantomAcademyModra';
        $upsertData[] = [
            'product_id' => $SGPhantomAcademy->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Modrá'],
            'info' => 'rozššírená dotyková zóna NikeSkin so špeciálnou sieťovinou zlepšuje kontrolu a kontakt s loptou pri kľučkovaní a prihrávkach, na suchu aj na mokrom povrchu.zvršok je mäkký skoro ako úplet a kontaktná zóna v s trednej časti kopačky je vyvýšená, takže máš na ovládanie lopty ešte ešte väčší cit',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Zlta';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Žltá'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGZoomSuperFly9Biela';
        $upsertData[] = [
            'product_id' => $SGZoomSuperFly9->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'vnútorná konštrukcia reguluje rýchlosť a je z tenkého a pritom pevného materiálu, ktorý chodidlo bezpečne drží na podrážke, nepridáva hmotnosť a optimálne fixuje,
            jedinečný trakčný vzor umožní skvelú trakciu a rýchle uvoľnenie, takže ľahko vyštartujete a uniknete súperovi,
            pletenina obopína členok mäkkou, pružnou tkaninou a pevne drží nohu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZCervena';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Červená'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZFialova';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Fialová'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];
        $imageSGName = 'SGFutureZZlta';
        $upsertData[] = [
            'product_id' => $SGFutureZ->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'FUZIONFIT: adaptívna kompresná páska pre bezkonkurenčné prispôsobenie a padnutie,
            GripControl Pro ponúka vylepšené ovládanie lopty,
            podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisko s vynikajúcou trakciou pre výbušné viacsmerné pohyby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageSG[$imageSGName],
        ];











         //Turfy
         $imageTF = [
            'tfCopaPure2Biela' => 'tf_COPAPURE2_BIELA.jpg',
            'tfCopaPure2Cierna' => 'tf_COPAPURE2_CIERNA.jpg',
            'tfMundialTeam' => 'tf_MUNDIALTEAM_CIERNA.jpg',
            'tfCopaPure4Biela' => 'tf_COPAPURE4_BIELA.jpg',
            'tfCopaPure4Cierna' => 'tf_COPAPURE4_CIERNA.jpg',
            'tfCopaPure4Modra' => 'tf_COPAPURE4_MODRA.jpg',
            'tfFuture7matchBiela' => 'tf_FUTURE7MATCH_BIELA.jpg',
            'tfFuture7matchCierna' => 'tf_FUTURE7MATCH_CIERNA.jpg',
            'tfFuture7matchZelena' => 'tf_FUTURE7MATCH_ZELENA.jpg',
            'tfTiemtoLegend10Zlta' => 'tf_TIEMPOLEGEND10ACADEMY_ZLTA.jpg',
            'tfTiemtoLegend10Biela' => 'tf_TIEMPOLEGEND10ACADEMY_BIELA.jpg',
            'tfJrPhantomGxClubModra' => 'tf_JRPHANTOMGXCLUB_MODRA.jpg',
            'tfJrPhantomGxClubZelena' => 'tf_JRPHANTOMGXCLUB_ZELENA.jpg',

        ];
        $TFCopaPure2Club = Product::where('name', 'COPA PURE 2 CLUB TF')->first();
        $TFMundialTeam = Product::where('name', 'MUNDIAL TEAM LEATHER')->first();
        $TFCopaPure4Club = Product::where('name', 'COPA PURE.4 TF')->first();
        $TFFuture7MatchTT = Product::where('name', 'FUTURE 7 MATCH TT')->first();
        $TFTiemtoLegend10Ac = Product::where('name', 'TIEMPO LEGEND 10 ACADEMY TF')->first();
        $TFJrPhantomGxClub = Product::where('name', 'JR PHANTOM GX CLUB TF')->first();

        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure2Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure2Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'tento produkt obsahuje minimálne 20 % recyklovaných materiálov,
            syntetický zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfMundialTeam';
        $upsertData[] = [
            'product_id' => $TFMundialTeam->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z lícovej usne pre vyšší komfort a pohodlné nosenie,
            pohodlná vložka z EVA,
            podšívka z rýchloschnúceho syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Biela';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Cierna';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfCopaPure4Modra';
        $upsertData[] = [
            'product_id' => $TFCopaPure4Club->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchBiela';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchCierna';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfFuture7matchZelena';
        $upsertData[] = [
            'product_id' => $TFFuture7MatchTT->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Zlta';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Žltá'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfTiemtoLegend10Biela';
        $upsertData[] = [
            'product_id' => $TFTiemtoLegend10Ac->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'funkčná koža FlyTouch Lite je úžasne mäkká, vďaka tomu sa kopačka pohodlne prispôsobí chodidlu bez nadmerného napínania materiálu,
            do konštrukcie je pridané polstrovanie, aby kopačka fixovala nohu a poskytovala pohodlie v kľúčových zónach kopu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['27'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['28'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['29'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubModra';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['34'],
            'color_id' => $collor['Modrá'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['28'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['29'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['34'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];
        $imageTFName = 'tfJrPhantomGxClubZelena';
        $upsertData[] = [
            'product_id' => $TFJrPhantomGxClub->id,
            'size_id' => $sizes['35'],
            'color_id' => $collor['Zelená'],
            'info' => 'zvršok zo syntetickej kože ešte viac približuje chodidlo k lopte a pomáha loptu presne ovládať pri kľučkovaní a prihrávkach,
            podporný sieťovinový lem je pohodlný a priedušný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTF[$imageTFName],
        ];





        //Hálovky
        $imageIC = [
            'icMundialGoalLeather' => 'ic_MUNDIALGOALLEATHER.jpg',
            'icPredatorEdge4Cervena' => 'ic_PREDATOR EDGE4_CERVENA.jpg',
            'icPredatorEdge4Cierna' => 'ic_PREDATOR EDGE4_CIERNA.jpg',
            'icXcrazyfast4' => 'ic_XCRAZYFAST4_BIELA.jpg',
            'icXcrazyfast4JR' => 'ic_XCRAZYFAST4JR.jpg',
            'icXSpeedPortal1Zelena' => 'ic_XSPEEDPORTAL1_ZELENA.jpg',
            'icXSpeedPortal1Ruzova' => 'ic_XSPEEDPORTAL1_RUZOVA.jpg',
            'icTopFlexBiela' => 'ic_TOPFLEXIN_BIELA.jpg',
            'icTopFlexZlta' => 'ic_TOPFLEXIN_ZLTA.jpg',
            'icTopFlexCierna' => 'ic_TOPFLEXIN_CIERNA.jpg',
            'icSolista700Zlta' => 'ic_SOLISTA700_ZLTA.jpg',
            'icSolista700Biela' => 'ic_SOLISTA700_BIELA.jpg',
            'icSolista700Cierna' => 'ic_SOLISTA700_CIERNA.jpg',
            'icVapor15ClubZlta' => 'ic_VAPOR15CLUBIC_ZLTA.jpg',
            'icVapor15ClubBiela' => 'ic_VAPOR15CLUBIC_BIELA.jpg',
            'icFuture7MatchBiela' => 'ic_FUTURE7MATCHIT_BIELA.jpg',
            'icFuture7MatchCierna' => 'ic_FUTURE7MATCHIT_CIERNA.jpg',
            'icFuture7MatchModra' => 'ic_FUTURE7MATCHIT_MODRA.jpg',
            'icFuture7MatchZelena' => 'ic_FUTURE7MATCHIT_ZELENA.jpg',
            'icMercurialVaporW' => 'ic_MERCURIALVAPORW.jpg',

        ];
        $ICMundialLeather = Product::where('name', 'MUNDIAL GOAL LEATHER')->first();
        $ICPredatorEdge4 = Product::where('name', 'PREDATOR EDGE.4 IN SALA')->first();
        $ICXCrazyFast4 = Product::where('name', 'X CRAZYFAST.4 IN')->first();
        $ICXCrazyFast4JR = Product::where('name', 'X CRAZYFAST.4 IN J')->first();
        $ICXSpeedPortal1 = Product::where('name', 'X SPEEDPORTAL.1 IN')->first();
        $ICTopFlex = Product::where('name', 'TOP FLEX IN')->first();
        $ICSolista700 = Product::where('name', 'SOLISTA 700 III ID')->first();
        $ICVapor15Club = Product::where('name', 'VAPOR 15 CLUB IC')->first();
        $ICFuture7MatchIt = Product::where('name', 'FUTURE 7 MATCH IT')->first();
        $ICMercurialVaporW = Product::where('name', 'MERCURIAL VAPOR 15 CLUB IC W')->first();

        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMundialGoalLeather';
        $upsertData[] = [
            'product_id' => $ICMundialLeather->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Čierna'],
            'info' => 'zvršok z klokanej kože poskytuje optimálny cit pre loptu, delené ochranné krytie zo semiša zvyšuje odolnosť a spevňuje prednú časť topánky,
            príjemná podšívka zo syntetického materiálu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cervena';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Červená'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icPredatorEdge4Cierna';
        $upsertData[] = [
            'product_id' => $ICPredatorEdge4->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'maximálny záber,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['27'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['28'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['29'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['30'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['31'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['32'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXcrazyfast4JR';
        $upsertData[] = [
            'product_id' => $ICXCrazyFast4JR->id,
            'size_id' => $sizes['34'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Zelena';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icXSpeedPortal1Ruzova';
        $upsertData[] = [
            'product_id' => $ICXSpeedPortal1->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Ružová'],
            'info' => 'uťahovanie na šnúrky,
            ľahký zvršok Speedskin,
            tvarované spevnenie strednej časti nohy,
            nefarbiaca gumová podrážka,
            zvršok obsahuje minimálne 50% recyklovanej priadze',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexBiela';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexZlta';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Žltá'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexCierna';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Čierna'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexCierna';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexCierna';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexCierna';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icTopFlexCierna';
        $upsertData[] = [
            'product_id' => $ICTopFlex->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'nefarbiaca podrážka,
            zaväzovanie na šnúrky,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Zlta';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Žltá'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Biela';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Cierna';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Cierna';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Cierna';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Cierna';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icSolista700Cierna';
        $upsertData[] = [
            'product_id' => $ICSolista700->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Čierna'],
            'info' => 'zaväzovanie na šnúrky,
            nefarbiaca podrážka,
            odolný zvršok',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubZlta';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Žltá'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icVapor15ClubBiela';
        $upsertData[] = [
            'product_id' => $ICVapor15Club->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Biela'],
            'info' => 'gumová podrážka zaisťuje stabilnú trakciu,
            prepracovaný dizajn má vylepšený strih, ktorý sa lepšie prispôsobí chodidlu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchBiela';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchBiela';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchBiela';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchBiela';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchBiela';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Biela'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchCierna';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchCierna';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchCierna';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchCierna';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchCierna';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Čierna'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchModra';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Modrá'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['40'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['41'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['42'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['43'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['44'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['45'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icFuture7MatchZelena';
        $upsertData[] = [
            'product_id' => $ICFuture7MatchIt->id,
            'size_id' => $sizes['46'],
            'color_id' => $collor['Zelená'],
            'info' => 'odolný zvršok,
            nefarbiaca podrážka,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['33'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['34'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['35'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['36'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['37'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['38'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];
        $imageICName = 'icMercurialVaporW';
        $upsertData[] = [
            'product_id' => $ICMercurialVaporW->id,
            'size_id' => $sizes['39'],
            'color_id' => $collor['Hnedá'],
            'info' => 'odolný zvršok,
            zaväzovanie na šnúrky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageIC[$imageICName],
        ];



































        //Chrániče
        $imagePads = [
            'padsJCE' => 'pads_J_CE.jpg',
            'padsMercurialCierne' => 'pads_MERCURIAL_LITE_Cierne.jpg',
            'padsMercurialCervene' => 'pads_MERCURIAL_LITE_Cervene.jpg',
            'padsMercurialModre' => 'pads_MERCURIAL_LITE_Modre.jpg',
            'padsSuperlockBiele' => 'pads_MERCURIAL_LITE_SUPERLOCK_Biele.jpg',
            'padsSuperlockCervene' => 'pads_MERCURIAL_LITE_SUPERLOCK_Cervene.jpg',
            'padsSuperlockFialove' => 'pads_MERCURIAL_LITE_SUPERLOCK_Fialove.jpg',
            'padsSuperlockSede' => 'pads_MERCURIAL_LITE_SUPERLOCK_Sede.jpg',
            'padsYChargeBiele' => 'pads_Y_CHARGE_Biele.jpg',
            'padsYChargeCervene' => 'pads_Y_CHARGE_Cervene.jpg',
            'padsYChargeCierne' => 'pads_Y_CHARGE_Cierne.jpg',
            'padsYChargeModre' => 'pads_Y_CHARGE_Modre.jpg',
            'padsSpartan' => 'pads_Joma_Spartan.jpg',
            'padsTiroLeague' => 'pads_TIRO_LEAGUE.jpg',
            'padsXLeagueBiela' => 'pads_X_LEAGUE_Biela.jpg',
            'padsXLeagueCervena' => 'pads_X_LEAGUE_Cervena.jpg',
            'padsXLeagueCierna' => 'pads_X_LEAGUE_Cierna.jpg',
            'padsXLeagueModra' => 'pads_X_LEAGUE_Modra.jpg',
            'padsXLeagueOranzova' => 'pads_X_LEAGUE_Oranzova.jpg',
            'padsXLeagueZelena' => 'pads_X_LEAGUE_Zelena.jpg',
            'padsXLeagueZelena' => 'pads_X_LEAGUE_Zelena.jpg',
            'padsTiroTrainingBiela' => 'pads_Tiro_Training_Biela.jpg',
            'padsTiroTrainingCierna' => 'pads_Tiro_Training_Cierna.jpg',
            'padsTiroTrainingSeda' => 'pads_Tiro_Training_Seda.jpg',
            'padsTiroAttacanoSleeveBiela' => 'pads_ATTACANTO_SLEEVE_Biela.jpg',
            'padsTiroAttacanoSleeveCierna' => 'pads_ATTACANTO_SLEEVE_Cierna.jpg',
            'padsTiroAttacanoSleeveCierna' => 'pads_ATTACANTO_SLEEVE_Cierna.jpg',
            'padsTiroULightAnkleOranzova' => 'pads_ULTRA_LIGHT_ANKLE_Oranzova.jpg',
            'padsTiroULightAnkleBiela' => 'pads_ULTRA_LIGHT_ANKLE_Biela.jpg',
            'padsTiroULightAnkleCierna' => 'pads_ULTRA_LIGHT_ANKLE_Cierna.jpg',
            'padsTiroULightStripeCervena' => 'pads_ULTRA_LIGHT_STRAP_Cervena.jpg',
            'padsTiroULightStripeZelena' => 'pads_ULTRA_LIGHT_STRAP_Zelena.jpg',
            'padsTiroULightStripeCierna' => 'pads_ULTRA_LIGHT_STRAP_Cierna.jpg',
            'padsUTwistBiela' => 'pads_ULTRA_TWIST_Biele.jpg',
            'padsUTwistModra' => 'pads_ULTRA_TWIST_Modre.jpg',
            'padsUTwistOranzova' => 'pads_ULTRA_TWIST_Oranzove.jpg',
            'padsCypherGCierne' => 'pads_CYPHER_GUARD_Cierne.jpg',
            'padsCypherGModre' => 'pads_CYPHER_GUARD_Modre.jpg',
            'padsCypherGOranzove' => 'pads_CYPHER_GUARD_Oranzove.jpg',

        ];
        $padsJCE = Product::where('name', 'J CE')->first();
        $padsMercurialLite = Product::where('name', 'MERCURIAL LITE')->first();
        $padsSuperlock = Product::where('name', 'MERCURIAL LITE SUPERLOCK')->first();
        $padsYCharge = Product::where('name', 'Y CHARGE')->first();
        $padsSpartan = Product::where('name', 'SPARTAN')->first();
        $padsTiroLeague = Product::where('name', 'TIRO LEAGUE')->first();
        $padsXLeague = Product::where('name', 'X LEAGUE')->first();
        $padsTiroTraining = Product::where('name', 'TIRO TRAINING')->first();
        $padsAttacSlee = Product::where('name', 'ATTACANTO SLEEVE')->first();
        $padsULightAnkle = Product::where('name', 'ULTRA LIGHT ANKLE')->first();
        $padsULightStrap = Product::where('name', 'ULTRA LIGHT STRAP')->first();
        $padsUTwist = Product::where('name', 'ULTRA TWIST')->first();
        $padsCypherGuard = Product::where('name', 'CYPHER GUARD W/ANKLE SOCK')->first();


        $imagePadsName = 'padsJCE';
        $upsertData[] = [
            'product_id' => $padsJCE->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Pevné vystuženie chráni a je ľahké aj pohodlné, Odolný skelet je spojený s penovým vystužením, ktoré dobre tlmí.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsJCE';
        $upsertData[] = [
            'product_id' => $padsJCE->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Pevné vystuženie chráni a je ľahké aj pohodlné, Odolný skelet je spojený s penovým vystužením, ktoré dobre tlmí.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsJCE';
        $upsertData[] = [
            'product_id' => $padsJCE->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Pevné vystuženie chráni a je ľahké aj pohodlné, Odolný skelet je spojený s penovým vystužením, ktoré dobre tlmí.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCierne';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCierne';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCierne';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCervene';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCervene';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialCervene';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialModre';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialModre';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialModre';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsMercurialModre';
        $upsertData[] = [
            'product_id' => $padsMercurialLite->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockBiele';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockBiele';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockBiele';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockSede';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Šedá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockSede';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Šedá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockSede';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Šedá'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockCervene';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockCervene';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockCervene';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockFialove';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Fialová'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockFialove';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Fialová'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSuperlockFialove';
        $upsertData[] = [
            'product_id' => $padsSuperlock->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Fialová'],
            'info' => 'nízkoprofilová výstuha je ľahká a odolná, Mäkká dierovaná pena tlmí nárazy, Pružné návleky držia chrániče na mieste a technológia Dri-FIT odvádza pot',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeBiele';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeBiele';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeBiele';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCervene';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCervene';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCervene';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCierne';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCierne';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeCierne';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeModre';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeModre';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsYChargeModre';
        $upsertData[] = [
            'product_id' => $padsYCharge->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'Ľahká konštrukcia s dodatočným chráničom členku chráni pred zraneniami',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSpartan';
        $upsertData[] = [
            'product_id' => $padsSpartan->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Ergonomicky tvarované, Kompresné návleky sú súčasťou, EVA pena',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSpartan';
        $upsertData[] = [
            'product_id' => $padsSpartan->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Ergonomicky tvarované, Kompresné návleky sú súčasťou, EVA pena',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsSpartan';
        $upsertData[] = [
            'product_id' => $padsSpartan->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Ergonomicky tvarované, Kompresné návleky sú súčasťou, EVA pena',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroLeague';
        $upsertData[] = [
            'product_id' => $padsTiroLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'tvarované vystuženie z EVA materiálup, Pužný skelet, Obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroLeague';
        $upsertData[] = [
            'product_id' => $padsTiroLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'tvarované vystuženie z EVA materiálup, Pužný skelet, Obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroLeague';
        $upsertData[] = [
            'product_id' => $padsTiroLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'tvarované vystuženie z EVA materiálup, Pužný skelet, Obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueBiela';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueBiela';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueBiela';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCervena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCervena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCervena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCierna';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCierna';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueCierna';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueModra';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueModra';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueModra';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueOranzova';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Oranžová'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueOranzova';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Oranžová'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueOranzova';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Oranžová'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueZelena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueZelena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsXLeagueZelena';
        $upsertData[] = [
            'product_id' => $padsXLeague->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'obsahuje obsahuje minimálne 20 % recyklovanej priadze, výstuž EVA, obsahuje kompresné návleky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingBiela';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingBiela';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingBiela';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingCierna';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingCierna';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingCierna';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingSeda';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Šedá'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingSeda';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Šedá'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroTrainingSeda';
        $upsertData[] = [
            'product_id' => $padsTiroTraining->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Šedá'],
            'info' => 'Tento produkt obsahuje aspoň 20 % recyklovaného materiálu a znižuje potrebu používať nové suroviny,',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveBiela';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveBiela';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveBiela';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveCierna';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveCierna';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroAttacanoSleeveCierna';
        $upsertData[] = [
            'product_id' => $padsAttacSlee->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'perfektne sedia na nohe, vďaka návleku, nízka hmotnosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleOranzova';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleOranzova';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleOranzova';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleBiela';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleBiela';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleBiela';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleCierna';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleCierna';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightAnkleCierna';
        $upsertData[] = [
            'product_id' => $padsULightAnkle->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Perfektne sedia na nohe, Vysoká ochrana členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCervena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCervena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCervena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeZelena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeZelena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeZelena';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCierna';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCierna';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsTiroULightStripeCierna';
        $upsertData[] = [
            'product_id' => $padsULightStrap->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'uťahovanie pomocou pásikov na suchý zips, Ľahký a odolný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistBiela';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistBiela';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistBiela';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistModra';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistModra';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistModra';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistOranzova';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistOranzova';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsUTwistOranzova';
        $upsertData[] = [
            'product_id' => $padsUTwist->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Vysoká absorpcia nárazov a ľahká EVA podložka, kompresné puzdro s klzným vreckom poskytuje bezpečné uchytenie a umožňuje agilitu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGCierne';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGCierne';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGCierne';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGModre';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGModre';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGModre';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGOranzove';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGOranzove';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];
        $imagePadsName = 'padsCypherGOranzove';
        $upsertData[] = [
            'product_id' => $padsCypherGuard->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Chrániče členkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imagePads[$imagePadsName],
        ];

        //Brankárske vybavenie

        //Oblečenie

        //Doplnky
        //Tréningové Doplnky
        $imageTrainingAccessories = [
            'tdGoalCervena' => 'td_GOAL_Cervena.jpg',
            'tdJC219' => 'td_JC-219A.jpg',
            'tdJC429' => 'td_JC-429A.jpg',
            'tdMatch' => 'td_MATCH.jpg',
            'tdGoalPro' => 'td_GOAL_PRO.jpg',
            'tdPopUp' => 'td_POP_UP.jpg',
            'tdTacitcCase' => 'td_TACTIC_CASE.jpg',
            'tdBallNet' => 'td_BALLNET.jpg',
            'tdBallPump' => 'td_BALLPUMP.jpg',
            'tdCapModra' => 'td_CAP.jpg',
            'tdCapAdid' => 'td_CAPC.jpg',
            'tdGuardNikeCierna' => 'td_GUARD_STAY.jpg',
            'tdCoolBox' => 'td_COOL_BOX.jpg',
            'tdHOTCOLD' => 'td_HOTCOLD.jpg',
            'tdICEPACK' => 'td_ICEPACK.jpg',
            'tdMedc2' => 'td_MEDICINE2.jpg',
            'tdSlam6' => 'td_SLAM6KG.jpg',
            'tdSet' => 'td_TRAININGSET.jpg',
            'tdMarker10' => 'td_MARKER10.jpg',
            'tdAccele' => 'td_ACCELETATION.jpg',
            'tdAgilityLadder' => 'td_AGILITYLADDER.jpg',
            'tdKickFigure' => 'td_KICKFIGURE.jpg',
            'tdMarkongConeRed' => 'td_MARKING.jpg',
            'tdHurdleZelena' => 'td_TRAININGHURDLE.jpg',

        ];
        $tdGoalCervena = Product::where('name', 'GOAL')->first();
        $tdJC219 = Product::where('name', 'JC-219A')->first();
        $tdJC429 = Product::where('name', 'JC-219A')->first();
        $tdMatch = Product::where('name', 'MATCH')->first();
        $tdGoalPro = Product::where('name', 'GOAL PRO')->first();
        $tdPopUp = Product::where('name', 'POP UP GOALS 2 PCS')->first();
        $tdTacticCase = Product::where('name', 'TACTIC CASE ALL GAMES')->first();
        $tdBallNet = Product::where('name', 'BALL NET')->first();
        $tdBallPump = Product::where('name', 'BALL PUMP')->first();
        $tdCapModra = Product::where('name', 'CAPT-ARM')->first();
        $tdCapAdid = Product::where('name', 'CAPT ARMBAND')->first();
        $tdGuardStayCierna = Product::where('name', 'GUARD STAY')->first();
        $tdCoolBox = Product::where('name', 'COOL BOX')->first();
        $tdHotCold = Product::where('name', 'HOT/COLD PACK')->first();
        $tdIcePack = Product::where('name', 'ICE PACK II')->first();
        $tdMedc2 = Product::where('name', 'MEDICINE BALL 2 KG')->first();
        $tdSlam6 = Product::where('name', 'SLAM BALL 6 KG')->first();
        $tdSet = Product::where('name', 'TRAINING SET')->first();
        $tdMarker10 = Product::where('name', 'MARKER 10 PCS')->first();
        $tdAccele = Product::where('name', 'ACCELETATION TRAINER')->first();
        $tdAgilityL = Product::where('name', 'AGILITY LADDER')->first();
        $tdKickFigure = Product::where('name', 'INFLATABLE KICK FIGURE')->first();
        $tdmarkingConeRed = Product::where('name', 'MARKING CONE SET 25 PCS')->first();
        $tdHurdleZelena = Product::where('name', 'TRAINING HURDLE')->first();


        $imageTrainingAccessoriesName = 'tdGoalCervena';
        $upsertData[] = [
            'product_id' => $tdGoalCervena->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Červená'],
            'info' => 'Rozmer: 115x90x50cm, Bránka na rekreačnú hru futbalu, alebo florbalu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdJC219';
        $upsertData[] = [
            'product_id' => $tdJC219->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => '2x bránka vrátane sietí, lopty a pumpičky, Na rekreačné využitie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdJC429';
        $upsertData[] = [
            'product_id' => $tdJC429->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => '2x bránka 122 x 91,5 x 61 cm alebo 1x bránka 183 x 130 x 96 cm.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdMatch';
        $upsertData[] = [
            'product_id' => $tdMatch->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Oranžová'],
            'info' => 'dodávaná v obale, Súčasťou je 8 kolíkov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdGoalPro';
        $upsertData[] = [
            'product_id' => $tdGoalPro->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Oceľová konštrukcia, Vnútorné aj vonkajšie použitie, Skladacia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdPopUp';
        $upsertData[] = [
            'product_id' => $tdPopUp->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => '2 kusy, Rozkladacie, Vrátane tašky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdTacitcCase';
        $upsertData[] = [
            'product_id' => $tdTacticCase->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => 'Na všetky druhy športu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdBallNet';
        $upsertData[] = [
            'product_id' => $tdBallNet->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => 'Pojme 14 - 16 lôpt, Tiahnutie pomocou šnúrky na stiahnutie, Dodávané bez lôpt',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdBallPump';
        $upsertData[] = [
            'product_id' => $tdBallPump->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Pumpička s tubičkou, Ihla vo vnútri rukoväte, Veľký výkon',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdCapModra';
        $upsertData[] = [
            'product_id' => $tdCapModra->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Modrá'],
            'info' => 'Je zošitá z jedného kusa',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdCapAdid';
        $upsertData[] = [
            'product_id' => $tdCapAdid->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Červená'],
            'info' => 'Sieťotlačová grafika, Elastická šnúrka, Zapínanie na suchý zips',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdGuardNikeCierna';
        $upsertData[] = [
            'product_id' => $tdGuardStayCierna->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Balenie obsahuje jeden pár (2ks) úchytov, Vyšívané logo Nike',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdCoolBox';
        $upsertData[] = [
            'product_id' => $tdCoolBox->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => 'Výklopné veko, Jednoduché prenášanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdHOTCOLD';
        $upsertData[] = [
            'product_id' => $tdHotCold->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Modrá'],
            'info' => 'Opakované použitie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdICEPACK';
        $upsertData[] = [
            'product_id' => $tdIcePack->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Biela'],
            'info' => 'Jednorazové, Chladivý efekt, plnené suchým ľadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdMedc2';
        $upsertData[] = [
            'product_id' => $tdMedc2->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'veľká variácia cvikov, unikátny textúrovaný povrch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdSlam6';
        $upsertData[] = [
            'product_id' => $tdSlam6->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'protišmykový povrch pre lepšiu manipuláciu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdSet';
        $upsertData[] = [
            'product_id' => $tdSet->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'hmotnosť celého setu: 3,6 kg',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdMarker10';
        $upsertData[] = [
            'product_id' => $tdMarker10->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Žltá'],
            'info' => ' 10 ks v balení, praktický vak na ľahké uloženie na sťahovanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdAccele';
        $upsertData[] = [
            'product_id' => $tdAccele->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Tréningová pomôcka pre lepšiu dynamiku',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdAgilityLadder';
        $upsertData[] = [
            'product_id' => $tdAgilityL->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Tréningová pomôcka pre nácvik koordinácie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdKickFigure';
        $upsertData[] = [
            'product_id' => $tdKickFigure->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Oranžová'],
            'info' => 'Výborná tréningová pomôcka, veľmi odolná guma',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdMarkongConeRed';
        $upsertData[] = [
            'product_id' => $tdmarkingConeRed->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Červená'],
            'info' => 'Výborná tréningová pomôcka, balenie obsahuje 25 ks kužeľov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];
        $imageTrainingAccessoriesName = 'tdHurdleZelena';
        $upsertData[] = [
            'product_id' => $tdHurdleZelena->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Zelená'],
            'info' => 'Výborná tréningová pomôcka, 6 prekážok, Kvalitné spracovanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTrainingAccessories[$imageTrainingAccessoriesName],
        ];

        //Zdravotné doplnky
        $imageMedical = [
            'medicalBagField' => 'medical_BAGFIELD.jpg',
            'medicalBagMini' => 'medical_BAGMINI.jpg',
            'medicalOrtezaKolenoOprotec' => 'medical_ORTÉZaKOLENOOPROTEC.jpg',
            'medicalPATELLAKNEESUPPORT' => 'medical_PATELLAKNEESUPPORT.jpg',
            'medicalClenokOpro' => 'medical_ClenokOpro.jpg',
            'medicalBandazKoleno' => 'medical_BandazKoleno.jpg',
            'medicalBandazLaket' => 'medical_BandazLaket.jpg',
            'medicalOrtezaKoleno' => 'medical_ORTÉZAKOLENO.jpg',
            'medicalOrtezaZapastie' => 'medical_BandazZapastie.jpg',
            'medicalOrtezaChodidlo' => 'medical_ORTÉZACHODIDLO.jpg',
            'medicalDualCompres' => 'medical_DUALCOMPRES.jpg',
            'medicalBandNeop' => 'medical_BandNeopren.jpg',
            'medicalKolenoElite' => 'medical_ORTÉZAKOLENOElite.jpg',
            'medicalTapeCierny' => 'medical_TAPECIERNY.jpg',
            'medicalTapeHnedy' => 'medical_TAPEHNEDY.jpg',
            'medicalTapeModry' => 'medical_TAPEMODRY.jpg',
            'medicalTapeRuzovy' => 'medical_TAPERUZOVY.jpg',
            'medicalTapeBleskRuzovy' => 'medical_TAPEBLESKRUZOVY.jpg',
            'medicalTapeBleskHnedy' => 'medical_TAPEBLESKHNEDY.jpg',
            'medicalTapeBleskModry' => 'medical_TAPEBLESKMODRY.jpg',
            'medicalTape5x5Cerveny' => 'medical_TAPE5CMX5MCERVENA.jpg',
            'medicalTape5x5Cierny' => 'medical_TAPE5CMX5MCIERNA.jpg',
            'medicalTape5x5Hneda' => 'medical_TAPE5CMX5MHNEDA.jpg',
            'medicalTape5x5Modry' => 'medical_TAPE5CMX5MMODRA.jpg',
            'medicalTape5x5Ruzova' => 'medical_TAPE5CMX5MRUZOVA.jpg',

        ];
        $medicalBagField = Product::where('name', 'MEDICAL BAG FIELD')->first();
        $medicalBagMini = Product::where('name', 'MEDICAL BAG MINI V23')->first();
        $medicalOrtezaOprotec = Product::where('name', 'ORTÉZA NA KOLENO OPROTEC')->first();
        $medicalPATELLAKNEESUPPORT = Product::where('name', 'PATELLA KNEE SUPPORT')->first();
        $medicalClenokOpro = Product::where('name', 'ORTÉZA NA ČLENOK OPROTEC')->first();
        $medicalBandazKoleno = Product::where('name', 'BANDÁŽ KOLENO')->first();
        $medicalBandazLaket = Product::where('name', 'BANDÁŽ NA LAKEŤ OPROTEC')->first();
        $medicalOrtezaKoleno = Product::where('name', 'ORTÉZA NA KOLENO')->first();
        $medicalOrtezaZapastie = Product::where('name', 'OPROtec BANDÁŽ NA ZÁPÄSTIE')->first();
        $medicalOrtezaChodidlo = Product::where('name', 'ORTÉZA NA CHODIDLO OPROTEC')->first();
        $medicalDualCompres = Product::where('name', 'X605 Dual Compression')->first();
        $medicalBandNeopren = Product::where('name', 'BANDÁŽ NEOPREN')->first();
        $medicalKolenoElite = Product::where('name', 'ORTÉZA KOLENO ELITE')->first();
        $medicalTape = Product::where('name', 'SUPERIOR KINESILOGY TAPE')->first();
        $medicalTapeBlesk = Product::where('name', 'TAPE BLESK')->first();
        $medicalTape5x5 = Product::where('name', 'TAPE 5CMX5M')->first();


        $imageMedicalName = 'medicalBagField';
        $upsertData[] = [
            'product_id' => $medicalBagField->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vyvinuté v spolupráci s fyzioterapeutmi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBagMini';
        $upsertData[] = [
            'product_id' => $medicalBagMini->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vyvinuté v spolupráci s fyzioterapeutmi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaKolenoOprotec';
        $upsertData[] = [
            'product_id' => $medicalOrtezaOprotec->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vhodná na použitie v každej oblasti života a športu, rýchle nasadenie, Pomáha zmierniť namáhanie kolenného kĺbu.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaKolenoOprotec';
        $upsertData[] = [
            'product_id' => $medicalOrtezaOprotec->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vhodná na použitie v každej oblasti života a športu, rýchle nasadenie, Pomáha zmierniť namáhanie kolenného kĺbu.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaKolenoOprotec';
        $upsertData[] = [
            'product_id' => $medicalOrtezaOprotec->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vhodná na použitie v každej oblasti života a športu, rýchle nasadenie, Pomáha zmierniť namáhanie kolenného kĺbu.',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalPATELLAKNEESUPPORT';
        $upsertData[] = [
            'product_id' => $medicalPATELLAKNEESUPPORT->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'polstrovaná podpora jabĺčka, Stupeň podpory č2',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalPATELLAKNEESUPPORT';
        $upsertData[] = [
            'product_id' => $medicalPATELLAKNEESUPPORT->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'polstrovaná podpora jabĺčka, Stupeň podpory č2',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalPATELLAKNEESUPPORT';
        $upsertData[] = [
            'product_id' => $medicalPATELLAKNEESUPPORT->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'polstrovaná podpora jabĺčka, Stupeň podpory č2',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalClenokOpro';
        $upsertData[] = [
            'product_id' => $medicalClenokOpro->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'ochrana pred vyvrtnutím členka, zvýšená stailita, neznižuje pohyblivosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalClenokOpro';
        $upsertData[] = [
            'product_id' => $medicalClenokOpro->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'ochrana pred vyvrtnutím členka, zvýšená stailita, neznižuje pohyblivosť',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazKoleno';
        $upsertData[] = [
            'product_id' => $medicalBandazKoleno->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'znižuje riziká vzniku ďalších zranení, zmierňuje bolesti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazKoleno';
        $upsertData[] = [
            'product_id' => $medicalBandazKoleno->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'znižuje riziká vzniku ďalších zranení, zmierňuje bolesti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazKoleno';
        $upsertData[] = [
            'product_id' => $medicalBandazKoleno->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'znižuje riziká vzniku ďalších zranení, zmierňuje bolesti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazLaket';
        $upsertData[] = [
            'product_id' => $medicalBandazLaket->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'uvoľňuje bolesti svalov a kĺbov okolo lakťa, tepelná kompresia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazLaket';
        $upsertData[] = [
            'product_id' => $medicalBandazLaket->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'uvoľňuje bolesti svalov a kĺbov okolo lakťa, tepelná kompresia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandazLaket';
        $upsertData[] = [
            'product_id' => $medicalBandazLaket->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'uvoľňuje bolesti svalov a kĺbov okolo lakťa, tepelná kompresia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaKoleno';
        $upsertData[] = [
            'product_id' => $medicalOrtezaKoleno->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'ochrana, úľava, zotavenie, rýchle nasadenie, kompresný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaKoleno';
        $upsertData[] = [
            'product_id' => $medicalOrtezaKoleno->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'ochrana, úľava, zotavenie, rýchle nasadenie, kompresný',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaZapastie';
        $upsertData[] = [
            'product_id' => $medicalOrtezaZapastie->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'minimalizuje napätie behom písania, používania myši a ďalších pracovných a športových aktivít, ideálna proti bolestiam kĺbov spôsobených artritídou palca',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaZapastie';
        $upsertData[] = [
            'product_id' => $medicalOrtezaZapastie->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'minimalizuje napätie behom písania, používania myši a ďalších pracovných a športových aktivít, ideálna proti bolestiam kĺbov spôsobených artritídou palca',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaZapastie';
        $upsertData[] = [
            'product_id' => $medicalOrtezaZapastie->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'minimalizuje napätie behom písania, používania myši a ďalších pracovných a športových aktivít, ideálna proti bolestiam kĺbov spôsobených artritídou palca',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalOrtezaChodidlo';
        $upsertData[] = [
            'product_id' => $medicalOrtezaChodidlo->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'pre každého, kto trpí bolesťami a kŕčmi nôh, gélová výplň',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalDualCompres';
        $upsertData[] = [
            'product_id' => $medicalDualCompres->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'podpora kĺbov pri extrémnej záťaži, pomáha predchádzať zraneniam, balenie obsahuje dva návleky, odporúčaný obvod kolena pre veľkosť S - 33-35,6 cm, M - 35,6-38,1 cm, L - 38,1-40,6 cm, XL - 40,6-44,5 cm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalDualCompres';
        $upsertData[] = [
            'product_id' => $medicalDualCompres->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'podpora kĺbov pri extrémnej záťaži, pomáha predchádzať zraneniam, balenie obsahuje dva návleky, odporúčaný obvod kolena pre veľkosť S - 33-35,6 cm, M - 35,6-38,1 cm, L - 38,1-40,6 cm, XL - 40,6-44,5 cm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalDualCompres';
        $upsertData[] = [
            'product_id' => $medicalDualCompres->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'podpora kĺbov pri extrémnej záťaži, pomáha predchádzať zraneniam, balenie obsahuje dva návleky, odporúčaný obvod kolena pre veľkosť S - 33-35,6 cm, M - 35,6-38,1 cm, L - 38,1-40,6 cm, XL - 40,6-44,5 cm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalDualCompres';
        $upsertData[] = [
            'product_id' => $medicalDualCompres->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'podpora kĺbov pri extrémnej záťaži, pomáha predchádzať zraneniam, balenie obsahuje dva návleky, odporúčaný obvod kolena pre veľkosť S - 33-35,6 cm, M - 35,6-38,1 cm, L - 38,1-40,6 cm, XL - 40,6-44,5 cm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandNeop';
        $upsertData[] = [
            'product_id' => $medicalBandNeopren->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'poskytuje spoľahlivé spevnenie a pomáha udržiavať telesné teplo, použitie bandáže zmierňuje bolesť , opuch aj zatuhnutie a urýchľuje tak liečbu zranenia ',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandNeop';
        $upsertData[] = [
            'product_id' => $medicalBandNeopren->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'poskytuje spoľahlivé spevnenie a pomáha udržiavať telesné teplo, použitie bandáže zmierňuje bolesť , opuch aj zatuhnutie a urýchľuje tak liečbu zranenia ',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandNeop';
        $upsertData[] = [
            'product_id' => $medicalBandNeopren->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'poskytuje spoľahlivé spevnenie a pomáha udržiavať telesné teplo, použitie bandáže zmierňuje bolesť , opuch aj zatuhnutie a urýchľuje tak liečbu zranenia ',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalBandNeop';
        $upsertData[] = [
            'product_id' => $medicalBandNeopren->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'poskytuje spoľahlivé spevnenie a pomáha udržiavať telesné teplo, použitie bandáže zmierňuje bolesť , opuch aj zatuhnutie a urýchľuje tak liečbu zranenia ',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalKolenoElite';
        $upsertData[] = [
            'product_id' => $medicalKolenoElite->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'gélové vankúšiky, ocelové lamely, stupeň ochrany č3',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalKolenoElite';
        $upsertData[] = [
            'product_id' => $medicalKolenoElite->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'gélové vankúšiky, ocelové lamely, stupeň ochrany č3',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalKolenoElite';
        $upsertData[] = [
            'product_id' => $medicalKolenoElite->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'gélové vankúšiky, ocelové lamely, stupeň ochrany č3',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalKolenoElite';
        $upsertData[] = [
            'product_id' => $medicalKolenoElite->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'gélové vankúšiky, ocelové lamely, stupeň ochrany č3',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeCierny';
        $upsertData[] = [
            'product_id' => $medicalTape->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'rovnaká rozťažnosť ako ľudská koža, ako lepidlo je použitá termosenzibilná lekárska živica, vďaka vodeodolnosti nevylučuje bežnú hygienu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeHnedy';
        $upsertData[] = [
            'product_id' => $medicalTape->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Hnedá'],
            'info' => 'rovnaká rozťažnosť ako ľudská koža, ako lepidlo je použitá termosenzibilná lekárska živica, vďaka vodeodolnosti nevylučuje bežnú hygienu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeModry';
        $upsertData[] = [
            'product_id' => $medicalTape->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Modrá'],
            'info' => 'rovnaká rozťažnosť ako ľudská koža, ako lepidlo je použitá termosenzibilná lekárska živica, vďaka vodeodolnosti nevylučuje bežnú hygienu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeRuzovy';
        $upsertData[] = [
            'product_id' => $medicalTape->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Ružová'],
            'info' => 'rovnaká rozťažnosť ako ľudská koža, ako lepidlo je použitá termosenzibilná lekárska živica, vďaka vodeodolnosti nevylučuje bežnú hygienu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeBleskRuzovy';
        $upsertData[] = [
            'product_id' => $medicalTapeBlesk->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Ružová'],
            'info' => 'využívajú rovnakú rozťažnosť ako ľudská koža.neobsahujú latex, je ho teda možné považovať za hypoalergénne, je nepremokavý - nalepený kinezio tejp nevylučuje bežnú hygienu, ani nosenie v bazéne',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeBleskHnedy';
        $upsertData[] = [
            'product_id' => $medicalTapeBlesk->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Ružová'],
            'info' => 'využívajú rovnakú rozťažnosť ako ľudská koža.neobsahujú latex, je ho teda možné považovať za hypoalergénne, je nepremokavý - nalepený kinezio tejp nevylučuje bežnú hygienu, ani nosenie v bazéne',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTapeBleskModry';
        $upsertData[] = [
            'product_id' => $medicalTapeBlesk->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Ružová'],
            'info' => 'využívajú rovnakú rozťažnosť ako ľudská koža.neobsahujú latex, je ho teda možné považovať za hypoalergénne, je nepremokavý - nalepený kinezio tejp nevylučuje bežnú hygienu, ani nosenie v bazéne',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTape5x5Cerveny';
        $upsertData[] = [
            'product_id' => $medicalTape5x5->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Červená'],
            'info' => 'umožňuje plný rozsah pohybu na rozdiel od klasických fixačných tejpov, priliehavosť zaisťuje termosenzibilná lekárska živica, je vodevzdorný- nalepený kinesio tejp nevylučuje bežnú hygienu, ani nosenie do bazénu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTape5x5Cierny';
        $upsertData[] = [
            'product_id' => $medicalTape5x5->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'umožňuje plný rozsah pohybu na rozdiel od klasických fixačných tejpov, priliehavosť zaisťuje termosenzibilná lekárska živica, je vodevzdorný- nalepený kinesio tejp nevylučuje bežnú hygienu, ani nosenie do bazénu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTape5x5Hneda';
        $upsertData[] = [
            'product_id' => $medicalTape5x5->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Hnedá'],
            'info' => 'umožňuje plný rozsah pohybu na rozdiel od klasických fixačných tejpov, priliehavosť zaisťuje termosenzibilná lekárska živica, je vodevzdorný- nalepený kinesio tejp nevylučuje bežnú hygienu, ani nosenie do bazénu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTape5x5Modry';
        $upsertData[] = [
            'product_id' => $medicalTape5x5->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Modrá'],
            'info' => 'umožňuje plný rozsah pohybu na rozdiel od klasických fixačných tejpov, priliehavosť zaisťuje termosenzibilná lekárska živica, je vodevzdorný- nalepený kinesio tejp nevylučuje bežnú hygienu, ani nosenie do bazénu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];
        $imageMedicalName = 'medicalTape5x5Ruzova';
        $upsertData[] = [
            'product_id' => $medicalTape5x5->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Ružová'],
            'info' => 'umožňuje plný rozsah pohybu na rozdiel od klasických fixačných tejpov, priliehavosť zaisťuje termosenzibilná lekárska živica, je vodevzdorný- nalepený kinesio tejp nevylučuje bežnú hygienu, ani nosenie do bazénu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageMedical[$imageMedicalName],
        ];

        //Rozhodca
        $imageRef = [
            'refPistalka' => 'ref_Pistalka.jpg',
            'refCardSet' => 'ref_CardSet.jpg',
            'refLinesman' => 'ref_Linesman.jpg',
            'refLinesmanPro' => 'ref_LinesmanPro.jpg',

        ];
        $refPistalka = Product::where('name', 'TORNADO')->first();
        $refCardSet = Product::where('name', 'CARD SET')->first();
        $refLinesman = Product::where('name', 'LINESMANS FLAG CLASSIC')->first();
        $refLinesmanPro = Product::where('name', 'LINESMANS FLAG PRO')->first();

        $imageRefName = 'refPistalka';
        $upsertData[] = [
            'product_id' => $refPistalka->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vhodná na zápas, ale aj tréning',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageRef[$imageRefName],
        ];
        $imageRefName = 'refCardSet';
        $upsertData[] = [
            'product_id' => $refCardSet->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vinylové púzdro',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageRef[$imageRefName],
        ];
        $imageRefName = 'refLinesman';
        $upsertData[] = [
            'product_id' => $refLinesman->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => '2 kusy v balení',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageRef[$imageRefName],
        ];
        $imageRefName = 'refLinesmanPro';
        $upsertData[] = [
            'product_id' => $refLinesmanPro->id,
            'size_id' => $sizes['OneSize'],
            'color_id' => $collor['Čierna'],
            'info' => 'profesionálne vlajky, 2 kusy v balení',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageRef[$imageRefName],
        ];

        //Oblečenie
        //Oficiálne dresy

         $imageOfficialShirt = [
            'OtsRealMadridBiely' => 'OTSRealMadridBielyM.jpg',
            'OtsRealMadridCierny' => 'OTSRealMadridCiernyM.jpg',
            'OtsRealMadridBielyZeny' => 'OTSRealMadridBielyZ.jpg',
            'OtsRealMadridCiernyZeny' => 'OTSRealMadridCiernyZ.jpg',
            'OtsRealMadridBielyDeti' => 'OTSRealMadridBielyD.jpg',
            'OtsGironaH' => 'OTSGironaHome.jpg',
            'OtsGironaAway' => 'OTSGironaAway.jpg',
            'OtsSevillaA' => 'OTSSevillaA.jpg',
            'OtsSevillaH' => 'OTSSevillaH.jpg',
            'OtsSevillaW' => 'OTSSevillaW.jpg',
            'OTSWillarealH' => 'OTSWillarealH.jpg',
            'OTSWillarealA' => 'OTSWillarealA.jpg',
            'OTSLiverpoolH' => 'OTSLiverpoolH.jpg',
            'OTSLiverpoolA' => 'OTSLiverpoolA.jpg',
            'OTSLiverpoolW' => 'OTSLiverpoolW.jpg',
        ];
        $OTSReal24Biely = Product::where('name', 'Real Madrid 23/24 (Muži)')->first();
        $OTSReal24Cierny = Product::where('name', 'Real Madrid 23/24 (Muži)')->first();
        $OTSReal24BielyZeny = Product::where('name', 'Real Madrid 23/24 (Ženy)')->first();
        $OTSReal24CiernyZeny = Product::where('name', 'Real Madrid 23/24 (Ženy)')->first();
        $OTSReal24BielyDeti = Product::where('name', 'Real Madrid 23/24 (Deti)')->first();
        $OTSGironaHome = Product::where('name', 'Girona 23/24 (Domáci)')->first();
        $OTSGironaAway = Product::where('name', 'Girona 23/24 (Vonkajší)')->first();
        $OTSGironaDetiDomaci = Product::where('name', 'Girona 23/24 (Domáci Deti)')->first();
        $OTSGironaZenyDomaci = Product::where('name', 'Girona 23/24 (Domáci Ženy)')->first();
        $OTSSevillaHome = Product::where('name', 'Sevilla 23/24 (Domáci)')->first();
        $OTSSevillaAway = Product::where('name', 'Sevilla 23/24 (Vonkajší)')->first();
        $OTSSevillaWoman = Product::where('name', 'Sevilla 23/24 (Ženy)')->first();
        $OTSVillarealH = Product::where('name', 'Villareal 23/24 (Domáci)')->first();
        $OTSVillarealA = Product::where('name', 'Villareal 23/24 (Vonkajší)')->first();
        $OTSVillarealW = Product::where('name', 'Villareal 23/24 (Ženy Vonkajší)')->first();
        $OTSLiverpoolH = Product::where('name', 'Liverpool 23/24 (Domáci)')->first();
        $OTSLiverpoolA = Product::where('name', 'Liverpool 23/24 (Vonkajší)')->first();
        $OTSLiverpoolW = Product::where('name', 'Liverpool 23/24 (Ženy)')->first();

        $imageOfficialShirtName = 'OtsRealMadridBiely';
        $upsertData[] = [
            'product_id' => $OTSReal24Biely->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Domáci dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBiely';
        $upsertData[] = [
            'product_id' => $OTSReal24Biely->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Domáci dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBiely';
        $upsertData[] = [
            'product_id' => $OTSReal24Biely->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Domáci dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBiely';
        $upsertData[] = [
            'product_id' => $OTSReal24Biely->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'Domáci dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBiely';
        $upsertData[] = [
            'product_id' => $OTSReal24Biely->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Biela'],
            'info' => 'Domáci dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCierny';
        $upsertData[] = [
            'product_id' => $OTSReal24Cierny->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCierny';
        $upsertData[] = [
            'product_id' => $OTSReal24Cierny->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCierny';
        $upsertData[] = [
            'product_id' => $OTSReal24Cierny->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCierny';
        $upsertData[] = [
            'product_id' => $OTSReal24Cierny->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyZeny->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyZeny->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyZeny->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyZeny->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCiernyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24CiernyZeny->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCiernyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24CiernyZeny->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCiernyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24CiernyZeny->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridCiernyZeny';
        $upsertData[] = [
            'product_id' => $OTSReal24CiernyZeny->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyDeti';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyDeti->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyDeti';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyDeti->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsRealMadridBielyDeti';
        $upsertData[] = [
            'product_id' => $OTSReal24BielyDeti->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Realu Madrid pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaHome->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaHome->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaHome->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaHome->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaHome->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaAway';
        $upsertData[] = [
            'product_id' => $OTSGironaAway->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaAway';
        $upsertData[] = [
            'product_id' => $OTSGironaAway->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaAway';
        $upsertData[] = [
            'product_id' => $OTSGironaAway->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaAway';
        $upsertData[] = [
            'product_id' => $OTSGironaAway->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres Girony pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaDetiDomaci->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre deti Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaDetiDomaci->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre deti Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaDetiDomaci->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre deti Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaZenyDomaci->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre ženy Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaZenyDomaci->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre ženy Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaZenyDomaci->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre ženy Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaZenyDomaci->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre ženy Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsGironaH';
        $upsertData[] = [
            'product_id' => $OTSGironaZenyDomaci->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre ženy Girona pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaH';
        $upsertData[] = [
            'product_id' => $OTSSevillaHome->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaH';
        $upsertData[] = [
            'product_id' => $OTSSevillaHome->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaH';
        $upsertData[] = [
            'product_id' => $OTSSevillaHome->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaA';
        $upsertData[] = [
            'product_id' => $OTSSevillaAway->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaA';
        $upsertData[] = [
            'product_id' => $OTSSevillaAway->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaA';
        $upsertData[] = [
            'product_id' => $OTSSevillaAway->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Vonkajší dres pre Sevillu pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaW';
        $upsertData[] = [
            'product_id' => $OTSSevillaWoman->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Sevilla pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaW';
        $upsertData[] = [
            'product_id' => $OTSSevillaWoman->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Sevilla pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaW';
        $upsertData[] = [
            'product_id' => $OTSSevillaWoman->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Sevilla pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OtsSevillaW';
        $upsertData[] = [
            'product_id' => $OTSSevillaWoman->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Sevilla pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealH';
        $upsertData[] = [
            'product_id' => $OTSVillarealH->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Žltá'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealH';
        $upsertData[] = [
            'product_id' => $OTSVillarealH->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Žltá'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealH';
        $upsertData[] = [
            'product_id' => $OTSVillarealH->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Žltá'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealH';
        $upsertData[] = [
            'product_id' => $OTSVillarealH->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Žltá'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealA->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealA->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealA->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealA->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSWillarealA';
        $upsertData[] = [
            'product_id' => $OTSVillarealW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Vonkajší dres pre ženy Villarreal pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolH';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolH';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolH';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolH';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'Domáci dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolA';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolA';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolA';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolA';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolH->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Biela'],
            'info' => 'Vonkajší dres pre Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolW';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'Dres pre ženy Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolW';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Dres pre ženy Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolW';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Dres pre ženy Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        $imageOfficialShirtName = 'OTSLiverpoolW';
        $upsertData[] = [
            'product_id' => $OTSLiverpoolW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Dres pre ženy Liverpool pre sezónu 2023/2024',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageOfficialShirt[$imageOfficialShirtName],
        ];
        //Tričká
        $imageShirts = [
            'tsElitePoloCervena' => 'Tshirt_ELITE_POLO_PL_CERVENA.jpg',
            'tsElitePoloBiela' => 'Tshirt_ELITE_POLO_PL_BIELA.jpg',
            'tsIndividualCierna' => 'Tshirt_INDIVIDUAL_RISE_CIERNA.jpg',
            'tsIndividualOranzova' => 'Tshirt_INDIVIDUAL_RISE_ORANZOVA.jpg',
            'tsIndividualZelena' => 'Tshirt_INDIVIDUAL_RISE_ZELENA.jpg',
            'tsIndividualCervena' => 'Tshirt_INDIVIDUAL_RISE_CERVENA.jpg',
            'tsDriFitDBiela' => 'Tshirt_DRI-FIT_PARK_7_JR_BIELA.jpg',
            'tsDriFitDCervena' => 'Tshirt_DRI-FIT_PARK_7_JR_CERVENA.jpg',
            'tsDriFitDCierna' => 'Tshirt_DRI-FIT_PARK_7_JR_CIERNA.jpg',
            'tsDriFitDModra' => 'Tshirt_DRI-FIT_PARK_7_JR_MODRA.jpg',
            'tsSquadraWBiela' => 'Tshirt_SQUADRA_21_JERSEY_W_BIELA.jpg',
            'tsSquadraWCervena' => 'Tshirt_SQUADRA_21_JERSEY_W_CERVENA.jpg',
            'tsSquadraWCierna' => 'Tshirt_SQUADRA_21_JERSEY_W_CIERNA.jpg',
            'tsSquadraWModra' => 'Tshirt_SQUADRA_21_JERSEY_W_MODRA.jpg',
            'tsSquadraWZelena' => 'Tshirt_SQUADRA_21_JERSEY_W_ZELENA.jpg',
            'tsDriFitWModra' => 'Tshirt_DRI-FIT_PARK_W_MODRA.jpg',
            'tsDriFitWCervena' => 'Tshirt_DRI-FIT_PARK_W_CERVENA.jpg',
            'tsDriFitWBiela' => 'Tshirt_DRI-FIT_PARK_W_BIELA.jpg',
            'tsRtgTZelena' => 'Tshirt_RTGTEE_ZELENA.jpg',
            'tsRtgTModra' => 'Tshirt_RTGTEE_MODRA.jpg',
            'tsEssentialsCierna' => 'Tshirt_TRAIN_ESSENTIALS_CIERNA.jpg',
            'tsEssentialsFialova' => 'Tshirt_TRAIN_ESSENTIALS_FIALOVA.jpg',
            'tsEssentialsModra' => 'Tshirt_TRAIN_ESSENTIALS_MODRA.jpg',
            'tsEssentialsZelena' => 'Tshirt_TRAIN_ESSENTIALS_Zelena.jpg',
            'tsTechssZelena' => 'Tshirt_TECHSS.jpg',

        ];
        $tsEliteShirt = Product::where('name', 'Lotto ELITE POLO PL')->first();
        $tsIndividual = Product::where('name', 'INDIVIDUAL RISE JERSEY')->first();
        $tsDriFitJR = Product::where('name', 'DRI-FIT PARK 7 JR')->first();
        $tsSquadra21W = Product::where('name', 'SQUADRA 21 JERSEY W')->first();
        $tsDriFitW = Product::where('name', 'DRI-FIT PARK W')->first();
        $tsRtgTee = Product::where('name', 'RTG TEE')->first();
        $tsEssentials = Product::where('name', 'TRAIN ESSENTIALS STRETCH TRANING T-SHIRT')->first();
        $tsTechSs = Product::where('name', 'TECH REFLECTIVE SS')->first();


        $imageShirtsName = 'tsElitePoloCervena';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloCervena';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloCervena';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloBiela';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloBiela';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloBiela';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsElitePoloBiela';
        $upsertData[] = [
            'product_id' => $tsEliteShirt->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'léga s dvomi gombíkmi, tričko s golierom, logo Lotto',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCierna';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCierna';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCierna';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCierna';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualOranzova';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Oranžová'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualOranzova';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Oranžová'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualZelena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualZelena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualZelena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualZelena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCervena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCervena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCervena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsIndividualCervena';
        $upsertData[] = [
            'product_id' => $tsIndividual->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia dryCELL, loho PUMA, kontrastné farby',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDCierna';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDModra';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDModra';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitDModra';
        $upsertData[] = [
            'product_id' => $tsDriFitJR->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'okrúhly výstrih s mäkkým lemom, technológia Dri-Fit vám zaistí pocit sucha a pohodlia,logo značky na hrudi',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWBiela';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWBiela';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWBiela';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWBiela';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWBiela';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCierna';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCierna';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCierna';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCervena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCervena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCervena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWCervena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWModra';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWModra';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWModra';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWZelena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Zelená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWZelena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWZelena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsSquadraWZelena';
        $upsertData[] = [
            'product_id' => $tsSquadra21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'vyrobený z funkčných recyklovaných materiálov Primegreen, rovný strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWModra';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWBiela';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsDriFitWCervena';
        $upsertData[] = [
            'product_id' => $tsDriFitW->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit dobre odvádza pot od tela, okrúhly výstrih, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTZelena';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTZelena';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTZelena';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Zelená'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTZelena';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Zelená'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTModra';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTModra';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTModra';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsRtgTModra';
        $upsertData[] = [
            'product_id' => $tsRtgTee->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'kvalitné spracovanie, priedušný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsCierna';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsCierna';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsCierna';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsFialova';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Fialová'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsFialova';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Fialová'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsFialova';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Fialová'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsFialova';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Fialová'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsFialova';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Fialová'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsModra';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsModra';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsModra';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsZelena';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsEssentialsZelena';
        $upsertData[] = [
            'product_id' => $tsEssentials->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'AEROREADY, kvalitný materiál',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsTechssZelena';
        $upsertData[] = [
            'product_id' => $tsTechSs->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Zelená'],
            'info' => 'materiál odvádza vlhkosť a rýchlejšie schne, reflexívny prvky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsTechssZelena';
        $upsertData[] = [
            'product_id' => $tsTechSs->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'materiál odvádza vlhkosť a rýchlejšie schne, reflexívny prvky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsTechssZelena';
        $upsertData[] = [
            'product_id' => $tsTechSs->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'materiál odvádza vlhkosť a rýchlejšie schne, reflexívny prvky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];
        $imageShirtsName = 'tsTechssZelena';
        $upsertData[] = [
            'product_id' => $tsTechSs->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Zelená'],
            'info' => 'materiál odvádza vlhkosť a rýchlejšie schne, reflexívny prvky',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShirts[$imageShirtsName],
        ];

        //Trenky
        $imageShorts = [
            'shortsEnt22Zlta' => 'shorts_ENT22ZLTA.jpg',
            'shortsEnt22Cervena' => 'shorts_ENT22CERVENA.jpg',
            'shortsEnt22Cierna' => 'shorts_ENT22CIERNA.jpg',
            'shortsEnt22Modra' => 'shorts_ENT22MODRA.jpg',
            'shortsEnt22Zelena' => 'shorts_ENT22ZELENA.jpg',
            'shortsEnt22Biela' => 'shorts_ENT22BIELA.jpg',
            'shortsProTrainingJRUmbro' => 'shorts_PRO_TRAININGJR.jpg',
            'shortsIndividualRiseJR' => 'shorts_INDIVIDUALRISEJR.jpg',
            'shortsTeamLigaCervena' => 'shorts_TEAMLIGA_CERVENA.jpg',
            'shortsTeamLigaCierna' => 'shorts_TEAMLIGA_CIERNA.jpg',
            'shortsTeamLigaModra' => 'shorts_TEAMLIGA_MODRA.jpg',
            'shortsTeamLigaSeda' => 'shorts_TEAMLIGA_SEDA.jpg',
            'shortsTeamLigaZlta' => 'shorts_TEAMLIGA_ZLTA.jpg',
            'shortsElitePlCervena' => 'shorts_ELITESHORTPL_CERVENA.jpg',
            'shortsElitePlCierna' => 'shorts_ELITESHORTPL_CIERNA.jpg',
            'shortsElitePlModra' => 'shorts_ELITESHORTPL_MODRA.jpg',
            'shortsDriFit3Biela' => 'shorts_DRI-FIT3_BIELA.jpg',
            'shortsDriFit3Cervena' => 'shorts_DRI-FIT3_CERVENA.jpg',
            'shortsDriFit3Modra' => 'shorts_DRI-FIT3_MODRA.jpg',
            'shortsDriFit3Zelena' => 'shorts_DRI-FIT3_ZELENA.jpg',
            'shortsDriFit3Zlta' => 'shorts_DRI-FIT3_ZLTA.jpg',
            'shortsDriFit3Cierna' => 'shorts_DRI-FIT3_CIERNA.jpg',
            'shortsSquad21WBiela' => 'shorts_SQUAD21W_BIELA.jpg',
            'shortsSquad21WCervena' => 'shorts_SQUAD21W_CERVENA.jpg',
            'shortsSquad21WCierna' => 'shorts_SQUAD21W_CIERNA.jpg',
            'shortsSquad21WModra' => 'shorts_SQUAD21W_MODRA.jpg',

        ];
        $shortsEnt22= Product::where('name', 'ENT22 SHO')->first();
        $shortsProTrainer= Product::where('name', 'PRO TRAINING GRAPHIC POLY SHORT JNR')->first();
        $shortsIndividualRiserJR= Product::where('name', 'INDIVIDUALRISE SHORTS JR')->first();
        $shortsTeamLiga= Product::where('name', 'TEAM LIGA SHORTS')->first();
        $shortsEnt22Y= Product::where('name', 'ENT22 SHO Y')->first();
        $shortsElitePl= Product::where('name', 'ELITE SHORT PL')->first();
        $shortsDriFit3= Product::where('name', 'DRI-FIT PARK 3')->first();
        $shortsSquad21W= Product::where('name', 'SQUAD 21 SHO W')->first();

        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Žltá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Žltá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Žltá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Žltá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Žltá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cervena';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cervena';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cervena';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cierna';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cierna';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cierna';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cierna';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Modra';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Modra';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Modra';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Modra';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Modra';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Biela';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Biela';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Biela';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zelena';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zelena';
        $upsertData[] = [
            'product_id' => $shortsEnt22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'Savý materiál AEROREADY, vyrobené z 100% recyklovaných materiálov, ktoré sú súčasťou boja adidas s plastovým odpadom',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsProTrainingJRUmbro';
        $upsertData[] = [
            'product_id' => $shortsProTrainer->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo UMBRO',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsProTrainingJRUmbro';
        $upsertData[] = [
            'product_id' => $shortsProTrainer->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo UMBRO',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsProTrainingJRUmbro';
        $upsertData[] = [
            'product_id' => $shortsProTrainer->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo UMBRO',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsIndividualRiseJR';
        $upsertData[] = [
            'product_id' => $shortsIndividualRiserJR->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsIndividualRiseJR';
        $upsertData[] = [
            'product_id' => $shortsIndividualRiserJR->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsIndividualRiseJR';
        $upsertData[] = [
            'product_id' => $shortsIndividualRiserJR->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'kvalitný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCervena';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCervena';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCervena';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCervena';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCierna';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCierna';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaCierna';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaModra';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaSeda';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Šedá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaSeda';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Šedá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaSeda';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Šedá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaSeda';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Šedá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaZlta';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaZlta';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaZlta';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsTeamLigaZlta';
        $upsertData[] = [
            'product_id' => $shortsTeamLiga->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zlta';
        $upsertData[] = [
            'product_id' => $shortsEnt22Y->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Biela';
        $upsertData[] = [
            'product_id' => $shortsEnt22Y->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Biela';
        $upsertData[] = [
            'product_id' => $shortsEnt22Y->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Zelena';
        $upsertData[] = [
            'product_id' => $shortsEnt22Y->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsEnt22Cervena';
        $upsertData[] = [
            'product_id' => $shortsEnt22Y->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia drycell, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCervena';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCervena';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCervena';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCervena';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCervena';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlModra';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlModra';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlModra';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCierna';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCierna';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCierna';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsElitePlCierna';
        $upsertData[] = [
            'product_id' => $shortsElitePl->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'Odolný priedušný materiál, elastický pás so šnúrkou na stiahnuti',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Biela';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Biela';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Biela';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Biela';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Biela';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cervena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cervena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cervena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cierna';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cierna';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Cierna';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Modra';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Modra';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Modra';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Modra';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Modra';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zlta';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zlta';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zlta';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zlta';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zlta';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Žltá'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zelena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zelena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zelena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsDriFit3Zelena';
        $upsertData[] = [
            'product_id' => $shortsDriFit3->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Zelená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, eleastický pás, logo NIKE',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WBiela';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Biela'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WBiela';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Biela'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WBiela';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Biela'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WBiela';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Biela'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WBiela';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Biela'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCervena';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCervena';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCervena';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCervena';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WCierna';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WModra';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WModra';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WModra';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WModra';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];
        $imageShortsName = 'shortsSquad21WModra';
        $upsertData[] = [
            'product_id' => $shortsSquad21W->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'savý materiál AEROREADY, rovný strih, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageShorts[$imageShortsName],
        ];

         //Tepláky
         $imageTeplaky = [
            'sweatEnt22Cervena' => 'sweatENT22TRPNT_CERVENA.jpg',
            'sweatEnt22Cierna' => 'sweatENT22TRPNT_CIERNA.jpg',
            'sweatEnt22Modra' => 'sweatENT22TRPNT_MODRA.jpg',
            'sweatTeamFinalCierna' => 'sweatTEAMFINALPANTS_CIERNA.jpg',
            'sweatTeamFinalSeda' => 'sweatTEAMFINALPANTS_SEDA.jpg',
            'sweatTeamFinalModra' => 'sweatTEAMFINALPANTS_MODRA.jpg',
            'sweatDfaCd21Cervena' => 'sweatDFACD21_CERVENA.jpg',
            'sweatDfaCd21Cierna' => 'sweatDFACD21_CIERNA.jpg',
            'sweatEliteJrCierna' => 'sweatELITEJRPANTRIBPL_CIERNA.jpg',
            'sweatEliteJrModra' => 'sweatELITEJRPANTRIBPL_MODRA.jpg',
            'sweatUaPennantCierna' => 'sweatUAPENNANT_CIERNA.jpg',
            'sweatUaPennantModra' => 'sweatUAPENNANT_MODRA.jpg',
            'sweatLigaBaseLayerWModra' => 'sweatLIGABASELAYER_MODRA.jpg',
            'sweatLigaBaseLayerWZelena' => 'sweatLIGABASELAYER_ZELENA.jpg',

        ];
        $sweat22= Product::where('name', 'ENT22 TR PNT')->first();
        $sweatTeamFinal= Product::where('name', 'TEAMFINAL TRAINING PANTS')->first();
        $sweatDfaCd21= Product::where('name', 'DF ACD21 PANT KPZ M')->first();
        $sweatEliteJrPant= Product::where('name', 'ELITE JR PANT RIB PL')->first();
        $sweatUaPennat= Product::where('name', 'UA PENNANT 2.0 NOVELTY PANTS')->first();
        $sweatLigaBaselayerW= Product::where('name', 'LIGA BASELAYER LONG TIGHT')->first();

        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cervena';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Červená'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Modra';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Modra';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Modra';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Modra';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cierna';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cierna';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEnt22Cierna';
        $upsertData[] = [
            'product_id' => $sweat22->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'tréningové tepláky, rovný strih, savý materiál AEROREADY, elastický pás',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalCierna';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalCierna';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalCierna';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalCierna';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalCierna';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalSeda';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Šedá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalSeda';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Šedá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalSeda';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Šedá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalSeda';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Šedá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalModra';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalModra';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalModra';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalModra';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatTeamFinalModra';
        $upsertData[] = [
            'product_id' => $sweatTeamFinal->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, príjemný materiál, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cervena';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cervena';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cervena';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cervena';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cierna';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cierna';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cierna';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cierna';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatDfaCd21Cierna';
        $upsertData[] = [
            'product_id' => $sweatDfaCd21->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Dri-Fit vám zaistí pocit sucha a pohodlia, elastický pás, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEliteJrCierna';
        $upsertData[] = [
            'product_id' => $sweatEliteJrPant->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'elastický pás so šnúrkou na stiahnutie, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEliteJrCierna';
        $upsertData[] = [
            'product_id' => $sweatEliteJrPant->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'elastický pás so šnúrkou na stiahnutie, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEliteJrCierna';
        $upsertData[] = [
            'product_id' => $sweatEliteJrPant->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Čierna'],
            'info' => 'elastický pás so šnúrkou na stiahnutie, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEliteJrModra';
        $upsertData[] = [
            'product_id' => $sweatEliteJrPant->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'elastický pás so šnúrkou na stiahnutie, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatEliteJrModra';
        $upsertData[] = [
            'product_id' => $sweatEliteJrPant->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'elastický pás so šnúrkou na stiahnutie, bočné vrecká',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatUaPennantModra';
        $upsertData[] = [
            'product_id' => $sweatUaPennat->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'elastický pás, ktorý sa dá stiahnuť pomocou šnúrky, zúžený strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatUaPennantModra';
        $upsertData[] = [
            'product_id' => $sweatUaPennat->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'elastický pás, ktorý sa dá stiahnuť pomocou šnúrky, zúžený strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatUaPennantModra';
        $upsertData[] = [
            'product_id' => $sweatUaPennat->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'elastický pás, ktorý sa dá stiahnuť pomocou šnúrky, zúžený strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatUaPennantCierna';
        $upsertData[] = [
            'product_id' => $sweatUaPennat->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Čierna'],
            'info' => 'elastický pás, ktorý sa dá stiahnuť pomocou šnúrky, zúžený strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatUaPennantCierna';
        $upsertData[] = [
            'product_id' => $sweatUaPennat->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Čierna'],
            'info' => 'elastický pás, ktorý sa dá stiahnuť pomocou šnúrky, zúžený strih',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWZelena';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Zelená'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XS'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['S'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['M'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['L'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XL'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];
        $imageTeplakyName = 'sweatLigaBaseLayerWModra';
        $upsertData[] = [
            'product_id' => $sweatLigaBaselayerW->id,
            'size_id' => $sizes['XXL'],
            'color_id' => $collor['Modrá'],
            'info' => 'dryCELL technológia, slim fit, logo PUMA',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageTeplaky[$imageTeplakyName],
        ];


         //Brankárske vybavenie
         $imageGoalKeeper = [
            'keeperGloves03Youth' => 'keeper_GKGLOVES03YOUTH.jpg',
            'keeperUltraGrip1' => 'keeper_ULTRA GRIP 1 HYBRID PRO.jpg',
            'keeperUltraGrip1Oranzova' => 'keeper_ULTRA GRIP 1 HYBRID PRO_ORANZOVA.jpg',
            'keeperTiroLCierna' => 'keeper_TIROLEAGUE_CIERNA.jpg',
            'keeperUltraGripRC' => 'keeper_ULTRAGRIP1RC.jpg',
            'keeperUltraGrip1Fialova' => 'keeper_ULTRA GRIP 1 HYBRID PRO_FIALOVA.jpg',
            'keeperUltraGrip51hybridOranzova' => 'keeper_FUTUREGRIP5.1HYBRID_ORANZOVA.jpg',
            'keeperUltraGrip51hybridZlta' => 'keeper_FUTUREGRIP5.1HYBRID_ZLTA.jpg',
            'keeperPredatorCompetitionCierna' => 'keeper_PREDATORCOMPETITION_CIERNA.jpg',
            'keeperPredatorCompetitionRuzova' => 'keeper_PREDATORCOMPETITION_RUZOVA.jpg',
            'keeperPredatorLeagueRuzova' => 'keeper_PREDATORLEAGUE_RUZOVA.jpg',
            'keeperPredatorLeagueBiela' => 'keeper_PREDATORLEAGUE_BIELA.jpg',
            'keeperPredatorLeagueModra' => 'keeper_PREDATORLEAGUE_MODRA.jpg',
            'keeperPhantomShadowCervena' => 'keeper_PHANTOMSHADOW_CERVENA.jpg',
            'keeperPhantomShadowZelena' => 'keeper_PHANTOMSHADOW_ZELENA.jpg',
            'keeperGrip3Cierna' => 'keeper_GRIP3_CIERNA.jpg',
            'keeperGrip3Modra' => 'keeper_GRIP3_MODRA.jpg',
            'keeperVaporGrip3Biela' => 'keeper_VAPORGRIP3_BIELA.jpg',
            'keeperVaporGrip3Cervena' => 'keeper_VAPORGRIP3_CERVENA.jpg',
            'keeperCypherLoveJrCervena' => 'keeper_CYPHERGLOVEJR_CERVENA.jpg',
            'keeperCypherLoveJrZlta' => 'keeper_CYPHERGLOVEJR_ZLTA.jpg',

        ];
        $keeperGloves03Youth= Product::where('name', 'GK GLOVES 03 YOUTH')->first();
        $keeperGlovesUltraGrip1= Product::where('name', 'ULTRA GRIP 1 HYBRID PRO')->first();
        $keeperTiroLCierna= Product::where('name', 'TIRO LEAGUE GOALKEEPER')->first();
        $keeperUltraGripRC= Product::where('name', 'ULTRA GRIP 1 RC')->first();
        $keeperUltraGrip51Hybrid= Product::where('name', 'FUTURE GRIP 5.1 HYBRID')->first();
        $keeperPredatorCompetition= Product::where('name', 'PREDATOR COMPETITION')->first();
        $keeperPredatorLeague= Product::where('name', 'PREDATOR LEAGUE')->first();
        $keeperPhantomShadow= Product::where('name', 'PHANTOM SHADOW')->first();
        $keeperGrip3= Product::where('name', 'GRIP3')->first();
        $keeperVaporGrip3= Product::where('name', 'VAPOR GRIP3 FA20')->first();
        $keeperCypherLoveJr= Product::where('name', 'CYPHER GLOVE - JNR')->first();

        $imageTGoalKeeperName = 'keeperGloves03Youth';
        $upsertData[] = [
            'product_id' => $keeperGloves03Youth->id,
            'size_id' => $sizes['7'],
            'color_id' => $collor['Modrá'],
            'info' => 'široký latexový pásik okolo zápästia
            dlaň je pokrytá 3 mm vrstvou latexu
            plochý strih latexu
            originálne farebné spracovanie
            určené pre malých brankárov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Oranzova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Oranžová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Oranzova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Oranžová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperTiroLCierna';
        $upsertData[] = [
            'product_id' => $keeperTiroLCierna->id,
            'size_id' => $sizes['7'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih pre väčšiu priliehavosť rukavice k prstom
            elastické bandáže dokonalo sadnú a spevnia zápästie
            polstrovaná latexová dlaň URG 3.0 zaručí vynikajúcu priľnavosť
            pások okolo zápästia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperTiroLCierna';
        $upsertData[] = [
            'product_id' => $keeperTiroLCierna->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih pre väčšiu priliehavosť rukavice k prstom
            elastické bandáže dokonalo sadnú a spevnia zápästie
            polstrovaná latexová dlaň URG 3.0 zaručí vynikajúcu priľnavosť
            pások okolo zápästia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperTiroLCierna';
        $upsertData[] = [
            'product_id' => $keeperTiroLCierna->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih pre väčšiu priliehavosť rukavice k prstom
            elastické bandáže dokonalo sadnú a spevnia zápästie
            polstrovaná latexová dlaň URG 3.0 zaručí vynikajúcu priľnavosť
            pások okolo zápästia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperTiroLCierna';
        $upsertData[] = [
            'product_id' => $keeperTiroLCierna->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih pre väčšiu priliehavosť rukavice k prstom
            elastické bandáže dokonalo sadnú a spevnia zápästie
            polstrovaná latexová dlaň URG 3.0 zaručí vynikajúcu priľnavosť
            pások okolo zápästia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperTiroLCierna';
        $upsertData[] = [
            'product_id' => $keeperTiroLCierna->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih pre väčšiu priliehavosť rukavice k prstom
            elastické bandáže dokonalo sadnú a spevnia zápästie
            polstrovaná latexová dlaň URG 3.0 zaručí vynikajúcu priľnavosť
            pások okolo zápästia',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGripRC';
        $upsertData[] = [
            'product_id' => $keeperUltraGripRC->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            latex grip 4 mm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGripRC';
        $upsertData[] = [
            'product_id' => $keeperUltraGripRC->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            latex grip 4 mm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGripRC';
        $upsertData[] = [
            'product_id' => $keeperUltraGripRC->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Biela'],
            'info' => 'kvalitný materiál
            latex grip 4 mm',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Fialova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Fialová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Fialova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Fialová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Fialova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Fialová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Fialova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Fialová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip1Fialova';
        $upsertData[] = [
            'product_id' => $keeperGlovesUltraGrip1->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Fialová'],
            'info' => 'kvalitný materiál
            zápasové rukavice
            upevnenie zápästia na pomocou suchého zipsu
            dlaň 4 mm Superior Grip Latex
            panely na odvetrávanie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridOranzova';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Oranžová'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridOranzova';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Oranžová'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridOranzova';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Oranžová'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridOranzova';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Oranžová'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridZlta';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Žltá'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridZlta';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Žltá'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperUltraGrip51hybridZlta';
        $upsertData[] = [
            'product_id' => $keeperUltraGrip51Hybrid->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Žltá'],
            'info' => 'negatívny strih pre väčšiu priľnavosť rukavice k prstom,
            vynikajúci grip,
            nadčasový vzhľad,
            maximálny komfort a pohodlie',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionCierna';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionCierna';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionCierna';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionCierna';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionCierna';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Čierna'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Ružová'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Ružová'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Ružová'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Ružová'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorCompetitionRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorCompetition->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Ružová'],
            'info' => 'negatívny strih,
            strečový latexový remienok na zápästí,
            Flexibilníý chrbát Mechano,
            50% materiálu je z recyklovaných materiálov',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Ružová'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Ružová'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Ružová'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Ružová'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueRuzova';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Ružová'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueBiela';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Biela'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueBiela';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Biela'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueBiela';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Biela'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueBiela';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Biela'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueModra';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Modrá'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueModra';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Modrá'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPredatorLeagueModra';
        $upsertData[] = [
            'product_id' => $keeperPredatorLeague->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Modrá'],
            'info' => 'tento model obsahuje minimálne 50 % recyklovaných a obnoviteľných materiálov,
            negatívny strih pre väčšiu priliehavosť rukavice k prstom,
            dlaň: pena URG 3.0,
            ľahký polovičný remienok na zápästí,
            na palci rozšírená priľnavá zóna z latexu',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowCervena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Červená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowCervena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Červená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowCervena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Červená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowZelena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Zelená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowZelena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Zelená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowZelena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Zelená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperPhantomShadowZelena';
        $upsertData[] = [
            'product_id' => $keeperPhantomShadow->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Zelená'],
            'info' => 'latexová pena na dlaniach zasahuje až na špičku palca pre ešte lepšie uchopenie,
            sieťovina medzi prstami zaisťuje väčšiu priedušnosť,
            rubové prešívanie zaručuje väčšiu priľnavosť na prstoch',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Cierna';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Cierna';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Cierna';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Cierna';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Čierna'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Modra';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Modra';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Modra';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Modra';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperGrip3Modra';
        $upsertData[] = [
            'product_id' => $keeperGrip3->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Modrá'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            elastický materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Biela';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Biela';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Biela';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Biela';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['12'],
            'color_id' => $collor['Biela'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Cervena';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['8'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Cervena';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['9'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Cervena';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['10'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperVaporGrip3Cervena';
        $upsertData[] = [
            'product_id' => $keeperVaporGrip3->id,
            'size_id' => $sizes['11'],
            'color_id' => $collor['Červená'],
            'info' => 'technológia Grip3 znamená, že na palci, ukazováku a malíčku je špeciálna pena, ktorá lepšie drží loptu,
            nastaviteľný pásik na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať,
            pružný materiál na dlani sa pružne prispôsobí ruke',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrCervena';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Červená'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrCervena';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Červená'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrCervena';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['6'],
            'color_id' => $collor['Červená'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrCervena';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['7'],
            'color_id' => $collor['Červená'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrZlta';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['4'],
            'color_id' => $collor['Žltá'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrZlta';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['5'],
            'color_id' => $collor['Žltá'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrZlta';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['6'],
            'color_id' => $collor['Žltá'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];
        $imageTGoalKeeperName = 'keeperCypherLoveJrZlta';
        $upsertData[] = [
            'product_id' => $keeperCypherLoveJr->id,
            'size_id' => $sizes['7'],
            'color_id' => $collor['Žltá'],
            'info' => 'Sťahovanie zápästí, kvalitný materíal',
            'quantity' => $faker->numberBetween(1, 22),
            'image' => $imageGoalKeeper[$imageTGoalKeeperName],
        ];


        //upsert s celým poľom záznamov
        Variant::upsert($upsertData, ['info', 'quantity', 'image'], ['product_id', 'size_id', 'color_id']);

    }
}
