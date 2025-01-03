<?php

namespace Proxies\__CG__\Plugin\Coupon42\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Coupon extends \Plugin\Coupon42\Entity\Coupon implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_cd', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_type', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_name', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_type', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_use_time', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_price', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_rate', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'enable_flag', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'available_from_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'available_to_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'visible', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_member', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_lower_limit', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_release', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'create_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'update_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'CouponDetails'];
        }

        return ['__isInitialized__', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'id', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_cd', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_type', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_name', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_type', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_use_time', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_price', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'discount_rate', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'enable_flag', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'available_from_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'available_to_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'visible', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_member', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_lower_limit', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'coupon_release', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'create_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'update_date', '' . "\0" . 'Plugin\\Coupon42\\Entity\\Coupon' . "\0" . 'CouponDetails'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Coupon $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponCd($couponCd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponCd', [$couponCd]);

        return parent::setCouponCd($couponCd);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponCd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponCd', []);

        return parent::getCouponCd();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponType($couponType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponType', [$couponType]);

        return parent::setCouponType($couponType);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponType', []);

        return parent::getCouponType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponName($couponName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponName', [$couponName]);

        return parent::setCouponName($couponName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponName', []);

        return parent::getCouponName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountType($discountType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountType', [$discountType]);

        return parent::setDiscountType($discountType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountType', []);

        return parent::getDiscountType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponUseTime($couponUseTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponUseTime', [$couponUseTime]);

        return parent::setCouponUseTime($couponUseTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponUseTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponUseTime', []);

        return parent::getCouponUseTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountPrice($discountPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountPrice', [$discountPrice]);

        return parent::setDiscountPrice($discountPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountPrice', []);

        return parent::getDiscountPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscountRate($discountRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscountRate', [$discountRate]);

        return parent::setDiscountRate($discountRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountRate', []);

        return parent::getDiscountRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnableFlag($enableFlag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnableFlag', [$enableFlag]);

        return parent::setEnableFlag($enableFlag);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnableFlag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnableFlag', []);

        return parent::getEnableFlag();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableFromDate($availableFromDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableFromDate', [$availableFromDate]);

        return parent::setAvailableFromDate($availableFromDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableFromDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableFromDate', []);

        return parent::getAvailableFromDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvailableToDate($availableToDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvailableToDate', [$availableToDate]);

        return parent::setAvailableToDate($availableToDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableToDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvailableToDate', []);

        return parent::getAvailableToDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', [$visible]);

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisible', []);

        return parent::isVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateDate($createDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateDate', [$createDate]);

        return parent::setCreateDate($createDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateDate', []);

        return parent::getCreateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateDate($updateDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateDate', [$updateDate]);

        return parent::setUpdateDate($updateDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateDate', []);

        return parent::getUpdateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addCouponDetail(\Plugin\Coupon42\Entity\CouponDetail $couponDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCouponDetail', [$couponDetails]);

        return parent::addCouponDetail($couponDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCouponDetail(\Plugin\Coupon42\Entity\CouponDetail $couponDetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCouponDetail', [$couponDetails]);

        return parent::removeCouponDetail($couponDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponDetails', []);

        return parent::getCouponDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponMember()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponMember', []);

        return parent::getCouponMember();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponMember($couponMember)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponMember', [$couponMember]);

        return parent::setCouponMember($couponMember);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponLowerLimit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponLowerLimit', []);

        return parent::getCouponLowerLimit();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponLowerLimit($couponLowerLimit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponLowerLimit', [$couponLowerLimit]);

        return parent::setCouponLowerLimit($couponLowerLimit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouponRelease()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouponRelease', []);

        return parent::getCouponRelease();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouponRelease($coupon_release)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouponRelease', [$coupon_release]);

        return parent::setCouponRelease($coupon_release);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetExists($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetExists', [$offset]);

        return parent::offsetExists($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetSet', [$offset, $value]);

        return parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetGet($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetGet', [$offset]);

        return parent::offsetGet($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function offsetUnset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'offsetUnset', [$offset]);

        return parent::offsetUnset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function setPropertiesFromArray(array $arrProps, array $excludeAttribute = [], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPropertiesFromArray', [$arrProps, $excludeAttribute, $parentClass]);

        return parent::setPropertiesFromArray($arrProps, $excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'], \ReflectionClass $parentClass = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', [$excludeAttribute, $parentClass]);

        return parent::toArray($excludeAttribute, $parentClass);
    }

    /**
     * {@inheritDoc}
     */
    public function toNormalizedArray(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toNormalizedArray', [$excludeAttribute]);

        return parent::toNormalizedArray($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', [$excludeAttribute]);

        return parent::toJSON($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function toXML(array $excludeAttribute = ['__initializer__', '__cloner__', '__isInitialized__'])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toXML', [$excludeAttribute]);

        return parent::toXML($excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function copyProperties($srcObject, array $excludeAttribute = [])
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'copyProperties', [$srcObject, $excludeAttribute]);

        return parent::copyProperties($srcObject, $excludeAttribute);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityIdentifierAsArray(\Eccube\Entity\AbstractEntity $Entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityIdentifierAsArray', [$Entity]);

        return parent::getEntityIdentifierAsArray($Entity);
    }

}
