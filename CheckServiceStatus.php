class CheckServiceStatus {


	// insert test ticket here, class will check number and status of the ticket
	// edit only in this var section, no need to edit function
	var $testticket = 'SR17252689';
	var $desiredstatus = 'Closed';
	var $wsdl = 'https://jciebonding.jci.com:7843/SCSMIntegrationService.svc?singleWsdl';
	
	function checkStatus() {
	
		
		$ticketinfo = array('strWorkItemType' => 'Service Request', 
                      'strID' => $this->testticket,   
                      'strGlobalID' => '',      // working only in QA
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
