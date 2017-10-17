### Databasestruktur
* I første omgang tenker jeg at en enkel struktur holder greit, da vi ikke får en enorm mengde medlemmer
  * Med andre ord, lite vekt på å _normalisere_ databasen
* Vi kan også holde oss til to tabeller, til tross for at det ikke er svært effektivt
  * Tilpasse programmet en ny databasestruktur i fremtiden vil ikke by på store utfordringer, hvis det skulle være nødvendig, noe som nok er tvilsomt.

#### Felter (* påkrevd i applikasjonen / NOT NULL i db):
##### tabell - medlemmer
  * BrukerID, AI (AutoIncrement), primary key (PK)
    * Epost kunne vært brukt som PK, men vi ønsker muligheten til at e-post kan endres
  * Fornavn* VARCHAR(32)
  * Etternavn* VARCHAR(64)
  * Brukernavn* VARCHAR(32)
  * Studentnummer INT(6)
  * Epost* VARCHAR(128)
    * Setter en høy verdi her grunnet dagens utvikling av .TLD-er
  * Telefonnummer INT(8)
    * Tar ikke høyde for utenlandske nummer
  * Adresse VARCHAR(128)
  * Fakultet* VARCHAR(32)
    * Basert på fakultet vet vi hvilke IT-linje studenten går pga det kun er to linjer per i dag
      * Mulig lite fremtidsrettet
  * Årskull* INT(4)
  * BetSemesteravgift BOOLEAN
  * RegTidspunkt (TIMESTAMP)
  * Bildesti VARCHAR(128)
  * Gruppe INT(1) PK -> gruppe->lvl
    * Gruppe bestemmer tilgangsnivå mm.
---
##### tabell - gruppe
  * GruppeID INT, PK
  * Gruppenavn
  * Tilgangsniva
  ---
##### tabell - logininfo

  * BrukerNr PK, FK -> medlemmer.BrukerID
  * epost FK -> medlemmer.Epost
    * Bruker epost for innlogging
  * Passord VARCHAR(32)
  * TvingPassordbytte BOOLEAN
    * Hvis brukeren har brukt "glemt passord", får vedkommende tilsendt et nytt passord via epost.
    Innloggingssystemet sjekker dette, og tvinger brukeren til å bytte passord ved neste innlogging.
  * Verifisert BOOLEAN
    * Verifisert bruker via epost
  * SistInnlogget (TIMESTAMP)
    * Blir ikke brukt inntil vi implementerer login-system for medlemmer
  * Utestengt (timestamp)
    * Midlertidig utestengelse i _n_ minutter ved overstigelse av MAX_LOGIN_FORSOK (el.)
    * Forhindring av brute force ved å ikke tillate mange feilede innloggingsforsøk på kort tid
