#### Fremdriftsplan
* Lage innloggingssystemet med basisfunksjonalitet - Helt ferdig - [ ]
  * $\_SESSION-sjekk på om brukeren er innlogget fra før av - [ ]  
  * Sjekk databasefelt for utestengelse - hvis det eksisterer noe der (et timestamp),  
  så sjekk om utestengelse + UTESTENGELSESLENGDE < time() -  for å så tømme feltet
  når utestengelsestiden er oppnådd.
---
* Senere utvide med:
  * "Anti brute force"-funksjonalitet
  * "Glemt passord"-funksjon
    * Det er kun admin i begynnelsen
