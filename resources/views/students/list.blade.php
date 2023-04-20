
@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Student List </h3>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Date Enrolled</th>
                                <th>Student No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Age</th>
                                <th>Birthdate</th>
                                <th>Grade Level</th>
                                <th>Strand</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if($student_list->count() > 0)
                                @foreach($student_list as $student)
                                  <tr>
                                      <td> {{ date('M, d Y',strtotime($student->created_at)) }} </td>
                                      <td> {{ $student->student_no }} </td>
                                      <td> {{ $student->first_name }} </td> 
                                      <td> {{ $student->last_name }} </td> 
                                      <td> {{ $student->middle_name }} </td> 
                                      <td> {{ $student->age }} </td> 
                                      <td> {{ $student->birth_date }} </td> 
                                      <td> {{ $student->grade_level }} </td> 
                                      <td> {{ $student->strand }} </td>


                                  </tr>
                                @endforeach
                              @else
                                <tr>
                                    <td colspan="9" align="center"> No Student Record Found. </td>
                                </tr>
                              @endif
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>
    </div>
@endsection
 