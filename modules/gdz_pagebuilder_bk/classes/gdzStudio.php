<?php
/**
 *
 */
class gdzStudio
{

    function __construct()
    {
        $this->studio_url = 'http://localhost/prestashop17/befer2/index.php?fc=module&module=gdz_studio&controller=api';
    }

    public function request($params)
    {
        $curlSession = curl_init();
        curl_setopt($curlSession, CURLOPT_URL, $this->studio_url);
        curl_setopt($curlSession, CURLOPT_POSTFIELDS, $params);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curlSession);
        curl_close($curlSession);
        return Tools::jsonDecode($response, true);
    }
}

 ?>