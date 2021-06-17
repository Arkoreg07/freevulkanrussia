<?php

function isSearchEngine()
{
    $searchEngines = array(
        'rambler',
        'googlebot',
        'aport',
        'yahoo',
        'msnbot',
        'turtle',
        'mail.ru',
        'omsktele',
        'yetibot',
        'picsearch',
        'sape.bot',
        'sape_context',
        'gigabot',
        'snapbot',
        'alexa.com',
        'megadownload.net',
        'askpeter.info',
        'igde.ru',
        'ask.com',
        'qwartabot',
        'yanga.co.uk',
        'scoutjet',
        'similarpages',
        'oozbot',
        'shrinktheweb.com',
        'aboutusbot',
        'followsite.com',
        'dataparksearch',
        'google-sitemaps',
        'appEngine-google',
        'feedfetcher-google',
        'liveinternet.ru',
        'xml-sitemaps.com',
        'agama',
        'metadatalabs.com',
        'h1.hrn.ru',
        'googlealert.com',
        'seo-rus.com',
        'yaDirectBot',
        'yandeG',
        'yandex',
        'yandexSomething',
        'Copyscape.com',
        'kremlinrus.ru',
        'worldcrisis.ru',
        'keytas.ru',
        'efachka.ru',
        'xn--h1adbc.su',
        'efariya.ru',
        'online.ua',
        'telegraf.by',
        'n1.by',
        'yerkramas.org',
        'gorlovka.ua',
        'zhzh.info',
        'uapress.info',
        'oppps.ru',
        'volzsky.ru',
        'moi-goda.ru',
        '24warez.ru',
        'hvylya.net',
        'lokomotiv.info',
        'nororuss.ru',
        'pirates-life.ru',
        'liubavyshka.ru',
        'kartinki-vernisazh.ru',
        'kykyryzo.ru',
        'shnyagi.net',
        'muz4in.net',
        'genapilot.ru',
        'sportanalytic.com',
        'ilenta.com',
        'wdesk.ru',
        'vamotkrytka.ru',
        'avetu.ru',
        'ufa-news.net',
        'tolyatti-news.net',
        'prikol.ru',
        'voenchel.ru',
        'vestnikk.ru',
        'stranahandmade.net',
        'profi-forex.org',
        'militaryreview.ru',
        'ivifilm.com',
        'supercoolpics.com',
        'terraoko.com',
        'newauthor.ru',
        'webfile.ru',
        'marrietta.ru',
        'sportonline.ua',
        'lesyaka.ru',
        'rusnord.ru',
        'putingamer.net',
        'mobidevices.ru',
        'smeshariki-mir.ru',
        'vrgames.by',
        'wh24.ru',
        'xrust.ru',
        'handmade-paradise.ru',
        'modelist-konstruktor.com',
        'games-inn.ru',
        'gtars.ru',
        'spayte.ru',
        'mogu.by',
        'nazva.net',
        'viewout.ru',
        'bashny.net',
        'businessua.com',
        'shenskiy-blog.ru',
        'tvoi54.ru',
        'minersss.com',
        'nm.tj',
        'yopolis.ru',
        'bing.com',
    );

    foreach ($searchEngines as $searchEngine) {
        if (stripos($_SERVER['HTTP_USER_AGENT'], $searchEngine) !== false) {
            $searchEngineName = $searchEngine;
            return $searchEngineName;
        }
    }

    return false;
}

function isHuman($ua = '') {
    return !isSearchEngine();
}

$return404 = false;
$return404Page = false;


if (isHuman()) {
    // human
    // status_header(404);

    if (@preg_match("/google|yandex|mail|rambler|duckduckgo|rambler|yahoo|bing|nigma|hi|zapmeta|qip|sweetim|plusnetwork|cybermasters.ru|rubo|seocatalog|slavno|vseo|twow|cobra|lotgame|igrodom|4itachok|g5mod|xrust|0225|rigaportal|stroiportal-dnepr|mediavektor|kremlinrus.ru|worldcrisis.ru|keytas.ru|efachka.ru|xn--h1adbc.su|efariya.ru|online.ua|telegraf.by|n1.by|yerkramas.org|gorlovka.ua|zhzh.info|uapress.info|oppps.ru|volzsky.ru|moi-goda.ru|24warez.ru|hvylya.net|lokomotiv.info|nororuss.ru|pirates-life.ru|liubavyshka.ru|kartinki-vernisazh.ru|kykyryzo.ru|shnyagi.net|muz4in.net|genapilot.ru|sportanalytic.com|ilenta.com|wdesk.ru|vamotkrytka.ru|avetu.ru|ufa-news.net|tolyatti-news.net|prikol.ru|voenchel.ru|vestnikk.ru|stranahandmade.net|profi-forex.org|militaryreview.ru|ivifilm.com|supercoolpics.com|terraoko.com|newauthor.ru|webfile.ru|marrietta.ru|sportonline.ua|lesyaka.ru|rusnord.ru|putingamer.net|mobidevices.ru|smeshariki-mir.ru|vrgames.by|wh24.ru|xrust.ru|handmade-paradise.ru|modelist-konstruktor.com|games-inn.ru|gtars.ru|spayte.ru|mogu.by|nazva.net|viewout.ru|bashny.net|businessua.com|shenskiy-blog.ru|tvoi54.ru|minersss.com|nm.tj|yopolis.ru|bing.com/", $_SERVER['HTTP_REFERER'])) {
        // human from search engine
        // $return404      = true;
        $date_of_expiry = 2147483647;
        setcookie("userlog", "org", $date_of_expiry, '/');
        $return404 = true;

    }
    else if (@stripos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) !== false) {
        // site navigation 
        if (@$_COOKIE["userlog"] == "org") {
            // site navigation human from search engine
            $return404 = true;

        } else {
            // site navigation human not from search engine
            $return404 = true;
            $return404Page = true;
        }
    }
    else {
        // human not from search engine

        // ban user
        $date_of_expiry = 2147483647;
        setcookie("usergoal", md5('fuck rkn'), $date_of_expiry, '/');

        $return404 = true;
        $return404Page = true;
    }
} else {
    // search engine
    $return404 = false;
    $return404Page = false;
}

// user banned
if (@$_COOKIE["usergoal"] == md5('fuck rkn')) {
    $return404 = true;
    $return404Page = true;
}
// var_dump($_SERVER['HTTP_REFERER']);
// var_dump($_COOKIE);
if ($return404) {
    http_response_code(500);
    // header('HTTP/1.0 404 Not Found', true, 404);
}

if($return404Page) {
    // show404ErrorPage();
    exit();
}


// seo redirects
if (preg_match("|^/avtomaty-vulkan/?$|", $_SERVER['REQUEST_URI'])
    || preg_match("|^/faq/?$|", $_SERVER['REQUEST_URI'])
    || preg_match("|^/menyu-i-kategorii/?$|", $_SERVER['REQUEST_URI'])
    || preg_match("|^/avtomaty-vulkan/atronik/?$|", $_SERVER['REQUEST_URI'])
    || preg_match("|^/cherries-gone-wild/?$|", $_SERVER['REQUEST_URI'])

) {
    $location = "https://{$_SERVER['HTTP_HOST']}";

    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
    exit;
}

if(preg_match("|^/zerkalo-kazino-vulkan/?$|", $_SERVER['REQUEST_URI'])) {
    $location = "https://{$_SERVER['HTTP_HOST']}/zerkalo/";

    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
    exit;
}

if(preg_match("|^/avtomaty-vulkan/playson/?$|", $_SERVER['REQUEST_URI'])) {
    $location = "https://{$_SERVER['HTTP_HOST']}/playson/";

    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
    exit;
}



// redirect from https to http 
// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
//     $location = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

//     if ($return404) {
//         metaRedirect($location);
//     } else {
//         header('HTTP/1.1 301 Moved Permanently');
//         header('Location: ' . $location);
//     }
//     exit;
// }



// redirect from www.domain to https://domain
if (substr($_SERVER['SERVER_NAME'], 0, 4) === 'www.') {
    // $location = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $location = "https://";

    if ($_SERVER["SERVER_PORT"] != "80") {
        $location .= substr($_SERVER['SERVER_NAME'], 4) . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $location .= substr($_SERVER['SERVER_NAME'], 4) . $_SERVER["REQUEST_URI"];
    }

    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
    exit;
}

// redirect from http to https
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
    exit;
}


function redirect($location, $return404)
{
    if ($return404) {
        metaRedirect($location);
    } else {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
    }
}

function metaRedirect($location)
{
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="refresh" content="0;url=' . $location . '" />

            <title>Document</title>
        </head>
        <body>
            <a href="' . $location . '">Please press here to continue</a>
        </body>
        </html>
    ';
}

function show404ErrorPage() {
    echo '

         <!DOCTYPE html>
            <html>
            <head>
              <title>Account disabled by server administrator</title>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <style>
                body {
                  font-weight: normal;
                  font-size: 11px;
                  font-family: Arial;
                }
                .fatal-error {
                  width: 270px;
                  height: 270px;
                  margin: 0 auto;
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  margin-left: -135px;
                  margin-top: -135px;
                }
                .fatal-error-round {
                  width: 270px;
                  height: 270px;
                  background: #FF8356;
                  border-radius: 270px;
                }
                .fatal-error-inner {
                  padding-top: 23px;
                  text-align: center;
                }
                .fatal-error-sign {
                  margin-bottom: 10px;
                }
                .fatal-error-sign-top {
                  background: #FFF;
                  width: 14px;
                  height: 7px;
                  border-radius: 28px 28px 0 0;
                  margin: 0 auto;
                }
                .fatal-error-sign-body {
                  content: "";
                  width: 0px;
                  height: 0px;
                  border-style: solid outset;
                  border-width: 54px 7px 0 7px;
                  border-color: #FFF rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
                  margin: 0 auto;
                }
                .fatal-error-sign-empty {
                  background: #FF8356;
                  margin: 0 auto;
                  width: 10px;
                  height: 11px;
                  z-index: 1;
                  margin-top: -7px;
                }
                .fatal-error-sign-dot {
                  background: #FFF;
                  width: 14px;
                  height: 14px;
                  border-radius: 14px;
                  margin: 0 auto;
                  margin-top: 0px;
                }
                .fatal-error-message {
                  font-size: 12px;
                  overflow: hidden;
                  padding: 0 10px;
                  color: #fff;
                }
                .fatal-error-header {
                  font-size: 27px;
                  font-weight: bold;
                  margin-bottom: 10px;
                }
                .b-copyright {
                  margin-top: 40px;
                  text-align: center;
                }
                .b-copyright__link {
                  color: #587b9d;
                }
                .b-text_lang_ru {
                  display: none;
                }
              </style>
            </head>
            <body>
            <div id="main-wrapper">
              <div id="fatal-error" class="fatal-error">
                <div class="fatal-error-round">
                  <div class="fatal-error-inner">
                    <div class="fatal-error-sign">
                      <div class="fatal-error-sign-top"></div>
                      <div class="fatal-error-sign-body"></div>
                      <div class="fatal-error-sign-empty"></div>
                      <div class="fatal-error-sign-dot"></div>
                    </div>
                    <div class="fatal-error-message">
                      <div class="fatal-error-header b-text b-text_lang_en">Attention</div>
                      <div class="fatal-error-header b-text b-text_lang_ru">Внимание</div>
                      <div class="fatal-error-desc b-text b-text_lang_en">Account disabled by server administrator.</div>
                      <div class="fatal-error-desc b-text b-text_lang_ru">Аккаунт отключен администратором сервера.</div>
                    </div>
                  </div>
                </div>
                <div class="b-copyright">
                  <a class="b-copyright__link" href="http://ispsystem.com/external/ispmanager.html" target="_blank">ISPsystem © 1997-<script type="text/javascript">document.write(new Date().getFullYear())</script></a>
                </div>
              </div>

            </div>
            <script type="text/javascript">
              var platformLanguage = navigator && (
                navigator.language ||
                  navigator.browserLanguage ||
                  navigator.systemLanguage ||
                  navigator.userLanguage ||
                  null ),
                elemsRU, elemsEN;
              if (platformLanguage.match("ru") && document.getElementsByClassName) {
                elemsRU = document.getElementsByClassName("b-text_lang_ru");
                elemsEN = document.getElementsByClassName("b-text_lang_en");
                var l = elemsEN.length;
                while(l--) {
                  elemsEN[l].style.display = "none";
                }
                l = elemsRU.length;
                while(l--) {
                  elemsRU[l].style.display = "block";
                }
                document.title = "Аккаунт отключен администратором сервера.";
              }
            </script>
            <script src="//nht-2.extreme-dm.com/t.js" id="eX-hrushch-2" async defer></script> 
            </body>
            </html>
    
    ';
}