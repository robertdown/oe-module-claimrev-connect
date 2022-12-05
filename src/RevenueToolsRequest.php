<?php
    namespace OpenEMR\Modules\ClaimRevConnector;
    class RevenueToolsRequest
    {
        //required for this module, does not go to claimrev
        public $payerResponsibility;

        //defaults that maybe set as global vars
        public $accountNumber;//
        public $serviceTypeCodes;//
        public $includeCredit;//
        public $productsToRun;//

        public $practiceName;//
        public $requestingSoftware;//

        public $originatingSystemId;//

        public $npi;//
        public $pinCode;//
        public $practiceState;//
        public $subscriberId;//
        public $patientFirstName;//
        public $patientLastName;//
        public $patientGender;//
        public $patientDob;//
        public $patientSsn;//
        public $patientAddress1;//
        public $patientAddress2;
        public $patientCity;//
        public $patientState;//
        public $patientZip;//
        public $patientEmailAddress;//
        public $payers;

        public $subscriberFirstName;
        public $subscriberLastName;
        public $subscriberDob;

        public $serviceBeginDate;
        public $serviceEndDate;
        public $procedureCodes;
        public $diagnosisCodes;
        public $clientId;
        public $createDate;
        public $uniqueTransactionNumber;
        public $patientEmployer;
        public $patientEmployerState;

        public function __construct() { }

    }

?>