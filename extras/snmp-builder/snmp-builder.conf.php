<?php

/* Used for inicial development: 
** Objective: Default configuration for SNMPBuilder Plugin
** Copyright 2014 - Adail Horst - http://spinola.net.br/blog
**
** This file is part of Zabbix-Extras.
**
** It is not authorized any change that would mask the existence of the plugin. 
** The menu names, logos, authorship and other items identificatory plugin 
** should always be maintained.
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
** If not, see http://www.gnu.org/licenses/.
**/

//$mibs_dir = dirname(__FILE__).'/snmp_builder/mibs'; 
// dinamizar aqui
define('MIBS_ALL_PATH', '/var/www/zbx2.2/extras/snmp-builder/mibs');
define('SNMPB_SNMP_PATH','/usr/bin');
//define('SNMPB_SNMP_PATH','/usr/local/bin');
ini_set("upload_tmp_dir", "/tmp");

?>