<?php
class API {
  // Properties 
  private $apiUrl;



		function __construct($arg) {
			if($arg){
				$this->apiUrl = $arg;
			}
			
		  }

		  // Methods
		  function setter($arg) {			 
			$this->apiUrl = $arg;
		  }
		  
		  
		  function getter() {			  
			 return $this->apiUrl;
		  }
		  		  
		  
		function  getApiData()
		{
			
			  
                        $request = curl_init($this->apiUrl);
                        curl_setopt($request, CURLOPT_RETURNTRANSFER, true); 
                        curl_setopt($request, CURLOPT_POST, false); 
                        $response = curl_exec($request);
                        curl_close($request);
                        return $response;  
		  
		}
}




?>