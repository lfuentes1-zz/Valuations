<?php

class AgentTableSeeder extends Seeder 
{     
      public function run()
      {
            $agent = new Agent();
            $agent->agent_first_name      = 'Leticia';
            $agent->agent_last_name       = 'Fuentes';
            $agent->agent_phone_number    = '210.213.9803';
            $agent->agent_email           = 'letty@alamocitydreamhomes.com';
            $agent->agent_photo           = '/img/lettyfuentes.jpg'; 
            $agent->agent_password        = $_ENV['AGENT_PASS'];
            // $agent->agent_listing_leads   = ''  //can be null
            // $agent->agent_listing_appointments  = '' //can be null
            // $agent->agent_listings_taken  = ''  //can be null
            // $agent->agent_listings_sold   = ''  //can be null
            // $agent->agent_lead_to_sold_rate= '';  //can be null
            $agent->agent_dollar_volume   = ''; //can be null
            $agent->brokerage_id          = Brokerage::findorFail(1)->id;           
            $agent->broker_id             = Broker::findorFail(1)->id;           
            $agent->save();
      }     
}