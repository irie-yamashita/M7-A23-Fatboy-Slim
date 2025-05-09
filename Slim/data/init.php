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
        biografia TEXT
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
        'biografia' => 'Billie Eilish és una cantant i compositora nord-americana que va saltar a la fama amb "Ocean Eyes". Coneguda pel seu estil únic i les seves produccions fosques i íntimes, ha revolucionat el pop contemporani. Ha guanyat diversos premis Grammy, incloent "Millor artista revelació". Amb el seu germà Finneas, forma un tàndem creatiu molt reconegut.'
    ],
    [
        'nom' => 'Zoe Gotusso',
        'nom_real' => 'Zoe Gotusso',
        'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/4/4e/Zoe_Gotusso.jpg',
        'data_naix' => '1997-05-22',
        'lloc_naix' => 'Còrdova, Argentina',
        'any_debut' => 2016,
        'genere_musical' => 'Indie pop',
        'oients' => 500000,
        'cancons' => 'Monoambiente, Ganas, Cuarto Creciente',
        'link_spotify' => 'https://open.spotify.com/artist/6c3vfg1xkz3xvZz3zjP0rZ',
        'link_youtube' => 'https://www.youtube.com/channel/UCp8Gz2J5kY1z6Y0V0Z0Z0Zg',
        'link_instagram' => 'https://www.instagram.com/zoegotusso/',
        'biografia' => 'Zoe Gotusso és una cantautora argentina coneguda pel seu estil íntim i emotiu. Va començar la seva carrera amb el duo Salvapantallas abans de llançar-se en solitari amb l\'àlbum "Mi Primer Día Triste". La seva música combina melodies suaus amb lletres profundes, capturant l\'atenció del públic llatinoamericà.'
    ],
    [
        'nom' => 'Bad Gyal',
        'nom_real' => 'Alba Farelo Solé',
        'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Bad_Gyal.jpg',
        'data_naix' => '1997-03-07',
        'lloc_naix' => 'Vilassar de Mar, Catalunya, Espanya',
        'any_debut' => 2016,
        'genere_musical' => 'Dancehall, reggaeton, trap',
        'oients' => 3000000,
        'cancons' => 'Fiebre, Zorra, Alocao',
        'link_spotify' => 'https://open.spotify.com/artist/5lwmRUyW9Y1nI4q8cQSZ1r',
        'link_youtube' => 'https://www.youtube.com/channel/UC3eZ7r6fL9q8cQSZ1r',
        'link_instagram' => 'https://www.instagram.com/akabadgyal/',
        'biografia' => 'Bad Gyal és una artista catalana que ha revolucionat l\'escena musical urbana amb el seu estil únic que fusiona dancehall, reggaeton i trap. Des dels seus inicis amb la versió en català de "Work" de Rihanna, ha aconseguit èxits com "Fiebre" i "Zorra", consolidant-se com una de les veus més influents del gènere.'
    ],
    [
        'nom' => 'Judit Neddermann',
        'nom_real' => 'Judit Neddermann',
        'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/8/8e/Judit_Neddermann.jpg',
        'data_naix' => '1991-03-27',
        'lloc_naix' => 'Vilassar de Mar, Catalunya, Espanya',
        'any_debut' => 2011,
        'genere_musical' => 'Folk, jazz, música d\'autor',
        'oients' => 109.406,
        'cancons' => 'Vinc d\'un poble, Ahizpa / Germana, Em diràs adéu',
        'link_spotify' => 'https://open.spotify.com/artist/1ImywUogV5mfqWMyXEvkgE',
        'link_youtube' => 'https://www.youtube.com/channel/UCp8Gz2J5kY1z6Y0V0Z0Z0Zg',
        'link_instagram' => 'https://www.instagram.com/juditneddermann/',
        'biografia' => 'Judit Neddermann és una cantautora catalana que combina el folk, el jazz i la música d\'autor. Amb una veu càlida i lletres introspectives, ha col·laborat amb artistes com Joan Manuel Serrat i ha compost música per a obres teatrals, destacant-se com una figura clau en l\'escena musical catalana.'
    ],
    [
        'nom' => 'Rosalia',
        'nom_real' => 'Rosalia Vila Tobella',
        'imatge' => 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Rosalia_Vila_Tobella.jpg',
        'data_naix' => '1992-09-25',
        'lloc_naix' => 'Sant Esteve Sesrovires, Catalunya, Espanya',
        'any_debut' => 2013,
        'genere_musical' => 'Flamenc, pop, reggaeton',
        'oients' => 21696779,
        'cancons' => 'Malamente, Aislamiento, Despechá',
        'link_spotify' => 'https://open.spotify.com/artist/7ltDVBr6mKbRvohxheJ9h1',
        'link_youtube' => 'https://www.youtube.com/channel/UC5C7NfGZ0kz3xvZz3zjP0rZ',
        'link_instagram' => 'https://www.instagram.com/rosalia.vt/',
        'biografia' => 'Rosalia és una artista catalana que ha redefinit el flamenc fusionant-lo amb el pop i el reggaeton. Amb àlbums com "El Mal Querer" i "Motomami", ha aconseguit reconeixement internacional, guanyant diversos premis i col·laborant amb artistes de renom mundial.'
    ]
];

    foreach ($artistes as $artista) {
        $stmt = $db->prepare('INSERT INTO artistes (
            nom, nom_real, imatge, data_naix, lloc_naix, any_debut, genere_musical, oients, cancons,
            link_spotify, link_youtube, link_instagram, biografia
        ) VALUES (
            :nom, :nom_real, :imatge, :data_naix, :lloc_naix, :any_debut, :genere_musical, :oients, :cancons,
            :link_spotify, :link_youtube, :link_instagram, :biografia
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

        $stmt->execute();
    }

?>
