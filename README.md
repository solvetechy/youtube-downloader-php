# YouTube Downloader Library: PHP - By Solve Techy
YouTube Downloader API: PHP Script to fetch all the download links

Note: This script are only for developers so they can fetch the download links and other attributes in a one line code but i have tried my best to explain in an easy way

Include this file in your PHP File like this
```
include("st_youtube_downloader.php");

```
Create an Object
```
$object = new STYDownloader();

```

Get the YouTube Video ID and set in this format
```
$fetched = $object->setID("ywN-WkF4MeM")->get_info();

```
Save that into your variable and it will return all the download links,thumbnail,title etc in this format
```
Array
(
    [0] => Array
        (
            [url] => https://r1---sn-o5t5uxa-at2e.googlevideo.com/videoplayback?expire=1586389931&ei=Sw-OXuiSBeTzxgLu0ICoDg&ip=101.50.76.122&id=o-AIVi4xXh1HleRMoLT40EplPThB_ALVQaRNccRcV-8SV0&itag=18&source=youtube&requiressl=yes&mh=PV&mm=31%2C29&mn=sn-o5t5uxa-at2e%2Csn-hju7en7r&ms=au%2Crdu&mv=m&mvi=0&pl=24&initcwndbps=357500&vprv=1&mime=video%2Fmp4&gir=yes&clen=2692644&ratebypass=yes&dur=60.023&lmt=1486721299068168&mt=1586368238&fvip=6&c=WEB&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AJpPlLswRgIhAJukFSqhQvXk_mq6Rxiv_u9lPanOEcbG9caxIjrt03o2AiEAkCx7weAFUSRZpU4kIITaZ6ed5rgGeUltdh-3ob9jIMw%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALrAebAwRAIgLWlhYdDUFRqOsX048QXN1WYoUXAq0EW6PzDP3t9lwKwCIAq6UhtU90qOC7MUJ6X_LUFBP0fZJLiiAfCp7WyIqTDY
            [height] => 360
            [width] => 640
            [quality] => medium
            [qualityLabel] => 360p
            [thumb] => https://i.ytimg.com/vi/5Peo-ivmupE/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBXbuOnebwwBZ8amL-TfVwXteInPw
            [title] => Lorem ipsum video - Dummy video for your website
        )

    [1] => Array
        (
            [url] => https://r1---sn-o5t5uxa-at2e.googlevideo.com/videoplayback?expire=1586389931&ei=Sw-OXuiSBeTzxgLu0ICoDg&ip=101.50.76.122&id=o-AIVi4xXh1HleRMoLT40EplPThB_ALVQaRNccRcV-8SV0&itag=22&source=youtube&requiressl=yes&mh=PV&mm=31%2C29&mn=sn-o5t5uxa-at2e%2Csn-hju7en7r&ms=au%2Crdu&mv=m&mvi=0&pl=24&initcwndbps=357500&vprv=1&mime=video%2Fmp4&ratebypass=yes&dur=60.023&lmt=1486721350903480&mt=1586368238&fvip=6&c=WEB&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cratebypass%2Cdur%2Clmt&sig=AJpPlLswRQIgGy83KiZiNfAyuxOjNfaZMCfBfpwi4qlT8a9x04URS00CIQCK4NG1Om493of7bkdOStx_RMJ33RrDDz5qiu-S67HPvA%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=ALrAebAwRAIgLWlhYdDUFRqOsX048QXN1WYoUXAq0EW6PzDP3t9lwKwCIAq6UhtU90qOC7MUJ6X_LUFBP0fZJLiiAfCp7WyIqTDY
            [height] => 720
            [width] => 1280
            [quality] => hd720
            [qualityLabel] => 720p
            [thumb] => https://i.ytimg.com/vi/5Peo-ivmupE/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBXbuOnebwwBZ8amL-TfVwXteInPw
            [title] => Lorem ipsum video - Dummy video for your website
        )

)

```
To check, if the video ID is valid or not. You can use this syntax which will return you in the form of true or false. 
```
$object->validate_video()

```
Make sure check this after setting the ID like i show you in the previous Syntax
So, your whole code will look like this
```
include("st_youtube_downloader.php");

$object = new STYDownloader();
$fetched = $object->setID("5Peo-ivmupE")->get_info();

if($object->validate_video()){
  /* Perform Your Operation */
  echo json_encode($fetched);
  
}else{
    echo "Please type a valid URL";
}
```



