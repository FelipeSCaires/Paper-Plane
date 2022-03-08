<?php
    /**
     * variables
     */
    $global['ajax'] = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';
    $global['protocol'] = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
    $global['host'] = $_SERVER['HTTP_HOST'];
    $global['domain'] = "{$global['protocol']}{$global['host']}";
    $global['path'] = $global['ajax'] ? rawurldecode($_POST['url']) : rawurldecode($_SERVER['REQUEST_URI']);
    $global['url'] = "{$global['domain']}{$global['path']}";
    $global['dir'] = basename(getcwd());
    $global['published'] = strpos($global['host'], 'localhost') === false && strpos($global['host'], 'NOMEHOST') != false; //chage here url domain
    $global['agent'] = $_SERVER['HTTP_USER_AGENT'];
    $global['root'] = $global['published'] ? '' : "/{$global['dir']}";
    $global['base'] = "{$global['domain']}{$global['root']}/";
    $global['mobile'] = preg_match('/(android|mobi)/i', $global['agent']);
    $global['incompatible'] = strpos($global['agent'], 'Trident/7') !== false;

    /**
     * client
     */
    $client['nomeFantasia'] = '';
    $client['color'] = '#F0891E';
    $client['endereco'] = 'R. Visconde de Nácar, 1165';
    $client['cidade'] = 'Curitiba';
    $client['estado'] = 'Paraná';
    $client['cep'] = '80410-201';
    $client['ddd'] = '41';
    $client['email'] = '';
    $client['telefone'] = '3093-3500';

    /**
     * api
     */
    $config['apiBaseUrl'] = '';

    /**
     * pages
     */
    $config['pageHome'] = $global['published'] ? '/' : "{$global['root']}/";
    $config['pages'] = [
        ['index'],
        ['contato']
    ];

?>