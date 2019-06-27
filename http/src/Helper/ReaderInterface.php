<?php

namespace Metro\Http\Helper;

 use Metro\Http\Models\Interfaces\OfferCollectionInterface;

 /**
  * The Interface provides the contract for different readers
  * It can be XML, JSON Remote EntryPoint, or CSV, JSON, XML local files
  */
 interface ReaderInterface
 {

     /**
      * Read in incoming data and parse to objects
      *
      * @param string $input
      * @return OfferCollectionInterface
      */
     public function read(string $input): OfferCollectionInterface;
 }