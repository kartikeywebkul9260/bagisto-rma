<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'sales' => [
                    'rma' => [
                        'afternoon'                           => 'දවල්',
                        'all-products'                        => 'සියලුම නිෂ්පාදන',
                        'all-status'                          => 'සියලුම තත්ත්වයන්',
                        'allow-new-request-for-pending-order' => 'අපේක්ෂිත ඇණවුම සඳහා නව RMA ඉල්ලීමකට අවසර දීම',
                        'allow-rma-for-digital-product'       => 'ඩිජිටල් නිෂ්පාදනයකට RMA වලට අවසර දීම',
                        'allowed-file-extension'              => 'අනුමත කළ ගොනු විස්තාරණය',
                        'allowed-file-types'                  => 'කරුණාකර ' . core()->getConfigData('sales.rma.setting.allowed-file-extension') . ' පමණක් තෝරන්න',
                        'allowed-info'                        => 'අලංකාරක සලකුණු එක්ක වෙන් කළා. උදාහරණයක්: jpg,jpeg,pdf',
                        'allowed-request-cancelled-request'   => 'අවලංගු කළ ඉල්ලීම සඳහා නව RMA ඉල්ලීමකට අවසර දීම',
                        'allowed-request-declined-request'    => 'ප්‍රතික්ෂේප කළ ඉල්ලීම සඳහා නව RMA ඉල්ලීමකට අවසර දීම',
                        'allowed-rma-for-product'             => 'නිෂ්පාදනයකට RMA සඳහා අවසර දීම',
                        'cancel-items'                        => 'අයිතම අහෝසි කරන්න',
                        'complete'                            => 'සම්පූර්ණයි',
                        'current-order-quantity'              => 'වත්මන් ඇණවුම් ප්‍රමාණය',
                        'days-info'                           => 'නවතම ඇණවුමක් සිදු කළ පසු පාරිභෝගිකයාට RMA ඉල්ලා සිටිය හැකි දින ගණන.',
                        'default-allow-days'                  => 'පෙරනිමියෙන් අනුමත කරන දින',
                        'enable'                              => 'RMA සක්‍රීය කරන්න',
                        'evening'                             => 'සන්ධ්‍යාව',
                        'exchange'                            => 'හුවමාරුව',
                        'info'                                => 'RMA යනු ආපසු ලැබීම්, මාරු හෝ අලුත්වැඩියා සඳහා සමාගමේ නිෂ්පාදන ආපසු ලබා දීමේ ක්‍රියාවලියේ අංගයකි.',
                        'morning'                             => 'උදෑසන',
                        'new-rma-message-to-customer'         => 'පාරිභෝගිකයාට නව RMA පණිවිඩය',
                        'no'                                  => 'නැත',
                        'open'                                => 'විවෘත කරන්න',
                        'package-condition'                   => 'පැකේජයේ තත්වය',
                        'packed'                              => 'පැකේජයක් කරන ලදි',
                        'print-page'                          => 'මුද්‍රිත පිටුව',
                        'product-already-raw'                 => 'නිෂ්පාදනය දැනටමත් RMA තුළ පවතී.',
                        'product-delivery-status'             => 'නිෂ්පාදන බෙදාහැරීමේ තත්ත්වය',
                        'resolution-type'                     => 'පිළිතුරු වර්ගය',
                        'return-pickup-address'               => 'ආපසු ලබාගැනීමේ ලිපිනය',
                        'return-pickup-time'                  => 'ආපසු ලබාගැනීමේ වේලාව',
                        'return-policy'                       => 'ආපසු ලබාගැනීමේ ප්‍රතිපත්තිය',
                        'return'                              => 'ආපසු ලබාගැනීම',
                        'select-allowed-order-status'         => 'අනුමත කරන ලද ඇණවුම් තත්ත්වය තෝරන්න',
                        'specific-products'                   => 'පිළිබඳ නිෂ්පාදන',
                        'title'                               => 'RMA',
                        'yes'                                 => 'ඔව්',

                        'setting' => [
                            'info'  => 'RMA ක්‍රියාත්මකයේදී, මූලිකව ලැබුණු කාලයේදී පවා ප්‍රමාද හෝ නැවුම්කරුවන්ට සම්බන්ධතා කළ හැකිය.',
                            'read'  => 'ප්රතිපත්තිය කියවන්න',
                            'terms' => 'මම ප්රතිප්‍රේෂණ ප්රතිපත්තිය කියවා පිළිගෙන ඇත.',
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
                    'rma-title'        => 'සියලු අපසුම් ඉඟි',
                    'reason-title'     => 'හේතුවෙන්',
                    'create-rma-title' => 'අපසුම් ඉඟි නිර්මාණය කරන්න',
                ],

                'all-rma' => [
                    'index' => [
                        'title' => 'සියලු අපසුම් ඉඟි',

                        'datagrid' => [
                            'id'            => 'අපසුම් ID',
                            'order-ref'     => 'ඇණවුම් සම්බන්ධය',
                            'customer-name' => 'පාරිභෝගික නම',
                            'rma-status'    => 'අපසුම් තත්වය',
                            'order-status'  => 'ඇණවුම් තත්වය',
                            'create'        => 'නිර්මාණය කරන ලද දිනය',
                        ],
                    ],

                    'view' => [
                        'add-attachments'        => 'අමුණන ලිපි එකතු කරන්න',
                        'additional-information' => 'අමතර තොරතුරු:',
                        'attachment'             => 'අමුණන ලිපි',
                        'change-status'          => 'තත්ත්වය වෙනස් කරන්න',
                        'confirm-print'          => 'RMA මුද්‍රණය කිරීමට OK ක්ලික් කරන්න',
                        'conversations'          => 'කතාබහ',
                        'customer-details'       => 'පාරිභෝගික විස්තර',
                        'customer-email'         => 'පාරිභෝගික විද්‍යුත් තැපෑල:',
                        'customer'               => 'පාරිභෝගික:',
                        'enter-message'          => 'පණිවිඩය ඇතුළත් කරන්න',
                        'images'                 => 'පිංතූරය:',
                        'no-record'              => 'වාර්තාවක් හමු නොවීය!',
                        'order-date'             => 'ඇණවුම් දිනය:',
                        'order-details'          => 'RMA සඳහා ඉල්ලුම් කරන ලද අයිතම(යන්)',
                        'order-id'               => 'ඇණවුම් අංකය:',
                        'order-status'           => 'ඇණවුම් තත්ත්වය:',
                        'order-total'            => 'මුළු ඇණවුම:',
                        'request-on'             => 'ඉල්ලුම සකස් කළ දිනය:',
                        'resolution-type'        => 'විසඳුම් වර්ගය:',
                        'rma-status'             => 'RMA තත්ත්වය:',
                        'save-btn'               => 'සුරකින්න',
                        'send-message-btn'       => 'පණිවිඩය එවන්න',
                        'send-message-success'   => 'පණිවිඩය සාර්ථකව යවනු ලැබුණි.',
                        'send-message'           => 'පණිවිඩය එවන්න',
                        'status'                 => 'තත්ත්වය',
                        'title'                  => 'RMA',
                        'update-success'         => 'RMA තත්ත්වය සාර්ථකව යාවත්කාලීන කරන ලදි.',
                        'view-title'             => 'RMA',
                    ],
                ],

                'rma-status' => [
                    'index' => [
                        'create-btn' => 'RMA තත්ත්වය සාදන්න',
                        'title'      => 'RMA තත්ත්වය',

                        'datagrid' => [
                            'created-at'          => 'සෑදී තිබෙන දිනය',
                            'delete-success'      => 'RMA තත්ත්වය සාර්ථකව මැකීම.',
                            'disabled'            => 'නොවැඩි',
                            'enabled'             => 'සක්‍රීය',
                            'id'                  => 'අයි.ඩී.',
                            'mass-delete-success' => 'තෝරාගත් RMA තත්ත්වය සාර්ථකව මැකීම.',
                            'reason-error'        => 'RMA තත්ත්වය RMA හි භාවිතා වේ.',
                            'reason'              => 'RMA තත්ත්වය',
                            'status'              => 'තත්ත්වය',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'නව RMA තත්ත්වය එකතු කරන්න',
                        'reason'       => 'RMA තත්ත්වය',
                        'save-btn'     => 'RMA තත්ත්වය සුරකින්න',
                        'status'       => 'තත්ත්වය',
                        'success'      => 'RMA තත්ත්වය සාර්ථකව නිර්මාණය විය.',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMA තත්ත්වය සංස්කරණය කරන්න',
                        'mass-update-success' => 'තෝරාගත් RMA තත්ත්වය සාර්ථකව යාවත්කාලීන කරන ලදී.',
                        'reason'              => 'RMA තත්ත්වය',
                        'save-btn'            => 'RMA තත්ත්වය සුරකින්න',
                        'status'              => 'තත්ත්වය',
                        'success'             => 'RMA තත්ත්වය සාර්ථකව යාවත්කාලීන කරන ලදී.',
                    ],
                ],

                'reasons' => [
                    'index' => [
                        'create-btn' => 'අපසුම් හේතුවක් නිර්මාණය කරන්න',
                        'title'      => 'හේතුවෙන්',

                        'datagrid' => [
                            'created-at'          => 'නිර්මාණය කරන ලද දිනය',
                            'delete-success'      => 'හේතුව සාර්ථකව ඉවත් කරන ලදි.',
                            'disabled'            => 'අක්‍රිය කරන ලදි',
                            'enabled'             => 'සක්‍රිය කරන ලදි',
                            'id'                  => 'ID',
                            'mass-delete-success' => 'තෝරාගත් දත්ත සාර්ථකව ඉවත් කරන ලදි.',
                            'reason-error'        => 'මෙම හේතුව අපසුම් වෙත භාවිතා කරනු ලබන්න.',
                            'reason'              => 'හේතුව',
                            'status'              => 'තත්වය',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'නව හේතුවක් එකතු කරන්න',
                        'reason'       => 'හේතුව',
                        'save-btn'     => 'හේතුව ඉතිරි කරන්න',
                        'status'       => 'තත්වය',
                        'success'      => 'හේතුව සාර්ථකව නිර්මාණය කරන ලදි.',
                    ],

                    'edit' => [
                        'edit-title'          => 'හේතුව සංස්කරණය කරන්න',
                        'mass-update-success' => 'තෝරාගත් හේතුවන් සාර්ථකව යාවත්කාලීන විය.',
                        'reason'              => 'හේතුව',
                        'save-btn'            => 'හේතුව ඉතිරි කරන්න',
                        'status'              => 'තත්වය',
                        'success'             => 'හේතුව සාර්ථකව යාවත්කාලීන විය.',
                    ],
                ],

                'custom-field' => [
                    'index' => [
                        'create-btn' => 'නව ක්ෂේත්‍රයක් එකතු කරන්න',
                        'title'      => 'RMA කස්ටම් ක්ෂේත්‍ර',

                        'datagrid' => [
                            'created-at'          => 'සෑදූ දිනය',
                            'delete-success'      => 'අභිරුචි ක්ෂේත්‍ර සාර්ථකව මකා දැමීම.',
                            'disabled'            => 'අක්‍රියයි',
                            'enabled'             => 'ක්‍රියාවට පත්',
                            'id'                  => 'හැඳුනුම් අංකය',
                            'mass-delete-success' => 'තෝරාගත් දත්ත සාර්ථකව මකා දැමීය',
                            'status'              => 'තත්ත්වය',
                        ],
                    ],

                    'create' => [
                        'create-title' => 'නව අභිරුචි ක්ෂේත්‍රය',
                        'save-btn'     => 'අභිරුචි ක්ෂේත්‍රය සුරකින්න',
                        'status'       => 'තත්ත්වය',
                        'success'      => 'අභිරුචි ක්ෂේත්‍රය සාර්ථකව සාදන ලදී.',
                    ],

                    'edit' => [
                        'edit-title'          => 'අභිරුචි ක්ෂේත්‍රය සංස්කරණය කරන්න',
                        'mass-update-success' => 'තෝරාගත් අභිරුචි ක්ෂේත්‍ර සාර්ථකව යාවත්කාලීන කරන ලදී.',
                        'reason'              => 'අභිරුචි ක්ෂේත්‍රය',
                        'save-btn'            => 'අභිරුචි ක්ෂේත්‍රය සුරකින්න',
                        'status'              => 'තත්ත්වය',
                        'success'             => 'අභිරුචි ක්ෂේත්‍රය සාර්ථකව යාවත්කාලීන කරන ලදී.',
                    ],
                ],

                'rules' => [
                    'index' => [
                        'create-btn' => 'RMA නීති සාදන්න',
                        'title'      => 'RMA නීති',

                        'datagrid' => [
                            'delete-success'      => 'RMA නීති සාර්ථකව මකා ඇත.',
                            'disabled'            => 'ක්‍රියා විරහිතයි',
                            'enabled'             => 'ක්‍රියාත්මකයි',
                            'exchange-period'     => 'හුවමාරු කාලය (දින)',
                            'id'                  => 'හැඳුනුම් අංකය',
                            'mass-delete-success' => 'තෝරාගත් දත්ත සාර්ථකව මකා ඇත.',
                            'reason'              => 'නීති',
                            'return-period'       => 'ආපසු ගැනීම් කාලය (දින)',
                            'status'              => 'තත්ත්වය',
                        ],
                    ],

                    'create' => [
                        'create-title'       => 'නව RMA නීති එකතු කරන්න',
                        'reason'             => 'RMA නීති',
                        'resolutions-period' => 'විසඳුම් කාලය',
                        'rule-description'   => 'නීති විස්තරය',
                        'rule-details'       => 'නීති විස්තර',
                        'rules-title'        => 'නීති මාතෘකාව',
                        'save-btn'           => 'RMA නීති සුරකින්න',
                        'status'             => 'RMA තත්ත්වය',
                        'success'            => 'RMA නීති සාර්ථකව නිර්මාණය කරන ලදි.',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMA නීති සංස්කරණය කරන්න',
                        'mass-update-success' => 'තෝරාගත් RMA නීති සාර්ථකව යාවත්කාලීන කරන ලදි.',
                        'reason'              => 'RMA නීති',
                        'save-btn'            => 'RMA නීති යාවත්කාලීන කරන්න',
                        'status'              => 'තත්ත්වය',
                        'success'             => 'RMA නීති සාර්ථකව යාවත්කාලීන කරන ලදි.',
                    ],
                ],

                'create-rma' => [
                    'create-success'           => 'අපසුම් ඉඟි සාර්ථකව නිර්මාණය කරන ලදි.',
                    'create-title'             => 'අපසුම් ඉඟි නිර්මාණය කරන්න',
                    'email'                    => 'ඊමේල්',
                    'image'                    => 'රූපය',
                    'invalid-order-id'         => 'අවලංගු ඇණවුම් අංකය',
                    'mismatch'                 => 'ඇණවුම් අංකය සහ ඊමේල් නොගැලපේ',
                    'new-rma'                  => 'නව අපසුම් ඉඟි',
                    'order-id'                 => 'ඇණවුම් අංකය',
                    'quantity'                 => 'ප්‍රමාණය',
                    'reason'                   => 'හේතුව',
                    'rma-already-exist'        => 'අපසුම් ඉඟි දැනටමත් පවතී',
                    'rma-not-available-quotes' => 'මෙම අයිතමය සම්බන්ධ සඳහා අපසුම් ඉඟි යාම් නොවේ',
                    'save-btn'                 => 'සුරක්ෂිත කරන්න',
                    'search'                   => '--තෝරන්න--',
                    'validate'                 => 'වලංගු කරන්න',
                ],
            ],

            'invoice' => [
                'create' => [
                    'rma_has_been_created' => 'අපසුම් ඉඟි සාර්ථකව නිර්මාණය කරන ලදි',
                    'rma-created-message'  => ':qty ප්‍රමාණයකින් සමන්විත නිෂ්පාදනය සඳහා RMA ඉල්ලීම ලබා ගත හැක'
                ],
            ],
        ],

        'acl' => [
            'delete'      => 'මකන්න',
            'edit'        => 'සංස්කරණය',
            'mass-delete' => 'බාගත මකා දමන්න',
            'mass-update' => 'බාගත යාවත්කාලීනය',
            'title'       => 'අපසුම් ඉඟි',
        ],
    ],

    'shop' => [
        'customer' => [
            'delivered'    => 'භාර දුන්නා',
            'menu-name'    => 'RMA',
            'offer'        => 'ඔබගේ 1 වන ඇණවුම අනුපිළිවෙලින් තවත් 40% දිනයක් ලබා ගන්න',
            'rma-qty'      => 'RMA ප්රමාණය',
            'shop-now'     => 'හවුල් කරන්න',
            'submit-req'   => 'ඉල්ලීම යොමු කරන්න',
            'title'        => 'RMA',
            'undelivered'  => 'භාර නොදුන්නා',

            'create' => [
                'cancel'                   => 'අවලංගු කිරීම',
                'create-btn'               => 'සුරකින්න',
                'enter-order-id'           => 'ඇණවුම් අංකය ඇතුළත් කරන්න',
                'heading'                  => 'නව RMA ඉල්ලීම',
                'exchange-window'          => 'අදාන පනුව',
                'image'                    => 'ඡායාරූප',
                'images'                   => 'ඡායාරූප',
                'information'              => 'අත්තිකාරම්',
                'item-ordered'             => 'ඇණවුම් කරන ලද අයිතමය',
                'no-record'                => 'වාර්තාවන් නොමැත!',
                'not-allowed'              => 'අක්‍රිය වූ ඇණවුමට RMA ඉල්ලීමක් නොදක්වයි',
                'order-status'             => 'ඇණවුම් තත්ත්වය',
                'orders'                   => 'ඇණවුම්',
                'price'                    => 'මිල',
                'product-name'             => 'නිෂ්පාදන නාමය',
                'product'                  => 'නිෂ්පාදනය',
                'quantity'                 => 'ප්‍රමාණය',
                'reason'                   => 'හේතුව',
                'reopen-request'           => 'නැවත ඉවත්වීම ඉල්ලීම',
                'resolution'               => 'විශේෂාංගය තෝරන්න',
                'return-window'            => 'ආපසු භාරගන්නා කවුළුව', 
                'rma-not-available-quotes' => 'අයිතමය RMA සඳහා ලබා දුන් නැත',
                'save'                     => 'සුරකින්න',
                'search-order'             => 'ඇණවුම සොයන්න',
                'sku'                      => 'SKU',
            ],
        ],

        'guest' => [
            'view' => [
                'close-rma'    => 'RMA වසා දමන්න :',
                'order-status' => 'ඇණවුම් තත්ත්වය :',
                'rma-status'   => 'RMA තත්ත්වය :',
                'title'        => 'RMA',
            ],

            'create' => [
                'cancel'                   => 'අවලංගු කිරීම',
                'create-btn'               => 'සුරකින්න',
                'enter-order-id'           => 'ඇණවුම් අංකය ඇතුළත් කරන්න',
                'heading'                  => 'නව RMA ඉල්ලීම',
                'image'                    => 'ඡායාරූප',
                'images'                   => 'ඡායාරූප',
                'information'              => 'අත්තිකාරම්',
                'item-ordered'             => 'ඇණවුම් කරන ලද අයිතමය',
                'not-allowed'              => 'අක්‍රිය වූ ඇණවුමට RMA ඉල්ලීමක් නොදක්වයි',
                'order-status'             => 'ඇණවුම් තත්ත්වය',
                'orders'                   => 'ඇණවුම්',
                'price'                    => 'මිල',
                'product-name'             => 'නිෂ්පාදන නාමය',
                'product'                  => 'නිෂ්පාදනය',
                'quantity'                 => 'ප්‍රමාණය',
                'reason'                   => 'හේතුව',
                'reopen-request'           => 'නැවත ඉවත්වීම ඉල්ලීම',
                'resolution'               => 'විශේෂාංගය තෝරන්න',
                'rma-not-available-quotes' => 'අයිතමය RMA සඳහා ලබා දුන් නැත',
                'save'                     => 'සුරකින්න',
                'search-order'             => 'ඇණවුම සොයන්න',
                'sku'                      => 'SKU',
                'title'                    => 'RMA',
            ],

            'index' => [
                'create'  => 'නව RMA ඉල්ලීමක් ඉටු කරන්න',
                'delete'  => 'මකා දමන්න',
                'edit'    => 'සංස්කරණය',
                'guest'   => 'අමාරු RMA පැනලය',
                'heading' => 'ප්‍රදේශීය RMA පැනලය',
                'update'  => 'යාවත්කාලීන',
                'view'    => 'දර්ශකය',
            ],
        ],

        'customer-rma-index' => [
            'create'  => 'සාදන්න',
            'delete'  => 'මකා දමන්න',
            'edit'    => 'සංස්කරණය',
            'guest'   => 'අමාරු RMA පැනලය',
            'heading' => 'RMA',
            'update'  => 'යාවත්කාලීන',
            'view'    => 'දර්ශකය',
        ],

        'validation' => [
            'close-rma'     => 'තහවුරු කිරීම',
            'information'   => 'අත්තිකාරම්',
            'order-id'      => 'ඇණවුම තෝරන්න',
            'order-status'  => 'ඇණවුම් තත්ත්වය',
            'orders'        => 'ඇණවුම්',
            'resolution'    => 'විශේෂාංගය',
            'select-orders' => 'ඇණවුම තෝරන්න',
        ],

        'conversation-texts' => [
            'by'        => 'කොටස්',
            'customer'  => 'ප්‍රදේශීය',
            'no-record' => 'වාර්තාවන් නොමැත!',
            'on'        => 'ඉහළ',
            'seller'    => 'විකුණුම්',
        ],

        'default-option' => [
            'others'              => 'වෙනත්',
            'please-select-value' => 'කරුණාකර අගය තෝරන්න',
            'select-order-status' => 'ඇණවුම් තත්ත්වය තෝරන්න',
            'select-order'        => 'ඇණවුම් තෝරන්න',
            'select-quantity'     => 'ප්‍රමාණය තෝරන්න',
            'select-reason'       => 'හේතුව තෝරන්න',
            'select-resolution'   => 'විශේෂාංගය තෝරන්න',
            'select-seller'       => 'විකුණුම් තෝරන්න',
        ],

        'view-customer-rma' => [
            'additional-information'  => 'අත්තිකාරම් :',
            'admin'                   => 'පරිපාලක',
            'cancel-order'            => 'ඇණවුම අවලංගු කිරීම',
            'change-rma-status'       => 'RMA තත්ත්වය වෙනස් කරන්න',
            'close-rma'               => 'RMA වසා දමන්න :',
            'conversations'           => 'සංවාද',
            'guest'                   => 'අමාරු',
            'heading'                 => 'RMA විස්තර',
            'images'                  => 'ඡායාරූප:',
            'items-request'           => 'RMA සඳහා ඉල්ලීමක් කළ අයිතම(්)',
            'items-requested-for-rma' => 'RMA සඳහා ඉල්ලීමක් කළ අයිතම(්)',
            'order-id'                => 'ඇණවුම් අංකය :',
            'refund-details'          => 'මාරු විස්තර',
            'refund-offline-btn'      => 'නොමැති මාරුව',
            'refundable-amount'       => 'මාරු කිරීම් සහතිකය',
            'resolution-type'         => 'විශේෂාංග වර්ගය :',
            'rma'                     => 'RMA',
            'save-btn'                => 'සුරකින්න',
            'send-message-btn'        => 'යවන්න',
            'send-message'            => 'පණිවිඩය යවන්න',
            'status-details'          => 'තත්ත්ව විස්තර',
            'status-quotes'           => 'එය සම්පූර්ණ කර ගැනීමට සහතිකය අවශ්‍යයි',
            'status-reopen'           => 'නැවත විවෘත කිරීමට පරීක්ෂා කරන්න',
            'status'                  => 'තත්ත්වය',
            'term'                    => 'එකඟ සමඟ එකඟ ක්‍රියාකාරක ක්‍රියාකාරක කිරීම අවශ්‍යයි',
            'you'                     => 'පපුවක්',
        ],

        'view-guest-rma' => [
            'additional-information' => 'අත්තිකාරම් :',
            'admin'                  => 'පරිපාලක',
            'close-rma'              => 'RMA වසා දමන්න',
            'conversations'          => 'සංවාද',
            'guest'                  => 'ඔබ',
            'images'                 => 'ඡායාරූප',
            'items-request'          => 'RMA සඳහා ඉල්ලීමක් කළ අයිතම(්)',
            'order-id'               => ' ඇණවුම් අංකය :',
            'refund-offline-btn'     => 'නොමැති මාරුව',
            'resolution-type'        => 'විශේෂාංග වර්ගය :',
            'rma'                    => 'RMA',
            'save-btn'               => 'සුරකින්න',
            'send-message-btn'       => 'යවන්න',
            'send-message'           => 'පණිවිඩය යවන්න',
            'status-details'         => 'තත්ත්ව විස්තර',
            'status-quotes'          => 'එය සම්පූර්ණ කර ගැනීමට සහතිකය අවශ්‍යයි.',
            'status'                 => 'තත්ත්වය',
            'term'                   => 'එකඟ සමඟ එකඟ ක්‍රියාකාරක ක්‍රියාකාරක කිරීම අවශ්‍යයි',
        ],

        'view-guest-rma-content' => [
            'full-amount'  => 'මුදල් මූලික',
            'order-status' => 'ඇණවුම් තත්ත්වය :',
            'request-on'   => 'ඉල්ලීම අමතන්න :',
            'rma-status'   => 'RMA තත්ත්වය :',
        ],

        'view-customer-rma-content' => [
            'admin-status'            => 'පරිපාලක තත්ත්වය:',
            'close-rma'               => 'RMA වසා දමන්න',
            'consignment-no'          => 'ප්‍රදේශය අංකය:',
            'enter-message'           => 'පණිවිඩය ඇතුළත් කරන්න',
            'full-amount'             => 'මුදල් මූලික',
            'order-details'           => 'ඇණවුම විස්තර',
            'order-status'            => 'ඇණවුම් තත්ත්වය :',
            'partial-amount'          => 'අඩු මුදල්',
            'refundable-amount'       => 'මාරු කිරීම් සහතිකය:',
            'request-on'              => 'ඉල්ලීම අමතන්න :',
            'rma-status'              => 'RMA තත්ත්වය :',
            'seller'                  => 'විකුණුම්',
            'total-refundable-amount' => 'මුළු මාරු කිරීම් සහතිකය:',
        ],

        'table-heading' => [
            'image'           => 'රූපය',
            'order-qty'       => 'ඇනවුම් ප්‍රමාණය',
            'price'           => 'මිල',
            'product-name'    => 'නිෂ්පාදන නාමය',
            'reason'          => 'හේතුව',
            'resolution-type' => 'විසඳුම් වර්ගය',
            'rma-qty'         => 'RMA ප්‍රමාණය',
            'sku'             => 'SKU',
        ],

        'guest-users' => [
            'button-text' => 'ලොග් වන්න',
            'email'       => 'ඉල්ලීම',
            'heading'     => 'සැමවිටම ඇණවුම පැනල පැනල',
            'logout'      => 'අමුත්තා ලොග් අවුට්',
            'order-id'    => 'ඇණවුම අංකය',
            'title'       => 'අමාරු ලොග් වන්න',
        ],
    ],

    'mail' => [
        'customer-rma-create' => [
            'additional-information' => 'අත්තිකාරම් විස්තර:',
            'greeting'               => 'ඔබ මෙම ඇණවුම් :order_id සඳහා නව RMA ඉල්ලීමක් ඉදිරියට පිලිබදව ඇත.',
            'heading'                => 'RMA ඉල්ලීම',
            'hello'                  => 'හිතුණු :name',
            'order-id'               => 'ඇණවුම් අංකය:',
            'order-status'           => 'ඇණවුම් තත්වය:',
            'requested-rma-product'  => 'ඉල්ලීමට ඉටුකිරීමක් ප්‍රදේශය:',
            'resolution-type'        => 'විශ්වාසය වර්ගය:',
            'rma-id'                 => 'RMA අංකය:',
            'summary'                => 'ඇණවුම් සඳහා RMA සාරාංශය',
            'thank-you'              => 'ඔබට ස්තූතියි',
        ],

        'customer-data-table-heading' => [
            'product-name' => 'නිෂ්පාදන නාමය',
            'qty'          => 'ප්රමාණය',
            'reason'       => 'හේතුව',
            'sku'          => 'SKU',
        ],

        'customer-conversation' => [
            'heading' => 'හිතුණු :name,',
            'message' => 'පණිවිඩය',
            'process' => 'ඔබේ ආපසු ඉල්ලීම ක්‍රියාවලියේ පවතී.',
            'quotes'  => 'ක්ෂේත්‍රයේ නව පණිවිඩයක් ඇත',
            'solved'  => 'RMA තත්ත්වය ගනුදෙනුකරු විසින් විසඳා ඇත.',
        ],

        'seller-conversation' => [
            'heading' => 'හිතුණු :name',
            'message' => 'පණිවිඩය',
            'quotes'  => 'පරිපාලකයෙන් නව පණිවිඩයක් ඇත',
            'title'   => 'පණිවිඩය ලබා දෙන්නාවේ!',
        ],

        'status' => [
            'heading'       => 'හිතුණු :name',
            'quotes'        => 'ඔබේ RMA තත්වය විකුණන්නේ විකුණුම් විසින් වෙනස් කර ඇත',
            'rma-id'        => 'RMA අංකය',
            'status-change' => ':id වෙනස් කළ යුතුයි විකුණුම් විසින්',
            'status'        => 'තත්වය',
            'title'         => 'ස්ථානගත වීම යළියොමු!',
            'your-rma-id'   => 'ඔබගේ RMA අංකය',
        ],
    ],

    'status' => [
        'status-name' => [
            'accept'                   => 'හුවමාරු කරන්න',
            'awaiting'                 => 'මාරු කිරීමට',
            'canceled'                 => 'අවලංගු කරන ලදි',
            'declined'                 => 'ප්‍රතික්ෂේප කළ යුතුයි',
            'dispatched-package'       => 'පැකිලීම කිරීම',
            'item-canceled'            => 'අයිතමය අවලංගු කළ යුතුයි',
            'not-received-package-yet' => 'පැකේජය තවම ලබා දුන් නැත',
            'pending'                  => 'අනුමත කිරීමේදී',
            'processing'               => 'ක්‍රියාත්මක කිරීමේදී',
            'received-package'         => 'සාර්ථකව පැකිලීම',
            'solved'                   => 'විශ්වාසය සාර්ථකව පිළිබද යුතුයි',
        ],

        'status-quotes' => [
            'declined-admin'  => 'RMA පරිපාලක විසින් හරහා පහතින් පරණය කළ යුතුයි.',
            'declined-buyer'  => 'මිලදී ගැනීමේ වෙනස්කම අයිතමයේදී පරිශීලකයා වෙනස් කළ යුතුයි.',
            'solved-by-admin' => 'RMA පරිපාලක විසින් විශ්වාස කර ඇත.',
            'solved'          => 'RMA සාර්ථකව විශ්වාසය ලබා දුන් ඇත.',
        ],
    ],

    'response' => [
        'already-cancel'    => 'RMA තත්ත්වය දැනටමත් අවලංගු වී ඇත.',
        'cancel-success'    => 'RMA තත්ත්වය සාර්ථකව අවලංගු කෙරිණි.',
        'create-success'    => 'ඉල්ලීම සාර්ථකව සාදන ලදී.',
        'creation-error'    => 'RMA තත්ත්වය යාවත්කාලීන කළ නොහැක क्योंकि මෙම ඇණවුම සඳහා අයපත්‍රය තාපයට සකසා නැත.',
        'permission-denied' => 'ඔබ ලොග් වී ඇත',
        'rma-disabled'      => 'මෙම නිෂ්පාදනය සඳහා RMA අක්‍රීය කර ඇත',
        'send-message'      => ':name සාර්ථකව යවන ලදි.',
        'update-success'    => ':name සාර්ථකව යාවත්කාලීන කරන ලදි.',
    ],
];