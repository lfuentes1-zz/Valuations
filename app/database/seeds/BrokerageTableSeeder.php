<?php

class BrokerageTableSeeder extends Seeder 
{     
      public function run()
      {
            $brokerage = new Brokerage();
            $brokerage->brokerage_name          = 'Texas Premier Realty';
            $brokerage->brokerage_address       = '3834 Deerfield Drive';
            // $brokerage->brokerage_unit_suite    = ''; //can be null
            $brokerage->brokerage_city          = 'San Antonio';
            $brokerage->brokerage_state         = 'TX';
            $brokerage->brokerage_zip           = '78218';
            $brokerage->brokerage_phone_number  = '210.844.8683';
            $brokerage->brokerage_email         = 'dzipp@satx.rr.com';
            // $brokerage->brokerage_logo          = '';  //can be null
            $brokerage->broker_id               = Broker::findorFail(1)->id;           
            $brokerage->save();
      }     
}