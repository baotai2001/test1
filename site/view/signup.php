<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>


    <div class="modal">
        <form class="modal-content" action="#" method="post">
            <div class="imgcontainer">
                <img src="../Images/logo-shop.png">
            </div>
            <h3 style="margin-bottom:3vw;margin-left: 10vw;"> WELCOME A O DAY CO BAN GIAY MEMBER</h3>
            <div class="container">
                <input type="text" placeholder="Email address" name="userName">
                <input type="password" placeholder="Password" name="passWord">
                <input type="text" placeholder="First Name" name="firstName">
                <input type="password" placeholder="Last Name" name="lastName">
                <input type="date" id="dt" onchange="mydate1();" hidden/>
                <input type="text" id="ndt" value="Date Of Birth" onclick="mydate();" />
                <p class="term">
                    Get a O DAY CO BAN GIAY Member Reward every year on your Birthday
                </p>
                <label>
                <select name="country">
                      <optgroup label="Country">
                        
                          <option value="AF" class="">Afghanistan</option>
                        
                          <option value="AL" class="">Albania</option>
                        
                          <option value="DZ" class="">Algeria</option>
                        
                          <option value="AS" class="">American Samoa</option>
                        
                          <option value="AD" class="">Andorra</option>
                        
                          <option value="AO" class="">Angola</option>
                        
                          <option value="AI" class="">Anguilla</option>
                        
                          <option value="AQ" class="">Antarctica</option>
                        
                          <option value="AG" class="">Antigua and Barbuda</option>
                        
                          <option value="AR" class="">Argentina</option>
                        
                          <option value="AM" class="">Armenia</option>
                        
                          <option value="AW" class="">Aruba</option>
                        
                          <option value="AU" class="">Australia</option>
                        
                          <option value="AT" class="">Austria</option>
                        
                          <option value="AZ" class="">Azerbaijan</option>
                        
                          <option value="BS" class="">Bahamas</option>
                        
                          <option value="BH" class="">Bahrain</option>
                        
                          <option value="BD" class="">Bangladesh</option>
                        
                          <option value="BB" class="">Barbados</option>
                        
                          <option value="BY" class="">Belarus</option>
                        
                          <option value="BE" class="">Belgium</option>
                        
                          <option value="BZ" class="">Belize</option>
                        
                          <option value="BJ" class="">Benin</option>
                        
                          <option value="BM" class="">Bermuda</option>
                        
                          <option value="BT" class="">Bhutan</option>
                        
                          <option value="BO" class="">Bolivia</option>
                        
                          <option value="BA" class="">Bosnia and Herzegovina</option>
                        
                          <option value="BW" class="">Botswana</option>
                        
                          <option value="BV" class="">Bouvet Island</option>
                        
                          <option value="BR" class="">Brazil</option>
                        
                          <option value="IO" class="">British Indian Ocean Territory</option>
                        
                          <option value="BN" class="">Brunei Darussalam</option>
                        
                          <option value="BG" class="">Bulgaria</option>
                        
                          <option value="BF" class="">Burkina Faso</option>
                        
                          <option value="BI" class="">Burundi</option>
                        
                          <option value="KH" class="">Cambodia</option>
                        
                          <option value="CM" class="">Cameroon</option>
                        
                          <option value="CA" class="">Canada</option>
                        
                          <option value="CV" class="">Cape Verde</option>
                        
                          <option value="KY" class="">Cayman Islands</option>
                        
                          <option value="CF" class="">Central African Republic</option>
                        
                          <option value="TD" class="">Chad</option>
                        
                          <option value="CL" class="">Chile</option>
                        
                          <option value="CN" class="">China Mainland </option>
                        
                          <option value="CX" class="">Christmas Island</option>
                        
                          <option value="CC" class="">Cocos (Keeling) Islands</option>
                        
                          <option value="CO" class="">Colombia</option>
                        
                          <option value="KM" class="">Comoros</option>
                        
                          <option value="CG" class="">Congo</option>
                        
                          <option value="CD" class="">Congo, The DRC</option>
                        
                          <option value="CK" class="">Cook Islands</option>
                        
                          <option value="CR" class="">Costa Rica</option>
                        
                          <option value="CI" class="">Cote d'Ivoire</option>
                        
                          <option value="HR" class="">Croatia (local name: Hrvatska)</option>
                        
                          <option value="CU" class="">Cuba</option>
                        
                          <option value="CY" class="">Cyprus</option>
                        
                          <option value="CZ" class="">Czech Republic</option>
                        
                          <option value="DK" class="">Denmark</option>
                        
                          <option value="DJ" class="">Djibouti</option>
                        
                          <option value="DM" class="">Dominica</option>
                        
                          <option value="DO" class="">Dominican Republic</option>
                        
                          <option value="TL" class="">East Timor</option>
                        
                          <option value="EC" class="">Ecuador</option>
                        
                          <option value="EG" class="">Egypt</option>
                        
                          <option value="SV" class="">El Salvador</option>
                        
                          <option value="GQ" class="">Equatorial Guinea</option>
                        
                          <option value="ER" class="">Eritrea</option>
                        
                          <option value="EE" class="">Estonia</option>
                        
                          <option value="ET" class="">Ethiopia</option>
                        
                          <option value="FK" class="">Falkland Islands (Malvinas)</option>
                        
                          <option value="FO" class="">Faroe Islands</option>
                        
                          <option value="FJ" class="">Fiji</option>
                        
                          <option value="FI" class="">Finland</option>
                        
                          <option value="FR" class="">France</option>
                        
                          <option value="GF" class="">French Guiana</option>
                        
                          <option value="PF" class="">French Polynesia</option>
                        
                          <option value="TF" class="">French Southern Territories</option>
                        
                          <option value="GA" class="">Gabon</option>
                        
                          <option value="GM" class="">Gambia</option>
                        
                          <option value="GE" class="">Georgia</option>
                        
                          <option value="DE" class="">Germany</option>
                        
                          <option value="GH" class="">Ghana</option>
                        
                          <option value="GI" class="">Gibraltar</option>
                        
                          <option value="GR" class="">Greece</option>
                        
                          <option value="GL" class="">Greenland</option>
                        
                          <option value="GD" class="">Grenada</option>
                        
                          <option value="GP" class="">Guadeloupe</option>
                        
                          <option value="GU" class="">Guam</option>
                        
                          <option value="GT" class="">Guatemala</option>
                        
                          <option value="GN" class="">Guinea</option>
                        
                          <option value="GW" class="">Guinea-Bissau</option>
                        
                          <option value="GY" class="">Guyana</option>
                        
                          <option value="HT" class="">Haiti</option>
                        
                          <option value="HM" class="">Heard and McDonald Islands</option>
                        
                          <option value="VA" class="">Holy See (Vatican City State)</option>
                        
                          <option value="HN" class="">Honduras</option>
                        
                          <option value="HK" class="">Hong Kong</option>
                        
                          <option value="HU" class="">Hungary</option>
                        
                          <option value="IS" class="">Iceland</option>
                        
                          <option value="IN" class="">India</option>
                        
                          <option value="ID" class="">Indonesia</option>
                        
                          <option value="IR" class="">Iran (Islamic Republic of)</option>
                        
                          <option value="IQ" class="">Iraq</option>
                        
                          <option value="IE" class="">Ireland</option>
                        
                          <option value="IL" class="">Israel</option>
                        
                          <option value="IT" class="">Italy</option>
                        
                          <option value="JM" class="">Jamaica</option>
                        
                          <option value="JP" class="">Japan</option>
                        
                          <option value="JO" class="">Jordan</option>
                        
                          <option value="KZ" class="">Kazakhstan</option>
                        
                          <option value="KE" class="">Kenya</option>
                        
                          <option value="KI" class="">Kiribati</option>
                        
                          <option value="KP" class="">Korea, D.P.R.O.</option>
                        
                          <option value="KR" class="">Korea, Republic of</option>
                        
                          <option value="KW" class="">Kuwait</option>
                        
                          <option value="KG" class="">Kyrgyzstan</option>
                        
                          <option value="LA" class="">Laos</option>
                        
                          <option value="LV" class="">Latvia</option>
                        
                          <option value="LB" class="">Lebanon</option>
                        
                          <option value="LS" class="">Lesotho</option>
                        
                          <option value="LR" class="">Liberia</option>
                        
                          <option value="LY" class="">Libyan Arab Jamahiriya</option>
                        
                          <option value="LI" class="">Liechtenstein</option>
                        
                          <option value="LT" class="">Lithuania</option>
                        
                          <option value="LU" class="">Luxembourg</option>
                        
                          <option value="MO" class="">Macau</option>
                        
                          <option value="MK" class="">Macedonia</option>
                        
                          <option value="MG" class="">Madagascar</option>
                        
                          <option value="MW" class="">Malawi</option>
                        
                          <option value="MY" class="">Malaysia</option>
                        
                          <option value="MV" class="">Maldives</option>
                        
                          <option value="ML" class="">Mali</option>
                        
                          <option value="MT" class="">Malta</option>
                        
                          <option value="MH" class="">Marshall Islands</option>
                        
                          <option value="MQ" class="">Martinique</option>
                        
                          <option value="MR" class="">Mauritania</option>
                        
                          <option value="MU" class="">Mauritius</option>
                        
                          <option value="YT" class="">Mayotte</option>
                        
                          <option value="MX" class="">Mexico</option>
                        
                          <option value="FM" class="">Micronesia, Federated States of</option>
                        
                          <option value="MD" class="">Moldova, Republic of</option>
                        
                          <option value="MC" class="">Monaco</option>
                        
                          <option value="MN" class="">Mongolia</option>
                        
                          <option value="ME" class="">Montenegro</option>
                        
                          <option value="MS" class="">Montserrat</option>
                        
                          <option value="MA" class="">Morocco</option>
                        
                          <option value="MZ" class="">Mozambique</option>
                        
                          <option value="MM" class="">Myanmar (Burma)</option>
                        
                          <option value="NA" class="">Namibia</option>
                        
                          <option value="NR" class="">Nauru</option>
                        
                          <option value="NP" class="">Nepal</option>
                        
                          <option value="NL" class="">Netherlands</option>
                        
                          <option value="NC" class="">New Caledonia</option>
                        
                          <option value="NZ" class="">New Zealand</option>
                        
                          <option value="NI" class="">Nicaragua</option>
                        
                          <option value="NE" class="">Niger</option>
                        
                          <option value="NG" class="">Nigeria</option>
                        
                          <option value="NU" class="">Niue</option>
                        
                          <option value="NF" class="">Norfolk Island</option>
                        
                          <option value="MP" class="">Northern Mariana Islands</option>
                        
                          <option value="NO" class="">Norway</option>
                        
                          <option value="OM" class="">Oman</option>
                        
                          <option value="PK" class="">Pakistan</option>
                        
                          <option value="PW" class="">Palau</option>
                        
                          <option value="PA" class="">Panama</option>
                        
                          <option value="PG" class="">Papua New Guinea</option>
                        
                          <option value="PY" class="">Paraguay</option>
                        
                          <option value="PE" class="">Peru</option>
                        
                          <option value="PH" class="">Philippines</option>
                        
                          <option value="PN" class="">Pitcairn</option>
                        
                          <option value="PL" class="">Poland</option>
                        
                          <option value="PT" class="">Portugal</option>
                        
                          <option value="PR" class="">Puerto Rico</option>
                        
                          <option value="QA" class="">Qatar</option>
                        
                          <option value="RE" class="">Reunion</option>
                        
                          <option value="RO" class="">Romania</option>
                        
                          <option value="RU" class="">Russian Federation</option>
                        
                          <option value="RW" class="">Rwanda</option>
                        
                          <option value="KN" class="">Saint Kitts and Nevis</option>
                        
                          <option value="LC" class="">Saint Lucia</option>
                        
                          <option value="VC" class="">Saint Vincent and the Grenadines</option>
                        
                          <option value="WS" class="">Samoa</option>
                        
                          <option value="SM" class="">San Marino</option>
                        
                          <option value="ST" class="">Sao Tome and Principe</option>
                        
                          <option value="SA" class="">Saudi Arabia</option>
                        
                          <option value="SN" class="">Senegal</option>
                        
                          <option value="RS" class="">Serbia</option>
                        
                          <option value="SC" class="">Seychelles</option>
                        
                          <option value="SL" class="">Sierra Leone</option>
                        
                          <option value="SG" class="">Singapore</option>
                        
                          <option value="SK" class="">Slovakia (Slovak Republic)</option>
                        
                          <option value="SI" class="">Slovenia</option>
                        
                          <option value="SB" class="">Solomon Islands</option>
                        
                          <option value="SO" class="">Somalia</option>
                        
                          <option value="ZA" class="">South Africa</option>
                        
                          <option value="GS" class="">South Georgia and the South Sandwich Islands</option>
                        
                          <option value="SS" class="">South Sudan</option>
                        
                          <option value="ES" class="">Spain</option>
                        
                          <option value="LK" class="">Sri Lanka</option>
                        
                          <option value="SH" class="">St. Helena</option>
                        
                          <option value="PM" class="">St. Pierre and Miquelon</option>
                        
                          <option value="SD" class="">Sudan</option>
                        
                          <option value="SR" class="">Suriname</option>
                        
                          <option value="SJ" class="">Svalbard and Jan Mayen Islands</option>
                        
                          <option value="SZ" class="">Swaziland</option>
                        
                          <option value="SE" class="">Sweden</option>
                        
                          <option value="CH" class="">Switzerland</option>
                        
                          <option value="SY" class="">Syrian Arab Republic</option>
                        
                          <option value="TW" class="">Taiwan</option>
                        
                          <option value="TJ" class="">Tajikistan</option>
                        
                          <option value="TZ" class="">Tanzania, United Republic of</option>
                        
                          <option value="TH" class="">Thailand</option>
                        
                          <option value="TG" class="">Togo</option>
                        
                          <option value="TK" class="">Tokelau</option>
                        
                          <option value="TO" class="">Tonga</option>
                        
                          <option value="TT" class="">Trinidad and Tobago</option>
                        
                          <option value="TN" class="">Tunisia</option>
                        
                          <option value="TR" class="">Turkey</option>
                        
                          <option value="TM" class="">Turkmenistan</option>
                        
                          <option value="TC" class="">Turks and Caicos Islands</option>
                        
                          <option value="TV" class="">Tuvalu</option>
                        
                          <option value="UM" class="">U.S. Minor Islands</option>
                        
                          <option value="UG" class="">Uganda</option>
                        
                          <option value="UA" class="">Ukraine</option>
                        
                          <option value="AE" class="">United Arab Emirates</option>
                        
                          <option value="GB" class="">United Kingdom</option>
                        
                          <option value="US" class="">United States</option>
                        
                          <option value="UY" class="">Uruguay</option>
                        
                          <option value="UZ" class="">Uzbekistan</option>
                        
                          <option value="VU" class="">Vanuatu</option>
                        
                          <option value="VE" class="">Venezuela</option>
                        
                          <option value="VN" selected="selected" class="">Vietnam</option>
                        
                          <option value="VG" class="">Virgin Islands (British)</option>
                        
                          <option value="VI" class="">Virgin Islands (U.S.)</option>
                        
                          <option value="WF" class="">Wallis and Futuna Islands</option>
                        
                          <option value="EH" class="">Western Sahara</option>
                        
                          <option value="YE" class="">Yemen</option>
                        
                          <option value="ZM" class="">Zambia</option>
                        
                          <option value="ZW" class="">Zimbabwe</option>
                        
                      </optgroup>
                    </select>
                </label>
            </div>
            <label>
                <select name="Sex">
                      <optgroup label="Sex">
                        
                          <option value="Ma" class="">Male</option>
                        
                          <option value="Fe" class="">Female</option>

                          <option value="Be" class="">Others</option>

                      </optgroup>
                </select>
            </label>
            <input type="checkbox"><span class="keep">Sign up for emails to get updates from O DAY CO BAN GIAY on products, offers and your Member benefits</span>
            <p class="term">
                By creating an account , you agree to O DAY CO BAN GIAY <a href=#>Privacy Policy</a> and <a href=#>Terms of Use</a>
            </p>
            <button type="submit">JOIN US</button>
            <span class="jus">Already a Member ? <a href="#">Sign In</a></span>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        </form>
    </div>

</body>
<script>
    function mydate() {
        //alert("");
        document.getElementById("dt").hidden = false;
        document.getElementById("ndt").hidden = true;
    }

    function mydate1() {
        d = new Date(document.getElementById("dt").value);
        dt = d.getDate();
        mn = d.getMonth();
        mn++;
        yy = d.getFullYear();
        document.getElementById("ndt").value = dt + "/" + mn + "/" + yy
        document.getElementById("ndt").hidden = false;
        document.getElementById("dt").hidden = true;
    }
</script>

</html>