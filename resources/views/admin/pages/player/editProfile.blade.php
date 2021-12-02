@extends('admin.master')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">PLAYER STATISTICS</h3>
        </div>
        <div class="container">
            <div class="text-center space__tp--wrapper2">
                <h3 class="heading__wraper-three">Edit Profile</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Update Player Profile</strong>
                </p>
                <form action="{{route('editplayerprofile')}}" enctype="multipart/form-data" method="post" id="player_registration_form">
                    @csrf

                    <input type="hidden" name="player_id" value="{{ $playerTableData->id}}" >
                    <input type="hidden" name="user_id" value="{{ $userTableData->id}}" >
                                 <div class="col-sm-12 mt-2 p-4">
                                               <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Email</label>
                                                    <input type="email" class="form-control input__box--wrapper"  placeholder="" value="{{ $userTableData->email ?? '' }}" name="email" required>
                                                    @if($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">College Commitment</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="Uncommitted" value="{{ $playerTableData->college_commitment ?? '' }}" name="college_commit" >
                                                    @if($errors->has('college_commit'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('college_commit') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player First
                                                        Name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $userTableData->first_name ?? '' }}" name="first_name" required>
                                                    @if($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Last
                                                        Name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $userTableData->last_name ?? '' }}" name="last_name" required>
                                                    @if($errors->has('last_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <label class="label__wrapper required" for="">Player Home Address</label>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">City</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->p_city ?? '' }}" name="p_city" required>
                                                    @if($errors->has('p_city'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('p_city') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                @php
                                                $p_state = $playerTableData->state_id;
                                                @endphp

                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">state</label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="p_state" id="team_state" required>
                                                        <option selected="" disabled="" value="">Select State</option>
                                                        @foreach($states as $state)
                                                            <option value="{{ $state->id }}" @if($p_state ?? '' == $state->id) selected @endif>{{ $state->state_name ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('p_state'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('p_state') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">Zip Code</label>
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->zip_code ?? '' }}" name="zip_code" required>
                                                    @if($errors->has('zip_code'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('zip_code') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">High School Name (if applicable) </label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->school_name ?? '' }}" name="school" >
                                                    @if($errors->has('school'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('school') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Cell Phone # </label>
                                                    <input type="text" class="form-control input__box--wrapper phoneNumber"  placeholder="" value="{{ $userTableData->cell_number }}" name="cell_no" required>
                                                    @if($errors->has('cell_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('cell_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 col__mr-right">
                                                    <label class="label__wrapper required" for="">DOB</label>
                                                <div class="flex__cotent--wrapper">
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Month </label>
                                                            <select class="form-control  input__box--wrapper down-icons" name="month">
                                                                <option selected="" value="" disabled="">-- Month --</option>
                                                                @for($i = 1; $i < 13; $i++ )
                                                                    <option value="{{ $i }}"  @if((explode("-", $playerTableData->date_of_birth ?? '')[1]) == $i)
                                                                    selected
                                                                @endif >{{ date("F", mktime(0, 0, 0, $i, 10)) }}</option>
                                                                @endfor
                                                            </select>
                                                            @if($errors->has('month'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('month') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Day </label>
                                                            <select class="form-control input__box--wrapper down-icons" name="day" required >
                                                                <option selected disabled="" value="">day</option>


                                                                @for($i=1; $i< 32  ; $i++)

                                                            <option value="{{$i}}"  @if((explode("-", $playerTableData->date_of_birth ?? '')[0] ?? '') == $i)
                                                                    selected
                                                                @endif > {{$i}}  </option>
                                                            @endfor
                                                            </select>
                                                            @if($errors->has('day'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('day') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                         @php
                                                            $currentYear = date('Y');
                                                            $lastYear = date('Y', strtotime('-80 years'));
                                                        @endphp
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Year </label>
                                                            <select  class="form-control  input__box--wrapper down-icons" name="year" required>
                                                                <option disabled="" selected="" value="">year</option>
                                                                @for($i=$lastYear; $i<$currentYear; $i++)
                                                                <option value="{{$i}}"  @if((explode("-", $playerTableData->date_of_birth ?? '')[2] ?? '') == $i)
                                                                    selected
                                                                @endif>{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                            @if($errors->has('year'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('year') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Graduation Year</label>
                                                    @php
                                                        $currentyear1= date('Y');
                                                        $getyear=date('Y',strtotime('-50 year'));
                                                    @endphp
                                                    <select  class="form-control  input__box--wrapper down-icons" name="graduation_year" required>
                                                        <option selected disabled="" value="">select year</option>
                                                        @for($i=$getyear; $i<$currentyear1; $i++)
                                                            <option value="{{$i}}" @if($playerTableData->graduation_year ?? '' == $i) selected @endif>{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->has('graduation_year'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('graduation_year') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Weight Fill In
                                                    </label>
                                                    <input  class="form-control input__box--wrapper"  placeholder="" value=" {{ $playerTableData->player_weight ?? '' }}" name="weight" required>
                                                    @if($errors->has('weight'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('weight') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                               

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Height </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" value="{{ old('height') }}" name="height" required>
                                                        <option class="form-control" disabled>Select  Height</option>
                                                    @for($i = 4; $i < 7; $i++)
                                                            <option value="{{ $i }}"
                                                                @if((explode(".", $playerTableData->player_height ?? '')[0] ?? '') == $i)
                                                                    selected
                                                                @endif
                                                                >{{ $i }}"</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->has('height'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('height') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for=""> Inches</label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="inches" required>
                                                    <option class="form-control" disabled >Inches</option>
                                                       @for($i = 0; $i < 13; $i++)
                                                            <option value="{{ $i }}"
                                                                @if((explode(".", $playerTableData->player_height ?? '')[1] ?? '') == $i)
                                                                    selected
                                                                @endif
                                                                >{{ $i }}"</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->has('inches'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('inches') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Throw </label>
                                                  
                                                    <select  class="form-control  input__box--wrapper down-icons" name="throw" required>
                                                        <option>Select Throw </option>
                                                        <option value="Right" @if($playerTableData->player_throw  == 'Right') ? selected : ''   @endif>Right </option>
                                                        <option value="Left" @if($playerTableData->player_throw  == 'Left') ? selected : ''   @endif> Left</option>
                                                        <option value="Both" @if($playerTableData->player_throw  == 'Both') ? selected : ''   @endif>Both</option>
                                                    </select>
                                                    @if($errors->has('throw'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('throw') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Bat</label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="bat" required>
                                                        <option disabled="" value=""  selected="">Select Bat </option>
                                                        <option value="Right" @if($playerTableData->player_bat  == 'Right') ? selected : '' @endif>Right </option>
                                                        <option value="Left" @if($playerTableData->player_bat ?? '' == 'Left') ? selected : '' @endif> Left</option>
                                                        <option value="Both" @if($playerTableData->player_bat ?? '' == 'Both') ? selected : '' @endif>Both</option>
                                                    </select>
                                                    @if($errors->has('bat'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('bat') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">PRIMARY POSITION </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="primary_position" required>
                                                        <option selected="" value="" disabled=""> Select POSITION </option>
                                                        <option  value="C" @if($playerTableData->primary_position ?? '' == 'C') selected @endif> C </option>
                                                        <option  value="1B" @if($playerTableData->primary_position ?? '' == '1B') selected @endif> 1B </option>
                                                        <option  value="2ND" @if($playerTableData->primary_position ?? '' == '2ND') selected @endif> 2ND </option>
                                                        <option  value="SS" @if($playerTableData->primary_position ?? '' == 'SS') selected @endif> SS </option>
                                                        <option  value="3B" @if($playerTableData->primary_position ?? '' == '3B') selected @endif> 3B </option>
                                                        <option  value="OF" @if($playerTableData->primary_position ?? '' == 'OF') selected @endif> OF </option>
                                                        <option  value="RHP" @if($playerTableData->primary_position ?? '' == 'RHP') selected @endif> RHP </option>
                                                        <option value="LHP" @if($playerTableData->primary_position ?? '' == 'LHP') selected @endif> LHP</option>
                                                    </select>
                                                    @if($errors->has('primary_position'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('primary_position') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Secondary POSITION </label>
                                                    <select class="form-control  input__box--wrapper down-icons" name="secondary_possition" required>
                                                        <option selected="" value="" disabled=""> Select POSITION </option>
                                                        <option  value="C" @if($playerTableData->secondary_position ?? '' == 'C') selected @endif> C </option>
                                                        <option  value="1B" @if($playerTableData->secondary_position ?? '' == '1B') selected @endif> 1B </option>
                                                        <option  value="2ND" @if($playerTableData->secondary_position ?? '' == '2ND') selected @endif> 2ND </option>
                                                        <option  value="SS" @if($playerTableData->secondary_position ?? '' == 'SS') selected @endif> SS </option>
                                                        <option  value="3B" @if($playerTableData->secondary_position ?? '' == '3B') selected @endif> 3B </option>
                                                        <option  value="OF" @if($playerTableData->secondary_position ?? '' == 'OF') selected @endif> OF </option>
                                                        <option  value="RHP" @if($playerTableData->secondary_position ?? '' == 'RHP') selected @endif> RHP </option>
                                                        <option value="LHP" @if($playerTableData->secondary_position ?? '' == 'LHP') selected @endif> LHP</option>
                                                  </select>
                                                    @if($errors->has('secondary_position'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('secondary_position') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                      

                                            @for($i = 0; $i < count(json_decode($playerTableData->parents_f_name)) ; $i++)
                                                <div class="form-row" id="parentinfo">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent First Name</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ json_decode($playerTableData->parents_f_name)[$i] }}" name="parent_firstname[]" required>
                                                        @if($errors->has('parent_firstname[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_firstname[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent Last Name</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ json_decode($playerTableData->parents_l_name)[$i] }}" name="parent_lastname[]" required>
                                                        @if($errors->has('parent_lastname[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_lastname[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row" id="parentcontact">

                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent Cell # (For Each Parent)</label>
                                                        <input type="text" class="form-control input__box--wrapper phoneNumber"  placeholder="" value="{{ json_decode($playerTableData->parents_cell_number)[$i] }}" name="parent_cellno[]" required>
                                                        @if($errors->has('parent_cellno[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_cellno[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent Email (For Each Parent)</label>
                                                        <input type="email" class="form-control input__box--wrapper"  placeholder="" value="{{ json_decode($playerTableData->parents_email)[$i] }}" name="parent_email[]" required>
                                                        @if($errors->has('parent_email[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_email[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endfor
                                            <div id="appendAfter"></div>
                                            <div class="text-right">
                                                <button class="btn btn-xs btn__add flex__right my-2" type="button" onclick="addParentInfo('appendAfter')">Add</button>
                                            </div>
                                            <div class="form-row align-items-center">
                                            <div class="form-group col-md-6 col__mr-right mb-0">
                                                <label class="label__wrapper ">Blog Photo </label>
                                                    <div class="custom-file">
                                <input type="file" name= "fileupload"  id="uploadfile" class="form-control input__box--wrapper custom-file-input"  accept="image/*">
                                <span class="custom-file-label" for="validatedCustomFile">Choose blog profile...</span>
                                @error('fileupload')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                         </div>
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right mb-0">
                                                <label class="label__wrapper ">Blog Photo </label>
                                                    <div class="custom-file">
                                <input type="file" name= "player_video"  id="uploadfile" class="form-control input__box--wrapper custom-file-input"  >
                                <span class="custom-file-label" for="validatedCustomFile">Choose blog profile...</span>
                                @error('player_video')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                         </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="social__heading">Social media information</h3>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Facebook </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ $playerTableData->player_facebook ?? '' }}" name="facebook">
                                                        @if($errors->has('facebook'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('facebook') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Twitter </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ $playerTableData->player_twitter ?? '' }}"  name="twitter">
                                                        @if($errors->has('twitter'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('twitter') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Instagram </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ $playerTableData->player_instagram ?? '' }}" name="instagram">
                                                        @if($errors->has('instagram'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('instagram') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                                                <strong>Player Profile Stats</strong>
                                            </p>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="" >mlb draft</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->mlb_draft ?? '' }}" name="mlb_draft"  >
                                                    @if($errors->has('mlb_draft'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mlb_draft') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">mlb debuted </label>
                                                    <input type="text" class="form-control input__box--wrapper "  placeholder="" value="{{ $playerTableData->mlb_debuted }}" name="mlb_debuted" >
                                                    @if($errors->has('mlb_debuted'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mlb_debuted') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="" >last team played</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->last_team_played ?? '' }}" name="last_team_played"  >
                                                    @if($errors->has('last_team_played'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('last_team_played') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">best grade</label>
                                                    <input type="text" class="form-control input__box--wrapper "  placeholder="" value="{{ $playerTableData->best_grade }}" name="best_grade" >
                                                    @if($errors->has('best_grade'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('best_grade') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="" >national ranking</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->national_ranking ?? '' }}" name="national_ranking"  >
                                                    @if($errors->has('national_ranking'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('national_ranking') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">state ranking</label>
                                                    <input type="text" class="form-control input__box--wrapper "  placeholder="" value="{{ $playerTableData->state_ranking }}" name="state_ranking" >
                                                    @if($errors->has('state_ranking'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('state_ranking') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 col__mr-right">
                                                    <label class="label__wrapper " for="" >Profile Content</label>
                                                    <textarea class="form-control input__box--wrapper"  placeholder="" value="{{ $playerTableData->profile_content ?? '' }}" name="profile_content"  >{{ $playerTableData->profile_content ?? '' }}</textarea>
                                                    @if($errors->has('profile_content'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('profile_content') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>                                               
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">password </label>
                                                    <input type="password" name="password"  class="form-control  input__box--wrapper" >
                                                    @if($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">confirm password </label>
                                                    <input type="password" name="password_confirmation" class="form-control input__box--wrapper" >
                                                    @if($errors->has('password_confirmation'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                </div>
                <div class="row mb-5">
                    <div class="col-sm-3 mx-auto">
                        <button class="btn btn__wrapper--four btn-file" type="submit" onclick="">Update Player Profile</button>
                    </div>
                </div>
            </form>
            </div>
        </div>


        <section class="player-reg2 bg-white">
            <div class="container">
                <ul class="nav nav-tabs bagger-pills2">
                    <li>
                        <a href="#tab1" class="active" data-toggle="tab">PLAYER HOME</a>
                    </li>
                    <li><a href="#tab2" data-toggle="tab"><span>16</span> EVENTS/REPORTS</a></li>
                    <li><a href="#tab3" data-toggle="tab">STATS</a></li>
                    <li><a href="#tab4" data-toggle="tab">VIDEO</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
                                        Player Home
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="">
                                        <div class="ContentPlaceHolder1">
                                            <h3>EVENT RESULTS</h3>
                                            <div class="flex__wrapper-three">
                                                <div class="lbl-wraper-three">
                                                    <h2> 91</h2>
                                                    <p>FB VELO</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2> 6.40 </h2>
                                                    <p> 60 YARD DASH</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2> 1.54</h2>
                                                    <p> 10 YARD SPLIT</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2>92</h2>
                                                    <p>IF VELO</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2>100</h2>
                                                    <p>EXIT VELO</p>
                                                </div>
                                            </div>
                                        </div>
                                        <section>
                                            <!-- <div class="container"> -->
                                                <div class="ContentPlaceHolder1">
                                                    <h2>LATEST SHOWCASE REPORT</h2>
                                                    <p>
                                                        2018 NATIONAL SHOWCASE </p>
                                                    <p>Bobby Witt Jr is a 2019 SS/RHP with a 6-1 185 lb. frame from Colleyville, TX who attends Colleyville
                                                        Heritage HS. Tall and lean athletic build with lots of wiry strength and plenty of room for more.
                                                        6.40 runner, has outstanding defensive tools in the infield and has proven equally adept at all the
                                                        infield positions. Very soft and quick hands, outstanding at tags, very smooth and clean through the
                                                        ball, plus arm strength with the ability to throw from all angles. Right handed hitter, very loose
                                                        hands in his swing, can get extended and put a charge into balls, fluid swing with very high exit
                                                        velocities, will occasionally get too middle/oppo oriented in games and lose his leverage and raw
                                                        bat speed. All the physical tools are there and loves to play. Very good student, verbal commitment
                                                        to Oklahoma. Son of former MLB right hander Bobby Witt. Selected to play in the 2018 Perfect Game
                                                        All-American Classic.
                                                    </p>

                                                </div>
                                                <div class="ContentPlaceHolder1">
                                                    <h3 class="pg-heading">CAREER PROGRESSION</h3>
                                                    <div class="flex__wrapper-three">
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour">   -.31 SEC </span> <br>
                                                            60 TIME SINCE 06/12/2017
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour"> +4 MPH </span><br>
                                                            IF VELO SINCE 08/15/2016
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour"> +7 MPH</span> <br>
                                                            EXIT VELO SINCE 08/15/2016
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour">  +9.92 Gs</span> <br>
                                                            DK MA SINCE 06/12/2017
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-4">
                                                        <a href="#">VIEW PROGRESSION CHARTS</a>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </section>
                                        <section>
                                        <!-- <div class="container"> -->
                                            <div class="mb-wrapper">
                                                <h3 class="pg-heading">PERCENTILE RANKINGS</h3>
                                                <p> CLASS OF 2019 in the recorded year</p>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ContentPlaceHolder12"></div>
                                        <!-- </div> -->
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                        16 Events/Reports
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="">
                                        <div>
                                            <h2>EXIT VELO</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat quia esse
                                                cupiditate, labore eius, molestiae inventore pariatur consectetur enim
                                                consequuntur voluptas eos tenetur dolorem obcaecati amet sit quis incidunt
                                                atque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseThree">
                                        Stats
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="">
                                        <div>
                                            <strong class="text-uppercase">
                                                Season Statistics (Jan 1st - Dec 31st)
                                            </strong>
                                            <h5 class="my-2">
                                               Batting Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                              
                                            </div>
                                        </div>

                                        {{-- Pitch Stats --}}
                                        <div>
                                            <h5 class="my-5">
                                               Pitch Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                             
                                            </div>
                                        </div>

                                        <div>
                                            <h5 class="my-5">
                                               Fielding Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                      <section>
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="video-area">
                                          @if(!empty($player->player->player_video))
                                      <iframe class="responsive-iframe" width="100%" height="400px" src="{{ asset('frontend/player/' . $player->player->player_video ?? '')}}"></iframe>
                                      @else 
                                      <h3>No Player's Video found</h3>
                                      @endif

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        let teamState = @php echo "'".$p_state."'" @endphp;
    </script>
@endsection
