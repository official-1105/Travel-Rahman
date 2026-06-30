<?php
// ১. আপনার মার্চেন্ট এপিআই ক্রেডেনশিয়ালস (হুবহু সেট করে দেওয়া হয়েছে)
$merchantId = "6f79744e-cdc7-48c1-8f38-ce5e01d07a50";
$apiKey = "66X3k2FJFOCxBd7CQCroDOCwJwb1zVqzOuZZhWe3X72IWVwuT7fxs1D4WHNWtxiGJCBrnH5VnrYIIfeiIYfbBxptfWIwqyqZlpbE39ciQa3gOsHXYdfjBANYoMvv67Re";

// ২. ফর্ম থেকে পেমেন্টের পরিমাণ রিসিভ করা
$amount = isset($_POST['amount']) ? filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION) : "10.00";
$packageName = isset($_POST['package_name']) ? htmlspecialchars($_POST['package_name']) : "Custom Booking";

// ৩. ডোমেইন ডিটেকশন (আপনার বর্তমান লাইভ ইউআরএল অনুযায়ী রিটার্ন লিঙ্ক জেনারেট করবে)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $protocol . $_SERVER['HTTP_HOST'];

$orderId = "TR-" . time(); // ইউনিক ট্রাভেল রহমান অর্ডার আইডি

// ৪. Cryptomus API এর জন্য ডাটা অ্যারে তৈরি
$data = [
    'amount' => strval($amount),
    'currency' => 'USD',
    'order_id' => $orderId,
    'description' => "Payment for " . $packageName,
    'url_callback' => $domainName . '/cryptomus_webhook.php', 
    'url_return' => $domainName,                
    'url_success' => $domainName
];

// ৫. Cryptomus সিকিউরিটি সাইন (MD5) জেনারেট করা
$jsonData = json_encode($data);
$sign = md5(base64_encode($jsonData) . $apiKey);

// ৬. রিকোয়েস্ট হেডার
$headers = [
    "merchant: $merchantId",
    "sign: $sign",
    "Content-Type: application/json"
];

// ৭. cURL রিকোয়েস্ট পাঠানো
$ch = curl_init('https://api.cryptomus.com/v1/payment');
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $jsonData,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

// ৮. সফল হলে ক্রিপ্টোকারেন্সি গেটওয়ে পেজে পাঠানো
if (isset($result['state']) && $result['state'] === 0) {
    $paymentUrl = $result['result']['url'];
    header("Location: " . $paymentUrl);
    exit();
} else {
    // এপিআই জেনারেশনে ত্রুটি হলে মেসেজ শো করবে
    echo "<h3>Cryptomus Payment Initialization Failed!</h3>";
    echo "Reason: " . ($result['message'] ?? 'Unknown Connection Error');
    echo "<br><br><a href='index.php'>Go Back to Website</a>";
}
?>
