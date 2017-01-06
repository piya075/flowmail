<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Api</title>
</head>
<body>
    <a href="#" onclick="postToPage()">Post</a>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1284301568307355',
      xfbml      : true,
      version    : 'v2.8'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk')); 
    function postToPage() {
        var page_id = '1029453930500146';
//    
        FB.api(
            "/"+page_id+"?fields=access_token",
            function (response) {
              console.log(response);
            }
        );
//        
        
//        FB.api('/' + page_id + '/feed','post',
//        { message: "CoreApi from javascript test", 
//          link: "http://flowmail.camera-plus.in.th",
//          picture: "http://flowsoft.camera-plus.in.th/assets/images/product/1.png",
//          caption: "Test send caption via js",
//          description: "Test send description via js",
//          name: "flowsoft",
//         access_token: 'EAASQEMLDcJsBAM8tkp8iIpa2LhJixvJKaktpkJB89rgh9PryrectSs6KmeoBIofE7BZCKkvoPAfRg3etA0nOxIqZBPyeoCiIlK97XJuYQfYhw01QMVZCZAttkNVYyHD5wzlVExkKKLa63XMZBtKNwwrp0JrqLvsQZD' }
//        ,function(response) {
//            console.log(response);
//        });
    }
</script>
</body>
</html>