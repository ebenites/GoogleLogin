<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        
        <!-- https://developers.google.com/identity/sign-in/web/sign-in -->
        
        <meta name="google-signin-client_id" content="630237399333-78cvet00e1omgjjc13jmv0qn83sr5722.apps.googleusercontent.com">
        <meta name="google-signin-scope" content="profile email">
        
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        
        <script>
        function onSignIn(googleUser) {
            // Useful data for your client-side scripts:
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            
            // The ID token you need to pass to your backend:
            var id_token = googleUser.getAuthResponse().id_token;
            console.log("ID Token: " + id_token);
            
            // Send to backend
            $.get('signin.php', {'id_token': id_token}, function(data){
                $('#message').html(data);
                // window.location.href  = 'profile.php';
            });
        }
        </script>
        
    </head>
    <body>
        
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        
        <div id="message"></div>
        
    </body>
</html>
