<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $genderId = Gender::pluck('id');
        $muz = Gender::where('name', 'Muž')->first();
        $zena = Gender::where('name', 'zena')->first();
        $dieta = Gender::where('name', 'Dieťa')->first();
        $unisex = Gender::where('name', 'unisex')->first();
        $brandId = Brand::pluck('id'); //$brandIds = Brand::pluck('id'); vráti kolekciu Laravel. $brandIds = Brand::pluck('id')->all(); vráti natívne PHP pole. Metóda all() konvertuje kolekciu na jednoduché PHP pole.

        $nike = Brand::where('name', 'Nike')->first();
        $adidas = Brand::where('name', 'Adidas')->first();
        $puma = Brand::where('name', 'Puma')->first();
        $joma = Brand::where('name', 'Joma')->first();
        $lotto = Brand::where('name', 'Lotto')->first();
        $newBalance = Brand::where('name', 'New Balance')->first();
        $umbro = Brand::where('name', 'Umbro')->first();
        $underArmour = Brand::where('name', 'Under Armour')->first();
        $select = Brand::where('name', 'Select')->first();
        $opro = Brand::where('name', 'Opro')->first();



        //Lopty
        $lopty = Category::where('name', 'Lopty')->first();
        Product::factory()->create([
            'name' => 'UCL COMPETITION',
            'description' => 'Pýcha Londýna. Odvážny dizajn tejto futbalovej lopte adidas UCL COMPETITION si vypožičal niečo zo vzhľadu lopty inšpirovanej levom.Má tepelne spojený povrch a pružnú butylovú dušu.',
            'price' => '58',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'OCEAUNZ COMPETITION',
            'description' => 'OCEAUNZ COMPETITION zdobí grafika inšpirovaná oficiálnou zápasovou loptou FIFA Womens World Cup a prírodnou krásou Austrálie a Nového Zélandu. Je určená na zápasy. Tepelne lepený povrch.',
            'price' => '62',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TRIO COMPETITION',
            'description' => 'Táto zápasová lopta adidas TIRO COMPETITION je určená na veľké zápasy. Má certifikát najvyššej kvality FIFA, takže sa bude môcť sústrediť len na výkon. ',
            'price' => '51',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TEAM FINAL 21.1 FIFA QUA',
            'description' => 'Zápasová futbalová lopta Puma TEAM FINAL 21.1 s najvyšším certifikátom FIFA. Lopta je vyrobená z nejkvalitnejších materiálov, tak aby vyhovovala hre na najvyššej úrovni.',
            'price' => '101',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'TIRO PRO',
            'description' => 'Futbalová lopta adidas TIRO PRO je tá pravá voľba. Pýši sa tradičným 32-panelovým dizajnom a certifikátom najvyššej kvality FIFA. Textúrovaný povrch a bezšvová konštruckia TSBE zaručí spoľahlivý kontakt s loptou, lepšiu priľnavosť a nižšiu nasiakavosť.',
            'price' => '65',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'CLUB ELITE TEAM',
            'description' => 'Futbalová lopta Nike CLUB ELITE TEAM je kvalitná lopta, ktorá je určená na tréning, ale tiež na zápas. Lopta má certifikát FIFA, ktorý zaručuje jeho vynikajúce vlastnosti.',
            'price' => '50',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'FLIGHT',
            'description' => 'Nike FLIGHT má za sebou osem rokov a 1700 hodín testovania a predstaavuje revolúciu v letovej presnosti. Tvarované drážky a 3D potlač obmedzujú neočakávaný pohyb, zlepšujú dráhu letu.',
            'price' => '108',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'FLIGHT',
            'description' => 'Nike FLIGHT má za sebou osem rokov a 1700 hodín testovania a predstaavuje revolúciu v letovej presnosti. Tvarované drážky a 3D potlač obmedzujú neočakávaný pohyb, zlepšujú dráhu letu.',
            'price' => '129',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'FLIGHT',
            'description' => 'Nike FLIGHT má za sebou osem rokov a 1700 hodín testovania a predstaavuje revolúciu v letovej presnosti. Tvarované drážky a 3D potlač obmedzujú neočakávaný pohyb, zlepšujú dráhu letu.',
            'price' => '84',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA 1 TB FIFA QUALITY PRO',
            'description' => 'Futbalová lopta Puma ORBITA 1 TB FIFA QUALITY PRO je zápasová lopta najvyššej úrovne s vynikajúcimi výkonnostnými kritériami pre najvyššiu úroveň futbalu.',
            'price' => '89',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA 1 TB FIFA QUALITY PRO',
            'description' => 'Futbalová lopta Puma ORBITA 1 TB FIFA QUALITY PRO je zápasová lopta najvyššej úrovne s vynikajúcimi výkonnostnými kritériami pre najvyššiu úroveň futbalu.',
            'price' => '89',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA 2 TB FIFA QUALITY PRO',
            'description' => 'Futbalová lopta Puma ORBITA 2 TB FIFA QUALITY PRO je vhodná na zápasy aj na tréning. Lopta má najvyšší certifikát FIFA Quality pro, ktorá zaisťuje vynikajúce letové vlastnosti, zachovanie tvaru a ďalšie.',
            'price' => '63',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA 3 TB FIFA QUALITY',
            'description' => 'Futbalová lopta Puma ORBITA 3 TB FIFA QUALITY, ktorá sa hodia na tréningy, ale aj na zápasy. Určite oceníte kvalitný materiál zvrška, ktorý minimalizuje nasiakanie vody.',
            'price' => '42',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA LALIGA 1 EL CLASICO',
            'description' => 'Nakopnite to ako legendy LaLigy s touto nádhernou zápasovou loptou Puma ORBITA LALIGA 1 EL CLASICO. Oficiálna futbalová lopta používaná v španielskej najvyššej súťaži má certifikát FIFA Quality Pro.',
            'price' => '141',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'NEO SWERVE PRO',
            'description' => 'Futbalová lopta Umbro NEO SWERVE PRO je vhodná na tréningy aj zápasy.',
            'price' => '49',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'AL RIHLA CLUB',
            'description' => 'Táto lopta adidas AL RIHLA CLUB sa inšpirovala zápasovou loptou FIFA World Cup™. Jeho strojovo šitý plášť je odolný a spoľahlivý. Vďaka butylovej duši vydrží dlhšie nahustený.',
            'price' => '16',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TRAINING VOID TEXTURE',
            'description' => 'Táto tréningová lopta adidas TRAINING VOID TEXTURE sa inšpirovala oficiálnou zápasovou loptou Ligy majstrov. Lopta je dostatočne odolná, aby vydržala náročný tréning.',
            'price' => '28',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'CNXT24 LEAGUE',
            'description' => 'Hrajte ako profesionál s loptou adidas CNXT24 LEAGUE vyrobenou podľa štandardov kvality FIFA. Ideálny pre zápasy a tréningy, má plynulú konštrukciu TSBE, ktorá zostáva konzistentná.',
            'price' => '37',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'EURO 24 FUSSBALLLIEBE CLUB',
            'description' => 'Táto lopta adidas EURO 24 FUSSBALLLIEBE CLUB sa inšpirovala poprednou európskou medzinárodnou súťažou. Je ideálny pre vašu ďalšiu návštevu parku. Butylová duša a strojovo šitá konštrukcia zaručia odolnosť lopty aj pri intenzívnej hre.',
            'price' => '20',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'UCL CLUB',
            'description' => 'Táto lopta adidas UCL CLUB prevzala grafiku z oficiálnej zápasovej lopty. Vďaka odolnej, strojovo šitej konštrukcii a butylovej duši je ideálna na priateľský zápas v parku. Zdobí ju nápis „The Champions“, hudobnej noty a 12 žiarivých hviezd.',
            'price' => '25',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'DALI II',
            'description' => 'Futbalová lopta Joma DALI II sa hodí najmä na tréning a rekreačnú hru. Lopta má odolný zvršok, ktorý predlžuje jej životnosť.',
            'price' => '18',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $joma->id
        ]);
        Product::factory()->create([
            'name' => 'NIKE PITCH',
            'description' => 'Futbalová lopta Nike PITCH TRAINING je odolná a skvelo sa hodí na tréning a zlepšovanie práce nôh.',
            'price' => '16',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'ORBITA 5 HYB',
            'description' => 'Futbalová lopta Puma ORBITA 5 HYB je vyrobená z odolného materiálu, vďaka ktorému sa hodí na tréning, alebo rekreačnú hru.',
            'price' => '32',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'NIKE SERIA A',
            'description' => 'Oficiálna zimná zápasová lopta Nike Ordem Serie A uvedená na trh v rokoch 2016-17',
            'price' => '160',
            'category_id' => $lopty->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);

        // Product::upsert([ lopta_TEAM FINAL21.1FIFAQUA
        //     ['name' => 'NEO SWERVE',
        //     'description' => 'Futsalová lopta Umbro NEO SWERVEmu materiálu si udržiava dlhú .',
        //     'price' => '9',
        //     'category_id' => $lopty->id,
        //     'gender_id' => $muz->id,
        //     'brand_id' => $nike->id],

        //     ['name' => 'NEO asdas',
        //     'description' => 'hru. Vďaka odolnému materiálu si udržiava dlhú .',
        //     'price' => '10',
        //     'category_id' => $lopty->id,
        //     'gender_id' => $muz->id,
        //     'brand_id' => $adidas->id],
        // ], ['name'], ['description', 'price', 'category_id', 'brand_id', 'gender_id']);


        //kopacky
        //Lisovky
        $lisovky = Category::where('name', 'Lisovky')->first();

        Product::factory()->create([
            'name' => 'COPA PURE 2 CLUB FXG',
            'description' => 'Ak chcete skutočne hrať futbal, musíte mať svojich spoluhráčov blízko a loptu ešte bližšie. Nájdite slobodu pri hraní v pohodlnom a elegantnom modeli adidas COPA PURE 2 CLUB FXG. Tieto pánske kopačky zo syntetickej kože predvádzajú historické detaily, ktoré vám dodávajú štýl. Všestranná podrážka podporuje bezchybnú hru na pevnom povrchu, umelej tráve a tvrdom teréne.',
            'price' => '52',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'COPA PURE.3 FG',
            'description' => 'Pánske kopačky adidasCOPA PURE.3 FG majú syntetický zvršok je odolný a nenáročný na údržbu. Kopačky sa hodia na tvrdú prírodnú trávu.',
            'price' => '78',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'PREDATOR ACCURACY.2 FG',
            'description' => 'Zoberte loptu súperovi. Choďte do hry naplno. Držte loptu pod kontrolou. Kvalitné vybavenie so sebou prináša mnoho futbalových príležitostí. V kopačkách Predator budete mať z hry úplne iný zážitok. Tieto pánske kopačky adidas PREDATOR ACCURACY.2 FG majú zvršok Zone Skin s oddelenými vrúbkovanými zónami na rôzne typy kontaktu s loptou. Vďaka strečovému lemu sa ľahko obúvajú. Výrazná podrážka súperom ukáže, kto je kráľom na pevnom povrchu. Model obsahuje recyklované materiály, ktoré sú vyrobené z odstrižkov, zvyškov a odpadu, aby značka adidas zbytočne nezaťažovala životné prostredie výrobou nových materiálov.',
            'price' => '142',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'PREDATOR EDGE.3 LL FG',
            'description' => 'Zoberte loptu súperovi. Choďte do hry naplno. Držte loptu pod kontrolou. Kvalitné vybavenie so sebou prináša mnoho futbalových príležitostí. V kopačkách adidas Predator budete mať z hry úplne iný zážitok. Pánske kopačky adidas PREDATOR EDGE.3 LL FG bez šnurovania podporia bezpochyby prácu s loptou. Zvršok Control Zone má totiž strategicky umiestnené zóny s priľnavou potlačou. Podrážka so zaťaženou špičkou je určená na hru na pevnom povrchu. Model obsahuje recyklované materiály, ktoré sú vyrobené z odstrižkov, zvyškov a odpadu, aby sme zbytočne nezaťažovali životné prostredie výrobou nových materiálov.',
            'price' => '63',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'X CRAZYFAST.3 FG',
            'description' => 'Zabudnite na všetko, čo viete o rýchlosti. Model X Crazyfast je vyrobený z ľahkých dielov a je navrhnutý s ohľadom na maximálne zrýchlenie a manévre v rýchlom tempe. V pánskych kopačkách adidas X CRAZYFAST.3 FG budete môcť hrať skutočne naplno. ľahké kopačky bez šnurovania pre rýchly pohyb sú vyrobené čiatočne z recyklovaných materiálov.',
            'price' => '71',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'JR PHANTOM GX ACADEMY FG/MG',
            'description' => 'Chcete posunúť hru na novú úroveň? detské PHANTOM GX ACADEMY SGPRO / AC sa starajú o presný kontakt s loptou, ktrorý potrebuješ, aby sa mohli naplno rozhorieť tvoje najvnútornejšie hracie inštinkty. Technológia NikeSkin, sieťovaná dotyková zóna, ktorá zlepšuje presnosť, a plát, ktorý podporuje húževnatosť, ktorý sme navrhli tak, aby sa s tebou otáčal a šprintoval. To všetko je pripravené zažať vo vás živelného hracieho ducha.',
            'price' => '63',
            'category_id' => $lisovky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'PHANTOM GX PRO DF FG',
            'description' => 'Chcete posunúť hru na novú úroveň? detské PHANTOM GX ACADEMY SGPRO / AC sa starajú o presný kontakt s loptou, ktrorý potrebuješ, aby sa mohli naplno rozhorieť tvoje najvnútornejšie hracie inštinkty. Technológia NikeSkin, sieťovaná dotyková zóna, ktorá zlepšuje presnosť, a plát, ktorý podporuje húževnatosť, ktorý sme navrhli tak, aby sa s tebou otáčal a šprintoval. To všetko je pripravené zažať vo vás živelného hracieho ducha.',
            'price' => '158',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'ZOOM MERCURIAL VAPOR 15 ACADEMY KM MG',
            'description' => 'Výbušná energia ylextra triedu medzi strelacami.iana Mbappého a jeho schopnosť dynamickej zmeny smeru z neho urobili Tieto pánske kopačky Nike ZOOM MERCURIAL VAPOR 15 ACADEMY KM MG vzdávajú hold jeho odkazu a vyrobené pre hru, ktorá napodobňuje tú jeho  v oslnivom tempe a cieľavedome. Nike pridali jednotku Zoom Air, a priľnavú textúru v hornej časti pre výnimočný kontakt s loptou. Tak môžeš dominovať do posledných minút zápasu  keď na tom záleží najviac.',
            'price' => '91',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'FUTURE 7 MATCH FG/AG',
            'description' => 'Pánske kopačky Puma FUTURE 7 MATCH FG/AG sa hodí na tréning aj zápas. Kopačky majú ľahký, ale odolný zvršok so šnurovaním na šnúrky, pre optimálne utiahnutie a vy sa tak môžete sústrediť len na hru.',
            'price' => '94',
            'category_id' => $lisovky->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ULTRA ULTIMATE FG/AG WMS',
            'description' => 'Či už sa rozbiehate po krídle, alebo sa chystáte previesť tento dôležitý voľný kop, to sú lisovky, ktoré potrebujete. Dámske kopačky Puma ULTRA ULTIMATE FG/AG WMS sú navrhnuté na rýchlosť, sú ľahké a majú pokročilý zvršok, ktorý je ultra mäkký.To znamená, že získate dokonalú kontrolu lopty aj pri najvyššej rýchlosti.Zrýchlenie, rýchlosť, ovládanie: tieto kopačky majú všetko.',
            'price' => '94',
            'category_id' => $lisovky->id,
            'gender_id' => $zena->id,
            'brand_id' => $puma->id
        ]);

         //Lisokoliky
         $lisokoliky = Category::where('name', 'Lisokolíky')->first();

         Product::factory()->create([
             'name' => 'FUTURE Z 1.3 MXSG',
             'description' => 'Pánske lisokolíky Puma FUTURE Z 1.3 MXSG, ktoré poskytujú prispôsobivosť a húževnatosť spojením kompresného pásika v polovici chodidla s asymetrickou podrážkou, ukotvenie nohy a tiež umožňuje dynamickejší pohyb. Textúrovaný zvršok je zónovaný, aby zlepšil priľnavosť lopty a údernú silu. Vhodné na prírodný mäkký povrch.',
             'price' => '200',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $puma->id
         ]);
         Product::factory()->create([
             'name' => 'X CRAZYFAST LEAGUE SG',
             'description' => 'Pánske kopačky adidas X boli vytvorené s ohľadom na rýchlosť. Model X CRAZYFAST LEAGUE SG je toho dôkazom. So všetkými parametrami na dosiahnutie maximálneho zrýchlenia nedáte súperom šancu.',
             'price' => '87',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $adidas->id
         ]);
         Product::factory()->create([
             'name' => 'PREDATOR ACCURACY.3 SG',
             'description' => 'S pánskymi kopačkami adidas PREDATOR ACCURACY.3 SG umiestnite každú strelu do brány s úplnou presnos´tou. Stačí si len vybrať, kam zamierite. Tieto kopačky vám zaručia vynikajúci kontakt s loptou. Majú odolnú textilnú špičku s priľnavou povrchovou úpravou High Definition Texture. Podrážka na mäkké povrchy dodá stabilitu na mokrom prírodnom trávniku.',
             'price' => '95',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $adidas->id
         ]);
         Product::factory()->create([
             'name' => 'PHANTOM GX ACADEMY SG-PRO AC',
             'description' => 'Chceš posunúť hru na novú úroveň? Pánske kopačky PHANTOM GX ACADEMY SG-PRO AC sa starajú o presný kontakt s  loptou, ktrorý potrebuješ, aby sa mohli naplno rozhorieť tvoje najvnútornejšie hracie instinkty. Technológia NikeSkin, sieťovaná dotyková zóna, ktorá zlepšuje presnosť, a plát, ktorý podporuje húževnatosť, ktorý sme navrhli tak, aby sa s tebou otáčal a  sprintoval.',
             'price' => '90',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $nike->id
         ]);
         Product::factory()->create([
             'name' => 'ZOOM MERCURIAL SUPERFLY 9 ACADEMY SG-PRO',
             'description' => 'Vo výraznom dizajne pánskych lisokolíkov Nike ZOOM MERCURIAL SUPERFLY 9 ACADEMY SG-PRO na ihrisku v okamihu otočíte hru vo svoj prospech. Kopačky sú vybavené jednotkou Zoom Air a pružný materiál NikeSkin zaisťuje mimoriadny kontakt s loptou, takže môžete ovládnuť zápas aj v posledných minútach,kedy na tom záleží najviac. Fast is in the Air. Táto verzia má trakčnú podrážku s technológiou Anti-Clog a bráni hromadeniu blata.',
             'price' => '95',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $nike->id
         ]);
         Product::factory()->create([
             'name' => 'FUTURE Z 1.1 MXSG',
             'description' => 'Puma FUTURE Z 1.1 MXSG, ktoré sú pripravené posunúť vašu hru na ďalšiu úroveň. Bezkonkurenčný strih vďaka high-tech kompresnému pásiku FUZIONFIT + v kombinácii s ľahkým a dynamickým dizajnom vám dáva pocit slobody na ihrisku. Medzitým povrch GripControl Pro ponúka vylepšené ovládanie lopty a podrážka Dynamic Motion System prenáša vašu energiu priamo na ihrisku s vynikajúcou trakciou.',
             'price' => '206',
             'category_id' => $lisokoliky->id,
             'gender_id' => $muz->id,
             'brand_id' => $puma->id
         ]);
          //Turfy
          $turfy = Category::where('name', 'Turfy')->first();

          Product::factory()->create([
              'name' => 'COPA PURE 2 CLUB TF',
              'description' => 'Ak chcete skutočne hrať futbal, musíte mať svojich spoluhráčov blízko a loptu ešte bližšie. Nájdite slobodu pri hraní v pohodlnom a elegantnom modeli adidas COPA PURE 2 CLUB TF. Tieto pánske kopačky zo syntetickej kože predvádzajú historické detaily, ktoré vám dodávajú štýl.',
              'price' => '52',
              'category_id' => $turfy->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'MUNDIAL TEAM LEATHER',
              'description' => 'Kopačky adidas MUNDIAL TEAM sú ideálne na tréning aj na zápasy. Disponujú oderu odolnú multikolíkovú podrážku pre optimálne ovládanie na tvrdom povrchu a turfu. Jej súčasťou je aj medzipodrážka z PU pre optimálne odpruženie. Zvršok kopačiek je vyrobený z klokanej kože, takže sa kopačka dokonalo prispôsobí vašej nohe. ',
              'price' => '99',
              'category_id' => $turfy->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'COPA PURE.4 TF',
              'description' => 'Pánske turfy adidas COPA PURE.4 TF , ktoré sa hodia na umelú trávu. Určite oceníte odolný zvršok a dobrý záber. ',
              'price' => '45',
              'category_id' => $turfy->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'FUTURE 7 MATCH TT',
              'description' => 'Pánske turfy Puma FUTURE 7 MATCH TT sa hodia na tréning, ale aj zápas. Majú odolný zvršok a gumovú podrážkupre maximálny záber.',
              'price' => '97',
              'category_id' => $turfy->id,
              'gender_id' => $muz->id,
              'brand_id' => $puma->id
          ]);
          Product::factory()->create([
              'name' => 'TIEMPO LEGEND 10 ACADEMY TF',
              'description' => 'Posledná verzia turfov Academy má úplne novú funkčnú kožu FlyTouch Lite, čo posunie vašu hru na ďalšiu úroveň. Je mäkšia než prírodná koža, prispôsobí sa nohe bez nadmerného napínania, takže môžete udávať vlastné tempo hry. Pánske turfy TIEMPO LEGEND 10 ACADEMY TF sú ľahšie a elegantnejšie než zatiaľ všetky ostatné modely Tiempo.',
              'price' => '87',
              'category_id' => $turfy->id,
              'gender_id' => $muz->id,
              'brand_id' => $nike->id
          ]);
          Product::factory()->create([
              'name' => 'JR PHANTOM GX CLUB TF',
              'description' => 'Detské turfy Nike JR PHANTOM GX CLUB TF nerobia kompromisy v  kvalite a dostanú vás na ihrisko. Vďaka syntetickej koži a asymetrickému šnurovaniu v nich máte presný kontakt s loptou, takže budete sádzať góly jeden za druhým, alebo spoluhráčovi prihrajete takú loptu, ktorá otočí zápas vo váš prospech.',
              'price' => '43',
              'category_id' => $turfy->id,
              'gender_id' => $dieta->id,
              'brand_id' => $nike->id
          ]);

          //Hálovky
          $halovky = Category::where('name', 'Hálovky')->first();

          Product::factory()->create([
              'name' => 'MUNDIAL GOAL LEATHER',
              'description' => 'Halová obuv adidas MUNDIAL GOAL LEATHER má zvršok z jemnej klokanej usne a delený ochranný kryt zo semiša, ktorý zvyšuje odolnosť a pevnosť obuvi. Nechýba ani ľahké odpruženie v EVA a nefarbiaca gumová podrážka.',
              'price' => '95',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'PREDATOR EDGE.4 IN SALA',
              'description' => 'Zoberte loptu súperovi. Choďte do hry naplno. Držte loptu pod kontrolou. Kvalitné vybavenie so sebou prináša mnoho futbalových príležitostí. Detská halová obuv adidas PREDATOR EDGE.4 IN SALA J ponúka maximálny záber do všetkých smerov, maximálnu ovládateľnosť lopty a dobrú oporu.',
              'price' => '38',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'X CRAZYFAST.4 IN',
              'description' => 'Pánska halová obuv adidas X CRAZYFAST.4 IN majú odolný zvršok zo syntetického materiálu, ktorý je nenáročný na údržbu. Určite oceníte ich ľahká a nefarbiacu podrážku.',
              'price' => '48',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'X CRAZYFAST.4 IN J',
              'description' => 'Detská halová obuv adidas X CRAZYFAST.4 IN J majú odolný zvršok zo syntetického materiálu, ktorý je nenáročný na údržbu. Určite oceníte ich ľahká a nefarbiacu podrážku.',
              'price' => '39',
              'category_id' => $halovky->id,
              'gender_id' => $dieta->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'X SPEEDPORTAL.1 IN',
              'description' => 'Otvor si dvere k mimopriestorovej rýchlosti v adidas X Speedportal. Tieto elegantné a mimoriadne pohodlné pánske turfy adidas X SPEEDPORTAL.1 IN vám pomôžu s bleskovými reakciami. Nízka medzipodrážka Lightstrike a gumovú podrážku. Priliehavý zvršok Speedskin s adaptívnym okrajom adidas PRIMEKNIT a ľahkým karbónovým opätkom doprajú stabilitu pri šprintoch aj neočakávaných manévroch.',
              'price' => '118',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $adidas->id
          ]);
          Product::factory()->create([
              'name' => 'TOP FLEX IN',
              'description' => 'Pánska halová obuv Joma TOP FLEX IN postavené na výkon, kombinujú skvelý strih a stabilitu. Halovky sú vyrobené z veľmi pružnej kože, ktorá má najvyššiu kvalitu a vysoko kvalitné nylonové vnútro. Špička obuvi obsahuje vystuženie na úder. Vnútorná vytvarovaná stielka z EVA peny. Medzipodrážka je vyrobená z vysoko kvalitného a odolného phylónu. Podrážka obuvi je vyrobená z vysoko kvalitnej gumy, ktorá je odolná voči oderu.',
              'price' => '108',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $joma->id
          ]);
          Product::factory()->create([
              'name' => 'SOLISTA 700 III ID',
              'description' => 'Pánska halová obuv Lotto SOLISTA 700 III ID využijete nielen na futbal, ale aj na iné halové športy. Predná časť podrážky sa pýši technológiou Puntoflex, ktorá zlepšuje pružnosť a správny ohyb chodidla.',
              'price' => '48',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $lotto->id
          ]);
          Product::factory()->create([
              'name' => 'VAPOR 15 CLUB IC',
              'description' => 'Obujte si ľahkú aerodynamickú obuv Nike VAPOR 15 CLUB IC a ovládnete ihrisko. Air ako záruka rýchlosti. Vnútorná konštrukcia reguluje rýchlosť a je vyrobená z tenkého a pritom silného materiálu, ktorý chodidlo bezpečne drží naa podrážke, nepridáva hmotnosť a optimálne fixuje.',
              'price' => '58',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $nike->id
          ]);
          Product::factory()->create([
              'name' => 'FUTURE 7 MATCH IT',
              'description' => 'Halová obuv Puma FUTURE 7 MATCH IT sa hodí na tréning, ale aj na zápas. Halová obuv má odolný zvršok a nefarbiacu podrážku, ktorú určite oceníte.',
              'price' => '81',
              'category_id' => $halovky->id,
              'gender_id' => $muz->id,
              'brand_id' => $puma->id
          ]);
          Product::factory()->create([
              'name' => 'MERCURIAL VAPOR 15 CLUB IC W',
              'description' => 'Dámska halová obuv Nike JR MERCURIAL VAPOR 15 CLUB IC má syntetický zvršok na jednoduchú údržbu a nefarbiacu podrážku. Zaväzovanie na šnúrky je samozrejmosťou.',
              'price' => '62',
              'category_id' => $halovky->id,
              'gender_id' => $zena->id,
              'brand_id' => $nike->id
          ]);

        //Chrániče

        $chranice = Category::where('name', 'Chranice')->first();
        Product::factory()->create([
            'name' => 'J CE',
            'description' => 'Futbalové chrániče holení Nike J CE majú ľahké a pevné vystuženie, ktoré pri hre chránia pred nárazmi. Chrániče majú dobré tvarovanie, ktoré neprekáža pri hre.',
            'price' => '11',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'MERCURIAL LITE',
            'description' => 'Chrániče holení Nike MERCURIAL LITE ochránia vaše holene, ale nespomalia vás. Ultratenké prevedenie v kombinácii smäkkou penou aodolnou výstuhou dokonalo rozkladá nárazy.',
            'price' => '27',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'MERCURIAL LITE SUPERLOCK',
            'description' => 'Keď sa sústredíte na hru,
            nechcete myslieť na nič iné. Pánske chrániče holení Nike MERCURIAL
            LITE SUPERLOCK s tvarovanou penou sa prispôsobia nohe. Vrstvy s
            technológiou SuperLock držia chrániče v štuplpni spoľahlivo na mieste',
            'price' => '33',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'Y CHARGE',
            'description' => 'Maximálna ochrana holení a členkov, Tento dizajn má tvrdú škrupinu pre nízkoprofilové pokrytie a penovú zadnú časť pre pohodlie.',
            'price' => '20',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'SPARTAN',
            'description' => 'Futbalové chrániče JOMA SPARTAN poskytujú spoľahlivú ochrnu holení. Ergonomicky tvar zaisťuje pohodlné nosenie. Súčas´tou sú kompresné návleky, vďaka ktorým dobre držia na nohy.',
            'price' => '19',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $joma->id
        ]);
        Product::factory()->create([
            'name' => 'TIRO LEAGUE',
            'description' => 'Navrhnuté pre sebaistý futbal. Tieto pánske chrániče holení adidas TIRO LEAGUE sú určené pre hráčov, ktorí sa nenecháajú ničím obmedzovať Pohodlné štíty pohodlne priľahnú k telu a kompresné návleky zaručia, že chrániče zostanú na svojom mieste.',
            'price' => '25',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'X LEAGUE',
            'description' => 'X SG LEAGUE sú súčasťou radu adidas X, ktorý sa zameriava na pohyb a podporí rýchlosť. Vďaka elastickým kompresným častiam sa štíty spevnia a majú asymetrický profil, takže vám skvelo padnú. Perforované odpruženie na zadnej časti zlepšuje priedušnosť a zároveň tlmí nárazy.',
            'price' => '27',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TIRO TRAINING',
            'description' => 'Sú navrhnuté tak, aby zvládli aj nečakané situácie, vďaka dvom popruhom so suchým zipsom perfektne držia na mieste a výstuž z materiálu EVA pohlcuje nárazy a stará sa o tvoje pohodlie.',
            'price' => '15',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'ATTACANTO SLEEVE',
            'description' => 'Futbalové chrániče Puma ATTACANTO SLEEVE, dokonalo tlmia nárazy a vďaka návleku perfektne sedia na nohách.',
            'price' => '20',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ULTRA LIGHT ANKLE',
            'description' => 'Futbalové chrániče Puma ULTRA LIGHT ANKLE s chráničom členkov. Chrániče sú veľmi ľahké, ale zároveň odolné a dobre tlmia nárazy.',
            'price' => '15',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ULTRA LIGHT STRAP',
            'description' => 'Futbalové chrániče Puma ULTRA LIGHT STRAP sú vyrobené z veľmi ľahkého, ale napriek tomu odolného materiálu, ktorý tlmí nárazy. Pomocou dvoch pásikov na suchý zips ich ľahko upevníte.',
            'price' => '15',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ULTRA TWIST',
            'description' => 'Chráňte sa bez toho, aby ste ohrozili slobodu pohybu s týmito chráničmi na holenie Puma ULTRA TWIST.',
            'price' => '33',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'CYPHER GUARD W/ANKLE SOCK',
            'description' => 'Futbalové chrániče Umbro CYPHER GUARD W/ANKLE SOCK s chráničom členka na maximálnu ochranu. Pohodlné zapínanie pomocou suchého zipsu.',
            'price' => '17',
            'category_id' => $chranice->id,
            'gender_id' => $unisex->id,
            'brand_id' => $umbro->id
        ]);

        //Doplnky
        //Tréningové Doplnky
        $treningoveDoplnky = Category::where('name', 'Tréningové doplnky')->first();
        Product::factory()->create([
            'name' => 'GOAL',
            'description' => 'Skladacia futbalová bránka značky Lotto',
            'price' => '24',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'JC-429A',
            'description' => 'Set skladacích futbalových bránok Outdoor play JC-429A je možné zložiť do dvoch malých alebo jednej väčšej bránky. Slúži na rekreačnú hru na záhrade alebo na dvore.',
            'price' => '89',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'JC-219A',
            'description' => 'Skladacie futbalové bránky Outdoor Play JC-219A sú dodávané vrátane lopty, sietí a pumpičky. Skvelo poslúžia na rekreačnú hru na dvore alebo na záhrade.',
            'price' => '35',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $newBalance->id
        ]);
        Product::factory()->create([
            'name' => 'MATCH',
            'description' => 'Jednoducho zložiteľná bránka pre použitie na záhrade alebo na pláži. Pevná konštrukcia bránky. K upevneniu do zeme použijete oceľové kolíky, ktoré sú súčasťou balenia. Bránka je zbalená v praktickej prenosnej taške.',
            'price' => '81',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'GOAL PRO',
            'description' => 'Futbalová bránka GOAL PRO, pre deti a predospelých, ktorá je vhodná nielen na futbal a ponúka precízne spracovanie.',
            'price' => '49',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'POP UP GOALS 2 PCS',
            'description' => 'Futbalové bránky  POP UP GOALS 2 PCS sa dajú zbaliť do priloženej tašky. Vhodné na tréningy, aj na domáce použitie na záhradu.',
            'price' => '79',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'TACTIC CASE ALL GAMES',
            'description' => 'Taktické dosky Select TACTIC CASE ALL GAMES sú určené pre trénerov najrôznejších kolektívnych športov. Praktické dosky vo formáte A4 obsahujú papiere pre nákresy, fix a žetóny.',
            'price' => '39',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'BALL NET',
            'description' => 'Sieť Select BALL NET pojme až 16 lôpt. Ide o praktickú pomôcku nielen pri uskladnení lôpt, ale aj pri ich prenášaní na mieste.',
            'price' => '8',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'BALL PUMP',
            'description' => 'Kvalitná plastová pumpička Select BALL PUMP s kovovou ihlou slúži na nafukovanie lôpt. Ihla je shcovaná v rukovňti pod čiernym krytom.',
            'price' => '12',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'CAPT-ARM',
            'description' => 'Kapitánska páska CAPT-ARM z pružného materiálu, ktorý objíme vašu pažu a spoľahlivo drží. Kapitánske céčko je zvýraznené kontrastnou farbou.',
            'price' => '4',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'CAPT ARMBAND',
            'description' => 'Kapitánska páska adidas CAPT ARMBAND je určená pre zvoleného vodcu tímu. Vďaka nastaviteľnému zapínaniu na suchý zips na paži pevne drží.',
            'price' => '18',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'GUARD STAY',
            'description' => 'Úchyty na chrániče Nike GUARD STAY sú skvelou voľbou pre fixáciu holenných chráničov aby sa neskĺzavali a perfektne sedeli. Zapínanie na suchý zips s možnosťou korigovať silu uchytenia.',
            'price' => '8',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'COOL BOX',
            'description' => 'Chladiaci box Select COOL BOX slúži na uloženie chladiacich vreciek alebo ľadu.',
            'price' => '90',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'HOT/COLD PACK',
            'description' => 'Gélové vrecko Select HOT/COLD PACK s dlhotrvajúcim účinkom je možné opakovane používať. Pre chladivý efekt ho vložte do mraziaka, naopak pre hrejivý efekt ho prehrejte v mikrovlnnej rúre. K tomuto produktu odporúčame použiť bandáž na upevnenie. Neprikladajte priamo na kožu, môže spôsobiť omrzlinu/popáleninu.',
            'price' => '11',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'ICE PACK II',
            'description' => 'Chladiace vrecko Select ICE PACK II na jedno použitie má dlhotrvajúci chladiaci účinok. K tomuto produktu odporúčame použiť bandáž na upevnenie. Neprikladajte priamo na kožu, môže spôsobiť omrzlinu.',
            'price' => '6',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'MEDICINE BALL 2 KG',
            'description' => 'Medicinbal Fitforce SVELTUS MEDICINE BALL 2 KG je ideálny na posilňovanie svalov alebo rehabilitačné cvičenie. Umožňuje vykonávať širokú škálu cvikov. Textúrovaný povrch zaistí lepšiu priľnavosť.',
            'price' => '22',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'SLAM BALL 6 KG',
            'description' => 'Medicinbal Fitforce SLAM BALL 6 KG je ideálny na posilňovanie svalov alebo rehabilitačné cvičenie. Je odolný voči nárazom, má protisklzový povrch a jeho výplň tvorí piesok, ktorý zabraňuje odskokom.',
            'price' => '16',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'TRAINING SET',
            'description' => 'Tréningový komplet obsahuje nevyhnutné vybavenie pre účinný agility tréning,
            Set sa skladá z celkom šiestich prekážok, vysokých 23 cm, 24 vytyčovacích met, vysokých 5 cm, šiestich kužeľov a jedného agility rebríka s celkovou dĺžkou 5,5 m.',
            'price' => '56',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'MARKER 10 PCS',
            'description' => 'Vytyčovacie méty Puma MARKER 10 PCS. Jednoduchá tréningová pomôcka, ktorá slúži k vytýčeniu priestoru a nácviku rôznych techník. Použitie na širokú škálu športových odvetví. ',
            'price' => '36',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ACCELETATION TRAINER',
            'description' => 'Tréningová pomôcka Select ACCELERATION TRAINER zlepšuje akceleráciu a rýchlosť. Využitie má takmer pri všetkých športoch. Možnosť využívať na brankárske tréningy.',
            'price' => '98',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'AGILITY LADDER',
            'description' => 'Rebrík Select AGILITY LADDER tvoria priečky v troch farbách, pomocou ktorých môžete nastaviť obtiažnosť a variabilitu pre koordináciu pohybu behom jedného kola. V balení sú kolíky na prichytenie rebríka do mäkkému podkladu.',
            'price' => '55',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'INFLATABLE KICK FIGURE',
            'description' => 'Nafukovacia figurína Select INFLATABLE KICK FIGURE j je ideálna tréningová pomôcka. Slúži na zlepšenie futbalovej techniky a presnosti strelby. Pre väčšiu stabilitu sa dá dno napustiť vodou',
            'price' => '160',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'MARKING CONE SET 25 PCS',
            'description' => 'Select MARKING CONE SET 25 PCS je set značkovacích kužeľov s výškou 23 cm. Slúži na vytýčenie priestoru a nácviku koordinácie a rýchlosti. Využitie na širokú škálu športových odvetví.',
            'price' => '55',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'TRAINING HURDLE',
            'description' => 'Set 6 prekážok Select TRAINING HURDLE s výškou 38 cm. Ideálna pomôcka na nácvik koordinácie a výbušnosti.',
            'price' => '72',
            'category_id' => $treningoveDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);

        //Zdravotné Doplnky
        $zdravotneDoplnky = Category::where('name', 'Zdravotné doplnky')->first();
        Product::factory()->create([
            'name' => 'MEDICAL BAG FIELD',
            'description' => 'Masérska taška Select MEDICAL BAG FIELD obsahuje 2 chladiace vrecká, náplaste, nožničky a tejpovacie pásky.',
            'price' => '118',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'MEDICAL BAG MINI V23',
            'description' => 'Masérska taška Select MEDICAL BAG MINI V23 obsahuje 2 chladiace vrecká, náplaste, nožničky a ovínadlo.',
            'price' => '55',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'ORTÉZA NA KOLENO OPROTEC',
            'description' => 'Ortéza na koleno s uzavretou časťou na jabĺčko je navrhnutá tak, aby poskytovala úľavu, podporu a stabilitu behom športu aj mimo neho. Ortéza obopína koleno tak, aby poskytovala tepelnú ochranu, ktorá pomáha zmierniť namáhanie svalov a kĺbov. Uzavretá časť v oblasti jabĺčka dovolí kĺbu odpočinúť si aj vďaka tejto extra vrstve ochrany.',
            'price' => '27',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'PATELLA KNEE SUPPORT',
            'description' => 'Ortéza na koleno McDavid PATELLA KNEE SUPPORT sa vyznačuje dvomi stredovými a dvomi bočnými lamelami s nastaviteľnými pásikmi a vynikajúcou podporou jabĺčka v tvare podkovy, čo pomáha udržať ho v správnej polohe. Poskytuje úľavu od bolesti a podporu kolena pri stredne závažných problémoch s väzmi, chondromalácie, subluxácii patelly a zápalu šliach. Je zároveň vybavená 5 mm hrubým neoprénovým návlekom proti šmýkaniu, ktorý má na oboch stranách nylonový poťah. Použitie na pravú aj ľavú nohu.',
            'price' => '73',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'ORTÉZA NA ČLENOK OPROTEC',
            'description' => 'Ortéza na členok so stabilizátormi OPROtec je navrhnutá tak, aby zmiernila bolesť členka pri chôdzi, behu a dokonca aj pri odpočinku doma. Nasaďte ju na členok a okamžite si všimnete rozdiel. Vaše svaly sa budú cítiť viac v teple, členok bude pevnejší a podporné stabilizátory vám pomôžu znovu aktivovať správny pohyb. Vďaka nastaviteľnej dĺžke a inovatívnemu systému zafixovania je ortéza pohodlná pri každom kroku.',
            'price' => '36',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'BANDÁŽ KOLENO',
            'description' => 'Táto neoprénová kolenná ortéza McDavic zmierňuje bolesti a minimalizuje riziká vzniku ďalších zranení pri športovaní. Vďaka otvoru na prednej strane znižuje tlak vyvíjaný na jabĺčko. Bandáž má obojstranné prevedenie a zaručuje dlhú životnosť. Je naviac vyrobená z materiálu, ktorý neobsahuje latex, takže je vhodná aj pre osoby, ktoré sú na túto látku alergické.',
            'price' => '31',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'BANDÁŽ NA LAKEŤ OPROTEC',
            'description' => 'Neoprénová bandáž na lakeť OPROtec je vyvinutá na uvoľnenie bolesti svalov a kĺbov okolo lakťa. Nasadenie trvá len niekoľko sekúnd a ihneď využijete výhody zahriatia svalov, spôsobené tepelnou kompresiou. Ako sa opuch a zápal znižujú, prietok krvi je maximalizovaný, zmierňuje sa aj bolesť lakťa a vracia sa sila a stabilita do celej paže.',
            'price' => '22',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'ORTÉZA NA KOLENO',
            'description' => 'Ortéza na kolená s otvorenou časťou na jabĺčko OPROtec od značky Opro je ideálna pre každého, kto trpí bolesťami pri behu alebo inom športe. Táto ortéza dopraje kolennému kĺbu potrebnú podporu. Je navrhnutá tak, aby poskytovala dokonalú rovnováhu medzi stabilitou, podporou a voľnosťou pohybu. Je ľahká, kompresná a vyrobená špeciálne pre ľavé a pravé koleno. Môže byť nasadená behom niekoľkých sekúnd a poskytuje teplo celému kĺbu. ',
            'price' => '26',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'OPROtec BANDÁŽ NA ZÁPÄSTIE',
            'description' => 'Bandáž na zápästie a palce OPROtec je navrhnutá tak, aby vám pomohla so všetkým, od vyvrtnutia až po zlomeninu. Bandáž na palec drží váš kĺb v neutrálnej polohe a minimalizuje namáhanie bez obmedzenia pohybu. Poskytuje cielenú kompresiu tam, kde ju potrebujete, získate dokonalú rovnováhu od úľavy, podpory a ochrany pred budúcim možným zranením.',
            'price' => '26',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'ORTÉZA NA CHODIDLO OPROTEC',
            'description' => 'Ortéza na chodidlo OPROtec je určená pre každého, kto trpí bolesťami a kŕčmi v nohách. Jedinečná univerzálna konštrukcia umožňuje ortézu nosiť na oboch nohách. Ortéza používa tepelnú kompresiu na zvýšenie ochrany, stability a podpory na vašej ceste k uzdraveniu. Tento efekt je podporený gélovou výplňou, ktorá zaisťuje pohodlie pri každom kroku.',
            'price' => '19',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'X605 Dual Compression',
            'description' => 'Kompresné návleky na kolená McDavid X605 DUAL COMPRESSION so špeciálne cielenou kompresiou sú určené na používanie v posilňovniach pri vzpieraní alebo inom posilňovaní so záťažou. Návlek podporuje kĺby pri extrémnej záťaži a pomáha predchádzať zraneniam. Balenie obsahuje dva kusy návlekov.',
            'price' => '41',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'BANDÁŽ NEOPREN',
            'description' => 'Spoľahlivá MADMAX BANDÁŽ NEOPRÉN bola vyvinutá tak, aby posyktovala maximálne spoľahlivú fixáciu, ochranu a prehriatie zápästia. Bandáž je vyrobená z neoprénu a je perfektnou voľbou na prevenciu a liečbu úrazov, ktoré bohužiaľ so športom občas súvisia.',
            'price' => '9',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'ORTÉZA KOLENO ELITE',
            'description' => 'Ortéza na koleno McDavid je elastická s postrannými lamelami, gélovým vankúšikom a duálnymi páskami. Poskytuje podporu pri nestabilite alebo uvoľnení kolenných väzov. Má anatomický strih a zaistí maximálny komfort.',
            'price' => '67',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'SUPERIOR KINESILOGY TAPE',
            'description' => 'Ares KINESIMO SUPERIOR KINESILOGY TAPE je pružná tejpovacia páska, vhodná na podporu liečby pohybového aparátu. Zároveň pomáha odstrániť bolesť zubov, šliach, kĺbov a redukujú svalovú únavu a výskyt kŕčov. Tejpy majú rovnakú rozťažnosť ako ľudská koža, vďaka čomu nijako neobmedzujú v pohybe.',
            'price' => '8',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'TAPE BLESK',
            'description' => 'Pomáha odstrániť bolesti svalov, šliach a kĺbov je vyrobená zo syntetického hodvábu a vyniká ešte lepšou priľnavosťou a vodeodolnosťou. Podporuje kontrakciu oslabených svalov, redukciu únavy preťažených svalov, zníženie možnosti zranenia a kŕčov, zvýšenie rozsahu pohybu a zmiernenie bolesti, obnovenie toku lymfy a krvi, zníženie tepla a zápalových exsudátov v tkanivách, redukciu zápalu a bolesti, korekciu problémov s kĺbmi, centrovanie kĺbu vďaka normalizácii svalového tonu, zlepšenie rozsahu pohybu a zníženie bolesti.',
            'price' => '11',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        Product::factory()->create([
            'name' => 'TAPE 5CMX5M',
            'description' => 'Špeciálne pásky, ktoré napomáhajú odstrániť bolesti svalov, šliach a kĺbov. Podporujú skvalitnenie a kontrakcie oslabených svalov, redukciu únavy preťažených svalov, zníženie možnosti zranení a kŕčov, zvýšenie rozsahu pohybu a zmiernenie bolesti, obnovenie toku lymfy a krvi, zníženie tepla a zápalových exsudátov v tkaní, redukciu zápalu a bolesti, korekciu kĺbových problémov, centrovanie kĺbu vďaka normalizácii svalového tonu, zlepšenie rozsahu pohybu a zníženie bolesti.',
            'price' => '10',
            'category_id' => $zdravotneDoplnky->id,
            'gender_id' => $unisex->id,
            'brand_id' => $opro->id
        ]);
        //Rozhodca
        $rozhodca = Category::where('name', 'Rozhodca')->first();
        Product::factory()->create([
            'name' => 'TORNADO',
            'description' => 'Píšťalka Quick TORNADO na zápasy aj na tréning. Najobľúbenejšia píšťalka pre trénerov a rozhodcov. S atypickým dizajnom a veľmi silnou intenzitou hvizdu.',
            'price' => '5',
            'category_id' => $rozhodca->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'CARD SET',
            'description' => 'Set červenej a žltej karty pre rozhodcov Kensis CARD SET v praktickom púzdre, kde nechýba pero na nevyhnutné poznámky.',
            'price' => '6',
            'category_id' => $rozhodca->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'LINESMANS FLAG CLASSIC',
            'description' => 'Vlajky Select LINESMANS FLAG CLASSIC pre čiarových rozhodcov.',
            'price' => '26',
            'category_id' => $rozhodca->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);
        Product::factory()->create([
            'name' => 'LINESMANS FLAG PRO',
            'description' => 'Vlajky Select LINESMANS FLAG CLASSIC pre čiarových rozhodcov.',
            'price' => '39',
            'category_id' => $rozhodca->id,
            'gender_id' => $unisex->id,
            'brand_id' => $select->id
        ]);

        //Oficiálne dresy
        $oblecenie = Category::where('name', 'Oficiálne dresy')->first();
        Product::factory()->create([
            'name' => 'Real Madrid 23/24 (Muži)',
            'description' => 'Oficiálny dres Realu Madrid pre sezónu 2023/2024',
            'price' => '115',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'Real Madrid 23/24 (Ženy)',
            'description' => 'Oficiálny dres Realu Madrid pre sezónu 2023/2024',
            'price' => '110',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'Real Madrid 23/24 (Muži)',
            'description' => 'Oficiálny dres Realu Madrid pre sezónu 2023/2024',
            'price' => '115',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'Real Madrid 23/24 (Ženy)',
            'description' => 'Oficiálny dres Realu Madrid pre sezónu 2023/2024',
            'price' => '110',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'Real Madrid 23/24 (Deti)',
            'description' => 'Oficiálny dres Realu Madrid pre sezónu 2023/2024',
            'price' => '70',
            'category_id' => $oblecenie->id,
            'gender_id' => $dieta->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'Girona 23/24 (Domáci)',
            'description' => 'Oficiálny dres Girony pre sezónu 2023/2024',
            'price' => '99',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'Girona 23/24 (Vonkajší)',
            'description' => 'Oficiálny dres Girony pre sezónu 2023/2024',
            'price' => '99',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'Girona 23/24 (Domáci Deti)',
            'description' => 'Oficiálny dres Girony pre sezónu 2023/2024',
            'price' => '60',
            'category_id' => $oblecenie->id,
            'gender_id' => $dieta->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'Girona 23/24 (Domáci Ženy)',
            'description' => 'Oficiálny dres Girony pre sezónu 2023/2024',
            'price' => '60',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'Sevilla 23/24 (Domáci)',
            'description' => 'Oficiálny dres Sevilly pre sezónu 2023/2024',
            'price' => '100',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'Sevilla 23/24 (Vonkajší)',
            'description' => 'Oficiálny dres Sevilly pre sezónu 2023/2024',
            'price' => '100',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'Sevilla 23/24 (Ženy)',
            'description' => 'Oficiálny dres pre ženy Sevilly pre sezónu 2023/2024',
            'price' => '100',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'Villareal 23/24 (Domáci)',
            'description' => 'Oficiálny dres pre Villarreal pre sezónu 2023/2024',
            'price' => '98',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $joma->id
        ]);
        Product::factory()->create([
            'name' => 'Villareal 23/24 (Vonkajší)',
            'description' => 'Oficiálny dres pre Villarreal pre sezónu 2023/2024',
            'price' => '98',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $joma->id
        ]);
        Product::factory()->create([
            'name' => 'Villareal 23/24 (Ženy Vonkajší)',
            'description' => 'Oficiálny dres pre Villarreal pre sezónu 2023/2024',
            'price' => '62',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $joma->id
        ]);
        Product::factory()->create([
            'name' => 'Liverpool 23/24 (Domáci)',
            'description' => 'Oficiálny dres pre Liverpool pre sezónu 2023/2024',
            'price' => '70',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'Liverpool 23/24 (Vonkajší)',
            'description' => 'Oficiálny dres pre Liverpool pre sezónu 2023/2024',
            'price' => '70',
            'category_id' => $oblecenie->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'Liverpool 23/24 (Ženy)',
            'description' => 'Oficiálny dres pre Liverpool pre sezónu 2023/2024',
            'price' => '70',
            'category_id' => $oblecenie->id,
            'gender_id' => $zena->id,
            'brand_id' => $nike->id
        ]);

        //Tričká
        $tricka = Category::where('name', 'Tričká')->first();
        Product::factory()->create([
            'name' => 'Lotto ELITE POLO PL',
            'description' => 'Pánske polo tričko Lotto ELITE POLO PL v klasickom prevedení s golierom a gombíkmi. Tričko je vyrobené z príjemnému materiálu sa budete cítiť v pohodlí.',
            'price' => '25',
            'category_id' => $tricka->id,
            'gender_id' => $muz->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'INDIVIDUAL RISE JERSEY',
            'description' => 'Futbalové tričko Puma INDIVIDUAL RISE JERSEY sú vyrobené z vysoko odolného a priedušného materiálu.',
            'price' => '17',
            'category_id' => $tricka->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'DRI-FIT PARK 7 JR',
            'description' => 'Detský futbalový dres na futbal Nike DRI-FIT PARK 7 JR je vyrobený z priedušného materiálu, takže pre vašich malých futbalistov nude ich tréning hračkou. Použitá technológia Dri-Fit perfektne odvádza pot od tela, takže sa budete cítiť po celý čas nosenia v suchu a v pohodlí. Vsaďte ako rodič na klasiku a obstarajte svojim juniorom tento dres od značky Nike.  ',
            'price' => '15',
            'category_id' => $tricka->id,
            'gender_id' => $dieta->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'SQUADRA 21 JERSEY W',
            'description' => 'V tomto dámskom futbalovom drese adidas AQUADRA 21 JERSEY W budete vyhrávať štýlovo. Je vyrobený zo savého materiálu AEROREADY. Minimalistické prevedenie umožňuje na dres pridať tímové detaily a čísla hráčov.',
            'price' => '19',
            'category_id' => $tricka->id,
            'gender_id' => $zena->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'DRI-FIT PARK W',
            'description' => 'Dámsky futbalový dres s krátkym rukávom Nike DRI-FIT PARK s technológiou Dri-FIT vás udrží v suchu po celú dobu nosenia. Dres má priliehavý strih a raglánové rukávy, takže sa budete cítiť skvele za všetkých okolností. Na hrudi je vyšité logo značky Swoosh.',
            'price' => '21',
            'category_id' => $tricka->id,
            'gender_id' => $zena->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'RTG TEE',
            'description' => 'Pánske športové tričko Puma RTG TEE vyrobené z vysoko kvalitného materiálu. Má veľmi pohodlné a priedušné prevedenie. Vďaka technológii dryCELL je všetok pot absorbovaný a vy tak zostanete v suchu. Vhodné na športové aktivity ale aj na voľný čas.',
            'price' => '20',
            'category_id' => $tricka->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'TRAIN ESSENTIALS STRETCH TRANING T-SHIRT',
            'description' => 'Bez ohľadu na vaše cvičenie vám toto tričko adidas TRAIN ESSENTIALS STRETCH TRAINING pre mužov poskytuje úplnú slobodu pohybu. Priedušná tkanina má dostatočnú elasticitu a je strihaná tak, aby zakryla aj pri namáhavom pohybe. AEROREADY vás udrží v suchu na každom kroku cesty. Tento produkt, ktorý je vyrobenú z radu recyklovaných materiálov a najmenej 70 % recyklovaného obsahu predstavuje len jedno z riešení, ktoré pomáhajú skoncovať s plastovým odpadom.',
            'price' => '28',
            'category_id' => $tricka->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TECH REFLECTIVE SS',
            'description' => 'Pánske tričko Under Armour TECH REFLECTIVE SS je vyrobené z tkaniny UA Tech, ktorá ktorá je rýchloschnúca, veľmi mäkká a poskytuje prirodzenejší pocit pri nosení. Využitý materiál odvádza pot a veľmi rýchlo schne.',
            'price' => '22',
            'category_id' => $tricka->id,
            'gender_id' => $muz->id,
            'brand_id' => $underArmour->id
        ]);

        //Trenky
        $trenky = Category::where('name', 'Trenky')->first();
        Product::factory()->create([
            'name' => 'ENT22 SHO',
            'description' => 'Futbalové šortky adidas ENT22 SHO zaisťujú maximálne pohodlie jednak pri tréningu, ale aj na zápase. Majú elegantný strih, ktorý je doplnený o klasické logo Badge of Sport na nohavici. Savý materiál AEROREADY ich udržiava v suchu. Vďaka elastickému pásu so šnúrkou na stiahnutie vždy skvelo sedia.',
            'price' => '13',
            'category_id' => $trenky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'PRO TRAINING GRAPHIC POLY SHORT JNR',
            'description' => 'Detské športové šortky Umbro PRO PRO PRO TRAINING GRAPHIC POLY SHORT JNR, ktoré sa hodí najmä na futbal, ale určite nájde uplatnenie aj pri iných športoch. decentné logo značky na nohavici;',
            'price' => '12',
            'category_id' => $trenky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $umbro->id
        ]);
        Product::factory()->create([
            'name' => 'INDIVIDUALRISE SHORTS JR',
            'description' => 'Detské futbalové kraťasy Puma INDIVIDUALRISE SHORTS JR boli navrhnuté tak, aby udržovali maximálnu úroveň výkonu. Sú vyrobené z priedušného materiálu, ktorý v kombinácii s ergonomickým strihom spĺňa všetky podmienky, ktoré najlepší hráči potrebujú. Sú navrhnuté na zápasy vonku.',
            'price' => '14',
            'category_id' => $trenky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'TEAM LIGA SHORTS',
            'description' => 'Pánske futbalové šortky Puma TEAM LIGA SHORTS sú vyrobené z vysoko odolného a priedušného materiálu. Majú elastický pás so šnúrkou na stiahnutie.',
            'price' => '21',
            'category_id' => $trenky->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'ENT22 SHO Y',
            'description' => 'Detské futbalové šortky adidas ENT22 SHO zaisťujú maximálne pohodlie jednak pri tréningu, ale aj na zápase. Majú elegantný strih, ktorý je doplnený o klasické logo Badge of Sport na nohavici. Savý materiál AEROREADY ich udržiava v suchu. Vďaka elastickému pásu so šnúrkou na stiahnutie vždy skvelo sedia.',
            'price' => '11',
            'category_id' => $trenky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'ELITE SHORT PL',
            'description' => 'Pánske futbalové kraťasy Lotto ELITE JR SHORT PL sú navrhnuté na udržanie maximálneho výkonu. Odolný priedušný materiál odvádza vlhkosť od pokožky a zaručuje potrebné pohodlie. Elastický pás so sťahovacou šnúrkou pre ideálne nastavenie. Dizajn obohacuje kontrastné logo na nohavici.',
            'price' => '9',
            'category_id' => $trenky->id,
            'gender_id' => $muz->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'DRI-FIT PARK 3',
            'description' => 'Pánske futbalové kraťasy Nike DRI-FIT PARK 3 majú mnoho vychytávok, ktoré ako správny hráč určite oceníte. Je to napríklad elastický pás s vnútornou sťahovacou šnúrkou, alebo technológia Dri-FIT, ktorá odvádza pot, takže budete v suchu a pohodlí aj pri náročnom tréningu alebo zápase. Dĺžka nohavíc je ideálna, nad kolená, a umožňuje väčší rozsah pohybu. ',
            'price' => '19',
            'category_id' => $trenky->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'SQUAD 21 SHO W',
            'description' => 'Dámske futbalové šortky adidas SQUAD 21 SHO W z odolného recyklovaného polyesteru a savého materiálu AEROREADY vás udrží v suchu a pohodlí. Minimalistické prevedenie a maximálna funkčnosť zaručia, že aj na ihrisku budete vyzerať skvelo.',
            'price' => '19',
            'category_id' => $trenky->id,
            'gender_id' => $zena->id,
            'brand_id' => $adidas->id
        ]);

        //Tepláky
        $teplaky = Category::where('name', 'Tepláky')->first();
        Product::factory()->create([
            'name' => 'ENT22 TR PNT',
            'description' => 'S pánskymi futbalovými teplákami adidas ENT22 TR PNT trénujete ako profesionál. Sú vyrobené zo savého materiálu AEROREADY, ktoré vás udržia v suchu nielen na ihrisku. Vďaka šnúrke na stiahnutie v páse výborne drží na mieste.. Zipsy na členkoch vám uľahčia prevliekanie.',
            'price' => '31',
            'category_id' => $teplaky->id,
            'gender_id' => $muz->id,
            'brand_id' => $adidas->id
        ]);
        Product::factory()->create([
            'name' => 'TEAMFINAL TRAINING PANTS',
            'description' => 'Futbalové tepláky Puma TEAMFINAL TRAINING PANTS sú vyrobené z veľmi tenkej a vysoko prieuyšnej a pohodlnej textílie.',
            'price' => '61',
            'category_id' => $teplaky->id,
            'gender_id' => $muz->id,
            'brand_id' => $puma->id
        ]);
        Product::factory()->create([
            'name' => 'DF ACD21 PANT KPZ M',
            'description' => 'Pánske futbalové tepláky Nike DF ACD21 PANT KPZ M v jednoduchom štýle ponúka komfortný materiál, ktorý každého s pomocou technológie Dri-Fit udrží v suchu a v pohodlí. Nohavice majú elastický pás, zúžený strih a bočné vrecká. Tréning sa posunie na vyššiu úroveň, keď ho absolvujete v týchto teplákoch značky Nike.',
            'price' => '38',
            'category_id' => $teplaky->id,
            'gender_id' => $muz->id,
            'brand_id' => $nike->id
        ]);
        Product::factory()->create([
            'name' => 'ELITE JR PANT RIB PL',
            'description' => 'Juniorské športové tepláky Lotto ELITE JR PANT RIB PL sú vyrobené z rýchloschnúceho materiálu. Vďaka šnúrke v páse je možné ich upraviť podľa postavy, aby nerozptyľovali počas výkonu. Využijete ich ako pri futbalovom tréningu, tak vo voľnom čase.',
            'price' => '20',
            'category_id' => $teplaky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $lotto->id
        ]);
        Product::factory()->create([
            'name' => 'UA PENNANT 2.0 NOVELTY PANTS',
            'description' => 'Chlapčenské tepláky Under Armour UA PENNANT 2.0 NOVELTY PANTS sú vyrobené z odolného hladkého úpletu, ktorý je vo vnútri česaný pre maximálne teplo a pohodlie. Využitý materiál skvelo odvádza pot a veľmi rýchlo schne. Tepláky majú sieťované panely za kolenami pre väčšiu priedušnosť tam, kde to je potrebné.',
            'price' => '37',
            'category_id' => $teplaky->id,
            'gender_id' => $dieta->id,
            'brand_id' => $underArmour->id
        ]);
        Product::factory()->create([
            'name' => 'LIGA BASELAYER LONG TIGHT',
            'description' => 'Dámske legíny Puma LIGA BASELAYER LONG TIGHT sú navrhnuté tak, aby fungovali s prirodzenými systémami vášho tela a pomohli vám zlepšiť a maximalizovať výkon. Obsah elastanu poskytuje dlhodobú elasticitu pre väčšiu slobodu pohybu.',
            'price' => '51',
            'category_id' => $teplaky->id,
            'gender_id' => $zena->id,
            'brand_id' => $puma->id
        ]);

         //Brankárske vybavenie
         $brankar = Category::where('name', 'Brankárske rukavice')->first();
         Product::factory()->create([
             'name' => 'GK GLOVES 03 YOUTH',
             'description' => 'Detské brankárske rukavice Select GK GLOVES 03 YOUTH majú výbornú priľnavosť v každom počasí. Na stranách prstov je integrovaná sieťovina pre ideálnu cirkuláciu vzduchu. Fixáxia na ruky je zaistená pomocou latexového pásika. Vhodné na trénovanie, ale aj zápasy.',
             'price' => '27',
             'category_id' => $brankar->id,
             'gender_id' => $dieta->id,
             'brand_id' => $select->id
         ]);
         Product::factory()->create([
             'name' => 'ULTRA GRIP 1 HYBRID PRO',
             'description' => 'Pánske brankárske rukavice Puma ULTRA GRIP 1 HYBRID PRO sú vhodné na zápasy, ale aj na tréning. Určite oceníte kvalitnú dlaň z peny, ktorá spoľahlivo zalepí každý balón. Rukavice majú tiež skvelý dizajn a stiahnutie na zapästí je ralizované pomocou suchého zipsu.',
             'price' => '108',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $puma->id
         ]);
         Product::factory()->create([
             'name' => 'TIRO LEAGUE GOALKEEPER',
             'description' => 'Pánske brankárske rukavice adidas TIRO LEAGUE GOALKEEPER, na ktoré sa môžete v bráne spoľahnúť. Na dlani majú 3,5 cm hrubé polstrovanie a priľnavú vrstvu z latexu. Môžete sa teda odvážne postaviť každému útoku na bránu a vychytať každú strelu. Negatívny strih prstovej časti ti zaistí dobrý cit v prstoch pri tréningu aj pri zápase.',
             'price' => '97',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $adidas->id
         ]);
         Product::factory()->create([
             'name' => 'ULTRA GRIP 1 RC',
             'description' => 'Moderné pánske futbalové rukavice Puma ULTRA GRIP 1 RC sú určené pre každého brankára. Priľnavosť, priedušnosť, strih, nízka hmotnosť a pohodlie sú vylepšené najnovším vývojom materiálu, ktorý je aplikovaný na kľúčové oblasti rukavice, čo pomáha vytiahnuť váš výkon a rýchlosť na vyššiu úroveň. ',
             'price' => '57',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $puma->id
         ]);
         Product::factory()->create([
             'name' => 'FUTURE GRIP 5.1 HYBRID',
             'description' => 'Pánske profesionálne brankárske rukavice Puma FUTURE GRIP 5.1 HYBRID sadnú úplne každému! Zaručujú perfektnú podporu, ochranu a pohodlie za každého počasia a oslovia aj svojím nadčasovým vzhľadom.',
             'price' => '115',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $puma->id
         ]);
         Product::factory()->create([
             'name' => 'PREDATOR COMPETITION',
             'description' => 'V týchto pánskych brankárskych rukaviciach adidas PREDATOR COMPETITION hravo zvládnete presné vyrážky a bezchybnú manipuláciu s loptou. Silikónové prvky High Definition Grip na vrchnej časti rukavice mechano vám zaručí presnosť a flexibilitu zároveň. Dlaň URG 2.0 má na palci pásku, ktorá sa postará o spoľahlivú priľnavosť a abrazívnu zónu, ktorá chráni pred opotrebovaním v náročných situáciách.',
             'price' => '98',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $adidas->id
         ]);
         Product::factory()->create([
             'name' => 'PREDATOR LEAGUE',
             'description' => 'V týchto pánskych brankárskych rukaviciach adidas PREDATOR LEAGUE hravo zvládnete správne zacieliť vyrážky a bezchybne pracovať s loptou. Silikónové prvky High Definition Grip na úpletovej vrchnej časti rukavice zaručí potrebnú flexibilitu a presnosť brankárskych zákrokov. Dlaň URG 3.0 má rozšírenú priľnavú zónu na palci pre lepšie uchopenie oderuvzdornú zónu, ktorá je vysoko odolná proti opotrebeniu.',
             'price' => '52',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $adidas->id
         ]);
         Product::factory()->create([
             'name' => 'PHANTOM SHADOW',
             'description' => 'Rukavice GOALKEEPER PHANTOM SHADOW s priedušným polstrovaním a priľnavou penou sú pripravené chytiť každú strelu.',
             'price' => '72',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $nike->id
         ]);
         Product::factory()->create([
             'name' => 'GRIP3',
             'description' => 'Používajte pánske brankárske rukavice Nike GRIP3 navrhnuté s ohľadom na špičkový výkon. Technológia Grip3 vám obopne penu okolo prstov, takže vám rukavice dobre držia na ruke, keď potrebujete chytiť rozhodujúci balón. Nastaviteľný remienok na zápästí je posunutý nižšie, aby sa ruka mohla voľne hýbať',
             'price' => '63',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $nike->id
         ]);
         Product::factory()->create([
             'name' => 'VAPOR GRIP3 FA20',
             'description' => 'Pánske brankárske rukavice Nike VAPOR GRIP3 FA20 sa dajú nosiť v suchu aj v daždi. Nastaviteľný pásik a penové tlmenie dobre drží a pásik na zápästí je posunutý nižšie, aby sa ruka mohla prirodzene hýbať.',
             'price' => '90',
             'category_id' => $brankar->id,
             'gender_id' => $muz->id,
             'brand_id' => $nike->id
         ]);
         Product::factory()->create([
             'name' => 'CYPHER GLOVE - JNR',
             'description' => 'Detské brankárske rukavice Umbro CYPHER GLOVE - JNR, ktoré sa hodia tréning a rekreačnú hru. Rukavice pohodlne stiahnete pásikom na zápästí.',
             'price' => '20',
             'category_id' => $brankar->id,
             'gender_id' => $dieta->id,
             'brand_id' => $umbro->id
         ]);


        // $lisovky = Category::where('name', 'Lisovky')->first();
        // Product::factory()->count(10)->create(['name' => 'lisovky', 'category_id' => $lisovky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $lisokoliky = Category::where('name', 'Lisokoliky')->first();
        // Product::factory()->count(10)->create(['name' => 'lisokoliky', 'category_id' => $lisokoliky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $turfy = Category::where('name', 'Turfy')->first();
        // Product::factory()->count(10)->create(['name' => 'turfy', 'category_id' => $turfy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $halovky = Category::where('name', 'Halovky')->first();
        // Product::factory()->count(10)->create(['name' => 'halovky', 'category_id' => $halovky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        // $lopty = Category::where('name', 'Lopty')->first();
        // Product::factory()->count(10)->create(['name' => 'lopty', 'category_id' => $lopty->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $chranice = Category::where('name', 'Chranice')->first();
        // Product::factory()->count(10)->create(['name' => 'chranice', 'category_id' => $chranice->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $brankarskeVybavenie = Category::where('name', 'Brankarske vybavenie')->first();
        // Product::factory()->count(10)->create(['name' => 'brankarske vybavenie', 'category_id' => $brankarskeVybavenie->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        // $doplnky = Category::where('name', 'Doplnky')->first();
        // Product::factory()->count(10)->create(['name' => 'doplnky', 'category_id' => $doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $rozhodca = Category::where('name', 'Rozhodca')->first();
        // Product::factory()->count(10)->create(['name' => 'rozhodca', 'category_id' => $rozhodca->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $treningove_doplnky = Category::where('name', 'Treningove doplnky')->first();
        // Product::factory()->count(10)->create(['name' => 'treningove_doplnky', 'category_id' => $treningove_doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $zdravotne_doplnky = Category::where('name', 'Zdravotne doplnky')->first();
        // Product::factory()->count(10)->create(['name' => 'zdravotne doplnky', 'category_id' => $zdravotne_doplnky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);


        // $oblecenie = Category::where('name', 'Oblecenie')->first();
        // Product::factory()->count(10)->create(['name' => 'oblecenie', 'category_id' => $oblecenie->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $oficialne_dresy = Category::where('name', 'Oficialne dresy')->first();
        // Product::factory()->count(10)->create(['name' => 'oficialne dresy', 'category_id' => $oficialne_dresy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);
        // $tricka = Category::where('name', 'Tricka')->first();
        // Product::factory()->count(10)->create(['name' => 'tricka', 'category_id' => $tricka->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $trenky = Category::where('name', 'Trenky')->first();
        // Product::factory()->count(10)->create(['name' => 'trenky', 'category_id' => $trenky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $ponozky = Category::where('name', 'Ponozky')->first();
        // Product::factory()->count(10)->create(['name' => 'ponozky', 'category_id' => $ponozky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $bundy = Category::where('name', 'Bundy')->first();
        // Product::factory()->count(10)->create(['name' => 'bundy', 'category_id' => $bundy->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $mikiny = Category::where('name', 'Mikiny')->first();
        // Product::factory()->count(10)->create(['name' => 'mikiny', 'category_id' => $mikiny->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $teplaky = Category::where('name', 'Teplaky')->first();
        // Product::factory()->count(10)->create(['name' => 'teplaky', 'category_id' => $teplaky->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);

        // $termo = Category::where('name', 'Termo')->first();
        // Product::factory()->count(10)->create(['name' => 'termo', 'category_id' => $termo->id, 'gender_id' => $genderId->random(), 'brand_id' => $brandId->random()]);
    }
}
