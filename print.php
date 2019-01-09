<?php

require __DIR__ . '/escpos-php/autoload.php';

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\EscposImage;

$connector = new FilePrintConnector("php://stdout");
$profile = CapabilityProfile::load("TH-230");
$printer = new Printer($connector, $profile);

setlocale(LC_ALL, "cs_CZ.utf8");

if($argc > 1) {
	$receipt = generate($argv[1]);
	$receipt->doprint($printer);
} else {
	$receipt = generate(1);
        $receipt->doprint($printer);
}

function generate($id = 1) {
    $receipt = new Receipt(null);

    switch ($id) {
        case 1:
            $cat1 = new Category("Samoobslužný úsek uzeniny/ryby/lahůdky");
            $cat1->add(new Item("VitaStarTatar.om.500", 3, null, 32.90));
            $receipt->add($cat1);

            $cat1 = new Category("Mléčné výrobky/sýry/vejce");
            $cat1->add(new Item("Eidam pl.30% 100g", 3, null, 16.90));
            $cat1->add(new Item("M10 vejce", 2, null, 13.90));
            $receipt->add($cat1);

            $cat1 = new Category("Potraviny");
            $cat1->add(new Item("K.Hořč.plnotuč.880g", 3, null, 26.90));
            $cat1->add(new Item("K.Hořč.kremžská.880g", 2, null, 34.90));
            $cat1->add(new Item("Jihlavanka", 4, null, 99.90));
            $cat1->add(new Item("Ham.maj.190g", 3, null, 17.90));
            $receipt->add($cat1);

            $cat1 = new Category("Drogérie/dětské potř./zvíř. potř./tabák");
            $cat1->add(new Item("Friskies 3kg", 2, null, 215.00));
            $cat1->add(new Item("K.WC závěs", 3, null, 34.90, 'C'));
            $cat1->add(new Item("Sanytol skvrny 450", 1, null, 99.90, 'C'));
            $cat1->add(new Item("Bingo drátěnka3ks", 2, null, 17.90, 'C'));
            $cat1->add(new Item("KLC.RukaviceL/2páry", 1, null, 24.90, 'C'));
            $cat1->add(new Item("SilanSupreme", 1, null, 79.90, 'C'));
            $cat1->add(new Item("K.utěrka houb.5ks", 1, null, 29.90, 'C'));
            $cat1->add(new Item("K.kapsička", 5, null, 6.90, 'C'));
            $receipt->add($cat1);

            $cat1 = new Category("Sladkosti");
            $cat1->add(new Item("Horalky ml.35 g", 8, null, 5.90));
            $cat1->add(new Item("Siesta mléčná 35g", 8, null, 7.90));
            $cat1->add(new Item("Horalky ar. 35 g", 6, null, 5.90));
            $cat1->add(new Item("Miňonky sm. 50 g", 12, null, 7.90));
            $receipt->add($cat1);

            $cat1 = new Category("Nealkoholické nápoje");
            $cat1->add(new Item("Hello h.sirup0,7lP", 1, null, 27.90));
            $cat1->add(new Item("Hello h.sirup0,7lP", 1, null, 27.90));
            $receipt->add($cat1);

            $cat1 = new Category("Volný čas/vzdělávání/mobilita");
            $cat1->add(new Item("Taška s uchy", 5, null, 3.90, 'C'));
            $cat1->add(new Item("Sešit 464, linka", 8, null, 7.40, 'C'));
            $cat1->add(new Item("Zvýrazňovač 4 ks", 4, null, 34.90, 'C'));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Anglická slanina", 0.365, 'KG', 169));
            $cat1->add(new Item("Šunka od kosti", 0.447, 'KG', 169));
            $receipt->add($cat1);

            $cat1 = new Category("Pečivo");
            $cat1->add(new Item("NB Rohlík 43g", 15, null, 1.20));
            $cat1->add(new Item("7D Doub.cr.viš./van.", 4, null, 7.90));
            $cat1->add(new Item("7 DaysBors.jabl/sko.", 4, null, 4.90));
            $cat1->add(new Item("K.Toust.chl.vic.500g", 4, null, 24.90));
            $receipt->add($cat1);
            break;
        case 2:
            $cat1 = new Category("Ovoce/zelenina/rosliny");
            $cat1->add(new Item("Banany", 1.124, 'KG', 19.90));
            $receipt->add($cat1);

            $cat1 = new Category("Mléčné výrobky/sýry/vejce");
            $cat1->add(new Item("Termix.tv.dez.90g", 2, null, 4.90));
            $cat1->add(new Item("M10 vejce", 1, null, 13.90));
            $receipt->add($cat1);

            $cat1 = new Category("Potraviny");
            $cat1->add(new Item("K.müsli tyč. v jog.", 2, null, 3.30));
            $cat1->add(new Item("K.müsli tyč. v jog.", 2, null, 3.30));
            $cat1->add(new Item("Zel.Lečo 670g", 1, null, 19.90));
            $cat1->add(new Item("Lipton 100 g", 1, null, 69.90));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Lahůdkové řezy.", 0.466, 'KG', 159));
            $cat1->add(new Item("Šunka školáček 80%", 0.812, 'KG', 149));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Po.česn.sýr.", 0.796, 'KG', 109));
            $cat1->add(new Item("Šunka školáček 80%", 0.812, 'KG', 149));
            $receipt->add($cat1);

            $cat1 = new Category("Móda, doplňky");
            $cat1->add(new Item("Dá kalhotky", 1, null, 69.90));
            $cat1->add(new Item("Dá podprsenka", 1, null, 89.90));
            $receipt->add($cat1);

            $cat1 = new Category("Samoobslužný úsek maso");
            $cat1->add(new Item("V.maso na čínu", 0.513, 'KG', 99.90));
            $cat1->add(new Item("V.maso na čínu", 0.485, 'KG', 99.90));
            $receipt->add($cat1);

            $cat1 = new Category("Drogérie/dětské potř./zvíř. potř./tabák");
            $cat1->add(new Item("Kotex tampony", 5, null, 89.90, 'C'));
            $cat1->add(new Item("Kmení pro psa", 13, null, 25.50));
            $cat1->add(new Item("Konzerva pro kočku", 21, null, 10.90));
            $receipt->add($cat1);

            $cat1 = new Category("Pečivo");
            $cat1->add(new Item("7 DaysBors.jabl./sko.", 4, null, 4.90));
            $cat1->add(new Item("7 DaysBors.kakao.", 4, null, 4.90));
            $cat1->add(new Item("Kaiserka natur", 10, null, 2.50));
            $receipt->add($cat1);

            $cat1 = new Category("Sladkosti");
            $cat1->add(new Item("Skittles 38 g", 3, null, 8.90));
            $cat1->add(new Item("Katy čokol. 100 g", 1, null, 9.90));
            $cat1->add(new Item("Katy b.čok.100 g", 1, null, 9.90));
            $receipt->add($cat1);

            $cat1 = new Category("Nealkoholické nápoje");
            $cat1->add(new Item("Mirinda meloun2lP", 6, null, 17.90));
            $cat1->add(new Item("Mirinda Orange 2l", 8, null, 17.90));
            $receipt->add($cat1);
            break;
        case 3:
            $cat1 = new Category("Samoobslužný úsek uzeniny/ryby/lahůdky");
            $cat1->add(new Item("Pašt.brusinky125g", 3, null, 24.90));
            $receipt->add($cat1);

            $cat1 = new Category("Ovoce/zelenina/rosliny");
            $cat1->add(new Item("Dýně mexická", 1, null, 44.90));
            $cat1->add(new Item("Banany", 1.862, 'KG', 19.90));
            $cat1->add(new Item("Citron kulin.použ500", 1, null, 19.90));
            $receipt->add($cat1);

            $cat1 = new Category("Mléčné výrobky/sýry/vejce");
            $cat1->add(new Item("K.smet.do.kávy10x10g", 4, null, 7.90));
            $cat1->add(new Item("K.smetana 31%", 1, null, 19.90));
            $receipt->add($cat1);

            $cat1 = new Category("Potraviny");
            $cat1->add(new Item("Jihlavanka 1000 g", 4, null, 99.90));
            $cat1->add(new Item("K.müsli tyč. v jog.", 2, null, 3.30));
            $cat1->add(new Item("Lipton 100 g", 1, null, 69.90));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Herkules salám", 0.551, 'KG', 169));
            $cat1->add(new Item("Špekáčky", 1.038, 'KG', 79));
            $cat1->add(new Item("Šunka od kosti", 0.363, 'KG', 169));
            $cat1->add(new Item("Po.česn.sýr.", 0.611, 'KG', 109));
            $cat1->add(new Item("Š. Zvonařka cca 2 kg", 0.294, 'KG', 189));
            $cat1->add(new Item("baget.vaj.pom.", 0.323, 'KG', 149));
            $cat1->add(new Item("Švejkův salát", 0.681, 'KG', 79));
            $receipt->add($cat1);

            $cat1 = new Category("Drogérie/dětské potř./zvíř. potř./tabák");
            $cat1->add(new Item("Krmení pro psa", 2, null, 25.50, 'C'));
            $cat1->add(new Item("Cif krém 500ml", 2, null, 34.90, 'C'));
            $receipt->add($cat1);

            $cat1 = new Category("Móda, doplňky");
            $cat1->add(new Item("Punčochové kalhoty", 2, null, 44.90, 'C'));
            $receipt->add($cat1);

            $cat1 = new Category("Pečivo");
            $cat1->add(new Item("Kaiserka natur", 10, null, 2.50));
            $cat1->add(new Item("Chl.konz.1200g", 1, null, 21.90));
            $receipt->add($cat1);

            $cat1 = new Category("Alkoholické nápoje");
            $cat1->add(new Item("StrongbDF4,5%0,44pl", 6, null, 16.90, 'C'));

            $cat1 = new Category("Sladkosti");
            $cat1->add(new Item("Mila řezy   50 g", 5, null, 11.90));
            $cat1->add(new Item("Bezlepková sušenka", 4, null, 12.90));
            $cat1->add(new Item("M.Oplatka 36g", 4, null, 3.90));
            $cat1->add(new Item("Miňonky oř. 50 g", 8, null, 7.90));
            $cat1->add(new Item("K.euka.bonb.250g", 1, null, 19.90));
            $cat1->add(new Item("Milky Way DUO 43 g", 3, null, 13.90));
            $cat1->add(new Item("Lay's MAX 140g", 4, null, 27.90));
            $receipt->add($cat1);

            $cat1 = new Category("Nealkoholické nápoje");
            $cat1->add(new Item("Ondr.lesní pl.1,5", 6, null, 9.90));
            $cat1->add(new Item("Capri-Sun Multi200ml", 10, null, 9.90));
            $cat1->add(new Item("K.sirup.pom.0,7l", 2, null, 19.90));
            $cat1->add(new Item("K.sirup.l.ovoce.0,7l", 2, null, 19.90));
            $cat1->add(new Item("Dobrá v. bez. 1,5l", 2, null, 8.90));
            $cat1->add(new Item("DV malina 1,5l", 10, null, 8.90));
            $cat1->add(new Item("DV mandarinka 1,5l", 10, null, 8.90));
            $receipt->add($cat1);
            break;
        case 4:
            $cat1 = new Category("Ovoce/zelenina/rosliny");
            $cat1->add(new Item("Citrony", 0.694, 'KG', 49.90));
            $cat1->add(new Item("Karotka volně", 0.468, 'KG', 18.90));
            $cat1->add(new Item("Banany", 0.838, 'KG', 19.90));
            $receipt->add($cat1);

            $cat1 = new Category("Mléčné výrobky/sýry/vejce");
            $cat1->add(new Item("K.Gouda.bloček.400g", 1, null, 39.90));
            $cat1->add(new Item("Jogurt na pití", 2, null, 17.90));
            $cat1->add(new Item("K.Acidof.ml.0,5l", 1, null, 14.90));
            $cat1->add(new Item("Sýr a Křup Pizza", 1, null, 34.90));
            $cat1->add(new Item("Eidam 30% 200g", 1, null, 33.90));
            $cat1->add(new Item("K.camembert.120g", 12, null, 16.90));
            $cat1->add(new Item("Sýr a Křup 140g", 1, null, 34.90));
            $cat1->add(new Item("Rama.a.moř.sol.400g", 1, null, 26.90));
            $cat1->add(new Item("máslo250g", 2, null, 54.90));
            $cat1->add(new Item("KLC.vep.sád.250g", 1, null, 12.90));
            $cat1->add(new Item("K.tvaroh.polo.250g", 1, null, 16.90));
            $cat1->add(new Item("Kefírové mléko", 1, null, 19.90));
            $cat1->add(new Item("Klasik bílý 150g", 2, null, 10.90));
            $cat1->add(new Item("Žervé-šunka 80g", 2, null, 14.90));
            $cat1->add(new Item("Florian limit.III", 3, null, 12.90));
            $receipt->add($cat1);

            $cat1 = new Category("Mražené výrobky");
            $cat1->add(new Item("Magnum 88ml", 1, null, 19.90));
            $cat1->add(new Item("Míša Multi 6x45ml", 1, null, 47.90));

            $cat1 = new Category("Samoobslužný úsek uzeniny/ryby/lahůdky");
            $cat1->add(new Item("Pašt.brusinky125g", 3, null, 24.90));
            $receipt->add($cat1);

            $cat1 = new Category("Potraviny");
            $cat1->add(new Item("Kečup jemný 800g", 1, null, 64.90));
            $cat1->add(new Item("Hellmann's kečup", 1, null, 64.30));
            $cat1->add(new Item("Intermezzo 1 kg", 3, null, 199));
            $cat1->add(new Item("KLC.Strouhanka.500g", 1, null, 14.90));
            $cat1->add(new Item("KLC řepk.ol.1l", 1, null, 26.90));
            $cat1->add(new Item("Sup.kaš.chia.5x55g", 1, null, 34.90));
            $cat1->add(new Item("Hol. kakao 100g", 1, null, 21.90));
            $cat1->add(new Item("Panzani TORTI 500g", 1, null, 19.90));
            $cat1->add(new Item("Panzani špag.500g", 3, null, 19.90));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Švejkův salát", 0.477, 'KG', 79));
            $receipt->add($cat1);

            $cat1 = new Category("Pult");
            $cat1->add(new Item("Beskydský tramp", 0.172, 'KG', 129));
            $cat1->add(new Item("Spišské párky", 0.294, 'KG', 129));
            $cat1->add(new Item("Medová šunka", 0.152, 'KG', 169));
            $cat1->add(new Item("Herkules salám", 0.164, 'KG', 169));
            $receipt->add($cat1);

            $cat1 = new Category("Drogérie/dětské potř./zvíř. potř./tabák");
            $cat1->add(new Item("Tento TP 16rolí", 1, null, 89.90, 'C'));
            $cat1->add(new Item("Syoss lak 300ml", 1, null, 69.90, 'C'));
            $cat1->add(new Item("Nivea Deo-stick 40ml", 1, null, 54.90, 'C'));
            $cat1->add(new Item("Vanish 1l", 1, null, 149, 'C'));
            $cat1->add(new Item("Borotalco SG 250ml", 1, null, 79.90, 'C'));
            $cat1->add(new Item("KLC.pap.kap.150Ks", 3, null, 17.90, 'C'));
            $cat1->add(new Item("KLC.Aloe.3bal.90Ks", 2, null, 19.90, 'C'));
            $cat1->add(new Item("Odol Herbal 75ml", 1, null, 29.90, 'C'));
            $cat1->add(new Item("Stoma paradentol", 1, null, 29.90, 'C'));
            $receipt->add($cat1);

            $cat1 = new Category("Pečivo");
            $cat1->add(new Item("K.Chleb.slunec.", 1, null, 21.90));
            $cat1->add(new Item("Toust.chl.tm.500g", 1, null, 18.90));
            $cat1->add(new Item("NB Rohlík 43g", 10, null, 1.20));
            $cat1->add(new Item("Chl.konz.1200g", 1, null, 21.90));
            $cat1->add(new Item("7 Days Bors.les.plod", 2, null, 4.90));
            $cat1->add(new Item("7D Doub.cr.viš/van.", 2, null, 7.90));
            $cat1->add(new Item("7D Doub.cr.kak./kok.", 2, null, 7.90));
            $cat1->add(new Item("7 Dazs Bors.kakao", 2, null, 4.90));
            $receipt->add($cat1);

            $cat1 = new Category("Sladkosti");
            $cat1->add(new Item("Mysli sušenky 60g", 2, null, 12.90));
            $cat1->add(new Item("Milka Oreo 300g", 1, null, 59.90));
            $cat1->add(new Item("Milka 300 g", 1, null, 59.90));
            $cat1->add(new Item("Milka Sch&keks300g", 1, null, 59.90));
            $cat1->add(new Item("Milka Triolade 280g", 1, null, 59.90));
            $cat1->add(new Item("Mysli.sušenky.60g", 2, null, 12.90));
            $cat1->add(new Item("Miňonky kak. 50 g", 2, null, 7.90));
            $receipt->add($cat1);
            break;
    }

    return $receipt;
}

class Receipt {

    private $id;
    private $date;
    private $time;
    private $cashdesk;
    private $bkp;
    private $fik;
    private $categories;

    public function __construct($id = '53674') {
        if ($id == null) {
            $this->id = mt_rand(41000, 55000);
        } else {
            $this->id = $id;
        }
        $this->date = date("d.m.y", strtotime('-' . mt_rand(20, 30) . ' days'));
        $this->time = sprintf("%02d", mt_rand(9, 19)) . ":" . sprintf("%02d", mt_rand(0, 59)) . ":" . sprintf("%02d", mt_rand(0, 59));
        $this->cashdesk = strval(mt_rand(5, 14));
        $this->bkp = $this->getRandomHex(4) . "-" . $this->getRandomHex(4) . "-" . $this->getRandomHex(4) .
                "-" . $this->getRandomHex(4) . "-" . $this->getRandomHex(4);
        $this->fik = $this->getRandomHex(4) . "-" . $this->getRandomHex(2) . "-b" . chr(mt_rand(48, 57)) .
                $this->getRandomHex(1) . "-" . $this->getRandomHex(2) . "-" . $this->getRandomHex(6) . "-0" .
                chr(mt_rand(49, 57));
        $this->categories = [];
    }

    public function add(Category $item) {
        array_push($this->categories, $item);
    }

    public function total($tax = 'B') {
        $total = 0;
        foreach ($this->categories as $item) {
            $total += $item->total($tax);
        }
        return $total;
    }

    public function doprint(Printer $prn) {
        $prn->initialize();
        $prn->selectCharacterTable(2);
        //$prn->setPrintLeftMargin(24);
        $prn->setPrintLeftMargin(26);
        //$prn->setPrintWidth(522);
        $prn->setPrintWidth(520);
        $prn->setJustification(Printer::JUSTIFY_LEFT);

        $this->header($prn);

        foreach ($this->categories as $item) {
            $item->doprint($prn);
        }

        $this->footer($prn);
        $prn->feed(2);
	$prn->release();
        $prn->cut();
        $prn->close();
    }

    private function header(Printer $prn) {
        $prn->setJustification(Printer::JUSTIFY_CENTER);

	//$img = EscposImage::load("kaufland_logo.bmp", true);
	//$prn->bitImage($img, Printer::IMG_DEFAULT);

        $prn->setEmphasis(true);
        $prn->text("Kaufland Česká republika v.o.s\n");
        $prn->text("Bělohorská 2428/203, Praha 6\n");
        $prn->text("IČ 25110161 / DIČ 25110161\n");
        $prn->text("\nwww.kaufland.cz\n");
        $prn->text("Provoz.: 1431 České Budějovice\n");
        $prn->text("Adresa: Č. Budějovice, Na Sádkách 1444\n");
        $prn->text("******\n");
        $prn->text("Otevírací doba\n");
        $prn->text("Po-Ne 7:00-22:00\n");
        $prn->setJustification(Printer::JUSTIFY_RIGHT);
        $prn->text("Cena CZK\n");
        $prn->setJustification(Printer::JUSTIFY_LEFT);
        $prn->setEmphasis(false);
    }

    private function footer(Printer $prn) {
        $total = number_format($this->total(null), 2, ",", " ");
        $rounded = number_format(round($this->total(null)), 2, ",", " ");
        $cash = number_format(ceil($this->total(null) / 100) * 100, 2, ",", " ");
        $returned = number_format((ceil($this->total(null) / 100) * 100) - round($this->total(null)), 2, ",", " ");
        $taxb = $this->total('B');
        $taxc = $this->total('C');

        $prn->setJustification(Printer::JUSTIFY_LEFT);
        $prn->text("----------------------------------------\n");
        $prn->setTextSize(2, 2);
        $prn->text(sprintf("%-11s%10s\n\n", "Součet", $total));
        $prn->setTextSize(1, 1);
        $prn->text(sprintf("%-29s%10s\n", "Zaokrouhleno", $rounded));
        $prn->text(sprintf("CZK                     CZK%12s\n", $cash));
        $prn->text("----------------------------------------\n");
        $prn->text(sprintf("%-29s%10s\n\n", "Vráceno", $returned));
        $prn->text(sprintf("%-8s%10s%10s%11s\n", "Daň %", "Brutto", "Netto", "Daň"));
        $prn->text(sprintf("%-8s%10s%10s%10s\n", "B=15,00%", money_format('%^!.2i', $taxb), money_format('%^!.2i', $taxb * 0.85), money_format('%^!.2i', $taxb * 0.15)));
        $prn->text(sprintf("%-8s%10s%10s%10s\n\n", "C=21,00%", money_format('%^!.2i', $taxc), money_format('%^!.2i', $taxc * 0.79), money_format('%^!.2i', $taxc * 0.21)));
        $prn->text(sprintf("Datum:%s Čas:   %s Účt:%s\n", $this->date, $this->time, $this->id));
        $prn->text(sprintf("Obchod:   2300 Kasa:  %2s   Obsluha:  202\n\n", $this->cashdesk));
        $prn->text("Provozovna: 1431\n");
        $prn->setEmphasis(true);
        $prn->text("BKP:\n");
        $prn->setEmphasis(false);
        $prn->text($this->bkp);
        $prn->setEmphasis(true);
        $prn->text("\nFIK:\n");
        $prn->setEmphasis(false);
        $prn->text($this->fik);
        $prn->text("\n\n");
        $prn->setJustification(Printer::JUSTIFY_CENTER);
        $prn->setEmphasis(true);
        $prn->text("Režim EET: Běžný\n");
        $prn->text("Bezplatná zákaznická linka 800 165 894\n");
        $prn->text("Objevte chuť Německa!\n");
        $prn->text("Inspiraci najdete v našem prospektu!\n");
        $prn->text("Kaufland - pro lepší týden.");
    }

    private function getRandomHex($num_bytes = 4) {
        return bin2hex(openssl_random_pseudo_bytes($num_bytes));
    }

    public function __toString() {
        return $this->name;
    }

}

class Category {

    private $name;
    private $items;

    public function __construct($name = '') {
        $this->name = $name;
        $this->items = [];
    }

    public function add(Item $item) {
        array_push($this->items, $item);
    }

    public function total($tax = 'B') {
        $price = 0;
        foreach ($this->items as $item) {
            $price += $item->total($tax);
        }
        return $price;
    }

    public function doprint(Printer $prn) {
        $prn->setEmphasis(true);
        $prn->setUnderline(true);
        $prn->text(strval($this) . "\n");
        $prn->setEmphasis(false);
        $prn->setUnderline(false);
        foreach ($this->items as $item) {
            $prn->text(strval($item) . "\n");
        }
    }

    public function __toString() {
        return $this->name;
    }

}

class Item {

    private $name;
    private $amount;
    private $unit;
    private $price;
    private $tax;

    public function __construct($name = '', $amount = 0, $unit = null, $price = 0, $tax = 'B') {
        $this->name = $name;
        $this->amount = $amount;
        if (is_float($amount) && $unit == null) {
            throw new Exception('Float value without unit');
        }
        $this->unit = $unit;
        $this->price = $price;
        $this->tax = $tax;
    }

    public function total($tax = 'B') {
        if ($tax == null || $this->tax == $tax) {
            return $this->amount * $this->price;
        } else {
            return 0;
        }
    }

    public function __toString() {
        $price = number_format($this->price, 2, ',', ' ');
        if ($this->amount == 1) {
            $line1 = sprintf("%s%s%s %s", $this->name, str_pad("", 40 - mb_strlen($this->name) - mb_strlen($price) - 2), $price, $this->tax);
        } else {
            $line1 = $this->name;
        }
        if (is_int($this->amount)) {
            $amount = sprintf("%d", $this->amount);
        } else {
            $amount = sprintf("%.3F %s", $this->amount, $this->unit);
        }
        $total = number_format($this->amount * $this->price, 2, ',', ' ');
        $center = str_pad("", 40 - 1 - strlen($amount) - 3 - strlen($price) - strlen($total) - 2, " ");
        $line2 = sprintf(" %s * %s%s%s %s", $amount, $price, $center, $total, $this->tax);
        if ($this->amount == 1) {
            return $line1;
        } else {
            return $line1 . "\n" . $line2;
        }
    }

}

?>
