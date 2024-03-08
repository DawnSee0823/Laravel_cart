<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->string('locale');
            $table->string('phone_code');
            $table->text('flag');
        });

        DB::table('countries')->insert([
            ['id' => 1, 'name' => 'Afghanistan', 'locale' => 'AF', 'flag' => '/images/flags/af.svg', 'phone_code' => '+93'],
            ['id' => 2, 'name' => 'Albania', 'locale' => 'AL', 'flag' => '/images/flags/al.svg', 'phone_code' => '+355'],
            ['id' => 3, 'name' => 'Algeria', 'locale' => 'DZ', 'flag' => '/images/flags/dz.svg', 'phone_code' => '+213'],
            ['id' => 4, 'name' => 'American Samoa', 'locale' => 'AS', 'flag' => '/images/flags/as.svg', 'phone_code' => '+1'],
            ['id' => 5, 'name' => 'Andorra', 'locale' => 'AD', 'flag' => '/images/flags/ad.svg', 'phone_code' => '+376'],
            ['id' => 6, 'name' => 'Angola', 'locale' => 'AO', 'flag' => '/images/flags/ao.svg', 'phone_code' => '+244'],
            ['id' => 7, 'name' => 'Anguilla', 'locale' => 'AI', 'flag' => '/images/flags/ai.svg', 'phone_code' => '+1'],
            ['id' => 8, 'name' => 'Antigua and Barbuda', 'locale' => 'AG', 'flag' => '/images/flags/ag.svg', 'phone_code' => '+1'],
            ['id' => 9, 'name' => 'Argentina', 'locale' => 'AR', 'flag' => '/images/flags/ar.svg', 'phone_code' => '+54'],
            ['id' => 10, 'name' => 'Armenia', 'locale' => 'AM', 'flag' => '/images/flags/am.svg', 'phone_code' => '+374'],
            ['id' => 11, 'name' => 'Aruba', 'locale' => 'AW', 'flag' => '/images/flags/aw.svg', 'phone_code' => '+297'],
            ['id' => 12, 'name' => 'Australia', 'locale' => 'AU', 'flag' => '/images/flags/au.svg', 'phone_code' => '+61'],
            ['id' => 13, 'name' => 'Austria', 'locale' => 'AT', 'flag' => '/images/flags/at.svg', 'phone_code' => '+43'],
            ['id' => 14, 'name' => 'Azerbaijan', 'locale' => 'AZ', 'flag' => '/images/flags/az.svg', 'phone_code' => '+994'],
            ['id' => 15, 'name' => 'Bahamas', 'locale' => 'BS', 'flag' => '/images/flags/bs.svg', 'phone_code' => '+1'],
            ['id' => 16, 'name' => 'Bahrain', 'locale' => 'BH', 'flag' => '/images/flags/bh.svg', 'phone_code' => '+973'],
            ['id' => 17, 'name' => 'Bangladesh', 'locale' => 'BD', 'flag' => '/images/flags/bg.svg', 'phone_code' => '+880'],
            ['id' => 18, 'name' => 'Barbados', 'locale' => 'BB', 'flag' => '/images/flags/bb.svg', 'phone_code' => '+1'],
            ['id' => 19, 'name' => 'Belarus', 'locale' => 'BY', 'flag' => '/images/flags/by.svg', 'phone_code' => '+375'],
            ['id' => 20, 'name' => 'Belgium', 'locale' => 'BE', 'flag' => '/images/flags/br.svg', 'phone_code' => '+32'],
            ['id' => 21, 'name' => 'Belize', 'locale' => 'BZ', 'flag' => '/images/flags/bz.svg', 'phone_code' => '+501'],
            ['id' => 22, 'name' => 'Benin', 'locale' => 'BJ', 'flag' => '/images/flags/bj.svg', 'phone_code' => '+229'],
            ['id' => 23, 'name' => 'Bermuda', 'locale' => 'BM', 'flag' => '/images/flags/bm.svg', 'phone_code' => '+1'],
            ['id' => 24, 'name' => 'Bhutan', 'locale' => 'BT', 'flag' => '/images/flags/bt.svg', 'phone_code' => '+975'],
            ['id' => 25, 'name' => 'Bolivia', 'locale' => 'BO', 'flag' => '/images/flags/bo.svg', 'phone_code' => '+591'],
            ['id' => 26, 'name' => 'Bonaire', 'locale' => 'BQ', 'flag' => '/images/flags/bq.svg', 'phone_code' => '+599'],
            ['id' => 27, 'name' => 'Bosnia and Herzegovina', 'locale' => 'BA', 'flag' => '/images/flags/ba.svg', 'phone_code' => '+387'],
            ['id' => 28, 'name' => 'Botswana', 'locale' => 'BW', 'flag' => '/images/flags/bw.svg', 'phone_code' => '+267'],
            ['id' => 29, 'name' => 'Brazil', 'locale' => 'BR', 'flag' => '/images/flags/br.svg', 'phone_code' => '+55'],
            ['id' => 30, 'name' => 'Brunei', 'locale' => 'BN', 'flag' => '/images/flags/bn.svg', 'phone_code' => '+673'],
            ['id' => 31, 'name' => 'Bulgaria', 'locale' => 'BG', 'flag' => '/images/flags/bg.svg', 'phone_code' => '+359'],
            ['id' => 32, 'name' => 'Burkina Faso', 'locale' => 'BF', 'flag' => '/images/flags/bf.svg', 'phone_code' => '+226'],
            ['id' => 33, 'name' => 'Burundi', 'locale' => 'BI', 'flag' => '/images/flags/bi.svg', 'phone_code' => '+257'],
            ['id' => 34, 'name' => 'Cambodia', 'locale' => 'KH', 'flag' => '/images/flags/kh.svg', 'phone_code' => '+885'],
            ['id' => 35, 'name' => 'Cameroon', 'locale' => 'CM', 'flag' => '/images/flags/cm.svg', 'phone_code' => '+237'],
            ['id' => 36, 'name' => 'Canada', 'locale' => 'CA', 'flag' => '/images/flags/ca.svg', 'phone_code' => '+1'],
            ['id' => 37, 'name' => 'Cape Verde', 'locale' => 'CV', 'flag' => '/images/flags/cv.svg', 'phone_code' => '+238'],
            ['id' => 38, 'name' => 'Cayman Islands', 'locale' => 'KY', 'flag' => '/images/flags/ky.svg', 'phone_code' => '+1'],
            ['id' => 39, 'name' => 'Central African Republic', 'locale' => 'CF', 'flag' => '/images/flags/cf.svg', 'phone_code' => '+236'],
            ['id' => 40, 'name' => 'Chad', 'locale' => 'TD', 'flag' => '/images/flags/td.svg', 'phone_code' => '+235'],
            ['id' => 41, 'name' => 'Chile', 'locale' => 'CL', 'flag' => '/images/flags/cl.svg', 'phone_code' => '+56'],
            ['id' => 42, 'name' => 'China', 'locale' => 'CN', 'flag' => '/images/flags/cn.svg', 'phone_code' => '+86'],
            ['id' => 43, 'name' => 'Colombia', 'locale' => 'CO', 'flag' => '/images/flags/co.svg', 'phone_code' => '+57'],
            ['id' => 44, 'name' => 'Congo Republic', 'locale' => 'CG', 'flag' => '/images/flags/cg.svg', 'phone_code' => '+242'],
            ['id' => 45, 'name' => 'Congo Democratic Republic', 'locale' => 'CD', 'flag' => '/images/flags/cd.svg', 'phone_code' => '+243'],
            ['id' => 46, 'name' => 'Costa Rica', 'locale' => 'CR', 'flag' => '/images/flags/cr.svg', 'phone_code' => '+506'],
            ['id' => 47, 'name' => 'Croatia', 'locale' => 'HR', 'flag' => '/images/flags/hr.svg', 'phone_code' => '+387'],
            ['id' => 48, 'name' => 'Cuba', 'locale' => 'CU', 'flag' => '/images/flags/cu.svg', 'phone_code' => '+53'],
            ['id' => 49, 'name' => 'Curaçao', 'locale' => 'CW', 'flag' => '/images/flags/cw.svg', 'phone_code' => '+599'],
            ['id' => 50, 'name' => 'Cyprus', 'locale' => 'CY', 'flag' => '/images/flags/cy.svg', 'phone_code' => '+357'],
            ['id' => 51, 'name' => 'Czech Republic', 'locale' => 'CZ', 'flag' => '/images/flags/cz.svg', 'phone_code' => '+420'],
            ['id' => 52, 'name' => 'Denmark', 'locale' => 'DK', 'flag' => '/images/flags/dk.svg', 'phone_code' => '+45'],
            ['id' => 53, 'name' => 'Djibouti', 'locale' => 'DJ', 'flag' => '/images/flags/dj.svg', 'phone_code' => '+253'],
            ['id' => 54, 'name' => 'Dominica', 'locale' => 'DM', 'flag' => '/images/flags/dm.svg', 'phone_code' => '+1'],
            ['id' => 55, 'name' => 'Dominican Republic', 'locale' => 'DO', 'flag' => '/images/flags/do.svg', 'phone_code' => '+1'],
            ['id' => 56, 'name' => 'Ecuador', 'locale' => 'EC', 'flag' => '/images/flags/ec.svg', 'phone_code' => '+593'],
            ['id' => 57, 'name' => 'Egypt', 'locale' => 'EG', 'flag' => '/images/flags/eg.svg', 'phone_code' => '+20'],
            ['id' => 58, 'name' => 'El Salvador', 'locale' => 'SV', 'flag' => '/images/flags/sv.svg', 'phone_code' => '+503'],
            ['id' => 59, 'name' => 'Equatorial Guinea', 'locale' => 'GQ', 'flag' => '/images/flags/gq.svg', 'phone_code' => '+240'],
            ['id' => 60, 'name' => 'Eritrea', 'locale' => 'ER', 'flag' => '/images/flags/er.svg', 'phone_code' => '+291'],
            ['id' => 61, 'name' => 'Estonia', 'locale' => 'EE', 'flag' => '/images/flags/ee.svg', 'phone_code' => '+372'],
            ['id' => 62, 'name' => 'Ethiopia', 'locale' => 'ET', 'flag' => '/images/flags/et.svg', 'phone_code' => '+251'],
            ['id' => 63, 'name' => 'Falkland Islands (Malvinas)', 'locale' => 'FK', 'flag' => '/images/flags/fk.svg', 'phone_code' => '+500'],
            ['id' => 64, 'name' => 'Faroe Islands', 'locale' => 'FO', 'flag' => '/images/flags/fo.svg', 'phone_code' => '+298'],
            ['id' => 65, 'name' => 'Fiji', 'locale' => 'FJ', 'flag' => '/images/flags/fj.svg', 'phone_code' => '+679'],
            ['id' => 66, 'name' => 'Finland', 'locale' => 'FI', 'flag' => '/images/flags/fi.svg', 'phone_code' => '+358'],
            ['id' => 67, 'name' => 'France', 'locale' => 'FR', 'flag' => '/images/flags/fr.svg', 'phone_code' => '+33'],
            ['id' => 68, 'name' => 'French Guiana', 'locale' => 'GF', 'flag' => '/images/flags/gf.svg', 'phone_code' => '+594'],
            ['id' => 69, 'name' => 'French Polynesia', 'locale' => 'PF', 'flag' => '/images/flags/pf.svg', 'phone_code' => '+689'],
            ['id' => 70, 'name' => 'Gabon', 'locale' => 'GA', 'flag' => '/images/flags/ga.svg', 'phone_code' => '+241'],
            ['id' => 71, 'name' => 'Gambia', 'locale' => 'GM', 'flag' => '/images/flags/gm.svg', 'phone_code' => '+220'],
            ['id' => 72, 'name' => 'Georgia', 'locale' => 'GE', 'flag' => '/images/flags/ge.svg', 'phone_code' => '+995'],
            ['id' => 73, 'name' => 'Germany', 'locale' => 'DE', 'flag' => '/images/flags/de.svg', 'phone_code' => '+49'],
            ['id' => 74, 'name' => 'Ghana', 'locale' => 'GH', 'flag' => '/images/flags/gh.svg', 'phone_code' => '+233'],
            ['id' => 75, 'name' => 'Gibraltar', 'locale' => 'GI', 'flag' => '/images/flags/gi.svg', 'phone_code' => '+350'],
            ['id' => 76, 'name' => 'Greece', 'locale' => 'GR', 'flag' => '/images/flags/gr.svg', 'phone_code' => '+30'],
            ['id' => 77, 'name' => 'Greenland', 'locale' => 'GL', 'flag' => '/images/flags/gl.svg', 'phone_code' => '+299'],
            ['id' => 78, 'name' => 'Grenada', 'locale' => 'GD', 'flag' => '/images/flags/gd.svg', 'phone_code' => '+1'],
            ['id' => 79, 'name' => 'Guadeloupe', 'locale' => 'GP', 'flag' => '/images/flags/gp.svg', 'phone_code' => '+590'],
            ['id' => 80, 'name' => 'Guam', 'locale' => 'GU', 'flag' => '/images/flags/gu.svg', 'phone_code' => '+1'],
            ['id' => 81, 'name' => 'Guatemala', 'locale' => 'GT', 'flag' => '/images/flags/gt.svg', 'phone_code' => '+502'],
            ['id' => 82, 'name' => 'Guinea', 'locale' => 'GN', 'flag' => '/images/flags/gn.svg', 'phone_code' => '+224'],
            ['id' => 83, 'name' => 'Guinea-Bissau', 'locale' => 'GW', 'flag' => '/images/flags/gw.svg', 'phone_code' => '+245'],
            ['id' => 84, 'name' => 'Guyana', 'locale' => 'GY', 'flag' => '/images/flags/gy.svg', 'phone_code' => '+592'],
            ['id' => 85, 'name' => 'Haiti', 'locale' => 'HT', 'flag' => '/images/flags/ht.svg', 'phone_code' => '+509'],
            ['id' => 86, 'name' => 'Honduras', 'locale' => 'HN', 'flag' => '/images/flags/hn.svg', 'phone_code' => '+504'],
            ['id' => 87, 'name' => 'Hong Kong', 'locale' => 'HK', 'flag' => '/images/flags/hk.svg', 'phone_code' => '+852'],
            ['id' => 88, 'name' => 'Hungary', 'locale' => 'HU', 'flag' => '/images/flags/hu.svg', 'phone_code' => '+36'],
            ['id' => 89, 'name' => 'Iceland', 'locale' => 'IS', 'flag' => '/images/flags/is.svg', 'phone_code' => '+354'],
            ['id' => 90, 'name' => 'India', 'locale' => 'IN', 'flag' => '/images/flags/in.svg', 'phone_code' => '+91'],
            ['id' => 91, 'name' => 'Indonesia', 'locale' => 'ID', 'flag' => '/images/flags/id.svg', 'phone_code' => '+62'],
            ['id' => 92, 'name' => 'Iran', 'locale' => 'IR', 'flag' => '/images/flags/ir.svg', 'phone_code' => '+98'],
            ['id' => 93, 'name' => 'Iraq', 'locale' => 'IQ', 'flag' => '/images/flags/iq.svg', 'phone_code' => '+964'],
            ['id' => 94, 'name' => 'Ireland', 'locale' => 'IE', 'flag' => '/images/flags/ie.svg', 'phone_code' => '+353'],
            ['id' => 95, 'name' => 'Israel', 'locale' => 'IL', 'flag' => '/images/flags/il.svg', 'phone_code' => '+972'],
            ['id' => 96, 'name' => 'Italy', 'locale' => 'IT', 'flag' => '/images/flags/it.svg', 'phone_code' => '+39'],
            ['id' => 97, 'name' => 'Jamaica', 'locale' => 'JM', 'flag' => '/images/flags/jm.svg', 'phone_code' => '+1'],
            ['id' => 98, 'name' => 'Japan', 'locale' => 'JP', 'flag' => '/images/flags/jp.svg', 'phone_code' => '+81'],
            ['id' => 99, 'name' => 'Jordan', 'locale' => 'JO', 'flag' => '/images/flags/jo.svg', 'phone_code' => '+962'],
            ['id' => 100, 'name' => 'Kazakhstan', 'locale' => 'KZ', 'flag' => '/images/flags/kz.svg', 'phone_code' => '+7'],
            ['id' => 101, 'name' => 'Kenya', 'locale' => 'KE', 'flag' => '/images/flags/ke.svg', 'phone_code' => '+254'],
            ['id' => 102, 'name' => 'Kiribati', 'locale' => 'KI', 'flag' => '/images/flags/ki.svg', 'phone_code' => '+686'],
            ['id' => 103, 'name' => 'Kuwait', 'locale' => 'KW', 'flag' => '/images/flags/kw.svg', 'phone_code' => '+965'],
            ['id' => 104, 'name' => 'Kyrgyzstan', 'locale' => 'KG', 'flag' => '/images/flags/kg.svg', 'phone_code' => '+996'],
            ['id' => 105, 'name' => 'Lao', 'locale' => 'LA', 'flag' => '/images/flags/la.svg', 'phone_code' => '+856'],
            ['id' => 106, 'name' => 'Latvia', 'locale' => 'LV', 'flag' => '/images/flags/lv.svg', 'phone_code' => '+371'],
            ['id' => 107, 'name' => 'Lebanon', 'locale' => 'LB', 'flag' => '/images/flags/lb.svg', 'phone_code' => '+961'],
            ['id' => 108, 'name' => 'Lesotho', 'locale' => 'LS', 'flag' => '/images/flags/ls.svg', 'phone_code' => '+266'],
            ['id' => 109, 'name' => 'Liberia', 'locale' => 'LR', 'flag' => '/images/flags/lr.svg', 'phone_code' => '+231'],
            ['id' => 110, 'name' => 'Libya', 'locale' => 'LY', 'flag' => '/images/flags/ly.svg', 'phone_code' => '+218'],
            ['id' => 111, 'name' => 'Liechtenstein', 'locale' => 'LI', 'flag' => '/images/flags/li.svg', 'phone_code' => '+423'],
            ['id' => 112, 'name' => 'Lithuania', 'locale' => 'LT', 'flag' => '/images/flags/lt.svg', 'phone_code' => '+370'],
            ['id' => 113, 'name' => 'Luxembourg', 'locale' => 'LU', 'flag' => '/images/flags/lu.svg', 'phone_code' => '+352'],
            ['id' => 114, 'name' => 'Macao', 'locale' => 'MO', 'flag' => '/images/flags/mo.svg', 'phone_code' => '+853'],
            ['id' => 115, 'name' => 'Macedonia', 'locale' => 'MK', 'flag' => '/images/flags/mk.svg', 'phone_code' => '+389'],
            ['id' => 116, 'name' => 'Madagascar', 'locale' => 'MG', 'flag' => '/images/flags/mg.svg', 'phone_code' => '+261'],
            ['id' => 117, 'name' => 'Malawi', 'locale' => 'MW', 'flag' => '/images/flags/mw.svg', 'phone_code' => '+265'],
            ['id' => 118, 'name' => 'Malaysia', 'locale' => 'MY', 'flag' => '/images/flags/my.svg', 'phone_code' => '+60'],
            ['id' => 119, 'name' => 'Maldives', 'locale' => 'MV', 'flag' => '/images/flags/mv.svg', 'phone_code' => '+960'],
            ['id' => 120, 'name' => 'Mali', 'locale' => 'ML', 'flag' => '/images/flags/ml.svg', 'phone_code' => '+223'],
            ['id' => 121, 'name' => 'Malta', 'locale' => 'MT', 'flag' => '/images/flags/mt.svg', 'phone_code' => '+356'],
            ['id' => 122, 'name' => 'Marshall Islands', 'locale' => 'MH', 'flag' => '/images/flags/mh.svg', 'phone_code' => '+692'],
            ['id' => 123, 'name' => 'Martinique', 'locale' => 'MQ', 'flag' => '/images/flags/mq.svg', 'phone_code' => '+596'],
            ['id' => 124, 'name' => 'Mauritania', 'locale' => 'MR', 'flag' => '/images/flags/mr.svg', 'phone_code' => '+222'],
            ['id' => 125, 'name' => 'Mauritius', 'locale' => 'MU', 'flag' => '/images/flags/mu.svg', 'phone_code' => '+230'],
            ['id' => 126, 'name' => 'Mayotte', 'locale' => 'YT', 'flag' => '/images/flags/yt.svg', 'phone_code' => '+262'],
            ['id' => 127, 'name' => 'Mexico', 'locale' => 'MX', 'flag' => '/images/flags/mx.svg', 'phone_code' => '+52'],
            ['id' => 128, 'name' => 'Micronesia', 'locale' => 'FM', 'flag' => '/images/flags/fm.svg', 'phone_code' => '+691'],
            ['id' => 129, 'name' => 'Moldova', 'locale' => 'MD', 'flag' => '/images/flags/md.svg', 'phone_code' => '+373'],
            ['id' => 130, 'name' => 'Monaco', 'locale' => 'MC', 'flag' => '/images/flags/mc.svg', 'phone_code' => '+377'],
            ['id' => 131, 'name' => 'Mongolia', 'locale' => 'MN', 'flag' => '/images/flags/mn.svg', 'phone_code' => '+976'],
            ['id' => 132, 'name' => 'Montenegro', 'locale' => 'ME', 'flag' => '/images/flags/me.svg', 'phone_code' => '+382'],
            ['id' => 133, 'name' => 'Montserrat', 'locale' => 'MS', 'flag' => '/images/flags/ms.svg', 'phone_code' => '+1'],
            ['id' => 134, 'name' => 'Morocco', 'locale' => 'MA', 'flag' => '/images/flags/ma.svg', 'phone_code' => '+212'],
            ['id' => 135, 'name' => 'Mozambique', 'locale' => 'MZ', 'flag' => '/images/flags/mz.svg', 'phone_code' => '+258'],
            ['id' => 136, 'name' => 'Myanmar', 'locale' => 'MM', 'flag' => '/images/flags/mm.svg', 'phone_code' => '+95'],
            ['id' => 137, 'name' => 'Namibia', 'locale' => 'NA', 'flag' => '/images/flags/na.svg', 'phone_code' => '+264'],
            ['id' => 138, 'name' => 'Nauru', 'locale' => 'NR', 'flag' => '/images/flags/nr.svg', 'phone_code' => '+674'],
            ['id' => 139, 'name' => 'Nepal', 'locale' => 'NP', 'flag' => '/images/flags/np.svg', 'phone_code' => '+977'],
            ['id' => 140, 'name' => 'Netherlands', 'locale' => 'NL', 'flag' => '/images/flags/nl.svg', 'phone_code' => '+31'],
            ['id' => 141, 'name' => 'New Caledonia', 'locale' => 'NC', 'flag' => '/images/flags/nc.svg', 'phone_code' => '+687'],
            ['id' => 142, 'name' => 'New Zealand', 'locale' => 'NZ', 'flag' => '/images/flags/nz.svg', 'phone_code' => '+64'],
            ['id' => 143, 'name' => 'Nicaragua', 'locale' => 'NI', 'flag' => '/images/flags/ni.svg', 'phone_code' => '+505'],
            ['id' => 144, 'name' => 'Niger', 'locale' => 'NE', 'flag' => '/images/flags/ne.svg', 'phone_code' => '+227'],
            ['id' => 145, 'name' => 'Nigeria', 'locale' => 'NG', 'flag' => '/images/flags/ng.svg', 'phone_code' => '+234'],
            ['id' => 146, 'name' => 'Northern Mariana Islands', 'locale' => 'MP', 'flag' => '/images/flags/mp.svg', 'phone_code' => '+1'],
            ['id' => 147, 'name' => 'Norway', 'locale' => 'NO', 'flag' => '/images/flags/no.svg', 'phone_code' => '+47'],
            ['id' => 148, 'name' => 'Oman', 'locale' => 'OM', 'flag' => '/images/flags/om.svg', 'phone_code' => '+968'],
            ['id' => 149, 'name' => 'Pakistan', 'locale' => 'PK', 'flag' => '/images/flags/pk.svg', 'phone_code' => '+92'],
            ['id' => 150, 'name' => 'Palau', 'locale' => 'PW', 'flag' => '/images/flags/pw.svg', 'phone_code' => '+680'],
            ['id' => 151, 'name' => 'Palestine', 'locale' => 'PS', 'flag' => '/images/flags/ps.svg', 'phone_code' => '+970'],
            ['id' => 152, 'name' => 'Panama', 'locale' => 'PA', 'flag' => '/images/flags/pa.svg', 'phone_code' => '+507'],
            ['id' => 153, 'name' => 'Papua New Guinea', 'locale' => 'PG', 'flag' => '/images/flags/pg.svg', 'phone_code' => '+675'],
            ['id' => 154, 'name' => 'Paraguay', 'locale' => 'PY', 'flag' => '/images/flags/py.svg', 'phone_code' => '+595'],
            ['id' => 155, 'name' => 'Peru', 'locale' => 'PE', 'flag' => '/images/flags/pe.svg', 'phone_code' => '+51'],
            ['id' => 156, 'name' => 'Philippines', 'locale' => 'PH', 'flag' => '/images/flags/ph.svg', 'phone_code' => '+63'],
            ['id' => 157, 'name' => 'Poland', 'locale' => 'PL', 'flag' => '/images/flags/pl.svg', 'phone_code' => '+448'],
            ['id' => 158, 'name' => 'Portugal', 'locale' => 'PT', 'flag' => '/images/flags/pt.svg', 'phone_code' => '+351'],
            ['id' => 159, 'name' => 'Puerto Rico', 'locale' => 'PR', 'flag' => '/images/flags/pr.svg', 'phone_code' => '+1'],
            ['id' => 160, 'name' => 'Qatar', 'locale' => 'QA', 'flag' => '/images/flags/qa.svg', 'phone_code' => '+974'],
            ['id' => 161, 'name' => 'Romania', 'locale' => 'RO', 'flag' => '/images/flags/ro.svg', 'phone_code' => '+40'],
            ['id' => 162, 'name' => 'Russian Federation', 'locale' => 'RU', 'flag' => '/images/flags/ru.svg', 'phone_code' => '+7'],
            ['id' => 163, 'name' => 'Rwanda', 'locale' => 'RW', 'flag' => '/images/flags/rw.svg', 'phone_code' => '+250'],
            ['id' => 164, 'name' => 'Saint Kitts and Nevis', 'locale' => 'KN', 'flag' => '/images/flags/kn.svg', 'phone_code' => '+1'],
            ['id' => 165, 'name' => 'Saint Lucia', 'locale' => 'LC', 'flag' => '/images/flags/lc.svg', 'phone_code' => '+1'],
            ['id' => 166, 'name' => 'Saint Vincent and the Grenadines', 'locale' => 'VC', 'flag' => '/images/flags/vc.svg', 'phone_code' => '+1'],
            ['id' => 167, 'name' => 'Samoa', 'locale' => 'WS', 'flag' => '/images/flags/ws.svg', 'phone_code' => '+685'],
            ['id' => 168, 'name' => 'San Marino', 'locale' => 'SM', 'flag' => '/images/flags/sm.svg', 'phone_code' => '+378'],
            ['id' => 169, 'name' => 'Sao Tome and Principe', 'locale' => 'ST', 'flag' => '/images/flags/st.svg', 'phone_code' => '+239'],
            ['id' => 170, 'name' => 'Saudi Arabia', 'locale' => 'SA', 'flag' => '/images/flags/sa.svg', 'phone_code' => '+966'],
            ['id' => 171, 'name' => 'Senegal', 'locale' => 'SN', 'flag' => '/images/flags/sn.svg', 'phone_code' => '+221'],
            ['id' => 172, 'name' => 'Serbia', 'locale' => 'RS', 'flag' => '/images/flags/rs.svg', 'phone_code' => '+381'],
            ['id' => 173, 'name' => 'Seychelles', 'locale' => 'SC', 'flag' => '/images/flags/sc.svg', 'phone_code' => '+248'],
            ['id' => 174, 'name' => 'Sierra Leone', 'locale' => 'SL', 'flag' => '/images/flags/sl.svg', 'phone_code' => '+232'],
            ['id' => 175, 'name' => 'Singapore', 'locale' => 'SG', 'flag' => '/images/flags/sg.svg', 'phone_code' => '+65'],
            ['id' => 176, 'name' => 'Sint Maarten (Dutch part)', 'locale' => 'SX', 'flag' => '/images/flags/sx.svg', 'phone_code' => '+1'],
            ['id' => 177, 'name' => 'Slovakia', 'locale' => 'SK', 'flag' => '/images/flags/sk.svg', 'phone_code' => '+421'],
            ['id' => 178, 'name' => 'Slovenia', 'locale' => 'SI', 'flag' => '/images/flags/si.svg', 'phone_code' => '+386'],
            ['id' => 179, 'name' => 'Solomon Islands', 'locale' => 'SB', 'flag' => '/images/flags/sb.svg', 'phone_code' => '+677'],
            ['id' => 180, 'name' => 'Somalia', 'locale' => 'SO', 'flag' => '/images/flags/so.svg', 'phone_code' => '+252'],
            ['id' => 181, 'name' => 'South Africa', 'locale' => 'ZA', 'flag' => '/images/flags/za.svg', 'phone_code' => '+27'],
            ['id' => 182, 'name' => 'South Korea', 'locale' => 'KR', 'flag' => '/images/flags/kr.svg', 'phone_code' => '+82'],
            ['id' => 183, 'name' => 'South Sudan', 'locale' => 'SS', 'flag' => '/images/flags/ss.svg', 'phone_code' => '+211'],
            ['id' => 184, 'name' => 'Spain', 'locale' => 'ES', 'flag' => '/images/flags/es.svg', 'phone_code' => '+34'],
            ['id' => 185, 'name' => 'Sri Lanka', 'locale' => 'LK', 'flag' => '/images/flags/lk.svg', 'phone_code' => '+94'],
            ['id' => 186, 'name' => 'Sudan', 'locale' => 'SD', 'flag' => '/images/flags/sd.svg', 'phone_code' => '+249'],
            ['id' => 187, 'name' => 'Suriname', 'locale' => 'SR', 'flag' => '/images/flags/sr.svg', 'phone_code' => '+597'],
            ['id' => 188, 'name' => 'Sweden', 'locale' => 'SE', 'flag' => '/images/flags/se.svg', 'phone_code' => '+46'],
            ['id' => 189, 'name' => 'Switzerland', 'locale' => 'CH', 'flag' => '/images/flags/ch.svg', 'phone_code' => '+41'],
            ['id' => 190, 'name' => 'Syrian Arab Republic', 'locale' => 'SY', 'flag' => '/images/flags/sy.svg', 'phone_code' => '+963'],
            ['id' => 191, 'name' => 'Taiwan', 'locale' => 'TW', 'flag' => '/images/flags/tw.svg', 'phone_code' => '+886'],
            ['id' => 192, 'name' => 'Tajikistan', 'locale' => 'TJ', 'flag' => '/images/flags/tj.svg', 'phone_code' => '+992'],
            ['id' => 193, 'name' => 'Tanzania', 'locale' => 'TZ', 'flag' => '/images/flags/tz.svg', 'phone_code' => '+255'],
            ['id' => 194, 'name' => 'Thailand', 'locale' => 'TH', 'flag' => '/images/flags/th.svg', 'phone_code' => '+66'],
            ['id' => 195, 'name' => 'Timor-Leste', 'locale' => 'TL', 'flag' => '/images/flags/tl.svg', 'phone_code' => '670'],
            ['id' => 196, 'name' => 'Togo', 'locale' => 'TG', 'flag' => '/images/flags/tg.svg', 'phone_code' => '+228'],
            ['id' => 197, 'name' => 'Tonga', 'locale' => 'TO', 'flag' => '/images/flags/to.svg', 'phone_code' => '+676'],
            ['id' => 198, 'name' => 'Trinidad and Tobago', 'locale' => 'TT', 'flag' => '/images/flags/tt.svg', 'phone_code' => '+1'],
            ['id' => 199, 'name' => 'Tunisia', 'locale' => 'TN', 'flag' => '/images/flags/tn.svg', 'phone_code' => '+216'],
            ['id' => 200, 'name' => 'Turkey', 'locale' => 'TR', 'flag' => '/images/flags/tr.svg', 'phone_code' => '+90'],
            ['id' => 201, 'name' => 'Turkmenistan', 'locale' => 'TM', 'flag' => '/images/flags/tm.svg', 'phone_code' => '+993'],
            ['id' => 202, 'name' => 'Turks and Caicos Islands', 'locale' => 'TC', 'flag' => '/images/flags/tc.svg', 'phone_code' => '+1'],
            ['id' => 203, 'name' => 'Uganda', 'locale' => 'UG', 'flag' => '/images/flags/ug.svg', 'phone_code' => '+256'],
            ['id' => 204, 'name' => 'Ukraine', 'locale' => 'UA', 'flag' => '/images/flags/ua.svg', 'phone_code' => '+380'],
            ['id' => 205, 'name' => 'United Arab Emirates', 'locale' => 'AE', 'flag' => '/images/flags/ae.svg', 'phone_code' => '+981'],
            ['id' => 206, 'name' => 'United Kingdom', 'locale' => 'GB', 'flag' => '/images/flags/gb.svg', 'phone_code' => '+44'],
            ['id' => 207, 'name' => 'United States', 'locale' => 'US', 'flag' => '/images/flags/us.svg', 'phone_code' => '+1'],
            ['id' => 208, 'name' => 'Uruguay', 'locale' => 'UY', 'flag' => '/images/flags/uy.svg', 'phone_code' => '+598'],
            ['id' => 209, 'name' => 'Uzbekistan', 'locale' => 'UZ', 'flag' => '/images/flags/uz.svg', 'phone_code' => '+998'],
            ['id' => 210, 'name' => 'Vanuatu', 'locale' => 'VU', 'flag' => '/images/flags/vu.svg', 'phone_code' => '+678'],
            ['id' => 211, 'name' => 'Venezuela', 'locale' => 'VE', 'flag' => '/images/flags/ve.svg', 'phone_code' => '+58'],
            ['id' => 212, 'name' => 'Viet Nam', 'locale' => 'VN', 'flag' => '/images/flags/vn.svg', 'phone_code' => '+84'],
            ['id' => 213, 'name' => 'Virgin Islands, British', 'locale' => 'VG', 'flag' => '/images/flags/vg.svg', 'phone_code' => '+1'],
            ['id' => 214, 'name' => 'Virgin Islands, U.S.', 'locale' => 'VI', 'flag' => '/images/flags/vi.svg', 'phone_code' => '+1'],
            ['id' => 215, 'name' => 'Yemen', 'locale' => 'YE', 'flag' => '/images/flags/ye.svg', 'phone_code' => '+967'],
            ['id' => 216, 'name' => 'Zambia', 'locale' => 'ZM', 'flag' => '/images/flags/zm.svg', 'phone_code' => '+260'],
            ['id' => 217, 'name' => 'Zimbabwe', 'locale' => 'ZW', 'flag' => '/images/flags/zw.svg', 'phone_code' => '+264'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
