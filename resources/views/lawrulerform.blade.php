@extends('layouts.app')

@section('content')
        <div class="wrapper">
            <form method="post" action="{{url('submit-form')}}" id="wizard">
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                <!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law5.png" alt="">
                        </div>
                        <div class="form-content" >
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with your details</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Client Name" name="FullName" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Cell Phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  name="CellPhone" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Work Phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  name="BusinessPhone" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Home Phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  name="HomePhone" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Street Address" name="Mailing_Address_1" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="City" name="City" class="form-control">
                                </div>
                                <div class="select">
                                    <div class="form-holder">
                                        <select class="form-control" name="State" placeholder="State">
                                            <option value="" selected="">Your State</option>
                                            @foreach(StaticArray::$state as $key => $value) 
                                                <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                       </select>
                                    </div>
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Zip" name="Zip" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                                
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Date of Birth" name="DOB" id="datepicker" class="form-control datepicker-here" data-language='en' data-date-format="dd - m - yyyy" id="dp1">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="SSN#" id="txtnumber" name="SSN" class="form-control" maxlength="11" placeholder="xxx-xx-xxxx">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder w-100">
                                        <textarea type="text" placeholder="Case Notes" name="custom597" class="form-control" rows="4" cols="50"></textarea>
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Date of Death" name="custom598" class="form-control datepicker-here"  data-language='en' data-date-format="dd - m - yyyy">
                                </div> 
                                <div class="form-holder">
                                    <input type="text" placeholder="DOD City" name="custom599" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="DOD State" name="custom600"class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                
                                <div class="form-holder">
                                    <input type="text" placeholder="Caller Name" name="custom601"class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Caller Relationship" name="custom602"class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-holder">
                                    <input type="text" placeholder="Caller Phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  name="custom603"class="form-control">
                                </div>
                                <div class="form-holder">
                                        <input type="text" placeholder="Emergency Contact Name" name="custom604" class="form-control">
                                    </div>
                            </div>
                            <div class="form-row">
                                    
                                    <div class="form-holder">
                                        <input type="text" placeholder="Emergency Contact Relationship" name="custom605" class="form-control">
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" placeholder="Emergency Contact Number" name="custom606" class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 4 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                 <div class="form-holder w-100" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Are you currently represented by an attorney? </label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom607" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom607" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                 <div class="form-holder w-100" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Did/Do you have a restricted use pesticide license, or are you a certified pesticide applicator?</label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom608" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom608" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                 <div class="form-holder w-100" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Did/do you work for a person who had a restricted use pesticide license? </label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom609" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom609" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                 <div class="form-holder w-100" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Are you willing to sign an Affidavit stating you were exposed to Paraquat?</label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom610" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom610" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 5 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                 <div class="form-holder w-100" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Were you exposed to paraquat, or tho-paraquat or gramaxone?</label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom611" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom611" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="How often were you exposed?" name="custom612" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Exposure dates" name="custom613" class="form-control datepicker-here"  data-language='en' data-date-format="dd - m - yyyy">
                                </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-holder w-100">
                                        <input type="text" placeholder="Type of Exposure" name="custom614" class="form-control">
                                    </div>
                                </div>

                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Were you exposed through direct usage, indirect usage, or both?" class="form-control" name="custom615">
                                </div>
                            </div>
                            <div class="form-row">
                                
                                    <div class="form-holder w-100">
                                        <input type="text" placeholder="Where did you use the Paraquat?" name="custom616" class="form-control">
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 6 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                 <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Diagnosed with PD?</label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom617" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom617" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="When diagnosed" name="custom618" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Age at Diagnosis" name="custom619" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
                                </div>
                                 <div class="form-holder">
                                    <select class="form-control" name="custom620" placeholder="PD Motor Symptoms">
                                        <option selected="" value="">PD Motor Symptoms</option>
                                        <option value="Prolonged or extreme stiffness">Prolonged or extreme stiffness</option>
                                        <option value="Difficulty with body movements">Difficulty with body movements</option>
                                        <option value="Loss of balance">Loss of balance</option>
                                        <option value="Difficulty Walking (slow gait">Difficulty Walking (slow gait</option>
                                        <option value="shuffling)">shuffling)</option>
                                        <option value="Difficulty or soft speaking">Difficulty or soft speaking</option>
                                        <option value="Reduced facial expression">Reduced facial expression</option>
                                        <option value="blank stare">blank stare</option>
                                        <option value="Drooling">Drooling</option>
                                        <option value="Small handwriting">Small handwriting</option>
                                        <option value="Trembling">Trembling</option>
                                        <option value="Whole body fatigue or dizziness">Whole body fatigue or dizziness</option>
                                        <option value="Amnesia or confusion in evening hours">Amnesia or confusion in evening hours</option>
                                        <option value="Early awakenings or sleep disturbances">Early awakenings or sleep disturbances</option>
                                        <option value="Anxiety or apathy">Anxiety or apathy</option>
                                        <option value="Other symptoms">Other symptoms</option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder  w-100">
                                    <input type="text" placeholder="If other, describe" name="custom621" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <select class="form-control" name="custom622" placeholder="PD Medications">
                                        <option selected="" value="">PD Medications</option>
                                        <option value="Amantadine">Amantadine</option>
                                        <option value="Apokyn (apmorphie hydrocholride injection)">Apokyn (apmorphie hydrocholride injection)</option>
                                        <option value="Artane (trihexyphenidyl  HCL)">Artane (trihexyphenidyl  HCL)</option>
                                        <option value="Axilect (rasagiline)">Axilect (rasagiline)</option>
                                        <option value="Cogentin (benztropine)">Cogentin (benztropine)</option>
                                        <option value="Elepryl (selegiline)">Elepryl (selegiline)</option>
                                        <option value="KYNMOBI (Apomorphine hydrochloride)">KYNMOBI (Apomorphine hydrochloride)</option>
                                        <option value="Sinemet (levodopa)">Sinemet (levodopa)</option>
                                        <option value="Mirapex (pramipexole)">Mirapex (pramipexole)</option>
                                        <option value="Neupro (Rotigotine Transdermal System)">Neupro (Rotigotine Transdermal System)</option>
                                        <option value="Nourizanz (istradefylline)">Nourizanz (istradefylline)</option>
                                        <option value="Requip (ropinirole)">Requip (ropinirole)</option>
                                        <option value="Xadago (safinamide)">Xadago (safinamide)</option>
                                        <option value="Zelapar (Selegiline HCL orally disintegrating">Zelapar (Selegiline HCL orally disintegrating</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 7 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Name of Diagnosing Doctor" name="custom623" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Phone of Diagnosing Doctor" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  class="form-control" name="custom624">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <textarea type="text" placeholder="Address of Diagnosing Doctor" name="custom625" class="form-control" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Specialty of Diagnosing Doctor" name="custom633" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Treatment Dates of Diagnosing Doctor" name="custom626" class="form-control datepicker-here"  data-language='en' data-date-format="dd - m - yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 8 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                                    <label>Do you have a neurologist or movement disorder specialist?</label>
                                    <div class="checkbox-tick">
                                        <label class="male">
                                            <input type="radio" name="custom627" value="male" checked> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="custom627" value="female"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="custom628" placeholder="Name of Neurologist or Movement Disorder Specialist" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" name="custom629" placeholder="Phone of Neurologist or Movement Disorder Specialist" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <textarea type="text" placeholder="Address of Neurologist or Movement Disorder Specialist" name="custom630" class="form-control" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Speciality of Neurologist or Movement Disorder Specialist" name="custom631" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Treatment Dates of Neurologist or Movement Disorder Specialist" name="custom632" class="form-control datepicker-here"  data-language='en' data-date-format="dd - m - yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                 <!-- SECTION 9 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Name of other treating Physicians" name="custom634" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" placeholder="Phone of other treating Physicians" name="custom635" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <textarea type="text" placeholder="Address of other treating Physicians" name="custom636" class="form-control" rows="4" cols="50"></textarea>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" placeholder="Speciality of other treating doctors" name="custom637" class="form-control">
                                </div>
                                <div class="form-holder">
                                    <input type="text" name="custom638" placeholder="Treatment Date of other treating doctors" class="form-control datepicker-here"  data-language='en' data-date-format="dd - m - yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="images/law2.png" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Registration</h3>
                            </div>
                            <p>Please fill with additional info</p>
                            <div class="form-row">
                                    <div class="form-holder w-100">
                                        <input type="text" placeholder="Pharmacy Name" name="custom639" class="form-control">
                                    </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <input type="text" placeholder="Pharmacy Phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  name="custom640" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder w-100">
                                    <textarea type="text" placeholder="Pharmacy Address" name="custom641" class="form-control" rows="4" cols="50"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
@endsection


@section('script')

@endsection