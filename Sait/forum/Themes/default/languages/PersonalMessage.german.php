<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'Private Mitteilungen';
$txt['send_message'] = 'Senden';
$txt['pm_add'] = 'Hinzuf�gen';
$txt['make_bcc'] = 'BCC hinzuf�gen';
$txt['pm_to'] = 'An';
$txt['pm_bcc'] = 'Bcc';
$txt['inbox'] = 'Posteingang';
$txt['conversation'] = 'Konversation';
$txt['messages'] = 'Nachrichten';
$txt['sent_items'] = 'Postausgang';
$txt['new_message'] = 'Neue Mitteilung';
$txt['delete_message'] = 'L�sche Mitteilung';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Alle Mitteilungen in Ihrem PMBOX l�schen';
$txt['delete_all_confirm'] = 'Sind Sie sicher, dass Sie alle Mitteilungen l�schen m�chten?';
$txt['recipient'] = 'Empf�nger';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'Neue Private Mitteilung: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'Sie haben eine Private Mitteilung von SENDER im Forum ' . $context['forum_name'] . ' erhalten.' . "\n\n" . 'WICHTIG: Das ist nur eine Benachrichtigung - bitte antworten Sie nicht auf diese E-Mail!' . "\n\n" . 'Die Nachricht, die an Sie gesendet wurde:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(mehrere Empf�nger als \'username1, username2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'Auf diese Mitteilung antworten:';

$txt['delete_selected_confirm'] = 'Sind Sie sicher, dass Sie die ausgew�hlten Privaten Mitteilungen l�schen m�chten?';

$txt['sent_to'] = 'Senden an';
$txt['reply_to_all'] = 'Allen antworten';
$txt['delete_conversation'] = 'Konversation l�schen';

$txt['pm_capacity'] = 'Kapazit�t';
$txt['pm_currently_using'] = '%1$s Mitteilungen, %2$s%% voll.';
$txt['pm_sent'] = 'Ihre Nachricht wurde erfolgreich versandt.';

$txt['pm_error_user_not_found'] = 'Kann Mitglied \'%1$s\' nicht finden.';
$txt['pm_error_ignored_by_user'] = 'Mitglied \'%1$s\' hat Ihre Mitteilungen geblockt.';
$txt['pm_error_data_limit_reached'] = 'Die Mitteilung konnte wegen des max. Limit nicht an \'%1$s\' gesendet werden.';
$txt['pm_error_user_cannot_read'] = 'Der Benutzer \'%1$s\' kann keine Privaten Mitteilungen empfangen.';
$txt['pm_successfully_sent'] = 'Mitteilung erfolgreich an \'%1$s\' gesendet.';
$txt['pm_send_report'] = 'Meldung senden';
$txt['pm_save_outbox'] = 'Kopie im Ausgang speichern';
$txt['pm_undisclosed_recipients'] = 'Verdeckter Empf�nger';
$txt['pm_too_many_recipients'] = 'Sie k�nnen pers�nliche Nachrichten nicht an mehr als %1$d Empf�nger auf einmal schicken.';

$txt['pm_read'] = 'Lesen';
$txt['pm_replied'] = 'Antwort an';

// Message Pruning.
$txt['pm_prune'] = 'Mitteilungen bereinigen';
$txt['pm_prune_desc1'] = 'Alle Privaten Mitteilungen �lter als';
$txt['pm_prune_desc2'] = 'Tage l�schen.';
$txt['pm_prune_warning'] = 'Sind Sie sicher, dass Sie Ihre Mitteilungen bereinigen m�chten?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Weitere Funktionen';
$txt['pm_actions_delete_selected'] = 'Ausgew�hlte l�schen';
$txt['pm_actions_filter_by_label'] = 'Nach Label filtern';
$txt['pm_actions_go'] = 'Los';

// Manage Labels Screen.
$txt['pm_apply'] = '�bernehmen';
$txt['pm_manage_labels'] = 'Labels verwalten';
$txt['pm_labels_delete'] = 'Sind Sie sicher, dass Sie die ausgew�hlten Labels l�schen m�chten?';
$txt['pm_labels_desc'] = 'Hier k�nnen Sie Labels zu Ihren Privaten Mitteilungen hinzuf�gen, editieren und l�schen.';
$txt['pm_label_add_new'] = 'Neues Label hinzuf�gen';
$txt['pm_label_name'] = 'Name des Labels';
$txt['pm_labels_no_exist'] = 'Sie haben noch keine Labels erstellt!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Label';
$txt['pm_msg_label_title'] = 'Mitteilung kennzeichnen';
$txt['pm_msg_label_apply'] = 'Label hinzuf�gen';
$txt['pm_msg_label_remove'] = 'Label entfernen';
$txt['pm_msg_label_inbox'] = 'Posteingang';
$txt['pm_sel_label_title'] = 'Ausgew�hlte kennzeichnen';

// Sidebar Headings.
$txt['pm_labels'] = 'Labels';
$txt['pm_messages'] = 'Mitteilungen';
$txt['pm_actions'] = 'Aktionen';
$txt['pm_preferences'] = 'Einstellungen';

$txt['pm_is_replied_to'] = 'Sie haben diese Mitteilung weitergeleitet oder schon darauf geantwortet.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Administrator informieren';
$txt['pm_report_title'] = 'Private Mitteilung melden';
$txt['pm_report_desc'] = 'Hier k�nnen Sie Private Mitteilungen den Administratoren des Forums melden. Bitte f�gen Sie eine kurze Beschreibung an, warum Sie diese Mitteilung melden m�chten. Die Beschreibung wird mit der Originalnachricht versendet.';
$txt['pm_report_admins'] = 'An folgenden Administrator melden';
$txt['pm_report_all_admins'] = 'An alle Administratoren melden';
$txt['pm_report_reason'] = 'Grund f�r die Meldung der Mitteilung';
$txt['pm_report_message'] = 'Mitteilung melden';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[MELDUNG] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} hat die untenstehende Mitteilung, die von {SENDER} gesendet wurde, mit folgendem Grund gemeldet:';
$txt['pm_report_pm_other_recipients'] = 'Andere Empf�nger der Meldung:';
$txt['pm_report_pm_hidden'] = '%1$d versteckte Empf�nger';
$txt['pm_report_pm_unedited_below'] = 'Der Originaltext der gemeldeten Mitteilung lautet wie folgt:';
$txt['pm_report_pm_sent'] = 'Gesendet:';

$txt['pm_report_done'] = 'Vielen Dank f�r das Melden der Mitteilung. Sie sollten in K�rze von den Administratoren eine Antwort erhalten.';
$txt['pm_report_return'] = 'Zur�ck zum Posteingang';

$txt['pm_search_title'] = 'Private Mitteilungen durchsuchen';
$txt['pm_search_bar_title'] = 'Private Mitteilungen durchsuchen';
$txt['pm_search_text'] = 'Suche nach';
$txt['pm_search_go'] = 'Suchen';
$txt['pm_search_advanced'] = 'Erweiterte Suche';
$txt['pm_search_user'] = 'nach Mitglied';
$txt['pm_search_match_all'] = '�bereinstimmung aller W�rter';
$txt['pm_search_match_any'] = '�bereinstimmung eines Wortes';
$txt['pm_search_options'] = 'Optionen';
$txt['pm_search_post_age'] = 'Alter';
$txt['pm_search_show_complete'] = 'Vollst�ndige Mitteilung in den Suchergebnissen anzeigen.';
$txt['pm_search_subject_only'] = 'Suche nur nach Betreff und Autor.';
$txt['pm_search_between'] = 'Zwischen';
$txt['pm_search_between_and'] = 'und';
$txt['pm_search_between_days'] = 'Tagen';
$txt['pm_search_order'] = 'Ergebnisse sortieren nach';
$txt['pm_search_choose_label'] = 'Labels zum Suchen ausw�hlen oder alle durchsuchen';

$txt['pm_search_results'] = 'Suchresultate';
$txt['pm_search_none_found'] = 'Keine Mitteilungen gefunden';

$txt['pm_search_orderby_relevant_first'] = 'Gr��te Relevanz zuerst';
$txt['pm_search_orderby_recent_first'] = 'Neueste Mitteilungen zuerst';
$txt['pm_search_orderby_old_first'] = '�lteste Mitteilungen zuerst';

$txt['pm_visual_verification_label'] = 'Verifizierung';
$txt['pm_visual_verification_desc'] = 'Bitte geben sie den Code aus dem Bild ein, um die Mitteilung zu versenden.';

$txt['pm_settings'] = 'Einstellungen �ndern';
$txt['pm_change_view'] = 'Ansicht wechseln';

$txt['pm_manage_rules'] = 'Regeln verwalten';
$txt['pm_manage_rules_desc'] = 'Hier k�nnen sie ihre eingehenden Privaten Mitteilungen automatisch nach bestimmten Kriterien sortieren. Um eine Regel zu bearbeiten, klicken sie den Namen der Regel an.';
$txt['pm_rules_none'] = 'Sie haben keine Regeln definiert.';
$txt['pm_rule_title'] = 'Regel';
$txt['pm_add_rule'] = 'Neue Regel';
$txt['pm_apply_rules'] = 'Regeln jetzt anwenden';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Sind sie sicher, dass sie die Regeln auf alle Privaten Mitteilungen anwenden m�chten?';
$txt['pm_edit_rule'] = 'Regel �ndern';
$txt['pm_rule_save'] = 'Regel speichern';
$txt['pm_delete_selected_rule'] = 'Ausgew�hlte Regeln l�schen';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Sind sie sicher, dass sie die ausgew�hlten Regeln l�schen m�chten?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name f�r diese Regel';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Beschreibung';
$txt['pm_rule_not_defined'] = 'F�gen sie Kriterien hinzu, um die Beschreibung zu erstellen.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><b>Hinweis:</b> Sie scheinen Javascript deaktiviert zu haben. Wir empfehlen dringend Javascript zu Aktivieren um diese Funktion zu nutzen.</span> ';
$txt['pm_rule_criteria'] = 'Kriterien';
$txt['pm_rule_criteria_add'] = 'Kriterium hinzuf�gen';
$txt['pm_rule_criteria_pick'] = 'Kriterium w�hlen';
$txt['pm_rule_mid'] = 'Name des Absenders';
$txt['pm_rule_gid'] = 'Gruppe des Absenders';
$txt['pm_rule_sub'] = 'Betreff enth�lt';
$txt['pm_rule_msg'] = 'Mitteilungstext enth�lt';
$txt['pm_rule_bud'] = 'Absender ist ein Buddy';
$txt['pm_rule_sel_group'] = 'Gruppe w�hlen';
$txt['pm_rule_logic'] = 'Zu erf�llende Kriterien';
$txt['pm_rule_logic_and'] = 'Alle Kriterien m�ssen erf�llt werden';
$txt['pm_rule_logic_or'] = 'Ein Kriterium muss erf�llt sein';
$txt['pm_rule_actions'] = 'Aktionen';
$txt['pm_rule_sel_action'] = 'Aktion w�hlen';
$txt['pm_rule_add_action'] = 'Aktion hinzuf�gen';
$txt['pm_rule_label'] = 'Mitteilung kennzeichnen mit';
$txt['pm_rule_sel_label'] = 'Label w�hlen';
$txt['pm_rule_delete'] = 'Mitteilung l�schen';
$txt['pm_rule_no_name'] = 'Sie haben vergessen, einen Namen f�r diese Regel einzugeben.';
$txt['pm_rule_no_criteria'] = 'Eine Regel muss mindestens ein Kriterium und eine Aktion enthalten.';
$txt['pm_rule_too_complex'] = 'Die erstellte Regel ist zu lang, um von SMF gespeichert zu werden. Versuchen sie die Regel in mehrere kurze Regeln aufzuteilen.';

$txt['pm_readable_and'] = '<em>und</em>';
$txt['pm_readable_or'] = '<em>oder</em>';
$txt['pm_readable_start'] = 'Wenn ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'die Mitteilung von "{MEMBER}" ist';
$txt['pm_readable_group'] = 'der Absender in der Gruppe "{GROUP}" ist';
$txt['pm_readable_subject'] = 'der Betreff "{SUBJECT}" enth�lt';
$txt['pm_readable_body'] = 'der Mitteilungstext "{BODY}" enth�lt';
$txt['pm_readable_buddy'] = 'der Absender ein Buddy ist';
$txt['pm_readable_label'] = 'wird das Label "{LABEL}" hinzugef�gt';
$txt['pm_readable_delete'] = 'wird die Mitteilung gel�scht';
$txt['pm_readable_then'] = '<strong>dann</strong>';

?>