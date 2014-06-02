<?php
return array(	
	"base_url"   => url() . '/social/auth',
	"providers"  => array (
		"Google"     => array (
			"enabled"    => true,
			"keys"       => array ( "id" => "441274880327-ttb8licth04fa4mbg9fi43l9mv6unmun.apps.googleusercontent.com", "secret" => "DavTmgdB6ufondEYHDjQJNqU" ),
			"scope"      => "https://www.googleapis.com/auth/userinfo.profile ".
                            "https://www.googleapis.com/auth/userinfo.email"   ,
			),
		"Facebook"   => array (
			"enabled"    => true,
			"keys"       => array ( "id" => "320802068068220", "secret" => "61a9382b5d1605fcdaa518745244481b" ),
			'scope'      =>  'email',
			),
		"Twitter"    => array (
			"enabled"    => true,
			"keys"       => array ( "key" => "kYMJhNJ8izVsIV2WODGdKXve1", "secret" => "vnEyJGeyOu8HO7jmbTDKh8tONdkwAylziDxIa8yikO4EDDcoPp" )
			)
	),
);