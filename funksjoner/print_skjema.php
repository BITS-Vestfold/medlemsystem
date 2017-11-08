<?php
function skrivRegMedlemSkjema() {
echo <<<'regskjemaHTML'
<form id="skjemaRegMedlem" name="skjemaregmedlem" method="POST" enctype="multipart/form-data" class="well">
  <label for="fornavn">Fornavn</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" placeholder="Fornavn" name="regfornavn" id="regMedlemFornavn">
    </div>
  </div>

  <label for="etternavn">Etternavn</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" placeholder="Etternavn" name="regetternavn" id="regMedlemEtternavn">
    </div>
  </div>

  <label for="brukernavn">Brukernavn</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="text" class="form-control" placeholder="Ønsket brukernavn på medlemssiden" name="regbrukernavn" id="regMedlemBrukernavn">
    </div>
  </div>

  <label for="epost">E-post (må være gyldig for verifisering)</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
      <input type="text" class="form-control" placeholder="min.epost@domene.tld" name="regepost" id="regMedlemEpost">
    </div>
  </div>

  <label for="adresse">Adresse, inklusive postnummer og sted. Følg formatet "gateadr, postnr poststed"</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-tent"></i></span>
      <input type="text" class="form-control" placeholder="Gatenavn sin vei nummer 11, 3333 poststed" name="regadresse" id="regMedlemAdresse">
    </div>
  </div>

  <label for="mobiltlf">Mobilnummer</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input type="text" class="form-control" placeholder="Tast inn nummer, 8 siffer - ikke påkrevd" name="regmobiltlf" id="regMedlemTelefon">
    </div>
  </div>

  <label for="studie">Studie*</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input type="text" class="form-control" placeholder="For eks: Bachelor i IT og ledelse" name="regstudie" id="regStudie">
    </div>
  </div>

  <label for="fakultet">Fakultet*</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input type="text" class="form-control" placeholder="!! DROPDOWN MED VALG FRA DB" name="regfakultet" id="regMedlemFakultet">
    </div>
  </div>

  <label for="aarskull">Årskull (året du begynte studieretningen)</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input type="text" class="form-control" placeholder="Året du begynte studieløpet - DROPDOWN?!" name="regaarskull" id="regMedlemAarskull">
    </div>
  </div>

  <label for="studentnr">Studentnummer</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="	glyphicon glyphicon-info-sign"></i></span>
      <input type="text" class="form-control" placeholder="Seks siffer - ikke påkrevd" name="regstudentnr" id="regMedlemStudentnr">
    </div>
  </div>

  <label for="bilde">Bilde/avatar:</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
      <input type="file" class="form-control" placeholder="Last opp bilde eller ønsket avatar. Bilder med tvilsomt innhold blir ikke godtatt." name="regbilde" id="regMedlemBilde" disabled>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="regmedlemsubmit" id="regMedlemSubmit">Registrer medlem</button>
  <button type="reset" class="btn btn-warning" name="nullstillskjema" id="regMedlemNullstillSkjema">Tilbakestill hele skjemaet</button>
</form>
regskjemaHTML;
}

function skrivRegFakultetSkjema() {
echo<<<'regfakultetHTML'
<h3>Registrer nye valg for fakultet og/eller årskull</h3>
<h5>Det man legger inn her kommer som valg i dropdown-menyer på skjema for medlemsregistrering</h5>
<form id="skjemaRegFakultet" name="skjemaregfakultet" method="POST" class="well">
  <label for="fakultet">Legg til nytt fakultet:</label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
      <input type="text" class="form-control" placeholder="Institutt for nytenking og ..." name="regnyttfakultet" id="regFakultet">
    </div>
  </div>

  <label for="fakultet">Legg til årskull-valg: </label>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input type="text" class="form-control" placeholder="2018" name="regnyttaarskullvalg" id="regNyttAarskullValg">
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="regfakultetsubmit" id="regFakultetSubmit">Registrer innformasjonen</button>
  <button type="reset" class="btn btn-warning" name="nullstillfakultetskjema" id="regFakultetNullstillSkjema">Tilbakestill skjemaet</button>
</form>
regfakultetHTML;
// Tanken er at fakultet avslører hvilken IT-linje man går, men for fremtidens del er det lagt inn mulighet for flere fakultet.
// Fakultet kan enkelt nok omgjøres til studielinje eller lignende
}
?>
