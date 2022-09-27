<?php

//Masyvu funkcijos

//unset() - funkcija, kuri sunaikina masyvo elementa

//suskaiciuojamas

//unset cookies neveikia!!!!!!!!!

//setcookies atgalini galiojimo laika

//su sesija unset naudot galima
function unsetPavyzdys(){
    $masyvas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    //asociatyvus
    $masyvas1 = array(
        'vienas' => 1, 
        'du' => 2, 
        'trys' => 3, 
        'keturi' => 4, 
        'penki' => 5, 
        'sesi' => 6, 
        'septyni' => 7, 
        'astuoni' => 8, 
        'devyni' => 9, 
        'desimt' => 10);

    //dvimatis masyvas(lentelė)

    $klientai = array(
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35),

    );


    var_dump($masyvas);
    var_dump($masyvas1);
    var_dump($klientai);

    //is kiekvieno masyvo panaikinti 1 pasirinkta elementa

    unset($masyvas[2]);
    unset($masyvas1['trys']);

    unset($klientai[0]); //istrinsiu pati pirma klienta
    //istrinti kazkokio konkretaus kliento elementa, pavarde

    unset($klientai[1]['pavarde']);

    var_dump($masyvas);
    var_dump($masyvas1);
    var_dump($klientai);


}


function arrayKeysValuesPavyzdys() {

    //array_keys() - funkcija, kuri grazina masyvo indeksus(masyvo elemento numerius)
    //array_values() - funkcija, kuri grazina masyvo reiksmes

    //Suskaiciuojamas masyvas
    $masyvas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $raktai = array_keys($masyvas);
    $reiksmes = array_values($masyvas);

    // var_dump($masyvas);
    // var_dump($raktai);
    // var_dump($reiksmes);

    $masyvas1 = array(
        'vienas' => 1, 
        'du' => 2, 
        'trys' => 3, 
        'keturi' => 4, 
        'penki' => 5, 
        'sesi' => 6, 
        'septyni' => 7, 
        'astuoni' => 8, 
        'devyni' => 9, 
        'desimt' => 10);

    $raktai1 = array_keys($masyvas1);
    $reiksmes1 = array_values($masyvas1);

    //  var_dump($masyvas1);
        // var_dump($raktai1);
        // var_dump($reiksmes1);

        $klientai = array(
            array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25),
            array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30),
            array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35),

        );
        //array_keys funkcija paleidus ant masyvo kuris yra pagrindiame masyve, mes gauname lenteles stulpeliu pavadinimus
        $raktai2 = array_keys($klientai[0]);
        $reiksmes2 = array_values($klientai);

        var_dump($klientai);
        var_dump($raktai2);
        var_dump($reiksmes2);
}


function arrayReversePavyzdys() {
//array_reverse - masyvo pervertimas
    $masyvas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    var_dump($masyvas);
    var_dump(array_reverse($masyvas));


    $masyvas1 = array(
        'vienas' => 1, 
        'du' => 2, 
        'trys' => 3, 
        'keturi' => 4, 
        'penki' => 5, 
        'sesi' => 6, 
        'septyni' => 7, 
        'astuoni' => 8, 
        'devyni' => 9, 
        'desimt' => 10);

        var_dump($masyvas1);
        var_dump(array_reverse($masyvas1));    

    $klientai = array(
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35),

    );  

    var_dump($klientai);
    var_dump(array_reverse($klientai));

    //sukeisti du kintamuosius vietomis, be papildomo kintamojo pasinaudojant masyvu

    $mas = [1,10];

    $mas = array_reverse($mas); //[10,1]

}

//array_filter - masyvo filtravimo funkcija
function arrayFilterPavyzdys() {
    $masyvas = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    //filtravimas - masyvo elementu parinkimas pagal nurodyta salyga

    //palikti masyve elementus, kuriu reiksme yra daugiau nei 3

    //filtravimo funkcija

    //$vars, $value ....
    //tiesa arba mela
    function filtravimoFunkcija($elementas) {
        if($elementas > 3) {
            return true;
        } else {
            return false;
        }
    }

    var_dump($masyvas);
    var_dump(array_filter($masyvas, "filtravimoFunkcija")); // 2 parametras - filtravimo funkcijos pavadinimas


    $masyvas1 = array(
        'vienas' => 1, 
        'du' => 2, 
        'trys' => 3, 
        'keturi' => 4, 
        'penki' => 5, 
        'sesi' => 6, 
        'septyni' => 7, 
        'astuoni' => 8, 
        'devyni' => 9, 
        'desimt' => 10
    );

    //grazinti tik masyvo elementus, kuriu reiksme yra lyginis skaicius

    var_dump($masyvas1);


    function lyginisSkaicius($elementas) {

        // $elementas - masyvo reiksme
        // 1,2,3,4,5,6,7,...
        if($elementas % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    var_dump(array_filter($masyvas1,"lyginisSkaicius"));


    //savyje slepia cikla, kuris per masyva eina ir kiekvienam elementui iskviecia filtravimo funkcija

    //dvimatis masyvas

    $klientai = array(
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25, 'lytis' => 'vyras'),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30, 'lytis' => 'vyras'),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35, 'lytis' => 'vyras'),
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 61, 'lytis' => 'vyras'),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 62,  'lytis' => 'vyras'),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 91,     'lytis' => 'vyras'),
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 18,     'lytis' => 'nerodau'),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 31, 'lytis' => 'nerodau'),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 22, 'lytis' => 'vyras'),
    );

    //grazinti tik klientus, kuriu amzius yra daugiau nei 30

    var_dump($klientai);

    function amziausFiltravimas($elementas) {

        // $elementas - masyvas !!!!!!!

        //$elementas = array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25); - false
        // $elementas['amzius'] = 25
        if($elementas['amzius'] > 30) {
            return true;
        } else {
            return false;
        }
    }

    var_dump(array_filter($klientai,"amziausFiltravimas"));

    //atfiltruoti visus kuriu lytis yra vyras

    function filtravimasPagalLyti($elementas) {
        if($elementas["lytis"] == "vyras") {
            return true;
        } else {
            return false;
        }
    }
    var_dump(array_filter($klientai,"filtravimasPagalLyti"));
    //atfiltruoti visus kurie nenori rodyti savo lyties
    function filtravimasPagalLytiesNerodyma($elementas) {
        if($elementas["lytis"] == "nerodau") {
            return true;
        } else {
            return false;
        }
    }

    var_dump(array_filter($klientai,"filtravimasPagalLytiesNerodyma"));
}

//rikiavimas - elementu isrikiavimas pagal nurodyta salyga

// nuo didziausio iki maziausio (DESC)
//nuo maziausio iki didziausio (ASC)

//A  - Z nuo maziausio iki didziausio
//Z - A nuo didziausio iki maziausio DESC
function sortRsortPavyzds() {
    //sort() - numeruojamo masyvo rikiavimas didejimo tvarka. void funkcija

    $masyvas = array(5,10,110,1,2,3,4,5,6,7,8,9,10,4,8,1,5,4,3,2,111111111,12);
    var_dump($masyvas);
    sort($masyvas);
    var_dump($masyvas); 

    //rsort - numeruojamo masyvo rikiavimas mazejimo tvarka. void funkcija

    rsort($masyvas);
    var_dump($masyvas);
}

//dvimatis masyvas
function usortPavyzdys() {
    $klientai = array(
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35),
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 251),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 301),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 351), 
        array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 2500),
        array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 3000),
        array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 3500),
    );

    //isirikiuoti klientus pagal amziu didejimo tvarka
    //mazejimo tvarka
    //sort ir rsort funkcijos netinka


    // usort - isrikiuoja elementus pagal musu nurodyta rikiavimo funkcija

    function rikiavimoFunkcija($dabartinis, $busimas) {
        //rikiavimo algoritmu 
        // $dabartinis - dabartinis elementas
        // $busimas - busimas elementas

        // $dabartinis['amzius'] = 25;
        // $busimasis['amzius'] = 30;
        
        //$dabartinis == $busimas = 0; //
        // $dabartinis < $busimas = -1; //
        // $dabartinis > $busimas = 1; //

        if($dabartinis["amzius"] == $busimas["amzius"]) {
            return 0;
        } else if($dabartinis["amzius"] < $busimas["amzius"]) {
            return 1;
        } else {
            return -1;
        }

        //0 - dabartini elemento neperstumti
        //1 -dabartini elementa perstumti i desine
        // -1 dabartini elementa perstumti i kaire


    }

    usort($klientai, "rikiavimoFunkcija");
    var_dump($klientai);
}


//array_multisort


// 
// $klientai = array(
//     array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25),
//     array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30),
//     array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35),
//     array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 251),
//     array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 301),
//     array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 351), 
//     array('vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 2500),
//     array('vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 3000),
//     array('vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 3500),
// );

// //SORT_DESC SORT_ASC - ja galima rikiuoti ir teksta A-z Z-A
// array_multisort($klientai["amzius"], SORT_DESC);
// var_dump($klientai);

// ksort() - rikiuoja pagal rakta didejimo tvarka
// krsort() - rikiuoja pagal rakta mazejimo tvarka
