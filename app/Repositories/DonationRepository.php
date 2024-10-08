<?php

namespace App\Repositories;

use App\Helpers\Helpers;
use App\Models\Donation;

class DonationRepository
{
    /**
     *  store donation record in database
     *
     * @param object $DonationData
     * @param object $StripeDonationObject
     * @return Donation
     *
     *
     */
    public static function storeDonation(object $DonationData , object $StripeDonationObject) : Donation
    {
        return Donation::create(
            [
                "donation_external_id" => Helpers::CreateExternalIdfromDate(),
                "donor_id" => $DonationData['donor_id'],
                "donor_external_id" => $DonationData['donor_external_id'],
                "subscription_external_id" => $DonationData['subscription_external_id'],
                "stripe_subscription_id" => $DonationData['stripe_subscription_id'],
                "donation_project" => $DonationData['donation_project'],
                "amount" => $DonationData['amount'],
                "currency" => $DonationData['currency'],
                "type" => $DonationData['type'],
                "tax_deduction_certificate_url" => $DonationData['tax_deduction_certificate_url'],
                "stripe_donation_object" => json_encode($StripeDonationObject),
            ]
        );
    }
}
