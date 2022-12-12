<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $address_id
 * @property string $type
 * @property int $user_id
 * @property string $receiver_name
 * @property string $receiver_phone
 * @property string $city
 * @property string $society
 * @property int $city_id
 * @property int $society_id
 * @property string $house_no
 * @property string|null $landmark
 * @property string $state
 * @property string $pincode
 * @property string $lat
 * @property string $lng
 * @property int $select_status
 * @property \Illuminate\Support\Carbon $added_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereHouseNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLandmark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereReceiverName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereReceiverPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSelectStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSociety($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereSocietyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $admin_image
 * @property string|null $remember_token
 * @property int $role_id
 * @property string|null $role_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereAdminImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRoleName($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdminDriverIncentive
 *
 * @property int $id
 * @property string $incentive
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDriverIncentive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDriverIncentive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDriverIncentive query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDriverIncentive whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminDriverIncentive whereIncentive($value)
 */
	class AdminDriverIncentive extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppNotice
 *
 * @property int $app_notice_id
 * @property int $status
 * @property string $notice
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice whereAppNoticeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice whereNotice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppNotice whereStatus($value)
 */
	class AppNotice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cities
 *
 * @property int $city_id
 * @property string $city_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cities whereCityName($value)
 */
	class Cities extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CityAdUser
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|CityAdUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CityAdUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CityAdUser query()
 */
	class CityAdUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CountryCode
 *
 * @property int $code_id
 * @property int $country_code
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCode whereCodeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CountryCode whereCountryCode($value)
 */
	class CountryCode extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $currency_name
 * @property string $currency_sign
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCurrencySign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryBoy
 *
 * @property int $dboy_id
 * @property string $boy_name
 * @property string $boy_phone
 * @property string $boy_city
 * @property string $password
 * @property string|null $device_id
 * @property string $boy_loc
 * @property string $lat
 * @property string $lng
 * @property int $status
 * @property int $store_id
 * @property int $store_dboy_id
 * @property string $added_by
 * @property string|null $id_no
 * @property string|null $id_photo
 * @property string|null $image
 * @property string|null $id_name
 * @property string|null $current_lat
 * @property string|null $current_lng
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereAddedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereBoyCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereBoyLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereBoyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereBoyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereCurrentLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereCurrentLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereIdNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereIdPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereStoreDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoy whereStoreId($value)
 */
	class DeliveryBoy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryBoyStores
 *
 * @property int $dboy_id
 * @property string $boy_name
 * @property string $boy_phone
 * @property string $boy_city
 * @property string $password
 * @property string|null $device_id
 * @property string $boy_loc
 * @property string $lat
 * @property string $lng
 * @property int $status
 * @property int $store_id
 * @property string $added_by
 * @property int $ad_dboy_id
 * @property int $rem_by_admin
 * @property string|null $id_no
 * @property string|null $id_photo
 * @property string|null $id_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereAdDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereAddedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereBoyCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereBoyLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereBoyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereBoyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereIdNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereIdPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereRemByAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryBoyStores whereStoreId($value)
 */
	class DeliveryBoyStores extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DriverIncentive
 *
 * @property int $id
 * @property int $dboy_id
 * @property string $earned_till_now
 * @property string $paid_till_now
 * @property string $remaining
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive query()
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive whereDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive whereEarnedTillNow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive wherePaidTillNow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DriverIncentive whereRemaining($value)
 */
	class DriverIncentive extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FCM
 *
 * @property int $id
 * @property string $sender_id
 * @property string $server_key
 * @property string $store_server_key
 * @property string $driver_server_key
 * @method static \Illuminate\Database\Eloquent\Builder|FCM newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FCM newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FCM query()
 * @method static \Illuminate\Database\Eloquent\Builder|FCM whereDriverServerKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FCM whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FCM whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FCM whereServerKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FCM whereStoreServerKey($value)
 */
	class FCM extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GMapsData
 *
 * @property int $id
 * @property string $map_api_key
 * @method static \Illuminate\Database\Eloquent\Builder|GMapsData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GMapsData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GMapsData query()
 * @method static \Illuminate\Database\Eloquent\Builder|GMapsData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GMapsData whereMapApiKey($value)
 */
	class GMapsData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IdTypes
 *
 * @property int $type_id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|IdTypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdTypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IdTypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|IdTypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IdTypes whereTypeId($value)
 */
	class IdTypes extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MapBoxData
 *
 * @property int $map_id
 * @property string $mapbox_api
 * @method static \Illuminate\Database\Eloquent\Builder|MapBoxData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MapBoxData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MapBoxData query()
 * @method static \Illuminate\Database\Eloquent\Builder|MapBoxData whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MapBoxData whereMapboxApi($value)
 */
	class MapBoxData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MapSettings
 *
 * @property int $map_id
 * @property int $mapbox
 * @property int $google_map
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings query()
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings whereGoogleMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MapSettings whereMapbox($value)
 */
	class MapSettings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Orders
 *
 * @property int $order_id
 * @property int $user_id
 * @property int $store_id
 * @property int $address_id
 * @property string $cart_id
 * @property float $total_price
 * @property float $price_without_delivery
 * @property float $total_products_mrp
 * @property string|null $payment_method
 * @property float $paid_by_wallet
 * @property float $rem_price
 * @property float|null $avg_tax_per
 * @property float|null $total_tax_price
 * @property string $order_date
 * @property string $delivery_date
 * @property float $delivery_charge
 * @property string $time_slot
 * @property int $dboy_id
 * @property string $order_status
 * @property string|null $user_signature
 * @property string|null $cancelling_reason
 * @property int $coupon_id
 * @property float $coupon_discount
 * @property string|null $payment_status
 * @property int $cancel_by_store
 * @property int|null $dboy_incentive
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereAvgTaxPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCancelByStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCancellingReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDboyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDboyIncentive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDeliveryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders wherePaidByWallet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders wherePriceWithoutDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereRemPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTimeSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalProductsMrp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalTaxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUserSignature($value)
 */
	class Orders extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceArea
 *
 * @property int $ser_id
 * @property string $society_name
 * @property int $society_id
 * @property float $delivery_charge
 * @property int $store_id
 * @property int $added_by
 * @property int $enabled
 * @property int $city_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereAddedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereSerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereSocietyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereSocietyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceArea whereStoreId($value)
 */
	class ServiceArea extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Store
 *
 * @property int $id
 * @property string $store_name
 * @property string $employee_name
 * @property string $phone_number
 * @property string $store_photo
 * @property string $city
 * @property int $city_id
 * @property float $admin_share
 * @property string|null $device_id
 * @property string $email
 * @property string $password
 * @property float $del_range
 * @property string|null $lat
 * @property string|null $lng
 * @property string $address
 * @property int $admin_approval
 * @property int $orders
 * @property int $store_status
 * @property string $store_opening_time
 * @property string $store_closing_time
 * @property int $time_interval
 * @property string|null $inactive_reason
 * @property string|null $id_type
 * @property string|null $id_number
 * @property string|null $id_photo
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereAdminApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereAdminShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereDelRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereEmployeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereIdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereIdPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereIdType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereInactiveReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStoreClosingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStoreOpeningTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStorePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereStoreStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Store whereTimeInterval($value)
 */
	class Store extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreCityAdmin
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|StoreCityAdmin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreCityAdmin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreCityAdmin query()
 */
	class StoreCityAdmin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreNotification
 *
 * @property int $not_id
 * @property string $not_title
 * @property string|null $image
 * @property string $not_message
 * @property int $store_id
 * @property int $read_by_store
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereNotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereNotMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereNotTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereReadByStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreNotification whereStoreId($value)
 */
	class StoreNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreOrders
 *
 * @property int $store_order_id
 * @property string $product_name
 * @property string $varient_image
 * @property float $quantity
 * @property string $unit
 * @property int $varient_id
 * @property int $qty
 * @property float $price
 * @property float $total_mrp
 * @property string $order_cart_id
 * @property string $order_date
 * @property int $store_approval
 * @property int $store_id
 * @property string $description
 * @property int|null $tx_per
 * @property float|null $price_without_tax
 * @property float|null $tx_price
 * @property string|null $tx_name
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereOrderCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders wherePriceWithoutTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereStoreApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereStoreOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereTotalMrp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereTxName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereTxPer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereTxPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereVarientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreOrders whereVarientImage($value)
 */
	class StoreOrders extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreProducts
 *
 * @property int $p_id
 * @property int $varient_id
 * @property int $stock
 * @property int $store_id
 * @property float $mrp
 * @property float $price
 * @property int $min_ord_qty
 * @property int $max_ord_qty
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereMaxOrdQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereMinOrdQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereMrp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts wherePId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreProducts whereVarientId($value)
 */
	class StoreProducts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Stores
 *
 * @property int $id
 * @property string $store_name
 * @property string $employee_name
 * @property string $phone_number
 * @property string $store_photo
 * @property string $city
 * @property int $city_id
 * @property float $admin_share
 * @property string|null $device_id
 * @property string $email
 * @property string $password
 * @property float $del_range
 * @property string|null $lat
 * @property string|null $lng
 * @property string $address
 * @property int $admin_approval
 * @property int $orders
 * @property int $store_status
 * @property string $store_opening_time
 * @property string $store_closing_time
 * @property int $time_interval
 * @property string|null $inactive_reason
 * @property string|null $id_type
 * @property string|null $id_number
 * @property string|null $id_photo
 * @method static \Illuminate\Database\Eloquent\Builder|Stores newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stores newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stores query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereAdminApproval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereAdminShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereDelRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereEmployeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereIdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereIdPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereIdType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereInactiveReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereStoreClosingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereStoreName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereStoreOpeningTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereStorePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereStoreStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stores whereTimeInterval($value)
 */
	class Stores extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Town
 *
 * @property int $society_id
 * @property string $society_name
 * @property int $city_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Town newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Town newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Town query()
 * @method static \Illuminate\Database\Eloquent\Builder|Town whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Town whereSocietyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Town whereSocietyName($value)
 */
	class Town extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $user_phone
 * @property string|null $device_id
 * @property string|null $user_image
 * @property int|null $user_city
 * @property int|null $user_area
 * @property string|null $otp_value
 * @property int $status
 * @property float $wallet
 * @property int $rewards
 * @property int $is_verified
 * @property int $block
 * @property string $reg_date
 * @property int $app_update
 * @property string|null $facebook_id
 * @property string|null $referral_code
 * @property int $membership
 * @property string|null $mem_plan_start
 * @property string|null $mem_plan_expiry
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float|null $lat
 * @property float|null $lng
 * @property string|null $address
 * @property string|null $email
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAppUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMemPlanExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMemPlanStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOtpValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReferralCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRewards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWallet($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserNotification
 *
 * @property int $noti_id
 * @property int $user_id
 * @property string $noti_title
 * @property string|null $image
 * @property string $noti_message
 * @property int $read_by_user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereNotiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereNotiMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereNotiTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereReadByUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserNotification whereUserId($value)
 */
	class UserNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Users
 *
 * @property int $id
 * @property string $name
 * @property string|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $user_phone
 * @property string|null $device_id
 * @property string|null $user_image
 * @property int|null $user_city
 * @property int|null $user_area
 * @property string|null $otp_value
 * @property int $status
 * @property float $wallet
 * @property int $rewards
 * @property int $is_verified
 * @property int $block
 * @property string $reg_date
 * @property int $app_update
 * @property string|null $facebook_id
 * @property string|null $referral_code
 * @property int $membership
 * @property string|null $mem_plan_start
 * @property string|null $mem_plan_expiry
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float|null $lat
 * @property float|null $lng
 * @property string|null $address
 * @property string|null $email
 * @method static \Illuminate\Database\Eloquent\Builder|Users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Users query()
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereAppUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereMemPlanExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereMemPlanStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereMembership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereOtpValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereReferralCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereRegDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereRewards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUserArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUserCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUserImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereUserPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Users whereWallet($value)
 */
	class Users extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebSettings
 *
 * @property int $set_id
 * @property string $icon
 * @property string $name
 * @property string $favicon
 * @property int $number_limit
 * @property int $last_loc
 * @property string|null $footer_text
 * @property int $live_chat
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereFooterText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereLastLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereLiveChat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereNumberLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebSettings whereSetId($value)
 */
	class WebSettings extends \Eloquent {}
}

namespace App{
/**
 * App\Setting
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

