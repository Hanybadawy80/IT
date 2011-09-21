<?php

$opt[1] = '--title ' . $NAGIOS_SERVICEDESC . '" Usage"';

$def[1] =  "DEF:var1=$rrdfile:$DS[1]:AVERAGE " ;
$def[1] .= "DEF:var2=$rrdfile:$DS[2]:AVERAGE " ;

$def[1] .= "AREA:var1#FFCC99:Total ";
$def[1] .= "GPRINT:var1:LAST:\"%6.2lf last\" " ;
$def[1] .= "GPRINT:var1:AVERAGE:\"%6.2lf avg\" " ;
$def[1] .= "GPRINT:var1:MAX:\"%6.2lf max\\n\" " ;
$def[1] .= 'COMMENT:"Check Command ' . $TEMPLATE[1] . '\r" ';

$def[1] .= "AREA:var2#00FF00:\"Used \" " ;
$def[1] .= "LINE:var2#000000 " ;
$def[1] .= "GPRINT:var2:LAST:\"%6.2lf last\" " ;
$def[1] .= "GPRINT:var2:AVERAGE:\"%6.2lf avg\" " ;
$def[1] .= "GPRINT:var2:MAX:\"%6.2lf max\\n\" ";

$opt[2] = '--title ' . $NAGIOS_SERVICEDESC . '" Missed Users"';

$def[2] =  "DEF:var3=$rrdfile:$DS[3]:AVERAGE " ;

$def[2] .= "AREA:var3#00FF00:missed_users ";
$def[2] .= "LINE:var3#000000 " ;
$def[2] .= "GPRINT:var3:LAST:\"%6.2lf last\" " ;
$def[2] .= "GPRINT:var3:AVERAGE:\"%6.2lf avg\" " ;
$def[2] .= "GPRINT:var3:MAX:\"%6.2lf max\\n\" " ;
$def[2] .= 'COMMENT:"Check Command ' . $TEMPLATE[2] . '\r" ';
?>
