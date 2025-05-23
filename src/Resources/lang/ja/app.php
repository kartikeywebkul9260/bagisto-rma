<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'sales' => [
                    'rma' => [
                        'afternoon'                           => '午後',
                        'all-products'                        => 'すべての製品',
                        'all-status'                          => 'すべてのステータス',
                        'allow-new-request-for-pending-order' => '保留中の注文に対する新しいRMAリクエストを許可する',
                        'allow-rma-for-digital-product'       => 'デジタル製品のRMAを許可する',
                        'allowed-file-extension'              => '許可されているファイル拡張子',
                        'allowed-file-types'                  => 'ファイルタイプ ' . core()->getConfigData('sales.rma.setting.allowed-file-extension') . ' のみを選択してください',
                        'allowed-info'                        => 'コンマで区切る。例えば: jpg,jpeg,pdf',
                        'allowed-request-cancelled-request'   => 'キャンセルされたリクエストの新しいRMAリクエストを許可する',
                        'allowed-request-declined-request'    => '拒否されたリクエストの新しいRMAリクエストを許可する',
                        'allowed-rma-for-product'             => '製品に対してRMAを許可する',
                        'cancel-items'                        => 'アイテムをキャンセル',
                        'complete'                            => '完了',
                        'current-order-quantity'              => '現在の注文数量',
                        'days-info'                           => '注文後、顧客がRMAをリクエストできる日数。',
                        'default-allow-days'                  => 'デフォルトの許可日数',
                        'enable'                              => 'RMAを有効にする',
                        'evening'                             => '夕方',
                        'exchange'                            => '交換',
                        'info'                                => 'RMAは、返金、交換、または修理を受けるために製品をビジネスに返品するプロセスの一部です。',
                        'morning'                             => '朝',
                        'new-rma-message-to-customer'         => '顧客への新しいRMAメッセージ',
                        'no'                                  => 'いいえ',
                        'open'                                => 'オープン',
                        'package-condition'                   => 'パッケージの状態',
                        'packed'                              => '梱包済み',
                        'print-page'                          => 'ページを印刷',
                        'product-already-raw'                 => '製品はすでにRMAにあります。',
                        'product-delivery-status'             => '製品の配送状況',
                        'resolution-type'                     => '解決方法の種類',
                        'return-pickup-address'               => '返品の受け取り先住所',
                        'return-pickup-time'                  => '返品の受け取り時間',
                        'return-policy'                       => '返品ポリシー',
                        'return'                              => '返品',
                        'select-allowed-order-status'         => '許可されている注文ステータスを選択',
                        'specific-products'                   => '特定の製品',
                        'title'                               => 'RMA',
                        'yes'                                 => 'はい',

                        'setting' => [
                            'info'  => 'RMA機能は、顧客が修理および保守、または返金や交換のために商品を返品する状況を処理することを可能にします。',
                            'read'  => 'ポリシーを読む',
                            'terms' => '返品ポリシーを読み、同意しました。',
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
                    'create-rma-title' => 'RMA作成',
                    'reason-title'     => '理由',
                    'rma-title'        => '全てのRMA',
                ],

                'all-rma' => [
                    'index' => [
                        'title' => '全てのRMA',

                        'datagrid' => [
                            'create'        => '作成日時',
                            'customer-name' => '顧客名',
                            'id'            => 'RMA ID',
                            'order-ref'     => '注文参照',
                            'order-status'  => '注文ステータス',
                            'rma-status'    => 'RMAステータス',
                        ],
                    ],

                    'view' => [
                        'add-attachments'        => '添付ファイルを追加',
                        'additional-information' => '追加情報:',
                        'attachment'             => '添付ファイル',
                        'change-status'          => 'ステータスを変更',
                        'confirm-print'          => 'RMAを印刷するにはOKをクリックしてください',
                        'conversations'          => '会話',
                        'customer-details'       => '顧客詳細',
                        'customer-email'         => '顧客メール:',
                        'customer'               => '顧客:',
                        'enter-message'          => 'メッセージを入力',
                        'images'                 => '画像:',
                        'no-record'              => '記録が見つかりません！',
                        'order-date'             => '注文日:',
                        'order-details'          => 'RMAにリクエストされたアイテム',
                        'order-id'               => '注文ID:',
                        'order-status'           => '注文状況:',
                        'order-total'            => '注文合計:',
                        'request-on'             => 'リクエスト日時:',
                        'resolution-type'        => '解決方法:',
                        'rma-status'             => 'RMAステータス:',
                        'save-btn'               => '保存',
                        'send-message-btn'       => 'メッセージを送信',
                        'send-message-success'   => 'メッセージが正常に送信されました。',
                        'send-message'           => 'メッセージを送信',
                        'status'                 => 'ステータス',
                        'title'                  => 'RMA',
                        'update-success'         => 'RMAステータスが正常に更新されました。',
                        'view-title'             => 'RMA',
                    ],
                ],

                'rma-status' => [
                    'index' => [
                        'create-btn' => 'RMAステータスを作成',
                        'title'      => 'RMAステータス',

                        'datagrid' => [
                            'created-at'          => '作成日',
                            'delete-success'      => 'RMAステータスが正常に削除されました。',
                            'disabled'            => '無効',
                            'enabled'             => '有効',
                            'id'                  => 'ID',
                            'mass-delete-success' => '選択されたRMAステータスが正常に削除されました。',
                            'reason-error'        => 'RMAステータスはRMAで使用されています。',
                            'reason'              => 'RMAステータス',
                            'status'              => 'ステータス',
                        ],
                    ],

                    'create' => [
                        'create-title' => '新しいRMAステータスを追加',
                        'reason'       => 'RMAステータス',
                        'save-btn'     => 'RMAステータスを保存',
                        'status'       => 'ステータス',
                        'success'      => 'RMAステータスが正常に作成されました。',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMAステータスを編集',
                        'mass-update-success' => '選択されたRMAステータスが正常に更新されました。',
                        'reason'              => 'RMAステータス',
                        'save-btn'            => 'RMAステータスを保存',
                        'status'              => 'ステータス',
                        'success'             => 'RMAステータスが正常に更新されました。',
                    ],
                ],

                'reasons' => [
                    'index' => [
                        'create-btn' => 'RMA理由を作成',
                        'title'      => '理由',

                        'datagrid' => [
                            'created-at'          => '作成日時',
                            'delete-success'      => '理由を削除しました。',
                            'disabled'            => '無効',
                            'enabled'             => '有効',
                            'id'                  => 'ID',
                            'mass-delete-success' => '選択したデータを削除しました。',
                            'reason-error'        => '理由はRMAで使用されています。',
                            'reason'              => '理由',
                            'status'              => 'ステータス',
                        ],
                    ],

                    'create' => [
                        'create-title' => '新しい理由を追加',
                        'reason'       => '理由',
                        'save-btn'     => '理由を保存',
                        'status'       => 'ステータス',
                        'success'      => '理由が正常に作成されました。',
                    ],

                    'edit' => [
                        'edit-title'          => '理由を編集',
                        'mass-update-success' => '選択した理由が正常に更新されました。',
                        'reason'              => '理由',
                        'save-btn'            => '理由を保存',
                        'status'              => 'ステータス',
                        'success'             => '理由が正常に更新されました。',
                    ],
                ],

                'custom-field' => [
                    'index' => [
                        'create-btn' => '新しいフィールドを追加',
                        'title'      => 'RMAカスタムフィールド',

                        'datagrid' => [
                            'created-at'          => '作成日',
                            'delete-success'      => 'カスタムフィールドが正常に削除されました。',
                            'disabled'            => '非アクティブ',
                            'enabled'             => 'アクティブ',
                            'id'                  => 'ID',
                            'mass-delete-success' => '選択したデータが正常に削除されました',
                            'status'              => 'ステータス',
                        ],
                    ],

                    'create' => [
                        'create-title' => '新しいカスタムフィールド',
                        'save-btn'     => 'カスタムフィールドを保存',
                        'status'       => 'ステータス',
                        'success'      => 'カスタムフィールドが正常に作成されました。',
                    ],

                    'edit' => [
                        'edit-title'          => 'カスタムフィールドを編集',
                        'mass-update-success' => '選択したカスタムフィールドが正常に更新されました。',
                        'reason'              => 'カスタムフィールド',
                        'save-btn'            => 'カスタムフィールドを保存',
                        'status'              => 'ステータス',
                        'success'             => 'カスタムフィールドが正常に更新されました。',
                    ],
                ],

                'rules' => [
                    'index' => [
                        'create-btn' => 'RMAルールを作成',
                        'title'      => 'RMAルール',

                        'datagrid' => [
                            'delete-success'      => 'RMAルールが正常に削除されました。',
                            'disabled'            => '無効',
                            'enabled'             => '有効',
                            'exchange-period'     => '交換期間（日）',
                            'id'                  => 'ID',
                            'mass-delete-success' => '選択されたデータが正常に削除されました。',
                            'reason'              => 'ルール',
                            'return-period'       => '返品期間（日）',
                            'status'              => 'ステータス',
                        ],
                    ],

                    'create' => [
                        'create-title'       => '新しいRMAルールを追加',
                        'reason'             => 'RMAルール',
                        'rule-description'   => 'ルールの説明',
                        'rule-details'       => 'ルールの詳細',
                        'resolutions-period' => '解決期間',
                        'rules-title'        => 'ルールのタイトル',
                        'save-btn'           => 'RMAルールを保存',
                        'status'             => 'RMAステータス',
                        'success'            => 'RMAルールが正常に作成されました。',
                    ],

                    'edit' => [
                        'edit-title'          => 'RMAルールを編集',
                        'mass-update-success' => '選択されたRMAルールが正常に更新されました。',
                        'reason'              => 'RMAルール',
                        'save-btn'            => 'RMAルールを更新',
                        'status'              => 'ステータス',
                        'success'             => 'RMAルールが正常に更新されました。',
                    ],
                ],

                'create-rma' => [
                    'create-success'           => 'RMAが正常に作成されました。',
                    'create-title'             => 'RMAを作成',
                    'email'                    => 'Eメール',
                    'image'                    => '画像',
                    'invalid-order-id'         => '無効な注文ID',
                    'mismatch'                 => '注文IDとEメールが一致しません',
                    'new-rma'                  => '新しいRMA',
                    'order-id'                 => '注文ID',
                    'quantity'                 => '数量',
                    'reason'                   => '理由',
                    'rma-already-exist'        => 'RMAはすでに存在しています',
                    'rma-not-available-quotes' => 'アイテムはRMAの対象外です',
                    'save-btn'                 => '保存',
                    'search'                   => '--選択--',
                    'validate'                 => '検証',
                ],
            ],

            'invoice' => [
                'create' => [
                    'rma_has_been_created' => 'RMAが作成されました。',
                    'rma-created-message'  => '製品の :qty 数量についてRMAリクエストが利用可能です'
                ],
            ],
        ],

        'acl' => [
            'delete'      => '削除',
            'edit'        => '編集',
            'mass-delete' => '一括削除',
            'mass-update' => '一括更新',
            'title'       => 'RMA',
        ],
    ],

    'shop' => [
        'customer' => [
            'delivered'    => '配達済み',
            'menu-name'    => 'RMA',
            'offer'        => '初回注文で最大40％オフ',
            'rma-qty'      => 'RMA数量',
            'shop-now'     => '今すぐ購入',
            'submit-req'   => 'リクエストを送信',
            'title'        => 'RMA',
            'undelivered'  => '未配達',

            'create' => [
                'cancel'                   => 'キャンセル',
                'create-btn'               => '保存',
                'enter-order-id'           => '注文IDを入力',
                'heading'                  => '新しいRMAリクエスト',
                'exchange-window'          => '交換ウィンドウ',
                'image'                    => '画像',
                'images'                   => '画像',
                'information'              => '追加情報',
                'item-ordered'             => '注文アイテム',
                'no-record'                => 'レコードが見つかりませんでした！',
                'not-allowed'              => '保留中の注文にはRMAが許可されていません',
                'order-status'             => '注文ステータス',
                'orders'                   => '注文',
                'price'                    => '価格',
                'product-name'             => '製品名',
                'product'                  => '製品',
                'quantity'                 => '数量',
                'reason'                   => '理由',
                'reopen-request'           => 'リクエストを再オープン',
                'resolution'               => '解決方法を選択',
                'return-window'            => '返品ウィンドウ',
                'rma-not-available-quotes' => 'RMA対象外のアイテム',
                'save'                     => '保存',
                'search-order'             => '注文を検索',
                'sku'                      => 'SKU',
            ],
        ],

        'guest' => [
            'view' => [
                'close-rma'    => 'RMAを閉じる：',
                'order-status' => '注文ステータス：',
                'rma-status'   => 'RMAステータス：',
                'title'        => 'RMA',
            ],

            'create' => [
                'cancel'                   => 'キャンセル',
                'create-btn'               => '保存',
                'enter-order-id'           => '注文IDを入力',
                'heading'                  => '新しいRMAリクエスト',
                'image'                    => '画像',
                'images'                   => '画像',
                'information'              => '追加情報',
                'item-ordered'             => '注文アイテム',
                'not-allowed'              => '保留中の注文にはRMAが許可されていません',
                'order-status'             => '注文ステータス',
                'orders'                   => '注文',
                'price'                    => '価格',
                'product-name'             => '製品名',
                'product'                  => '製品',
                'quantity'                 => '数量',
                'reason'                   => '理由',
                'reopen-request'           => 'リクエストを再オープン',
                'resolution'               => '解決方法を選択',
                'rma-not-available-quotes' => 'RMA対象外のアイテム',
                'save'                     => '保存',
                'search-order'             => '注文を検索',
                'sku'                      => 'SKU',
                'title'                    => 'RMA',
            ],

            'index' => [
                'create'  => '新しいRMAをリクエスト',
                'delete'  => '削除',
                'edit'    => '編集',
                'guest'   => 'ゲストRMAパネル',
                'heading' => 'ゲストRMAパネル',
                'update'  => '更新',
                'view'    => '表示',
            ],
        ],

        'customer-rma-index' => [
            'create'  => '作成',
            'delete'  => '削除',
            'edit'    => '編集',
            'guest'   => 'ゲストRMAパネル',
            'heading' => 'RMA',
            'update'  => '更新',
            'view'    => '表示',
        ],

        'validation' => [
            'close-rma'     => '確認',
            'information'   => '追加情報',
            'order-id'      => '注文選択',
            'order-status'  => '注文ステータス',
            'orders'        => '注文',
            'resolution'    => '解決方法',
            'select-orders' => '注文を選択',
        ],

        'conversation-texts' => [
            'by'        => 'によって',
            'customer'  => '顧客',
            'no-record' => 'レコードが見つかりませんでした！',
            'on'        => 'に',
            'seller'    => '売り手',
        ],

        'default-option' => [
            'others'              => 'その他',
            'please-select-value' => '値を選択してください',
            'select-order-status' => '注文ステータスを選択',
            'select-order'        => '注文を選択',
            'select-quantity'     => '数量を選択',
            'select-reason'       => '理由を選択',
            'select-resolution'   => '解決方法を選択',
            'select-seller'       => '売り手を選択',
        ],

        'view-customer-rma' => [
            'additional-information'  => '追加情報：',
            'admin'                   => '管理者',
            'cancel-order'            => '注文をキャンセル',
            'change-rma-status'       => 'RMAステータスを変更',
            'close-rma'               => 'RMAを閉じる：',
            'conversations'           => '会話',
            'guest'                   => 'ゲスト',
            'heading'                 => 'RMAの詳細',
            'images'                  => '画像：',
            'items-request'           => 'RMAのために要求されたアイテム',
            'items-requested-for-rma' => 'RMAのために要求されたアイテム',
            'order-id'                => '注文ID：',
            'refund-details'          => '払い戻しの詳細',
            'refund-offline-btn'      => 'オフラインで払い戻し',
            'refundable-amount'       => '払い戻し可能な金額',
            'resolution-type'         => '解決方法：',
            'rma'                     => 'RMA',
            'save-btn'                => '保存',
            'send-message-btn'        => '送信',
            'send-message'            => 'メッセージを送信',
            'status-details'          => 'ステータスの詳細',
            'status-quotes'           => '解決済みとしてマークするために同意してください',
            'status-reopen'           => '再オープンするにはチェック',
            'status'                  => 'ステータス',
            'term'                    => '同意マークフィールドは必須です',
            'you'                     => '管理者',
        ],

        'view-guest-rma' => [
            'additional-information' => '追加情報：',
            'admin'                  => '管理者',
            'close-rma'              => 'RMAを閉じる',
            'conversations'          => '会話',
            'guest'                  => 'あなた',
            'images'                 => '画像',
            'items-request'          => 'RMAのために要求されたアイテム',
            'order-id'               => ' 注文ID：',
            'refund-offline-btn'     => 'オフラインで払い戻し',
            'resolution-type'        => '解決方法：',
            'rma'                    => 'RMA',
            'save-btn'               => '保存',
            'send-message-btn'       => '送信',
            'send-message'           => 'メッセージを送信',
            'status-details'         => 'ステータスの詳細',
            'status-quotes'          => '解決済みとしてマークするために同意してください。',
            'status'                 => 'ステータス',
            'term'                   => '同意マークフィールドは必須です',
        ],

        'view-guest-rma-content' => [
            'full-amount'  => '全額',
            'order-status' => '注文ステータス：',
            'request-on'   => 'リクエスト日：',
            'rma-status'   => 'RMAステータス：',
        ],

        'view-customer-rma-content' => [
            'admin-status'            => '管理者ステータス：',
            'close-rma'               => 'RMAを閉じる',
            'consignment-no'          => '荷物番号：',
            'enter-message'           => 'メッセージを入力',
            'full-amount'             => '全額',
            'order-details'           => '注文の詳細',
            'order-status'            => '注文ステータス：',
            'partial-amount'          => '一部の金額',
            'refundable-amount'       => '払い戻し可能な金額：',
            'request-on'              => 'リクエスト日：',
            'rma-status'              => 'RMAステータス：',
            'seller'                  => '売り手',
            'total-refundable-amount' => '総払い戻し可能金額：',
        ],

        'table-heading' => [
            'image'           => '画像',
            'product-name'    => '商品名',
            'sku'             => 'SKU',
            'price'           => '価格',
            'rma-qty'         => 'RMA数量',
            'order-qty'       => '注文数量',
            'resolution-type' => '解決方法',
            'reason'          => '理由',
        ],

        'guest-users' => [
            'button-text' => 'ログイン',
            'email'       => 'Eメール',
            'heading'     => 'ゲストログインパネル',
            'logout'      => 'ゲストログアウト',
            'order-id'    => '注文ID',
            'title'       => 'ゲストログイン',
        ],
    ],

    'mail' => [
        'customer-rma-create' => [
            'additional-information' => '追加情報：',
            'greeting'               => '注文番号 :order_id の新しいRMAをリクエストしました。',
            'heading'                => 'RMAリクエスト',
            'hello'                  => '拝啓 :name 様',
            'order-id'               => '注文番号：',
            'order-status'           => '注文状況：',
            'requested-rma-product'  => 'リクエストされたRMAの製品：',
            'resolution-type'        => '解決タイプ：',
            'rma-id'                 => 'RMA ID：',
            'summary'                => '注文のRMAの概要',
            'thank-you'              => 'ありがとうございます',
        ],

        'customer-data-table-heading' => [
            'product-name' => '製品名',
            'qty'          => '数量',
            'reason'       => '理由',
            'sku'          => 'SKU',
        ],

        'customer-conversation' => [
            'heading' => '拝啓 :name 様',
            'message' => 'メッセージ',
            'quotes'  => 'バイヤーから新しいメッセージがあります',
            'process' => '返金リクエストが処理中です。',
            'solved'  => 'RMAのステータスが顧客によって解決済みに変更されました。',
        ],

        'seller-conversation' => [
            'heading' => '拝啓 :name 様',
            'message' => 'メッセージ',
            'quotes'  => '管理者から新しいメッセージがあります',
            'title'   => 'メッセージを受信しました！',
        ],

        'status' => [
            'heading'       => '拝啓 :name 様',
            'quotes'        => 'セラーによってあなたのRMAステータスが変更されました',
            'rma-id'        => 'RMA ID',
            'status-change' => ':id がセラーによってステータスが変更されました',
            'status'        => 'ステータス',
            'title'         => 'ステータスが更新されました！',
            'your-rma-id'   => 'あなたのRMA ID',
        ],
    ],

    'status' => [
        'status-name' => [
            'accept'                   => '承諾',
            'awaiting'                 => '待機中',
            'canceled'                 => 'キャンセルされました',
            'declined'                 => '拒否されました',
            'dispatched-package'       => 'パッケージを発送しました',
            'item-canceled'            => 'アイテムがキャンセルされました',
            'not-received-package-yet' => 'まだパッケージを受け取っていません',
            'pending'                  => '保留中',
            'processing'               => '処理中',
            'received-package'         => 'パッケージを受け取りました',
            'solved'                   => '解決済み',
        ],

        'status-quotes' => [
            'declined-admin'  => '管理者によってRMAが拒否されました。',
            'declined-buyer'  => 'バイヤーによってRMAが拒否されました。',
            'solved-by-admin' => '管理者によってRMAが解決されました。',
            'solved'          => 'RMAが解決されました。',
        ],
    ],

    'response' => [
        'already-cancel'    => 'RMAステータスはすでにキャンセルされています。',
        'cancel-success'    => 'RMAステータスが正常にキャンセルされました。',
        'create-success'    => 'リクエストが正常に作成されました。',
        'creation-error'    => 'この注文の請求書が作成されていないため、RMA ステータスを更新できません。',
        'permission-denied' => 'ログインしています',
        'rma-disabled'      => 'この製品のRMAは無効です',
        'send-message'      => ':name が正常に送信されました。',
        'update-success'    => ':name が正常に更新されました。',
        'please-select-the-item' => '商品を選択してください',

    ],
];