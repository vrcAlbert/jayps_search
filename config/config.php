<?php

return array(
    /** @brief Table de liaison avec les mots clés */
    'table_liaison' => 'jayps_search_word_occurence',

    /** @brief Préfixe de la table de liaison avec les mots clés */
    'table_liaison_prefixe' => 'mooc_',

    /** @brief mots clés interdits */
    'forbidden_words' => array(
        // 3 lettres
        'les', 'des', 'ses', 'son', 'mes', 'mon', 'tes', 'ton', 'une', 'aux', 'est', 'sur', 'par', 'dit',
        'the',
        // 4 lettres
        'pour','sans','dans','avec','deux','vers',
        // 5 lettres
        'titre',
    ),

    /** @brief longueur mimimum des mots à indexer */
    'min_word_len' => 3,

    /** @brief use a transaction to speed up InnDB insert */
    'transaction' => true,
);