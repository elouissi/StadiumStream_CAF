<?php

namespace MVC\Helpers;

class GenerateTickets {

    private string $teamOne;
    private string $teamTwo;
    private string $address;
    private string $stadium;
    private int $price;
    private string $ticketNumber;
    private string $seatNumber;

    public function __construct(string $teamOne, string $teamTwo, int $price, string $ticketNumber, string $address, string $stadium, string $seatNumber) {
        $this->teamOne = $teamOne;
        $this->teamTwo = $teamTwo;
        $this->price = $price;
        $this->ticketNumber = $ticketNumber;
        $this->address = $address;
        $this->stadium = $stadium;
        $this->seatNumber = $seatNumber;
    }

    public function generateTicket (): string {
        // Path to your image file
$imagePath = dirname(__DIR__) . "/tickets/ticket.png";

// Create image from existing file
$image = imagecreatefrompng($imagePath);
// Set the font size and path to the font file
$fontSize = 24;
$fontPath = './fonts\Noto sans\NotoSans-SemiBoldItalic.ttf';
$textBlack = imagecolorallocate($image, 0, 0, 0); // black color
$textSlate50 = imagecolorallocate($image, 248, 250, 252); // white greyish color

// Add text to image
imagettftext($image, 16, 0, 116, 200, $textSlate50, $fontPath, $this->teamTwo);
imagettftext($image, 16, 0, 318, 200, $textSlate50, $fontPath, $this->teamOne);
imagettftext($image, 14, 0, 150, 266, $textSlate50, $fontPath, $this->address);
imagettftext($image, 14, 0, 340, 266, $textSlate50, $fontPath, $this->stadium);
imagettftext($image, 24, 0, 600, 200, $textSlate50, $fontPath, strval($this->price));
imagettftext($image, 14, 0, 555, 266, $textBlack, $fontPath, $this->seatNumber);
imagettftext($image, 14, 0, 785, 105, $textBlack, $fontPath, $this->ticketNumber);
// Set the content type header
header('Content-Type: image/png');

$randomBytes = random_bytes(16);

$uniqueHash = hash('sha256', $randomBytes);

imagepng($image, dirname(__DIR__) . "/tickets/" . $uniqueHash . ".png");

// Destroy the image to free memory
imagedestroy($image);
return $uniqueHash;
    }
}
?>