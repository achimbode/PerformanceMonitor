<?php
// ServerImplementation.php
// Serverweiche Ameise/localhost 
// derived classes/implementations: ServerAmeiseImplementation, ServerPropellerbookImplementation

class ServerdfdmsImplementation extends ServerImplementation {
	
	protected $name = "dfdms";
	protected $path_monitor = "/home/my.domain.com/htdocs/www/dfdms/extensions/PerformanceMonitor/";
	protected $path_logfiles = "/home/my.domain.com/htdocs/www/dfdms/log/";
	protected $phpVersion = "5.3.3";
	protected $logfiles;
	
	public function __construct( /*$profileConfig*/ ) {
		parent::__construct( /*$profileConfig*/ );
		$this->logfiles = array(
			"werkzeuge" => "log-2014-4-4--15-22-35--1396617755",
			"testseite" => "log-2014-4-4--11-3-49--1396602229"
			);
	}
	
	public function getLogfileName( $keyword ) {
		if( isset( $keyword ) ) return $this->logfiles[ $keyword ];
		return 'log-2014-4-4--11-3-49--1396602229'; //'log-2014-4-4--8-47-37--1396594057';
	}
	
}