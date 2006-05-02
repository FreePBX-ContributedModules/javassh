<?php 
/* $Id:$ */

// Wrapper code for opening a new window. 
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of version 2 of the GNU General Public
//License as published by the Free Software Foundation.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.

?>

<h2> Java SSH </h2>

If necessary re-enter the maint user and password. Once the applet has opened enter the IP address of
your PBX. You will then connect to the FreePBX server. You can then login as 'root' or 'asterisk', or
whatever user you have created.

<APPLET CODE="com.mindbright.application.MindTerm.class"
          ARCHIVE="/admin/modules/javassh/mindterm.jar" WIDTH=0 HEIGHT=0>
    <PARAM NAME="cabinets" VALUE="/admin/modules/javassh/mindterm.cab">
    <PARAM NAME="sepframe" value="true">
    <PARAM NAME="debug" value="false">
</APPLET>

</div>

