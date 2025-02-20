<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Die folgenden Themen erwarten eine Genehmigung:';
$txt['scheduled_approval_email_msg'] = 'Die folgenden Beitr�ge erwarten eine Genehmigung:';
$txt['scheduled_approval_email_attach'] = 'Die folgenden Dateianh�nge erwarten eine Genehmigung:';
$txt['scheduled_approval_email_event'] = 'Die folgenden Ereignisse erwarten eine Genehmigung:';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONCODE: The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername ist "{USERNAME}". Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

Bevor Sie sich einloggen k�nnen, m�ssen Sie zuerst Ihr Konto aktivieren. Dazu folgen Sie bitte folgendem Link:

{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Ihre Anfrage zur Registrierung im Forum {FORUMNAME} wurde gestellt, {REALNAME}.

Der Benutzername mit dem Sie sich registriert haben ist {USERNAME}.

Bevor Sie sich einloggen und das Forum benutzen k�nnen, wird Ihre Anfrage gepr�ft und genehmigt. Wenn dies geschehen ist, erhalten Sie eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Genehmigung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir freuen uns Ihnen mitteilen zu k�nnen, dass Ihre Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beitreten zu d�rfen akzeptiert wurde. Ihr Benutzerkonto wurde um die neue Mitgliedergruppe erg�nzt.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Ablehnung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir bedauern Ihnen mitteilen zu m�ssen, dass Ihre Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beitreten zu d�rfen abgelehnt wurde.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Ablehnung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir bedauern Ihnen mitteilen zu m�ssen, dass Ihre Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beitreten zu d�rfen abgelehnt wurde.

Dies erfolgte aus folgenden Gr�nden: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Willkommen, {NAME}!


Ihr Benutzerkonto wurde vom Administrator aktiviert. Sie k�nnen sich jetzt anmelden und Beitr�ge schreiben. Ihr Benutzername ist: {USERNAME}

Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Willkommen, {USERNAME}!

Ihr Benutzerkonto im Forum {FORUMNAME} wurde vom Administrator genehmigt und muss jetzt aktiviert werden, bevor Sie Beitr�ge schreiben k�nnen. Bitte benutzen Sie folgenden Link, um Ihr Benutzerkonto zu aktivieren:

{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Registrierung abgelehnt',
		'body' => '{USERNAME},

Ihre Anfrage dem Forum {FORUMNAME} beizutreten wurde abgelehnt.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Profil gel�scht',
		'body' => '{USERNAME},

Ihr Profil im Forum {FORUMNAME} wurde gel�scht. Dies ist eventuell passiert, weil Sie Ihr Profil nie aktiviert haben. War dies der Fall, k�nnen Sie sich jederzeit erneut registrieren.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Registrierungserinnerung',
		'body' => '{USERNAME},
Sie haben Ihr Benutzerkonto im Forum {FORUMNAME} noch nicht aktiviert.

Bitte benutzen Sie folgenden Link, um Ihr Benutzerkonto zu aktivieren:
{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert. Ihr Benutzername lautet {USERNAME} und Ihr Passwort lautet {PASSWORD}.

Bevor Sie sich einloggen k�nnen, m�ssen Sie zuerst Ihr Konto aktivieren. Dazu folgen Sie bitte folgendem Link:

{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".
{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert. Ihr Benutzername lautet {USERNAME} und Ihr Passwort lautet {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => 'Neue Ank�ndigung: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Um diese Ank�ndigungen abzubestellen, loggen Sie sich bitte im Forum ein und deaktivieren die Option "E-Mail Benachrichtigung bei neuen Ank�ndigungen schicken" in Ihrem Profil.

Sie k�nnen die komplette Ank�ndigung unter folgendem Link lesen:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Sie beobachten.

Sie finden es unter
{TOPICLINK}


Es k�nnten mehrere Themen erstellt worden sein, Sie erhalten jedoch erst weitere Benachrichtigungen, wenn Sie das Board besucht haben.

Der Titel des Themas lautet:
{MESSAGE}

Um die Benachrichtigungen �ber neue Themen aus diesem Board abzubestellen, klicken Sie bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Sie beobachten.

Sie finden es unter
{TOPICLINK}

Es k�nnten mehrere Themen erstellt worden sein, Sie erhalten jedoch erst weitere Benachrichtigungen, wenn Sie das Board besucht haben.

Um die Benachrichtigungen �ber neue Themen aus diesem Board abzubestellen, klicken Sie bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Sie beobachten.

Sie finden es unter
{TOPICLINK}

Der Inhalt des Themas lautet:
{MESSAGE}

Um die Benachrichtigungen �ber neue Themen aus diesem Board abzubestellen, klicken Sie bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Sie beobachten.

Sie finden es unter
{TOPICLINK}

Um die Benachrichtigungen �ber neue Themen aus diesem Board abzubestellen, klicken Sie bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Neue Gruppenbeitrittsanfrage',
		'body' => '{RECPNAME},

{APPYNAME} hat eine Mitgliedschaft f�r die Gruppe "{GROUPNAME}" angefordert. Der Benutzer hat folgenden Grund angegeben:

{REASON}

Sie k�nnen diese Anfrage genehmigen oder ablehnen, in dem Sie den folgenden Link besuchen:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => 'Das Abonnement im Forum {FORUMNAME} l�uft ab',
		'body' => '{REALNAME},

Eines Ihrer Abonnements im Forum {FORUMNAME} l�uft in der n�chsten Zeit ab. Wenn Sie beim Bestellen des Abonnements die automatische Erneuerung aktiviert haben, m�ssen Sie nichts weiter tun - ansonsten m�ssen Sie das Abonnement nochmal durchf�hren, wenn sie dies m�chten. Lesen Sie die folgenden Details:

Name des Abonnements: {SUBSCRIPTION}
L�uft ab: {END_DATE}

Um Ihre Abonnements zu �ndern, besuchen Sie bitte folgenden Link:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Willkommen zur�ck im Forum {FORUMNAME}',
		'body' => 'Um Ihre E-Mail-Adresse zu �berpr�fen, wurde Ihr Profil deaktiviert. Klicken Sie den folgenden Link, um es wieder zu aktivieren:
{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Neues Passwort f�r das Forum {FORUMNAME}',
		'body' => 'Sehr geehrte/r {REALNAME},
Diese E-Mail wurde Ihnen zugesandt, weil die Funktion \'Passwort vergessen\' auf ihr Benutzerkonto angewendet worden ist. Um ein neues Passwort festzulegen, klicken Sie bitte auf den folgenden Link:
{REMINDLINK}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => 'OpenID Erinnerung f�r {FORUMNAME}',
		'body' => 'Sehr geehrte/r {REALNAME},
Diese E-Mail wurde versandt, weil die  \'OpenID vergessen\' Funktion auf ihr Benutzerkonto angewendet wurde. Folgend die OpenID die mit ihrem Benutzerkonto verbunden ist:
{OPENID}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Zusammenfassung der Beitr�ge, die eine Genehmigung im Forum {FORUMNAME} erwarten',
		'body' => '{REALNAME},

Diese E-Mail enth�lt eine Zusammenfassung der Beitr�ge, die im Forum {FORUMNAME} eine Genehmigung erwarten.

{BODY}

Bitte loggen Sie sich im Forum ein, um die einzelnen Beitr�ge zu pr�fen.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Thema: {TOPICSUBJECT} (Von: {SENDERNAME})',
		'body' => 'Sehr geehrte/r {RECPNAME},
Bitte schauen Sie sich das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} an. Um dorthin zu gelangen, klicken Sie bitte auf folgenden Link:

{TOPICLINK}

Vielen Dank,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Thema: {TOPICSUBJECT} (Von: {SENDERNAME})',
		'body' => 'Sehr geehrte/r {RECPNAME},
Bitte schauen Sie sich das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} an. Um dorthin zu gelangen, klicken Sie bitte auf folgenden Link:

{TOPICLINK}

Es wurde ebenfalls ein Kommentar dazu abgegeben:
{COMMENT}

Vielen Dank,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Gemeldeter Beitrag: {TOPICSUBJECT} von {POSTERNAME}',
		'body' => 'Der folgende Beitrag, "{TOPICSUBJECT}" von {POSTERNAME} wurde von {REPORTERNAME} in einem von Ihnen moderierten Board gemeldet:

Das Thema: {TOPICLINK}
Moderator-Center: {REPORTLINK}

Der Benutzer hat folgenden Kommentar dazu geschrieben:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'Details zum neuen Passwort',
		'body' => 'Hallo, {USERNAME}!

Ihre Daten zum Einloggen im Forum {FORUMNAME} wurden ge�ndert und das Passwort zur�ckgesetzt. Im folgenden sind Ihre neuen Login-Daten aufgelistet.

Ihr Benutzername ist "{USERNAME}" und Ihr Passwort ist "{PASSWORD}".

Sie k�nnen diese Daten �ndern, nach dem Sie sich eingeloggt haben und Ihr Profil editieren. Sie k�nnen nach dem Einloggen auch folgenden Link besuchen:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!
Ihr Benutzername ist {USERNAME}. Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

Bevor Sie sich einloggen k�nnen, m�ssen Sie Ihr Benutzerkonto zuerst aktivieren. Um dies zu tun, klicken Sie bitte den folgenden Link:

{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername ist {USERNAME}.
Sie haben sich entschieden sich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor Sie sich einloggen k�nnen, m�ssen Sie Ihr Benutzerkonto zuerst aktivieren. Um dies zu tun, klicken Sie bitte den folgenden Link:

{ACTIVATIONLINK}

Sollten Sie Probleme mit der Aktivierung haben, verwenden Sie bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und geben Sie dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK: The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername ist {USERNAME} und das Passwort lautet {PASSWORD}. Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

Bevor Sie sich einloggen k�nnen, ben�tigt der Administrator das Einverst�ndnis Ihrer Eltern/Erziehungsberechtigten. Sie k�nnen mehr Informationen unter dem folgenden Link lesen:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK: The url link to the coppa form.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername ist {USERNAME}.

Sie haben sich dazu entschieden, sich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor Sie sich einloggen k�nnen, ben�tigt der Administrator das Einverstandnis Ihrer Eltern/Erziehungsberechtigten. Sie k�nnen mehr Informationen unter dem folgenden Link lesen:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername lautet {USERNAME}. Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Sie sind jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Ihr Benutzername ist {USERNAME}.

Sie haben sich entschieden sich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Sie k�nnen ihr Profil aktualisieren, indem Sie nach dem Einloggen die folgende Seite besuchen:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Ihre Registrierungsanfrage im Forum {FORUMNAME} haben wir erhalten, {REALNAME}.

Ihr Benutzername, mit dem Sie sich registriert haben, ist {USERNAME}. Wenn Sie Ihr Passwort vergessen haben, k�nnen Sie es unter folgenden Link zur�cksetzen: {FORGOTPASSWORDLINK}

Bevor Sie sich einloggen und das Forum benutzen k�nnen, muss Ihre Registrierung genehmigt werden. Sobald dies geschehen ist, erhalten Sie eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Ihre Registrierungsanfrage im Forum {FORUMNAME} haben wir erhalten, {REALNAME}.

Ihr Benutzername, mit dem Sie sich registriert haben, ist {USERNAME}.

Sie haben sich entschieden sich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor Sie sich einloggen und das Forum benutzen k�nnen, muss Ihre Registrierung genehmigt werden. Sobald dies geschehen ist, erhalten Sie eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In diesem Thema wurde eine Antwort von {POSTERNAME} geschrieben.

Lesen Sie die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In diesem Thema wurde eine Antwort von {POSTERNAME} geschrieben.

Lesen Sie die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

Der Text der Antwort lautet:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In einem Thema das Sie beobachten wurde eine Antwort von {POSTERNAME} geschrieben.

Lesen Sie die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

Es k�nnten mehrere Anworten geschrieben worden sein, Sie erhalten jedoch erst weitere Benachrichtigungen, wenn Sie das Thema gelesen haben.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In einem Thema das Sie beobachten wurde eine Antwort von {POSTERNAME} geschrieben.

Lesen Sie die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

Der Text der Antwort lautet:
{MESSAGE}

Es k�nnten mehrere Anworten geschrieben worden sein, Sie erhalten jedoch erst weitere Benachrichtigungen, wenn Sie das Thema gelesen haben.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Thema fixiert: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} fixiert.

Lesen Sie das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Thema geschlossen: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} geschlossen.

Lesen Sie das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Thema ge�ffnet: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} wieder ge�ffnet.

Lesen Sie das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Thema gel�scht: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} gel�scht.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Thema verschoben: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} in ein anderes Board verschoben.

Lesen Sie das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Thema zusammengef�hrt: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} mit einem anderen Thema zusammengef�hrt.

Lesen Sie das neue, zusammengef�hrte Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Thema geteilt: {TOPICSUBJECT}',
		'body' => 'Ein von Ihnen beobachtetes Thema wurde von {POSTERNAME} in zwei oder mehr Themen geteilt.

Lesen Sie das verbliebene Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicken Sie auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Ein neues Mitglied hat sich angemeldet',
		'body' => '{USERNAME} hat sich als neues Mitglied in Ihrem Forum angemeldet. Klicken Sie den folgenden Link, um das Profil zu betrachten.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Ein neues Mitglied hat sich angemeldet',
		'body' => '{USERNAME} hat sich als neues Mitglied in Ihrem Forum angemeldet. Klicken Sie den folgenden Link, um das Profil zu betrachten.
{PROFILELINK}

Bevor dieses Mitglied Beitr�ge schreiben kann, muss das Profil zuerst genehmigt werden. Klicken Sie den folgenden Link, um auf die Aktivierungsseite zu gelangen.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Dringend! Das Anh�nge-Verzeichnis ist fast voll',
		'body' => '{REALNAME},

Das Verzeichnis f�r Anh�nge des Forums {FORUMNAME} ist fast voll. Bitte kontrollieren Sie die Einstellungen, um das Problem zu beseitigen.

Wenn das Anh�nge-Verzeichnis die max. Gr��e erreicht hat, k�nnen die Benutzer keine weiteren Dateianh�nge oder Benutzerbilder hochladen (wenn aktiviert).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Zur�ckgezahltes Abonnement',
		'body' => '{REALNAME},

Ein Benutzer hat ein bezahltes Abonnement zur�ckerstattet bekommen. Hier sind weitere Details des Abonnements:

	Abonnement: {NAME}
	Benutzername: {REFUNDNAME} ({REFUNDUSER})
	Datum: {DATE}

Sie k�nnen das Profil des Benutzers anschauen, in dem Sie den folgenden Link anklicken:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Neues bezahltes Abonnement',
		'body' => '{REALNAME},

Ein Benutzer hat ein neues Abonnement bestellt. Hier sind die Details zu der Bestellung:

	Abonnement: {NAME}
	Benutzername: {SUBNAME} ({SUBUSER})
	E-Mail-Adresse: {SUBEMAIL}
	Preis: {PRICE}
	Datum: {DATE}

Sie k�nnen das Profil des Benutzers anschauen, in dem Sie den folgenden Link anklicken:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Bezahltes-Abonnement-Fehler ist aufgetreten',
		'body' => '{REALNAME},

Der folgende Fehler trat w�hrend dem Verarbeiten einer bezahlten Abonnements auf
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'Herzlichen Gl�ckwunsch vom Forum {FORUMNAME}.',
		'body' => 'Sehr geehrte/r {REALNAME},

Wir vom Forum {FORUMNAME} w�nschen Ihnen alles Gute zum Geburtstag. Wir hoffen, dass dieser Tag und das folgende Jahr zu Ihrer vollsten Zufriedenheit verl�uft.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>, aus dem englischen �bersetzt',
	),
	'karlbenson1' => array(
		'subject' => 'An Ihrem Geburtstag...',
		'body' => 'Wir h�tten Ihnen eine Geburtstagskarte senden k�nnen. Wir h�tten Ihnen Blumen oder einen Kuchen schicken k�nnen.

Haben wir aber nicht.

Wir h�tten Ihnen auch eine dieser automatisch generierten Nachrichten schicken k�nnen, bei der noch nicht mal der Wortlaut NAME EINF�GEN h�tte ersetzt werden m�ssen.

Haben wir aber nicht.

Wir haben diesen Geburtstaggru� extra f�r Sie geschrieben.

Wir w�nschen Ihnen alles Gute zu Ihrem Geburtstag.

{REGARDS}

//:: Diese Nachricht wurde automatisch generiert :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>, aus dem englischen �bersetzt',
	),
	'nite0859' => array(
		'subject' => 'Herzlichen Gl�ckwunsch!',
		'body' => 'Ihre Freunde im Forum {FORUMNAME} w�rden gerne einen Moment Ihrer kostbaren Zeit stehlen, um Ihnen alles Gute zum Geburtstag zu w�nschen, {REALNAME}. Wenn Sie es noch nicht gemacht haben, besuchen Sie das Forum um anderen Benutzern die M�glichkeit zu geben, ein paar Gr��e loszuwerden .

Auch wenn heute Ihr Geburtstag ist, {REALNAME}, m�chten wir Sie daran erinnern, dass Ihre Mitgliedschaft in unserem Forum das gr��te Geschenk von allen war.

Herzliche Gr��e,
Die Forumleitung von {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>, aus dem englischen �bersetzt, aus dem englischen �bersetzt',
	),
	'zwaldowski' => array(
		'subject' => 'Geburtstagsgr��e f�r {REALNAME}',
		'body' => 'Sehr geehrte/r {REALNAME},

ein weiteres Jahr in Ihrem Leben ist vorbei. Wir vom Forum {FORUMNAME} hoffen, dass es Ihnen Spa� gemacht hat und w�schen Ihnen f�r das kommende Jahr viel Gl�ck.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>, aus dem englischen �bersetzt',
	),
	'geezmo' => array(
		'subject' => 'Herzlichen Gl�ckwunsch, {REALNAME}!',
		'body' => 'Wissen Sie, wer heute Geburtstag hat, {REALNAME}?

Wir wissen es... SIE! 

Herzlichen Gl�ckwunsch!

Sie sind jetzt zwar ein Jahr �lter, aber wir hoffen, dass Sie auch gl�cklicher als letztes Jahr sind.

Wir w�nschen Ihnen einen sch�nen Tag, {REALNAME}!

- Ihr Forenteam von {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>, aus dem englischen �bersetzt',
	),
	'karlbenson2' => array(
		'subject' => 'Ihre Geburtstagsgl�ckw�nsche',
		'body' => 'Wir hoffen, dass dieser Geburtstag der beste aller Zeiten ist, egal welches Wetter herrscht.
Wir w�nschen Ihnen viele Geburtstagskuchen und viel Spa� - erz�hlen Sie uns, was Sie heute erlebt haben.

Bis n�chstes Jahr, zur selben Zeit, am selben Ort.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>, aus dem englischen �bersetzt',
	),
);

?>