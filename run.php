<?php
error_reporting(E_ALL ^ E_DEPRECATED);
date_default_timezone_set('Asia/Jakarta');

    
function sate_ayam1($token,$phone,$idhp,$kode_pin){
    $url = "https://edtsapp.indomaretpoinku.com/login/api/open/pin/validate-pin";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Authorization: Bearer ".$token,
       "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $data = '{"phoneNumber":'.$phone.',"deviceId":'.$idhp.',"pinCode":'.$kode_pin.'}';
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);
    curl_close($curl);
    return $resp;
    };
function create_pin1($token){
    $url = 'https://edtsapp.indomaretpoinku.com/login/api/pin/create-pin';

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $headers = array(
       "Authorization: Bearer ".$token,
       "Host: edtsapp.indomaretpoinku.com",
       "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    
    $data = '{"pinCode":"123123"}';
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);
    curl_close($curl);
    return $resp;
}

            function input_otp(){
                echo "Masukan Kode OTP: ";
                $input_otp = fopen("php://stdin","r");
                $otp = trim(fgets($input_otp));
                $otp = "\"$otp\"";
                return $otp;
                 }

function sate_ayam($url, $head_cart, $post_cart){

    $tusuk = curl_init($url);
    
    
          curl_setopt($tusuk, CURLOPT_POST, true);
          curl_setopt($tusuk, CURLOPT_HTTPHEADER, $head_cart);
          curl_setopt($tusuk, CURLOPT_POSTFIELDS, $post_cart);
          curl_setopt($tusuk, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($tusuk, CURLOPT_SSL_VERIFYHOST, FALSE);;
          curl_setopt($tusuk, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($tusuk, CURLOPT_FOLLOWLOCATION, true);
          $data     = curl_exec($tusuk);
          return $data;
    };

    function dapet($url, $headers){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($resp, 0, $header_size);
        $body_cart = substr($resp, $header_size);
        $info_cart = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        return $resp;
            };

            function otp_send($url,$headers){
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $resp = curl_exec($curl);
                return $resp;
                };




//Script php
$url_login = "https://edtsapp.indomaretpoinku.com/customer/api/login";
$url_otp = "https://edtsapp.indomaretpoinku.com/customer/api/login-verified";
$url_token = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem";
$url_redem = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true";


$herder = [
    'Content-Type: application/json',
];
$header = [
    'Content-Type: application/json',
    'user-agent: okhttp/4.9.0',
];
function color($color = "default" , $text)
{
    $arrayColor = array(
        'grey'      => '1;30',
        'red'       => '1;31',
        'green'     => '1;32',
        'yellow'    => '1;33',
        'blue'      => '1;34',
        'purple'    => '1;35',
        'nevy'      => '1;36',
        'white'     => '1;0',
    );  
    return "\033[".$arrayColor[$color]."m".$text."\033[0m";
}
        function login ($url,$headers,$data){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;

        }
        $headers = array(
            "Content-Type: application/json",
         );


         $header_toko = array(
            " ",
         );

        function cek ($url,$headers){

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $resp = curl_exec($curl);
        return $resp;
    }
        function cek_get ($url,$headers_cekk){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers_cekk);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $toko_anda = curl_exec($curl);
            curl_close($curl);
            return $toko_anda;
        }

        function cek_get_troli ($headers_cekk){
            $url ="https://www.klikindomaret.com/cart/getcartitemscount";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers_cekk);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $toko_anda = curl_exec($curl);
            curl_close($curl);
            return $toko_anda;
        }
        function get_noheader ($url,$headers_cekk){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers_cekk);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $toko_anda = curl_exec($curl);
            curl_close($curl);
            return $toko_anda;
        }


$headers = array(
    "Content-Type: application/json",
    "Connection: keep-alive",
    "Accept-Encoding: gzip, deflate",
    "User-Agent: okhttp/3.12.1",
 );

$url_login = "https://api.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=123&districtID=312&TrafficSource=";
welcome:
echo "\n";
echo "\n";
echo color("yellow","[?] Masukan Token (Beli di Owner|1 Token - 1 Nohp):");
$input_hp = fopen("php://stdin","r");
$idhp = trim(fgets($input_hp));
$idhp = "\"$idhp\"";
echo color("blue","| Script KLIK INDOMARET & IDM POINT \n");
echo color("red","| ------------Yan-Arie------------ \n");
echo color("yellow","| WA 085782946968 | DONATE DANA - 085782946968 \n");
echo color("yellow","| @Anteiku Codes \n");
echo color("green","| Time    :".date('[d-m-Y] [H:i:s]')."\n");
echo color("purple", "| -------------------------------- \n");
echo color("green","| 1. Login + Tempel VC Klik \n");
echo color("nevy","| 2. Daftar Klik \n");
echo color("nevy","| 3. Cek Lokasi / Kode TOKO / Kode REFF\n");
echo color("nevy","| 4. Rubah password + Nama Default Klik (Wajib setting jika baru pertama kali install script) \n");
echo color("nevy","| 6. Indomaret pointku (SMS OTP) (Token dibutuhkan) \n");
echo color("nevy","| Pilih salah satu :  ");
$input_hp = fopen("php://stdin","r");
$inputan = trim(fgets($input_hp));



if ($inputan == "1"){ //Login
    // echo "Masih Maintenane";
    // die;
   
    echo color("yellow", "| Masukan Email/No HP: ");
    $input_hp = fopen("php://stdin","r");
    $phone = trim(fgets($input_hp));
    $nohp = "\"$phone\"";

    echo color("yellow", "| Masukan Password: ");
    $input_hp = fopen("php://stdin","r");
    $phone = trim(fgets($input_hp));
    $pass = "\"$phone\"";
         #$pass = "\"charella\"";



    $data = '{"Email":'.$nohp.',"Password":'.$pass.'}';
    $login = login($url_login,$headers,$data);
    $hasil_login = json_decode($login,true);
    $cek_status = $hasil_login['IsSuccess'];
    $pesan = $hasil_login['Message'];
    if ($cek_status == true ){
        $cek_nama = $hasil_login['ResponseObject']['FName'];
        echo color("green", "Halo!! $cek_nama"."\n");
    }elseif($cek_status == false){
        echo color("red", "| $pesan!!");
        goto welcome;
    }

    $token = $hasil_login['ResponseID'];
    $ID = $hasil_login['ResponseObject']['ID'];
    // print_r($hasil_login);

    tebas_toko:
//     echo "Daerah Kota/Kabupaten toko anda: ";
//     $input_hp = fopen("php://stdin","r");
//     $kata_kunci = trim(fgets($input_hp));

//     $url = "https://www.klikindomaret.com/checkout/getlistautocompletestore?StoreCode=$kata_kunci";
//     $login = cek($url, $header_toko);
//     $data = json_decode($login);
//     $data = json_decode($data,true);
//     $nomer = 0;
//     echo PHP_EOL;
//     for($a=0; $a < count($data); $a++ )
//    {
//     $nomer++;
//     $str = str_replace(["\n","\r"],"",$data[$a]['label']);
//     echo "$nomer : ".$str.PHP_EOL;}

    // echo color("yellow", "| Masukan KODE TOKO: ");
    // $input_hp = fopen("php://stdin","r");
    // $KODE_TOKO = trim(fgets($input_hp));
     $KODE_TOKO = "FTPX";


    //Cek stok & ambil cookie

    $url_cek_troli = 'https://www.klikindomaret.com/cart/recheckstockallitem?StoreCode='.$KODE_TOKO.'&AddressType=0';
    $headers_cekk = array(
        'cookie: KlikIndomaret_USERID='.$ID,
    );
    $toko_anda = cek_get($url_cek_troli,$headers_cekk);
    $resp = json_decode($toko_anda,true);
    /////////////////////////////////////////
    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $toko_anda, $matches);
    $cookies = array();
    foreach($matches[1] as $item) {
        parse_str($item, $cookie);
        $cookies = array_merge($cookies, $cookie);
    }

    $cookies = http_build_query($cookies,'','; ');
    $cookies = rawurldecode($cookies);
    $token = "KlikIndomaret_USERID=$ID; $cookies";



    $header_sudah_token = array(
        'cookie: '.$token,
    );


    $hasil_cek_troli = cek_get_troli($header_sudah_token);
    $hasil_cek_troli = json_decode($hasil_cek_troli,true);

    if ($hasil_cek_troli['Quantity'] == "0"){ echo color("yellow","| Troli anda kosong! \n");}else{
    echo color("yellow",'| Troli Anda '.$hasil_cek_troli['Quantity']."\n");
    }
    $produk = [
        "BML2L1" => "e27efba9-ffdb-40b8-9b6a-5e9272ab5a91",
        "BML2L" => "355daec5-1343-4244-96c6-a01efc8dd333",
        "FTN2L" => "0828b072-483e-4ee0-9f99-7c33f33fc6eb",
        "SANIA2L" => "2f29a0db-6dee-42b7-bf82-fe0223fa187a",
        "TC" => "ff071dd2-6ae7-4967-bd88-07ed434008d8",
        "MAMY" => "9c14783e-4920-4193-b2ea-c9e63e4e5e69",
        
        ];
        // echo color("purple", "| Bimoli Minyak Goreng Special Refill 2000Ml - BML2L1 \n");
        // echo color("purple", "| Bimoli Minyak Goreng Special Refill 2000Ml - BML2L \n");
        // echo color("purple", "| Sania Minyak Goreng Refill 2000Ml - SANIA2L \n");
        // echo color("purple", "| Fortune Minyak Goreng Refill  Pch 2000Ml - FTN2L \n");
        // echo color("purple", "| Sovia Minyak Goreng 2L - SOV2L \n");
        // echo color("purple", "| Mamy Poko Pants Standar 30'S L \n");

        // echo color("yellow", "| Masukan kode barang: ");
        // $idproduk_input = strtoupper(trim(fgets(STDIN)));

        $idproduk_input = "TC";

        $produk_id = $produk[$idproduk_input];
        
        // echo color("yellow", "| Quantity: ");
        // $quantity = strtoupper(trim(fgets(STDIN)));

        $quantity = "3";

        $url_barang = 'https://www.klikindomaret.com/cart/modifycart?pId='.$produk_id.'&mod=add&qty='.$quantity;
        $cek_out1 = get_noheader($url_barang,$header_sudah_token);
        $hasil_cek_out1 = json_decode($cek_out1);
        $status_cek_out1 = $hasil_cek_out1->Success;
        $statusSCID = $hasil_cek_out1->ResponseID;
        if ($status_cek_out1 == false){
            echo $hasil_cek_out1->ErrorMessage."\n";
            goto tebas_toko;
        }
        echo color("green","| Sukses Troli! \n");
        $header_sudah_token2 = ["cookie: KlikIndomaret_SCID=$statusSCID; $token",];
        $hasil_cek_troli = cek_get_troli($header_sudah_token2);
    $hasil_cek_troli = json_decode($hasil_cek_troli,true);
    if ($hasil_cek_troli['Quantity'] == "0"){ 
        echo color("yellow","| Troli anda kosong! Pastikan kode toko benar!!"); goto welcome; }else{
    echo color("green",'| Troli Anda '.$hasil_cek_troli['Quantity']."\n");

    $url_cek_troli2 = 'https://www.klikindomaret.com/cart/recheckstockallitem?StoreCode='.$KODE_TOKO.'&AddressType=0';
    $toko_anda = get_noheader($url_cek_troli2,$header_sudah_token2);

    $resp = json_decode($toko_anda,true);
    $product_name= $resp['ResponseObject']['Items']['0']['ProductDesc'];
    $qtyavailable= $resp['ResponseObject']['Items']['0']['QtyAvailable'];
    $shopcartid= $resp['ResponseObject']['ShoppingCartID'];
    $shopcartid="\"$shopcartid\"";
    $CustomerID= $resp['ResponseObject']['CustomerID'];
    $CustomerID="\"$CustomerID\"";
    $RegionID= $resp['ResponseObject']['RegionID'];
    $RegionID="\"$RegionID\"";
    
    echo color("yellow", "| $product_name | stock toko: $qtyavailable \n");
        vc:
    echo color("yellow","| Masukan Kode Voucher: ");
    $idproduk_input = strtoupper(trim(fgets(STDIN)));
    $idproduk_input = "\"$idproduk_input\"";
    // $idproduk_input = $kupon_6;
    $url = 'https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id='.$ID;
    $header_vc = ["Content-Type: application/json"];
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header_vc);
    
    $data = '{"Code":'.$idproduk_input.',"ShoppingCartID":'.$shopcartid.',"CustomerID":'.$CustomerID.',"RegionID":'.$RegionID.',"SalesOrderNo":"","Nominal":"","DeviceID":'.$idhp.',"ShoppingCartPackageID":null}';

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $hsil = curl_exec($curl);
    curl_close($curl);
    $resp = json_decode($hsil,true);
    $hasil = $resp['ResponseObject']['status'];
    if ($hasil == "SUCCESS"){
    $hasil = $resp['ResponseObject']['keterangan'];
    echo color("yellow","| $hasil \n");
    }else{
        $hasil = $resp['ResponseObject']['0']['keterangan'];
        echo color("red","| $hasil");
        goto vc;}
    goto welcome;

}



// Request URL: https://www.klikindomaret.com/checkout/addvoucher
// Request Method: POST
// Status Code: 200 
// Remote Address: 104.22.25.142:443
// Referrer Policy: strict-origin-when-cross-origin
// data = "code: tf"



#---------------------------------------------------------------------------------------------------------




}elseif($inputan == "2" || $inputan == "x"){ //Daftar
    otp:
    if(file_exists("config.json")){
        $arr2 = json_decode(file_get_contents('config.json'), true);
        $ar2 = $arr2['name'];
        $ar1 = $arr2['password'];
        }else{ echo color("red","| Anda harus menyeting Name dan Password default!!"); goto welcome;}
        echo color("yellow","| Nama : $ar2 \n");
        echo color("yellow","| Pass : $ar1 \n");
        echo color("yellow","| Nomor : ");
        $input_hp = fopen("php://stdin","r");
        $nohp = trim(fgets($input_hp));
        $url_otp = 'https://api.klikindomaret.com/api/Customer/GetByMobilePhone?mobilePhone='.$nohp;
        $hasil_cek = get_noheader($url_otp,$header_toko);
     if($hasil_cek !== "[]"){ echo color("red","| Nomor Sudah Terdaftar Silahkan Login \n"); goto otp;}
        $url_otp = 'https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP='.$nohp;
        $hasil_otp = get_noheader($url_otp,$header_toko);
        echo color("green","| Kode verifikasi sudah di kirim")."\n";
        otpverif:
        echo color("yellow","| OTP : ");
        $input_hp = fopen("php://stdin","r");
        $OTP = trim(fgets($input_hp));
        if($OTP == "gagal"){die;}
        $url_hp = 'https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP='.$nohp.'&otpCode='.$OTP;
        $hasil_otp2 = get_noheader($url_hp,$header_toko);
        $hasil_otp2 = json_decode($hasil_otp2, true);
        $code = $hasil_otp2['0']['ResponseCode'];
        $hasil_otp2 = $hasil_otp2['0']['Message'];
        
        if ($hasil_otp2 == "Kode OTP sudah expired." || $hasil_otp2 == "Kode OTP salah." ){ echo color("red","| $hasil_otp2 \n"); goto otpverif;}elseif($code == "500"){

            echo color("white","| $hasil_otp2 \n"); 
            die;
        }else {echo color("green","| $hasil_otp2 \n"); }
        sleep(1);
        $nohp = "\"$nohp\"";



        $random_name = "$ar2"." ".substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
        $random_name2 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        $random_name = "\"$random_name\"";
        $random_name2 = "\"$random_name2\"";

        $password = "$ar1";
        $password = "\"$password\"";
        $url_post = 'https://api.klikindomaret.com//api/Customer/Registration?districtID=2483&mfp_id=1';
        $data_post = '{"nomor":"","isVaildPhoneNo":false,"messageError":"","Mobile":'.$nohp.',"Email":null,"FName":'.$random_name.',"LName":'.$random_name2.',"Password":'.$password.',"ConfirmPassword":'.$password.',"IsConfirmed":true,"valueDate":"","isLoading":false,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":0,"IsNewsLetterSubscriber":0,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"2003-01-14T00:00:00.000Z","Gender":"Pria","DateOfBirthStringFormatted":"2003-01-14","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0,"IsNewAccount":true,"Origin":"Registrasi Website"}';
        $hasil_post = login($url_post,$headers,$data_post);
        $hasil_post = json_decode($hasil_post,true);
        $pesan_daftar = $hasil_post['Message'];
        if ($pesan_daftar == "Success"){
            echo color("green","| Sukses Daftar : $nohp | $password \n");
            $file = fopen("nomer.txt","a");
            fwrite($file,"$nohp : $password".PHP_EOL);
            fclose($file);
            goto welcome;
        }else{ echo "$pesan_daftar \n"; die;}


}elseif($inputan == "3"){ //Cek_Stock
    
    echo color("yellow","| Daerah Kota/Kabupaten: ");
    $input_hp = fopen("php://stdin","r");
    $kata_kunci = trim(fgets($input_hp));
    $nomer = 0;
    $url = "https://www.klikindomaret.com/checkout/getlistautocompletestore";
    $data = 'StoreCode='.$kata_kunci.'&customerLatitude=0&customerLongitude=0';
    $login = sate_ayam($url, ['Content-Type: application/x-www-form-urlencoded'],$data);
    $data = json_decode($login,true);
    print_r($data);
    echo PHP_EOL;
    for($a=0; $a < count($data); $a++ )
   {
    $nomer++;
    $str = str_replace(["\n","\r"],"",$data[$a]['label']);
    echo color("yellow","| $nomer | ".$str."\n");}
    goto welcome;
}elseif($inputan == "4"){
    konfig:
    if(file_exists("config.json")){
    $arr2 = json_decode(file_get_contents('config.json'), true);
    $ar2 = $arr2['name'];
    $ar1 = $arr2['password'];
    echo color("nevy","| Nama Sebelumnnya : $ar2 \n");
    echo color("blue","| Masukan nama baru : ");
    $nama = trim(fgets(STDIN));
    echo color("nevy","| Password Sebelumnya : $ar1 \n");
    echo color("blue","| Masukan password baru : ");
    $password = trim(fgets(STDIN));
    $arr1 = ["name"=>$nama,"password"=>$password];
    file_put_contents("config.json",json_encode($arr1));
    echo color("green","| Perubahan sukses silahkan Lanjut daftar");
    }else{
    echo color("blue","| Masukan nama baru : ");
    $nama = trim(fgets(STDIN));
    echo color("blue","| Masukan password baru : ");
    $password = trim(fgets(STDIN));
    $arr1 = ["name"=>$nama,"password"=>$password];
    file_put_contents("config.json",json_encode($arr1));
    echo color("green","| Perubahan sukses silahkan Lanjut daftar");}
    goto welcome;
}elseif($inputan == "die"){die;}
elseif($inputan == "5"){
goto welcome;
}elseif($inputan == "6"){
    

    /* FUNGSI INI BIARKAN SAJA
    SUPAYA TIDAK EROR BOSSKU
    
    */

    
//Script php
$url_login = "https://edtsapp.indomaretpoinku.com/login/api/open/login-sms";
$url_otp = "https://edtsapp.indomaretpoinku.com/login/api/open/login-verification-sms";
$url_get_data_customer = "https://edtsapp.indomaretpoinku.com/customer/api/mobile/get-data-customer";
$url_token = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem";
$url_redem = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true";
$url_ceker = "https://edtsapp.indomaretpoinku.com/login/api/open/pin/check-device";

$herder = [
    'Content-Type: application/json',
];
$header = [
    'Content-Type: application/json',
    'user-agent: okhttp/4.9.0',
];
///////////////////////////////////
echo "".PHP_EOL;
echo "       __    EEEK! Males Ngoding GUE!".PHP_EOL;
echo "      /  \   ~~|~~ ".PHP_EOL;
echo "     (|00|)    |".PHP_EOL;
echo "      (==)  --/".PHP_EOL;
echo "    ___||___  ".PHP_EOL;
echo "   / _ .. _ \ ".PHP_EOL;
echo "  //  |  |  \\ Indomaret Pointku V.1.9 (SPECIAL OTP)".PHP_EOL;
echo " //   |  |   \\ Hargai Developernya dong!! (JANGAN SEBAR SCRIPT INI)".PHP_EOL;
echo " ||  / /\ \  || ".PHP_EOL;
echo "_|| _| || |_ ||_  -Arie-".PHP_EOL;
echo "\|||___||___|||/ ".PHP_EOL;
echo "".PHP_EOL;
echo "".PHP_EOL;
// goto pin_asu;

echo "Masukan Nomer Hpnya: ";
$input_hp = fopen("php://stdin","r");
$no_hp = trim(fgets($input_hp));
$phone = "\"$no_hp\"";
/////////////////////////////////
////////////////////////////////
$data_login = '{"deviceId":'.$idhp.',"phoneNumber":'.$phone.'}';


$hasil_login = sate_ayam($url_login, $header, $data_login);
$pesan_login = json_decode($hasil_login, true);
$pesan_login_1 = $pesan_login['message'];
echo "| Pesan : $pesan_login_1".PHP_EOL;
if ($pesan_login_1 == "Phone Number not valid"){die;}
// $member = $pesan_login['data']['id'];
// if ($member =='0'){
//     echo "Akun ini fresh loading otp bossku!".PHP_EOL;
//     $kondisi = "sukses";
// }elseif($member !== '0'){echo "Akun Lama bossku coba lagi".PHP_EOL;
//     $kondisi = "gagal"; die;
// }
// $pesan_login = $pesan_login['message'];
// echo "Pesan : $pesan_login".PHP_EOL;
// if ($pesan_login == "Phone Number not valid"){die;}
////////////////////////////////////////
echo "| 1. OTP SMS".PHP_EOL;
echo "| OTP WA SEDANG DIMATIKAN!".PHP_EOL;
echo "| 4. Untuk exit".PHP_EOL;
echo "Pilih : ";
$inputan = fopen("php://stdin","r");
$pilih = trim(fgets($inputan));
if ($pilih == "1"){
    $x = 0;
    do {
    $otp = input_otp();
    // $data_otp = '{"deviceId":'.$idhp.',"otp":'.$otp.',"phoneNumber":'.$phone.'}';
    $data_otp = '{"phoneNumber":'.$phone.',"otp":'.$otp.',"deviceId":'.$idhp.'}';
    $hasil_otp = sate_ayam($url_otp, $herder, $data_otp);
    if(empty($hasil_otp)){ echo "kosong";die;}
    $minta_token = json_decode($hasil_otp, true);
    $status = $minta_token['status'];
    echo "| Pesan ",$minta_token['message'].PHP_EOL;
    if ($status == '00' ){$x = 4;}elseif($otp == 'exit'){die;}{$x++;}
    }while ($x < 3 );



    $token = $minta_token['data']['access_token'];

    //fungsi cek User baru dan validasi tokennya
            $headers = [
                'Authorization: Bearer '.$token,
            ];
            $get_customer = dapet($url_get_data_customer,$headers);
            $get_customer = json_decode($get_customer,true);
            $cek_user = $get_customer['data']['isNewRegister'];
            $useraid = $get_customer['data']['id'];

    if (empty($cek_user)){ 
        echo "| Anda login menggunakan akun lama".PHP_EOL;
    }else {
        echo "| Anda login menggunakan akun BARU".PHP_EOL;
    }
}if($pilih == "4"){die;};
$headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json' ];
$data_fcm = '{"userId":'.$useraid.',"deviceType":"01","deviceId":'.$idhp.',"fcmToken":"eth5TTJ5TsSbruZrMhhJPz:APA91bHeS2YrDnbC6knb7QbZQCSFzwvKnFExEBawlHVIzFuGC70aHMdqDkX-VYNtYRsSWct6kxI8wbhVWG5xjhgWUoNgWC50Vte6-bg8ZkUIN-392wTkV0wnT5I8_exlchvF5Or-dB2D"}';
$fcmcek = sate_ayam('https://edtsapp.indomaretpoinku.com/notification/api/push-notifications/fcm-registration',$headers,$data_fcm);
if ($fcmcek !== false){
    $fcm = json_decode($fcmcek,true);
    $pesan = $fcm['message'];
    echo "| FCM : $pesan \n";
}
//CEK PIN
pin_asu:
//$token ='eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICI2OFMwalUzbGdFaU1zbzFWRDgzRHhhdEk3blkxLU9WR1dQSVI4d0F2MVgwIn0.eyJleHAiOjE2NjUwNTgwMjQsImlhdCI6MTYzMzUyMjAyNCwianRpIjoiY2VmMDBjNDUtODBjMi00M2I2LTlkNGUtODc4OTkzZTJhOWVlIiwiaXNzIjoiaHR0cDovL2tleWNsb2FrLmtleWNsb2FrLWhhL2F1dGgvcmVhbG1zL2lkbS1hcHAiLCJhdWQiOiJhY2NvdW50Iiwic3ViIjoiZTYxM2JkYjQtYTQyYi00ZjNmLWJjZjctMjM2OTc4NmRlMjdhIiwidHlwIjoiQmVhcmVyIiwiYXpwIjoiaWRtLWJvIiwic2Vzc2lvbl9zdGF0ZSI6Ijg0OTk5ZWJhLTgyZjUtNGMwYi05OWYzLTE3MDlhZTAwY2U5NyIsImFjciI6IjEiLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsiZGVmYXVsdC1yb2xlcy1pZG0tYXBwIiwib2ZmbGluZV9hY2Nlc3MiLCJ1bWFfYXV0aG9yaXphdGlvbiJdfSwicmVzb3VyY2VfYWNjZXNzIjp7ImFjY291bnQiOnsicm9sZXMiOlsibWFuYWdlLWFjY291bnQiLCJtYW5hZ2UtYWNjb3VudC1saW5rcyIsInZpZXctcHJvZmlsZSJdfX0sInNjb3BlIjoiZW1haWwgcHJvZmlsZSBtb2JpbGUiLCJzaWQiOiI4NDk5OWViYS04MmY1LTRjMGItOTlmMy0xNzA5YWUwMGNlOTciLCJlbWFpbF92ZXJpZmllZCI6ZmFsc2UsImlkIjo5NDIwOTE4LCJwcmVmZXJyZWRfdXNlcm5hbWUiOiIwODU3ODI5NDY5Njg6OjFkMjZlMWY1YmQ4NzBlNjNmZTBjNGE2OTU5ZWJlMjM3In0.UoRi5fypG-DpfeoL_dbMMNnoDEZMcLjoC7ShbyQ3S0hBrDVviW8LGSiOymqqq5ce45cCU7qJWrpy1vomR7OrA4zTLC5A-GaXwkMV2PsNaeP5CV4mQtWqFyZqVFSOvyDZRCDgrmuzAdwRd5BtUVCRdWBfaCoLrAOAWJLkOlw2QayrGCzvM9Sby8brw199smo8IjhZAWzGzjtui3WiG2dbdWqsX-confv3uRsfXyZu0h-bVmvZRtN5Tr81ZY37JZQzkKbGOlG90pHJOHLYIad9gBg_WC2Ue6xEKE3qo0UR5H_8wspEn69dPDquEh_fMByEXUQ34dpHWFhE0PYdyPH5WQ';
$header_token = [
    'Authorization: Bearer '.$token,
    'Content-Type: application/json',
];
$data_pin = '{"phoneNumber":'.$phone.',"deviceId":'.$idhp.'}';
$check_device = json_decode(sate_ayam($url_ceker,$header_token,$data_pin),true);
if ($check_device['data'] !== true){
    echo "| error"; die;}

$check_data = json_decode(dapet('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/skip-module/tr-skip-module',$header_token),true);
$url_cek_pin = 'https://edtsapp.indomaretpoinku.com/login/api/open/pin/is-pin-exist-by-phone-number';
$cekpin = sate_ayam($url_cek_pin,$header_token,$data_pin);
$cekpin = json_decode($cekpin,true);
//Buat PIN!!!!!
if ($cekpin['data'] !== true){
    create_pin:
    $create_pin = json_decode(create_pin1($token),true);
    if ($create_pin['status'] == "00"){
        echo "| Sukses membuat PIN : 123123 \n";
    }elseif ($create_pin['status'] == "03"){
        echo "| $create_pin";
    }else{
        echo "Ulang? ";
        $inputan = fopen("php://stdin","r");
        $pilih = trim(fgets($inputan));
        if($pilih == "y"){goto create_pin;}
        die;
    }
}else{
    validate_pin:
    echo "| Masukan Kode PIN: ";
    $inputan = fopen("php://stdin","r");
    $kode_pin = trim(fgets($inputan));
    if( strlen($kode_pin) == "6") {
        echo "| Berhasil! \n";}else{goto validate_pin;} 
        $kode_pin = "\"$kode_pin\"";
    // $data_pin_valid = '{"phoneNumber":'.$phone.',"deviceId":'.$idhp.',"pinCode":'.$kode_pin.'}';
    // $data_pin_valid ='{"phoneNumber":"085782946968","deviceId":"1d26e1f5bd870e63fe0c4a6959ebe237","pinCode":"123456"}';
    // print_r($token);
    $valid_pin = json_decode(sate_ayam1($token,$phone,$idhp,$kode_pin),true);
        if ($valid_pin['status'] !== "00"){
            echo "| Pin salah/Pin salah melebihi batas \n";
            goto validate_pin;
        }
        $token = $valid_pin['data']['access_token'];
}

    $header_token = [
        'user-agent: okhttp/4.9.0',
        'Authorization: Bearer '.$token,
        'Content-Type: application/json',
    ];
        cekref:

        kodereff:
        echo "| Masukan Kode REFF TOKO (contoh: FTPX/T699): ";
        $inputan = fopen("php://stdin","r");
        $kode_toko = strtoupper(trim(fgets($inputan)));
        if( strlen($kode_toko) == "4") {
            echo "| Berhasil! \n";}else{goto kodereff;} 
        $kode_toko = "\"$kode_toko\"";
        $data_token = '{"couponPromoCode":'.$kode_toko.'}';
        $hasil_token = sate_ayam($url_token, $header_token, $data_token);
        print_r($hasil_token);
        $minta_data = json_decode($hasil_token, true);
        $minta_data = $minta_data['data']['content']['0']['couponName'];
        echo "$minta_data".PHP_EOL;


/* ------------------------------------------------------------------------------------- */


/* ======================================================================================== */



$headers = [
    'Authorization: Bearer '.$token,
];

$voucher = dapet($url_redem, $headers);
$hasil_voucher = json_decode($voucher, true);

/* MULAI DARI SINI BRO */
//
$data = $hasil_voucher['data']['content'];
if ($data == null){
    echo "| delay : 1 (Menunda 3 detik)".PHP_EOL;
sleep(3);
$voucher = dapet($url_redem, $headers);
$hasil_voucher = json_decode($voucher, true);
}

$data = $hasil_voucher['data']['content'];
if ($data == null){
    echo "| delay : 2 (Menunda 10 detik lagi)".PHP_EOL;
    sleep(10);
    $voucher = dapet($url_redem, $headers);
    $hasil_voucher = json_decode($voucher, true);
}

$data = $hasil_voucher['data']['content'];
if ($data == null){
echo "| Voucher DELAY tunggu 1 menit lalu login kembali".PHP_EOL;
die;
}
$file = fopen("kupon.txt","a");  
fwrite($file,"--------------------------------------------------------".PHP_EOL);
foreach ($hasil_voucher['data']['content'] as $key){
    
    $kupon_0 = $key;
    $kupon_0 = [
        
        $kupon_0['couponCode'], 
        $kupon_0['couponName'],
        $kupon_0['expiredDate'],
    ];
    $kupon_0 = implode(" | ", $kupon_0);
    echo "$kupon_0 \n";
    fwrite($file,"$kupon_0".PHP_EOL);
}
fwrite($file,"========================================================".PHP_EOL);
fwrite($file,"Nomor HP : $phone".PHP_EOL);
fwrite($file,"========================================================".PHP_EOL);
fwrite($file,"--------------------------------------------------------".PHP_EOL);  
fclose($file);  
echo 'KUPON SUKSES DIAMBIL BOSS!!!'.PHP_EOL;
echo 'Untuk melihat Kupon ketik cat kupon.txt'.PHP_EOL;
goto welcome;


}elseif($inputan == "exit"){die;}else{echo color("red","| Inputan anda salah!!! \n"); goto welcome;}






