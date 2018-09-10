<?php

namespace App\Library\Amazon\ProductAdvertising;

// https://webservices.amazon.com/scratchpad/index.html

class Api
{
    protected $access_key;
    protected $secret_key;
    protected $account_tag;

    // http://webservices.amazon.com/onca/xml?
    // Service=AWSECommerceService&
    // AWSAccessKeyId=[AWS Access Key ID]&
    // AssociateTag=[Associate ID]&
    // Operation=ItemSearch&
    // Keywords=the%20hunger%20games&
    // SearchIndex=Books
    // &Timestamp=[YYYY-MM-DDThh:mm:ssZ]
    // &Signature=[Request Signature]
    protected $api_url = 'http://webservices.amazon.com/onca/xml?Service=AWSECommerceService&Operation=ItemSearch';

    public function __construct()
    {
        $this->access_key = '';
	$this->secret_key = '';
	$this->account_tag = '';
    }

    public function book($isbn)
    {
	$url = $this->api_url . '&SearchIndex=Books';

	
    }

    protected function addTimestampToUrl($url)
    {
        return $url . '&Timestamp=[YYYY-MM-DDThh:mm:ssZ]';
    }

    // https://docs.aws.amazon.com/AWSECommerceService/latest/DG/rest-signature.html
    protected function addSignature($url)
    {
	$sig = $url;
        return $url . '&Signature=' . $sig;
    }
}