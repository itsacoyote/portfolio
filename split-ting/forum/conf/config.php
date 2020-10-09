<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.8p2';

// Database
$Configuration['Database']['Name'] = 'sabrina2_vani952';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'sabrina2_vani952';
$Configuration['Database']['Password'] = '0H5iQP.0S-';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Facebook'] = TRUE;
$Configuration['EnabledPlugins']['OpenID'] = TRUE;
$Configuration['EnabledPlugins']['GoogleSignIn'] = TRUE;
$Configuration['EnabledPlugins']['Gravatar'] = TRUE;
$Configuration['EnabledPlugins']['Buttons'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;
$Configuration['EnabledPlugins']['AddRegistrationQuestion'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Split-Ting Forum';
$Configuration['Garden']['Cookie']['Salt'] = 'SQST0LXVFH';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'Split-Ting Forum';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.8p2';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = '6311-7396AA38-14100F27';
$Configuration['Garden']['InstallationSecret'] = '5a9cbb9e95e8a44792f573431c7f83e818b77169';
$Configuration['Garden']['HomepageTitle'] = 'Split-Ting Forum';
$Configuration['Garden']['Description'] = 'A forum set up for discussion on the Split-Ting app';
$Configuration['Garden']['ShareImage'] = 'DIVOLDONUSIP.png';
$Configuration['Garden']['Logo'] = 'YDME0BC6ZLQ4.jpg';
$Configuration['Garden']['Messages']['Cache'] = array('[Base]');
$Configuration['Garden']['Format']['Hashtags'] = FALSE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['AddRegistrationQuestion']['SecretCode'] = 'seven';
$Configuration['Plugins']['AddRegistrationQuestion']['Label'] = 'What is 2 + 5? (please answer as the lowercase word, not number)';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.8p2';

// Last edited by itsacoyote (209.208.228.244)2015-03-16 17:58:17