<?php
#!/usr/bin/env drush
$env_id = 'acquia_search_server_3';
$environment = apachesolr_environment_load($env_id);
if ($environment) {
  $environment['conf']['apachesolr_read_only'] = 0;
  apachesolr_environment_save($environment);
}

