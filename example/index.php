<?php

require_once('d:\server\home\manager\application\MailReceiver\ImapMailbox.php');

// IMAP must be enabled in Google Mail Settings
define('GMAIL_EMAIL', 'barbushin@gmail.com');
define('GMAIL_PASSWORD', 'tgbhotw123123');
define('ATTACHMENTS_DIR', dirname(__FILE__) . '/attachments');

$mailbox = new ImapMailbox('{imap.gmail.com:993/imap/novalidate-cert/ssl}INBOX', GMAIL_EMAIL, GMAIL_PASSWORD, ATTACHMENTS_DIR, 'utf-8');
$mails = array();

foreach($mailbox->searchMails('ALL') as $mailId) {
	$mail = $mailbox->getMail($mailId);
	// $mailbox->setMailAsSeen($mail->mId);
	// $mailbox->deleteMail($mail->mId);
	$mails[] = $mail;
}

var_dump($mails);