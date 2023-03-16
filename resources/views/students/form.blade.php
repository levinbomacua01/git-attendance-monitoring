<div class="row mb-3">

    <div class="col-md-6">

        <label for="student_no" class="col-form-label text-md-end">{{ __('Student No.') }}</label>

        <input id="student_no" type="text" class="form-control @error('student_no') is-invalid @enderror" name="student_no" value="{{ $generated_student_no }}" readonly autocomplete="student_no" autofocus>

        @error('student_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

</div>

<div class="row mb-3">

    <div class="col-md-4">

        <label for="first_name" class="col-form-label text-md-end">{{ __('First Name') }}</label>

        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="col-md-4">

        <label for="last_name" class="col-form-label text-md-end">{{ __('Last Name') }}</label>

        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

        @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="col-md-4">

        <label for="middle_name" class="col-form-label text-md-end">{{ __('Middle Name') }}</label>

        <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus>

        @error('middle_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>


</div>

<div class="row mb-3">

    <div class="col-md-6">

        <label for="age" class="col-form-label text-md-end">{{ __('Age') }}</label>

        <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>

        @error('age')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="col-md-6">

        <label for="birthdate" class="col-form-label text-md-end">{{ __('Birthdate') }}</label>

        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>

        @error('birthdate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>


</div>


<div class="row mb-3">

    <div class="col-md-6">

        <label for="grade_level" class="col-form-label text-md-end">{{ __('Grade Level') }}</label>

       <select class="form-control @error('grade_level') is-invalid @enderror" name="grade_level"  required autocomplete="grade_level" autofocus>
           <option>-- Please select Grade Level --</option>
           <option value="G11"> {{ __('Grade 11') }} </option>
           <option value="G12"> {{ __('Grade 12') }} </option>
       </select>

        @error('grade_level')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>

    <div class="col-md-6">

        <label for="strand" class="col-form-label text-md-end">{{ __('Strand') }}</label>

        <select class="form-control @error('strand') is-invalid @enderror" name="strand"  required autocomplete="strand" autofocus>
           <option>-- Please select Strand Level --</option>
           <option value="STEM"> {{ __('STEM') }} </option>
           <option value="GAS"> {{ __('GAS') }} </option>
           <option value="HUMSS"> {{ __('HUMSS') }} </option>
           <option value="ABM"> {{ __('ABM') }} </option>
           <option value="TVL"> {{ __('TVL') }} </option>
       </select>

        @error('strand')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>


</div>



