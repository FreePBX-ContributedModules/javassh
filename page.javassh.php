<?php 
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
/* $Id:$ */

//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//

echo "<h2> "._("Java SSH")." </h2>";
echo _("If necessary re-enter the maint user and password. Once the applet has opened enter the IP address of your PBX.<br>");
echo _("You will then connect to the FreePBX server. You can then login as 'root' or 'asterisk', or whatever user you have created.");

?>

<APPLET CODE="com.mindbright.application.MindTerm.class"
          ARCHIVE="/admin/modules/javassh/mindterm.jar" WIDTH=0 HEIGHT=0>
    <PARAM NAME="cabinets" VALUE="/admin/modules/javassh/mindterm.cab">
    <PARAM NAME="sepframe" value="true">
    <PARAM NAME="debug" value="false">
    <PARAM NAME="" value="">
    <PARAM NAME="bg-color" value="black">
    <PARAM NAME="fg-color" value="white">
    <PARAM NAME="cursor-color" value="white">
    <PARAM NAME="menus" value="popN">
    <PARAM NAME="exit-on-logout" value="true">
    <PARAM NAME="allow-new-server" value="false">
</APPLET>

