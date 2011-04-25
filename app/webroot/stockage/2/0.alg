<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;;&quot;"/>
    <fonction fctcode="" fctetat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="xa EST_DU_TYPE NOMBRE" code="1#NOMBRE#xa"/>
        <item algoitem="xb EST_DU_TYPE NOMBRE" code="1#NOMBRE#xb"/>
        <item algoitem="ya EST_DU_TYPE NOMBRE" code="1#NOMBRE#ya"/>
        <item algoitem="yb EST_DU_TYPE NOMBRE" code="1#NOMBRE#yb"/>
        <item algoitem="a EST_DU_TYPE NOMBRE" code="1#NOMBRE#a"/>
        <item algoitem="b EST_DU_TYPE NOMBRE" code="1#NOMBRE#b"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE xa" code="2#xa#pasliste"/>
        <item algoitem="LIRE ya" code="2#ya#pasliste"/>
        <item algoitem="LIRE xb" code="2#xb#pasliste"/>
        <item algoitem="LIRE yb" code="2#yb#pasliste"/>
        <item algoitem="a PREND_LA_VALEUR (yb-ya)/(xb-xa)" code="5#a#(yb-ya)/(xb-xa)#pasliste"/>
        <item algoitem="b PREND_LA_VALEUR yb-a*xb" code="5#b#yb-a*xb#pasliste"/>
        <item algoitem="AFFICHER &quot;Les points A(&quot;" code="4#Les points A(#0"/>
        <item algoitem="AFFICHER xa" code="3#xa#0#pasliste"/>
        <item algoitem="AFFICHER &quot;;&quot;" code="4#;#0"/>
        <item algoitem="AFFICHER ya" code="3#ya#0#pasliste"/>
        <item algoitem="AFFICHER &quot;) et B(&quot;" code="4#) et B(#0"/>
        <item algoitem="AFFICHER xb" code="3#xb#0#pasliste"/>
        <item algoitem="AFFICHER &quot;;&quot;" code="4#;#0"/>
        <item algoitem="AFFICHER yb" code="3#yb#0#pasliste"/>
        <item algoitem="AFFICHER &quot;) appartiennent à la courbe D définie par \nf(x) = &quot;" code="4#) appartiennent à la courbe D définie par \nf(x) = #0"/>
        <item algoitem="AFFICHER a" code="3#a#0#pasliste"/>
        <item algoitem="AFFICHER &quot;x + (&quot;" code="4#x + (#0"/>
        <item algoitem="AFFICHER b" code="3#b#0#pasliste"/>
        <item algoitem="AFFICHER &quot;)&quot;" code="4#)#1"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
