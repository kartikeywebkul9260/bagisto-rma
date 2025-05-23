<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'sales' => [
                    'rma' => [
                        'afternoon'                           => 'Nachmittag',
                        'all-products'                        => 'Alle Produkte',
                        'all-status'                          => 'Alle Status',
                        'allow-new-request-for-pending-order' => 'Neuen RMA-Antrag für ausstehende Bestellung zulassen',
                        'allow-rma-for-digital-product'       => 'RMA für digitales Produkt zulassen',
                        'allowed-file-extension'              => 'Erlaubte Dateierweiterung',
                        'allowed-file-types'                  => 'Bitte wählen Sie nur die Dateitypen ' . core()->getConfigData('sales.rma.setting.allowed-file-extension'),
                        'allowed-info'                        => 'Durch Kommas getrennt. Zum Beispiel: jpg,jpeg,pdf',
                        'allowed-request-cancelled-request'   => 'Neuen RMA-Antrag für stornierte Anfragen zulassen',
                        'allowed-request-declined-request'    => 'Neuen RMA-Antrag für abgelehnte Anfragen zulassen',
                        'allowed-rma-for-product'             => 'RMA für Produkt zulassen',
                        'cancel-items'                        => 'Artikel stornieren',
                        'complete'                            => 'Abgeschlossen',
                        'current-order-quantity'              => 'Aktuelle Bestellmenge',
                        'days-info'                           => 'Die Anzahl der Tage, innerhalb derer der Kunde nach einer Bestellung eine RMA anfordern kann.',
                        'default-allow-days'                  => 'Standard-Zulassungstage',
                        'enable'                              => 'RMA aktivieren',
                        'evening'                             => 'Abend',
                        'exchange'                            => 'Umtausch',
                        'info'                                => 'RMA ist Teil des Prozesses, ein Produkt an ein Unternehmen zurückzusenden, um eine Rückerstattung, einen Ersatz oder eine Reparatur zu erhalten.',
                        'morning'                             => 'Morgen',
                        'new-rma-message-to-customer'         => 'Neue RMA-Nachricht an den Kunden',
                        'no'                                  => 'Nein',
                        'open'                                => 'Offen',
                        'package-condition'                   => 'Paketzustand',
                        'packed'                              => 'Verpackt',
                        'print-page'                          => 'Seite drucken',
                        'product-already-raw'                 => 'Produkt befindet sich bereits im RMA.',
                        'product-delivery-status'             => 'Produktlieferstatus',
                        'resolution-type'                     => 'Lösungstyp',
                        'return-pickup-address'               => 'Rückholadresse',
                        'return-pickup-time'                  => 'Rückholzeit',
                        'return-policy'                       => 'Rückgaberecht',
                        'return'                              => 'Rückgabe',
                        'select-allowed-order-status'         => 'Erlaubten Bestellstatus auswählen',
                        'specific-products'                   => 'Spezifische Produkte',
                        'title'                               => 'RMA',
                        'yes'                                 => 'Ja',

                        'setting' => [
                            'info'  => 'Die RMA-Funktionalität ermöglicht die Handhabung von Situationen, in denen ein Kunde Artikel zur Reparatur und Wartung oder zur Rückerstattung oder zum Austausch zurücksendet.',
                            'read'  => 'Richtlinie lesen',
                            'terms' => 'Ich habe die Rückgaberichtlinie gelesen und akzeptiert.', 
                            'title' => 'RMA',
                        ],
                    ],
                ],
            ],
        ],

        'components' => [
            'layouts' => [
                'sidebar' => [
                    'rma' => 'RMA',
                ],
            ],
        ],

        'sales' => [
            'rma' => [
                'index' => [
                    'create-rma-title' => 'RMA erstellen',
                    'reason-title'     => 'Gründe',
                    'rma-title'        => 'Alle RMA',
                ],

                'all-rma' => [
                    'index' => [
                        'title' => 'Alle RMA',

                        'datagrid' => [
                            'create'        => 'Erstellt am',
                            'customer-name' => 'Kundenname',
                            'id'            => 'RMA ID',
                            'order-ref'     => 'Auftragsreferenz',
                            'order-status'  => 'Auftragsstatus',
                            'rma-status'    => 'RMA Status',
                        ],
                    ],

                    'view' => [
                        'add-attachments'        => 'Anhänge hinzufügen',
                        'additional-information' => 'Zusätzliche Informationen:',
                        'attachment'             => 'Anhang',
                        'change-status'          => 'Status ändern',
                        'confirm-print'          => 'Klicken Sie auf OK, um das RMA zu drucken',
                        'conversations'          => 'Unterhaltungen',
                        'customer-details'       => 'Kundendetails',
                        'customer-email'         => 'Kunden-E-Mail:',
                        'customer'               => 'Kunde:',
                        'enter-message'          => 'Nachricht eingeben',
                        'images'                 => 'Bild:',
                        'no-record'              => 'Kein Eintrag gefunden!',
                        'order-date'             => 'Bestelldatum:',
                        'order-details'          => 'Artikel, die für RMA angefordert wurden',
                        'order-id'               => 'Bestell-ID:',
                        'order-status'           => 'Bestellstatus:',
                        'order-total'            => 'Gesamtbestellung:',
                        'request-on'             => 'Angefordert am:',
                        'resolution-type'        => 'Lösungstyp:',
                        'rma-status'             => 'RMA-Status:',
                        'save-btn'               => 'Speichern',
                        'send-message-btn'       => 'Nachricht senden',
                        'send-message-success'   => 'Nachricht erfolgreich gesendet.',
                        'send-message'           => 'Nachricht senden',
                        'status'                 => 'Status',
                        'title'                  => 'RMA',
                        'update-success'         => 'RMA-Status erfolgreich aktualisiert.',
                        'view-title'             => 'RMA',
                    ],
                ],
                
                'rma-status' => [
                    'index' => [
                        'create-btn' => 'RMA-Status erstellen',
                        'title'      => 'RMA-Status',

                        'datagrid' => [
                            'created-at'          => 'Erstellt am',
                            'delete-success'      => 'RMA-Status erfolgreich gelöscht.',
                            'disabled'            => 'Inaktiv',
                            'enabled'             => 'Aktiv',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Ausgewählter RMA-Status erfolgreich gelöscht.',
                            'reason-error'        => 'RMA-Status wird in RMA verwendet.',
                            'reason'              => 'RMA-Status',
                            'status'              => 'Status',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Neuen RMA-Status hinzufügen',
                        'reason'       => 'RMA-Status',
                        'save-btn'     => 'RMA-Status speichern',
                        'status'       => 'Status',
                        'success'      => 'RMA-Status erfolgreich erstellt.',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMA-Status bearbeiten',
                        'mass-update-success' => 'Ausgewählter RMA-Status erfolgreich aktualisiert.',
                        'reason'              => 'RMA-Status',
                        'save-btn'            => 'RMA-Status speichern',
                        'status'              => 'Status',
                        'success'             => 'RMA-Status erfolgreich aktualisiert.',
                    ],
                ],

                'reasons' => [
                    'index' => [
                        'create-btn' => 'RMA Grund erstellen',
                        'title'      => 'Gründe',

                        'datagrid' => [
                            'created-at'          => 'Erstellt am',
                            'delete-success'      => 'Grund erfolgreich gelöscht.',
                            'disabled'            => 'Inaktiv',
                            'enabled'             => 'Aktiv',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Ausgewählte Daten erfolgreich gelöscht',
                            'reason-error'        => 'Grund wird in RMA verwendet.',
                            'reason'              => 'Grund',
                            'status'              => 'Status',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Neuen Grund hinzufügen',
                        'reason'       => 'Grund',
                        'save-btn'     => 'Grund speichern',
                        'status'       => 'Status',
                        'success'      => 'Grund erfolgreich erstellt.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Grund bearbeiten',
                        'mass-update-success' => 'Ausgewählte Gründe erfolgreich aktualisiert.',
                        'reason'              => 'Grund',
                        'save-btn'            => 'Grund speichern',
                        'status'              => 'Status',
                        'success'             => 'Grund erfolgreich aktualisiert.',
                    ],
                ],

                'custom-field' => [
                    'index' => [
                        'create-btn' => 'Neues Feld hinzufügen',
                        'title'      => 'RMA-Benutzerdefinierte Felder',

                        'datagrid' => [
                            'created-at'          => 'Erstellt am',
                            'delete-success'      => 'Benutzerdefinierte Felder erfolgreich gelöscht.',
                            'disabled'            => 'Inaktiv',
                            'enabled'             => 'Aktiv',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Ausgewählte Daten erfolgreich gelöscht',
                            'status'              => 'Status',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Neues Benutzerdefiniertes Feld',
                        'save-btn'     => 'Benutzerdefiniertes Feld speichern',
                        'status'       => 'Status',
                        'success'      => 'Benutzerdefiniertes Feld erfolgreich erstellt.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Benutzerdefiniertes Feld bearbeiten',
                        'mass-update-success' => 'Ausgewählte Benutzerdefinierte Felder erfolgreich aktualisiert.',
                        'reason'              => 'Benutzerdefiniertes Feld',
                        'save-btn'            => 'Benutzerdefiniertes Feld speichern',
                        'status'              => 'Status',
                        'success'             => 'Benutzerdefiniertes Feld erfolgreich aktualisiert.',
                    ],
                ],

                'rules' => [
                    'index' => [
                        'create-btn' => 'RMA-Regeln erstellen',
                        'title'      => 'RMA-Regeln',

                        'datagrid' => [
                            'delete-success'      => 'RMA-Regeln erfolgreich gelöscht.',
                            'disabled'            => 'Inaktiv',
                            'enabled'             => 'Aktiv',
                            'exchange-period'     => 'Austauschzeitraum (Tage)',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Ausgewählte Daten erfolgreich gelöscht.',
                            'reason'              => 'Regeln',
                            'return-period'       => 'Rückgabezeitraum (Tage)',
                            'status'              => 'Status',
                        ],
                    ],

                    'create' => [
                        'create-title'       => 'Neue RMA-Regeln hinzufügen',
                        'reason'             => 'RMA-Regeln',
                        'resolutions-period' => 'Lösungszeitraum',
                        'rule-description'   => 'Regelnbeschreibung',
                        'rule-details'       => 'Regeldetails',
                        'rules-title'        => 'Regeln Titel',
                        'save-btn'           => 'RMA-Regeln speichern',
                        'status'             => 'RMA-Status',
                        'success'            => 'RMA-Regeln erfolgreich erstellt.',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMA-Regeln bearbeiten',
                        'mass-update-success' => 'Ausgewählte RMA-Regeln erfolgreich aktualisiert.',
                        'reason'              => 'RMA-Regeln',
                        'save-btn'            => 'RMA-Regeln aktualisieren',
                        'status'              => 'Status',
                        'success'             => 'RMA-Regeln erfolgreich aktualisiert.',
                    ],
                ],

                'create-rma' => [
                    'create-success'           => 'RMA erfolgreich erstellt.',
                    'create-title'             => 'RMA erstellen',
                    'email'                    => 'E-Mail',
                    'image'                    => 'Bild',
                    'invalid-order-id'         => 'Ungültige Auftrags-ID',
                    'mismatch'                 => 'Auftrags-ID und E-Mail stimmen nicht überein',
                    'new-rma'                  => 'Neue RMA',
                    'order-id'                 => 'Auftrags-ID',
                    'quantity'                 => 'Menge',
                    'reason'                   => 'Grund',
                    'rma-already-exist'        => 'RMA existiert bereits',
                    'rma-not-available-quotes' => 'Artikel nicht für RMA verfügbar',
                    'save-btn'                 => 'Speichern',
                    'search'                   => '--Auswählen--',
                    'validate'                 => 'Überprüfen',
                ],
            ],

            'invoice' => [
                'create' => [
                    'rma_has_been_created' => 'RMA wurde erstellt',
                    'rma-created-message'  => 'Eine RMA-Anfrage ist für das Produkt mit einer Menge von :qty verfügbar'
                ],
            ],
        ],

        'acl' => [
            'delete'      => 'Löschen',
            'edit'        => 'Bearbeiten',
            'mass-delete' => 'Massenlöschung',
            'mass-update' => 'Massenaktualisierung',
            'title'       => 'RMA',
        ],
    ],

    'shop' => [
        'customer' => [
            'delivered'    => 'Geliefert',
            'menu-name'    => 'RMA',
            'offer'        => 'Erhalten Sie BIS ZU 40% RABATT auf Ihre erste Bestellung',
            'rma-qty'      => 'RMA Menge',
            'shop-now'     => 'JETZT KAUFEN',
            'submit-req'   => 'Anfrage abschicken',
            'title'        => 'RMA',
            'undelivered'  => 'Nicht geliefert',

            'create' => [
                'cancel'                   => 'Abbrechen',
                'create-btn'               => 'Speichern',
                'enter-order-id'           => 'Bestell-ID eingeben',
                'heading'                  => 'Neue RMA-Anfrage',
                'exchange-window'          => 'Umtauschfenster',
                'image'                    => 'Bild',
                'images'                   => 'Bilder',
                'information'              => 'Zusätzliche Informationen',
                'item-ordered'             => 'Bestellter Artikel',
                'no-record'                => 'Keine Aufzeichnung gefunden!',
                'not-allowed'              => 'RMA ist für ausstehende Bestellungen nicht zulässig',
                'order-status'             => 'Bestellstatus',
                'orders'                   => 'Bestellungen',
                'price'                    => 'Preis',
                'product-name'             => 'Produktname',
                'product'                  => 'Produkt',
                'quantity'                 => 'Menge',
                'reason'                   => 'Grund',
                'reopen-request'           => 'Anfrage erneut öffnen',
                'resolution'               => 'Lösung wählen',
                'return-window'            => 'Rückgabefenster',
                'rma-not-available-quotes' => 'Artikel nicht für RMA verfügbar',
                'save'                     => 'Speichern',
                'search-order'             => 'Bestellung suchen',
                'sku'                      => 'SKU',
            ],
        ],

        'guest' => [
            'view' => [
                'close-rma'    => 'RMA schließen:',
                'order-status' => 'Bestellstatus:',
                'rma-status'   => 'RMA-Status:',
                'title'        => 'RMA',
            ],

            'create' => [
                'cancel'                   => 'Abbrechen',
                'create-btn'               => 'Speichern',
                'enter-order-id'           => 'Bestell-ID eingeben',
                'heading'                  => 'Neue RMA-Anfrage',
                'image'                    => 'Bild',
                'images'                   => 'Bilder',
                'information'              => 'Zusätzliche Informationen',
                'item-ordered'             => 'Bestellter Artikel',
                'not-allowed'              => 'RMA ist für ausstehende Bestellungen nicht zulässig',
                'order-status'             => 'Bestellstatus',
                'orders'                   => 'Bestellungen',
                'price'                    => 'Preis',
                'product-name'             => 'Produktname',
                'product'                  => 'Produkt',
                'quantity'                 => 'Menge',
                'reason'                   => 'Grund',
                'reopen-request'           => 'Anfrage erneut öffnen',
                'resolution'               => 'Lösung wählen',
                'rma-not-available-quotes' => 'Artikel nicht für RMA verfügbar',
                'save'                     => 'Speichern',
                'search-order'             => 'Bestellung suchen',
                'sku'                      => 'SKU',
                'title'                    => 'RMA',
            ],

            'index' => [
                'create'  => 'Neue RMA anfordern',
                'delete'  => 'Löschen',
                'edit'    => 'Bearbeiten',
                'guest'   => 'Gast-RMA-Panel',
                'heading' => 'Kunden-RMA-Panel',
                'update'  => 'Aktualisieren',
                'view'    => 'Ansehen',
            ],
        ],

        'customer-rma-index' => [
            'create'  => 'Erstellen',
            'delete'  => 'Löschen',
            'edit'    => 'Bearbeiten',
            'guest'   => 'Gast-RMA-Panel',
            'heading' => 'RMA',
            'update'  => 'Aktualisieren',
            'view'    => 'Ansehen',
        ],

        'validation' => [
            'close-rma'     => 'Bestätigen',
            'information'   => 'Zusätzliche Informationen',
            'order-id'      => 'Bestellauswahl',
            'order-status'  => 'Bestellstatus',
            'orders'        => 'Bestellungen',
            'resolution'    => 'Lösung',
            'select-orders' => 'Bestellung wählen',
        ],

        'conversation-texts' => [
            'by'        => 'Von',
            'customer'  => 'Kunde',
            'no-record' => 'Keine Aufzeichnung gefunden!',
            'on'        => 'Am',
            'seller'    => 'Verkäufer',
        ],

        'default-option' => [
            'others'              => 'Andere',
            'please-select-value' => 'Bitte Wert wählen',
            'select-order-status' => 'Bestellstatus wählen',
            'select-order'        => 'Bestellung wählen',
            'select-quantity'     => 'Menge wählen',
            'select-reason'       => 'Grund wählen',
            'select-resolution'   => 'Lösung wählen',
            'select-seller'       => 'Verkäufer wählen',
        ],

        'view-customer-rma' => [
            'additional-information'  => 'Zusätzliche Informationen:',
            'admin'                   => 'Admin',
            'cancel-order'            => 'Bestellung stornieren',
            'change-rma-status'       => 'RMA-Status ändern',
            'close-rma'               => 'RMA schließen:',
            'conversations'           => 'Unterhaltungen',
            'guest'                   => 'Gast',
            'heading'                 => 'RMA-Details',
            'images'                  => 'Bilder:',
            'items-request'           => 'Artikel, die für RMA angefordert wurden',
            'items-requested-for-rma' => 'Artikel, die für RMA angefordert wurden',
            'order-id'                => 'Bestell-ID:',
            'refund-details'          => 'Rückerstattungsdetails',
            'refund-offline-btn'      => 'Offline zurückerstatten',
            'refundable-amount'       => 'Rückerstattungsbetrag',
            'resolution-type'         => 'Lösungstyp:',
            'rma'                     => 'RMA',
            'save-btn'                => 'Speichern',
            'send-message-btn'        => 'Nachricht senden',
            'send-message'            => 'Nachricht senden',
            'status-details'          => 'Statusdetails',
            'status-quotes'           => 'Bitte stimmen Sie zu, es als gelöst zu markieren',
            'status-reopen'           => 'Überprüfen, um erneut zu öffnen',
            'status'                  => 'Status',
            'term'                    => 'Zustimmungsmarkierung ist erforderlich',
            'you'                     => 'Admin',
        ],

        'view-guest-rma' => [
            'additional-information' => 'Zusätzliche Informationen:',
            'admin'                  => 'Admin',
            'close-rma'              => 'RMA schließen',
            'conversations'          => 'Unterhaltungen',
            'guest'                  => 'Sie',
            'images'                 => 'Bilder',
            'items-request'          => 'Artikel, die für RMA angefordert wurden',
            'order-id'               => 'Bestell-ID:',
            'refund-offline-btn'     => 'Offline zurückerstatten',
            'resolution-type'        => 'Lösungstyp:',
            'rma'                    => 'RMA',
            'save-btn'               => 'Speichern',
            'send-message-btn'       => 'Nachricht senden',
            'send-message'           => 'Nachricht senden',
            'status-details'         => 'Statusdetails',
            'status-quotes'          => 'Bitte stimmen Sie zu, es als gelöst zu markieren.',
            'status'                 => 'Status',
            'term'                   => 'Zustimmungsmarkierung ist erforderlich',
        ],

        'view-guest-rma-content' => [
            'full-amount'  => 'Voller Betrag',
            'order-status' => 'Bestellstatus:',
            'request-on'   => 'Anfrage am:',
            'rma-status'   => 'RMA-Status:',
        ],

        'view-customer-rma-content' => [
            'admin-status'            => 'Admin-Status:',
            'close-rma'               => 'RMA schließen',
            'consignment-no'          => 'Sendungsnummer:',
            'enter-message'           => 'Nachricht eingeben',
            'full-amount'             => 'Voller Betrag',
            'order-details'           => 'Bestelldetails',
            'order-status'            => 'Bestellstatus:',
            'partial-amount'          => 'Teilbetrag',
            'refundable-amount'       => 'Rückerstattungsbetrag:',
            'request-on'              => 'Anfrage am:',
            'rma-status'              => 'RMA-Status:',
            'seller'                  => 'Verkäufer',
            'total-refundable-amount' => 'Gesamtrückerstattungsbetrag:',
        ],

        'table-heading' => [
            'image'           => 'Bild',
            'order-qty'       => 'Bestellmenge',
            'price'           => 'Preis',
            'product-name'    => 'Produktname',
            'reason'          => 'Grund',
            'resolution-type' => 'Lösungstyp',
            'rma-qty'         => 'RMA Menge',
            'sku'             => 'Artikelnummer',
        ],

        'guest-users' => [
            'button-text' => 'Anmelden',
            'email'       => 'E-Mail',
            'heading'     => 'Gast-Login-Panel',
            'logout'      => 'Gastabmeldung',
            'order-id'    => 'Bestell-ID',
            'title'       => 'Gast-Login',
        ],
    ],

    'mail' => [
        'customer-rma-create' => [
            'additional-information' => 'Zusätzliche Informationen :',
            'greeting'               => 'Sie haben eine neue RMA-Anfrage für Bestellung :order_id gestellt.',
            'heading'                => 'RMA-Anfrage',
            'hello'                  => 'Liebe/r :name',
            'order-id'               => 'Bestell-ID :',
            'order-status'           => 'Bestellstatus :',
            'requested-rma-product'  => 'Angefordertes RMA-Produkt:',
            'resolution-type'        => 'Auflösungstyp :',
            'rma-id'                 => 'RMA-ID :',
            'summary'                => 'Zusammenfassung der RMA der Bestellung',
            'thank-you'              => 'Vielen Dank',
        ],

        'customer-data-table-heading' => [
            'product-name' => 'Produktname',
            'qty'          => 'Menge',
            'reason'       => 'Grund',
            'sku'          => 'SKU',
        ],

        'customer-conversation' => [
            'heading' => 'Liebe/r :name,',
            'message' => 'Nachricht',
            'process' => 'Ihre Rücksendeanforderung wird bearbeitet.',
            'quotes'  => 'Es gibt eine neue Nachricht vom Käufer',
            'solved'  => 'Der RMA-Status wurde vom Kunden auf Gelöst geändert.',
        ],

        'seller-conversation' => [
            'heading' => 'Liebe/r :name',
            'message' => 'Nachricht',
            'quotes'  => 'Es gibt eine neue Nachricht vom Administrator',
            'title'   => 'Nachricht erhalten!',
        ],

        'status' => [
            'heading'       => 'Liebe/r :name',
            'quotes'        => 'Ihr RMA-Status wurde vom Verkäufer geändert',
            'rma-id'        => 'RMA-ID',
            'status-change' => ':id Status wurde vom Verkäufer geändert',
            'status'        => 'Status',
            'title'         => 'Status aktualisiert!',
            'your-rma-id'   => 'Ihre RMA-ID',
        ],
    ],

    'status' => [
        'status-name' => [
            'accept'                   => 'Akzeptieren',
            'awaiting'                 => 'Wartend',
            'canceled'                 => 'Storniert',
            'declined'                 => 'Abgelehnt',
            'dispatched-package'       => 'Paket versandt',
            'item-canceled'            => 'Artikel storniert',
            'not-received-package-yet' => 'Paket noch nicht erhalten',
            'pending'                  => 'Ausstehend',
            'processing'               => 'Verarbeitung',
            'received-package'         => 'Paket erhalten',
            'solved'                   => 'Gelöst',
        ],

        'status-quotes' => [
            'declined-admin'  => 'RMA wurde vom Administrator abgelehnt.',
            'declined-buyer'  => 'RMA wurde vom Käufer abgelehnt.',
            'solved-by-admin' => 'RMA wurde vom Administrator gelöst.',
            'solved'          => 'RMA wurde gelöst.',
        ],
    ],

    'response' => [
        'already-cancel'    => 'Der RMA-Status wurde bereits storniert.',
        'cancel-success'    => 'RMA-Status wurde erfolgreich storniert.',
        'create-success'    => 'Anfrage erfolgreich erstellt.',
        'creation-error'    => 'Der RMA-Status kann nicht aktualisiert werden, da die Rechnung für diese Bestellung nicht erstellt wurde.',
        'permission-denied' => 'Sie sind angemeldet',
        'rma-disabled'      => 'RMA ist für dieses Produkt deaktiviert',
        'send-message'      => ':name erfolgreich gesendet.',
        'update-success'    => ':name erfolgreich aktualisiert.',
        'please-select-the-item' => 'Bitte wählen Sie den Artikel aus',

    ],
];