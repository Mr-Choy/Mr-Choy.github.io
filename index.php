<?php
use App\Utils\AccessLogger;

#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       ZravianX                                                    ##
##  Version:       2011.11.30                                                  ##
##  Filename:      index.php                                                  ##
##  Developed by:  Dzoki & Advocaite & Donnchadh                               ##
##  Reworked by:   ZZJHONS                                                     ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     ZravianX (c) 2011 - All rights reserved                     ##
##  URLs:          http://zravianx.zzjhons.com                                 ##
##  Source code:   http://www.github.com/ZZJHONS/ZravianX                      ##
##                                                                             ##
#################################################################################

if(!file_exists('var/installed') && @opendir('install')) {
    header("Location: install/");
    exit;
}

include_once("GameEngine/config.php");

error_reporting(E_ALL || E_NOTICE);

if(file_exists('Security/Security.class.php')) {
    require 'Security/Security.class.php';
    Security::instance();
} else {
    die('Security: Please activate security class!');
}

AccessLogger::logRequest();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo SERVER_NAME; ?></title>
    <style>
        :root {
            --bg1: #0f1020;
            --bg2: #1f2a44;
            --card: rgba(13, 18, 36, 0.75);
            --text: #f3f4f6;
            --muted: #b8c2d9;
            --accent: #7c3aed;
            --accent-2: #22d3ee;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 10% 20%, rgba(124, 58, 237, 0.35), transparent 35%),
                radial-gradient(circle at 90% 80%, rgba(34, 211, 238, 0.3), transparent 30%),
                linear-gradient(145deg, var(--bg1), var(--bg2));
            padding: 24px;
        }

        .card {
            width: min(680px, 100%);
            background: var(--card);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 40px 28px;
            text-align: center;
            backdrop-filter: blur(10px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 10px;
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--accent-2);
        }

        h1 {
            margin: 0;
            font-size: clamp(30px, 5vw, 44px);
            line-height: 1.1;
        }

        p {
            margin: 14px auto 0;
            color: var(--muted);
            font-size: clamp(15px, 2.4vw, 18px);
            max-width: 52ch;
        }

        .launch {
            margin-top: 28px;
            display: inline-block;
            text-decoration: none;
            color: #ffffff;
            font-weight: 700;
            font-size: 16px;
            padding: 14px 26px;
            border-radius: 12px;
            background: linear-gradient(90deg, var(--accent), var(--accent-2));
            box-shadow: 0 8px 24px rgba(124, 58, 237, 0.45);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .launch:hover,
        .launch:focus {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(34, 211, 238, 0.35);
        }
    </style>
</head>
<body>
    <section class="card" aria-label="Mr Choy landing page">
        <span class="eyebrow">Mr-Choy.github.io</span>
        <h1>Welcome to the new look</h1>
        <p>Your updated homepage is live. Tap below to continue into your Quest of Love experience.</p>
        <a class="launch" href="launch-quest-of-love-app">Launch Quest of Love App</a>
    </section>
</body>
</html>
