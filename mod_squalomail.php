<?php
/**
 * @package    mod_squalomail
 *
 * @author     Elvis Sedić elvis@spletodrom.si
 * @copyright  Spletodrom
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://www.spletodrom.si
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$naslov = htmlspecialchars($params->get('naslov'), ENT_COMPAT, 'UTF-8');
$name = htmlspecialchars($params->get('name'), ENT_COMPAT, 'UTF-8');
$email = htmlspecialchars($params->get('email'), ENT_COMPAT, 'UTF-8');
$btn = htmlspecialchars($params->get('btn'), ENT_COMPAT, 'UTF-8');
$btnclass = $params->get('btnclass', 'btn btn-primary');
$url = $params->get('redirect', '');
$appid = $params->get('appid', '');
$listid = $params->get('listid', '');

require ModuleHelper::getLayoutPath('mod_squalomail', $params->get('layout', 'default'));
