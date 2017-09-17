<!--
Copyright (C)2017 Shiratori Tenta
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program. If not, see <http: //www.gnu.org/licenses/>.
-->
<!DOCTYPE html>
<html>

<head>

<!-- setting initial -->
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible"content="ie=edge">
<title>
タイトル
</title>
<meta name="Description"CONTENT="ディスクリプション">
<meta name="google-site-verification"content=""/>
<meta name="robots"content="noindex,nofollow">
<!--ページをサーバーにあげても検索結果に表示されません-->
<meta name='keywords' content=''><!--関連するワードをカンマ区切りで（これがSEO的に効果があるのか疑わしい。）-->
<meta name='copyright' content='Copyright &copy; 2017 Shiratori Tenta. All Rights Reserved.'>
<!-- Google Analytics -->
<script>window.ga = window.ga || function (){ (ga.q = ga.q ||[]).push(arguments)}; ga.l = +new Date;ga('create', 'your-id', 'auto');ga('send', 'pageview');</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- setting favicon -->
<link rel="apple-touch-icon"sizes="180x180"href="favicons/apple-touch-icon.png">
<link rel="icon"type="image/png"sizes="32x32"href="favicons/favicon-32x32.png">
<link rel="icon"type="image/png"sizes="16x16"href="favicons/favicon-16x16.png">
<link rel="manifest"href="favicons/manifest.json">
<link rel="mask-icon"href="favicons/safari-pinned-tab.svg"color="#5bbad5">
<meta name="theme-color"content="#ffffff">
<!-- setting ogp -->
<meta property="og:title"content="タイトル">
<meta property="og:type"content="タイプ(website,article)">
<meta property="og:url"content="URL">
<meta property="og:image"content="サムネイル">
<meta property="og:site_name"content="サイト名">
<meta property="og:description"content="ディスクリプション">
<!-- facebook ogp -->
<meta property="fb:app_id"content="アプリのid">
<!-- twitter card -->
<meta name="twitter:card"content="summary"/>
<meta name="twitter:site"content="@tenta1111swan"/>
<meta name="twitter:title"content="タイトル"/>
<meta name="twitter:description"content="ディスクリプション"/>
<meta name="twitter:image"content="サムネイル"/>
<!-- setting mine -->
<?php wp_head(); ?> 
</head>
<body>
    <header>
        <?= the_title("<h1>","</h1>"); ?>
    </header>