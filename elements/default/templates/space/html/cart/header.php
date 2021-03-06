<?php

/*
 * Copyright © 2005-2009 Cosmopoly Europe EOOD (http://netenberg.com).
 * All Rights Reserved.
 *
 * This Cosmopoly Europe EOOD work (including software, documents, or
 * other related items) is being provided by the copyright holder under
 * the following license. By obtaining, using and/or copying this work,
 * you (the licensee) agree that you have read, understood, and will
 * comply with the following terms and conditions:
 *
 * Permission to use, copy, modify, and distribute this software and its
 * documentation, with or without modification, for any purpose and
 * without fee or royalty is hereby granted, provided that you include
 * the following on ALL copies of the software and documentation or
 * portions thereof, including modifications, that you make:
 *
 * 1. The full text of this NOTICE in a location viewable to users of the
 * redistributed or derivative work.
 *
 * 2. A short notice of the following form (hypertext is preferred, text
 * is permitted) should be used within the body of any redistributed or
 * derivative code: "Copyright © 2005-2009 Cosmopoly Europe EOOD
 * (http://netenberg.com). All Rights Reserved."
 *
 * 3. Notice of any changes or modifications to the W3C files, including
 * the date changes were made. (We recommend you provide URIs to the
 * location from which the code is derived.)
 *
 * THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
 * HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR FITNESS
 * FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE OR
 * DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS, COPYRIGHTS,
 * TRADEMARKS OR OTHER RIGHTS.
 * COPYRIGHT HOLDERS WILL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL
 * OR CONSEQUENTIAL DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR
 * DOCUMENTATION.
 *
 * The name and trademarks of copyright holders may NOT be used in
 * advertising or publicity pertaining to the software without specific,
 * written prior permission. Title to copyright in this software and any
 * associated documentation will at all times remain with copyright
 * holders.
 */ 

?>

<?php include_once $BL->props->get_page("templates/".THEMEDIR."/html/cart/top.php"); ?>
<!--Main table. Contains two rows:
1. top picture, logo and menu
2. page body with texts etc.
-->
<div align="center">
<table id="Table_01" width="760" height="600" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="7">
			<img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/psd_01.gif"); ?>" width="1" height="600" alt=""></td>
		<td rowspan="7" class="shadowleft">
			<img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/shadowleft.gif"); ?>" width="21" height="600" alt=""></td>
		<td>
			<img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/psd_03.gif"); ?>" width="720" height="32" alt=""></td>
		<td rowspan="7" class="shadowright">
			<img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/shadowright.gif"); ?>" width="17" height="600" alt=""></td>
		<td rowspan="7">
			<img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/psd_05.gif"); ?>" width="1" height="600" alt=""></td>
	</tr>
	<tr>
		<td height="166" background="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/logobg.gif"); ?>" class="headerlogo">
			LOGO HERE</td>
	</tr>
	<tr>
		<td bgcolor="#A4D8FB">
			<table cellpadding=0 cellspacing=0 class="headerlinks">
				<tr>
					<td class="menu">
					<p align="center"><a href="index.html">Homepage</a>&nbsp;&nbsp;
					<a href="index.html">Products</a>&nbsp;&nbsp;
					<a href="index.html">Domainnames</a>&nbsp;&nbsp;
					<a href="index.html">How we work</a>&nbsp;&nbsp;
					<a href="index.html">Portfolio</a>&nbsp;&nbsp;
					<a href="index.html">About us</a>&nbsp;&nbsp;
					<a href="index.html">Contact us</a></td>
				</tr>
				<tr>
					<td class="menu" height="3" bgcolor="#A4D8FB" >
					<img border="0" src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/spacer.gif"); ?>" width="1" height="5"></td>
				</tr>
			</table>		</td>
	</tr>
	<tr>
		<td><img src="<?php echo $BL->props->get_page("templates/".THEMEDIR."/images/psd_12.gif"); ?>" width="720" height="9" alt=""></td>
	</tr>
	
	<tr>
		<td class="contenttable">
