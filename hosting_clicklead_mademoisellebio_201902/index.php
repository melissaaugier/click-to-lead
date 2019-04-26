<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Première enseigne de cosmétiques bio, Mademoiselle bio vous propose plus de 3 000 produits de beauté bio. Livraison rapide et 3 échantillons offerts. Vive la beauté engagée!" />
    <title>Mademoiselle Bio</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style type="text/css">
      body {
        font-family: 'Roboto', sans-serif;
        font-size: 17px;
        background-color: white;
      }
      #content {
        max-width: 1000px;
        text-align: center;
        margin: 10px auto 0 auto;
        padding: 10px;
        color: black;
      }
    </style>
  </head>
  <body>

    <script type="text/javascript">
      var data = <?=json_encode($_GET)?>;
    </script>

    <div id="content">
      <p>
        Merci de patienter, vous allez être redirigé sur mademoiselle-bio.com
      </p>
    </div>

    <form name="signup">
      <input type="checkbox" name="optin_sponsors_email" style="display:none;" checked />
    </form>


<!--Si on clique sur le bouton "Je m'inscris " -->


    <script type="text/javascript" id="pco-5c73fb67c05b9e95534eb92a">

      function getParamByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

      var prefill = {
        email: data.email
      };

      __pco_options = {
        placementId: '5c73fb67c05b9e95534eb92a',
        prefill: prefill,

        onLeadCollected: function(res) {
          var optinPixel = document.createElement('div');
          optinPixel.innerHTML = '<img src="http://track.actiplay-network.com/servlet/effi.lead?id=660014796&ref=' + prefill.email + '&ref2=1" width="0" height="0"/>';
          document.body.appendChild(optinPixel);


          setTimeout(function() {
            if (getParamByName('bouton') == 'guide') {
              window.location.href = 'https://club-privilege.fr/mademoiselle-bio/media/MLE019_GRAND_MULTI_HD.pdf?tracking_code=WCOL&utm_source=actiplay&utm_medium=kit&utm_campaign=032019&email=' + prefill.email;
            } else {
              window.location.href = 'https://www.mademoiselle-bio.com/?source=actiplay&campagne=kit032019&template=actiplay&target=conseil-soin-froid.html&email=' + prefill.email;
            }
          },1000);
        },

        onNoCampaigns: function(res) {
          var optoutPixel = document.createElement('div');
          optoutPixel.innerHTML = '<img src="http://track.actiplay-network.com/servlet/effi.lead?id=660014796&ref=' + prefill.email + '&ref2=1" width="0" height="0"/>';
          document.body.appendChild(optoutPixel);

          setTimeout(function() {
            if (getParamByName('bouton') == 'guide') {
              window.location.href = 'https://club-privilege.fr/mademoiselle-bio/media/MLE019_GRAND_MULTI_HD.pdf?tracking_code=WCOL&utm_source=actiplay&utm_medium=kit&utm_campaign=032019&email=' + prefill.email;
            } else {
              window.location.href = 'https://www.mademoiselle-bio.com/?source=actiplay&campagne=kit032019&template=actiplay&target=conseil-soin-froid.html&email=' + prefill.email;
            }
          },1000);
        },
    };

      (function () {
        var lib = document.createElement('script');
        lib.type = 'text/javascript';
        lib.async = true;
        lib.src = '//pcotag.azureedge.net/tag.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(lib, s);
      })();
    </script>



    <img src="http://track.actiplay-network.com/servlet/effi.participant?id=660014729&ref=<?=$_GET['email']?>" width="0" height="0"/>

  </body>
</html>