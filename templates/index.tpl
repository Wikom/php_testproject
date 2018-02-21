{config_load file=default.conf section="setup"}
{include file="header.tpl" title=foo}

Gebe uns noch ein paar Details mit<br><br>
<div id="sendform">

<b>Sendungstyp:</b>{html_options id=types name=shipping_types options=$shipping_types}<br>
<b>Absendedatum:</b><input type="text" id="datepicker"><br>
<b>TrackingId:</b><input type="text" id="trackingid"><br>
<b>Empf&auml;ngername:</b><input type="text" id="deliveryname"><br><br>
<b>Packetdetails</b><br>
<b>L&auml;nge</b><input type="float" id="size_l"><br>
<b>Breite</b><input type="float" id="size_w"><br>
<b>H&ouml;he</b><input type="float" id="size_h"><br>
<b>Gewicht (g)</b><input type="float" id="weight"><br>

<button id="submit">Absenden</button>
</div>

<div id="noticeresult"></div>

{include file="footer.tpl"}
