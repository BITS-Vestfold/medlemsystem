### Sikkerhet
* Noe flaut å ikke kode denne applikasjonen uten å sikre mot diverse former for angrep.
* Koden legger dermed opp til noe ekstra sikkerhet i forhold til hva som strengt tatt er påkrevd.
----
* Sikre mot SQL-injection ved behandling av data fra form
  * PHP har greie innebygde funksjoner for dette
* Sikre mot session hijacking
* Validere all input fra HTML-skjemaer for korrekt type input
  * Bruke JS for å gi brukeren hint til hvordan fylle ut feltene
