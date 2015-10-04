<!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
		<meta name="inmobi-site-verification" content="79ccca88631a95d3d2960098aac62ad9">
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <title>Commander for WoT</title>
    </head>
    <body>
	<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter26912655 = new Ya.Metrika({id:26912655, clickmap:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/26912655" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
        <div class="logo">
			<img src="img/logo.png" width="100%">
			<a href="main.html"><img src="img/start.png" align="center" width="50%" class="start"></a>
			<a href="connect.html"><img src="img/connect.png" align="center" width="80%" class="connect"></a>
        </div>
		<a href="https://play.google.com/store/apps/details?id=appinventor.ai_DimSer_company.Commander_for_WoT&hl=ru"><img src="img/download_android3.png" align="center" width="33%" class="down"></a>
		<div class="ads">
			<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
		</div>

<?php
/*--------------------------------------------------------------*/
/* Millennial Media PHP Ad Coding, v.7.4.20                     */
/* Copyright Millennial Media, Inc. 2006                        */
/*                                                              */
/* The following code requires PHP = 4.3.0 and                 */
/* allow_url_fopen 1 set in php.ini file.                       */
/*                                                              */
/* NOTE:                                                        */
/* It is recommended that you lower the default_socket_timeout  */
/* value in the php.ini file to 5 seconds.                      */
/* This will prevent network connectivity from affecting        */
/* page loading.                                                */
/*--------------------------------------------------------------*/

/*------- Publisher Specific Section -------*/
$mm_placementid = "182196";
$mm_adserver = "ads.mp.mydas.mobi";

/* The default response will be echo'd on the page     */
/* if no Ad is returned, so any valid WML/XHTML string */
/* is acceptable.                                      */
$mm_default_response = "def";

/*------------------------------------------*/

/*----------- BEGIN AD INITIALIZATION ----------*/
/*----- PLEASE DO NOT EDIT BELOW THIS LINE -----*/
$mm_id = "NONE";
$mm_ua = "NONE";
@$mm_ip = $_SERVER['REMOTE_ADDR'];

if (isset($_SERVER['HTTP_USER_AGENT'] )){
     $mm_ua = $_SERVER['HTTP_USER_AGENT'];
}

if (isset($_SERVER['HTTP_X_UP_SUBNO'])) {
          $mm_id = $_SERVER['HTTP_X_UP_SUBNO'];
} elseif (isset($_SERVER['HTTP_XID'])) {
          $mm_id = $_SERVER['HTTP_XID'];
} elseif (isset($_SERVER['HTTP_CLIENTID'])) {
          $mm_id = $_SERVER['HTTP_CLIENTID'];
} else {
          $mm_id = $_SERVER['REMOTE_ADDR'];
}

$mm_url = "http://$mm_adserver/getAd.php5?apid=$mm_placementid&auid="
          . urlencode($mm_id) . "&uip=" . urlencode($mm_ip) . "&ua="
          . urlencode($mm_ua);
/*------------ END AD INITIALIZATION -----------*/
/* Place this code block where you want the ad to appear */
/*------- Reusable Ad Call -------*/
@$mm_response = file_get_contents($mm_url);
echo $mm_response != FALSE ? $mm_response : $mm_default_response;
/*--------- End Ad Call ----------*/
?>

<script>
</script>
        </body>
</html>