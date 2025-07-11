<?php
    require_once('class/QuestrpUtil.php');
    $settings_data = QuestrpUtil::getSettingsToSmarty();

    $this->getEngine()->addVariables($settings_data);
    
    $discord_server = QuestrpUtil::getDsServer($settings_data['DISCORDID']);
    $this->_cache->store('ds_status_ping', $discord_server, 60);
    $this->getEngine()->addVariables([
        'DISCORD_SERVER' => $discord_server,
    ]);
