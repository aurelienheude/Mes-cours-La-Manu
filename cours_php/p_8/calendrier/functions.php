<?php 



function calendrier($mois, $annee) 
{
	
	$nombre_de_jour = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

	echo "<table>";

	echo "<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>";

	for ($i=1; $i <= $nombre_de_jour ; $i++)
	{ 
	
		$jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);
		$jour_semaine = JDDayOfWeek($jour);

		if ($i == $nombre_de_jour)
		{
		
			if ($jour_semaine == 1)
			{
				echo "<tr>";
			}

			echo "<td class='case'>". $i ."</td></tr>";

		}elseif ($i == 1)
		{
		
			echo "<tr>";

			if ($jour_semaine == 0) 
			{
				$jour_semaine = 7;
			}

			for ($k=1; $k != $jour_semaine ; $k++)
			{ 
				echo "<td></td>";
			}

			echo "<td class='case'>". $i ."</td>";

			if ($jour_semaine == 7)
			{
				echo "</tr>";
			}

		}else
		{

			if ($jour_semaine == 1)
			{
				echo "<tr>";
			}

			echo "<td class='case'>". $i ."</td>";

			if ($jour_semaine == 0) {
				echo "</tr>";
			}

		}

	}

	echo "</table>";

}


function mois($p) {

	$z = $p-1;

	$table = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

	return $table[$z];

}

?>