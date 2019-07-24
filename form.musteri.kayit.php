<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>HTML ile form oluşturma</title>
</head>

<html>
<h1>Form Kullanım Örneği</h1>
<form>

  <fieldset>
    <legend><b>Kayıt Olmak İçin Lütfen Alanı Doldurunuz</b></legend><br />
    <b>Adınız:</b> <input type="text" size="20" />
    <b>Soyadınız:</b> <input type="text" size="25" /><br /><br />
    <b>ePostanız:</b> <input type="text" size="55" /><br /><br />
    <b>Cep Telefonu:</b> <input type="text" size="11" /><br /><br />
    <b>Parolanız:</b> <input type="text" size="8" /><br /><br />
    <u>Sözleşme</u>yi Okudum, Kabul Ediyorum: <select name="sözlesme">
      <option value="E">Evet</option>
      <option value="H">Hayır</option>
    </select>

    <p><b> Kullanıcı:</b> <input type="text" name="username"> </p>

    <p><b> Parola:</b> <input type="password" name="password"> </p>
    </fieldset>

    <fieldset>
    <legend><b>Adres Bilgileri</b></legend><br />
    <b>İliniz:</b> <input type="text" size="20" />
    <b>İlçeniz:</b> <input type="text" size="25" /><br /><br />
    <b>Mahalleniz:</b> <input type="text" size="55" /><br /><br />
    <b>Caddeniz:</b> <input type="text" size="11" /><br /><br />
	<b>Bina No:</b> <input type="text" size="11" /><br /><br />
	<b>Kapı No:</b> <input type="text" size="11" /><br /><br />
  </fieldset>

  <fieldset>
    <legend><b>İlave Tarif</b></legend><br />
 	<input type="text" size="65" /><br /><br />

</form>

</html>
