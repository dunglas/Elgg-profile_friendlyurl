<?php
/**
 * Elgg profile_friendlyurl plugin
 *
 * @package Elggprofile_friendlyurl
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @copyright Kévin Dunglas - 2010
 */

function profile_friendly_url($user) {
  return 'http://' . $user->username . '.' . get_plugin_setting('domain', 'profile_friendlyurl');
}

function profile_friendlyurl_init() {
  register_entity_url_handler('profile_friendly_url','user','all');
}

register_elgg_event_handler('init','system','profile_friendlyurl_init');
?>