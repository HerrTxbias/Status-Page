<?php
/*
 * Copyright (c) 2021 by HerrTxbias.
 *
 * Using / Editing this without my consent is not allowed.
 */


return [

    /*
    |--------------------------------------------------------------------------
    | Incident Language Lines
    |--------------------------------------------------------------------------
    |
    | Please do not edit these lines, as they are managed by our translation
    | system. Thank you.
    |
    */

    'title' => 'Vorfälle',
    'table' => [
        'head' => [
            'id' => 'ID',
            'title' => 'Titel',
            'status' => 'Status',
            'impact' => 'Einfluss',
            'reporter' => 'Melder',
        ],
    ],
    'new_incident' => [
        'button' => 'Neuer Vorfall',
        'modal' => [
            'title' => 'Vorfall erstellen',
            'incident_title' => 'Titel',
            'status' => 'Status',
            'impact' => 'Einfluss',
            'visible' => 'Sichtbar',
            'affected_components' => 'Betroffene Komponenten',
            'affected_components_hint' => 'Betroffene Komponenten werden automatisch in einen Status gesetzt, der auf der Auswirkung basiert, sofern Sie diese Funktion nicht deaktivieren.',
            'do_not_update_status' => 'Status nicht aktualisieren',
            'message' => 'Nachricht',
            'open_button' => 'Offener Vorfall',
        ]
    ],
    'update_incident' => [
        'button' => 'Aktualisieren',
        'modal' => [
            'title' => 'Update Vorfall',
            'incident_title' => 'Titel',
            'status' => 'Status',
            'impact' => 'Einfluss',
            'visible' => 'Sichtbar',
            'affected_components' => 'Betroffene Komponenten',
            'affected_components_hint' => 'Der Status für die Komponenten wird nicht automatisch gesetzt, wenn Sie diesen Incident aktualisieren. <br> Erst durch das Auflösen des Incidents werden alle Komponenten in den Zustand "Operational" versetzt.',
            'message' => 'Nachricht',
            'update_button' => 'Update posten',
            'update_button_without_message' => 'Update ohne Meldung',
        ]
    ],
    'delete_incident' => [
        'button' => 'Löschen',
        'modal' => [
            'title' => 'Vorfall löschen',
            'text_r1' => 'Sind Sie sicher, dass Sie den Vorfall ":title" löschen wollen?',
            'text_r2' => 'Seien Sie sich bewusst, dass dies vorübergehend zu Fehlern auf Ihrer Hauptseite führen kann.',
            'delete_button' => 'Vorfall löschen',
        ]
    ],
    'incident_updates' => [
        'title' => 'Vorfallaktualisierungen für',
        'button' => 'Vorfallaktualisierungen',
        'table' => [
            'head' => [
                'id' => 'ID',
                'update_type' => 'Typ aktualisieren',
                'status_update' => 'Status',
                'text' => 'Text',
                'reporter' => 'Melder',
            ],
        ],
        'update' => [
            'button' => 'Eintrag aktualisieren',
            'modal' => [
                'title' => 'Vorfallaktualisierung aktualisieren',
                'message' => 'Nachricht',
                'update_button' => 'Aktualisieren',
            ]
        ],
        'delete' => [
            'button' => 'Löschen',
            'modal' => [
                'title' => 'Vorfallaktualisierung löschen',
                'text_r1' => 'Sind Sie sicher, dass Sie die Aktualisierung :number des Vorfalls ":title" löschen wollen?',
                'text_r2' => 'Seien Sie sich bewusst, dass dies vorübergehend zu Fehlern auf Ihrer Hauptseite führen kann.',
                'delete_button' => 'Vorfallaktualisierung löschen',
            ]
        ],
    ],

];
