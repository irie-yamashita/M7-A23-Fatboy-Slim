<?php

// Connexió a la base de dades
$db = new SQLite3('artistes.db');

// Creo taula
$db->exec('
    CREATE TABLE IF NOT EXISTS artistes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nom TEXT NOT NULL,
        nom_real TEXT,
        imatge TEXT NOT NULL,
        data_naix TEXT NOT NULL,
        lloc_naix TEXT,
        any_debut INTEGER,
        genere_musical TEXT,
        oients INTEGER,
        cancons TEXT,
        link_spotify TEXT,
        link_youtube TEXT,
        link_instagram TEXT,
        biografia TEXT,
        link_video TEXT
    );
');

$artistes = [
    [
        'nom' => 'Billie Eilish',
        'nom_real' => 'Billie Eilish Pirate Baird O\'Connell',
        'imatge' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTot_2nt2IYzwGxAWxfAjyKgVpySMWB5wqYRBrOUH_lxG0xBHO52fKJz584EXEZFjmGhfCz8n8s-yakaISpgJ2PkQ',
        'data_naix' => '2001-12-18',
        'lloc_naix' => 'Los Angeles (Califòrnia), Estats Units',
        'any_debut' => 2015,
        'genere_musical' => 'Electropop, indie pop, pop alternatiu',
        'oients' => 100600000,
        'cancons' => 'BIRDS OF A FEATHER, lovely, everything i wanted',
        'link_spotify' => 'https://open.spotify.com/artist/6qqNVTkY8uBg9cP3Jd7DAH',
        'link_youtube' => 'https://www.youtube.com/channel/UCiGm_E4ZwYSHV3bcW1pnSeQ',
        'link_instagram' => 'https://www.instagram.com/billieeilish/',
        'biografia' => 'Billie Eilish és una cantant i compositora nord-americana que va saltar a la fama amb "Ocean Eyes". Coneguda pel seu estil únic i les seves produccions fosques i íntimes, ha revolucionat el pop contemporani. Ha guanyat diversos premis Grammy, incloent "Millor artista revelació". Amb el seu germà Finneas, forma un tàndem creatiu molt reconegut.',
        'link_video' => 'https://www.youtube.com/watch?v=d5gf9dXbPi0'
    ],
    [
        'nom' => 'Zoe Gotusso',
        'nom_real' => 'Zoe Gotusso',
        'imatge' => 'https://i.scdn.co/image/ab6761610000e5eb1663d0ed8b22e5215e52c6aa',
        'data_naix' => '1997-05-22',
        'lloc_naix' => 'Còrdova, Argentina',
        'any_debut' => 2016,
        'genere_musical' => 'Indie pop',
        'oients' => 1053407,
        'cancons' => 'Monoambiente, Ganas, Cuarto Creciente',
        'link_spotify' => 'https://open.spotify.com/intl-es/artist/3XBw8ImFEo86mEB2dYh0vS',
        'link_youtube' => 'https://www.youtube.com/c/ZoeGotusso',
        'link_instagram' => 'https://www.instagram.com/zoegotusso/?hl=es',
        'biografia' => 'Zoe Gotusso és una cantautora argentina coneguda pel seu estil íntim i emotiu. Va començar la seva carrera amb el duo Salvapantallas abans de llançar-se en solitari amb l\'àlbum "Mi Primer Día Triste". La seva música combina melodies suaus amb lletres profundes, capturant l\'atenció del públic llatinoamericà.',
        'link_video' => 'https://www.youtube.com/watch?v=2pV1F7c2O9Q'
    ],
    [
        'nom' => 'Bad Gyal',
        'nom_real' => 'Alba Farelo Solé',
        'imatge' => 'https://i.scdn.co/image/ab67616d00001e02250a6de492482d5e25e881bd',
        'data_naix' => '1997-03-07',
        'lloc_naix' => 'Vilassar de Mar, Catalunya, Espanya',
        'any_debut' => 2016,
        'genere_musical' => 'Dancehall, reggaeton, trap',
        'oients' => 13349407,
        'cancons' => 'Fiebre, Zorra, Alocao',
        'link_spotify' => 'https://open.spotify.com/intl-es/artist/4F4pp8NUW08JuXwnoxglpN',
        'link_youtube' => 'https://www.youtube.com/channel/UC2ypBaYnDvnlbzyAH8w2jsw',
        'link_instagram' => 'https://www.instagram.com/akabadgyal/?hl=es',
        'biografia' => 'Bad Gyal és una artista catalana que ha revolucionat l\'escena musical urbana amb el seu estil únic que fusiona dancehall, reggaeton i trap. Des dels seus inicis amb la versió en català de "Work" de Rihanna, ha aconseguit èxits com "Fiebre" i "Zorra", consolidant-se com una de les veus més influents del gènere.',
        'link_video' => 'https://www.youtube.com/watch?v=e74C11fdjak'
    ],
    [
        'nom' => 'Judit Neddermann',
        'nom_real' => 'Judit Neddermann',
        'imatge' => 'https://i.scdn.co/image/ab6761610000e5eb84a5ee66fd2990a428ec6264',
        'data_naix' => '1991-03-27',
        'lloc_naix' => 'Vilassar de Mar, Catalunya, Espanya',
        'any_debut' => 2011,
        'genere_musical' => 'Folk, jazz, música d\'autor',
        'oients' => 109406,
        'cancons' => 'Vinc d\'un poble, Ahizpa / Germana, Em diràs adéu',
        'link_spotify' => 'https://open.spotify.com/intl-es/artist/1ImywUogV5mfqWMyXEvkgE',
        'link_youtube' => 'https://www.youtube.com/channel/UCCqiUsBGelL4vP6lQigR6sg',
        'link_instagram' => 'https://www.instagram.com/juditneddermann/?hl=es',
        'biografia' => 'Judit Neddermann és una cantautora catalana que combina el folk, el jazz i la música d\'autor. Amb una veu càlida i lletres introspectives, ha col·laborat amb artistes com Joan Manuel Serrat i ha compost música per a obres teatrals, destacant-se com una figura clau en l\'escena musical catalana.',
        'link_video' => 'https://www.youtube.com/watch?v=gJJnZC27DJM'
    ],
    [
        'nom' => 'Rosalía',
        'nom_real' => 'Rosalía Vila Tobella',
        'imatge' => 'https://i.scdn.co/image/ab67616d00001e02c76ccdb32228d3ea38a9f5d6',
        'data_naix' => '1992-09-25',
        'lloc_naix' => 'Sant Esteve Sesrovires, Catalunya, Espanya',
        'any_debut' => 2013,
        'genere_musical' => 'Flamenc, pop, reggaeton',
        'oients' => 21733490,
        'cancons' => 'Malamente, Aislamiento, Despechá',
        'link_spotify' => 'https://open.spotify.com/intl-es/artist/7ltDVBr6mKbRvohxheJ9h1',
        'link_youtube' => 'https://www.youtube.com/channel/UCQt9awGIFZeldFsATZNeJag',
        'link_instagram' => 'https://www.instagram.com/rosalia.vt/?hl=es',
        'biografia' => 'Rosalía és una artista catalana que ha redefinit el flamenc fusionant-lo amb el pop i el reggaeton. Amb àlbums com "El Mal Querer" i "Motomami", ha aconseguit reconeixement internacional, guanyant diversos premis i col·laborant amb artistes de renom mundial.',
        'link_video' => 'https://www.youtube.com/watch?v=VNTvganFO78'
    ]
];

    foreach ($artistes as $artista) {
        $stmt = $db->prepare('INSERT INTO artistes (
            nom, nom_real, imatge, data_naix, lloc_naix, any_debut, genere_musical, oients, cancons,
            link_spotify, link_youtube, link_instagram, biografia, link_video
        ) VALUES (
            :nom, :nom_real, :imatge, :data_naix, :lloc_naix, :any_debut, :genere_musical, :oients, :cancons,
            :link_spotify, :link_youtube, :link_instagram, :biografia, :link_video
        )');

        $stmt->bindValue(':nom', $artista['nom']);
        $stmt->bindValue(':nom_real', $artista['nom_real']);
        $stmt->bindValue(':imatge', $artista['imatge']);
        $stmt->bindValue(':data_naix', $artista['data_naix']);
        $stmt->bindValue(':lloc_naix', $artista['lloc_naix']);
        $stmt->bindValue(':any_debut', $artista['any_debut']);
        $stmt->bindValue(':genere_musical', $artista['genere_musical']);
        $stmt->bindValue(':oients', $artista['oients']);
        $stmt->bindValue(':cancons', $artista['cancons']);
        $stmt->bindValue(':link_spotify', $artista['link_spotify']);
        $stmt->bindValue(':link_youtube', $artista['link_youtube']);
        $stmt->bindValue(':link_instagram', $artista['link_instagram']);
        $stmt->bindValue(':biografia', $artista['biografia']);
        $stmt->bindValue(':link_video', $artista['link_video']);

        $stmt->execute();
    }

?>
