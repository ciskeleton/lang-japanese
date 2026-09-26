<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'コンポーネント';
$lang['admin_content'] = 'コンテンツ';
$lang['admin_database_backup'] = 'データベースバックアップ';
$lang['admin_extensions'] = '拡張子';
$lang['admin_firewall'] = 'ファイアウォール';
$lang['admin_help'] = 'ヘルプ';
$lang['admin_languages'] = '言語';
$lang['admin_logs'] = 'システムログ';
$lang['admin_media'] = 'メディアライブラリ';
$lang['admin_modules'] = 'モジュール';
$lang['admin_plugins'] = 'プラグイン';
$lang['admin_reports'] = 'アクティビティログ';
$lang['admin_settings'] = 'システム設定';
$lang['admin_sysinfo'] = 'システム情報';
$lang['admin_system'] = 'システム';
$lang['admin_system_firewall'] = 'システムファイアウォール';
$lang['admin_themes'] = 'テーマ';
$lang['admin_updates'] = 'システム更新';
$lang['admin_users'] = 'ユーザー';
$lang['admin_view_site'] = 'サイトを表示';
$lang['per_page'] = 'ページごと';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s" target="_blank">%s</a>を使用して作成していただきありがとうございます。';
$lang['admin_items_active_count'] = '=0{有効な項目はありません。} other{<b>%s</b> 件中 <b>#</b> 件が有効です。}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'インストールに失敗しました: %s';
$lang['admin_install_location_app'] = 'このアプリケーションのみ';
$lang['admin_install_location_core'] = 'すべてのアプリケーション';
$lang['admin_install_location_select'] = '&#151; 場所を選択 &#151;';
$lang['admin_install_update_confirm'] = 'このパッケージを更新してもよろしいですか？';
$lang['admin_install_update_error'] = 'パッケージの更新に失敗しました。';
$lang['admin_install_update_skip_confirm'] = 'この更新をスキップしてもよろしいですか？';
$lang['admin_install_update_skip_error'] = 'この更新のスキップに失敗しました。';
$lang['admin_install_update_skip_success'] = '更新が正常にスキップされました。';
$lang['admin_install_update_success'] = 'パッケージが正常に更新されました。';
$lang['admin_install_upload_tip'] = 'ここに <b>.zip</b> ファイルをアップロードしてパッケージをインストールします。';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = '古いバックアップファイルのクリーンアップに失敗しました。';
$lang['admin_database_backup_clean_success'] = '%d バックアップファイルが削除されました。 %d ディスク容量が解放されました。';
$lang['admin_database_backup_create'] = 'バックアップを作成';
$lang['admin_database_backup_create_confirm'] = '今すぐバックアップを作成してもよろしいですか？';
$lang['admin_database_backup_create_error'] = 'バックアップファイルの作成に失敗しました。 <b>%s</b> フォルダが書き込み可能であることを確認してください。';
$lang['admin_database_backup_create_success'] = 'データベースのバックアップファイル <b>%s</b> が正常に作成されました。';
$lang['admin_database_backup_delete_confirm'] = 'これらのバックアップファイルを削除してもよろしいですか？';
$lang['admin_database_backup_delete_error'] = '選択したバックアップファイルの削除に失敗しました。';
$lang['admin_database_backup_delete_success'] = 'バックアップファイルが正常に削除されました。';
$lang['admin_database_backup_download_error'] = '選択したバックアップファイルをダウンロードできません。';
$lang['admin_database_backup_download_success'] = 'バックアップファイルが正常にダウンロードされました。';
$lang['admin_database_backup_lock_confirm'] = 'これらのバックアップファイルをロックしてもよろしいですか？';
$lang['admin_database_backup_lock_error'] = '選択したバックアップファイルのロックに失敗しました。';
$lang['admin_database_backup_lock_success'] = 'バックアップファイルが正常にロックされました。';
$lang['admin_database_backup_locked_error'] = 'ロックされたバックアップファイルを削除できません。';
$lang['admin_database_backup_missing_error'] = 'バックアップファイルが見つかりませんでした。';
$lang['admin_database_backup_unlock_confirm'] = 'これらのバックアップファイルのロックを解除してもよろしいですか？';
$lang['admin_database_backup_unlock_error'] = '選択したバックアップファイルのロック解除に失敗しました。';
$lang['admin_database_backup_unlock_success'] = 'バックアップファイルが正常にアンロックされました。';
$lang['admin_database_prune'] = 'プルーン';
$lang['admin_database_prune_confirm'] = 'データベースを整理してもよろしいですか？実行前にバックアップが作成されます。';
$lang['admin_database_prune_error'] = 'データベースを整理できません。';
$lang['admin_database_prune_next'] = '次のデータベースの整理: <b>%s</b>';
$lang['admin_database_prune_success'] = 'データベースが正常に整理されました。';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'ログの削除';
$lang['admin_logs_delete_confirm'] = '選択したログファイルを削除してもよろしいですか？';
$lang['admin_logs_delete_error'] = 'ログファイルの削除に失敗しました。';
$lang['admin_logs_delete_success'] = 'ログファイルが正常に削除されました。';
$lang['admin_logs_error_disabled'] = '現在、ログは有効になっていません。';
$lang['admin_logs_error_empty'] = 'ログが見つかりませんでした。';
$lang['admin_logs_error_missing'] = 'ログファイルが見つからないか、空です。';
$lang['admin_logs_tip'] = 'ログは非常に大きなファイルを迅速に作成できます。ライブサイトでは、古いログを削除することを考えてください。';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = '選択したメールを削除しますか？';
$lang['admin_emails_delete_error'] = '選択したメールを削除できませんでした。';
$lang['admin_emails_delete_success'] = '選択したメールを削除しました。';
$lang['admin_emails_email_from'] = '送信元';
$lang['admin_emails_mail_queue'] = 'メールキュー';
$lang['admin_emails_mailer'] = '一括メール';
$lang['admin_emails_search'] = '件名または内容でメールを検索…';
$lang['admin_emails_send_error'] = 'メールをキューに追加できませんでした。もう一度お試しください。';
$lang['admin_emails_send_none'] = '選択した条件に一致するユーザーがいません。';
$lang['admin_emails_send_success'] = 'メールがキューに追加され、まもなく送信されます。';
$lang['admin_emails_send_to_banned'] = '禁止されたユーザーに送信する。';
$lang['admin_emails_send_to_deleted'] = '削除されたユーザーに送信する。';
$lang['admin_emails_send_to_disabled'] = '無効なユーザーに送信する。';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'ユーザーを追加';
$lang['admin_users_all_users'] = 'すべてのユーザー';
$lang['admin_users_ban_confirm'] = '選択したユーザーを禁止してもよろしいですか?';
$lang['admin_users_ban_error'] = '選択したユーザーを禁止できません。';
$lang['admin_users_ban_success'] = '選択したユーザーを正常に禁止しました。';
$lang['admin_users_delete_confirm'] = '選択したユーザーを削除してもよろしいですか?';
$lang['admin_users_delete_error'] = '選択したユーザーを削除できません。';
$lang['admin_users_delete_success'] = '選択したユーザーを正常に削除しました。';
$lang['admin_users_disable_confirm'] = '選択したユーザーを無効にしてもよろしいですか?';
$lang['admin_users_disable_error'] = '選択したユーザーを無効にできません。';
$lang['admin_users_disable_success'] = '選択したユーザーを正常に無効にしました。';
$lang['admin_users_edit'] = 'ユーザーの編集';
$lang['admin_users_edit_error'] = 'ユーザーを更新できません。';
$lang['admin_users_edit_success'] = 'ユーザーが正常に更新されました。';
$lang['admin_users_enable_confirm'] = '選択したユーザーを有効にしてもよろしいですか?';
$lang['admin_users_enable_error'] = '選択したユーザーを有効にできません。';
$lang['admin_users_enable_success'] = '選択したユーザーを正常に有効にしました。';
$lang['admin_users_groups'] = 'グループ';
$lang['admin_users_lock_confirm'] = '選択したユーザーをロックしてもよろしいですか？';
$lang['admin_users_lock_error'] = '選択したユーザーをロックできませんでした。';
$lang['admin_users_lock_success'] = '選択したユーザーは正常にロックされました。';
$lang['admin_users_logged'] = 'ログイン中のユーザー';
$lang['admin_users_manage'] = 'ユーザーの管理';
$lang['admin_users_remove_confirm'] = '選択したユーザーとそのすべてのデータを完全に削除してもよろしいですか?';
$lang['admin_users_remove_error'] = '選択したユーザーとそのすべてのデータを完全に削除できません。';
$lang['admin_users_remove_success'] = '選択したユーザーとそのすべてのデータを正常に削除しました。';
$lang['admin_users_restore_confirm'] = '選択したユーザーを復元してもよろしいですか?';
$lang['admin_users_restore_error'] = '選択したユーザーを復元できません。';
$lang['admin_users_restore_success'] = '選択したユーザーを正常に復元しました。';
$lang['admin_users_search'] = '名前またはメールで検索…';
$lang['admin_users_unban_confirm'] = '選択したユーザーの禁止を解除してもよろしいですか?';
$lang['admin_users_unban_error'] = '選択したユーザーの禁止を解除できません。';
$lang['admin_users_unban_success'] = '選択したユーザーの禁止を正常に解除しました。';
$lang['admin_users_unlock_confirm'] = '選択したユーザーを解除しますか？';
$lang['admin_users_unlock_error'] = '選択したユーザーを解除できませんでした。';
$lang['admin_users_unlock_success'] = '選択したユーザーを正常に解除しました。';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'ログをクリア';
$lang['admin_reports_clear_confirm'] = 'アクションログをクリアしてもよろしいですか？';
$lang['admin_reports_clear_error'] = 'アクションログをクリアできませんでした。';
$lang['admin_reports_clear_success'] = 'アクションログが正常にクリアされました。';
$lang['admin_reports_latest_actions'] = '最新のアクション';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = '選択したファイルを削除してもよろしいですか？';
$lang['admin_media_delete_error'] = 'ファイルの削除に失敗しました。';
$lang['admin_media_delete_success'] = 'ファイルが正常に削除されました。';
$lang['admin_media_file_delete_error'] = 'ファイルの削除に失敗しました。';
$lang['admin_media_file_delete_success'] = 'ファイルが正常に削除されました。';
$lang['admin_media_file_update_error'] = 'ファイルを更新できません。';
$lang['admin_media_file_update_success'] = 'ファイルが正常に更新されました。';
$lang['admin_media_search'] = '名前、説明、またはファイル名で検索…';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{有効なモジュールはありません。} other{<b>%s</b> 件中 <b>#</b> 件が有効です。}';
$lang['admin_modules_add'] = 'モジュールを追加';
$lang['admin_modules_delete_confirm'] = 'モジュールを削除しますか：<b>%s</b>?';
$lang['admin_modules_delete_error'] = 'モジュールの削除に失敗しました。';
$lang['admin_modules_delete_error_active'] = '有効なモジュールは削除できません。';
$lang['admin_modules_delete_success'] = 'モジュールが正常に削除されました。';
$lang['admin_modules_disable_all_confirm'] = 'すべてのモジュールを無効にしてもよろしいですか？';
$lang['admin_modules_disable_all_error'] = 'すべてのモジュールを無効にできませんでした。';
$lang['admin_modules_disable_all_success'] = 'すべてのモジュールが正常に無効化されました。';
$lang['admin_modules_disable_confirm'] = 'モジュールを無効にしますか：<b>%s</b>?';
$lang['admin_modules_disable_error'] = 'モジュールの無効化に失敗しました。';
$lang['admin_modules_disable_success'] = 'モジュールが正常に非アクティブ化されました。';
$lang['admin_modules_enable_all_confirm'] = 'すべてのモジュールを有効にしてもよろしいですか？';
$lang['admin_modules_enable_all_error'] = 'すべてのモジュールを有効にできませんでした。';
$lang['admin_modules_enable_all_success'] = 'すべてのモジュールが正常に有効化されました。';
$lang['admin_modules_enable_confirm'] = 'モジュールを有効にしますか：<b>%s</b>?';
$lang['admin_modules_enable_error'] = 'モジュールの有効化に失敗しました。';
$lang['admin_modules_enable_success'] = 'モジュールが正常にアクティブ化されました。';
$lang['admin_modules_global'] = 'グローバルモジュール（共有）';
$lang['admin_modules_install_confirm'] = 'モジュールをインストールしてもよろしいですか：<b>%s</b>?';
$lang['admin_modules_install_error'] = 'モジュールのインストールに失敗しました。';
$lang['admin_modules_install_success'] = 'モジュールが正常にインストールされました。';
$lang['admin_modules_install_tip'] = 'モジュールはサイトに新しい機能を追加します。<a href="%s" target="_blank" rel="noopener">モジュールディレクトリ</a>で利用可能なモジュールを参照するか、<b>.zip</b> ファイルをアップロードしてください。';
$lang['admin_modules_update_confirm'] = 'このモジュールを更新してもよろしいですか？';
$lang['admin_modules_update_error'] = 'モジュールの更新に失敗しました。';
$lang['admin_modules_update_success'] = 'モジュールが正常に更新されました。';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{有効なプラグインはありません。} other{<b>%s</b> 件中 <b>#</b> 件が有効です。}';
$lang['admin_plugins_add'] = 'プラグインを追加';
$lang['admin_plugins_delete_confirm'] = 'プラグインを削除してもよろしいですか: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'プラグインを削除できません。';
$lang['admin_plugins_delete_error_active'] = '有効なプラグインは削除できません。';
$lang['admin_plugins_delete_success'] = 'プラグインが正常に削除されました。';
$lang['admin_plugins_disable_all_confirm'] = 'すべてのプラグインを無効にしてもよろしいですか？';
$lang['admin_plugins_disable_all_error'] = 'すべてのプラグインを無効にできませんでした。';
$lang['admin_plugins_disable_all_success'] = 'すべてのプラグインが正常に無効化されました。';
$lang['admin_plugins_disable_confirm'] = 'プラグインを無効にしてもよろしいですか: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'プラグインを無効にできません。';
$lang['admin_plugins_disable_success'] = 'プラグインが正常に無効化されました。';
$lang['admin_plugins_enable_all_confirm'] = 'すべてのプラグインを有効にしてもよろしいですか？';
$lang['admin_plugins_enable_all_error'] = 'すべてのプラグインを有効にできませんでした。';
$lang['admin_plugins_enable_all_success'] = 'すべてのプラグインが正常に有効化されました。';
$lang['admin_plugins_enable_confirm'] = 'プラグインを有効にしてもよろしいですか: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'プラグインを有効にできません。';
$lang['admin_plugins_enable_success'] = 'プラグインが正常に有効化されました。';
$lang['admin_plugins_global'] = 'グローバルプラグイン（共有）';
$lang['admin_plugins_install_confirm'] = 'プラグインをインストールしてもよろしいですか：<b>%s</b>?';
$lang['admin_plugins_install_error'] = 'プラグインのインストールに失敗しました。';
$lang['admin_plugins_install_success'] = 'プラグインが正常にインストールされました。';
$lang['admin_plugins_install_tip'] = 'プラグインは既存の機能を追加のオプションや統合で拡張します。<a href="%s" target="_blank" rel="noopener">プラグインディレクトリ</a>からインストールするか、<b>.zip</b> ファイルをアップロードしてください。';
$lang['admin_plugins_update_confirm'] = 'このプラグインを更新してもよろしいですか？';
$lang['admin_plugins_update_error'] = 'プラグインの更新に失敗しました。';
$lang['admin_plugins_update_success'] = 'プラグインが正常に更新されました。';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'テーマを追加';
$lang['admin_themes_delete_confirm'] = 'テーマを削除しますか: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'テーマの削除に失敗しました。';
$lang['admin_themes_delete_error_active'] = '現在アクティブなテーマは削除できません。';
$lang['admin_themes_delete_success'] = 'テーマが正常に削除されました。';
$lang['admin_themes_disable_confirm'] = 'テーマを無効化しますか: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'テーマを無効化できませんでした。';
$lang['admin_themes_disable_error_active'] = '有効なテーマは無効にできません。';
$lang['admin_themes_disable_success'] = 'テーマが正常に無効化されました。';
$lang['admin_themes_enable_confirm'] = 'テーマを有効にしますか: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'テーマの有効化に失敗しました。';
$lang['admin_themes_enable_success'] = 'テーマが正常にアクティブ化されました。';
$lang['admin_themes_install_confirm'] = 'テーマをインストールしてもよろしいですか：<b>%s</b>?';
$lang['admin_themes_install_error'] = 'テーマのインストールに失敗しました。';
$lang['admin_themes_install_success'] = 'テーマが正常にインストールされました。';
$lang['admin_themes_install_tip'] = 'テーマはサイトの外観やレイアウトを変更します。<a href="%s" target="_blank" rel="noopener">テーマライブラリ</a>から選択するか、<b>.zip</b> ファイルをアップロードしてインストールしてください。';
$lang['admin_themes_none_tip'] = 'このアプリケーションはテーマなしで実行されています。公開向けインターフェイスをカスタマイズするには、テーマをインストールしてください。';
$lang['admin_themes_update_confirm'] = 'このテーマを更新してもよろしいですか？';
$lang['admin_themes_update_error'] = 'テーマの更新に失敗しました。';
$lang['admin_themes_update_success'] = 'テーマが正常に更新されました。';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'メニュー';
$lang['admin_menus_assign_error'] = 'メニューの配置を更新できません。';
$lang['admin_menus_assign_success'] = 'メニューの配置が正常に更新されました。';
$lang['admin_menus_header'] = '<b>%s</b> 個のメニュー位置が利用可能です。';
$lang['admin_menus_location'] = '位置';
$lang['admin_menus_locations'] = 'メニュー位置';
$lang['admin_menus_manage'] = 'メニュー管理';
$lang['admin_menus_menu'] = '割り当てられたメニュー';
$lang['admin_menus_none'] = '&#151; なし &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = '言語を追加';
$lang['admin_languages_default_confirm'] = 'この言語をサイトのデフォルト言語に設定してもよろしいですか？';
$lang['admin_languages_default_error'] = 'デフォルト言語の変更に失敗しました。';
$lang['admin_languages_default_error_nochange'] = 'この言語はすでにデフォルトです。';
$lang['admin_languages_default_success'] = 'デフォルト言語が正常に変更されました。';
$lang['admin_languages_delete_confirm'] = '言語「<b>%s</b>」を削除してもよろしいですか？';
$lang['admin_languages_delete_error'] = '言語の削除に失敗しました。';
$lang['admin_languages_delete_error_active'] = '有効な言語は削除できません。';
$lang['admin_languages_delete_error_default'] = 'デフォルトの言語は削除できません。';
$lang['admin_languages_delete_success'] = '言語が正常に削除されました。';
$lang['admin_languages_disable_all_confirm'] = '本当にすべての言語を無効にしますか？';
$lang['admin_languages_disable_all_error'] = 'すべての言語を無効化できませんでした。';
$lang['admin_languages_disable_all_success'] = 'すべての言語が正常に無効化されました。';
$lang['admin_languages_disable_confirm'] = '言語を無効にしますか：<b>%s</b>?';
$lang['admin_languages_disable_error'] = '言語の無効化に失敗しました。';
$lang['admin_languages_disable_error_default'] = '既定の言語は無効にできません。';
$lang['admin_languages_disable_error_nochange'] = 'この言語はすでに無効です。';
$lang['admin_languages_disable_success'] = '言語が正常に無効化されました。';
$lang['admin_languages_enable_all_confirm'] = '本当にすべての言語を有効にしますか？';
$lang['admin_languages_enable_all_error'] = 'すべての言語を有効化できませんでした。';
$lang['admin_languages_enable_all_success'] = 'すべての言語が正常に有効化されました。';
$lang['admin_languages_enable_confirm'] = '言語を有効にしますか：<b>%s</b>?';
$lang['admin_languages_enable_error'] = '言語の有効化に失敗しました。';
$lang['admin_languages_enable_error_nochange'] = 'この言語はすでに有効です。';
$lang['admin_languages_enable_success'] = '言語が正常に有効化されました。';
$lang['admin_languages_install_confirm'] = '言語をインストールしてもよろしいですか：<b>%s</b>?';
$lang['admin_languages_install_error'] = '言語のインストールに失敗しました。';
$lang['admin_languages_install_success'] = '言語が正常にインストールされました。';
$lang['admin_languages_install_tip'] = '言語は、サイトのインターフェースとコンテンツに翻訳を追加します。<a href="%s" target="_blank" rel="noopener">言語ディレクトリ</a>で利用可能な言語を参照するか、<b>.zip</b> パッケージをアップロードして独自の言語をインストールしてください。';
$lang['admin_languages_tip'] = 'サイトのデフォルト言語を設定し、言語を有効または無効にします。有効な言語はサイトの訪問者に利用可能です。';
$lang['admin_languages_update_confirm'] = 'この言語を更新してもよろしいですか？';
$lang['admin_languages_update_error'] = '言語の更新に失敗しました。';
$lang['admin_languages_update_success'] = '言語が正常に更新されました。';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'パッケージは既に存在します。';
$lang['package_archive_download_failed'] = 'パッケージアーカイブのダウンロードに失敗しました。';
$lang['package_backup_create_error'] = 'パッケージのバックアップ作成に失敗しました。';
$lang['package_backup_dir_failed'] = 'バックアップディレクトリを作成できませんでした: %s';
$lang['package_backup_missing'] = 'バックアップファイルが存在しません。';
$lang['package_backup_path_error'] = 'バックアップファイルのパスを解決できませんでした。';
$lang['package_backup_request_invalid'] = '無効なバックアップリクエストです。';
$lang['package_backup_restore_error'] = 'パッケージのバックアップ復元に失敗しました。';
$lang['package_catalog_type_unknown'] = '未知のカタログタイプです。';
$lang['package_checksum_error'] = 'パッケージのチェックサム検証に失敗しました。';
$lang['package_copy_files_error'] = 'パッケージファイルを宛先にコピーできませんでした。';
$lang['package_copy_updates_error'] = 'アップデートファイルを宛先にコピーできませんでした。';
$lang['package_dest_dir_failed'] = '宛先ディレクトリを作成できませんでした: %s';
$lang['package_destination_error'] = 'パッケージの宛先を解決できませんでした。';
$lang['package_download_dir_failed'] = 'ダウンロードディレクトリを作成できませんでした: %s';
$lang['package_download_empty'] = 'パッケージのダウンロードが空の応答を返しました。';
$lang['package_download_request_invalid'] = '無効なパッケージダウンロードリクエストです。';
$lang['package_extract_failed'] = 'ZIP %s の展開に失敗しました';
$lang['package_invalid_lang_files'] = '無効な言語 — 必要なアプリケーション言語ファイルが不足しています。';
$lang['package_invalid_lang_structure'] = '無効な言語 — admin および/または ci3 ディレクトリが不足しています。';
$lang['package_invalid_missing_info'] = '無効な %s: "info.php" がありません。';
$lang['package_invalid_module_structure'] = '無効なモジュール — 必要な config および/または controllers ディレクトリが不足しています。';
$lang['package_invalid_plugin_boot'] = '無効なプラグイン — "boot.php" が見つかりません。';
$lang['package_invalid_plugin_contents'] = '無効なプラグイン — プラグインにはコントローラーやビューを含めることができません。';
$lang['package_invalid_theme_boot'] = '無効なテーマ — "boot.php" が見つかりません。';
$lang['package_invalid_theme_views'] = '無効なテーマ — views ディレクトリが見つかりません。';
$lang['package_no_root_dir'] = 'パッケージにルートディレクトリが含まれていません。';
$lang['package_not_downloadable'] = 'このパッケージは公開ダウンロードできません。';
$lang['package_not_in_registry'] = 'パッケージは公開レジストリに存在しません。';
$lang['package_request_invalid'] = '無効なパッケージリクエストです。';
$lang['package_rollback_request_invalid'] = '無効なロールバックリクエストです。';
$lang['package_root_mismatch'] = 'パッケージアーカイブのルートが %s と一致しません';
$lang['package_single_root_required'] = 'パッケージにはルートディレクトリが正確に1つ含まれている必要があります。';
$lang['package_source_error'] = 'パッケージのソースを解決できませんでした。';
$lang['package_system_core_restricted'] = 'システムコンポーネントをパッケージとしてインストールすることはできません。';
$lang['package_temp_dir_failed'] = '一時ディレクトリを作成できませんでした: %s';
$lang['package_type_unknown'] = '未知のパッケージタイプです。';
$lang['package_update_request_invalid'] = '無効なパッケージ更新リクエストです。';
$lang['package_update_root_mismatch'] = 'アップデートアーカイブのルートが %s と一致しません。';
$lang['package_upload_dir_failed'] = 'アップロードディレクトリを作成できませんでした: %s';
$lang['package_url_invalid'] = '無効なパッケージ配信 URL です。';
$lang['package_write_failed'] = 'パッケージを %s に書き込めませんでした';
$lang['package_zip_not_found'] = 'パッケージ ZIP が存在しません: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = '新しいアップデートが利用可能です！';
$lang['update_backup_error'] = '既存のパッケージのバックアップを作成できませんでした。アップデートは中止されました。';
$lang['update_check_disabled'] = '自動アップデートチェックが無効になっています。アップデートを表示するには有効にしてください。';
$lang['update_check_error'] = '現在、アップデートチェックを実行できません。';
$lang['update_check_success'] = 'アップデートチェックが正常に完了しました。';
$lang['update_install_error'] = 'パッケージをインストールできませんでした。以前のバージョンが保持されました。';
$lang['update_install_success'] = 'パッケージが最新バージョンに正常にアップデートされました。';
$lang['update_interval_3days'] = '3日ごと';
$lang['update_interval_biweekly'] = '2週間ごと';
$lang['update_interval_daily'] = '毎日';
$lang['update_interval_monthly'] = '月に1回';
$lang['update_interval_weekly'] = '週に1回';
$lang['update_not_available'] = 'ウェブサイトは最新の状態です。';
$lang['update_rollback_confirm'] = '以前のバージョンに復元してもよろしいですか？';
$lang['update_rollback_error'] = '以前のバージョンを復元できませんでした。手動での介入が必要な場合があります。';
$lang['update_rollback_success'] = '以前のバージョンが正常に復元されました。';
$lang['updates_available'] = '利用可能なアップデート';
$lang['updates_check_now'] = '今すぐチェック';
$lang['updates_check_now_confirm'] = '今すぐアップデートをチェックしてもよろしいですか？';
$lang['updates_current_version'] = '現在のバージョン';
$lang['updates_enable'] = 'アップデートを有効にする';
$lang['updates_last_check'] = '最終チェック：%s';
$lang['updates_latest_version'] = '最新バージョン';
$lang['updates_next_check'] = '次の予定チェック：%s';
$lang['updates_previous_version'] = '以前のバージョン';
$lang['updates_recent'] = '最近アップデート済み';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = '指定されたIPアドレスのブロックに失敗しました。';
$lang['admin_firewall_ban_success'] = 'IPアドレスが正常にブロックされました。';
$lang['admin_firewall_block_ip'] = 'IPアドレスをブロック';
$lang['admin_firewall_delete_confirm'] = '選択したIPアドレスのブロックを解除してもよろしいですか?';
$lang['admin_firewall_delete_error'] = '選択したIPアドレスのブロック解除に失敗しました。';
$lang['admin_firewall_delete_success'] = '選択したIPアドレスが正常にブロック解除されました。';
$lang['admin_firewall_duration'] = '禁止期間';
$lang['admin_firewall_permanent'] = '永久';
$lang['admin_firewall_reason'] = '禁止理由';
$lang['admin_firewall_tip'] = '繰り返し違反または疑わしい活動によりファイアウォールによってブロックされたIPアドレスを表示および管理します。';

// Settings
$lang['404_ban_duration'] = '404禁止期間';
$lang['404_threshold'] = '404ストライク制限';
$lang['uri_ban_duration'] = 'URI禁止期間';
$lang['uri_strike_threshold'] = 'URIストライク制限';
