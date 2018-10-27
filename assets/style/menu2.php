<?
	$sql = mysql_fetch_array(
		   mysql_query("select * 
		   				from pegawai
						where no_urut='$hasil[no_urut]'"));
	
	$row = explode(",",$sql[3]);
	$jml = count($row);
	
	
//home
	$hak_akses= "<li><a href=\"../include/logout.php\">LOGOUT</a></li>";
	

// others 	
	$hak_akses=$hak_akses."<li><a href=\"#\">OTHERS</a><ul>";
	
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==54 || $row[$i]==55){
			if($row[$i]==54){
				$yes = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../others/pegawai.php\">Pegawai</a></li>";
			}
			
			if($row[$i]==55){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../others/pegawai.php\">Pegawai</a></li>";
			}
			
		}
		
		else if($row[$i]==56 || $row[$i]==57 || $row[$i]==58){
		 	if($row[$i]==56){
				$yes = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../others/pelanggan.php\">Pelanggan</a></li>";
			}
			
			if($row[$i]==57){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else{
					$yes="ok";
					$hak_akses = $hak_akses."<li><a href=\"../others/pelanggan.php\">Pelanggan</a></li>";
				}
			}
			
			if($row[$i]==58){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../others/pelanggan.php\">Pelanggan</a></li>";
			}
			
		}
		else if($row[$i]==59 || $row[$i]==60) {
			if($row[$i]==59){
				$yes = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../others/vendor.php\">Vendor</a></li>";
			}
			if($row[$i]==60){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../others/vendor.php\">Vendor</a></li>";
			}
		}
		else if($row[$i]==61){
			$hak_akses = $hak_akses."<li><a href=\"../others/hak_akses.php\">Hak Akses</a></li>";
		}
		else if($row[$i]==77){
			$hak_akses = $hak_akses."<li><a href=\"../others/log.php\">LOG</a></li>";
			break;
		}
		else 
			$hak_akses = $hak_akses;
	}	
			
	$hak_akses=$hak_akses."<li><a href=\"../others/change_password.php\">Change Password</a></li></ul></li>";
	
// REPORT 	
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==21||$row[$i]==22||$row[$i]==23||$row[$i]==24||$row[$i]==25||$row[$i]==26||$row[$i]==27||$row[$i]==28||$row[$i]==29||$row[$i]==30||$row[$i]==31||$row[$i]==32||$row[$i]==33||$row[$i]==34||$row[$i]==35||$row[$i]==36||$row[$i]==37||$row[$i]==38||$row[$i]==39||$row[$i]==40||$row[$i]==41||$row[$i]==42||$row[$i]==43||$row[$i]==44||$row[$i]==45||$row[$i]==46||$row[$i]==47||$row[$i]==48||$row[$i]==49||$row[$i]==50||$row[$i]==51||$row[$i]==52||$row[$i]==53||$row[$i]==62){
			$hak_akses=$hak_akses."<li><a href=\"#\">REPORT</a><ul>";
			break;
		}
	}
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==21||$row[$i]==22||$row[$i]==23||$row[$i]==24){ 
			
			if($row[$i]==21){
				$yes = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/po_customer.php\">PO Customer</a></li>";
			}
			
			if($row[$i]==22){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else{
					$yes="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_customer.php\">PO Customer</a></li>";
				}
			}
			
			if($row[$i]==23){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else{
					$yes="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_customer.php\">PO Customer</a></li>";
				}
			}
			
			if($row[$i]==24){ 
				if($yes=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/po_customer.php\">PO Customer</a></li>";
			}
		}
		else if($row[$i]==25||$row[$i]==26||$row[$i]==27||$row[$i]==28) {
			
			if($row[$i]==25){
				$yes1 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_matang.php\">PO Pabrik Matang</a></li>";
			}
			
			if($row[$i]==26){ 
				if($yes1=="ok") $hak_akses = $hak_akses; 
				else{
					$yes1="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_matang.php\">PO Pabrik Matang</a></li>";
				}
			}
			
			if($row[$i]==27){ 
				if($yes1=="ok") $hak_akses = $hak_akses; 
				else{
					$yes1="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_matang.php\">PO Pabrik Matang</a></li>";
				}
			}
			
			if($row[$i]==28){ 
				if($yes1=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_matang.php\">PO Pabrik Matang</a></li>";
			}
		}
		else if($row[$i]==29||$row[$i]==30||$row[$i]==31||$row[$i]==32) {
			
			if($row[$i]==29){
				$yes2 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_greige.php\">PO Pabrik Greige</a></li>";
			}
			
			if($row[$i]==30){ 
				if($yes2=="ok") $hak_akses = $hak_akses; 
				else{
					$yes2="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_greige.php\">PO Pabrik Greige</a></li>";
				}
			}
			
			if($row[$i]==31){ 
				if($yes2=="ok") $hak_akses = $hak_akses; 
				else{
					$yes2="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_greige.php\">PO Pabrik Greige</a></li>";
				}
			}
			
			if($row[$i]==32){ 
				if($yes2=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_greige.php\">PO Pabrik Greige</a></li>";
			}
		}
		else if($row[$i]==33||$row[$i]==34||$row[$i]==35||$row[$i]==36) {
			
			if($row[$i]==33){
				$yes3 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_celupan.php\">PO Pabrik Celupan</a></li>";
			}
			
			if($row[$i]==34){ 
				if($yes3=="ok") $hak_akses = $hak_akses; 
				else{
					$yes3="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_celupan.php\">PO Pabrik Celupan</a></li>";
				}
			}
			
			if($row[$i]==35){ 
				if($yes3=="ok") $hak_akses = $hak_akses; 
				else{
					$yes3="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_celupan.php\">PO Pabrik Celupan</a></li>";
				}
			}
			
			if($row[$i]==36){ 
				if($yes3=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/po_pabrik_celupan.php\">PO Pabrik Celupan</a></li>";
			}
		}
		else if($row[$i]==37)
			$hak_akses = $hak_akses."<li><a href=\"../report/surat_jalan_pabrik_matang.php\">Surat Jalan Pabrik Matang</a></li>";
		else if($row[$i]==38)
			$hak_akses = $hak_akses."<li><a href=\"../report/surat_jalan_pabrik_greige.php\">Surat Jalan Pabrik Greige</a></li>";
		else if($row[$i]==39)
			$hak_akses = $hak_akses."<li><a href=\"../report/surat_jalan_pabrik_celupan.php\">Surat Jalan Pabrik Celupan</a></li>";
		else if($row[$i]==40){ 
			$hak_akses = $hak_akses."<li><a href=\"../report/gudang.php\">Gudang</a></li>";
		}
		else if($row[$i]==41||$row[$i]==42) {
			
			if($row[$i]==41){
				$yes5 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/surat_jalan_customer.php\">Surat Jalan Customer</a></li>";
			}
			
			if($row[$i]==42){ 
				if($yes5=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/surat_jalan_customer.php\">Surat Jalan Customer</a></li>";
			}
		}
		else if($row[$i]==43||$row[$i]==44) {
			
			if($row[$i]==43){
				$yes6 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/retur_penjualan.php\">Retur Penjualan Customer</a></li>";
			}
			
			if($row[$i]==44){ 
				if($yes6=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/retur_penjualan.php\">Retur Penjualan Customer</a></li>";
			}
		}
		else if($row[$i]==45||$row[$i]==46||$row[$i]==47) {
			
			if($row[$i]==45){
				$yes6 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/claim_pembelian.php\">Claim Pembelian Pabrik</a></li>";
			}
			
			if($row[$i]==46){ 
				if($yes6=="ok") $hak_akses = $hak_akses; 
				else{
					$yes6="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/claim_pembelian.php\">Claim Pembelian Pabrik</a></li>";
				}
			}
			
			if($row[$i]==47){ 
				if($yes6=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/claim_pembelian.php\">Claim Pembelian Pabrik</a></li>";
			}
		}
		else if($row[$i]==48||$row[$i]==49||$row[$i]==50) {
			
			if($row[$i]==48){
				$yes7 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../report/retur_perbaikan.php\">Retur Perbaikan Customer</a></li>";
			}
			
			if($row[$i]==49){ 
				if($yes7=="ok") $hak_akses = $hak_akses; 
				else{
					$yes7="ok";
					$hak_akses = $hak_akses."<li><a href=\"../report/retur_perbaikan.php\">Retur Perbaikan Customer</a></li>";
				}
			}
			
			if($row[$i]==50){ 
				if($yes7=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../report/retur_perbaikan.php\">Retur Perbaikan Customer</a></li>";
			}
		}
		else if($row[$i]==51) {
			$hak_akses = $hak_akses."<li><a href=\"../report/analisa_bisnis.php\">Analisa Bisnis</a></li>";
		}
		else if($row[$i]==52) {
			$hak_akses = $hak_akses."<li><a href=\"../report/neraca.php\">Neraca</a></li>";
		}
		else if($row[$i]==53){
			$hak_akses = $hak_akses."<li><a href=\"../report/komisi.php\">Komisi Pegawai</a></li>";
		}
		else if($row[$i]==62){
			$hak_akses = $hak_akses."<li><a href=\"../report/penyusutan.php\">Penyusutan</a></li>";
			break;
		}
		else 
			$hak_akses = $hak_akses;
	}			
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==21||$row[$i]==22||$row[$i]==23||$row[$i]==24||$row[$i]==25||$row[$i]==26||$row[$i]==27||$row[$i]==28||$row[$i]==29||$row[$i]==30||$row[$i]==31||$row[$i]==32||$row[$i]==33||$row[$i]==34||$row[$i]==35||$row[$i]==36||$row[$i]==37||$row[$i]==38||$row[$i]==39||$row[$i]==40||$row[$i]==41||$row[$i]==42||$row[$i]==43||$row[$i]==44||$row[$i]==45||$row[$i]==46||$row[$i]==47||$row[$i]==48||$row[$i]==49||$row[$i]==50||$row[$i]==51||$row[$i]==52||$row[$i]==53||$row[$i]==62){
			$hak_akses=$hak_akses."</ul></li>";
			break;
		}
	}
	
	
	
// ACCOUNTING 	
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==10||$row[$i]==11||$row[$i]==12||$row[$i]==13||$row[$i]==14||$row[$i]==15||$row[$i]==16||$row[$i]==17||$row[$i]==18||$row[$i]==19||$row[$i]==20){
			$hak_akses=$hak_akses."<li><a href=\"#\">ACCOUNTING</a><ul>";
			break;
		}
	}
	for($i=0 ; $i<$jml ; $i++){
		
		if($row[$i]==10||$row[$i]==11||$row[$i]==12)  {
			
			if($row[$i]==10){
				$yes8 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../accounting/faktur_penjualan.php\">Faktur Penjualan</a></li>";
			}
			
			if($row[$i]==11){ 
				if($yes8=="ok") $hak_akses = $hak_akses; 
				else{
					$yes8="ok";
					$hak_akses = $hak_akses."<li><a href=\"../accounting/faktur_penjualan.php\">Faktur Penjualan</a></li>";
				}
			}
			
			if($row[$i]==12){ 
				if($yes8=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../accounting/faktur_penjualan.php\">Faktur Penjualan</a></li>";
			}
			
		}
		
		
			
		else if($row[$i]==13||$row[$i]==14)  {
			
			if($row[$i]==13){
				$yes10 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../accounting/pembelian.php\">Pembelian</a></li>";
			}
			
			if($row[$i]==14){ 
				if($yes10=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../accounting/pembelian.php\">Pembelian</a></li>";
			}
		}
			
		else if($row[$i]==15||$row[$i]==16||$row[$i]==17)   {
			
			if($row[$i]==15){
				$yes9 = "ok";
				$hak_akses = $hak_akses."<li><a href=\"../accounting/penjualan.php\">Penjualan</a></li>";
			}
			
			if($row[$i]==16){ 
				if($yes9=="ok") $hak_akses = $hak_akses; 
				else{
					$yes8="ok";
					$hak_akses = $hak_akses."<li><a href=\"../accounting/penjualan.php\">Penjualan</a></li>";
				}
			}
			
			if($row[$i]==17){ 
				if($yes9=="ok") $hak_akses = $hak_akses; 
				else $hak_akses = $hak_akses."<li><a href=\"../accounting/penjualan.php\">Penjualan</a></li>";
			}
			
		}
		else if($row[$i]==18) 
			$hak_akses = $hak_akses."<li><a href=\"../accounting/retur_penjualan.php\">Retur Penjualan Customer</a></li>";
		else if($row[$i]==19) 
			$hak_akses = $hak_akses."<li><a href=\"../accounting/claim_pembelian.php\">Claim Pembelian Pabrik</a></li>";
		else if($row[$i]==20){
			$hak_akses = $hak_akses."<li><a href=\"../accounting/retur_perbaikan.php\">Retur Perbaikan Customer</a></li>";
			break;
		}
		else 
			$hak_akses = $hak_akses;
	}			
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==10||$row[$i]==11||$row[$i]==12||$row[$i]==13||$row[$i]==14||$row[$i]==15||$row[$i]==16||$row[$i]==17||$row[$i]==18||$row[$i]==19||$row[$i]==20){
			$hak_akses=$hak_akses."</ul></li>";
			break;
		}
	}
	
	
// PROCESS 	
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==1||$row[$i]==2||$row[$i]==3||$row[$i]==4||$row[$i]==5||$row[$i]==6||$row[$i]==7||$row[$i]==8||$row[$i]==9){
			$hak_akses=$hak_akses."<li><a href=\"#\">PROCESS</a><ul>";
			break;
		}
	}
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==1) 
			$hak_akses = $hak_akses."<li><a href=\"../process/po_customer.php\">PO Customer</a></li>";
		else if($row[$i]==2) 
			$hak_akses = $hak_akses."<li><a href=\"../process/po_pabrik_matang.php\">PO Pabrik Matang</a></li>";
		else if($row[$i]==3) 
			$hak_akses = $hak_akses."<li><a href=\"../process/po_pabrik_greige.php\">PO Pabrik Greige</a></li>";
		else if($row[$i]==4) 
			$hak_akses = $hak_akses."<li><a href=\"../process/po_pabrik_celupan.php\">PO Pabrik Celupan</a></li>";
		else if($row[$i]==5)
			$hak_akses = $hak_akses."<li><a href=\"../process/surat_jalan_pabrik_matang.php\">Surat Jalan Pabrik Matang</a></li>";
		else if($row[$i]==6)
			$hak_akses = $hak_akses."<li><a href=\"../process/surat_jalan_pabrik_greige.php\">Surat Jalan Pabrik Greige</a></li>";
		else if($row[$i]==7)
			$hak_akses = $hak_akses."<li><a href=\"../process/surat_jalan_pabrik_celupan.php\">Surat Jalan Pabrik Celupan</a></li>";
		else if($row[$i]==8) 
			$hak_akses = $hak_akses."<li><a href=\"../process/gudang.php\">Gudang</a></li>";
		else if($row[$i]==9){
			$hak_akses = $hak_akses."<li><a href=\"../process/surat_jalan_customer.php\">Surat Jalan Customer</a></li>";
			break;
		}
		else 
			$hak_akses = $hak_akses;
	}			
	for($i=0 ; $i<$jml ; $i++){
		if($row[$i]==1||$row[$i]==2||$row[$i]==3||$row[$i]==4||$row[$i]==5||$row[$i]==6||$row[$i]==7||$row[$i]==8||$row[$i]==9){
			$hak_akses=$hak_akses."</ul></li>";
			break;
		}
	}
	
	
	$hak_akses = $hak_akses."<li><a href=\"../include/index.php\">HOME</a></li>";
	
	
?>