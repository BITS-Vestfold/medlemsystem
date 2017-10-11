## Kravspesifikasjon til registreringssystem
### Første utkast
### Hosting av site
* Vi kan velge både PHP5 og PHP7 via kontrollpanel
* Tilgang på en MySQL-konto (sannsynlig den MySQL-kompatible MariaDB)
* E-post er knyttet til samme leverandør, så vi antar at vi kan sende e-post via mail()
  * Med andre ord, vi bruker den lokale SMTP-serveren, og slipper eksterne biblioteker

#### Tekst på siden && frontend-team
* Frontend-team står for tekst og til en viss grad innhold på sidene
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
basert på noe ala $_GET[funksjon=registrer_nytt_medlem]_

### Databaseplanlegging
##### Felter (* påkrevd i applikasjonen):
* AI (AutoIncrement), primary key
  * E-post kunne vært brukt som PK, men vi ønsker muligheten til at e-post kan endres
* Fornavn*
* Etternavn*
* Studentnummer
* E-post*
* Telefonnummer
* Adresse
* Fakultet* (to IT-linjer, som tilhører forskjellige fakultet - mulig lite fremtidsrettet?)
  * Årskull*
---
* Brukernivå (INT 1), 0 for standard, 1 for admin - i første omgang
  * Dette for å legge til rette for innlogging for medlemmer, som implementeres på sikt
* Verifisert bruker via epost
* Betalt semesteravgift
* Registreringsdato (timestamp, unixtid)
* Sist innlogget (blir ikke brukt inntil vi implementerer login-system for medlemmer)
* Midlertidig utestengt (timestamp) (forhindring av brute force; sette regler for antall feilet loginforsøk)

### Fremdriftsplan
* Siden blir satt opp på en midlertidig VPS under første stadiet av utviklingen
  * Login-info kommer senere, shelltilgang kan selvfølgelig ordnes om ønskelig
  * Ellers brukes SCP for filoverføring (støttes av winscp/filezilla/putty ol.)


#### Innloggingsysstem for medlemmer?
* Kan selv endre egen informasjon
* Krever minimum to brukernivåer (user/admin)
* "min side/profil"
  * Avatar?
* Innebærer også passordhåndtering (password_hash()) for alle brukere
  * Krav til passordkompleksitet
  * Sende passord på epost før det blir satt, tvinge bruker til å bytte ved første innlogging?
