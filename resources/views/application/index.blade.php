@extends('layouts.app')

@section('content')
@include('partials.topNav')
@include('layouts.mainNav')

<!-- banner section -->
        <div class="title-section module">
            <div class="row">

                <div class="small-12 columns">
                    <h1>Admission</h1>
                </div><!-- Top Row /-->

                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                       <li><a href="/">Home</a></li>
                       <li class="active"><a href="{{route('admission.index')}}">Admission</a></li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->

            </div><!-- Row /-->
        </div>
 <!-- End of the banner section -->

<!-- Content section -->
<div class="content-section">

    <div class="row">
        <div class="course-section">
            <div class="section-title">
                <h2><span>Application form</span></h2>
            </div><!-- Section Title Ends /-->
<div class="content-area module faq">
        <div class="row">
            <div class="medium-12 small-12 small-centered columns ">
            @include('partials.message')
                <div class="contact-form">
                             <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                @csrf
                                <div class="application">
                                    <div class="row">
                                    <div class="medium-4 small-12 columns">
                                        <label>Surname <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="text" id="surname" name="surname" placeholder="Your surname here..." value="{{ old('surname') }}" />
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>
                                            Firstname
                                            <span class="help-inline" style="color:#FF0000">*</span>
                                        </label>
                                        <label>
                                            <input type="text" name="firstname" placeholder="Your firstname here..." value="{{ old('firstname') }}" required/>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>Lastname <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="text" id="lastname" name="lastname" placeholder="Your lastname here..." value="{{ old('lastname') }}" required/>
                                        </label>
                                    </div>
                                    </div><!-- Row Ends /-->
                                    <div class="row">
                                         <div class="medium-4 small-12 columns">
                                        <label>Date of Birth <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="date" id="dob" name="dob" placeholder="Your date of birth here..." value="{{ old('dob') }}"required />
                                        </label>
                                    </div>
                                    <br>
                                    <div class="medium-4 small-12 columns">
                                        <label>Select your gender <span class="help-inline" style="color:#FF0000">*</span> </label>
                                        <label>
                                            <input type="radio" name="gender" id="gender" value="female" value="{{ old('gender') }}">Female
                                            <input type="radio" name="gender" id="gender" value="male"  value="{{ old('gender') }}" >Male
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>Select your Marital stats <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="radio" name="marital_status" id="marital_status" value="single"  value="{{ old('marital_status') }}">Single
                                            <input type="radio" name="marital_status" id="marital_status" value="Married"  value="{{ old('marital_status') }}">Married
                                        </label>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="medium-4 small-12 columns">
                                        <label>Email <span class="help-inline" style="color:#FF0000">*</span> </label>
                                        <label>
                                            <input type="email" id="email" name="email" placeholder="Your email here..."  value="{{ old('email') }}" required/>
                                        </label>
                                    </div>
                                      <div class="medium-4 small-12 columns">
                                        <label>Telephone <span class="help-inline" style="color:#FF0000">*</span> </label>
                                        <label>
                                            <input type="text" id="telephone" name="telephone"  placeholder="Your Telephone number here..."  value="{{ old('telephone') }}" required />
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>Current Address <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="text" id="current_address" name="current_address" placeholder="Your current address here..."  value="{{ old('current_address') }}" required />
                                        </label>
                                    </div>
                                </div><!-- Row Ends /-->
                                <div class="row">
                                    <div class="medium-4 small-12 columns">
                                        <label>Select your country <span class="help-inline" style="color:#FF0000">*</span> </label>
                                        <label>
                                            <select id="country" name="country" class="form-control"  value="{{ old('country') }}" required>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D&apos;ivoire">Cote D&apos;ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic Peoples Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao Peoples Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>Passport or ID number <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="text" id="id_number" name="id_number" placeholder="Your passport or id number here..."  value="{{ old('id_number') }}" required/>
                                        </label>
                                    </div>
                                  <div class="medium-4 small-12 columns">
                                        <label>Religous Affiliation <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <select name="religion" required>
                                                @foreach ($religion as $sl)
                                                <option value="{{ $sl->name }}" id="religion"  value="{{ old('religious') }}">{{ $sl->name }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div><!-- Row Ends /-->
                                <div class="row">
                                    <div class="medium-2 small-12 columns">

                                        <label>Any disabilities? <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <select name="disabled" required>
                                                <option value="yes" id="disabled"  value="{{ old('disabled') }}">Yes</option>
                                                <option value="no" id="disabled"  value="{{ old('disabled') }}">No</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-2 small-12 columns">
                                    <label>
                                        <label>If yes, specify here</label>
                                            <input type="text" name="disability_specification" id="disability_specification" placeholder="here..."  value="{{ old('disability_specification') }}"/>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>For Catholic clergy only!!</label>
                                        <label>
                                            <select name="clergy_type" >
                                                @foreach ($clergytypes as $cl)
                                                <option value="{{ $cl->name }}"id="clergy_type"  value="{{ old('clergy_type') }}">{{ $cl->name }}</option>
                                                 @endforeach
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                       <label>Name of Religious order</label>
                                        <label>
                                            <input type="text" id="religious_order" name="religious_order" placeholder="here..."  value="{{ old('religious_order') }}" />
                                        </label>
                                    </div>
                                </div><!-- Row Ends /-->
                                 </div>
                                  <h4>List all High schools you have attended</h4>
                                 <div class="application" id="dynamic_field">
                                    <div class="row">
                                        <div class="medium-3 small-12 columns">
                                            <label>First High school <span class="help-inline" style="color:#FF0000">*</span>
                                            </label>
                                            <label>
                                                 <input type="text" id="high_school" name="high_school" placeholder="The name of  your high school here..."  value="{{ old('high_school') }}" required/>
                                            </label>
                                       </div>
                                       <div class="medium-3 small-12 columns">
                                           <label>School Address <span class="help-inline" style="color:#FF0000">*</span> </label>
                                           <label>
                                              <input type="text" id="school_address" name="school_address" placeholder="The address of your school here..."  value="{{ old('school_address') }}" required/>
                                           </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                             <label>When started <span class="help-inline" style="color:#FF0000">*</span></label>
                                             <label>
                                                <input type="date" id="when_started_highschool" name="when_started_highschool" placeholder="mm/dd/yyyy"  value="{{ old('when_started_highschool') }}" required/>
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label>When ended <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                               <input type="date" id="when_ended_highschool" name="when_ended_highschool" placeholder="mm/dd/yyyy"  value="{{ old('when_ended_highschool') }}" required/>
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label>&nbsp;</label>
                                           <button  type="button" name="add" id="add" class="button success" title="click once. Two more entries available">Add more</button>
                                        </div>
                                     </div><!-- Row Ends /-->
                                 </div>
                                <h4>List all college schools you have attended</h4>
                                <div  class="application" id="dynamic_field2">
                                     <div class="row">
                                        <div class="medium-3 small-12 columns">
                                            <label>First college or university <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                                <input type="text" id="college" name="college" placeholder="The name of college here..."  value="{{ old('college') }}" />
                                            </label>
                                        </div>
                                        <div class="medium-3 small-12 columns">
                                            <label>college Address <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                                <input type="text" id="college_address" name="college_address" placeholder="The address of your school here..."  value="{{ old('college_address') }}" />
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label>When started <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                                <input type="date" id="when_started_college" name="when_started_college" placeholder="mm/dd/yyyy"  value="{{ old('when_started_college') }}" />
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label>When Ended <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                                <input type="date" id="when_ended_college" name="when_ended_college" placeholder="mm/dd/yyyy"  value="{{ old('when_ended_college') }}" />
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">

                                            <label>&nbsp;</label>
                                           <button  type="button" id="add2" id="add2" class="button success" title="click once. Two more entries available">Add more</button>
                                        </div>
                                     </div><!-- Row Ends /-->
                                </div>
                               <h4>CUEA related information here</h4>
                               <div  class="application">
                                    <div class="row">
                                        <div class="medium-4 small-12 columns">
                                            <label>Choose campus <span class="help-inline" style="color:#FF0000">*</span> </label>
                                            <label>
                                                <select name="campus" required>
                                                    <option value="Langata" id="campus"  value="{{ old('campus') }}">Langata</option>
                                                    <option value="Eldoret" id="campus"  value="{{ old('campus') }}">Eldoret</option>
                                                 </select>
                                             </label>
                                           </div>
                                           <div class="medium-4 small-12 columns">
                                            <label>Select level <span class="help-inline" style="color:#FF0000">*</span> </label>
                                            <label>
                                                <select name="level" required>
                                                 @foreach ($sections as $sl)
                                                    <option value="{{ $sl->name }}"  value="{{ old('level') }}" id="level">{{ $sl->name }}</option>
                                                    @endforeach
                                                 </select>
                                             </label>
                                           </div>
                                           <div class="medium-4 small-12 columns">
                                                &nbsp;
                                           </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-4 small-12 columns">
                                             <label>First choice <span class="help-inline" style="color:#FF0000">*</span></label>
                                                <select name="first_choice" >
                                                    @foreach ($program as $pl)
                                                     <option value="{{ $pl->name }}" id="first_choice" name="first_choice"  value="{{ old('first_chioce') }}">{{ $pl->name }}</option>
                                                     @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="medium-4 small-12 columns">

                                             <label>Second choice <span class="help-inline" style="color:#FF0000">*</span></label>
                                             <label>
                                                 <select name="second_choice" required>
                                                     @foreach ($program as $pl)
                                                     <option value="{{ $pl->name }}" id="second_choice" name="second_choice"  value="{{ old('second_choice') }}">{{ $pl->name }}</option>
                                                     @endforeach
                                                 </select>
                                           </label>
                                        </div>
                                        <div class="medium-4 small-12 columns">

                                             <label>Third choice <span class="help-inline" style="color:#FF0000">*</span></label>
                                              <label>
                                                 <select name="third_choice" required>
                                                     @foreach ($program as $pl)
                                                     <option value="{{ $pl->name }}" id="third_choice" name="third_choice"  value="{{ old('third_choice') }}">{{ $pl->name }}</option>
                                                     @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div> <!-- End of row -->
                                    <div class="row">
                                        <div class="medium-4 small-12 columns">
                                            <label>Specify Mode of study <span class="help-inline" style="color:#FF0000">*</span> </label>
                                            <label>
                                                <select name= "mode_of_study" required>
                                                @foreach ($modeofstudy as $m1)
                                                <option value="{{ $m1->name }}" id="mode_of_study" name="mode_of_study"  value="{{ old('mode_of_study') }}">{{ $m1->name }}</option>
                                                @endforeach
                                                </option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="medium-4 small-12 columns">

                                            <label>When would you like to start? <span class="help-inline" style="color:#FF0000">*</span></label>
                                            <label>
                                                <select name="when_to_start" required>
                                                    @foreach ($intakes as $i1)
                                                        <option value="{{ $i1->intake }}" id="when_to_start">{{ $i1->intake }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label> CUEA before </label>
                                            <label>
                                                <select name="cuea_before" required>
                                                    <option value="Bridging"> Bridging</option>
                                                 @foreach ($sections as $sl)
                                                    <option value="{{ $sl->name }}" id="cuea_before"  value="{{ old('cuea_before') }}">{{ $sl->name }}</option>
                                                    @endforeach
                                                 </select>
                                            </label>
                                        </div>
                                        <div class="medium-2 small-12 columns">
                                            <label>Previous number</label>
                                            <label>
                                                <input type="text" id="previous_reg_number" name="previous_reg_number" value="{{ old('previous_reg_number') }}" placeholder="here..."/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div  class="application">
                                    <div class="row">
                                       <div class="medium-12 small-12 columns">
                                            <label>Who will sponsor your education? <span class="help-inline" style="color:#FF0000">*</span> </label>
                                            <label>
                                                <select name="sponsor" required>
                                                    @foreach ($sponsor as $s2)
                                                    <option value="{{ $s2->name }}" id="sponsor"  value="{{ old('sponsor') }}">{{ $s2->name }}</option>
                                                    @endforeach
                                                </select>
                                           </label>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="medium-3 small-12 columns">
                                            <label>Sponsor &apos;s Fullname</label>
                                            <label>
                                               <input type="text" id="sponsor_name" name="sponsor_name" value="{{ old('sponsor_name') }}" placeholder="Your Sponsor's fullname here..." required/>
                                            </label>
                                        </div>
                                       <div class="medium-3 small-12 columns">
                                            <label>Sponsor &apos;s Address</label>
                                            <label>
                                                <input type="text" id="sponsor_address" name="sponsor_address" value="{{ old('sponsor_address') }}" placeholder="Your Sponsor's address here..." />
                                           </label>
                                       </div>
                                       <div class="medium-3 small-12 columns">
                                            <label>Sponsor &apos;s Telephone</label>
                                            <label>
                                                <input type="text" id="sponsor_telephone" name="sponsor_telephone" value="{{ old('sponsor_telephone') }}" placeholder="Your Sponsor's telephone here..." />
                                           </label>
                                       </div>
                                       <div class="medium-3 small-12 columns">
                                            <label>Sponsor &apos;s email</label>
                                            <label>
                                                <input type="email" id="sponsor_email" name="sponsor_email" value="{{ old('sponsor_email') }}" placeholder="Your sponsor's email here..." />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="medium-3 small-12 columns">
                                            <label>Next of Kin&apos;s Fullname</label>
                                            <label>
                                               <input type="text" id="next_of_kin" name="next_of_kin" value="{{ old('next_of_kin') }}" placeholder="Your next of kin's fullname here..." />
                                         </label>
                                        </div>
                                        <div class="medium-3 small-12 columns">
                                            <label>Next of Kin&apos;s Address</label>
                                            <label>
                                                <input type="text" id="next_of_kin_address" name="next_of_kin_address" value="{{ old('next_of_kin_address') }}" placeholder="Your next of kin address here..." />
                                            </label>
                                        </div>
                                        <div class="medium-3 small-12 columns">
                                            <label>Next of Kin&apos;s Telephone</label>
                                            <label>
                                                <input type="text" id="next_of_kin_telephone" name="next_of_kin_telephone" value="{{ old('next_of_kin_telephone') }}" placeholder="Your next of kin's telephone here..." />
                                            </label>
                                        </div>
                                        <div class="medium-3 small-12 columns">
                                            <label>Next of Kin&apos;s email</label>
                                            <label>
                                                <input type="email" id="next_of_kin_email" name="next_of_kin_email" placeholder="Next of kin email here..."  value="{{ old('next_of_kin_email') }}"/>
                                           </label>
                                        </div>
                                    </div>
                               </div>
                               <h4>Additional Data</h4>
                               <div class="application">
                                   <div class="row">
                                        <div class="medium-12 small-12 columns">
                                            <label>Specify how you found out about CUEA <span class="help-inline" style="color:#FF0000">*</span> </label>
                                            <label>
                                                 @foreach($sources as $s1)
                                                  <input type="checkbox" name="sources[]" value="{{ $s1->name }}"/> {{ $s1->name }}
                                                 @endforeach
                                               <br>

                                             <!--   <input type="checkbox" name="facility_required[]" -->
                                           </label>
                                           <label>
                                                <input type="text" id="other_sources" name="other_sources" value="{{ old('other_sources') }}" placeholder="Specify others here..." />
                                           </label>
                                        </div>
                                        <div class="medium-4 small-12 columns">
                                            &nbsp;
                                        </div>
                                    </div>
                               </div>
                               <h4>Provide your Educational slips here</h4>
                                 <div  class="application">
                                     <div class="row">
                                    <div class="medium-4 small-12 columns">
                                        <label>KCSE Slip <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="file" name="high_school_file" placeholder="here..."  value="{{ old('high_school_file') }}" required/>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>college slips</label>
                                        <label>
                                            <input type="file" name="college_file"  value="{{ old('college_file') }}"/>
                                        </label>
                                    </div>
                                    <div class="medium-4 small-12 columns">
                                        <label>Passport or ID  <span class="help-inline" style="color:#FF0000">*</span></label>
                                        <label>
                                            <input type="file" name="id_number_file" required  value="{{ old('id_number_file') }}" />
                                        </label>
                                    </div>
                                     </div><!-- Row Ends /-->
                                 </div>
                                 <div class="clearfix"></div>
                                 <a class="button primary  medium-only-expanded"> <button type="submit">SUBMIT THE FORM</button>  </a>
                             </form>
                    </div>
                 </div>
             </div>
        </div>
    </div>
</div>
</div>
<!-- Content Area Ends /-->
        <div class="clearfix"></div>
<!-- Content Section Ends /-->
<!-- Call to Action box -->
@include('partials.call')
<!-- Call to Action End /-->

@include('partials.footer')
@endsection
@section('script')
<script>

    $(document).ready(function(){
        var i=2;
        var z=3;
        var j=1;
        var m=1;


        $('#add').click(function(){

                  if(m!=2){
                    $('#dynamic_field').append('<div class="row" id="ro'+i+'"><div class="medium-3 small-12 columns"><label>Second High school</label><label><input type="text" name="high_school'+i+'" placeholder="The name of  your high school here..." /></label></div> <div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="school_address'+i+'" value="{{ old('school_address') }}" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_highschool'+i+'" value="{{  old('when_started_highschool') }}" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When ended</label><label><input type="date" name="when_ended_highschool'+i+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label>&nbsp;</div><div class="medium-3 small-12 columns"><label>Third High school</label><label><input type="text" name="high_school'+z+'" placeholder="The name of  your high school here..." /></label></div> <div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="school_address'+z+'" value="{{ old('school_address') }}" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_highschool'+z+'" value="{{  old('when_started_highschool') }}" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When ended</label><label><input type="date" name="when_ended_highschool'+z+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label>&nbsp;</div></div><!-- Row Ends /-->');

                m++;
                }

        });
    });
</script>
<script>
    $(document).ready(function(){
         var j=2;
         var b=3;
         var n=1;
         $('#add2').click(function(){

                if(n!=2)
                {
                $('#dynamic_field2').append('<div class="row" id="row'+j+'"><div class="medium-3 small-12 columns"><label>Second college or University</label><label><input type="text" name="college'+j+'" placeholder="The name of college here..." /></label></div><div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="college_address'+j+'" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_college'+j+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When Ended</label><label><input type="date" name="when_ended_college'+j+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label>&nbsp;</div><div class="medium-3 small-12 columns"><label>Third college or University</label><label><input type="text" name="college'+b+'" placeholder="The name of college here..." /></label></div><div class="medium-3 small-12 columns"><label>School Address</label><label><input type="text" name="college_address'+b+'" placeholder="The address of your school here..." /></label></div><div class="medium-2 small-12 columns"><label>When started</label><label><input type="date" name="when_started_college'+b+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>When Ended</label><label><input type="date" name="when_ended_college'+b+'" placeholder="mm/dd/yyyy" /></label></div><div class="medium-2 small-12 columns"><label>&nbsp;</label>&nbsp;</div></div><!-- Row Ends /-->');
                n++;
            }

    });

     });
</script>
@endsection
