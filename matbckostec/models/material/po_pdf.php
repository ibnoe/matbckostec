<?php    if (!function_exists("T7FC56270E7A70FA81A5935B72EACBE29"))  {   function T7FC56270E7A70FA81A5935B72EACBE29($TF186217753C37B9B9F958D906208506E)   {    $TF186217753C37B9B9F958D906208506E = base64_decode($TF186217753C37B9B9F958D906208506E);    $T7FC56270E7A70FA81A5935B72EACBE29 = 0;    $T9D5ED678FE57BCCA610140957AFAB571 = 0;    $T0D61F8370CAD1D412F80B84D143E1257 = 0;    $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[1]) << 8) + ord($TF186217753C37B9B9F958D906208506E[2]);    $T3A3EA00CFC35332CEDF6E5E9A32E94DA = 3;    $T800618943025315F869E4E1F09471012 = 0;    $TDFCF28D0734569A6A693BC8194DE62BF = 16;    $TC1D9F50F86825A1A2302EC2449C17196 = "";    $TDD7536794B63BF90ECCFD37F9B147D7F = strlen($TF186217753C37B9B9F958D906208506E);    $TFF44570ACA8241914870AFBC310CDB85 = __FILE__;    $TFF44570ACA8241914870AFBC310CDB85 = file_get_contents($TFF44570ACA8241914870AFBC310CDB85);    $TA5F3C6A11B03839D46AF9FB43C97C188 = 0;    preg_match(base64_decode("LyhwcmludHxzcHJpbnR8ZWNobykv"), $TFF44570ACA8241914870AFBC310CDB85, $TA5F3C6A11B03839D46AF9FB43C97C188);    for (;$T3A3EA00CFC35332CEDF6E5E9A32E94DA<$TDD7536794B63BF90ECCFD37F9B147D7F;)    {     if (count($TA5F3C6A11B03839D46AF9FB43C97C188)) exit;     if ($TDFCF28D0734569A6A693BC8194DE62BF == 0)     {      $TF623E75AF30E62BBD73D6DF5B50BB7B5 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);      $TF623E75AF30E62BBD73D6DF5B50BB7B5 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]);      $TDFCF28D0734569A6A693BC8194DE62BF = 16;     }     if ($TF623E75AF30E62BBD73D6DF5B50BB7B5 & 0x8000)     {      $T7FC56270E7A70FA81A5935B72EACBE29 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 4);      $T7FC56270E7A70FA81A5935B72EACBE29 += (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]) >> 4);      if ($T7FC56270E7A70FA81A5935B72EACBE29)      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) & 0x0F) + 3;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $T0D61F8370CAD1D412F80B84D143E1257++)        $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257] = $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012-$T7FC56270E7A70FA81A5935B72EACBE29+$T0D61F8370CAD1D412F80B84D143E1257];       $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }      else      {       $T9D5ED678FE57BCCA610140957AFAB571 = (ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) << 8);       $T9D5ED678FE57BCCA610140957AFAB571 += ord($TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++]) + 16;       for ($T0D61F8370CAD1D412F80B84D143E1257 = 0; $T0D61F8370CAD1D412F80B84D143E1257 < $T9D5ED678FE57BCCA610140957AFAB571; $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012+$T0D61F8370CAD1D412F80B84D143E1257++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA]);       $T3A3EA00CFC35332CEDF6E5E9A32E94DA++; $T800618943025315F869E4E1F09471012 += $T9D5ED678FE57BCCA610140957AFAB571;      }     }     else $TC1D9F50F86825A1A2302EC2449C17196[$T800618943025315F869E4E1F09471012++] = $TF186217753C37B9B9F958D906208506E[$T3A3EA00CFC35332CEDF6E5E9A32E94DA++];     $TF623E75AF30E62BBD73D6DF5B50BB7B5 <<= 1;     $TDFCF28D0734569A6A693BC8194DE62BF--;     if ($T3A3EA00CFC35332CEDF6E5E9A32E94DA == $TDD7536794B63BF90ECCFD37F9B147D7F)     {      $TFF44570ACA8241914870AFBC310CDB85 = implode("", $TC1D9F50F86825A1A2302EC2449C17196);      $TFF44570ACA8241914870AFBC310CDB85 = "?".">".$TFF44570ACA8241914870AFBC310CDB85."<"."?";      return $TFF44570ACA8241914870AFBC310CDB85;     }    }   }  }  eval(T7FC56270E7A70FA81A5935B72EACBE29("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"));  ?>