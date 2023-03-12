<?php
//https://pandafiles.com/6kaufigr9sjk/Anne.Rices.Mayfair.Witches.S01E07.MP4.LEG.BaixarSeriesMP4.xyz.mp4
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://pandafiles.com/document');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "op=download2&id=".$_GET['id']."&rand=&referer=https%3A%2F%2Fpandafiles.com%2Fdocument&method_free=Free+Download&method_premium=&adblock_detected=0");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: pandafiles.com';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Sec-Ch-Ua: \"Chromium\";v=\"92\", \" Not A;Brand\";v=\"99\", \"Google Chrome\";v=\"92\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Origin: https://pandafiles.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.107 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://pandafiles.com/document';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cookie: lang=english; __utma=72595730.1103058370.1678584379.1678584379.1678584379.1; __utmc=72595730; __utmz=72595730.1678584379.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); sharedid=15b2f767-dc33-4177-a034-9ec88bcb94fd; __qca=P0-1794721240-1678584378850; dom3ic8zudi28v8lr6fgphwffqoz0j6c=c1fa9092-368e-443f-9c33-e1a347d03630%3A3%3A1; ppu_main_3703809642acf045ec3ad2097035f530=1; HstCfa4573821=1678584380122; HstCmu4573821=1678584380122; HstCnv4573821=1; HstCns4573821=1; __gads=ID=eb39320835943fa8-22766f3df5db00e9:T=1678584380:RT=1678584380:S=ALNI_Ma_P242DV2lyafrwbZOCBgRwZ1E8w; __gpi=UID=00000bd79d5b1141:T=1678584380:RT=1678584380:S=ALNI_MZcQi7nc8P239BI2VX4CJqf2fVJdg; __dtsu=6D001671065673FE220BDA3B7AACD589; _cc_id=1788748d987edb06f622aefe9f4390c9; panoramaId_expiry=1679189184169; panoramaId=6082b2a6e4d18d4b0c604d0170cf16d5393857f7088d67db5f4edaac85cb3017; panoramaIdType=panoIndiv; trc_cookie_storage=taboola%2520global%253Auser-id%3Dd530da0f-6eec-45d7-b621-9b4a29a2ea87-tuct691e652; a=Z5HWlpsr1bOlMQg3mVXLbzcncUPuJHJQ; login=horasjey; xfss=8chidukw7w4g2nvp; undefinedtab=1; ppu_sub_3703809642acf045ec3ad2097035f530=5; token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BQGCAAAAAAAACZUAArlycTCU8cditFrFREFByaYmM9m9_38KvAk8zmwHLZtzfVhGHJrxihQk00NJh5MLOnIJsK6u33L7uK1h3fEtSvVWv2C9UwBmZpw2tZx8vtPnBYyolMOyHOJa1CK6JfUlU5etO2kvmAji3XjvDZS4Y2pYEPfOUVEFY1Hv7iGvQGkZuqL8lrMdoQBNltI8Dsddmtj-8ZkDdGInTYWOYJKAfQA5mKvXf1Jphbs8NNYA5GEvUNRXeQOOfXjwCwJieizLL60fE7q6owBpWAliY38rJ4j4OY5IWMyQi_hGvDV0FyrF0ONjmDF8C8Djf9xvp_sRUuBnFvk_HHaj5ZEUTm9MSCYiYTpgnN3C7pPzkBXziSRhDnKT-0BvjZ-UjoUROdQ7IRndWEu_c0cLOrVAzzSaApygrwXHkOgw5eM-5Vjo1ubKLx7v-LBIJE3GGD14WUgfy20RxEaIxWjp8hNI9VEoENF7rcNoN225CTgjXbRGYzKoix_ov7EE4dsTN6zAJwpqYA; _popfired=1; _popfired_expires=Mon%2C%2013%20Mar%202023%2001%3A31%3A55%20GMT; lastOpenAt_=1678584715895; file_code=6kaufigr9sjk; aff=12957; _pbjs_userid_consent_data=3524755945110770; __utmt=1; __utmb=72595730.28.10.1678584379; cto_bundle=xd-o0F9UWiUyQkhFR1JsSSUyRkFkMXhRY3dxeGV2JTJGdXlXeTk0Q08wbTFyTW1BRmgyV0x4JTJGbUVScENxSSUyQkRuYnpHTkZiVVFVTHB0d3VoTmZINFJvaGJjN3ozRVZWYllWTEU1R0NUMjVkY0NRSmxFaHBTdVZwWFFWcEtKNUJjc0hnNzFuZkJBJTJCUXNwayUyRnhOSnBPYXVVSUlITjV3TUJNUSUzRCUzRA; cto_bidid=eUIVOl90czJGaU5JNEZvY1JUV2RPVzA4OVJsRmNQTk9ac1VxS0hObzAwV1VSaVRvNE5lMGZNMVFEUTBtVjg5anQ5RWsyRjJxeEclMkJlQXAlMkZERnF3bCUyQk9BalkxUUFwa21WMVVrckdybW0zM2tuMzFyWTF5c24lMkZTOTR0NmhITXN2UE1TaWxn; HstCla4573821=1678585767015; HstPn4573821=28; HstPt4573821=28';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
 $split2 = explode('href="https://pandafiles.com/get_file?token=', $result);
            $splitLagi2 = explode('"', $split2[1]);
header('Content-Type: application/json; charset=utf-8');
echo json_encode(base64_decode($splitLagi2[0]));
//echo $result;
