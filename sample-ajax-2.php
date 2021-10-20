<?php
// クロスオリジンを許可する
header("Access-Control-Allow-Origin:*");
// ヘッダーにコンテンツの種類を設定する
header("Content-Type: application/json");


$adobe = [
  [
    "name" => "Photoshop",
    "copy" => "想像の赴くままに世界は変えられる",
    "description" => "画像補正から加工、webデザインまで対応のプロフェッショナル画像編集ツール。"
  ],
  [
    "name" => "Illustrator",
    "copy" => "あらゆるデザインをあらゆる場所で",
    "description" => "デスクトップとiPadで美しいベクターやイラストを作成。"
  ],
  [
    "name" => "InDesign",
    "copy" => "デザイン・レイアウトの新たなページをめくる",
    "description" => "高品質なページアウトと文字組。"
  ],
  [
    "name" => "Acrobat DC",
    "copy" => "PDFにセキュリティを、ビジネスに信頼を。",
    "description" => "モバイルで世界がつながる、PDFトータルソリューション。"
  ],
  [
    "name" => "Bridge",
    "copy" => "",
    "description" => "クリエイティブアセットを一元管理。"
  ],
  [
    "name" => "After Effects",
    "copy" => "シーンを力強く演出",
    "description" => "まるで映画のようなビジュアルエフェクトとモーショングラフィックス。"
  ],
  [
    "name" => "Premiere Pro",
    "copy" => "心を動かす動画編集をPremiere Proから始めよう",
    "description" => "プロ仕様の映画・動画編集のための業界標準ツール。"
  ],
  [
    "name" => "Animate",
    "copy" => "アニメーション新時代",
    "description" => "インタラクティブアニメの制作環境すべてのプラットフォーム、デバイス、スタイルに対応します。"
  ],
  [
    "name" => "XD",
    "copy" => "構想をそのままデザイン",
    "description" => "webサイトやアプリのUI/UXデザイン。"
  ],
  [
    "name" => "Dreamweaver",
    "copy" => "レスポンシブなwebサイトをすばやく作成。新しいアプリで、新生活を始めよう",
    "description" => "webサイトを短時間でコーディングできます。"
  ]
];

print json_encode($adobe);
