## Kravspesifikasjon til registreringssystem

### Hosting av site
* Vi kan velge både PHP5 og PHP7 via kontrollpanel
* Tilgang på en MySQL-konto (sannsynlig den MySQL-kompatible MariaDB)
* E-post er knyttet til samme leverandør, så vi antar at vi kan sende e-post via mail()
  * Med andre ord, vi bruker den lokale SMTP-serveren, og slipper eksterne biblioteker

#### Tekst på siden && frontend-team
* Frontend-team står for tekst og innhold, men forms, enkel nav ol. lages ferdig
  * Det lages en svært enkel utgave med lite css, men legger opp til at systemet enkelt kan taes over for styling
  * I første omgang opprettes HTML-tabeller for utskrift, for eks. basert på XSL fra XML-eksport
* Programmet lages med en dokumentert navnkonvensjoner
  * Bruker konsekvent god semantikk i funksjonsnavn, variabelnavn ol, forenkler jobben med å ta over

#### Sikkerhet
* Sikre mot SQL-injection
* Sikre mot session-hijacking
* Diverse andre sikringer mtp. at vi bruker HTML-forms
  * Sender skjemainformasjon med POST
* Verifisering av epost for medlemmer
  * Programmet oppretter en lenke ved første innlogging, ev. ved registering og sender på epost
  * Lenken lages av en streng med vilkårlige karakterer, og er oppe i for eksempel en time før den slettes
* Funksjonalitet for å sjekke rettigheter til de ulike undersidene som krever innlogging
  * Sjekke innlogget bruker, hvis ikke sendes til innloggingsmodal el.
  * Sjekke om brukernivået til aktuell bruker har tilgang til siden
    * Kan mulig lages ved at hver underside har en variabel i toppen som forteller påkrevd nivå (0/1)

#### Innloggingssystem for administrasjon
* Funksjonalitet for å hente ut XML-fil med medlemsregister
  * På sikt, mulighet til å tilpasse innholdet i XML-filen
* Funksjon for å endre all informasjon til studenten i databasen (bortsett fra AI)
* Funksjon for å slette studenten
  * Mulighet for et skjema som sender epost til vedkommende med årsak til sletting (optional)
* Funksjonalitet for å endre admin-kontoen sin epost og passord
  * password_hash() i PHP for passord-beskyttelse
* Mulighet for å sjekke om medlem har betalt kontigent
* Undersider opprettes ved en switch-statement i index.php som inkluderer undersider i egne filer,  
basert på noe ala $_GET[funksjon=registrer_nytt_medlem]

### Fremdriftsplan
* Siden blir satt opp på en midlertidig VPS under første stadiet av utviklingen
  * Login-info kommer senere, shelltilgang kan selvfølgelig ordnes om ønskelig
  * Ellers brukes SCP for filoverføring (støttes av winscp/filezilla/putty ol.)

### Fremtidig funksjonalitet

#### Innloggingsysstem for medlemmer
* Kan selv endre egen informasjon
* Krever minimum to brukernivåer (user/admin)
* "min side/profil"
  * Avatar?
* Innebærer også passordhåndtering (password_hash()) for alle brukere
  * Krav til passordkompleksitet
  * Sende passord på epost før det blir satt, tvinge bruker til å bytte ved første innlogging?
  * En del av et login-system som må bygges med en gang, så skal planlegges i egen seksjon
