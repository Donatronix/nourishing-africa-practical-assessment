<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Str::contains(DB::connection()->getDatabaseName(), ['sqlite', 'memory'])) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }
        DB::table('countries')->delete();
        DB::table('countries')->truncate();
        //african countries
        $countries = [];
        $countries[] = ['code' => 'DZ', 'name' => 'Algeria', 'd_code' => '+213'];
        $countries[] = ['code' => 'AO', 'name' => 'Angola', 'd_code' => '+244'];
        $countries[] = ['code' => 'BJ', 'name' => 'Benin', 'd_code' => '+229'];
        $countries[] = ['code' => 'BW', 'name' => 'Botswana', 'd_code' => '+267'];
        $countries[] = ['code' => 'BF', 'name' => 'Burkina Faso', 'd_code' => '+226'];
        $countries[] = ['code' => 'BI', 'name' => 'Burundi', 'd_code' => '+257'];
        $countries[] = ['code' => 'CM', 'name' => 'Cameroon', 'd_code' => '+237'];
        $countries[] = ['code' => 'CV', 'name' => 'Cape Verde', 'd_code' => '+238'];
        $countries[] = ['code' => 'CF', 'name' => 'Central African Republic', 'd_code' => '+236'];
        $countries[] = ['code' => 'TD', 'name' => 'Chad', 'd_code' => '+235'];
        $countries[] = ['code' => 'KM', 'name' => 'Comoros', 'd_code' => '+269'];
        $countries[] = ['code' => 'CD', 'name' => 'Democratic Republic of Congo', 'd_code' => '+243'];
        $countries[] = ['code' => 'CG', 'name' => 'Republic of the Congo', 'd_code' => '+242'];
        $countries[] = ['code' => 'CI', 'name' => "Côte d'Ivoire", 'd_code' => '+225'];
        $countries[] = ['code' => 'DJ', 'name' => 'Djibouti', 'd_code' => '+253'];
        $countries[] = ['code' => 'EG', 'name' => 'Egypt', 'd_code' => '+20'];
        $countries[] = ['code' => 'GQ', 'name' => 'Equatorial Guinea', 'd_code' => '+240'];
        $countries[] = ['code' => 'ER', 'name' => 'Eritrea', 'd_code' => '+291'];
        $countries[] = ['code' => 'ET', 'name' => 'Ethiopia', 'd_code' => '+251'];
        $countries[] = ['code' => 'GA', 'name' => 'Gabon', 'd_code' => '+241'];
        $countries[] = ['code' => 'GM', 'name' => 'Gambia', 'd_code' => '+220'];
        $countries[] = ['code' => 'GH', 'name' => 'Ghana', 'd_code' => '+233'];
        $countries[] = ['code' => 'GN', 'name' => 'Guinea', 'd_code' => '+224'];
        $countries[] = ['code' => 'GW', 'name' => 'Guinea-Bissau', 'd_code' => '+245'];
        $countries[] = ['code' => 'KE', 'name' => 'Kenya', 'd_code' => '+254'];
        $countries[] = ['code' => 'LS', 'name' => 'Lesotho', 'd_code' => '+266'];
        $countries[] = ['code' => 'LR', 'name' => 'Liberia', 'd_code' => '+231'];
        $countries[] = ['code' => 'LY', 'name' => 'Libya', 'd_code' => '+218'];
        $countries[] = ['code' => 'MG', 'name' => 'Madagascar', 'd_code' => '+261'];
        $countries[] = ['code' => 'MW', 'name' => 'Malawi', 'd_code' => '+265'];
        $countries[] = ['code' => 'ML', 'name' => 'Mali', 'd_code' => '+223'];
        $countries[] = ['code' => 'MR', 'name' => 'Mauritania', 'd_code' => '+222'];
        $countries[] = ['code' => 'MU', 'name' => 'Mauritius', 'd_code' => '+230'];
        $countries[] = ['code' => 'MA', 'name' => 'Morocco', 'd_code' => '+212'];
        $countries[] = ['code' => 'MZ', 'name' => 'Mozambique', 'd_code' => '+258'];
        $countries[] = ['code' => 'NA', 'name' => 'Namibia', 'd_code' => '+264'];
        $countries[] = ['code' => 'NE', 'name' => 'Niger', 'd_code' => '+227'];
        $countries[] = ['code' => 'NG', 'name' => 'Nigeria', 'd_code' => '+234'];
        $countries[] = ['code' => 'RW', 'name' => 'Rwanda', 'd_code' => '+250'];
        $countries[] = ['code' => 'ST', 'name' => 'São Tomé and Príncipe', 'd_code' => '+239'];
        $countries[] = ['code' => 'SN', 'name' => 'Senegal', 'd_code' => '+221'];
        $countries[] = ['code' => 'SC', 'name' => 'Seychelles', 'd_code' => '+248'];
        $countries[] = ['code' => 'SL', 'name' => 'Sierra Leone', 'd_code' => '+232'];
        $countries[] = ['code' => 'SO', 'name' => 'Somalia', 'd_code' => '+252'];
        $countries[] = ['code' => 'ZA', 'name' => 'South Africa', 'd_code' => '+27'];
        $countries[] = ['code' => 'SS', 'name' => 'South Sudan', 'd_code' => '+211'];
        $countries[] = ['code' => 'SD', 'name' => 'Sudan', 'd_code' => '+249'];
        $countries[] = ['code' => 'SZ', 'name' => 'Swaziland', 'd_code' => '+268'];
        $countries[] = ['code' => 'TZ', 'name' => 'Tanzania', 'd_code' => '+255'];
        $countries[] = ['code' => 'TG', 'name' => 'Togo', 'd_code' => '+228'];
        $countries[] = ['code' => 'TN', 'name' => 'Tunisia', 'd_code' => '+216'];
        $countries[] = ['code' => 'UG', 'name' => 'Uganda', 'd_code' => '+256'];
        $countries[] = ['code' => 'ZM', 'name' => 'Zambia', 'd_code' => '+260'];
        $countries[] = ['code' => 'ZW', 'name' => 'Zimbabwe', 'd_code' => '+263'];

        DB::table('countries')->insert($countries);
        if (!Str::contains(DB::connection()->getDatabaseName(), ['sqlite', 'memory'])) {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
