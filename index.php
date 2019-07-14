

<!DOCTYPE html>

<html>
<head>
	
	
	<title>NSS Volunteer Registration 2019-20</title>
	<link rel="icon" type="image/jpg" href="nsslogo.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="941966143078-1t3impvchsll6l1qqghg39uvar9mr39n.apps.googleusercontent.com">
        <script>
          function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        }

        function signOut() {
         var auth2 = gapi.auth2.getAuthInstance();
         auth2.signOut().then(function () {
          console.log('User signed out.');
        });
        }

</script>
</head>
<body>
     <div class="g-signin2" data-onsuccess="onSignIn"></div>    
     <a href="#" onclick="signOut();">Sign out</a>

</body>
</html>