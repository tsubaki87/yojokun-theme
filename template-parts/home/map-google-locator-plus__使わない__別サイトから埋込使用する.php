<!--
  Copyright 2023 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
<!DOCTYPE html>
<html>
  <head>
    <title>Locator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      gmpx-store-locator {
        width: 100%;
        height: 100%;

        /* These parameters customize the appearance of Locator Plus. See the documentation at
           https://github.com/googlemaps/extended-component-library/blob/main/src/store_locator/README.md
           for more information. */
        --gmpx-color-surface: #fff;
        --gmpx-color-on-surface: #212121;
        --gmpx-color-on-surface-variant: #757575;
        --gmpx-color-primary: #1967d2;
        --gmpx-color-outline: #e0e0e0;
        --gmpx-fixed-panel-width-row-layout: 28.5em;
        --gmpx-fixed-panel-height-column-layout: 65%;
        --gmpx-font-family-base: "Roboto", sans-serif;
        --gmpx-font-family-headings: "Roboto", sans-serif;
        --gmpx-font-size-base: 0.875rem;
        --gmpx-hours-color-open: #188038;
        --gmpx-hours-color-closed: #d50000;
        --gmpx-rating-color: #ffb300;
        --gmpx-rating-color-empty: #e0e0e0;
      }
    </style>
    <script>
      const CONFIGURATION = {
        "locations": [
          {"title":"益軒の生誕地　福岡城","address1":"日本、〒810-0043 福岡県福岡市中央区城内６−３７ 城内町民館","coords":{"lat":33.586094835244495,"lng":130.38205480317995},"placeId":"ChIJ4XkxudKTQTUREbI9Xc1eEiQ"},
          {"title":"八木山２２４９","address1":"日本、〒820-0047 福岡県飯塚市八木山２２４９","coords":{"lat":33.62963006842827,"lng":130.6080612527786},"placeId":"ChIJCVTmtb2BQTURCEMlqMVYwBw"},
          {"title":"浦泉６９−２","address1":"日本、〒838-0001 福岡県朝倉市浦泉６９−２","coords":{"lat":33.4674460999197,"lng":130.69236667605742},"placeId":"ChIJo4282h53QTURb747tQ1xtMQ"},
          {"title":"100円パーク 荒戸パーキング","address1":"日本、〒810-0062 福岡県福岡市中央区荒戸１丁目１１−１５","coords":{"lat":33.59354527835115,"lng":130.37756965330354},"placeId":"ChIJyaO2r8iTQTURuJx18t2WtRY"},
          {"title":"今川２丁目３−２３","address1":"日本、〒810-0054 福岡県福岡市中央区今川２丁目３−２３","coords":{"lat":33.58625202194785,"lng":130.36407186864776},"placeId":"ChIJpwEDMLGTQTUR5kumKy0Ye0I"},
          {"title":"祇園町８−２０","address1":"日本、〒812-0038 福岡県福岡市博多区祇園町８−２０","coords":{"lat":33.59108773482728,"lng":130.41159462023776},"placeId":"ChIJlzlsxb-RQTURctkFqbN_Z9I"},
          {"title":"ハミングコート大橋南","address1":"日本、〒811-1343 福岡県福岡市南区和田１丁目４−１８ ハミングコート大橋南","coords":{"lat":33.54497356790104,"lng":130.42781293558198},"placeId":"ChIJJa45vUGRQTURbo25Mmym7GI"},
          {"title":"センター1号館","address1":"日本、〒819-0385 福岡県福岡市西区元岡７４４ センター1号館","coords":{"lat":33.597447280776926,"lng":130.22351652209014},"placeId":"ChIJt16kE1npQTURG2WScXiac0c"},
          {"title":"箱崎サテライト, 九州大学","address1":"日本、〒812-0053 福岡県福岡市東区箱崎６丁目１０−１","coords":{"lat":33.622530950043334,"lng":130.4257070736801},"placeId":"ChIJfQ2wWkiOQTURLg95up36Byg"},
          {"title":"別府５丁目７−１","address1":"日本、〒814-0104 福岡県福岡市城南区別府５丁目７−１","coords":{"lat":33.57280111232488,"lng":130.36665029933624},"placeId":"ChIJ48YA7JWTQTURfdJNNd14gJ8"}
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
        "mapsApiKey": "AIzaSyCPKiQTLmNow01e8Zwqt7T_5NtnCjiCAc0",
        "capabilities": {"input":true,"autocomplete":true,"directions":false,"distanceMatrix":true,"details":false,"actions":false}
      };

    </script>
    <script type="module">
      document.addEventListener('DOMContentLoaded', async () => {
        await customElements.whenDefined('gmpx-store-locator');
        const locator = document.querySelector('gmpx-store-locator');
        locator.configureFromQuickBuilder(CONFIGURATION);
      });
    </script>
  </head>
  <body>
    <!-- Please note unpkg.com is unaffiliated with Google Maps Platform. -->
    <script type="module" src="https://unpkg.com/@googlemaps/extended-component-library@0.6"></script>

    <!-- Uses components from the Extended Component Library; see
         https://github.com/googlemaps/extended-component-library for more information
         on these HTML tags and how to configure them. -->
    <gmpx-api-loader key="AIzaSyCPKiQTLmNow01e8Zwqt7T_5NtnCjiCAc0" solution-channel="GMP_QB_locatorplus_v10_cABD"></gmpx-api-loader>
    <gmpx-store-locator map-id="DEMO_MAP_ID"></gmpx-store-locator>
  </body>
</html>