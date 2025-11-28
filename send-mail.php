<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Method not allowed"]);
    exit;
}

function field($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : "";
}

$name    = strip_tags(field("name"));
$email   = filter_var(field("email"), FILTER_SANITIZE_EMAIL);
$startup = strip_tags(field("startup"));
$website = strip_tags(field("website"));
$message = strip_tags(field("message"));

if ($name === "" || $email === "" || $message === "") {
    http_response_code(400);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

$to      = "ejemplo@mail.com";
$subject = "New EUSA application from $name";

$body = "New application from the EUSA website:\n\n"
      . "Name: $name\n"
      . "Email: $email\n"
      . "Startup: $startup\n"
      . "Website: $website\n\n"
      . "Message:\n$message\n";

$headers  = "From: EUSA Website <no-reply@eusa-partners.com>\r\n";
$headers .= "Reply-To: $name <$email>\r\n";

$sent = mail($to, $subject, $body, $headers);

header('Content-Type: application/json');
if ($sent) {
    echo json_encode(["status" => "ok"]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Mail not sent"]);
}
