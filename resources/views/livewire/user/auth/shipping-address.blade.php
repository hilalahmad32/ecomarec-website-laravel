<div>
    <x-slot name='title'>Shipping Address</x-slot>
    <div class="breadcrumbs custom-font theme-clearfix">
        <ul class="breadcrumb">
            <li><a href="https://demo.wpthemego.com/themes/sw_revo/wc_vendor">Home</a><span class="go-page"></span></li>
            <li class="active"><span>My Account</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            @if (Auth::user()->verified != 1)
                <h5>Please Verified Your Account <a href="{{ route('user.verify-account') }}">Verified Account</a> </h5>
            @endif
            <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="post-7 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="entry-summary">
                            <div class="woocommerce">
                                <x-user-navigation />
                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <form method="post" wire:submit.prevent='upShippingAddress'>

                                        <h3>Shipping address</h3>
                                        <div class="woocommerce-address-fields">

                                            <div class="woocommerce-address-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                    id="first_name_field" data-priority="10"><label for="first_name"
                                                        class="">First name&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="first_name" id="first_name"
                                                            placeholder="" autocomplete="given-name"></span></p>
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-last validate-required" id="last_name_field"
                                                    data-priority="20"><label for="last_name" class="">Last
                                                        name&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="last_name" id="last_name"
                                                            placeholder="" autocomplete="family-name"></span></p>
                                                @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide" id="company_name_field"
                                                    data-priority="30"><label for="company_name" class="">Company
                                                        name&nbsp;<span class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="company_name"
                                                            id="company_name" placeholder=""
                                                            autocomplete="organization"></span></p>
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                    id="shipping_country_field" data-priority="40"><label for="country"
                                                        class="">Country /
                                                        Region&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select wire:model="country"
                                                            id="country"
                                                            class="country_to_state country_select  select2-hidden-accessible"
                                                            autocomplete="country" tabindex="-1" aria-hidden="true">
                                                            <option value="">Select a country / region???</option>
                                                            <option value="AX">??land Islands</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD" selected="selected">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="PW">Belau</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Saint Eustatius and Saba
                                                            </option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory
                                                            </option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo (Brazzaville)</option>
                                                            <option value="CD">Congo (Kinshasa)</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Cura??ao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands
                                                            </option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="CI">Ivory Coast</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territory</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="ST">S??o Tom?? and Pr??ncipe</option>
                                                            <option value="BL">Saint Barth??lemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="SX">Saint Martin (Dutch part)</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia/Sandwich Islands
                                                            </option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom (UK)</option>
                                                            <option value="US">United States (US)</option>
                                                            <option value="UM">United States (US) Minor Outlying
                                                                Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="VG">Virgin Islands (British)</option>
                                                            <option value="VI">Virgin Islands (US)</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    tabindex="0"
                                                                    aria-labelledby="select2-shipping_country-container"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shipping_country-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Andorra">Andorra</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><noscript><button
                                                                type="submit"
                                                                wire:model="woocommerce_checkout_update_totals">Update
                                                                country /
                                                                region</button></noscript></span></p>
                                                @error('country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="address_1_field" data-priority="50"><label for="address_1"
                                                        class="">Street
                                                        address&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="address_1" id="address_1"
                                                            placeholder="House number and street name"
                                                            autocomplete="address-line1"
                                                            data-placeholder="House number and street name"></span></p>
                                                @error('address_1')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide address-field" id="address_2_field"
                                                    data-priority="60"><span class="woocommerce-input-wrapper"><input
                                                            type="text" class="input-text " wire:model="address_2"
                                                            id="address_2"
                                                            placeholder="Apartment, suite, unit etc. (optional)"
                                                            value="" autocomplete="address-line2"
                                                            data-placeholder="Apartment, suite, unit etc. (optional)"></span>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="city_field" data-priority="70"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="city" class="">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="city" id="city"
                                                            placeholder="" autocomplete="address-level2"></span>
                                                </p>
                                                @error('city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide address-field validate-required validate-state"
                                                    id="state_field" data-priority="80"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                    <label for="state" class="">State /
                                                        County&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " value="Pakistan" placeholder=""
                                                            wire:model="state" id="state"
                                                            autocomplete="address-level1"
                                                            data-input-classes=""></span>
                                                </p>
                                                @error('state')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <p class="form-row form-row-wide address-field validate-required validate-postcode"
                                                    id="postcode_field" data-priority="90"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                    <label for="postcode" class="">Postcode /
                                                        ZIP&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " wire:model="postcode" id="postcode"
                                                            placeholder="" autocomplete="postal-code"></span>
                                                </p>
                                            </div>
                                            @error('postcode')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <p>
                                                <button type="submit" class="button" wire:model="save_address"
                                                    value="Save address">Save address</button>
                                                <input type="hidden" id="woocommerce-edit-address-nonce"
                                                    wire:model="woocommerce-edit-address-nonce"
                                                    value="209c4fae6b"><input type="hidden"
                                                    wire:model="_wp_http_referer"
                                                    value="/themes/sw_revo/wc_vendor/my-account/edit-address/shipping/">
                                                <input type="hidden" wire:model="action" value="edit_address">
                                            </p>
                                        </div>

                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
