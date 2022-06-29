<?php

namespace App;

use App\Models\Order\ServiceOrder;
use App\Models\Otp;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Xenon\LaravelBDSms\Facades\SMS;

/**
 * This app setting class mainly refers to the facade inside Facades/AppFacade
 */
class AppSetting
{
    /**
     * @param $mobile
     * @param $message
     * @return bool
     */
    public function sendOtp($mobile, $message): bool
    {
        /*if (env('sms_otp_local') == 1) //this will always return true
            return true;*/
        SMS::shoot($mobile, $message);
        return true;
    }

    /** save otp
     * @param array $data
     * @return void
     */
    public function saveOtp(array $data)
    {
        Otp::create($data);
    }

    /**
     * Get Setting Value
     * @param array $setting
     * @param $key
     * @return void
     * @throws Exception
     */
    public function getSettingValue(array $setting, $key)
    {
        if (array_key_exists($key, $setting)) {
            return $setting[$key];
        }
        throw new Exception("$key does not exist in setting");

    }

    /**
     * @param $phone
     * @param $text
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function sendMessageViaMshastra($phone, $text)
    {
        $client = new Client([
            'base_uri' => 'https://mshastra.com/sendurlcomma.aspx',
            'timeout' => '10',
        ]);

        return $client->request('GET', '', [
            'query' => [
                'user' => env('SMS_MOBISHASTRA_USERNAME'),
                'pwd' => env('SMS_MOBISHASTRA_PASSWORD'),
                'senderid' => env('SMS_MOBISHASTRA_SENDER_ID'),
                'mobileno' => $phone,
                'msgtext' => $text,
                'priority' => 'High',
                'CountryCode' => 'ALL'
            ],
            'verify' => false
        ]);
    }

    /**
     * @param string $prefix
     * @return void
     */
    public function generateInvoiceNumber(string $prefix = '')
    {
        $service = ServiceOrder::orderBy('id', 'desc')
            ->select('id', 'invoice_number')
            ->limit(1)
            ->first();
        if ($service == null) {
            $invoiceNumber = 1;
            $invoiceNumber = str_pad($invoiceNumber, 8, "0", STR_PAD_LEFT);
            $invoiceNumber = $prefix . $invoiceNumber;
        } else {

            $invoice_number = $service->invoice_number;
            $splitData = str_split($invoice_number, strlen($prefix));
            $initial = $splitData[0];
            unset($splitData[0]);
            $invoiceString = implode('', $splitData);
            $invoiceInt = (int)$invoiceString;
            $invoiceInt += 1;
            $invoiceNumber = str_pad($invoiceInt, 8, "0", STR_PAD_LEFT);
            $invoiceNumber = $initial . $invoiceNumber;
        }

        return $invoiceNumber;
    }


    /**
     * @param string $prefix
     * @param int $length
     * @return string
     */
    public function generateRequestNumber(string $prefix = '', int $length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomString = $prefix.$randomString;

        return strtoupper($randomString);
    }
}
