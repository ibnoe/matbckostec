<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("QAAAPD9waHAgDQpyZXF1aXJlXwAAb25jZSAiLi4vYWJzcGF0aEgGLgHwIjsCDXNlc3Npb25zAe8D4XAGDGRvY29uAc8BwWZ1bmN0A7AB5Q0KAAANCi8vVkFSSUFCRUwgWUFOAABHIERJIFBPU1QNCiRvcG5hAABtZV9pZD0kX1JFUVVFU1RbTAAnAVYnXQmQAkVkYXRlPWRteXMyDE55bWQoAv8CASddKQMhd2gFLAESBONuDwBvdGVzBukBEgHCCpFGT1JNIExJUwAUVCBEQVRBIE1BVEULoEwKsG5vAABsaXN0PWV4cGxvZGUoImAiOAMsIAhoAfMIFEtkQmFyYW5nMgL/DkTHhAImAyRxdHkCzwLEAcACZHRvdF8A4D0whAAOYWptbG4IoHQ9c2l6ZW9mKCSICAgzKS0xAeBmb3IgKCRpAqAgJGkoBDwkAsU7AOArKyl7DQoJJATUICsRQT0gJAVQWyRpFvF9GxEkYWtzaRJZwQABARJEJHRnbD0W0SgnWS1tLWQgAiBIOmk6cycXknVzcgNgU0VTU0kAYE9OWyd1c2VyTh4AA6VObU1lbgBgdT0ic3RvY2sgHnMnwQ0KdHJ5EAAgewkJYXNxbFtdID0gIlNUQQAYUlQgVFJBTlNBQ1QFAAKhCWlmwYANcAjhPT0ndCcMkgNxCS8vVEFNQgBIQUggSEVBREVSBKAJJAS2SU5TQBNFBMBJTlRPIG1hdF8Ho2hkEjACkRpQCQkgCNQjcCwB019kJvAsAtF0eXBlWwQsJBIsAtUTpCwjsgFVKSBWQUwsECAoodUBJScrtWlkJywA1gWRAPAxAEAkBXInBYZ0QCcZRQHBBdInBMUpIjsOhEFLSElSIOA9Du4CkRBWREVUQUlMCQMiIK8jYiClCQJjxgAS3xLbZGV0DZcSNGlkLGNoaWxkXz//bm8SogEAJIAIkRUhEQ8QNhEDKvMncQ7xMRYBFQSw0eAAsgUGIhAjfS8vEDoOwwJhAEEka2V0bABcb2c9IkFkZCAkJxMgGIckQg81bXNAKGcmkmF2ZSBTdWNjT0AuAhMkZXJRgHIB6UYU4EVEIQHTExJ9IGVsc2UgoAAo+XUo9C8vSEFQVVMgRFVMVSAGAFNFTVVBCZIo4j0iREVMRVRFIAgsRlJPTSjMV0hFUkUolz0S+QejLy/+vxpzBG8ZIxpRBG8Bwy2wJwRlVTKfN0Myn1nxMp9bIf+/Mp8ynzKfNrAhnw6pMp8h4TKfb1CiAcEynxcBImUOyPt3G5JCoAEyI3MyIiRR5VSvOwNDNE80TwlHH0ccGfHn/0HWGWY0T3R5DBE0TwEhErw0T2dyM5IUoDRPNEwQuOFyB0EAQTQmRWRpdDQ/ZCRTAqIyNFVwTUEg//80PwILNFkz9GiBGRAzAgUiMl8yXzJfZjAt+TJfNrkYYfgZMl8Y9jJUCOJExURlbGV0ZRDPEMAgIAKhv84AQSQO5ALUEO8CCxDqKHEEQAuUICI4iUzgZaYw/cAdQHfwL2F2sABxCjMnYfEEWk2RQ09NTUlU4IxTcwXgLFBlYWNoKAZhIGFzf1Bz8y8vCBRlY2hvAPAuIlxyXG4eAySeQC0+AJxxdWVyeSgkcX3RCX0EQA7yAvJqcwIAb25fZW5jiCAoYXJyYXkoJ3OAOFRDJz0+dHJ1ZSwnDxAAwBGBKSk7ggASgH0gY2F0CBAgUERPRXhjZXCWAKKBICQAtymAMwe4IlJPTExCQUNLP0AiKSuiB78Hswa0W3MMhC4Fpy0+Z2V0TYIAXgBhZ2UoKQjgDQoJZXhpdCgwwAANoQ2QPz4="));  ?>