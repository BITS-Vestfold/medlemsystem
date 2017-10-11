### Databasestruktur
* I første omgang tenker jeg at en enkel struktur holder greit, da vi ikke får en enorm mengde medlemmer
  * Med andre ord, lite vekt på å _normalisere_ databasen
* Vi kan også holde oss til en tabell, til tross for at det ikke er like effektivt
  * Tilpasse programmet en ny databasestruktur i fremtiden vil ikke by på store utfordringer,  
  da størrelsen på databasen i antall felter er såpass liten - hvis vi anser det som nødvendig.
  * Dette kan da for eksempel bli egen tabell for innloggingsinformasjon, med en fremmednøkkel (FK)

##### Felter (* påkrevd i applikasjonen / NOT NULL i db):
  * AI (AutoIncrement), primary key (PK)
    * E-post kunne vært brukt som PK, men vi ønsker muligheten til at e-post kan endres
  * Fornavn* VARCHAR(32)
  * Etternavn* VARCHAR(64)
  * Studentnummer INT(6)
  * E-post* VARCHAR(128)
    * Setter en høy verdi her grunnet dagens utvikling av .TLD-er
  * Telefonnummer INT(8)
    * Tar ikke høyde for utenlandske nummer
  * Adresse VARCHAR(128)
  * Fakultet* VARCHAR(32)
    * Basert på fakultet vet vi hvilke IT-linje studenten går pga det kun er to linjer per i dag
      * Mulig lite fremtidsrettet
  * Årskull* INT(4)
  ---
  * Brukerlvl INT(1)
    * 0 for standard, 1 for admin - i første omgang
    * Dette for å legge til rette for innlogging for medlemmer, som implementeres på sikt
  * Verifisert BOOLEAN
    * Verifisert bruker via epost
  * Betalt semesteravgift BOOLEAN
  * RegTidspunkt (TIMESTAMP)
  * SistInnlogget (TIMESTAMP)
    * Blir ikke brukt inntil vi implementerer login-system for medlemmer
  * Utestengt (timestamp)
    * Midlertidig utestengelse i _n_ minutter ved overstigelse av MAX_LOGIN_FORSOK (el.)
    * Forhindring av brute force ved å ikke tillate mange feilede innloggingsforsøk på kort tid
