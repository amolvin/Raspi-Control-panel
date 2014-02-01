<?php

	define(TXT_CONFIRM, "Wollen Sie das System wirklich");
	define(TXT_RUNTIME, "Laufzeit:");
	define(TXT_RESTART_1, "neu starten");
	define(TXT_RESTART_2, "Neustarten");
	define(TXT_SHUTDOWN_1, "herunterfahren");
	define(TXT_SHUTDOWN_2, "Herunterfahren");
	define(TXT_TEMPERATURE, "Temperatur");
	define(TXT_VOLTAGE, "Spannung");
	define(TXT_CLOCK, "Takt");
	define(TXT_USAGE, "Prozessorauslastung");

	$uptime = preg_replace('/day\b/i','Tag',$uptime);
	$uptime = preg_replace('/days\b/i','Tage',$uptime);

?>
