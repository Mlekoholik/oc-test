<?php

namespace SPogon\Password\Method;

use SPogon\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod {

    public function encode($plainText) {
        $sha1 = sha1($plainText);

        return $sha1;
    }

}
