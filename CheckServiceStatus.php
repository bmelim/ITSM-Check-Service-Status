class CheckServiceStatus {


	
	var $testticket = 'SR17252689';
	var $desiredstatus = 'Closed';
	var $wsdl = 'ebonding site';
	
	function checkStatus() {
	
		
		$ticketinfo = array('strWorkItemType' => 'Service Request', 
                      'strID' => $this->testticket,   
                            
                      'strStatus' => '', 
                      'strTitle'=> '', 
                      'strDesc' => '', 
                      'strCreateDate' => '', 
                      'strStartDate' => '', 
                      'strEndDate' => '');
	
		$client = new SoapClient($this->wsdl);
		$client = $client->GetSCSMWorkItem($ticketinfo);
		$client = $client->GetSCSMWorkItemResult->SCSMResponseData;
		
		
		$workitemid = $client->WorkItemID;
		$status = $client->Status;
		

		return $servicestatus;

	}
}
