<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'sales' => [
                    'rma' => [
                        'afternoon'                           => 'Après-midi',
                        'all-products'                        => 'Tous les produits',
                        'all-status'                          => 'Tous les statuts',
                        'allow-new-request-for-pending-order' => 'Permettre une nouvelle demande de RMA pour commande en attente',
                        'allow-rma-for-digital-product'       => 'Permettre RMA pour produit numérique',
                        'allowed-file-extension'              => 'Extension de fichier autorisée',
                        'allowed-file-types'                  => 'Veuillez sélectionner uniquement les types de fichiers ' . core()->getConfigData('sales.rma.setting.allowed-file-extension'),
                        'allowed-info'                        => 'Séparé par des virgules. Par exemple: jpg,jpeg,pdf',
                        'allowed-request-cancelled-request'   => 'Permettre une nouvelle demande de RMA pour demande annulée',
                        'allowed-request-declined-request'    => 'Permettre une nouvelle demande de RMA pour demande refusée',
                        'allowed-rma-for-product'             => 'Permettre RMA pour produit',
                        'cancel-items'                        => 'Annuler les articles',
                        'complete'                            => 'Complet',
                        'current-order-quantity'              => 'Quantité de commande actuelle',
                        'days-info'                           => 'Le nombre de jours pendant lesquels le client peut demander un RMA après avoir passé une commande.',
                        'default-allow-days'                  => 'Jours autorisés par défaut',
                        'enable'                              => 'Activer RMA',
                        'evening'                             => 'Soirée',
                        'exchange'                            => 'Échange',
                        'info'                                => 'RMA fait partie du processus de retour d\'un produit à une entreprise pour recevoir un remboursement, un remplacement ou une réparation.',
                        'morning'                             => 'Matin',
                        'new-rma-message-to-customer'         => 'Nouveau message RMA au client',
                        'no'                                  => 'Non',
                        'open'                                => 'Ouvert',
                        'package-condition'                   => 'État de l\'emballage',
                        'packed'                              => 'Emballé',
                        'print-page'                          => 'Imprimer la page',
                        'product-already-raw'                 => 'Le produit est déjà en RMA.',
                        'product-delivery-status'             => 'Statut de livraison du produit',
                        'resolution-type'                     => 'Type de résolution',
                        'return-pickup-address'               => 'Adresse de ramassage de retour',
                        'return-pickup-time'                  => 'Heure de ramassage de retour',
                        'return-policy'                       => 'Politique de retour',
                        'return'                              => 'Retourner',
                        'select-allowed-order-status'         => 'Sélectionnez le statut de commande autorisé',
                        'specific-products'                   => 'Produits spécifiques',
                        'title'                               => 'RMA',
                        'yes'                                 => 'Oui',

                        'setting' => [
                            'info'  => 'La fonctionnalité RMA permet de gérer les situations où un client retourne des articles pour réparation et maintenance, ou pour un remboursement ou un remplacement.',
                            'read'  => 'Lire la politique',
                            'terms' => 'J\'ai lu et accepté la politique de retour.',
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
                    'create-rma-title' => 'Créer une RMA',
                    'reason-title'     => 'Raisons',
                    'rma-title'        => 'Toutes les RMA',
                ],

                'all-rma' => [
                    'index' => [
                        'title' => 'Toutes les RMA',

                        'datagrid' => [
                            'create'        => 'Créé le',
                            'customer-name' => 'Nom du client',
                            'id'            => 'ID de RMA',
                            'order-ref'     => 'Référence de commande',
                            'order-status'  => 'Statut de commande',
                            'rma-status'    => 'Statut de RMA',
                        ],
                    ],

                    'view' => [
                        'add-attachments'        => 'Ajouter des pièces jointes',
                        'additional-information' => 'Informations supplémentaires:',
                        'attachment'             => 'Pièce jointe',
                        'change-status'          => 'Changer de statut',
                        'confirm-print'          => 'Cliquez sur OK pour imprimer le RMA',
                        'conversations'          => 'Conversations',
                        'customer-details'       => 'Détails du client',
                        'customer-email'         => 'Email du client:',
                        'customer'               => 'Client:',
                        'enter-message'          => 'Entrer un message',
                        'images'                 => 'Image:',
                        'no-record'              => 'Aucun enregistrement trouvé!',
                        'order-date'             => 'Date de la commande:',
                        'order-details'          => 'Article(s) demandé(s) pour RMA',
                        'order-id'               => 'ID de commande:',
                        'order-status'           => 'Statut de la commande:',
                        'order-total'            => 'Total de la commande:',
                        'request-on'             => 'Demande faite le:',
                        'resolution-type'        => 'Type de résolution:',
                        'rma-status'             => 'Statut de RMA:',
                        'save-btn'               => 'Sauvegarder',
                        'send-message-btn'       => 'Envoyer le message',
                        'send-message-success'   => 'Message envoyé avec succès.',
                        'send-message'           => 'Envoyer le message',
                        'status'                 => 'Statut',
                        'title'                  => 'RMA',
                        'update-success'         => 'Statut RMA mis à jour avec succès.',
                        'view-title'             => 'RMA',
                    ],
                ],

                'rma-status' => [
                    'index' => [
                        'create-btn' => 'Créer un statut RMA',
                        'title'      => 'Statut RMA',

                        'datagrid' => [
                            'created-at'          => 'Créé le',
                            'delete-success'      => 'Statut RMA supprimé avec succès.',
                            'disabled'            => 'Inactif',
                            'enabled'             => 'Actif',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Statut RMA sélectionné supprimé avec succès.',
                            'reason-error'        => 'Le statut RMA est utilisé dans le RMA.',
                            'reason'              => 'Statut RMA',
                            'status'              => 'Statut',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Ajouter un nouveau statut RMA',
                        'reason'       => 'Statut RMA',
                        'save-btn'     => 'Enregistrer le statut RMA',
                        'status'       => 'Statut',
                        'success'      => 'Statut RMA créé avec succès.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Modifier le statut RMA',
                        'mass-update-success' => 'Statut RMA sélectionné mis à jour avec succès.',
                        'reason'              => 'Statut RMA',
                        'save-btn'            => 'Enregistrer le statut RMA',
                        'status'              => 'Statut',
                        'success'             => 'Statut RMA mis à jour avec succès.',
                    ],
                ],

                'reasons' => [
                    'index' => [
                        'create-btn' => 'Créer une raison RMA',
                        'title'      => 'Raisons',

                        'datagrid' => [
                            'created-at'          => 'Créé le',
                            'delete-success'      => 'Raison supprimée avec succès.',
                            'disabled'            => 'Désactivé',
                            'enabled'             => 'Activé',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Données sélectionnées supprimées avec succès',
                            'reason-error'        => 'La raison est utilisée dans RMA.',
                            'reason'              => 'Raison',
                            'status'              => 'Statut',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Ajouter une nouvelle raison',
                        'reason'       => 'Raison',
                        'save-btn'     => 'Enregistrer la raison',
                        'status'       => 'Statut',
                        'success'      => 'Raison créée avec succès.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Modifier la raison',
                        'mass-update-success' => 'Raisons sélectionnées mises à jour avec succès.',
                        'reason'              => 'Raison',
                        'save-btn'            => 'Enregistrer la raison',
                        'status'              => 'Statut',
                        'success'             => 'Raison mise à jour avec succès.',
                    ],
                ],

                'custom-field' => [
                    'index' => [
                        'create-btn' => 'Ajouter un nouveau champ',
                        'title'      => 'Champs personnalisés RMA',

                        'datagrid' => [
                            'created-at'          => 'Créé le',
                            'delete-success'      => 'Champs personnalisés supprimés avec succès.',
                            'disabled'            => 'Inactif',
                            'enabled'             => 'Actif',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Données sélectionnées supprimées avec succès',
                            'status'              => 'Statut',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'Nouveau champ personnalisé',
                        'save-btn'     => 'Enregistrer le champ personnalisé',
                        'status'       => 'Statut',
                        'success'      => 'Champ personnalisé créé avec succès.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Modifier le champ personnalisé',
                        'mass-update-success' => 'Champs personnalisés sélectionnés mis à jour avec succès.',
                        'reason'              => 'Champ personnalisé',
                        'save-btn'            => 'Enregistrer le champ personnalisé',
                        'status'              => 'Statut',
                        'success'             => 'Champ personnalisé mis à jour avec succès.',
                    ],
                ],

                'rules' => [
                    'index' => [
                        'create-btn' => 'Créer des règles RMA',
                        'title'      => 'Règles RMA',

                        'datagrid' => [
                            'delete-success'      => 'Règles RMA supprimées avec succès.',
                            'disabled'            => 'Inactif',
                            'enabled'             => 'Actif',
                            'exchange-period'     => 'Période d\'échange (jours)',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'Données sélectionnées supprimées avec succès.',
                            'reason'              => 'Règles',
                            'return-period'       => 'Période de retour (jours)',
                            'status'              => 'Statut',
                        ],
                    ],

                    'create' => [
                        'create-title'       => 'Ajouter de nouvelles règles RMA',
                        'reason'             => 'Règles RMA',
                        'rule-description'   => 'Description des règles',
                        'rule-details'       => 'Détails des règles',
                        'resolutions-period' => 'Période de résolution',
                        'rules-title'        => 'Titre des règles',
                        'save-btn'           => 'Enregistrer les règles RMA',
                        'status'             => 'Statut RMA',
                        'success'            => 'Règles RMA créées avec succès.',
                    ],

                    'edit' => [
                        'edit-title'          => 'Modifier les règles RMA',
                        'mass-update-success' => 'Règles RMA sélectionnées mises à jour avec succès.',
                        'reason'              => 'Règles RMA',
                        'save-btn'            => 'Mettre à jour les règles RMA',
                        'status'              => 'Statut',
                        'success'             => 'Règles RMA mises à jour avec succès.',
                    ],
                ],

                'create-rma' => [
                    'create-success'           => 'RMA créée avec succès.',
                    'create-title'             => 'Créer une RMA',
                    'email'                    => 'E-mail',
                    'image'                    => 'Image',
                    'invalid-order-id'         => 'ID de commande invalide',
                    'mismatch'                 => 'ID de commande et e-mail ne correspondent pas',
                    'new-rma'                  => 'Nouvelle RMA',
                    'order-id'                 => 'ID de commande',
                    'quantity'                 => 'Quantité',
                    'reason'                   => 'Raison',
                    'rma-already-exist'        => 'La RMA existe déjà',
                    'rma-not-available-quotes' => 'Article non disponible pour RMA',
                    'save-btn'                 => 'Enregistrer',
                    'search'                   => '--Sélectionner--',
                    'validate'                 => 'Valider',
                ],
            ],

            'invoice' => [
                'create' => [
                    'rma_has_been_created' => 'La RMA a été créée',
                    'rma-created-message'  => 'Une demande RMA est disponible pour le produit avec une quantité de :qty'
                ],
            ],
        ],

        'acl' => [
            'delete'      => 'Supprimer',
            'edit'        => 'Modifier',
            'mass-delete' => 'Suppression en masse',
            'mass-update' => 'Mise à jour en masse',
            'title'       => 'RMA',
        ],
    ],

    'shop' => [
        'customer' => [
            'delivered'    => 'Livré',
            'menu-name'    => 'RMA',
            'offer'        => 'Jusquà 40% de réduction sur votre 1ère commande',
            'rma-qty'      => 'Quantité RMA',
            'shop-now'     => 'ACHETER MAINTENANT',
            'submit-req'   => 'Soumettre la demande',
            'title'        => 'RMA',
            'undelivered'  => 'Non livré',

            'create' => [
                'cancel'                   => 'Annuler',
                'create-btn'               => 'Enregistrer',
                'enter-order-id'           => 'Entrer l\'ID de la commande',
                'heading'                  => 'Nouvelle demande RMA',
                'exchange-window'          => 'Fenêtre d\'échange',
                'image'                    => 'Image',
                'images'                   => 'Images',
                'information'              => 'Informations supplémentaires',
                'item-ordered'             => 'Article commandé',
                'no-record'                => 'Aucun enregistrement trouvé !',
                'not-allowed'              => 'RMA n\'est pas autorisé pour les commandes en attente',
                'order-status'             => 'Statut de la commande',
                'orders'                   => 'Commandes',
                'price'                    => 'Prix',
                'product-name'             => 'Nom du produit',
                'product'                  => 'Produit',
                'quantity'                 => 'Quantité',
                'reason'                   => 'Raison',
                'reopen-request'           => 'Rouvrir la demande',
                'resolution'               => 'Sélectionner la résolution',
                'return-window'            => 'Fenêtre de Retour',
                'rma-not-available-quotes' => 'Article non disponible pour RMA',
                'save'                     => 'Enregistrer',
                'search-order'             => 'Rechercher une commande',
                'sku'                      => 'SKU',
            ],
        ],

        'guest' => [
            'view' => [
                'close-rma'    => 'Fermer RMA :',
                'order-status' => 'Statut de la commande :',
                'rma-status'   => 'Statut RMA :',
                'title'        => 'RMA',
            ],

            'create' => [
                'cancel'                   => 'Annuler',
                'create-btn'               => 'Enregistrer',
                'enter-order-id'           => 'Entrer l\'ID de la commande',
                'heading'                  => 'Nouvelle demande RMA',
                'image'                    => 'Image',
                'images'                   => 'Images',
                'information'              => 'Informations supplémentaires',
                'item-ordered'             => 'Article commandé',
                'not-allowed'              => 'RMA n\'est pas autorisé pour les commandes en attente',
                'order-status'             => 'Statut de la commande',
                'orders'                   => 'Commandes',
                'price'                    => 'Prix',
                'product-name'             => 'Nom du produit',
                'product'                  => 'Produit',
                'quantity'                 => 'Quantité',
                'reason'                   => 'Raison',
                'reopen-request'           => 'Rouvrir la demande',
                'resolution'               => 'Sélectionner la résolution',
                'rma-not-available-quotes' => 'Article non disponible pour RMA',
                'save'                     => 'Enregistrer',
                'search-order'             => 'Rechercher une commande',
                'sku'                      => 'SKU',
                'title'                    => 'RMA',
            ],

            'index' => [
                'create'  => 'Demander un nouveau RMA',
                'delete'  => 'Supprimer',
                'edit'    => 'Modifier',
                'guest'   => 'Panneau RMA invité',
                'heading' => 'Panneau RMA invité',
                'update'  => 'Mettre à jour',
                'view'    => 'Voir',
            ],
        ],

        'customer-rma-index' => [
            'create'  => 'Créer',
            'delete'  => 'Supprimer',
            'edit'    => 'Modifier',
            'guest'   => 'Panneau RMA invité',
            'heading' => 'RMA',
            'update'  => 'Mettre à jour',
            'view'    => 'Voir',
        ],

        'validation' => [
            'close-rma'     => 'Confirmer',
            'information'   => 'Informations supplémentaires',
            'order-id'      => 'Sélection de la commande',
            'order-status'  => 'Statut de la commande',
            'orders'        => 'Commandes',
            'resolution'    => 'Résolution',
            'select-orders' => 'Sélectionner une commande',
        ],

        'conversation-texts' => [
            'by'        => 'Par',
            'customer'  => 'Client',
            'no-record' => 'Aucun enregistrement trouvé !',
            'on'        => 'Le',
            'seller'    => 'Vendeur',
        ],

        'default-option' => [
            'others'              => 'Autres',
            'please-select-value' => 'Veuillez sélectionner une valeur',
            'select-order-status' => 'Sélectionner le statut de la commande',
            'select-order'        => 'Sélectionner la commande',
            'select-quantity'     => 'Sélectionner la quantité',
            'select-reason'       => 'Sélectionner une raison',
            'select-resolution'   => 'Sélectionner la résolution',
            'select-seller'       => 'Sélectionner le vendeur',
        ],

        'view-customer-rma' => [
            'additional-information'  => 'Informations supplémentaires :',
            'admin'                   => 'Admin',
            'cancel-order'            => 'Annuler la commande',
            'change-rma-status'       => 'Changer le statut RMA',
            'close-rma'               => 'Fermer RMA :',
            'conversations'           => 'Conversations',
            'guest'                   => 'Invité',
            'heading'                 => 'Détails RMA',
            'images'                  => 'Images :',
            'items-request'           => 'Articles demandés pour RMA',
            'items-requested-for-rma' => 'Articles demandés pour RMA',
            'order-id'                => 'ID de commande :',
            'refund-details'          => 'Détails de remboursement',
            'refund-offline-btn'      => 'Remboursement hors ligne',
            'refundable-amount'       => 'Montant remboursable',
            'resolution-type'         => 'Type de résolution :',
            'rma'                     => 'RMA',
            'save-btn'                => 'Enregistrer',
            'send-message-btn'        => 'Envoyer',
            'send-message'            => 'Envoyer un message',
            'status-details'          => 'Détails du statut',
            'status-quotes'           => 'Veuillez accepter pour marquer comme résolu',
            'status-reopen'           => 'Cochez pour rouvrir',
            'status'                  => 'Statut',
            'term'                    => 'Accepter le champ de marquage est obligatoire',
            'you'                     => 'Admin',
        ],

        'view-guest-rma' => [
            'additional-information' => 'Informations supplémentaires :',
            'admin'                  => 'Admin',
            'close-rma'              => 'Fermer RMA',
            'conversations'          => 'Conversations',
            'guest'                  => 'Vous',
            'images'                 => 'Images',
            'items-request'          => 'Articles demandés pour RMA',
            'order-id'               => 'ID de commande :',
            'refund-offline-btn'     => 'Remboursement hors ligne',
            'resolution-type'        => 'Type de résolution :',
            'rma'                    => 'RMA',
            'save-btn'               => 'Enregistrer',
            'send-message-btn'       => 'Envoyer',
            'send-message'           => 'Envoyer un message',
            'status-details'         => 'Détails du statut',
            'status-quotes'          => 'Veuillez accepter pour marquer comme résolu.',
            'status'                 => 'Statut',
            'term'                   => 'Accepter le champ de marquage est obligatoire',
        ],

        'view-guest-rma-content' => [
            'full-amount'  => 'Montant total',
            'order-status' => 'Statut de la commande :',
            'request-on'   => 'Demande le :',
            'rma-status'   => 'Statut RMA :',
        ],

        'view-customer-rma-content' => [
            'admin-status'            => 'Statut Admin :',
            'close-rma'               => 'Fermer RMA',
            'consignment-no'          => 'Numéro de consignation :',
            'enter-message'           => 'Saisir un message',
            'full-amount'             => 'Montant total',
            'order-details'           => 'Détails de la commande',
            'order-status'            => 'Statut de la commande :',
            'partial-amount'          => 'Montant partiel',
            'refundable-amount'       => 'Montant remboursable :',
            'request-on'              => 'Demande le :',
            'rma-status'              => 'Statut RMA :',
            'seller'                  => 'Vendeur',
            'total-refundable-amount' => 'Montant total remboursable :',
        ],

        'table-heading' => [
            'image'           => 'Image',
            'product-name'    => 'Nom du produit',
            'sku'             => 'SKU',
            'price'           => 'Prix',
            'rma-qty'         => 'Quantité RMA',
            'order-qty'       => 'Quantité commandée',
            'resolution-type' => 'Type de résolution',
            'reason'          => 'Raison',
        ],

        'guest-users' => [
            'button-text' => 'Se connecter',
            'email'       => 'Email',
            'heading'     => 'Panneau de connexion invité',
            'logout'      => 'Déconnexion invité',
            'order-id'    => 'ID de commande',
            'title'       => 'Connexion invité',
        ],
    ],

    'mail' => [
        'customer-rma-create' => [
            'additional-information' => 'Informations supplémentaires :',
            'greeting'               => 'Vous avez demandé un nouveau RMA pour la commande :order_id.',
            'heading'                => 'Demande de RMA',
            'hello'                  => 'Cher :name',
            'order-id'               => 'ID de la commande :',
            'order-status'           => 'Statut de la commande :',
            'requested-rma-product'  => 'Produit demandé pour RMA :',
            'resolution-type'        => 'Type de résolution :',
            'rma-id'                 => 'ID RMA :',
            'summary'                => 'Résumé du RMA de la commande',
            'thank-you'              => 'Merci',
        ],

        'customer-data-table-heading' => [
            'product-name' => 'Nom du produit',
            'qty'          => 'Quantité',
            'reason'       => 'Raison',
            'sku'          => 'SKU',
        ],

        'customer-conversation' => [
            'heading' => 'Cher :name',
            'message' => 'Message',
            'quotes'  => 'Il y a un nouveau message du client',
            'process' => 'Votre demande de retour est en cours de traitement.',
            'solved'  => 'Le statut RMA a été changé en Résolu par le client.',
        ],

        'seller-conversation' => [
            'heading' => 'Cher :name',
            'message' => 'Message',
            'quotes'  => 'Il y a un nouveau message de l’administrateur',
            'title'   => 'Message reçu !',
        ],

        'status' => [
            'heading'       => 'Cher :name',
            'quotes'        => 'Le statut de votre RMA a été modifié par le vendeur',
            'rma-id'        => 'ID RMA',
            'status-change' => ':id a été modifié par le vendeur',
            'status'        => 'Statut',
            'title'         => 'Statut mis à jour !',
            'your-rma-id'   => 'Votre ID RMA',
        ],
    ],

    'status' => [
        'status-name' => [
            'accept'                   => 'Accepté',
            'awaiting'                 => 'En attente',
            'canceled'                 => 'Annulé',
            'declined'                 => 'Refusé',
            'dispatched-package'       => 'Colis expédié',
            'item-canceled'            => 'Article annulé',
            'not-received-package-yet' => 'Colis non encore reçu',
            'pending'                  => 'En attente',
            'processing'               => 'En cours de traitement',
            'received-package'         => 'Colis reçu',
            'solved'                   => 'Résolu',
        ],

        'status-quotes' => [
            'declined-admin'  => 'Le RMA a été refusé par l\'administrateur.',
            'declined-buyer'  => 'Le RMA a été refusé par l\'acheteur.',
            'solved-by-admin' => 'Le RMA a été résolu par l\'administrateur.',
            'solved'          => 'Le RMA a été résolu.',
        ],
    ],

    'response' => [
        'already-cancel'    => 'Le statut RMA a déjà été annulé.',
        'cancel-success'    => 'Le statut RMA a été annulé avec succès.',
        'create-success'    => 'Demande créée avec succès.',
        'creation-error'    => "Le statut RMA ne peut pas être mis à jour car la facture pour cette commande n'a pas été créée.",
        'permission-denied' => 'Vous êtes connecté',
        'rma-disabled'      => 'Le RMA est désactivé pour ce produit',
        'send-message'      => ':name envoyé avec succès.',
        'update-success'    => ':name mis à jour avec succès.',
        'please-select-the-item' => 'Veuillez sélectionner l’article',

    ],
];