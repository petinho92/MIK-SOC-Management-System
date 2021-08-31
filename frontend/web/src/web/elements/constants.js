import {readable} from 'svelte/store';

export let plen1 = [
    {id: 1, name: 'Plenáris előadások'},
    {id: 2, name: 'MI, VR, Cloud megoldások'},
    {id: 3, name: 'Szoftverfejlesztés, üzleti alkalmazások'},
    {id: 4, name: 'Korszerű tervezési technikák és környezettudatos építés'},
    {id: 5, name: 'Modern infrastruktúra-új kihívások'},
    {id: 6, name: 'Modern méréstechnika és jelfeldolgozás'},
    {id: 7, name: 'Kötés- és gyártástechnológiák'},
    {id: 8, name: 'Épületgépészeti irányítástechnika -Vinkler Károly Emlékülés'},
    {id: 9, name: 'Energiatárolás és hidrogéntechnológiák'},
    {id: 10, name: 'Digitalizált építőipari értéklánc'}
];
export let plen2 = [
    {id: 1, name: 'Alkalmazott informatika'},
    {id: 2, name: 'Építész szekció'},
    {id: 3, name: 'SUSTAINABILITY PRINCIPLES IN CIVIL ENGINEERING'},
    {id: 4, name: 'Alternatív tüzelőanyagok'},
    {id: 5, name: 'Innovatív fejlesztések a gépgyártásban'},
    {id: 6, name: 'Energiatudatos épületgépészet'},
    {id: 7, name: 'Energiatárolás és hidrogéntechnológiák'},
    {id: 8, name: 'Vizualizációs trendek: 3D, VR, AR'},
    {id: 9, name: 'Munkavédelem'}
];

export let foodTicket = [
    {id: 1, name: "Kávé, szendvics"},
    {id: 2, name: "Részt veszek a vacsorán"}
];

export let majors = [
    {id: 1, name_hu: 'Építészmérnöki (BSc)', name_en: 'Architectural Engineering BSc'},
    {id: 2, name_hu: 'Építőmérnöki (BSc)', name_en: ''},
    {id: 3, name_hu: 'Építőművészet (BA)', name_en: ''},
    {id: 4, name_hu: 'Gépészmérnöki (BSc)', name_en: 'Mechanical Engineer (BSc)'},
    {id: 5, name_hu: 'Ipari termék- és formatervező mérnöki (BSc)', name_en: ''},
    {id: 6, name_hu: 'Környezetmérnöki (BSc)', name_en: ''},
    {id: 7, name_hu: 'Mérnökinformatikus (BSc)', name_en: 'Computer Science Engineering BSc'},
    {id: 8, name_hu: 'Villamosmérnöki (BSc)', name_en: 'Electrical Engineering BSc'},
    {id: 9, name_hu: 'Belsőépítész tervezőművész (MA)', name_en: ''},
    {id: 10, name_hu: 'Egészségügyi mérnök (MSc)', name_en: ''},
    {id: 11, name_hu: 'Építész (MSc)', name_en: 'Architectural Engineering MSc '},
    {id: 12, name_hu: 'Építőművész (MA)', name_en: ''},
    {id: 13, name_hu: 'Gépészmérnöki (MSc)', name_en: ''},
    {id: 14, name_hu: 'Mérnökinformatikus (MSc)', name_en: 'Computer Science Engineering MSc'},
    {id: 15, name_hu: 'Szerkezet-építőmérnöki (MSc)', name_en: ''},
    {id: 16, name_hu: 'Településmérnöki (MSc)', name_en: ''},
    {id: 17, name_hu: 'Breuer Marcell Doktori Iskola', name_en: ''},
    {id: 18, name_hu: 'Műszaki felsőoktatási szakképzés (FOKSZ)', name_en: ''},
    {id: 19, name_hu: 'Televíziós műsorkészítő (FOKSZ)', name_en: ''},
    {id: 20, name_hu: 'Építészmérnöki osztatlan', name_en: ''},
    {id: 21, name_hu: 'BIM szakmérnök', name_en: ''},
    {id: 22, name_hu: 'Atomerőművi üzemeltetési szakember', name_en: ''},
    {id: 23, name_hu: 'Atomerőművi üzemeltetési szakmérnök', name_en: ''},
    {id: 24, name_hu: 'Hulladékgazdálkodási szakmérnök / műszaki szakember', name_en: ''},
    {id: 25, name_hu: 'Létesítmény-energetikai szakmérnök', name_en: ''},
    {id: 26, name_hu: 'Minőségirányítási rendszermenedzser', name_en: ''},
    {id: 27, name_hu: 'Nukleáris környezetvédelmi szakmérnök / szakember', name_en: ''},
    {id: 28, name_hu: 'Történeti épületdiagnosztikai és rehabilitációs szakmérnök / szakember', name_en: ''},
    {id: 29, name_hu: 'Városüzemeltető szakmérnök', name_en: ''},
    {id: 30, name_hu: 'Vizuális mediátor, iskolai designer', name_en: ''},
    {id: 31, name_hu: 'Zaj- és rezgésvédelmi szakmérnök / szakember', name_en: ''}
];

export let szakos_tajekoztatok = [
    {
        id: 1,
        name_hu: 'Nem kívánok részt venni',
        name_en: 'I do not wish to participate',
        time: '',
        place: '',
        tutor: ''
    },
    {
        id: 2,
        name_hu: 'Építész szakok (BA,BSc,MSc,MA,O) magyar nyelvű képzés',
        name_en: 'Architecture majors (BA,BSc,MSc,MA,O) in Hungarian',
        time: '14:00-15:00',
        place: 'A008',
        tutor: 'Dr. Németh Pál, Dr. Rétfalvi Donát'
    },
    {
        id: 3,
        name_hu: 'Építőmérnöki szakok (BSc, MSc) magyar nyelvű képzés',
        name_en: 'Civil engineering majors (BSc, MSc) in Hungarian',
        time: '14:00-15:00',
        place: 'A303',
        tutor: 'Dr. Pál-Schneider Judit'
    },
    {
        id: 4,
        name_hu: 'Villamosmérnöki magyar nyelvű képzés',
        name_en: 'Electrical engineering majors in Hungarian',
        time: '14:00-15:00',
        place: 'A216',
        tutor: 'Dr. Kvasznicza Zoltán, Elter Patrik'
    },
    {
        id: 5,
        name_hu: 'Gépészmérnöki magyar nyelvű képzés',
        name_en: 'Mechanical engineering majors in Hungarian',
        time: '14:45-15:45',
        place: 'A204',
        tutor: 'Eördöghné Dr. Miklós Mária'
    },
    {
        id: 6,
        name_hu: 'Mérnökinformatikus (BSc,MSc) magyar nyelvű képzés',
        name_en: 'Computer Science Engineering (BSc,MSc) in Hungarian',
        time: '15:00-16:00',
        place: 'A019',
        tutor: 'Dr. Iványi Péter'
    },
    {
        id: 7,
        name_hu: 'Környezetmérnök magyar nyelvű képzés',
        name_en: 'Environmental engineer major in Hungarian',
        time: '14:00-15:00',
        place: 'A217',
        tutor: 'Dolgosné Dr. Kovács Anita'
    },
    {
        id: 8,
        name_hu: 'Televíziós műsorkészítő magyar nyelvű FOKSZ képzés',
        name_en: 'Television production FOKSZ training in Hungarian',
        time: '14:30-15:30',
        place: 'C002',
        tutor: 'Dr. Kovács Éva'
    },
    {
        id: 9,
        name_hu: 'Műszaki magyar nyelvű FOKSZ képzés',
        name_en: 'Technical FOKSZ training in Hungarian',
        time: '15:45-16:45',
        place: 'A204',
        tutor: 'Vasváry Gyula'
    }
];


export let semesters = [
    {id: 1, name_hu: '1. szemeszter', name_en: '1. semester'},
    {id: 2, name_hu: '2. szemeszter', name_en: '2. semester'},
    {id: 3, name_hu: '3. szemeszter', name_en: '3. semester'},
    {id: 4, name_hu: '4. szemeszter', name_en: '4. semester'},
    {id: 5, name_hu: '5. szemeszter', name_en: '5. semester'},
    {id: 6, name_hu: '6. szemeszter', name_en: '6. semester'},
    {id: 7, name_hu: '7. szemeszter', name_en: '7. semester'},
    {id: 8, name_hu: '8. szemeszter', name_en: '8. semester'},
    {id: 9, name_hu: '9. szemeszter', name_en: '9. semester'},
    {id: 10, name_hu: '10. szemeszter', name_en: '10. semester'},
    {id: 11, name_hu: '11. szemeszter', name_en: '11. semester'},
    {id: 12, name_hu: '12. szemeszter', name_en: '12. semester'},
    {id: 13, name_hu: '13. szemeszter', name_en: '13. semester'},
    {id: 14, name_hu: '14. szemeszter', name_en: '14. semester'},
    {id: 15, name_hu: '15. szemeszter', name_en: '15. semester'},
    {id: 16, name_hu: '16. szemeszter', name_en: '16. semester'},
    {id: 17, name_hu: '17. szemeszter', name_en: '17. semester'},
    {id: 18, name_hu: '18. szemeszter', name_en: '18. semester'},
    {id: 19, name_hu: '19. szemeszter', name_en: '19. semester'},
    {id: 20, name_hu: '20. szemeszter', name_en: '20. semester'}
];

export let chamberships = [
    {id: -1, name: 'Kérem válasszon!'},
    {id: 1, name: '1. kamara'},
    {id: 2, name: '2. kamara'},
    {id: 3, name: '3. kamara'}
];

export let participate = [
    {id: 1, name_hu: 'Igen', name_en: 'Yes'},
    {id: 2, name_hu: 'Nem', name_en: 'No'},
];