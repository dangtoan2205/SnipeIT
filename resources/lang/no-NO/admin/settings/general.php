<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domene',
    'ad_domain_help'			=> 'Dette er noen ganger det samme som e-post domene, men ikke alltid.',
    'ad_append_domain_label'    => 'Legg til domenenavn',
    'ad_append_domain'          => 'Legg til domenenavn i feltet for brukernavn',
    'ad_append_domain_help'     => 'Bruker kreves ikke å skrive "brukernavn@domene.local", de kan bare skrive "brukernavn".',
    'admin_cc_email'            => 'CC e-post',
    'admin_cc_email_help'       => 'Hvis du vil sende en kopi av innsjekk-/utsjekkeposter som sendes til brukere til en ekstra epostadresse, skriv den inn her. La ellers feltet stå tomt.',
    'admin_settings'            => 'Admin innstillinger',
    'is_ad'				        => 'Dette er en Active Directory server',
    'alerts'                	=> 'Varsler',
    'alert_title'               => 'Oppdater varslingsinnstillinger',
    'alert_email'				=> 'Send varslinger til',
    'alert_email_help'    => 'E-postadresser eller distribusjonslister som du ønsker varsler skal sendes til, kommaseparert',
    'alerts_enabled'			=> 'Varslinger aktivert',
    'alert_interval'			=> 'Terskel for utløpende varslinger (dager)',
    'alert_inv_threshold'		=> 'Terskel for eiendelsvarslinger',
    'allow_user_skin'           => 'Tillat tilpasset utseende for bruker',
    'allow_user_skin_help_text' => 'Kryss av denne boksen for å la brukere overstyre standardutseendet med et annet.',
    'asset_ids'					=> 'Eiendels-IDer',
    'audit_interval'            => 'Audit intervall',
    'audit_interval_help'       => 'Hvis du er påkrevd å regelmessig sjekke ressursene dine, angi intervallet i måneder som du bruker. Hvis du oppdaterer denne verdien, vil hele "neste revisjonsdatoer" for ressurser med en kommende revisjonsdato bli oppdatert.',
    'audit_warning_days'        => 'Audit terskelverdi for advarsel',
    'audit_warning_days_help'   => 'Hvor mange dager i forveien bør vi advare deg når eiendeler forfaller for overvåking?',
    'auto_increment_assets'		=> 'Generer automatisk økende eiendelsmerker',
    'auto_increment_prefix'		=> 'Prefiks (valgfritt)',
    'auto_incrementing_help'    => 'Slå på automatisk økende eiendelsmerker for å velge dette',
    'backups'					=> 'Sikkerhetskopier',
    'backups_help'              => 'Opprette, laste ned og gjenopprette sikkerhetskopier ',
    'backups_restoring'         => 'Gjenoppretting fra sikkerhetskopi',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Last opp sikkerhetskopi',
    'backups_path'              => 'Sikkerhetskopier på tjeneren lagres i <code>:path</code>',
    'backups_restore_warning'   => 'Bruk gjenopprettingsknappen <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> for å gjenopprette fra en tidligere sikkerhetskopi. (Dette fungerer ikke med S3-fillagring eller Docker.)<br><br>Din <strong>hele :app_name databasen og eventuelle opplastede filer vil bli fullstendig erstattet</strong> av det som er i sikkerhetskopifilen.  ',
    'backups_logged_out'         => 'Alle eksisterende brukere, inkludert deg, vil bli logget ut når din gjenoppretting er fullført.',
    'backups_large'             => 'Veldig store sikkerhetskopier kan få tidsavbrudd under gjenopprettingsforsøket og må fortsatt kjøres via kommandolinjen. ',
    'barcode_settings'			=> 'Strekkodeinnstillinger',
    'confirm_purge'			    => 'Bekreft rensking',
    'confirm_purge_help'		=> 'Skriv "DELETE" i boksen under for å fjerne dine slettende data. Denne handlingen kan ikke angres og vil PERMANENT slette alle slettede elementer og brukere. (Du bør først gjøre en sikkerhetskopi, bare for å være trygg.)',
    'custom_css'				=> 'Egendefinert CSS',
    'custom_css_help'			=> 'Legg til egendefinert CSS. Ikke ta med taggene &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Egendefinert passord tilbakestillings-URL',
    'custom_forgot_pass_url_help'	=> 'Erstatter den innebygde glemt passord-URLen i innloggingsbildet. Nyttig for å sende brukere til intern eller leid LDAP passordgjenopprettingsfunksjonalitet. Vil deaktivere den lokale glemt passord-funksjonaliteten.',
    'dashboard_message'			=> 'Dashboardmelding',
    'dashboard_message_help'	=> 'Denne teksten vises på dashbordet for alle som har tillatelse til å vise oversikten.',
    'default_currency'  		=> 'Standardvaluta',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standardspråk',
    'default_eula_help_text'	=> 'Du kan også knytte tilpassede EULAer til bestemte eiendelskategorier.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Vis eiendelsnavn',
    'display_checkout_date'     => 'Vis utsjekksdato',
    'display_eol'               => 'Vis levetid i tabellvisning',
    'display_qr'                => 'Display 2D barcode',
    'display_alt_barcode'		=> 'Vis 1D strekkode',
    'email_logo'                => 'E-postlogo',
    'barcode_type'				=> '2D strekkodetype',
    'alt_barcode_type'			=> '1D strekkodetype',
    'email_logo_size'       => 'Kvadratiske logoer ser best ut i e-post. ',
    'enabled'                   => 'Slått på',
    'eula_settings'				=> 'EULA-innstillinger',
    'eula_markdown'				=> 'Denne EULAen tillater <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Aksepterte filtyper er ico, png og gif. Andre bildeformater vil muligens ikke fungere i alle nettlesere.',
    'favicon_size'          => 'Favoritt-symboler bør være kvadratiske, 16x16 punkter.',
    'footer_text'               => 'Ekstra bunnteksttekst ',
    'footer_text_help'          => 'Denne teksten vil fremstå i høyre del av bunnteksten. Lenker er tillatt ved å bruke <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.
Linjeskift, topptekst, bilder, osv. kan føre til uventede resultater.',
    'general_settings'			=> 'Generelle innstillinger',
    'general_settings_keywords' => 'bedriftens støtte, signatur, e-postformat, brukerformat, bilder, per side, miniatyrbilde, eula, graviter, forelder, dashbord, personvern',
    'general_settings_help'     => 'Standard EULA og mer',
    'generate_backup'			=> 'Generer Sikkerhetskopi',
    'google_workspaces'         => 'Google arbeidsområder',
    'header_color'              => 'Overskriftsfarge',
    'info'                      => 'Disse innstillingene lar deg tilpasse enkelte aspekter av installasjonen din.',
    'label_logo'                => 'Etikett-logo',
    'label_logo_size'           => 'Kvadratisk logo vil se best ut. Den vil vises øverst til høyre på hver merkelapp. ',
    'laravel'                   => 'Laravel-versjon',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Standard tillatelsesgruppe',
    'ldap_default_group_info'   => 'Velg en gruppe for nylig synkroniserte brukere. Husk at brukeren får rettigheter til gruppen den tildeles.',
    'no_default_group'          => 'Ingen standard gruppe',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP-klient TLS-nøkkel',
    'ldap_client_tls_cert'      => 'LDAP TLS klient-sertifikat',
    'ldap_enabled'              => 'LDAP aktivert',
    'ldap_integration'          => 'LDAP Integrering',
    'ldap_settings'             => 'LDAP Instillinger',
    'ldap_client_tls_cert_help' => 'Klientside TLS-sertifikat og nøkkel for LDAP tilkoblinger er vanligvis bare nyttig i Google Workspace-konfigurasjoner med "Secure LDAP." Begge er påkrevd.',
    'ldap_location'             => 'LDAP-plassering',
'ldap_location_help'             => 'LDAP plasserings feltet burde brukes hvis <strong> en OU ikke blir brukt i "Base Bind DN"-</strong> La denne stå tom hvis et OU søk brukes.',
    'ldap_login_test_help'      => 'Skriv inn et gyldig LDAP brukernavn og passord fra samme base DN som du anga ovenfor for å teste at LDAP-innlogging er riktig konfigurert. DU MÅ LAGRE DINE OPPDATERTE LDAP-INNSTILLINGER FØRST.',
    'ldap_login_sync_help'      => 'Tester at LDAP kan synkronisere. Feil i LDAP autentiseringsspørringen din kan før til at brukere ikke kan logge inn. DU MÅ LAGRE DINE OPPDATERTE LDAP-INNSTILLINGER FØRST.',
    'ldap_manager'              => 'LDAP Administrator',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Validering av LDAP SSL sertifikat',
    'ldap_server_cert_ignore'	=> 'Godta ugyldig SSL sertifikat',
    'ldap_server_cert_help'		=> 'Kryss av denne boksen hvis du bruker et selv-signert SSL sertifikat og vil akkseptere et ugyldig sertifikat.',
    'ldap_tls'                  => 'Bruk TLS',
    'ldap_tls_help'             => 'Kryss av denne hvis du kjører STARTTLS på LDAP-serveren. ',
    'ldap_uname'                => 'LDAP Bundet brukernavn',
    'ldap_dept'                 => 'LDAP avdeling',
    'ldap_phone'                => 'LDAP telefonnummer',
    'ldap_jobtitle'             => 'LDAP Jobbtittel',
    'ldap_country'              => 'LDAP Land',
    'ldap_pword'                => 'LDAP Bind passord',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP-passord Sync',
    'ldap_pw_sync_help'         => 'Ta bort kryss på denne boksen hvis du ikke vil at LDAP passord skal holdes synkronisert med lokale passord. Ved å skru av dette er det mulig at brukerne ikke vil klare å logge på om de ikke får tak i LDAP serveren.',
    'ldap_username_field'       => 'Brukernavn Felt',
    'ldap_lname_field'          => 'Etternavn',
    'ldap_fname_field'          => 'LDAP Fornavn',
    'ldap_auth_filter_query'    => 'LDAP autentisering spørring',
    'ldap_version'              => 'LDAP Versjon',
    'ldap_active_flag'          => 'LDAP aktive flag',
    'ldap_activated_flag_help'  => 'Denne verdien brukes til å bestemme om en synkronisert bruker kan logge inn på Snipe-IT. <strong>Det påvirker ikke muligheten til å sjekke elementer inn eller ut til dem</strong>, og bør være <strong>egenskapsnavn</strong> i din AD/LDAP, <strong>ikke verdien</strong>. <br><br>Hvis dette feltet er satt til et feltnavn som ikke eksisterer i AD/LDAP, eller verdien i AD/LDAP feltet er satt til <code>0</code> eller <code>usann</code>, <strong>vil bruker pålogging bli deaktivert</strong>. Hvis verdien i AD/LDAP feltet er satt til <code>1</code> eller <code>sann</code> eller <em>annen tekst</em> betyr at brukeren kan logge inn. Når feltet er tomt i din AD, respekterer vi <code>-brukerAccountControl</code> attributt, som vanligvis tillater ikke-suspenderte brukere å logge inn.',
    'ldap_emp_num'              => 'LDAP ansattnummer',
    'ldap_email'                => 'LDAP E-post',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP-synkronisering',
    'license'                   => 'Programvarelisens',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Innloggingsforsøk',
    'login_attempt'             => 'Innloggingsforsøk',
    'login_ip'                  => 'IP-addresse',
    'login_success'             => 'Suksess?',
    'login_user_agent'          => 'Brukeragent',
    'login_help'                => 'Liste over forsøkte pålogginger',
    'login_note'                => 'Logg inn melding',
    'login_note_help'           => 'Eventuelt inkludere et par setninger på logg inn skjermen, for eksempel for å hjelpe mennesker som har funnet en mistet eller stjålet enhet. Dette feltet godtar <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown</a>',
    'login_remote_user_text'    => 'Fjernbruker pålogging valg',
    'login_remote_user_enabled_text' => 'Aktiver innlogging med Remote User Header',
    'login_remote_user_enabled_help' => 'Aktiverer autentisering via REMOTE_USER headeren som beskrevet i "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiver andre godkjenningsmekanismer',
    'login_common_disabled_help' => 'Deaktiverer andre autentiseringsmekanismer. Aktiver dette valget kun hvis du er sikker på at din REMOTE_USER innlogging allerede fungerer',
    'login_remote_user_custom_logout_url_text' => 'Tilpasset utloggingsadresse',
    'login_remote_user_custom_logout_url_help' => 'Hvis en URL angis her blir brukerne videresendt til denne URLen etter utlogging fra Snipe-IT. Dette er nyttig for korrekt lukking av autentiseringssesjoner hos din autentiseringsleverandør.',
    'login_remote_user_header_name_text' => 'Egendefinert brukernavn-header',
    'login_remote_user_header_name_help' => 'Bruk angitt header-felt i stedet for REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Bruk i Print',
    'logo_print_assets_help'    => 'Bruk branding på utskrivbare eiendelslister ',
    'full_multiple_companies_support_help_text' => 'Vis kun eiendeler til bedriften brukere (inkl administratorer) er knyttet til.',
    'full_multiple_companies_support_text' => 'Full støtte for flere bedrifter',
    'show_in_model_list'   => 'Vis i Model nedtrekksmeny',
    'optional'					=> 'valgfri',
    'per_page'                  => 'Resultater pr side',
    'php'                       => 'PHP-versjon',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP systeminfo',
    'php_gd_info'               => 'Du må installere php-gd for å vise QR-koder. Se installasjonsinstruksjoner.',
    'php_gd_warning'            => 'PHP bildebehandling og GD-plugin er IKKE installert.',
    'pwd_secure_complexity'     => 'Passordkompleksitet',
    'pwd_secure_complexity_help' => 'Velg hvilken passord kompleksitet du ønsker å håndheve.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Passord kan ikke være det samme som fornavn, etternavn, e-post eller brukernavn',
    'pwd_secure_complexity_letters' => 'Krev minst én bokstav',
    'pwd_secure_complexity_numbers' => 'Krev minst ett tall',
    'pwd_secure_complexity_symbols' => 'Krev minst ett symbol',
    'pwd_secure_complexity_case_diff' => 'Krev minst én stor bokstav og én liten bokstav',
    'pwd_secure_min'            => 'Passord minimum antall tegn',
    'pwd_secure_min_help'       => 'Minimum tillatt verdi er 8',
    'pwd_secure_uncommon'       => 'Forhindre vanlige passord',
    'pwd_secure_uncommon_help'  => 'Dette vil forhindre brukere fra å bruke vanlige passord fra de vanligste 10 000 passord som er rapportert.',
    'qr_help'                   => 'Aktiver QR-koder først for å velge denne',
    'qr_text'                   => 'Tekst QR-kode',
    'saml'                      => 'SAML',
    'saml_title'                => 'Oppdater SAML-innstillinger',
    'saml_help'                 => 'SAML-innstillinger',
    'saml_enabled'              => 'SAML aktivert',
    'saml_integration'          => 'SAML-integrasjon',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Offentlig sertifikat',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Du kan spesifisere IdP-metadata ved hjelp av URL eller XML-fil.',
    'saml_attr_mapping_username' => 'Attributt for brukernavn',
    'saml_attr_mapping_username_help' => 'NameID vil bli brukt hvis tilordning av attributtet er uspesifisert eller ugyldig.',
    'saml_forcelogin_label'     => 'SAML Tving Innlogging',
    'saml_forcelogin'           => 'Gjør SAML til standard innlogging',
    'saml_forcelogin_help'      => 'Du kan bruke \'/login?nosaml\' for å komme til den normale innloggingssiden.',
    'saml_slo_label'            => 'SAML utlogging',
    'saml_slo'                  => 'Send en Logoutforespørsel til IdP på Logg ut',
    'saml_slo_help'             => 'Dette vil føre til at brukeren først blir omdirigert til idP når hen logger ut. Ikke kryss av om idP ikke støtter \'SP-initiated SAML SLO\'.',
    'saml_custom_settings'      => 'SAML Egendefinerte innstillinger',
    'saml_custom_settings_help' => 'Du kan angi flere innstillinger til onelogin/php-saml biblioteket. Bruk på eget ansvar.',
    'saml_download'             => 'Last ned Metadata',
    'setting'                   => 'Innstilling',
    'settings'                  => 'Innstillinger',
    'show_alerts_in_menu'       => 'Vis varsler i toppmenyen',
    'show_archived_in_list'     => 'Arkiverte eiendeler',
    'show_archived_in_list_text'     => 'Vis arkiverte eiendeler i "alle eiendeler" utlisting',
    'show_assigned_assets'      => 'Vis eiendeler tildelt til eiendeler',
    'show_assigned_assets_help' => 'Vis ressurser som ble tildelt andre eiendeler i Vis bruker -> Eiendeler, Vis bruker -> Info -> Skriv ut alle tildelte og i Konto -> Vis tildelte eiendeler.',
    'show_images_in_email'     => 'Vis bilder i e-post',
    'show_images_in_email_help'   => 'Fjern merkingen i denne boksen hvis Snipe-IT-installasjonen er bak en VPN eller et lukket nettverk og brukere utenfor nettverket ikke vil kunne laste bilder servert fra denne installasjonen i e-posten.',
    'site_name'                 => 'Nettstedsnavn',
    'integrations'               => 'Integrasjoner',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Generell Webhook',
    'ms_teams'                  => 'Microsoft Lag',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test til lagring',
    'webhook_title'               => 'Oppdater Webhook innstillinger',
    'webhook_help'                => 'Integrasjons instillinger',
    'webhook_botname'             => ':app botnavn',
    'webhook_channel'             => ':app kanal',
    'webhook_endpoint'            => ':app endepunkt',
    'webhook_integration'         => ':app Innstillinger',
    'webhook_test'                 =>'Test :app integrasjon',
    'webhook_integration_help'    => ':app-integrasjon er valgfritt, men endepunktet og kanalen er påkrevd hvis du ønsker å bruke den. For å konfigurere :app integrering, må du først <a href=":webhook_link" target="_new" rel="noopener">lage en innkommende webhook</a> på din :app konto. Klikk på knappen <strong>Test :app Integrasjon</strong> for å bekrefte at innstillingene er korrekte før du lagrer. ',
    'webhook_integration_help_button'    => 'Du vil se en testknapp etter at du har lagret din :app informasjon.',
    'webhook_test_help'           => 'Test om din :app integrasjon er riktig konfigurert. DU MÅ LAGRE DINE OPPDATERTE :app INNSTILLINGER FØRST.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Snipe-IT-versjon',
    'support_footer'            => 'Støtte Footer Lenker ',
    'support_footer_help'       => 'Angi hvem som kan se lenker til Snipe-IT supportinformasjon og brukermanual',
    'version_footer'            => 'Versjon i Footer ',
    'version_footer_help'       => 'Angi hvem som kan se Snipe-IT versjon og build-nummer.',
    'system'                    => 'Systeminformasjon',
    'update'                    => 'Oppdater innstillinger',
    'value'                     => 'Verdi',
    'brand'                     => 'Merkevare',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, nettstedsnavn',
    'web_brand'                 => 'Velg branding-type',
    'about_settings_title'      => 'Om Innstillinger',
    'about_settings_text'       => 'Disse innstillingene lar deg tilpasse enkelte aspekter av installasjonen din.',
    'labels_per_page'           => 'Etiketter per side',
    'label_dimensions'          => 'Etikettstørrelsen (inches)',
    'next_auto_tag_base'        => 'Neste automatiske økning',
    'page_padding'              => 'Side marger (inches)',
    'privacy_policy_link'       => 'Link til personvernregler',
    'privacy_policy'            => 'Personvernerklæring',
    'privacy_policy_link_help'  => 'Angi en URL i dette feltet for å inkludere en lenke til personvern-policy i applikasjonsbunntekst og i alle eposter som dette systemet sender ut. Støtter GDPR. ',
    'purge'                     => 'Tømme slettede poster',
    'purge_deleted'             => 'Fjern slettede ',
    'labels_display_bgutter'    => 'Etikett bunnmarg',
    'labels_display_sgutter'    => 'Etikett sidemarg',
    'labels_fontsize'           => 'Label skriftstørrelse',
    'labels_pagewidth'          => 'Etikett arkbredde',
    'labels_pageheight'         => 'Etikett arkhøyde',
    'label_gutters'        => 'Etikett tegnavstand (tommer)',
    'page_dimensions'        => 'Sidedimensjon (tommer)',
    'label_fields'          => 'Etikett synlige felter',
    'inches'        => 'tommer',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link til Snipe-IT i e-post',
    'show_url_in_emails_help_text'      => 'Fjern markeringen i denne boksen hvis du ikke vil koble tilbake til Snipe-IT-installasjonen i e-postboksene dine. Nyttig hvis de fleste av brukerne aldri logger inn.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maks miniatyrbilde høyde',
    'thumbnail_max_h_help'   => 'Maksimal høyde i piksler som miniatyrbilder kan vise i visningen liste. Min 25, maks 500.',
    'two_factor'        => 'To-faktor autentisering',
    'two_factor_secret'        => 'To-faktor kode',
    'two_factor_enrollment'        => 'To-faktor registrering',
    'two_factor_enabled_text'        => 'Aktiver to-faktor autentisering',
    'two_factor_reset'        => 'Tilbakestill to-faktor hemmelighet',
    'two_factor_reset_help'        => 'Dette vil tvinge brukeren til å legge inn enheten på nytt med autentiseringsappen. Dette kan være nyttig hvis enheten deres er mistet eller stjålet. ',
    'two_factor_reset_success'          => 'To-faktor enhet resatt',
    'two_factor_reset_error'          => 'Reset av to-faktor enhet feilet',
    'two_factor_enabled_warning'        => 'Aktivering av to-faktor autentisering hvis ikke allerede aktivert vil øyeblikkelig tvinge deg til å autentisere med enhet som er aktivert i Google Authenticator. Du vil ha mulighet til å aktivere enheten din hvis ingen er aktivert fra før.',
    'two_factor_enabled_help'        => 'Dette vil slå på to-faktor autentisering med Google Authenticator.',
    'two_factor_optional'        => 'Selektiv (brukere kan aktivere eller deaktivere hvis tillatt)',
    'two_factor_required'        => 'Påkrevd for alle brukere',
    'two_factor_disabled'        => 'Deaktivert',
    'two_factor_enter_code'	=> 'Skriv inn to-faktor kode',
    'two_factor_config_complete'	=> 'Send kode',
    'two_factor_enabled_edit_not_allowed' => 'Systemansvarlig tillater ikke at du redigerer denne innstillingen.',
    'two_factor_enrollment_text'	=> "To-faktor autentisering er påkrevd, men enheten din har ikke blitt aktivert for dette enda. Åpne Google Authenticator-appen og scan inn QR-koden nedenfor for å aktivere. Når du har aktivert enheten din, skriv inn koden nedenfor",
    'require_accept_signature'      => 'Kreve signatur',
    'require_accept_signature_help_text'      => 'Aktivering av denne funksjonen ville forlange brukernes å fysisk logge ut for å akseptere en eiendel.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'venstre',
    'right'        => 'høyre',
    'top'        => 'topp',
    'bottom'        => 'bunn',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'unique_serial'                => 'Unike serienumre',
    'unique_serial_help_text'                => 'Håndhever at  eiendelsserienumre er unike',
    'zerofill_count'        => 'Lengden på ID-merker, inkludert zerofill',
    'username_format_help'   => 'Denne innstillingen vil bare bli brukt av importprosessen dersom et brukernavn ikke er oppgitt, og vi må generere et brukernavn for deg.',
    'oauth_title' => 'OAuth API-innstillinger',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endepunktinnstillinger',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Oppdater Innstillinger for Eiendelsmerker',
    'barcode_title' => 'Oppdater strekkodeinnstillinger',
    'barcodes' => 'Strekkoder',
    'barcodes_help_overview' => 'Strekkode- &amp; QR-innstillinger',
    'barcodes_help' => 'Dette forsøker å slette hurtigbufrede strekkoder. Dette vil vanligvis bare bli brukt hvis strekkodeinnstillingene dine er endret, eller hvis Snipe-IT adressen er endret. Strekkoder genereres på nytt når de blir åpnet neste gang.',
    'barcodes_spinner' => 'Forsøker å slette filer...',
    'barcode_delete_cache' => 'Slett strekkode-buffer',
    'branding_title' => 'Oppdater Branding-innstillinger',
    'general_title' => 'Oppdater generelle innstillinger',
    'mail_test' => 'Send test',
    'mail_test_help' => 'Dette vil forsøke å sende en e-post til :replyto.',
    'filter_by_keyword' => 'Filtrer ved å sette nøkkelord',
    'security' => 'Sikkerhet',
    'security_title' => 'Oppdater sikkerhetsinnstillinger',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Tofaktor, passordbegrensinger',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Tillatelsesgrupper',
    'localization' => 'Oversettelser',
    'localization_title' => 'Oppdater språkinnstillinger',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Språk, datoformat',
    'notifications' => 'Varslinger',
    'notifications_help' => 'E-post varsler og revisjonsinnstillinger',
    'asset_tags_help' => 'Økninger og prefikser',
    'labels' => 'Etiketter',
    'labels_title' => 'Oppdater etikettinnstillinger',
    'labels_help' => 'Etikettstørrelse &amp; innstillinger',
    'purge_keywords' => 'slett permanent',
    'purge_help' => 'Tømme slettede poster',
    'ldap_extension_warning' => 'Det ser ikke ut som LDAP-utvidelsen er installert eller aktivert på denne serveren. Du kan fortsatt lagre innstillingene, men du må installere og aktivere LDAP-tillegget til PHP før LDAP-synkronisering eller innlogging virker.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Ansattnummer',
    'create_admin_user' => 'Opprett en bruker ::',
    'create_admin_success' => 'Suksess! Din adminbruker har blitt lagt til!',
    'create_admin_redirect' => 'Klikk her for å gå til innlogging!',
    'setup_migrations' => 'Database-migreringer ::',
    'setup_no_migrations' => 'Det var ingenting å migrere. Databasetabellene var allerede oppdaterte!',
    'setup_successful_migrations' => 'Databasetabellene er opprettet',
    'setup_migration_output' => 'Migrasjonsmeldinger:',
    'setup_migration_create_user' => 'Neste: Opprett bruker',
    'ldap_settings_link' => 'Side for LDAP-innstillinger',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integrasjon',
    'label2_enable'           => 'Ny etikett generator',
    'label2_enable_help'      => 'Bytt til den nye etikette generatoren. <b>Merk: Du må lagre denne innstillingen før du setter andre.</b>',
    'label2_template'         => 'Mal',
    'label2_template_help'    => 'Velg mal som skal brukes til etikettgenerering',
    'label2_title'            => 'Tittel',
    'label2_title_help'       => 'Tittelen som skal vises på etiketter som støtter den',
    'label2_title_help_phold' => 'Plassholderen <code>{COMPANY}</code> vil bli erstattet med navnet til ressursen&apos;s firma navn',
    'label2_asset_logo'       => 'Bruk ressurs logo',
    'label2_asset_logo_help'  => 'Bruk logoen til ressursen&apos;s tildelte selskap, i stedet for verdien fra <code>:setting_name</code>',
    'label2_1d_type'          => '1D strekkodetype',
    'label2_1d_type_help'     => 'Format for 1D strekkoder',
    'label2_2d_type'          => '2D strekkodetype',
    'label2_2d_type_help'     => 'Format for 2D strekkoder',
    'label2_2d_target'        => '2D strekkodemål',
    'label2_2d_target_help'   => 'URL-en 2D strekkoden peker til til når den blir skannet',
    'label2_fields'           => 'Feltdefinisjoner',
    'label2_fields_help'      => 'Feltene kan legges til, fjernes, og sorteres i venstre kolonne. For hvert felt kan flere alternativer for etikett og datakilde legges til, fjernes, og sorteres på nytt i høyre kolonne.',
    'help_asterisk_bold'    => 'Teksten som skrives inn som <code>**text**</code> vil vises som fet',
    'help_blank_to_use'     => 'La stå tom for å bruke verdien fra <code>:setting_name</code>',
    'help_default_will_use' => '<br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Standard',
    'none'                  => 'Ingen',
    'google_callback_help' => 'Dette bør angis som callback-URL-en i Google OAuth app innstillingene i organisasjonen din&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google utvikler konsoll <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace innloggingsinnstillinger',
    'enable_google_login'  => 'Aktiver innlogging med Google Workspace',
    'enable_google_login_help'  => 'Brukerne vil ikke automatisk bli betjent. De må ha en eksisterende konto her OG i Google Workspace, og deres brukernavn her må matche sin Google Workspace e-post adresse. ',
    'mail_reply_to' => 'E-post svar-til adresse',
    'mail_from' => 'E-post fra adressen',
    'database_driver' => 'Databasedriver',
    'bs_table_storage' => 'Tabell Lagring',
    'timezone' => 'Tidssone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',
    'no_groups' => 'No groups have been created yet. Visit <code>Admin Settings > Permission Groups</code> to add one.',

];
