<?php

function getNoPendaftaran($kota)
{
    global $mysqli;
	$type = strtolower($kota);
	
	//membaca id akhir pada pendaftaran
	$select = $mysqli->query("SELECT no_pendaftaran FROM data_peserta ORDER BY no_pendaftaran DESC LIMIT 1 ")or die($mysqli->error);
	$s1 = $select->fetch_array();
	
	//create nomor urut
	$s2 = explode("-",$s1['no_pendaftaran']);
	$s3 = $s2[2]+1;
	if(strlen($s3)==1){
		$no_urut = "000".$s3;
	}elseif(strlen($s3)==2){
		$no_urut = "00".$s3;
	}elseif(strlen($s3)==3){
		$no_urut = "0".$s3;
	}elseif(strlen($s3)==4){
		$no_urut = $s3;
	}
	
	$no_pendaftaran = "ITC-".date('Y')."-".$no_urut."-".strtoupper($type)."";
	return $no_pendaftaran;
}

function getNoPeserta($kota)
{
    global $mysqli;
	$type = strtolower($kota);
	
	//membaca id akhir pada pendaftaran
	$select = $mysqli->query("SELECT id FROM detail_peserta ORDER BY id DESC LIMIT 1 ")or die($mysqli->error);
	$s1 = $select->fetch_array();
	
	//create nomor urut
	$s2 = explode("/",$s1['id']);
	$s3 = $s2[3]+1;
	if(strlen($s3)==1){
		$no_urut = "000".$s3;
	}elseif(strlen($s3)==2){
		$no_urut = "00".$s3;
	}elseif(strlen($s3)==3){
		$no_urut = "0".$s3;
	}elseif(strlen($s3)==4){
		$no_urut = $s3;
	}
	
	$no_pendaftaran = "ITC/".date('Y')."/".strtoupper($type)."/".$no_urut."";
	return $no_pendaftaran;
}

function getData($table, $field)
{
	global $mysqli;
	
	$open = $mysqli->query("SELECT $field FROM $table WHERE no_pendaftaran = '".$_GET['no_reg']."'")or die($mysqli->error);
	$ar = $open->fetch_object();
	$title = $ar->$field;
	
	return $title;
}

function estimasi($s)
{
	$date = explode("/", date("d/m/Y"));
	$estima = $date[0] + $s;
	$its = $estima."".date(" - F - Y");
	
	return $its;
}

?>