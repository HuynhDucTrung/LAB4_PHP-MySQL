<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* PHP program to implement a Caesar cipher in a class by inheriting
texts from a parent class
Input
enter the text to encrypted: encrypted12345
enter shift for Caesar cipher: 3
Output
entered plain text: encrypted12345
cipher text is hqfubswhg45678
*/

    class Cipher
    {
        protected $text;
        protected $shift;

        public function __construct($text, $shift)
        {
            $this->text = $text;
            $this->shift = $shift;
        }
    }

    class Icipher extends Cipher
    {
        public function __construct($text, $shift)
        {
            parent::__construct($text, $shift);
        }

        public function encrypt()
        {
            $text = $this->text;
            $shift = $this->shift;
            echo "entered plain text: $text\n";
            $cipherText = "";

            for ($i = 0; $i < strlen($text); $i++) {
                $char = $text[$i];

                if (ctype_alpha($char)) {
                    $offset = ord(ctype_lower($char) ? 'a' : 'A');
                    $cipherChar = chr(($offset + ord($char) - $offset + $shift) % 26 + $offset);
                } elseif (ctype_digit($char)) {
                    $cipherChar = chr((ord('0') + ord($char) - ord('0') + $shift) % 10 + ord('0'));
                } else {
                    $cipherChar = $char;
                }

                $cipherText .= $cipherChar;
            }

            echo "cipher text is $cipherText\n";
        }
    }

    echo "enter the text to be encrypted: ";
    $tst = trim(fgets(STDIN, 1024));

    echo "Enter shift for Caesar cipher: ";
    $sh = (int)trim(fgets(STDIN, 1024));

    $cipher = new Icipher($tst, $sh);
    $cipher->encrypt();
    ?>
</body>

</html>