# Movable Type (r) (C) 2001-2008 Six Apart, Ltd. All Rights Reserved.
# This code cannot be redistributed without permission from www.sixapart.com.
# For more information, consult your Movable Type license.
#
# $Id: de.pm 99820 2009-03-09 13:55:28Z mschenk $

package ActionStreams::L10N::de;

use strict;
use base 'ActionStreams::L10N::en_us';
use vars qw( %Lexicon );
%Lexicon = (

# plugins/ActionStreams/blog_tmpl/sidebar.mtml

## plugins/ActionStreams/blog_tmpl/main_index.mtml

## plugins/ActionStreams/blog_tmpl/actions.mtml
	'Recent Actions' => 'Aktuelle Aktionen',

## plugins/ActionStreams/blog_tmpl/archive.mtml

## plugins/ActionStreams/blog_tmpl/banner_footer.mtml

## plugins/ActionStreams/blog_tmpl/elsewhere.mtml
	'Find [_1] Elsewhere' => '[_1] anderswo finden',

## plugins/ActionStreams/streams.yaml
	'Currently Playing' => 'Aktuelle Spiele',
	'The games in your collection you\'re currently playing' => 'Die Spiele aus Ihrer Sammlung, die Sie derzeit spielen',
	'Comments you have made on the web' => 'Kommentare, die Sie im Web geschrieben haben',
	'Colors' => 'Farben',
	'Colors you saved' => 'Ihre gespeicherten Farben',
	'Palettes' => 'Paletten',
	'Palettes you saved' => 'Ihre gespeicherten Paletten',
	'Patterns' => 'Muster',
	'Patterns you saved' => 'Ihre gespeicherten Muster',
	'Favorite Palettes' => 'Lieblings-Paletten',
	'Palettes you saved as favorites' => 'Paletten, die Sie als Favoriten gespeichert haben',
	'Reviews' => 'Kritiken',
	'Your wine reviews' => 'Ihre Wein-Kritiken',
	'Cellar' => 'Weinkeller',
	'Wines you own' => 'Weine in Ihrer Sammlung',
	'Shopping List' => 'Shopping-Liste',
	'Wines you want to buy' => 'Weine, die Sie kaufen möchten',
	'Links' => 'Links',
	'Your public links' => 'Ihre öffentlichen Links',
	'Dugg' => 'Gediggt',
	'Links you dugg' => 'Links, die Sie gediggt haben',
	'Submissions' => 'Eingereicht',
	'Links you submitted' => 'Links, die Sie eingereicht haben',
	'Found' => 'Gefunden',
	'Photos you found' => 'Fotos, die Sie gefunden haben',
	'Favorites' => 'Favoriten',
	'Photos you marked as favorites' => 'Fotos, die Sie als Favoriten gespeichert haben',
	'Photos' => 'Fotos',
	'Photos you posted' => 'Fotos, die Sie veröffentlicht haben',
	'Likes' => 'Gefallen',
	'Things from your friends that you "like"' => 'Veröffentlichungen Ihrer Freude, die Ihnen gefallen haben',
	'Leaderboard scores' => 'Leaderboard-Scores',
	'Your high scores in games with leaderboards' => 'Ihre High Scores in Leaderboard-Spielen',
	'Posts' => 'Einträge',
	'Blog posts about your search term' => 'Blog-Einträge zu Ihrem Suchbegriff',
	'Stories' => 'Nachrichten',
	'News Stories matching your search' => 'Nachrichten zu Ihrem Suchbegriff',
	'To read' => 'Zu lesen',
	'Books on your "to-read" shelf' => 'Bücher, die Sie noch lesen möchten',
	'Reading' => 'Aktuelle Lektüre',
	'Books on your "currently-reading" shelf' => 'Bücher, die Sie derzeit lesen',
	'Read' => 'Gelesen',
	'Books on your "read" shelf' => 'Bücher, die Sie bereits gelesen haben',
	'Shared' => 'Geteilt',
	'Your shared items' => 'Geteilte Artikel',
	'Deliveries' => 'Lieferungen',
	'Icon sets you were delivered' => 'Ihre gelieferten Icon-Gruppen',
	'Notices' => 'Hinweise',
	'Notices you posted' => 'Hinweise, die Sie veröffentlicht haben',
	'Intas' => 'Intas',
	'Links you saved' => 'Ihre veröffentlichten Links',
	'Photos you posted that were approved' => 'Fotos von Ihnen, die auf Zustimmung gestoßen sind',
	'Recent events' => 'Aktuelle Ereignisse',
	'Events from your recent events feed' => 'Ereignisse von Ihrem Aktuelle Ereignisse-Feed',
	'Apps you use' => 'Anwendungen',
	'The applications you saved as ones you use' => 'Anwendungen, die Sie einsetzen',
	'Videos you saved as watched' => 'Videos, die Sie gesehen haben',
	'Jaikus' => 'Jaikus',
	'Jaikus you posted' => 'Ihre Jaikus',
	'Games you saved as favorites' => 'Spiele, die Sie als Favoriten gespeichert haben',
	'Achievements' => 'Erfolge',
	'Achievements you won' => 'Erfolge, die Sie erzielt haben',
	'Tracks' => 'Lieder',
	'Songs you recently listened to (High spam potential!)' => 'Lieder, die Sie kürzlich gehört haben (hohe Spam-Gefahr!)',
	'Loved Tracks' => 'Lieblingslieder',
	'Songs you marked as "loved"' => 'Ihre Lieblingslieder',
	'Journal Entries' => 'Tagebuch-Einträge',
	'Your recent journal entries' => 'Ihre aktuellen Tagebuch-Einträge',
	'Events' => 'Veranstaltungen',
	'The events you said you\'ll be attending' => 'Veranstaltungen, an denen Sie vorhaben teilzunehmen',
	'Your public posts to your journal' => 'Ihre öffentlichen Tagebuch-Einträge',
	'Queue' => 'Ausleihliste',
	'Movies you added to your rental queue' => 'Filme auf Ihrer Ausleihliste',
	'Recent Movies' => 'Aktuelle Filme',
	'Recent Rental Activity' => 'Kürzlich ausgeliehene Filme',
	'Kudos' => 'Kudos',
	'Kudos you have received' => 'Kudos, die Sie erhalten haben',
	'Favorite Songs' => 'Lieblings-Lieder',
	'Songs you marked as favorites' => 'Ihre Lieblings-Lieder',
	'Favorite Artists' => 'Lieblings-Musiker',
	'Artists you marked as favorites' => 'Ihre Lieblings-Musiker',
	'Stations' => 'Sender',
	'Radio stations you added' => 'Radiostationen, die Sie in Ihre Liste aufgenommen haben',
	'List' => 'Liste',
	'Things you put in your list' => 'Dinge auf Ihrer Liste',
	'Notes' => 'Notizen',
	'Your public notes' => 'Ihre öffentlichen Notizen',
	'Comments you posted' => 'Ihre Kommentare',
	'Articles you submitted' => 'Artikel, die Sie eingereicht haben',
	'Articles you liked (your votes must be public)' => 'Artikel, die Ihnen gefallen haben (bei öffentlicher Abstimmung)',
	'Dislikes' => 'Nicht gefallen',
	'Articles you disliked (your votes must be public)' => 'Artikel, die Ihnen nicht gefallen haben (bei öffentlicher Abstimmung)',
	'Slideshows you saved as favorites' => 'Slideshows, die Sie als Favoriten gespeichert haben',
	'Slideshows' => 'Slideshows',
	'Slideshows you posted' => 'Slideshows, die Sie veröffentlicht haben',
	'Your achievements for achievement-enabled games' => 'Ihre Achievements bei Spielen, die das Achievements-System unterstützen',
	'Stuff' => 'Sachen',
	'Things you posted' => 'Sachen, die Sie veröffentlicht haben',
	'Tweets' => 'Tweets',
	'Your public tweets' => 'Ihre öffentlichen Tweets',
	'Public tweets you saved as favorites' => 'Öffentliche Tweets, die Sie als Ihre Favoriten gespeichert haben',
	'Tweets about your search term' => 'Tweets zu Ihren Suchbegriffen',
	'Saved' => 'Gespeichert',
	'Things you saved as favorites' => 'Dinge, die Sie als Favoriten gespeichert haben',
	'Events you are watching or attending' => 'Veranstaltungen, an denen Sie teilnehmen',
	'Videos you posted' => 'Videos, die Sie veröffentlicht haben',
	'Videos you liked' => 'Videos, die Ihnen gefallen haben',
	'Public assets you saved as favorites' => 'Öffentliche Assets, die Sie als Favoriten gespeichert haben',
	'Your public photos in your Vox library' => 'Ihre öffentlichen Fotos in Ihrer Vox-Sammlung',
	'Your public posts to your Vox' => 'Ihre öffentlichen Einträge auf Vox',
	'The posts available from the website\'s feed' => 'Die im Feed der Website verfügbaren Einträge.',
	'Wists' => 'Wists',
	'Stuff you saved' => 'Sachen, die Sie gespeichert haben',
	'Gamerscore' => 'Gamerscore',
	'Notes when your gamerscore passes an even number' => 'Benachrichtigt Sie, wenn Ihr Gamerscore eine gerade Zahl überschritten wird',
	'Places you reviewed' => 'Orte, über die Sie Kritiken geschrieben haben',
	'Videos you saved as favorites' => 'Vidoes, die Sie als Favoriten gespeichert haben',

## plugins/ActionStreams/services.yaml
	'1up.com' => '1up.com',
	'43Things' => '43Things',
	'Screen name' => 'Bildschirmname',
	'backtype' => 'backtype', # Translate - New # OK
	'Bebo' => 'Bebo',
	'Catster' => 'Catster',
	'COLOURlovers' => 'COLOURlovers',
	'Cork\'\'d\'' => 'Cork\'d',
	'Delicious' => 'Delicious',
	'Destructoid' => 'Destructoid',
	'Digg' => 'Digg',
	'Dodgeball' => 'Dodgeball',
	'Dogster' => 'Dogster',
	'Dopplr' => 'Dopplr',
	'Facebook' => 'Facebook',
	'User ID' => 'Benutzerkennung',
	'You can find your Facebook userid within your profile URL.  For example, http://www.facebook.com/profile.php?id=24400320.' => 'Ihre Facebook-Benutzerkennung ist die Zahl in der Webadresse Ihres Profils; z.B. http://www.facebook.com/profile.php?id=24400320',
	'FFFFOUND!' => 'FFFFOUND!',
	'Flickr' => 'Flickr',
	'Enter your Flickr userid which contains "@" in it, e.g. 36381329@N00.  Flickr userid is NOT the username in the URL of your photostream.' => 'Ihre Flickr-Benutzerkennung ist NICHT Ihr Benutzername, sondern der Teil der Webadresse Ihres Profils mit dem "@"-Zeichen; z.B. 36381329@N00',
	'FriendFeed' => 'FriendFeed',
	'Gametap' => 'Gametap',
	'Google Blogs' => 'Google Blogs',
	'Search term' => 'Suchbegriff',
	'Google News' => 'Google News',
	'Search for' => 'Suchen nach',
	'Goodreads' => 'Goodreads',
	'You can find your Goodreads userid within your profile URL. For example, http://www.goodreads.com/user/show/123456.' => 'Ihre Goodreads-Benutzerkennung ist die Zahl in der Webadresse Ihres Profils; z.B. http://www.goodreads.com/user/show/123456',
	'Google Reader' => 'Google Reader',
	'Sharing ID' => 'Sharing-ID',
	'Hi5' => 'Hi5',
	'IconBuffet' => 'IconBuffet',
	'ICQ' => 'ICQ',
	'UIN' => 'UIN',
	'Identi.ca' => 'Identi.ca',
	'Iminta' => 'Iminta',
	'iStockPhoto' => 'iStockPhoto',
	'You can find your istockphoto userid within your profile URL.  For example, http://www.istockphoto.com/user_view.php?id=1234567.' => 'Ihre istockphoto-Benutzerkennung ist die Zahl in der Webadresse Ihres Profils; z.B. http://www.istockphoto.com/user_view.php?id=1234567',
	'IUseThis' => 'IUseThis',
	'iwatchthis' => 'iwatchthis',
	'Jabber' => 'Jabber',
	'Jabber ID' => 'Jabber-ID',
	'Jaiku' => 'Jaiku',
	'Kongregate' => 'Kongregate',
	'Last.fm' => 'Last.fm',
	'LinkedIn' => 'LinkedIn',
	'Profile URL' => 'Profil-URL',
	'Ma.gnolia' => 'Ma.gnolia',
	'MOG' => 'MOG',
	'MSN Messenger\'' => 'MSN Messenger',
	'Multiply' => 'Multiply',
	'MySpace' => 'MySpace',
	'Netflix' => 'Netflix',
	'Netflix RSS ID' => 'Netflix RSS-ID',
	'To find your Netflix RSS ID, click "RSS" at the bottom of any page on the Netflix site, then copy and paste in your "Queue" link.' => 'Ihre Netflix RSS-ID finden Sie, indem Sie auf einer beliebigen Netflix-Seite unten auf "RSS" klicken und dann den "Queue"-Link koppieren',
	'Netvibes' => 'Netvibes',
	'Newsvine' => 'Newsvine',
	'Ning' => 'Ning',
	'Social Network URL' => 'Social Network-URL',
	'Ohloh' => 'Ohloh',
	'Orkut' => 'Orkut',
	'You can find your orkut uid within your profile URL. For example, http://www.orkut.com/Main#Profile.aspx?rl=ls&uid=1234567890123456789' => 'Ihre Orkut-Benutzerkennung ist die Zahl in der Webadresse Ihres Profils nach "uid="; z.B. http://www.orkut.com/Main#Profile.aspx?rl=ls&uid=1234567890123456789',
	'Pandora' => 'Pandora',
	'Picasa Web Albums' => 'Picasa Web-Alben',
	'p0pulist' => 'p0pulist',
	'You can find your p0pulist user id within your Hot List URL. for example, http://p0pulist.com/list/hot_list/10000' => 'Ihre p0pulist-Benutzerkennung ist die Zahl in der Webadresse Ihres Profil; z.B. http://p0pulist.com/list/hot_list/10000',
	'Pownce' => 'Pownce',
	'Reddit' => 'Reddit',
	'Skype' => 'Skype',
	'SlideShare' => 'SlideShare',
	'Smugmug' => 'Smugmug',
	'SonicLiving' => 'SonicLiving',
	'You can find your SonicLiving userid within your share&subscribe URL. For example, http://sonicliving.com/user/12345/feeds' => 'Ihre SonicLiving-Benutzerkennung ist die Zahl in der Webadresse Ihrer Share&Subscribe-Seite; z.B. http://sonicliving.com/user/12345/feeds',
	'Steam' => 'Steam',
	'StumbleUpon' => 'StumbleUpon',
	'Tabblo' => 'Tabblo',
	'Blank should be replaced by positive sign (+).' => 'Verwenden Sie statt Leerzeichen Pluszeichen (+)',
	'Tribe' => 'Tribe',
	'You can find your tribe userid within your profile URL.  For example, http://people.tribe.net/dcdc61ed-696a-40b5-80c1-e9a9809a726a.' => 'Ihre Tribe-Benutzerkennung ist die Zahl in der Webadresse Ihres Profils; z.B. http://people.tribe.net/dcdc61ed-696a-40b5-80c1-e9a9809a726a',
	'Tumblr' => 'Tumblr',
	'Twitter' => 'Twitter',
	'TwitterSearch' => 'TwitterSearch',
	'Uncrate' => 'Uncrate',
	'Upcoming' => 'Upcoming',
	'Viddler' => 'Viddler',
	'Vimeo' => 'Vimeo',
	'Virb' => 'Virb',
	'You can find your VIRB userid within your home URL.  For example, http://www.virb.com/backend/2756504321310091/your_home.' => 'Ihre Virb-Benutzerkennung ist die Zahl in der Webadresse Ihrer Startseite; z.B. http://www.virb.com/backend/2756504321310091/your_home',
	'Vox name' => 'Vox-Name',
	'Website' => 'Website',
	'Xbox Live\'' => 'Xbox Live',
	'Gamertag' => 'Gamertag',
	'Yahoo! Messenger\'' => 'Yahoo! Messenger',
	'Yelp' => 'Yelp',
	'YouTube' => 'YouTube',
	'Zooomr' => 'Zooomr',

## plugins/ActionStreams/config.yaml
	'Manages authors\' accounts and actions on sites elsewhere around the web' => 'Verwaltet die Benutzerkonten und Ereignisse des Autors auf anderen Websites',
	'Are you sure you want to hide EVERY event in EVERY action stream?' => 'Wirklich ALLE Ereignisse in ALLEN Action Streams verstecken?',
	'Are you sure you want to show EVERY event in EVERY action stream?' => 'Wirklich ALLE Ereignisse in ALLEN Action Streams anzeigen?',
	'Deleted events that are still available from the remote service will be added back in the next scan. Only events that are no longer available from your profile will remain deleted. Are you sure you want to delete the selected event(s)?' => 'Gelöschte Ereignisse, die bei dem jeweiligen Web-Dienst noch aufgeführt sind, werden bei der nächsten Aktualisierung wieder hinzugefügt. Gelöscht werden nur Ereignisse, die nicht mehr in Ihrem Profil verfügbar sind. Gewählte Ereignisse wirklich löschen?',
	'Hide All' => 'Alle verbergen',
	'Show All' => 'Alle zeigen',
	'Poll for new events' => 'Auf neue Ereignisse abfragen',
	'Update Events' => 'Ereignisse aktualisieren',
	'Action Stream' => 'Action Streams',
	'Main Index (Recent Actions)' => 'Startseite (aktuelle Aktionen)',
	'Action Archive' => 'Aktions-Archiv',
	'Feed - Recent Activity' => 'Feed - Aktuelle Aktivitäten',
	'Find Authors Elsewhere' => 'Autoren anderswo finden',
	'Enabling default action streams for selected profiles...' => 'Aktiviere Standard-Action Streams für die gewählten Profile...',

## plugins/ActionStreams/lib/ActionStreams/Upgrade.pm
	'Updating classification of [_1] [_2] actions...' => 'Aktualisiere Klassifizierungen von [_1] [_2]-Aktionen',
	'Renaming "[_1]" data of [_2] [_3] actions...' => 'Benenne "[_1]"-Daten von [_2] [_3]-Aktionen um...',

## plugins/ActionStreams/lib/ActionStreams/Worker.pm
	'No such author with ID [_1]' => 'Kein solcher Autor mit ID [_1]',

## plugins/ActionStreams/lib/ActionStreams/Plugin.pm
	'Other Profiles' => 'Andere Profile',
	'Profiles' => 'Profile',
	'Actions from the service [_1]' => 'Aktionen bei [_1]',
	'Actions that are shown' => 'Angezeigte Ereignisse',
	'Actions that are hidden' => 'Versteckte Ereignisse',
	'No such event [_1]' => 'Kein solches Ereignis [_1]',
	'[_1] Profile' => '[_1] Profil',

## plugins/ActionStreams/lib/ActionStreams/Tags.pm
	'No user [_1]' => 'Kein Benutzer [_1]',

## plugins/ActionStreams/lib/ActionStreams/Event.pm
	'[_1] updating [_2] events for [_3]' => '[_1] aktualisiert [_2]-Ereignisse für [_3]',
	'Error updating events for [_1]\'s [_2] stream (type [_3] ident [_4]): [_5]' => 'Fehler bei der Aktualisierung der Ereignisse für [_1]s [_2]-Stream (Typ [_3], Ident [_4]): [_5]',
	'Could not load class [_1] for stream [_2] [_3]: [_4]' => 'Konnte Klasse [_1] für Stream [_2] [_3] nicht laden: [_4]',
	'No URL to fetch for [_1] results' => 'Keine URL zum Einlesen von [_1]-Ergebnissen', # Translate - New # OK
	'Could not fetch [_1]: [_2]' => '[_1] konnte nicht einlesen gewerden: [_2]', # Translate - New # OK
	'Aborted fetching [_1]: [_2]' => 'Einlesen von [_1] abgebrochen: [_2]', # Translate - New # OK

## plugins/ActionStreams/tmpl/dialog_edit_profile.tmpl
	'Your user name or ID is required.' => 'Ihr Benutzername oder Ihre ID ist erforderlich.',
	'Edit a profile on a social networking or instant messaging service.' => 'Bearbeiten Sie Ihr Profil bei einem Social Network oder Instant Messaging-Dienst.',
	'Service' => 'Dienst',
	'Enter your account on the selected service.' => 'Geben Sie Ihren Benutzernamen beim gewählten Dienst ein.',
	'For example:' => 'Beispiel:',
	'Action Streams' => 'Action Streams:',
	'Select the action streams to collect from the selected service.' => 'Wählen Sie, welche Action Streams beim gewählten Dienst abgefragt werden sollen.',
	'No streams are available for this service.' => 'Für diesen Dienst sind keine Action Streams verfügbar.',

## plugins/ActionStreams/tmpl/other_profiles.tmpl
	'The selected profile was added.' => 'Gewähltes Profil hinzugefügt.',
	'The selected profiles were removed.' => 'Gewählte Profile entfernt.',
	'The selected profiles were scanned for updates.' => 'Gewählte Profile auf Aktualisierungen überprüft.',
	'The changes to the profile have been saved.' => 'Profiländerungen gespeichert.',
	'Add Profile' => 'Profil hinzufügen',
	'profile' => 'Profil',
	'profiles' => 'Profile',
	'Delete selected profiles (x)' => 'Gewählte Profile löschen (x)',
	'to update' => 'zu aktualisieren',
	'Scan now for new actions' => 'Jetzt auf neue Aktionen überprüfen',
	'Update Now' => 'Jetzt aktualisieren',
	'No profiles were found.' => 'Keine Profile gefunden.',
	'external_link_target' => 'external_link_target',
	'View Profile' => 'Proil ansehen',

## plugins/ActionStreams/tmpl/dialog_add_profile.tmpl
	'Add a profile on a social networking or instant messaging service.' => 'Profil bei einem Social Network oder Instant Messaging-Dienst hinzufügen',
	'Select a service where you already have an account.' => 'Wählen Sie einen Dienst, bei dem Sie bereits ein Benutzerkonto haben.',
	'Add Profile (s)' => 'Profil hinzufügen (s)', # Translate - New # OK

## plugins/ActionStreams/tmpl/list_profileevent.tmpl
	'The selected events were deleted.' => 'Die gewählten Ereignisse wurden gelöscht.',
	'The selected events were hidden.' => 'Die gewählten Ereignisse werden verborgen.',
	'The selected events were shown.' => 'Die gewählten Ereignisse werden angezeigt.',
	'All action stream events were hidden.' => 'Die Action Stream-Ereignisse werden verborgen.',
	'All action stream events were shown.' => 'Alle Action Stream-Ereignisse werden angezeigt.',
	'event' => 'Ereignis',
	'events' => 'Ereignisse',
	'Hide selected events (h)' => 'Gewählte Ereignisse verbergen (h)',
	'Hide' => 'Verbergen',
	'Show selected events (h)' => 'Gewählte Ereignisse anzeigen (h)',
	'Show' => 'Anzeigen',
	'All stream actions' => 'Alle Ereignisse des Streams',
	'Show only actions where' => 'Nur Ereignisse zeigen',
	'service' => 'bei Dienst',
	'visibility' => 'mit Sichtbarkeit',
	'hidden' => 'versteckt',
	'shown' => 'sichtbar',
	'No events could be found.' => 'Keine Ereignisse gefunden',
	'Event' => 'Ereignis',
	'Shown' => 'Angezeigt',
	'Hidden' => 'Verborgen',
	'View action link' => 'Action Link anzeigen',

## plugins/ActionStreams/tmpl/widget_recent.mtml
	'Your Recent Actions' => 'Ihre aktuellen Aktionen',
	'blog this' => 'Diese Sache bloggen',

## plugins/ActionStreams/tmpl/blog_config_template.tmpl
	'Rebuild Indexes' => 'Indizes neu aufbauen',
	'If selected, this blog\'s indexes will be rebuilt when new action stream events are discovered.' => 'Falls aktiviert, werden die Indizes dieses Blogs neu aufgebaut, wenn neue Action Stream-Ereignisse eintreffen',
	'Enable rebuilding' => 'Neuaufbau aktivieren',

);

1;
