<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>