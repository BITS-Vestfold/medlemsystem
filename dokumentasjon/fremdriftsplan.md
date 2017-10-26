#### Fremdriftsplan
* Lage innloggingssystemet med basisfunksjonalitet - Helt ferdig - [X]
  * $\_SESSION-sjekk på om brukeren er innlogget fra før av - [X]  
  * Sjekk databasefelt for utestengelse - hvis det eksisterer noe der (et timestamp),  
  så sjekk om utestengelse + UTESTENGELSESLENGDE < time() -  for å så tømme feltet
  når utestengelsestiden er oppnådd. [ ]

#### index.php og oppstart
* Lage index.php med switch-statement som inkluderer alle de forskjellige undersidene systemet skal ha [X]
  * Lage en full HTML validerbar side som inkluderer en underside med bare simpel tekst først.
  * Lage en enkel navbar for tilgang til disse sidene [X]
* Opprette skall for alle filer, med beskrivende filnavn for enkelt å forstå formålet med filen [X]
* Raskt legge plan for navn på funksjoner i innloggingssystemet, dermed kan det legges til  
    sjekker på toppen av alle filer, som redirecter til innloggingsside om brukeren ikke er innlogget. [X]
* Når det skal inkluderes mye ren HTML, så kodes det med HEREDOC/NOWDOC etter hva som passer best. 
  * Lagres i egen fil, og inkluderes via php. Dette gir rom for enkel endring på store deler
    av HTML-en uten å nødvendigvis ødelegge for hele programmet. (Navn må opprettholdes osv.) 

#### Server-side validering (PHP)
* Systemet bruker PHP til all validering av data inntastet av en bruker,  
og stopper programmet ved feil input fra brukeren
  * Dette gjelder også sikkerhetsaspektene som sikring mot SQL-injection
* Alle felter skal ha validering i PHP/server-side.

#### Client-side validering og hjelp (JavaScript)
* Vise hjelpemeldinger ved entry inn i og hover over felter
  * Som for eksempel hvilke felter som er påkrevd, og hvilke som ikke er det
    * Like dumt å bruke JS til å passe på at brukeren skriver inn riktig info  
      Men validering som sikring mot angrep gjøres kun server-side

#### Midlertidig online-side
  * Siden blir satt opp på en midlertidig VPS under første stadiet av utviklingen [X]
    * Login-info kommer senere, shelltilgang kan selvfølgelig ordnes om ønskelig
    * Ellers brukes SCP for filoverføring (støttes av winscp/filezilla/putty ol.)

---
* Senere utvide med:
  * "Anti brute force"-funksjonalitet
  * "Glemt passord"-funksjon
    * Det er kun admin i begynnelsen
