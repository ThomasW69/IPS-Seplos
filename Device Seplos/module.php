<?

/*
 * @addtogroup Seplos
 * @{
 *
 * @package       Seplos
 * @file          module.php
 * @author        Thomas Westerhoff <thomas.westerhoff24@gmx.de>
 * @copyright     2023 Thomas Westerhoff
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       0.10
 *  
 */


 //Constants for Typeconversion
 const VALTYP_WORD      = 1;      
 const VALTYP_SHORT     = 2;      



class Seplos extends IPSModule
{

    
    //Auszulesende Werte eines Packs
    public static $Variables = [
	//Group           //Name/Ident,                  VarType,           DataType                  Profile,    Address,   Factor, Offset,  Keep
    ['Voltages', 	 'Voltage01',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  19,    0.001,      0,  true],  //Zellspannung 01 
    ['Voltages', 	 'Voltage02',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  23,    0.001,      0,  true],  //Zellspannung 02 
    ['Voltages', 	 'Voltage03',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  27,    0.001,      0,  true],  //Zellspannung 03 
    ['Voltages', 	 'Voltage04',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  31,    0.001,      0,  true],  //Zellspannung 04 
    ['Voltages', 	 'Voltage05',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  35,    0.001,      0,  true],  //Zellspannung 05 
    ['Voltages', 	 'Voltage06',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  39,    0.001,      0,  true],  //Zellspannung 06 
    ['Voltages', 	 'Voltage07',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  43,    0.001,      0,  true],  //Zellspannung 07 
    ['Voltages', 	 'Voltage08',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  47,    0.001,      0,  true],  //Zellspannung 08 
    ['Voltages', 	 'Voltage09',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  51,    0.001,      0,  true],  //Zellspannung 09 
    ['Voltages', 	 'Voltage10',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  55,    0.001,      0,  true],  //Zellspannung 10 
    ['Voltages', 	 'Voltage11',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  59,    0.001,      0,  true],  //Zellspannung 11 
    ['Voltages', 	 'Voltage12',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  63,    0.001,      0,  true],  //Zellspannung 12 
    ['Voltages', 	 'Voltage13',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  67,    0.001,      0,  true],  //Zellspannung 13 
    ['Voltages', 	 'Voltage14',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  71,    0.001,      0,  true],  //Zellspannung 14 
    ['Voltages', 	 'Voltage15',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  75,    0.001,      0,  true],  //Zellspannung 15 
    ['Voltages', 	 'Voltage16',    	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		  79,    0.001,      0,  true],  //Zellspannung 16 
    ['Voltages', 	 'PackVolt', 	 	    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		 113,    0.01,       0,  true],  //Pack Voltage 
    ['Voltages', 	 'PortVolt',   		    VARIABLETYPE_FLOAT,    VALTYP_WORD,    	    'LiFePoCellVoltage', 		 143,    0.01,       0,  true],  //PortVoltage 
    ['Temperatures', 'Temperature1', 		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',		   		  85,      0.1, -273.1,  true],  //Temperatur1
    ['Temperatures', 'Temperature2', 		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',     	      89,      0.1, -273.1,  true],  //Temperatur2
    ['Temperatures', 'Temperature3', 		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',        		  93,      0.1, -273.1,  true],  //Temperatur3
    ['Temperatures', 'Temperature4', 		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',     	      97,      0.1, -273.1,  true],  //Temperatur4
    ['Temperatures', 'TempEnv',      		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',       	     101,      0.1, -273.1,  true],  //Environmental Temperature
    ['Temperatures', 'TempPower',    		VARIABLETYPE_FLOAT,    VALTYP_WORD,     	'~Temperature',       		 105,      0.1, -273.1,  true],  //Power Temperature
    ['Current', 	 'Current',    	        VARIABLETYPE_FLOAT,    VALTYP_SHORT,       	'~Ampere',         			 109,      0.0001,   0,  true],  //Current 
    ['Status',  	 'Cap',       	        VARIABLETYPE_FLOAT,    VALTYP_WORD,        	'Charge_Ah',         		 123,      0.01,     0,  true],  //Capacity
    ['Status',  	 'CapRes',    	        VARIABLETYPE_FLOAT,    VALTYP_WORD,        	'Charge_Ah',         		 117,      0.01,     0,  true],  //Residual Capacity
    ['Status',  	 'CapRat',    	        VARIABLETYPE_FLOAT,    VALTYP_WORD,        	'Charge_Ah',         		 131,      0.01,     0,  true],  //Rated Capacity
    ['Status',  	 'SOH',    	            VARIABLETYPE_FLOAT,    VALTYP_WORD,         'Percent',         			 139,      0.1,      0,  true],  //State of Health
    ['Status',  	 'SOC',    	            VARIABLETYPE_FLOAT,    VALTYP_WORD,         'Percent',         			 127,      0.1,      0,  true],  //State of Charge
    ['Status',  	 'Cycles',    	        VARIABLETYPE_INTEGER,  VALTYP_WORD,                 '',    	 			 135,      1,        0,  true]   //Full Cycles
];    






	
    // helper properties
	private $position = 0;
    
    public function Create()
    {
		//Never delete this line!
        parent::Create();
		
		//These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
		$this->RegisterPropertyInteger("Interval", 10);   //10 Sekunden instervall . Intern in ms umrechnen
        $this->RegisterPropertyInteger("PAddress", 0);
        $this->RegisterPropertyInteger("ProtVer", 0);
        $this->RegisterPropertyInteger("CellCount", 0);


		//Variablenprofile anlegen
		$this->RegisterProfile('Charge_Ah','EnergyStorage','',' Ah',0,0,0,2,2);
		$this->RegisterProfile('LiFePoCellVoltage','EnergyStorage','',' V',2.4,3.7,1,3,2);
	    
		//Zum Splitter verbinden
		//$this->ConnectParent("{2D76759A-6F96-3DE1-7FBF-371BDE57B9E5}"); // Splitter vom Pylontech
		$this->ConnectParent("{1A6A3230-2612-DA0C-9E5E-D008DBB316F7}"); // Splitter


		//Aufbauen des VariablenArrays
        $Variables = [];
        foreach (static::$Variables as $Pos => $Variable) {
            $Variables[] = [
			    'Group'    => $Variable[0],
                'Ident'    => str_replace(' ', '', $Variable[1]),
                'Name'     => $this->Translate($Variable[1]),
                'VarType'  => $Variable[2],
                'DataType' => $Variable[3],
                'Profile'  => $Variable[4],
                'Address'  => $Variable[5],
				'Factor'   => $Variable[6],
				'Offset'   => $Variable[7],
                'Keep'     => $Variable[8],
                'Pos'      => $Pos + 1
            ];
        }
        $this->RegisterPropertyString('Variables', json_encode($Variables));
	    //Den UpdateTimer Registrieren
		$this->RegisterTimer('UpdateTimer', 0, ' SEPL_RequestRead($_IPS[\'TARGET\'], 0);');



	}

	public function ApplyChanges()
	{
		// wait until IPS is started, dataflow does not work until stated
		$this->RegisterMessage(0, IPS_KERNELSTARTED);
		
		//Never delete this line!
		parent::ApplyChanges();
		// check kernel ready, if not wait
		if (IPS_GetKernelRunlevel() <> KR_READY)
			return;

        //Create Variables and check when new Rows in config appear after an update.
        $NewRows = static::$Variables;
        $NewPos = 0;
        $Variables = json_decode($this->ReadPropertyString('Variables'), true);
       
		foreach ($Variables as $Variable) {
            @$this->MaintainVariable($Variable['Ident'], $Variable['Name'], $Variable['VarType'], $Variable['Profile'], $Variable['Pos'], $Variable['Keep']);

            foreach ($NewRows as $Index => $Row) {
                if ($Variable['Ident'] == str_replace(' ', '', $Row[0])) {
                    unset($NewRows[$Index]);
                }
            }
            if ($NewPos < $Variable['Pos']) {
                $NewPos = $Variable['Pos'];
            }
        }

		
		if (count($NewRows) != 0) {
            foreach ($NewRows as $NewVariable) {
                $Variables[] = [
				    'Group'    => $NewVariable[0],
                    'Ident'    => str_replace(' ', '', $NewVariable[1]),
                    'Name'     => $this->Translate($NewVariable[1]),
                    'VarType'  => $NewVariable[2],
                    'DataType' => $NewVariable[3],
                    'Profile'  => $NewVariable[4],
                    'Address'  => $NewVariable[5],
                    'Factor'   => $NewVariable[6],
                    'Offset'   => $NewVariable[7],
                    'Keep'     => $NewVariable[8],
                    'Pos'      => ++$NewPos
                ];
            }

			IPS_SetProperty($this->InstanceID, 'Variables', json_encode($Variables));
        //			IPS_ApplyChanges($this->InstanceID);
			//return;
        }
 		$this->ValidateConfiguration(); 
	}
	
	private function ValidateConfiguration()
	{
		
		$objectid = $this->RegisterVariableBoolean('STATE', $this->Translate('State'), '~Switch', $this->_getPosition());
		$this->SendDebug("Device", "variable STATE object id : ". $objectid, 0);
		$this->EnableAction('STATE');
		$this->SetStatus(102);
		$this->RegisterVariableInteger('ProtVer', $this->Translate('ProtVer'), '', 0);
		$this->RegisterVariableInteger('CellCount', $this->Translate('CellCount'), '', 0);
		$this->RegisterVariableFloat('Deviation', $this->Translate('Deviation'), 'LiFePoCellVoltage', 0);



        if ($this->ReadPropertyInteger('Interval') < 2) {
            if ($this->ReadPropertyInteger('Interval') != 0) {
                $this->SetStatus(IS_EBASE + 1);
            } else {
                $this->SetStatus(IS_ACTIVE);
            }
            $this->SetTimerInterval('UpdateTimer', 0);
        } else {
            $this->SetTimerInterval('UpdateTimer', $this->ReadPropertyInteger('Interval')*1000);
            $this->SetStatus(IS_ACTIVE);
        }
      
	}
	
    //Zusammenbau der Abfrage und Senden an die Sschnittstelle
	public function RequestRead()
    {
			$splitterID=IPS_GetInstance($this->InstanceID)['ConnectionID'];
			$splitter=IPS_GetInstance($splitterID);
			$splitterStat=$splitter['InstanceStatus'];
			$socketID=$splitter['ConnectionID'];
			$socketStat=IPS_GetInstance($socketID)['InstanceStatus'];
     	
			$this->SendDebug("Info:", "Splitter ID: ".$splitterID." Splitter Status:".$splitterStat." Socket ID: ".$socketID." Socket Status: ".$socketStat, 0);
			if ($socketStat >= 200){
				$this->SendDebug("Fehler:","Socket fehlerhaft",0);
				return;
			}
			if ($splitterStat >= 200){
						$this->SendDebug("Fehler:","Splitter fehlerhaft",0);
						return;
				}

			$UpdateList = IPS_GetInstanceListByModuleID("{79A5F3D6-7F0A-D167-6921-09106162AC5A}"); // Seplosstack Instanzen
				$myparent = ips_getparent($this->InstanceID);

			foreach ($UpdateList as $UpdateListID) {
					if ($myparent == $UpdateListID){ // Am I a child of Seplosstack?
					$this->SetTimerInterval('UpdateTimer', 0); // disable own Update-Timer
				}
			}
			$address = $this->ReadPropertyInteger("PAddress");
		//        $request = "\x7E\x32\x30\x30".$adrstr."\x34\x36\x34\x32\x45\x30\x30\x32\x30\x32\x46\x44\x33\x33\x0D"; Seplos

			$array = array(0x7E, 0x32, 0x30, 0x30, 0xFF, 0x34, 0x36, 0x34, 0x32, 0x45, 0x30, 0x30, 0x32, 0x30, 0xFF, 0x46, 0x44, 0x33, 0x33, 0x0D);

			$array[4] = ord($address);
			$array[14] = ord($address);

			// Build Checksum amd write into Array
			$summe = 0;
			for ($i = 1; $i < 15;$i++){
				$summe = $summe + $array[$i];
			}
			$summe = $summe ^ 0xFFFF; // XOR
			$summe = $summe + 1;

			$hexstring =  sprintf("%02X", $summe);

			$array[15] = ord(substr($hexstring, 0,1));
			$array[16] = ord(substr($hexstring, 1,1));
			$array[17] = ord(substr($hexstring, 2,1));
			$array[18] = ord(substr($hexstring, 3,1));


			// Request bilden
			$request = "";
			foreach ($array as $char) {
				$request = $request.chr($char);
			}
            //Send to Splitter
			//$this->SendDebug('Adresse',$address,0);
			//$this->SendDebug('Request',$request,0);

			$this->SendToSplitter($request);


		
	}

    


	public function MessageSink($TimeStamp, $SenderID, $Message, $Data)
	{
		switch ($Message) {
			case IPS_KERNELSTARTED: // only after IP-Symcon started
				$this->KernelReady(); // if IP-Symcon is ready
				break;
		}
	}

	/**
     * Setzte eine IPS-Variable auf den Wert von $value.
     *
     * @param array $Variable Statusvariable
     * @param mixed $Value    Neuer Wert der Statusvariable.
     */
    protected function SetValueExt($Variable, $Value)
    { 
        $id = @$this->GetIDForIdent($Variable['Ident']);
        if ($id == false) {
            $this->MaintainVariable($Variable['Ident'], $Variable['Name'], $Variable['VarType'], $Variable['Profile'], $Variable['Pos'], $Variable['Keep']);
        }
        $this->SetValue($Variable['Ident'], $Value);
        return true;
    }

	/**
	 * Wird ausgeführt wenn der Kernel hochgefahren wurde.
	 * @access protected
	 */
	protected function KernelReady()
	{
		$this->ApplyChanges();
	}
	
	
	protected function SendToSplitter(string $payload)
	{						
		// send to splitter
		$result = $this->SendDataToParent(json_encode(Array("DataID" => "{FC9EF969-7AD6-D032-7BCE-C927A6ED6FB4}", "Buffer" => $payload))); // Interface GUI (ID Korrekt)
		return $result;
	}
	
	public function ReceiveData($JSONString)
	{
		$min = 100;
		$max =-100;
		$adr = 0;  //Wertadresse	

		$receive = json_decode($JSONString);
		$Data = $receive->{'Buffer'};
	//	$this->SendDebug("Length:", strlen($Data), 0);
		$address = $this->ReadPropertyInteger("PAddress");
		$adrstr = $address;
		$adrrec = hexdec($Data[3].$Data[4]);
		if (($adrstr == $adrrec) and (strlen($Data) == 168)){
		 $this->SendDebug("Treffer:","",0);	
		 $this->SendDebug("Recieve:", $JSONString, 0);
		 $this->SetValue('ProtVer', $Data[1].".".$Data[2]);  //Versionsvariable Setzen
 		 $Zellzahl = hexdec($Data[17].$Data[18]);            //Zellenzahl auslesen
		  $this->SetValue('CellCount', $Zellzahl);

         //Durch die Variablen parsen und die Werte auslesen
		 $Variables = json_decode($this->ReadPropertyString('Variables'), true);
		
		 foreach ($Variables as $Variable) {
			 if (!$Variable['Keep']) { continue; }
			 $adr = $Variable['Address'];  //Adresse holen

			 switch ($Variable['VarType']){     
			   case VARIABLETYPE_FLOAT:

				switch ($Variable['DataType']) {
					 case VALTYP_WORD: 
						$Value = (hexdec($Data[$adr].$Data[$adr+1].$Data[$adr+2].$Data[$adr+3])*$Variable['Factor'])+$Variable['Offset'];
						break;
					 
					 case VALTYP_SHORT:
						 $Value = hexdec($Data[$adr].$Data[$adr+1].$Data[$adr+2].$Data[$adr+3]);
							if($Value >= 32768) { $short -= 65536; }
						 $Value = ($Value+$Variable['Offset'])*$Variable['Factor'];
						 break;
				 }
				 break;
 
			   case VARIABLETYPE_INTEGER:
				 $Value = hexdec($Data[$adr].$Data[$adr+1].$Data[$adr+2].$Data[$adr+3]);
				 break;
		  
			 }

			 $this->SetValue($Variable['Ident'], $Value);

             //Hier dann für die Temperaturvariablen die Abweichung der Einzelnen Zellen ausrechnen
			 if (($Variable['Pos'] >=1) && ($Variable['Pos']<= $Zellzahl)){
				$this->SendDebug($Variable['Pos'].$Variable['Ident'],$Value,0);
				if ($Value <= $min) {$min = $Value;}
				if ($Value >= $max) {$max = $Value;}
			 }
			 $Deviation=abs($max-$min);

	
			}
            //Nun noch die Zellenabweichung schreiben
			$this->SetValue('Deviation', $Deviation);  //Versionsvariable Setzen

		}
	}
	
	public function RequestAction($Ident, $Value)
	{
		switch ($Ident) {
			case "STATE":
				$this->PowerToogle($Value);
				break;
			default:
				$this->SendDebug("Device", "Invalid ident", 0);
		}
	}

	public function PowerToogle(bool $state)
	{   
		$response = false;
		if ($state) {
			return $this->PowerOn();
		} else {
			return $this->PowerOff();
		}
	}

	public function PowerOn()
	{
		
	}

	public function PowerOff()
	{
		
	}
	
	/**
	 * gets current IP-Symcon version
	 * @return float|int
	 */
	protected function GetIPSVersion()
	{
		$ipsversion = floatval(IPS_GetKernelVersion());
		if ($ipsversion < 4.1) // 4.0
		{
			$ipsversion = 0;
		} elseif ($ipsversion >= 4.1 && $ipsversion < 4.2) // 4.1
		{
			$ipsversion = 1;
		} elseif ($ipsversion >= 4.2 && $ipsversion < 4.3) // 4.2
		{
			$ipsversion = 2;
		} elseif ($ipsversion >= 4.3 && $ipsversion < 4.4) // 4.3
		{
			$ipsversion = 3;
		} elseif ($ipsversion >= 4.4 && $ipsversion < 5) // 4.4
		{
			$ipsversion = 4;
		} else   // 5
		{
			$ipsversion = 5;
		}

		return $ipsversion;
	}

	//Profile
	protected function RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype)
	{

		if (!IPS_VariableProfileExists($Name)) {
			IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
		} else {
			$profile = IPS_GetVariableProfile($Name);
			if ($profile['ProfileType'] != $Vartype)
				$this->SendDebug("BMW:", "Variable profile type does not match for profile " . $Name, 0);
		}

		IPS_SetVariableProfileIcon($Name, $Icon);
		IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
		IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
		IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize); // string $ProfilName, float $Minimalwert, float $Maximalwert, float $Schrittweite
	}

	protected function RegisterProfileAssociation($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype, $Associations)
	{
		if (sizeof($Associations) === 0) {
			$MinValue = 0;
			$MaxValue = 0;
		}

		$this->RegisterProfile($Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $Stepsize, $Digits, $Vartype);

		//boolean IPS_SetVariableProfileAssociation ( string $ProfilName, float $Wert, string $Name, string $Icon, integer $Farbe )
		foreach ($Associations as $Association) {
			IPS_SetVariableProfileAssociation($Name, $Association[0], $Association[1], $Association[2], $Association[3]);
		}

	}

	

	/***********************************************************
	 * Configuration Form
	 ***********************************************************/

	/**
	 * build configuration form
	 * @return string
	 */
	public function GetConfigurationForm()
	{
		// return current form
		return json_encode([
			'elements' => $this->FormHead(),
			'actions' => $this->FormActions(),
			'status' => $this->FormStatus()
		]);
	}

	/**
	 * return form configurations on configuration step
	 * @return array
	 */
	protected function FormHead()   
	{
		$form = [
			[
				'type' => 'Label',
				'label' => 'IPSymcon Seplos BMS'
			],
			[
				'name' => 'Interval',
				'type' => 'NumberSpinner',
				'caption' => 'Read Interval',
				'digits' => '0',
				'suffix' => 'Sec',
				'minimum' => 10,
				'maximum' => 3600
			],
			[
				'name' => 'PAddress',
				'type' => 'NumberSpinner',
				'caption' => 'Pack Address',
				'digits' => '0',
				'suffix' => '',
				'minimum' => 0,
				'maximum' => 15
			],
			[
				"type" => "List",
				"name" => "Variables",
				"caption" => "",
				"add" => false,
				"delete" => false,
				"columns" => [
					[
						"caption" => "Group",
						"name" => "Group",
						"visible" => true,
						"width" => "100px",
						"save" => true
					],
					[
						"caption" => "Ident",
						"name" => "Ident",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "Name",
						"name" => "Name",
						"visible" => true,
						"width" => "100px",
						"save" => true
					],
					[
						"caption" => "Index",
						"name" => "Pos",
						"width" => "100px",
						"save" => true
					],
					[
						"caption" => "Type",
						"name" => "VarType",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "DataType",
						"name" => "DataType",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "Profile",
						"name" => "Profile",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "Address",
						"name" => "Address",
						"visible" => true,
						"width" => "100px",
						"save" => true
					],
					[
						"caption" => "Factor",
						"name" => "Factor",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "Offset",
						"name" => "Offset",
						"visible" => false,
						"width" => "0px",
						"save" => true
					],
					[
						"caption" => "Active",
						"name" => "Keep",
						"width" => "75px",
						"edit" => [
							"caption" => "Active",
							"type" => "CheckBox"
						]
					]
				],
				"values" => []
			]
		];
		return $form;
	}



	/**
	 * return form actions
	 * @return array
	 */
	protected function FormActions()
	{
		$form = [
			[
				"type" => "Button",
				"caption" => "Read values",
				"onClick" => ""
			]
		];
			return $form;
	}

	/**
	 * return from status
	 * @return array
	 */
	protected function FormStatus()
	{
		$form = [
			[
				'code' => 101,
				'icon' => 'inactive',
				'caption' => 'Creating instance.'
			],
			[
				'code' => 102,
				'icon' => 'active',
				'caption' => 'Device created.'
			],
			[
				'code' => 104,
				'icon' => 'inactive',
				'caption' => 'interface closed.'
			],
			[
				'code' => 201,
				'icon' => 'error',
				'caption' => 'Interval less than 10 s not allowed.'
				]
		];

		return $form;
	}

	/**
	 * return incremented position
	 * @return int
	 */
	private function _getPosition()
	{
		$this->position++;
		return $this->position;
	}
	
	/***********************************************************
	 * Migrations
	 ***********************************************************/

	/**
	 * Polyfill for IP-Symcon 4.4 and older
	 * @param string $Ident
	 * @param mixed $Value
	 */
	//Add this Polyfill for IP-Symcon 4.4 and older
	protected function SetValue($Ident, $Value)
	{

		if (IPS_GetKernelVersion() >= 5) {
			parent::SetValue($Ident, $Value);
		} else {
			SetValue($this->GetIDForIdent($Ident), $Value);
		}
	}	
}