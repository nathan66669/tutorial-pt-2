

<?php

header("Content-Type: application/json");

if (!isset($_GET["key"])) {
    echo '{"access_denied": true}';
    exit();
}

if ($_GET["key"] == "ABC123") {
    if (isset($_GET["tag"])) {
        $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjJkZTEyYWIxLTc2NDktNDQ5YS05YmI0LWYwZWExNTVkYWJlNCIsImlhdCI6MTQ5NDUyMTg0NSwic3ViIjoiZGV2ZWxvcGVyLzAzMWQwZDgwLThiOWUtZjdmNS02OWVkLTIzYzUxZGIzMTNkYyIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjUyLjI1LjE1Ny4yMjciXSwidHlwZSI6ImNsaWVudCJ9XX0.Fhx4U9yKafnAqQZ0OZI07dkqA96tk5WLRlfYfYv504sqCnwIQbgkqCb30kQL1veMJhkTVbP6Vou4sqYcetJWHQ";
        $headers = array("Authorization: Bearer " . $access_token);

		// Initiate connection with API
        $ch = curl_init("https://api.clashofclans.com/v1/clans/%23" . $_GET["tag"] . "/warlog");
		// Set the Authorization header
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		// Execute the request (which also echo's it to the user)
        curl_exec($ch);
		// Close request
        curl_close($ch);
    } else {
        echo '{"error": "No "tag" field!"}';
    }
} else {
    echo '{"access_denied": true}';
}