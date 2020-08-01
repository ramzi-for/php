<html>
<head>

<style type="text/css">
<!--
.Style4 {font-size: 12px}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="code.php">
  <table width="420" border="0">
    <tr>
      <td width="169" bgcolor="#CCFF00"><label>
        <input name="rechercher" type="submit" id="rechercher" value="Rechercher" />
      </label></td>
      <td width="369" bgcolor="#CCFF00"><label>
        <input name="t_rechercher" type="text" id="t_rechercher" />
        <span class="Style4">      Recherche par nom</span> </label></td>
    </tr>
    <tr>
      <td>Nom</td>
      <td><label>
        <input name="t_nom" type="text" id="t_nom" />
      </label></td>
    </tr>
    <tr>
      <td>Prénom</td>
      <td><label>
        <input name="t_prenom" type="text" id="t_prenom" />
      </label></td>
    </tr>
    <tr>
      <td>Te</td>
      <td><label>
        <input name="t_tel" type="text" id="t_tel" />
      </label></td>
    </tr>
    <tr>
      <td>Fax</td>
      <td><input name="t_fax" type="text" id="t_fax" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="nouveau" type="reset" id="nouveau" value="Nouveau" />
        <input name="ajouter" type="submit" id="ajouter" value="Ajouter" />
        <input name="modidier" type="submit" id="modidier" value="Modifier" />
        <input name="supprimer" type="submit" id="supprimer" value="Supprimer" />
      </label></td>
    </tr>
  </table>
  <p> </p>
</form>
<?php
$cn=mysqli_connect("db","wordpress","wordpress","wordpress");

$req="select * from  t_client";

$res=$cn->query($req);
?>
<table width="630" align="left" bgcolor="#CCCCCC">
<tr >

<td width="152">Nom</td>
<td width="66">Prénom</td>
<td width="248">Téléphone</td>
<td width="42">Fax</td>
</tr>
<?php
$var=0;
while($row=mysqli_fetch_array($res))
{

if ($var==0)
{
?>
<tr bgcolor="#EEEEEE">
<td><?php echo $row[1];  ?></td>
<td><?php echo $row[2];  ?></td>
<td><?php echo $row[3]  ?></td>
<td><?php echo $row[4]  ?></td>
</tr>
<?php
$var=1;
 }
else
{
?>
<tr bgcolor="#FFCCCC">
<td><?php echo $row[1];  ?></td>
<td><?php echo $row[2];  ?></td>
<td><?php echo $row[3]  ?></td>
<td><?php echo $row[4]  ?></td>
</tr><undefined></undefined>
<?php
$var=0;
 }
 }
?>
</table>
</body>
</html>
