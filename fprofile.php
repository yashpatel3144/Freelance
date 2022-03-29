<? php

		$host='localhost';
		$dbname='profile';
		$dbUsername='root';
		$dbPassword='';
	
		$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

		if (!$conn) {
			echo "Connection failed!";
}
	
		}
		
	 ?> 