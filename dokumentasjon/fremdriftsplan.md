#### Fremdriftsplan
* Lage innloggingssystemet med basisfunksjonalitet - Helt ferdig - [ ]
  * $\_SESSION-sjekk på om brukeren er innlogget fra før av - [ ]  
  * Sjekk databasefelt for utestengelse - hvis det eksisterer noe der (et timestamp),  
  så sjekk om utestengelse + UTESTENGELSESLENGDE < time() -  for å så tømme feltet
  når utestengelsestiden er oppnådd.

#### index.php og oppstart
  * Lage index.php med switch-statement som inkluderer alle de forskjellige undersidene systemet skal ha
    * Lage en full HTML validerbar side som inkluderer en underside med bare simpel tekst først.
    * Lage en enkel navbar for tilgang til disse sidene
  * Opprette skall for alle filer, med beskrivende filnavn for enkelt å forstå formålet med filen
  * Raskt legge plan for navn på funksjoner i innloggingssystemet, dermed kan det legges til  
    sjekker på toppen av alle filer, som redirecter til innloggingsside om brukeren ikke er innlogget.
  * Når det skal inkluderes mye ren HTML, så kodes det med HEREDOC/NOWDOC etter hva som passer best.
    * Lagres i egen fil, og inkluderes via php. Dette gir rom for enkel endring på store deler
    av HTML-en uten å nødvendigvis ødelegge for hele programmet. (Navn må opprettholdes osv.)

---
* Senere utvide med:
  * "Anti brute force"-funksjonalitet
  * "Glemt passord"-funksjon
    * Det er kun admin i begynnelsen
