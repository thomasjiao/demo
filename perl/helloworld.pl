#! /usr/bin/perl
open FILE,"./test/t_steward_business.csv";
while ($line = <FILE>)
{
   chomp $line;
   @fields=split /\,/,$line;
   print $fields[0]."\n";
}
