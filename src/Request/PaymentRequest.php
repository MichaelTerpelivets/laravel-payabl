<?php

namespace PayablAPI\Request;

use function Symfony\Component\Translation\t;

class PaymentRequest extends AbstractRequest
{

    /**
     * @param string $merchantId
     * @return AbstractRequest|PaymentRequest
     */
    public function setMerchantId(string $merchantId)
    {
        return $this->set('merchantid', $merchantId);
    }

    /**
     * @return mixed|null
     */
    public function getMerchantId()
    {
        return $this->get('merchantid');
    }

    /**
     * @param string $orderId
     * @return AbstractRequest|PaymentRequest
     */
    public function setOrderID(string $orderId)
    {
        return $this->set('orderid', $orderId);
    }

    /**
     * @return mixed|null
     */
    public function getOrderID()
    {
        return $this->get('orderid');
    }

    /**
     * @param float $amount
     * @return AbstractRequest|PaymentRequest
     */
    public function setAmount(float $amount)
    {
        return $this->set('amount', $amount);
    }

    /**
     * @return mixed|null
     */
    public function getAmount()
    {
        return $this->get('amount');
    }

    /**
     * @param string $currency
     * @return AbstractRequest|PaymentRequest
     */
    public function setCurrency(string $currency)
    {
        return $this->set('currency', $currency);
    }

    /**
     * @return mixed|null
     */
    public function getCurrency()
    {
        return $this->get('currency');
    }

    /**
     * @param int $paymentMethod
     * @return AbstractRequest|PaymentRequest
     */
    public function setPaymentMethod(int $paymentMethod)
    {
        return $this->set('payment_method', $paymentMethod);
    }

    /**
     * @return mixed|null
     */
    public function getPaymentMethod()
    {
        return $this->get('payment_method');
    }

    /**
     * @param string $signature
     * @return AbstractRequest|PaymentRequest
     */
    public function setSignature(string $signature)
    {
        return $this->set('signature', $signature);
    }

    /**
     * @return mixed|null
     */
    public function getSignature()
    {
        return $this->get('signature');
    }

    /**
     * @param string $cnn
     * @return AbstractRequest|PaymentRequest
     */
    public function setCcn(string $cnn)
    {
        return $this->set('cnn', $cnn);
    }

    /**
     * @return mixed|null
     */
    public function getCnn()
    {
        return $this->get('cnn');
    }

    /**
     * @param string $expMonth
     * @return AbstractRequest|PaymentRequest
     */
    public function setExpMonth(string $expMonth)
    {
        return $this->set('exp_month', $expMonth);
    }

    /**
     * @return mixed|null
     */
    public function getExpMonth()
    {
        return $this->get('exp_month');
    }

    /**
     * @param string $expYear
     * @return AbstractRequest|PaymentRequest
     */
    public function setExpYear(string $expYear)
    {
        return $this->set('exp_year', $expYear);
    }

    /**
     * @return mixed|null
     */
    public function getExpYear()
    {
        return $this->get('exp_year');
    }

    /**
     * @param string $cvcCode
     * @return AbstractRequest|PaymentRequest
     */
    public function setCvcCode(string $cvcCode)
    {
        return $this->set('cvc_code', $cvcCode);
    }

    /**
     * @return mixed|null
     */
    public function getCvcCode()
    {
        return $this->get('cvc_code');
    }

    /**
     * @param string $cardholderName
     * @return AbstractRequest|PaymentRequest
     */
    public function setCardholderName(string $cardholderName)
    {
        return $this->set('cardholder_name', $cardholderName);
    }

    /**
     * @return mixed|null
     */
    public function getCardholderName()
    {
        return $this->get('cardholder_name');
    }

    /**
     * @param string $lang
     * @return AbstractRequest|PaymentRequest
     */
    public function setLanguage(string $lang)
    {
        return $this->set('language', $lang);
    }

    /**
     * @return mixed|null
     */
    public function getLanguage()
    {
        return $this->get('language');
    }

    /**
     * @param string $externalId
     * @return AbstractRequest|PaymentRequest
     */
    public function setExternalId(string $externalId)
    {
        return $this->set('external_id', $externalId);
    }

    /**
     * @return mixed|null
     */
    public function getExternalId()
    {
        return $this->get('external_id');
    }

    /**
     * @param string $salutation
     * @return AbstractRequest|PaymentRequest
     */
    public function setSalutation(string $salutation)
    {
        return $this->set('salutation', $salutation);
    }

    /**
     * @return mixed|null
     */
    public function getSalutation()
    {
        return $this->get('salutation');
    }

    /**
     * @param string $title
     * @return AbstractRequest|PaymentRequest
     */
    public function setTitle(string $title)
    {
        return $this->set('title', $title);
    }

    /**
     * @return mixed|null
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $gender
     * @return AbstractRequest|PaymentRequest
     */
    public function setGender(string $gender)
    {
        return $this->set('gender', $gender);
    }

    /**
     * @return mixed|null
     */
    public function getGender()
    {
        return $this->get('gender');
    }

    /**
     * @param string $email
     * @return AbstractRequest|PaymentRequest
     */
    public function setEmail(string $email)
    {
        return $this->set('email', $email);
    }

    /**
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->get('email');
    }

    /**
     * @param string $ip
     * @return AbstractRequest|PaymentRequest
     */
    public function setCustomerIp(string $ip)
    {
        return $this->set('customerip', $ip);
    }

    /**
     * @return mixed|null
     */
    public function getCustomerIp()
    {
        return $this->get('customerip');
    }

    /**
     * @param string $firstname
     * @return AbstractRequest|PaymentRequest
     */
    public function setFirstname(string $firstname)
    {
        return $this->set('firstname', $firstname);
    }

    /**
     * @return mixed|null
     */
    public function getFirstname()
    {
        return $this->get('firstname');
    }

    /**
     * @param string $lastname
     * @return AbstractRequest|PaymentRequest
     */
    public function setLastname(string $lastname)
    {
        return $this->set('lastname', $lastname);
    }

    /**
     * @return mixed|null
     */
    public function getLastname()
    {
        return $this->get('lastname');
    }

    /**
     * @param string $birthday
     * @return AbstractRequest|PaymentRequest
     */
    public function setBirthday(string $birthday)
    {
        return $this->set('birthday', $birthday);
    }

    /**
     * @return mixed|null
     */
    public function getBirthday()
    {
        return $this->get('birthday');
    }

    /**
     * @param string $street
     * @return AbstractRequest|PaymentRequest
     */
    public function setStreet(string $street)
    {
        return $this->set('street', $street);
    }

    /**
     * @return mixed|null
     */
    public function getStreet()
    {
        return $this->get('street');
    }

    /**
     * @param string $house
     * @return AbstractRequest|PaymentRequest
     */
    public function setHouse(string $house)
    {
        return $this->set('house', $house);
    }

    /**
     * @return mixed|null
     */
    public function getHouse()
    {
        return $this->get('house');
    }

    /**
     * @param string $postcode
     * @return AbstractRequest|PaymentRequest
     */
    public function setPostbox(string $postcode)
    {
        return $this->set('postbox', $postcode);
    }

    /**
     * @return mixed|null
     */
    public function getPostbox()
    {
        return $this->get('postbox');
    }

    /**
     * @param string $zip
     * @return AbstractRequest|PaymentRequest
     */
    public function setZip(string $zip)
    {
        return $this->set('zip', $zip);
    }

    /**
     * @return mixed|null
     */
    public function getZip()
    {
        return $this->get('zip');
    }

    /**
     * @param string $city
     * @return AbstractRequest|PaymentRequest
     */
    public function setCity(string $city)
    {
        return $this->set('city', $city);
    }

    /**
     * @return mixed|null
     */
    public function getCity()
    {
        return $this->get('city');
    }

    /**
     * @param string $state
     * @return AbstractRequest|PaymentRequest
     */
    public function setState(string $state)
    {
        return $this->set('state', $state);
    }

    /**
     * @return mixed|null
     */
    public function getState()
    {
        return $this->get('state');
    }

    /**
     * @param string $country
     * @return AbstractRequest|PaymentRequest
     */
    public function setCountry(string $country)
    {
        return $this->set('country', $country);
    }

    /**
     * @return mixed|null
     */
    public function getCountry()
    {
        return $this->get('country');

    }

    /**
     * @param string $phone
     * @return AbstractRequest|PaymentRequest
     */
    public function setPhone(string $phone)
    {
        return $this->set('phone', $phone);
    }

    /**
     * @return mixed|null
     */
    public function getPhone()
    {
        return $this->get('phone');
    }

    /**
     * @param string $fax
     * @return AbstractRequest|PaymentRequest
     */
    public function setFax(string $fax)
    {
        return $this->set('fax', $fax);
    }

    /**
     * @return mixed|null
     */
    public function getFax()
    {
        return $this->get('fax');
    }

    /**
     * @param string $mobile
     * @return AbstractRequest|PaymentRequest
     */
    public function setMobile(string $mobile)
    {
        return $this->set('mobile', $mobile);
    }

    /**
     * @return mixed|null
     */
    public function getMobile()
    {
        return $this->get('mobile');

    }

    /**
     * @param string $company
     * @return AbstractRequest|PaymentRequest
     */
    public function setCompany(string $company)
    {
        return $this->set('company', $company);
    }

    /**
     * @return mixed|null
     */
    public function getCompany()
    {
        return $this->get('company');
    }

    /**
     * @param string $customer
     * @return AbstractRequest|PaymentRequest
     */
    public function setCustom1(string $customer)
    {
        return $this->set('custom1', $customer);
    }

    /**
     * @return mixed|null
     */
    public function getCustom1()
    {
        return $this->get('custom1');
    }

    /**
     * @param string $customer
     * @return AbstractRequest|PaymentRequest
     */
    public function setCustom2(string $customer)
    {
        return $this->set('custom2', $customer);
    }

    /**
     * @return mixed|null
     */
    public function getCustom2()
    {
        return $this->get('custom2');
    }

    /**
     * @param string $customer
     * @return AbstractRequest|PaymentRequest
     */
    public function setCustom3(string $customer)
    {
        return $this->set('custom3', $customer);
    }

    /**
     * @return mixed|null
     */
    public function getCustom3()
    {
        return $this->get('custom3');
    }

    /**
     * @param string $notificationUrl
     * @return AbstractRequest|PaymentRequest
     */
    public function setNotificationUrl(string $notificationUrl)
    {
        return $this->set('notification_url', $notificationUrl);
    }

    /**
     * @return mixed|null
     */
    public function getNotificationUrl()
    {
        return $this->get('notification_url');
    }

    /**
     * @param string $returnUrl
     * @return AbstractRequest|PaymentRequest
     */
    public function setUrlReturn(string $returnUrl)
    {
        return $this->set('url_return', $returnUrl);
    }

    /**
     * @return mixed|null
     */
    public function getUrlReturn()
    {
        return $this->get('url_return');
    }

    /**
     * @param string $shopUrl
     * @return AbstractRequest|PaymentRequest
     */
    public function setShopUrl(string $shopUrl)
    {
        return $this->set('shop_url', $shopUrl);
    }

    /**
     * @return mixed|null
     */
    public function getShopUrl()
    {
        return $this->get('shop_url');
    }

    /**
     * @param string $shopName
     * @return AbstractRequest|PaymentRequest
     */
    public function setShopName(string $shopName)
    {
        return $this->set('shop_name', $shopName);
    }

    /**
     * @return mixed|null
     */
    public function getShopName()
    {
        return $this->get('shop_name');
    }

    /**
     * @param string $shopCode
     * @return AbstractRequest|PaymentRequest
     */
    public function setShopCountryCode(string $shopCode)
    {
        return $this->set('shop_country_code', $shopCode);
    }

    /**
     * @return mixed|null
     */
    public function getShopCountryCode()
    {
        return $this->get('shop_country_code');
    }
}