<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        
        $sql2 = "select microsite_detail.latitude,microsite_detail.longitude,microsite_detail.about as aa, prop_status.status,prop_type.type, microsite.micro_id,microsite.location,microsite.name,microsite_detail.featured_image, microsite_detail.builder_id ,microsite_detail.rooms, builder.logo as logo, builder.name as builder_name from microsite
        left join microsite_detail on microsite.micro_id=microsite_detail.micro_id
        LEFT JOIN builder on microsite_detail.builder_id =builder.builder_id
        LEFT JOIN prop_status ON prop_status.status_id=microsite_detail.status_id
        LEFT JOIN prop_type on prop_type.type_id=microsite_detail.type_id

        order by microsite.micro_id DESC limit 24 "; //featured project
        $data['data'] = DB::select($sql2);
		
		
		/*Home Slider Start*/
		
		$sql = "select microsite_detail.slider_image as sliderimage,microsite.name,microsite_detail.about,microsite_detail.micro_id from microsite_detail,microsite WHERE microsite_detail.micro_id = microsite.micro_id ORDER by microsite_detail.micro_id DESC LIMIT 3"; 
		
        $slider  = DB::select($sql);		
		
		//$slider = array();
		
		/*$slidercount = count($slider);
		
		$t = 0;
		
		while ($t < $slidercount){
			
			$path = explode(",", $slider[$t] -> sliderimage);
			//var_dump($path);
			
			//$i = count($path);
			
			$file_path = 'http://www.mylandmark.info/admin/images/slider/';
			
			//for ($j = 0; $j < $i; $j++) {
				
				$imagdata ="select image_name from image_data where img_id= " . $path[0];
				
				$resultimage = DB::select($imagdata);
				
				array_push($slider, $resultimage);
				
				//var_dump($resultimage);
				
			//}
			$t++;
		}*/
		/* Home Slider End  */
				
		$sql3="SELECT DISTINCT `location` FROM `microsite_detail` order by  `location`  ASC "; 
		
        $address['address'] =  DB::select($sql3); //Select2 options
		
		return view('home', [ 'data'=>$data['data'] , 'address'=>$address['address'] , 'slider'=>$slider ]);
    }
    public function searchresult()
    {
		$input = request()->all();
		
		//var_dump($input);
		//die();
		$location 		= $input['location'];
		$proj_cat 		= $input['proj_cat'];
		$property_type 	= $input['property_type'];
		if($input["min_p"]!= NULL && $input["max_p"]!=NULL) {
                $min_price=$input["min_p"];
                $max_price=$input["max_p"];
                $q=" AND price.basic_cost>$min_price AND price.basic_cost<$max_price";
                }else {
                  $q="";   
                }
		$locationcount = count($location);

        $address = array();
		
		foreach ($location as $a => $value) {
			$sql="select microsite_detail.latitude,microsite_detail.longitude,microsite_detail.about as aa, prop_status.status,prop_type.type, microsite.micro_id,microsite.location,microsite.name,microsite_detail.featured_image, microsite_detail.builder_id ,microsite_detail.rooms, builder.logo as logo, builder.name as builder_name from microsite left join microsite_detail on microsite.micro_id=microsite_detail.micro_id LEFT JOIN builder on microsite_detail.builder_id =builder.builder_id LEFT JOIN prop_status ON prop_status.status_id=microsite_detail.status_id LEFT JOIN prop_type on prop_type.type_id=microsite_detail.type_id LEFT JOIN price ON price.micro_id=microsite.micro_id where microsite.`location`='$value' AND  prop_status.status='$property_type' AND prop_type.type='$proj_cat' $q";//featured project
			//var_dump($sql);
			//$address['address'] =  DB::select($sql);
            $res = DB::select($sql);
            array_push($address, $res);
		}
		//var_dump($address);
		
		return view('searchresult', ['address'=>$address]);
    }
	
	public function blog()
    {
        
        $blog =DB::table('blog')->paginate(5);
		return view('blog',['blog'=>$blog]);
    }
	
	function blogs($id)
	{
		
		$name=str_replace('-', ' ', $id);
        $blogs =DB::table('blog')->where("name","=", $name)->get();
		//var_dump($data);
		return view('blogs',['blogs'=>$blogs]);
		
	}
	
	function footer()
	{
		
		$blog =DB::table('blog')->paginate(5);
		//var_dump($blog);
		return view('footer',['blogfooter'=>$blog]);
		
	}
	
    public function projects($id)
    {
        //var_dump($id);
        $name=str_replace('-', ' ', $id);
       // die();
        $sql2="select  microsite.possession, microsite.no_of_units, microsite.total_area, microsite.sub_location, microsite_detail.am_id,microsite_detail.bank_id,microsite_detail.legal_id,
        microsite_detail.masterplan_image, microsite_detail.address, microsite_detail.slider_image,microsite_detail.gallery_image, microsite_detail.latitude,microsite_detail.longitude,microsite_detail.about , prop_status.status,prop_type.type, microsite.micro_id,microsite.location,microsite.name,microsite_detail.featured_image, microsite_detail.builder_id ,microsite_detail.rooms, builder.logo as logo, builder.name as builder_name from microsite
        left join microsite_detail on microsite.micro_id=microsite_detail.micro_id 
        LEFT JOIN builder on microsite_detail.builder_id =builder.builder_id 
        LEFT JOIN prop_status ON prop_status.status_id=microsite_detail.status_id
        LEFT JOIN prop_type on prop_type.type_id=microsite_detail.type_id
       where microsite.name='$name'
        order by microsite.micro_id ";//featured project
        $data['data'] =  DB::select($sql2);
        return view('projects', $data);
    }
    public function about()
    {
       
       
        return view('about');
    }

    public function dataAjax(Request $request)
    {

        $data = [];


        if ($request->has('q')) {
            $search = $request->q;

            $sql2="select  microsite.micro_id as id,microsite.name from microsite
        where `name` 'LIKE',"%$search%")
        order by microsite.micro_id ";//featured project
            $data['data'] =  DB::select($sql2);
        }
        return response()->json($data);
    }

    public function buy()
    {		
        return view('buy');
    }
	
	public function buyPost()
    {		
		$input = request()->all();
		//var_dump($input);
		$name				=  $input['name'];
        $emailVal 			=  $input['email'];
        $phone 				=  $input['phone'];
        $timetocontact 		=  $input['timetocontact'];
        $location	 		=  $input['location'];
        $budget 			=  $input['budget'];
        $purpose 			=  $input['purpose'];
        $homelocan 			=  $input['homelocan'];
        $possession			=  $input['possession'];
        $decision			=  $input['decision'];
		$response 			=  $input['g-recaptcha-response'];
        
		if($name == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
		}		
		if($phone == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
		}
		if($emailVal == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Email id</h5>']);
		}
		if($timetocontact == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Preferred Time to Contact</h5>']);
		}
		if($location == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Location/Project Name</h5>']);
		}
		if($budget == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Budget</h5>']);
		}		
		if($response == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
		}
			
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
		$data = array('secret' => $key, 'response' => $response);
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => "POST",
				'content' => http_build_query($data),
			),
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === false) {
			echo 'Failed to contact reCAPTCHA';
		} else {
			$result = json_decode($result);
			if ($result->success) {
		
		
		$message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
		
		<tr align="center">
			<td colspan="3" style="text-align:center;">
				<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
			</td>	
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
        </tr>
        <tr style="">
			<th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
			<td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
        </tr>
        <tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$phone.'</td>
        </tr>		
        <tr>
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Preferred Time to Contact <span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$timetocontact.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Location/Project Name<span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$location.'</td>
        </tr>
		<tr>
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Location/Project Name<span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$location.'</td>
        </tr>		
        <tr style="background-color:#f5f5f5">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Budget <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$budget.'</td>
        </tr>
		<tr style="">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Purpose <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$purpose.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Home Loan <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$homelocan.'</td>
        </tr>
		<tr style="">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Possession <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$possession.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Decision Making Time <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$decision.'</td>
        </tr>
		
		</table>';
		
		

        Mail::send('emails.sent', ['content' => $message], function ($message) {
            $message->from('noreply@realtyfocus.info', 'Realty Focus');
            $message->subject("Enquiry from Buy Property Realty Focus");
            $message->to('ravi.k@imsolutions.mobi');
        });
		//dd(Mail::failures());
        return response()->json(['success'=>'<h5 style="color:green;">Mail Sent Successfully</h5>']);
		}else{
				$error = true;
				return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
			}
		}
    }
	
	public function sell()
    {
        return view('sell');
    }
	public function sellPost()
    {
		$input = request()->all();
		//var_dump($input);
		$name				=  $input['name'];
        $emailVal 			=  $input['email'];
        $phone 				=  $input['phone'];
        $timetocontact 		=  $input['timetocontact'];
        $location	 		=  $input['location'];
        $unitno 			=  $input['unitno'];
        $p_age 				=  $input['p_age'];
        $size				=  $input['size'];
        $price				=  $input['price'];
        $resident			=  $input['resident'];
        $decision			=  $input['decision'];
        $info				=  $input['info'];
		$response 			=  $input['g-recaptcha-response'];
		
		if($name == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
		}		
		if($phone == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
		}
		if($emailVal == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Email id</h5>']);
		}
		if($timetocontact == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Preferred Time to Contact</h5>']);
		}
		if($location == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Location/Project Name</h5>']);
		}
		if($unitno == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Unit No.</h5>']);
		}
		if($p_age == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Property Age</h5>']);
		}		
		if($size == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter size</h5>']);
		}		
		if($price == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Expected Price</h5>']);
		}		
		if($info == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Aditional Info</h5>']);
		}		
		if($response == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
		}
			
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
		$data = array('secret' => $key, 'response' => $response);
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => "POST",
				'content' => http_build_query($data),
			),
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === false) {
			echo 'Failed to contact reCAPTCHA';
		} else {
			$result = json_decode($result);
			if ($result->success) {
		
		
        $message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
		
		<tr align="center">
			<td colspan="3" style="text-align:center;">
				<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
			</td>	
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
        </tr>
        <tr style="">
			<th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
			<td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
        </tr>
        <tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$phone.'</td>
        </tr>		
        <tr>
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Preferred Time to Contact <span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$timetocontact.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Location/Project Name<span style="color:red">*</span></th>
			<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$location.'</td>
        </tr>
		<tr style="">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Unit No. <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$unitno.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Property Age <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$p_age.'</td>
        </tr>
		<tr style="">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Size <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$size.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Expected Price <span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$price.'</td>
        </tr>
		<tr style="">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Seller Resident<span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$resident.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Decision Making Time<span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$decision.'</td>
        </tr>
		<tr style="background-color:#f5f5f5">
			<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Aditional Info<span style="color:red">*</span></th>
			<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$info.'</td>
        </tr>
		
		</table>';
		
		
		Mail::send('emails.sent', ['content' => $message], function ($message) {
            $message->from('noreply@realtyfocus.info', 'Realty Focus');
            $message->subject("Enquiry from Sell Property Realty Focus");
            $message->to('ravi.k@imsolutions.mobi');
        });
		//dd(Mail::failures());
        return response()->json(['success'=>'<h5 style="color:green;">Mail Sent Successfully</h5>']);
		}else{
				$error = true;
				return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
			}
		}
    }
    public function rent()
    {
        return view('rent');
    }
    public function rentPost()
    {
		$input = request()->all();
		//var_dump($input);
//return response()->json(['success'=>$input['form']]);		
		
		if($input['form'] =='form1'){
			//var_dump($input);
			$name				=  $input['name'];
			$emailVal 			=  $input['email'];
			$phone 				=  $input['phone'];
			$location	 		=  $input['location'];
			$rent	 			=  $input['rent'];
			$p_age 				=  $input['p_age'];
			$size				=  $input['size'];
			$resident			=  $input['resident'];
			$decison			=  $input['decison'];
			$info				=  $input['info'];		
			$response 			=  $input['g-recaptcha-response'];
			
			if($name == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
			}		
			if($phone == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
			}
			if($emailVal == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Email id</h5>']);
			}
			if($location == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Location/Project Name</h5>']);
			}
			if($size == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter size</h5>']);
			}
			if($rent == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Expected Rent</h5>']);
			}
			if($p_age == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Property Age</h5>']);
			}		
			if($info == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Aditional Info</h5>']);
			}		
			if($response == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
			}
			
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
			$data = array('secret' => $key, 'response' => $response);
			$options = array(
				'http' => array(
					'header' => "Content-type: application/x-www-form-urlencoded\r\n",
					'method' => "POST",
					'content' => http_build_query($data),
				),
			);
			$context = stream_context_create($options);
			$result = file_get_contents($url, false, $context);
			if ($result === false) {
				echo 'Failed to contact reCAPTCHA';
			} else {
				$result = json_decode($result);
				if ($result->success) {

			$message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
			
			<tr align="center">
				<td colspan="3" style="text-align:center;">
					<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
				</td>	
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
				<td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$phone.'</td>
			</tr>		
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Location/Project Name<span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$location.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Rent <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$rent.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Property Age <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$p_age.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Size <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$size.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Seller Resident<span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$resident.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Decision Making Time<span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$decison.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Aditional Info<span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$info.'</td>
			</tr>
			
			</table>';
		
			Mail::send('emails.sent', ['content' => $message], function ($message) {
				$message->from('noreply@realtyfocus.info', 'Realty Focus');
				$message->subject("Enquiry from Rent Out Property Realty Focus");
				$message->to('ravi.k@imsolutions.mobi');
			});
			//dd(Mail::failures());
			return response()->json(['success'=>'<h5 style="color:green;">Mail Sent Successfully</h5>']);
			}else{
					$error = true;
					return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
				}
			}
		}
		else if($input['form'] =='form2'){
			
			$name				=  $input['name'];
			$emailVal 			=  $input['email'];
			$phone 				=  $input['phone'];
			$timetocontact 		=  $input['timetocontact'];
			$location	 		=  $input['location'];
			$budget 			=  $input['budget'];
			$type				=  $input['type'];
			$info				=  $input['info'];
			$response 			=  $input['g-recaptcha-response'];
			
			if($name == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
			}		
			if($phone == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
			}
			if($emailVal == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Email id</h5>']);
			}
			if($timetocontact == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Preferred Time to Contact</h5>']);
			}
			if($location == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Location/Project Name</h5>']);
			}
			if($budget == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Budget</h5>']);
			}
			if($info == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Enter Aditional Info</h5>']);
			}		
			if($response == ""){
				return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
			}
			
			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
			$data = array('secret' => $key, 'response' => $response);
			$options = array(
				'http' => array(
					'header' => "Content-type: application/x-www-form-urlencoded\r\n",
					'method' => "POST",
					'content' => http_build_query($data),
				),
			);
			$context = stream_context_create($options);
			$result = file_get_contents($url, false, $context);
			if ($result === false) {
				echo 'Failed to contact reCAPTCHA';
			} else {
				$result = json_decode($result);
				if ($result->success) {
			
			$message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
			
			<tr align="center">
				<td colspan="3" style="text-align:center;">
					<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
				</td>	
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
				<td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$phone.'</td>
			</tr>		
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Preferred Time to Contact <span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$timetocontact.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Location/Project Name<span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$location.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Budget <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$budget.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Type <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$type.'</td>
			</tr>
			<tr style="">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Aditional Info<span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$info.'</td>
			</tr>
			
			</table>';
			
			Mail::send('emails.sent', ['content' => $message], function ($message) {
				$message->from('noreply@realtyfocus.info', 'Realty Focus');
				$message->subject("Enquiry from Rent In Property Realty Focus");
				$message->to('ravi.k@imsolutions.mobi');
			});
			//dd(Mail::failures());
			return response()->json(['success'=>'<h5 style="color:green;">Mail Sent Successfully</h5>']);
			}else{
					$error = true;
					return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
				}
			}
		}
    }
    
    public function contact()
    {
        return view('contact');
    }
	public function contactPost()
    {	
		$input = request()->all();
		$name				=  $input['name'];
		$emailVal 			=  $input['email'];
		$phone 				=  $input['phone'];
		$isd 				=  $input['isd'];
		$msg				=  $input['msg'];
		$response 			= $input['g-recaptcha-response'];
		
		if($name == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
		}
		if($emailVal == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Email</h5>']);
		}
		if($phone == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
		}
		if($msg == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter message</h5>']);
		}
		if($response == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
		}
		
		
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
		$data = array('secret' => $key, 'response' => $response);
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => "POST",
				'content' => http_build_query($data),
			),
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === false) {
			echo 'Failed to contact reCAPTCHA';
		} else {
			$result = json_decode($result);
			if ($result->success) {

				$message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
				
				<tr align="center">
					<td colspan="3" style="text-align:center;">
						<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
					</td>	
				</tr>
				<tr style="background-color:#f5f5f5">
					<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
					<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
				</tr>
				<tr style="">
					<th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
					<td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
				</tr>
				<tr style="background-color:#f5f5f5">
					<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
					<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$isd.'-'.$phone.'</td>
				</tr>
				<tr style="">
					<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Message Info<span style="color:red">*</span></th>
					<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$msg.'</td>
				</tr>
				
				</table>';
				Mail::send('emails.sent', ['content' => $message], function ($message) {
					$message->from('noreply@realtyfocus.info', 'Realty Focus');
					$message->subject("Enquiry from Contact Page Realty Focus");
					$message->to('ravi.k@imsolutions.mobi');
				});
				//dd(Mail::failures());
				return response()->json(['success'=>'<h5 style="color:green;">Mail Sent Successfully</h5>']);
			} else {
				$error = true;
				return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
			}

		}
    }
   
    public function project()
    {
        $data =DB::table('microsite')->select(
            'microsite.possession',
            'microsite.no_of_units',
            'microsite.total_area',
            'microsite.sub_location',
            'microsite_detail.am_id',
            'microsite_detail.bank_id',
            'microsite_detail.legal_id',
            'microsite_detail.masterplan_image',
            'microsite_detail.address',
            'microsite_detail.slider_image',
            'microsite_detail.gallery_image',
            'microsite_detail.latitude',
            'microsite_detail.longitude',
            'microsite_detail.about',
            'prop_status.status',
            'prop_type.type',
            'microsite.micro_id',
            'microsite.location',
            'microsite.name',
            'microsite_detail.featured_image',
            'microsite_detail.builder_id',
            'microsite_detail.rooms',
            'builder.logo as logo',
            'builder.name as builder_name'
        )->join('microsite_detail', 'microsite.micro_id', '=', 'microsite_detail.micro_id')
            ->join('builder', 'microsite_detail.builder_id', '=', 'builder.builder_id')
            ->join('prop_status', 'prop_status.status_id', '=', 'microsite_detail.status_id')
            ->join('prop_type', 'prop_type.type_id', '=', 'microsite_detail.type_id')->paginate(8);
       
       
        return view('project', ['data'=>$data]);
    }
	public function projectsPost()
    {
		$input 				=  request()->all();
		$name				=  $input['name'];
        $email 				=  $input['email'];
        $phone 				=  $input['phone'];
        $project_name		=  $input['project_name'];
        $msg				=  $input['msg'];		
		$response 			=  $input['g-recaptcha-response'];	
		
		
		
		if($name == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Name</h5>']);
		}
		if($email == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Email</h5>']);
		}
		if($phone == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter Phone no.</h5>']);
		}
		if($msg == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Enter message</h5>']);
		}
		if($response == ""){
			return response()->json(['error'=>'<h5 style="color:red;">Select Captcha</h5>']);
		}
		
		
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$key = '6LevorwUAAAAAOBCtlLGNuA8UkrYURwUwOsx4hrd';
		$data = array('secret' => $key, 'response' => $response);
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => "POST",
				'content' => http_build_query($data),
			),
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === false) {
			echo 'Failed to contact reCAPTCHA';
		} else {
			$result = json_decode($result);
			if ($result->success) {		

			$message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">
			
			<tr align="center">
				<td colspan="3" style="text-align:center;">
					<img src="http://demo.imsolutions.in/realtyfocus/public/images/logo-dark.png">
				</td>	
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
			</tr>
			<tr>
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email<span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$email.'</td>
			</tr>
			<tr style="background-color:#f5f5f5">
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
				<td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$phone.'</td>
			</tr>
			<tr>
				<th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Message<span style="color:red">*</span></th>
				<td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$msg.'</td>
			</tr>
			
			</table>';
			
			

			Mail::send('emails.sent', ['content' => $message], function ($message) {
				$message->from('noreply@realtyfocus.info', 'Realty Focus');
				$message->subject("Enquiry from  Realty Focus");
				$message->to('ravi.k@imsolutions.mobi');
			});
				//dd(Mail::failures());
				return response()->json(['success'=>'<h5 style="color:black;">Mail Sent Successfully</h5>']);
		   }else{
					$error = true;
					return response()->json(['error'=>'<h5 style="color:red;">You are spammer</h5>']);
				}
			}
    }
	public function builder()
    {
        $data =DB::table('builder')->paginate(5);
		//var_dump($data);
		//$data = Builder::paginate(5);
		return view('builder',['data'=>$data]);
		//return view('builders',($data)); 
        
    }    
    
    function builders($id)
	{
		
		$name=str_replace('-', ' ', $id);
        $data =DB::table('builder')->where("name","=", $name)->get();
		//var_dump($data);
		return view('builders',['data'=>$data]);
		
	}
    public function sendMail(Request $request)
    {
        
        $name =  $request->input('name');
        $emailVal =  $request->input('email');
        $ccode =  $request->input('ccode');
        $phone =  $request->input('phone');
        $comments =  $request->input('comments');

        $message='<table cellspacing="0" cellpadding="0" style="width:100%; border-bottom:1px solid #eee; font-size:12px; line-height:135%">

		<tr style="background-color:#f5f5f5">
                <th style="vertical-align:top ;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Name <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$name.'</td>
        </tr>
        <tr style="">
                <th style="vertical-align: top;color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Email <span style="color:red">*</span></th>
                        <td style="vertical-align:top;color:#333;width:60%;padding:7px 9px 7px 0;border-top:1px solid #eee">'.$emailVal.'</td>
        </tr>
        <tr style="background-color:#f5f5f5">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Phone Number <span style="color:red">*</span></th>
                        <td style="vertical-align:top;c olor:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$ccode.' '.$phone.'</td>
        </tr>
        <tr style="">
                <th style="vertical-align:top; color:#222; text-align:left; padding:7px 9px 7px 9px; border-top:1px solid #eee">Message <span style="color:red">*</span></th>
                        <td style="vertical-align:top; color:#333; width:60%; padding:7px 9px 7px 0; border-top:1px solid #eee">'.$comments.'</td>
        </tr>
		</table>';


        Mail::send('emails.sent', ['content' => $message], function ($message) {
            $message->from('noreply@realtyfocus.info', 'Realty Focus');
            $message->subject("Enquiry from Realty Focus");
            $message->to('lokesh.kushwah@gmail.com', 'lokesh@imsolutions.mobi');
        });

            dd(Mail::failures());
            return redirect('/contact');
    }
}
