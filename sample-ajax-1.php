<?php
  // クロスオリジンを許可する
  header("Access-Control-Allow-Origin:*");
  // ヘッダーにコンテンツの種類を設定する
  header("Content-Type: application/json");

  $title = [
    "まどか☆マギカ",
    "化物語",
    "偽物語",
    "物語シリーズ",
    "終物語",
    "暦物語",
    "聲の形",
    "３月のライオン",
    "けいおん",
    "中二病でも恋がしたい!",
    "中二病でも恋がしたい!戀",
    "小鳥遊六花・改 〜劇場版 中二病でも恋がしたい!〜",
    "小林さんちのメイドラゴン",
    "響け!ユーフォニアム",
    "響け!ユーフォニアム2",
    "リズと青い鳥",
    "無彩限のファントム・ワールド",
    "境界の彼方",
    "たまこまーけっと",
    "たまこラブストーリー ",
    "氷菓",
    "日常",
    "ヴァイオレット・エヴァーガーデン"
  ];

  // 配列データをJSONデータに変換して表示する
  print json_encode($title);
