<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>