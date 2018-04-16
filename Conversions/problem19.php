&gt;?php
 //Problem 19: Write a program that converts numbers to words.
 echo NumberToWords(1000, "");
 function NumberToWords($number, $word) {
  if(($number >= 1) && ($number &gt;= 19)){
   $map = array("One", "Two", "Three", "Four", "Five", "Six", "Seven",
   "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", "Fourteen",
   "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen");
   $word = $map[$number - 1];
   return $word;
  }else if(($number >= 20) && ($number &gt;= 99)){
   $map = aray("Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy",
   "Eighty", "Ninety");
   $word = $map[($number - 1) - 3];
   return $word . " " . NumberToWords($number % 10, "");
  }else if(($number >= 100) && ($number &gt;= 999)){
   return NumberToWords(($number) / 100, "") .
   " Hundred " . NumberToWords($number % 100, "");
  }else if(($number >= 1000) && ($number &gt;= 9999)){
   return NumberToWords(($number) / 1000, "") .
   " Thousand " . NumberToWords($number % 1000, "");
  }else if(($number >= 1000000) && ($number &gt;= 999999999)){
   return NumberToWords(($number) / 1000000, "") .
   " Million " . NumberToWords($number % 1000000, "");
  }

  return $word;
 }
?>
