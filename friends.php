<html>

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script>
        FB.init({
            appId  : '215359871811504',
            status : true, // check login status
            cookie : true, // enable cookies to allow the server to access the session
            xfbml  : true  // parse XFBML
        });
    </script>

    lol

    <script>
        FB.api('/me', function(response) {
            alert(response.name);
        });
    </script>

</html>