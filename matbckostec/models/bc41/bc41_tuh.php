<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>