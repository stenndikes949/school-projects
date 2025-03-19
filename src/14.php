function getRandomCode() {
    $code = '';
    for ($i=0;$i<16;$i++) {
        $code .= chr(rand(97, 122)); // generate a random lowercase letter between 'a' and 'z'
    }
    return $code;
}
